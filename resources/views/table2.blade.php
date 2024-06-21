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
    </style>
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
</head>
<body>
  <form >
    @csrf
<input type="submit" formmethod="POST" formaction="{{ route('clear') }}" value="clear">
</form>
<div>
    {{-- <a href="choix/export">Export Data</a> --}}
</div>
<form method="POST" action="{{ route('export') }}" >
  @csrf
  <label for="entriesInput">Entries:</label>
  <input type="text" id="entriesInput" placeholder="Enter a number" name="candidates_number" class="form-control form-control-sm" style="width: 70px;">

    <div>
      <label for="nom_f1">nom_f1:</label>
      <input type="number" class="nom_f1" name='nom_f1' min="0" value="6">
    </div>
    <div>
      <label for="nom_f2">nom_f2:</label>
      <input type="number" class="nom_f2" name='nom_f2' min="0" value="6" >
    </div>
    <div>
      <label for="nom_f3">nom_f3:</label>
      <input type="number" class="nom_f3" name='nom_f3' min="0" value="6">
    </div>
    <div>
      <label for="nom_f4">nom_f4:</label>
      <input type="number" class="nom_f4" name='nom_f4' min="0" value="6">
    </div>
    <div>
      <label for="nom_f5">nom_f5:</label>
      <input type="number" class="nom_f5" name='nom_f5' min="0" value="6">
    </div>
    <div>
      <label for="nom_f6">nom_f6:</label>
      <input type="number" class="nom_f6" name='nom_f6' min="0" value="6">
    </div>
    <div>
      <label for="nom_f7">nom_f7:</label>
      <input type="number" class="nom_f7" name='nom_f7' min="0" value="6">
    </div>
    <div>
      <label for="nom_f8">nom_f8:</label>
      <input type="number" class="nom_f8" name='nom_f8' min="0" value="6">
    </div>
    <div>
      <label for="nom_f9">nom_f9:</label>
      <input type="number" class="nom_f9" name='nom_f9' min="0" value="6">
    </div>

    <!-- Add more inputs for other fields -->
    <button type="submit">submit controller</button>
  </form>
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
</body>
</html>
