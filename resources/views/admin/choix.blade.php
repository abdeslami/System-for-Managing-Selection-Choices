<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
</head>
<body>
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

<table style="width:100%">
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



</body>
</html>
