@extends("layouts.compte-layout")

@section("css/js links")
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/ag-grid/dist/styles/ag-grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />
    <!-- Load ag-Grid scripts -->
    <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
    <!-- Load Excel export module -->
    <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise/dist/ag-grid-enterprise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .inputupload {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px; 
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
        .ag-theme-quartz .ag-cell {
            padding: 2px;
        }
        .ag-theme-quartz .ag-header-cell {
            padding: 2px;
        }
        .ag-theme-quartz .ag-header-cell-filter, 
        .ag-theme-quartz .ag-header-cell-filter input {
            background-color: transparent !important;
            color: black !important;
        }
    </style>
@endsection

@section("content")
    <a class="mb-5" href="{{route('choix_candidatre')}}">liste choix</a>
    <div class="container p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{Session::get('success')}}</strong>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-warning" role="alert">
                <strong>{{Session::get('error')}}</strong>
            </div>
        @endif
        @error('candidature_excel')
            <div class="alert alert-warning" role="alert">
                <strong>{{$message}}</strong>
            </div>
        @enderror
        <div class="d-flex justify-content-between mb-2">
            <form id="changeEtatForm" method="POST">
                <input type="text" class="form-control-sm" name="" id="filter-text-box" oninput="onFilterTextBoxChanged()">
                @csrf
                <input type="hidden" id="selectedIds" name="ids">
                <input class="btn btn-success w-20" type="button" value="Changer État" id="changeetat">
                <input class="btn btn-danger w-20" type="button" value="Annuler État" id="annulerEtat">
            </form>
            <form id="uploadForm" action="{{ route('import_candidature_excel') }}" method="POST" enctype="multipart/form-data">
                <button type="button" class="btn btn-success w-20" id="exportButton">export</button>
                @csrf
                <label for="apply" class="btn btn-success w-20">
                    <input type="file" name="file" id="apply" class="inputupload" onchange="submitForm()"> Import candidature Excel note ecrite
                </label>
            </form>
            <script>
                function submitForm() {
                    document.getElementById('uploadForm').submit();
                }
            </script>
        </div>
        <div id="myGrid" class="ag-theme-quartz" style="height: 80vh; width: 100%;"></div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var columnDefs = [
            { headerCheckboxSelection: true, checkboxSelection: true, maxWidth: 50 }, 
            { headerName: 'ID', field: 'id', sortable: true, filter: 'agTextColumnFilter', maxWidth: 80 },
            { headerName: 'Nom', field: 'nom', sortable: true, filter: 'agTextColumnFilter', minWidth: 120 },
            { headerName: 'Prenom', field: 'prenom', sortable: true, filter: 'agTextColumnFilter', minWidth: 120 },
            { headerName: 'Sexe', field: 'sexe', sortable: true, filter: 'agTextColumnFilter', maxWidth: 80 },
            { headerName: 'CIN', field: 'cin', sortable: true, filter: 'agTextColumnFilter', minWidth: 100 },
            { headerName: 'Date Naissance', field: 'date_naissance', sortable: true, filter: 'agDateColumnFilter', minWidth: 130 },
            { headerName: 'Nationalité', field: 'nationalite', sortable: true, filter: 'agTextColumnFilter', minWidth: 120 },
            { headerName: 'Adresse', field: 'adresse', sortable: true, filter: 'agTextColumnFilter', minWidth: 150 },
            { headerName: 'Ville Natale', field: 'ville_natale', sortable: true, filter: 'agTextColumnFilter', minWidth: 130 },
            { headerName: 'Numéro de Téléphone', field: 'num_tel', sortable: true, filter: 'agTextColumnFilter', minWidth: 150 },
            { headerName: 'Mention Diplôme', field: 'diplome.mention_diplome', sortable: true, filter: 'agTextColumnFilter', minWidth: 150 },
            { headerName: 'Établissement', field: 'diplome.etablissement', sortable: true, filter: 'agTextColumnFilter', minWidth: 150 },
            { headerName: 'Note Écrite', field: 'note_ecrite', sortable: true, filter: 'agNumberColumnFilter', maxWidth: 100 },
            { headerName: 'État', field: 'etat', sortable: true, filter: 'agTextColumnFilter', maxWidth: 100 },
            { headerName: 'Scan Bac', field: 'diplome.scan_bac', sortable: true, filter: 'agTextColumnFilter', minWidth: 120 },
            { headerName: 'Date Bac', field: 'diplome.date_bac', sortable: true, filter: 'agDateColumnFilter', minWidth: 120 },
            { headerName: 'Type de Diplome', field: 'diplome.type_diplome', sortable: true, filter: 'agTextColumnFilter', minWidth: 150 },
            { headerName: 'Nom de Diplome', field: 'diplome.nom', sortable: true, filter: 'agTextColumnFilter', minWidth: 120 },
            { 
                headerName: 'All Documents', 
                field: 'id', 
                sortable: true, 
                filter: 'agTextColumnFilter',
                cellRenderer: function(params) {
                    var id = params.value;
                    var url = "{{ route('Showdocumentcandidature', ['id' => 'ID']) }}";
                    url = url.replace('ID', id);
                    return '<a href="' + url + '">Voir le document</a>';
                },
                minWidth: 120
            }
        ];

        function fetchDataFromBackend() {
            return fetch('/azertyuilkjhgfdsqsdfghjkjhgfdsqqjkjhgf4744fdfddffghsdfghsqSDFGHJYQSDFGHJQSDFGHJKIQSDFGHJKIGSDFGHJKLSDFGHJKJSDFJHGF515548548551')
                .then(response => response.json())
                .catch(error => console.error('Error fetching data:', error));
        }

        fetchDataFromBackend().then(userData => {
            var gridOptions = {
                columnDefs: columnDefs,
                rowData: userData,
                rowSelection: 'multiple',
                suppressRowClickSelection: true,
                modules: ['@ag-grid-community/excel-export'],
                defaultColDef: {
                    filter: true,
                    floatingFilter: true,
                    flex: 1,
                    minWidth: 100,
                    sortable: true,
                    sortingOrder: ['asc', 'desc']
                },
                rowHeight: 40,  // Reduced row height
                rowGroup: true, 
                autoGroupColumnDef: {
                    headerName: 'Group', 
                    field: 'fieldName'
                }
            };

            var eGridDiv = document.querySelector('#myGrid');
            new agGrid.Grid(eGridDiv, gridOptions);

            function exportSelectedRows() {
                var selectedRows = gridOptions.api.getSelectedRows();
                if (selectedRows.length > 0) {
                    var params = {
                        columnKeys: ['cin', 'nom', 'prenom', 'sexe', 'date_naissance', 'note_ecrite'],
                        allColumns: false,
                        fileName: 'selected_rows.xlsx',
                        sheetName: 'Selected Rows',
                        onlySelected: true
                    };
                    gridOptions.api.exportDataAsExcel(params);
                } else {
                    alert("No rows selected!");
                }
            }

            document.getElementById("exportButton").addEventListener("click", exportSelectedRows);

            function onFilterTextBoxChanged() {
                var gridApi = gridOptions.api;
                gridApi.setQuickFilter(document.getElementById('filter-text-box').value);
            }

            document.getElementById('filter-text-box').addEventListener('input', onFilterTextBoxChanged);

            function changeEtat() {
                var selectedIds = [];
                gridOptions.api.forEachNodeAfterFilter(node => {
                    if (node.isSelected()) {
                        selectedIds.push(node.data.id);
                    }
                });
                if (selectedIds.length > 0) {
                    var confirmation = confirm("Êtes-vous sûr de vouloir changer l'état des candidatures sélectionnées ?");
                    if (confirmation) {
                        document.getElementById('selectedIds').value = JSON.stringify(selectedIds);
                        document.getElementById('changeEtatForm').action = "/changer-etat-candidatures";
                        document.getElementById('changeEtatForm').submit();
                    }
                } else {
                    alert('Aucune ligne sélectionnée!');
                }
            }

            document.getElementById("changeetat").addEventListener("click", changeEtat);

            function confirmAnnulerEtat() {
                var selectedIds = [];
                gridOptions.api.forEachNodeAfterFilter(node => {
                    if (node.isSelected()) {
                        selectedIds.push(node.data.id);
                    }
                });
                if (selectedIds.length > 0) {
                    var confirmation = confirm("Êtes-vous sûr de vouloir annuler l'état des candidatures sélectionnées ?");
                    if (confirmation) {
                        document.getElementById('selectedIds').value = JSON.stringify(selectedIds);
                        document.getElementById('changeEtatForm').action = "/annulerEtat";
                        document.getElementById('changeEtatForm').submit();
                    }
                } else {
                    alert('Aucune ligne sélectionnée!');
                }
            }

            document.getElementById("annulerEtat").addEventListener("click", confirmAnnulerEtat);
        });
    });
</script>
