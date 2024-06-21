<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
    <style>
        #nom_f1{
      background-color: green ;
    }
    #nom_f2{
      background-color: yellow;
    }
    #nom_f3{
      background-color: red;
    }
    #nom_f4{
      background-color: royalblue;
    }
    #nom_f5{
      background-color: brown;
    }
    #nom_f6{
      background-color: orange;
    }
    #nom_f7{
      background-color: yellowgreen;
    }
    #nom_f8{
      background-color: crimson ;
    }
    #nom_f9{
      background-color: aqua;
    }
    </style>
</head>
<body>
<div>
{{--     <a href="choix/export">Export Data</a>
 --}}    <label for="entriesInput">Entries:</label>
    <input type="text" id="entriesInput" placeholder="Enter a number" class="form-control form-control-sm" style="width: 70px;">
</div>
<div id="fields">
    <div>
      <label for="nom_f1">nom_f1:</label>
      <input type="number" id="nom_f1" min="0" value="6">
    </div>
    <div>
      <label for="nom_f2">nom_f2:</label>
      <input type="number" id="nom_f2" min="0" value="6" >
    </div>
    <div>
      <label for="nom_f3">nom_f3:</label>
      <input type="number" id="nom_f3" min="0" value="6">
    </div>
    <div>
      <label for="nom_f4">nom_f4:</label>
      <input type="number" id="nom_f4" min="0" value="6">
    </div>
    <div>
      <label for="nom_f5">nom_f5:</label>
      <input type="number" id="nom_f5" min="0" value="6">
    </div>
    <div>
      <label for="nom_f6">nom_f6:</label>
      <input type="number" id="nom_f6" min="0" value="6">
    </div>
    <div>
      <label for="nom_f7">nom_f7:</label>
      <input type="number" id="nom_f7" min="0" value="6">
    </div>
    <div>
      <label for="nom_f8">nom_f8:</label>
      <input type="number" id="nom_f8" min="0" value="6">
    </div>
    <div>
      <label for="nom_f9">nom_f9:</label>
      <input type="number" id="nom_f9" min="0" value="6">
    </div>

    <!-- Add more inputs for other fields -->
  </div>
<table id="choix_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
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
            <td class="choice" id>{{ $user->choix_1 }}</td>
            <td class="choice">{{ $user->choix_2 }}</td>
            <td class="choice">{{ $user->choix_3 }}</td>
            <td class="choice">{{ $user->choix_4 }}</td>
            <td class="choice">{{ $user->choix_5 }}</td>
            <td class="choice">{{ $user->choix_6 }}</td>
            <td class="choice">{{ $user->choix_7 }}</td>
            <td class="choice">{{ $user->choix_8 }}</td>
            <td class="choice">{{ $user->choix_9 }}</td>
            <!-- Add more columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>
<button id="exportButton">js export</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
{{-- JS EXPORT --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
<script>
    document.getElementById('exportButton').addEventListener('click', function() {
      exportTableToExcel('dataTable.xlsx');
    });
    
    function exportTableToExcel(filename) {
  var wb = XLSX.utils.book_new();
  var ws = XLSX.utils.table_to_sheet(document.getElementById('choix_table'));

  // Apply background colors to the Excel sheet
  var backgroundColors = [];
  var cellCount = 0;

  // Loop through visible cells and store their background colors
  $('#choix_table tbody tr:visible td').each(function() {
    backgroundColors.push($(this).css('background-color'));
    cellCount++;
  });

  console.log("Total number of cells:", cellCount);

  backgroundColors.forEach(function(color, index) {
    var cellAddress = XLSX.utils.encode_cell({ r: Math.floor(index / 10) + 1, c: index % 10 }); // Adjusted for 10 columns
    if (ws[cellAddress]) {
      ws[cellAddress].s = { fill: { fgColor: { rgb: color } } };
    } else {
      console.error("Cell not found:", cellAddress);
    }
  });

  XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
  XLSX.writeFile(wb, filename);
}
    </script>
{{-- JS EXPORT FINISH --}}
<script>
    $(document).ready(function() {
        var table = $('#choix_table').DataTable({
            // Your DataTable configuration options here
            dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Export Excel',
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="B"]', sheet).each(function () {
                        // Get the background color of the cell
                        var color = $(this).css('background-color');
                        if (color !== "rgba(0, 0, 0, 0)") { // Check if color is not transparent
                            $(this).attr('s', '52'); // Set cell style to include background color
                            $('fill', this).attr('rgb', color); // Set fill color of the cell
                        }
                    });
                }
            }
        ],
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
<button id="assignButton">Assign Fields</button>


  <script>
    $(document).ready(function() {
        // Function to assign fields to candidates
        function assignFields() {
            $('#choix_table tr').each(function() {
                var candidate = $(this);
                var choices = candidate.find('.choice');
                var count = 0;
                //a bit of optimization
                if(candidate.is(':visible')){
                //check if already has 3 choices colored
                choices.each(function(index) {
                    
                    if ($(this).css("background-color") !== "rgba(0, 0, 0, 0)") {
                        count++
                    }

                })

                // Loop through each choice for the candidate
                choices.each(function(index) {
                    var choice = $(this);
                    // Check if the choice is empty and the candidate doesn't have three choices yet

                    if (choice.css("background-color") === "rgba(0, 0, 0, 0)" && count < 3) {
                        // Loop through each field input
                        $('#fields input').each(function() {
                            var field = $(this);
                            var fieldName = field.attr('id');
                            var availablePlaces = parseInt(field.val());

                            // If there are available places for the field, assign it to the candidate
                            
                            if ( availablePlaces > 0 && fieldName == choice.text()) {
                                choice.css("background-color", field.css("background-color")); // Reset background color
                                field.val(availablePlaces - 1);
                                count++;
                                return false; // Exit the loop
                            }
                        });
                    }

                });
            }

            });
        }

        // Attach click event handler to the button
        $('#assignButton').click(function() {
            assignFields();
        });
    });
</script>

{{--     <form action="{{ route('export') }}" method="post">
        @csrf
        <div>
            <label for="candidates_number">nombre des candidates:</label>
            <input type="number" name="candidates_number" id="candidates_number">
        </div>
        <div>
            <label for="nom_f1">nom_f1:</label>
            <input type="number" name="nom_f1" id="nom_f1">
        </div>
        <div>
            <label for="nom_f2">nom_f2:</label>
            <input type="number" name="nom_f2" id="nom_f2">
        </div>
        <div>
            <label for="nom_f3">nom_f3:</label>
            <input type="number" name="nom_f3" id="nom_f3">
        </div>
        <div>
            <label for="nom_f4">nom_f4:</label>
            <input type="number" name="nom_f4" id="nom_f4">
        </div>
        <div>
            <label for="nom_f5">nom_f5:</label>
            <input type="number" name="nom_f5" id="nom_f5">
        </div>
        <div>
            <label for="nom_f6">nom_f6:</label>
            <input type="number" name="nom_f6" id="nom_f6">
        </div>
        <div>
            <label for="nom_f7">nom_f7:</label>
            <input type="number" name="nom_f7" id="nom_f7">
        </div>
        <div>
            <label for="nom_f8">nom_f8:</label>
            <input type="number" name="nom_f8" id="nom_f8">
        </div>
        <div>
            <label for="nom_f9">nom_f9:</label>
            <input type="number" name="nom_f9" id="nom_f9">
        </div>
        <input type="submit" value="Submit">
        <input type="reset" value="reset">
    </form> --}}
</body>
</html>
