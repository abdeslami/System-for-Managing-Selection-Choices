@extends("layouts.compte-layout")

@section("css/js links")

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
    
        <link rel="stylesheet" href="https://unpkg.com/ag-grid/dist/styles/ag-grid.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />
        
        <!-- Load ag-Grid scripts -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
        <!-- Load Excel export module -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise/dist/ag-grid-enterprise.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
@endsection
@section("content")
<a href="{{route('list_candidature')}}">liste candidature</a>


  
<h1 class="text-center">Table de Choix candidature</h1>
<button type="button" class="btn btn-success w-20 mb-2" id="exportButton1">Export Choix</button>
<div id="myGrid1" class="ag-theme-quartz" style="height: 80vh; width: 100%;"></div>
               
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var columnDefs = [
            { headerCheckboxSelection: true, checkboxSelection: true }, 
            { headerName: 'Nom', field: 'candidature.nom', sortable: true, filter: true },
            { headerName: 'Prenom', field: 'candidature.prenom', sortable: true, filter: true },
            { headerName: 'Sexe', field: 'candidature.sexe', sortable: true, filter: true },
            { headerName: 'CIN', field: 'candidature.cin', sortable: true, filter: true },
            { headerName: 'date_naissance', field: 'candidature.date_naissance', sortable: true, filter: true }, 
            { headerName: 'note_ecrite', field: 'candidature.note_ecrite', sortable: true, filter: true },
            { headerName: 'Merite', field: 'candidature.merite', sortable: true, filter: true },
            { headerName: 'choix_1', field: 'choix_1', sortable: true, filter: true },
            { headerName: 'choix_2', field: 'choix_2', sortable: true, filter: true },
            { headerName: 'choix_3', field: 'choix_3', sortable: true, filter: true },
            { headerName: 'choix_4', field: 'choix_4', sortable: true, filter: true },
            { headerName: 'choix_5', field: 'choix_5', sortable: true, filter: true },
            { headerName: 'choix_6', field: 'choix_6', sortable: true, filter: true },
            { headerName: 'choix_7', field: 'choix_7', sortable: true, filter: true },
            { headerName: 'choix_8', field: 'choix_8', sortable: true, filter: true },
            { headerName: 'choix_9', field: 'choix_9', sortable: true, filter: true },
        ];

        function fetchDataFromBackend() {
            return fetch('/azertyuilkjhgfdsqsdfghjkjhgfdsqqjkjhgf4744fdfddffghsdfghsqSDFGHJYQSDFGHJQSDFGHJKIQSDFGHJKIGSDFGHJKLSDFGHJKJSDFJHGF515548548552')
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
       filter: 'agTextColumnFilter',
          flex: 1,
          minWidth: 200,
          floatingFilter: true,

        sortable: true,
        sortingOrder: ['asc', 'desc'], 
        filter: true 
    },
    rowHeight:170,
    rowGroup: true, 
    autoGroupColumnDef: {
        headerName: 'Group', 
        field: 'fieldName'
    },
        
                
                
            };

            var eGridDiv = document.querySelector('#myGrid1');

            new agGrid.Grid(eGridDiv, gridOptions);
            function exportSelectedRows() {
    var selectedRows = gridOptions.api.getSelectedRows();
    if (selectedRows.length > 0) {
        var columnKeys = ['candidature.cin', 'candidature.nom', 'candidature.prenom', 'candidature.sexe', 'candidature.date_naissance', 'candidature.note_ecrite', 'candidature.merite', 'choix_1', 'choix_2', 'choix_3', 'choix_4', 'choix_5', 'choix_6', 'choix_7', 'choix_8', 'choix_9'];

        // Define export parameters
        var params = {
            columnKeys: columnKeys,
            allColumns: false,
            fileName: 'selected_rows.xlsx',
            sheetName: 'Selected Rows',
            onlySelected: true
        };

        // Export selected rows as Excel
        gridOptions.api.exportDataAsExcel(params);
    } else {
        alert("No rows selected!");
    }
}


            document.getElementById("exportButton1").addEventListener("click", exportSelectedRows);

            function onFilterTextBoxChanged() {
                var gridApi = gridOptions.api;
                gridApi.setQuickFilter(document.getElementById('filter-text-box').value);
            }

            document.getElementById('filter-text-box').addEventListener('input', onFilterTextBoxChanged);
        });
    });
</script>
                              
            
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{ asset('page_admin_script/script.js') }}"></script>
@endsection
