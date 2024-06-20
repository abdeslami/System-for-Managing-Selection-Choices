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
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
        <style>
            .nom_f1{
          background-color: green ;
        }
        .nom_f2{
          background-color: yellow;
        }
        .nom_f3{
          background-color: red;
        }
        .nom_f4{
          background-color: royalblue;
        }
        .nom_f5{
          background-color: brown;
        }
        .nom_f6{
          background-color: orange;
        }
        .nom_f7{
          background-color: yellowgreen;
        }
        .nom_f8{
          background-color: gray ;
        }
        .nom_f9{
          background-color: aqua;
        }
        #choix_inputs input{
            width: 50px;
            opacity: 0.8;
            margin-inline: 5px;

        }
        #choix_inputs{
            display: flex;
            margin-bottom: 5px;
            
        }
        #nbr{
            margin-bottom: 5px;
        }
        </style>
    
@endsection
@section("content")

    @php
    $colors=[
      "nom_f1"=>"green",
      "nom_f2"=>"yellow",
      "nom_f3"=>"red",
      "nom_f4"=>"royalblue",
      "nom_f5"=>"brown",
      "nom_f6"=>"orange",
      "nom_f7"=>"yellowgreen",
      "nom_f8"=>"gray",
      "nom_f9"=>"aqua",
    ]
  @endphp

<form method="POST" id="nbr" action="{{ route('affecter_choix') }}" style="display: flex;flex-direction:column;">
  @csrf

    <div>
        <label for="entriesInput">Nombre des candidats:</label>
        <input type="text" id="entriesInput" placeholder="nbr..." name="candidates_number" class="form-control form-control-sm" style="width: 70px;">
    </div>
    <div id="choix_inputs">
    <div>
      <label for="nom_f1">nom_f1:</label>
      <input type="number" class="nom_f1 " name='nom_f1' min="0" value="{{ isset($available_places) ? $available_places['nom_f1'] : "0" }}">
    </div>
    <div>
      <label for="nom_f2">nom_f2:</label>
      <input type="number" class="nom_f2" name='nom_f2' min="0" value="{{ isset($available_places) ? $available_places['nom_f2'] : "0" }}" >
    </div>
    <div>
      <label for="nom_f3">nom_f3:</label>
      <input type="number" class="nom_f3" name='nom_f3' min="0" value="{{ isset($available_places) ? $available_places['nom_f3'] : "0" }}">
    </div>
    <div>
      <label for="nom_f4">nom_f4:</label>
      <input type="number" class="nom_f4" name='nom_f4' min="0" value="{{ isset($available_places) ? $available_places['nom_f4'] : "0" }}">
    </div>
    <div>
      <label for="nom_f5">nom_f5:</label>
      <input type="number" class="nom_f5" name='nom_f5' min="0" value="{{ isset($available_places) ? $available_places['nom_f5'] : "0" }}">
    </div>
    <div>
      <label for="nom_f6">nom_f6:</label>
      <input type="number" class="nom_f6" name='nom_f6' min="0" value="{{ isset($available_places) ? $available_places['nom_f6'] : "0" }}">
    </div>
    <div>
      <label for="nom_f7">nom_f7:</label>
      <input type="number" class="nom_f7" name='nom_f7' min="0" value="{{ isset($available_places) ? $available_places['nom_f7'] : "0" }}">
    </div>
    <div>
      <label for="nom_f8">nom_f8:</label>
      <input type="number" class="nom_f8" name='nom_f8' min="0" value="{{ isset($available_places) ? $available_places['nom_f8'] : "0" }}">
    </div>
    <div>
      <label for="nom_f9">nom_f9:</label>
      <input type="number" class="nom_f9" name='nom_f9' min="0" value="{{ isset($available_places) ? $available_places['nom_f9'] : 0 }}">
    </div>
</div>
    <button type="submit" class="btn btn-secondary">affecter des choix</button>
  </form>
  <form >@csrf<input type="submit" formmethod="POST" formaction="{{ route('clear') }}" value="clear" class="btn btn-warning">
  <input type="submit" formmethod="POST" formaction="{{ route('export') }}" value="export excel" class="btn btn-success"></form>

<table id="choix_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>candidat</th>
            <th>choix 1</th>
            <th>choix 2</th>
            <th>choix 3</th>
            <th>choix 4</th>
            <th>choix 5</th>
            <th>choix 6</th>
            <th>choix 7</th>
            <th>choix 8</th>
            <th>choix 9</th>
            <!-- Add more column headers as needed -->
        </tr>
    </thead>
    <tbody>
        <!-- Populate table rows dynamically with Laravel -->
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->candidature->nom }}</td>
            <td class="choice" style='background-color:{{ $user->choix_1==$user->slected_c1 || $user->choix_1==$user->slected_c2 || $user->choix_1==$user->slected_c3 ? $colors[$user->choix_1]:"" }};'>{{ $user->choix_1 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_2==$user->slected_c1 || $user->choix_2==$user->slected_c2 || $user->choix_2==$user->slected_c3 ? $colors[$user->choix_2]:"" }};'>{{ $user->choix_2 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_3==$user->slected_c1 || $user->choix_3==$user->slected_c2 || $user->choix_3==$user->slected_c3 ? $colors[$user->choix_3]:"" }};'>{{ $user->choix_3 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_4==$user->slected_c1 || $user->choix_4==$user->slected_c2 || $user->choix_4==$user->slected_c3 ? $colors[$user->choix_4]:"" }};'>{{ $user->choix_4 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_5==$user->slected_c1 || $user->choix_5==$user->slected_c2 || $user->choix_5==$user->slected_c3 ? $colors[$user->choix_5]:"" }};'>{{ $user->choix_5 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_6==$user->slected_c1 || $user->choix_6==$user->slected_c2 || $user->choix_6==$user->slected_c3 ? $colors[$user->choix_6]:"" }};'>{{ $user->choix_6 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_7==$user->slected_c1 || $user->choix_7==$user->slected_c2 || $user->choix_7==$user->slected_c3 ? $colors[$user->choix_7]:"" }};'>{{ $user->choix_7 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_8==$user->slected_c1 || $user->choix_8==$user->slected_c2 || $user->choix_8==$user->slected_c3 ? $colors[$user->choix_8]:"" }};'>{{ $user->choix_8 }}</td>
            <td class="choice" style='background-color:{{ $user->choix_9==$user->slected_c1 || $user->choix_9==$user->slected_c2 || $user->choix_9==$user->slected_c3 ? $colors[$user->choix_9]:"" }};'>{{ $user->choix_9 }}</td>
            <!-- Add more columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#choix_table').DataTable({

            scrollX: true,
            scrollY: 600,
            paging: false // Disable pagination
        });
        $('#entriesInput').on('input', function() {
    var entries = parseInt($(this).val()); // Get the entered value and parse it as an integer

    if (!isNaN(entries)) { // Check if the entered value is a valid number
        var displayedRows = table.rows({ search: 'applied' }).nodes(); // Get the displayed rows
        var totalRows = displayedRows.length;

        // Show rows up to the specified limit, hide the rest
        displayedRows.each(function(element,index) {


            if (index < entries) {
                console.log(element)

                $(element).show(); // Show the row if it's within the specified limit
            } else {

                $(element).hide(); // Hide the row if it exceeds the specified limit
            }
        });
    } else {
        // If the entered value is not a valid number or empty, show all rows
        console.log($(this))
        $(table.rows({ search: 'applied' }).nodes()).show();
    }
});


    });
</script>


@endsection
{{-- <a href="{{route('list_candidature')}}">liste candidature</a>


  
<h1 class="text-center">Table de Choix candidature</h1>
<button type="button" class="btn btn-success w-20 mb-2" id="exportButton1">Export Choix</button>
<div id="myGrid1" class="ag-theme-quartz" style="height: 80vh; width: 100%;"></div>
               
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function customCellRenderer(params) {
    // Customize the cell content and style as needed
    const cellValue = params.value;
    const cellElement = document.createElement('div');
    cellElement.textContent = cellValue;
    cellElement.style.backgroundColor = '#ffcc00'; // Set background color as desired
    return cellElement;
}
        var columnDefs = [
            { headerCheckboxSelection: true, checkboxSelection: true }, 
            { headerName: 'Nom', field: 'candidature.nom', sortable: true, filter: true, cellRenderer: customCellRenderer },
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
        var columnKeys = ['candidature.nom','choix_1', 'choix_2', 'choix_3', 'choix_4', 'choix_5', 'choix_6', 'choix_7', 'choix_8', 'choix_9'];

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
    <script src="{{ asset('page_admin_script/script.js') }}"></script> --}}