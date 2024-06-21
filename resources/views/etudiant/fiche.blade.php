<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin-inline: 5rem;
            padding: 1rem;

        }
        
       
       
        .body table tr td{
            padding: 15px;
        }
        .body table td+td{width: 20%
            
            }
       
    </style>

</head>
<body>
<div class="header" >
   <img src="images/header.jpeg" alt="logo" height="100px" width="100%">

</div>
<div class="header" >
<h4 style="border-bottom: 1px solid rgb(111, 95, 95);text-align:center; padding-top:1rem; height:2rem; ">REÇU DE CANDIDATURE : 2024/2025</h4>
</div>
<div class="body" >

   
    @isset($candidature)
        
  
    <table style="margin-left: 7rem;">
        <tr>
            <td>NOM :</td>
            <td></td> <td></td> <td></td> <td></td>

            <td> {{ $candidature->nom }}</td>
        </tr>
        <tr>
            <td>PRENOM :</td> 
             <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->prenom }}</td>
        </tr>        <tr>
            <td>DATE DE NAISSANCE :</td> 
             <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->date_naissance }}</td>
        </tr>

        <tr>
            <td>CIN :</td> 
             <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->cin }}</td>
        </tr>
        <tr>
            <td>ADRESSE :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td> {{ $candidature->cne_cme }}</td>
        </tr>
        <tr>
            <td>ADRESSE :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->adresse }}</td>
        </tr>
        <tr>
            <td>PAYS D'ORIGINE :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->nationalite }}</td>
        </tr>
        <tr>
            <td>N° TELEPHONE :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->num_tel }}</td>
        </tr>
        <tr>
            <td>DIPLOME :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->diplome->nom }}</td>
        </tr>
        <tr>
            <td>TYPE DE DIPLOME :</td> 
            <td></td> <td></td> <td></td> <td></td>

            <td>{{ $candidature->diplome->type_diplome }}</td>
        </tr>

  

    </table>
@endisset

    </div>

    
        <footer >
<h4 style="border-top: 2px solid rgb(111, 95, 95);text-align:center;"><img src="images/footer.jpeg" alt="logo" height="100px" width="100%">
</h4>

   
        </footer>    
    
</body>
</html>