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
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <td class="choice"></td>
      <!-- Add more choice columns if needed -->
    </tr>
    <!-- Add more rows for other candidates -->
  </table>
  
  <div id="fields">
    <div>
      <label for="field1">Field 1:</label>
      <input type="number" id="field1" min="0" value="6">
    </div>
    <div>
      <label for="field2">Field 2:</label>
      <input type="number" id="field2" min="0" value="3">
    </div>
    <!-- Add more inputs for other fields -->
  </div>
  


  <script>
    $(document).ready(function() {
  // Assign fields to candidates
  $('#candidates tr').each(function() {
    var candidate = $(this);
    var choices = candidate.find('.choice');
    var count = 0;

    // Loop through each choice for the candidate
    choices.each(function(index) {
      var choice = $(this);
      
      // Check if the choice is empty and the candidate doesn't have three choices yet
      if (choice.text() === "" && count < 3) {
        // Loop through each field input
        $('#fields input').each(function() {
          var field = $(this);
          var fieldName = field.attr('id');
          var availablePlaces = parseInt(field.val());

          // If there are available places for the field, assign it to the candidate
          if (availablePlaces > 0) {
            choice.text(fieldName);
            choice.css('background-color', 'white'); // Reset background color
            field.val(availablePlaces - 1);
            count++;
            return false; // Exit the loop
          }
        });
      }
    });
  });
});

  </script>
  
</body>
</html>
