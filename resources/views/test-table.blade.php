<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Random Color Table</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

{{-- <table>
    <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 1</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 2</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 3</td>
        </tr>
        <tr>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 4</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 5</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 6</td>
        </tr>
        <tr>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 7</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 8</td>
            <td style="background-color: #<?php /* echo substr(md5(rand()), 0, 6); */ ?>">Data 9</td>
        </tr>
    </tbody>
</table>

<a href="choix/export">Export Data</a> --}}

<table id="candidates">
    <tr>
      <th>Candidate</th>
      <th>Choice 1</th>
      <th>Choice 2</th>
      <th>Choice 3</th>
      <th>Choice 4</th>
      <th>Choice 5</th>
      <th>Choice 6</th>
      <th>Choice 7</th>
      <th>Choice 8</th>
      <th>Choice 9</th>
      <!-- Add more choice columns if needed -->
    </tr>
    <tr>
      <td>candidat1</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f1</td>
    </tr>
    <tr>
      <td>candidat2</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f4</td>
    </tr>
    <tr>
      <td>candidat3</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f2</td>
    </tr>
    <tr>
      <td>candidat4</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f2</td>
    </tr>
    <tr>
      <td>candidat5</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f3</td>
    </tr>
    <tr>
      <td>candidat6</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f3</td>
    </tr>
    <tr>
      <td>candidat7</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f1</td>
    </tr>
    <tr>
      <td>candidat8</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f8</td>
    </tr>
    <tr>
      <td>candidat9</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f2</td>
    </tr>
    <tr>
      <td>candidat10</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f6</td>
    </tr>
    <tr>
      <td>candidat11</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f4</td>
    </tr>
    <tr>
      <td>candidat12</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f2</td>
    </tr>
    <tr>
      <td>candidat13</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f1</td>
    </tr>
    <tr>
      <td>candidat14</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f2</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f6</td>
    </tr>
    <tr>
      <td>candidat15</td>
      <td class="choice">nom_f1</td>
      <td class="choice">nom_f6</td>
      <td class="choice">nom_f3</td>
      <td class="choice">nom_f5</td>
      <td class="choice">nom_f7</td>
      <td class="choice">nom_f4</td>
      <td class="choice">nom_f8</td>
      <td class="choice">nom_f9</td>
      <td class="choice">nom_f2</td>
    </tr>
    <!-- Add more rows for other candidates -->
  </table>
  
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
  <button id="assignButton">Assign Fields</button>


  <script>
    $(document).ready(function() {
        // Function to assign fields to candidates
        function assignFields() {
            $('#candidates tr').each(function() {
                var candidate = $(this);
                var choices = candidate.find('.choice');
                var count = 0;

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
                            if (availablePlaces > 0 && fieldName == choice.text()) {
                                choice.css("background-color", field.css("background-color")); // Reset background color
                                field.val(availablePlaces - 1);
                                count++;
                                return false; // Exit the loop
                            }
                        });
                    }
                });
            });
        }

        // Attach click event handler to the button
        $('#assignButton').click(function() {
            assignFields();
        });
    });
</script>

  </script>
  
</body>
</html>
