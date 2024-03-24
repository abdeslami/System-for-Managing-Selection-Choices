




<table id="emp-table" class="table table-striped table-hover table-responsive w-100 ">
    <thead>
        <th col-index = 1>CIN</th>
        <th col-index = 2>Role:
            <select class="table-filter form-select" onchange="filter_rows()">
                <option value="all"></option>
            </select>
        </th>

        <th col-index = 3>NOM Prenom:
            <select class="table-filter form-select" onchange="filter_rows()">
                <option value="all"></option>
            </select>
        </th>
        <th col-index = 4>date:
            <select class="table-filter form-select" onchange="filter_rows()">
                <option value="all"></option>
            </select>
        </th>
        <th col-index = 5>Filiere:
            <select class="table-filter form-select" onchange="filter_rows()">
                <option value="all"></option>
            </select>
        </th>
        <th>
            Action
        </th>
        
        
    </thead>
   
    <tbody>
        <tr>
            <td>H4656261</td>
            <td>Administrateur</td>
            <td>assia sila</td>
            <td>2023-02-25</td>
            <td>A</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>user</td>
            <td>achraf sila</td>
            <td>2022-02-25</td>
            <td>b</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>prof</td>
            <td>bouchrour z.</td>
            <td>2021-02-25</td>
            <td>0</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>prof</td>
            <td>zrouri sila</td>
            <td>2022-01-25</td>
            <td>c</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>Administrateur</td>
            <td>mouad sila</td>
            <td>2029-02-25</td>
            <td>A</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>user</td>
            <td>assia sila</td>
            <td>2020-02-25</td>
            <td>A</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>user</td>
            <td>siham sila</td>
            <td>2023-02-25</td>
            <td>A</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>
        <tr>
            <td>H4656261</td>
            <td>user</td>
            <td>ayoub sila</td>
            <td>2023-02-25</td>
            <td>d</td>
           
            <td>
                <button class="btn btn-danger">supprimer</button>
                <button class="btn btn-danger">modifier</button>

            </td>
        </tr>


       

      
    
    </tbody>
</table>
<!-- <script>getUniqueValuesFromColumn()
</script> -->
<script>
    window.onload = () => {
        console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn()
    
</script>