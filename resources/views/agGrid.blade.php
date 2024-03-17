<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js"></script>

  <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-grid.css" />

<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">      </head>
<body>
  <div class="example-wrapper">
    <div class="example-header">
      <span>Quick Filter:</span>
      <input type="text" id="filter-text-box" placeholder="Filter..." oninput="onFilterTextBoxChanged()">
      </div>
      <div id="myGrid" class="ag-theme-quartz" style="height: 500px;">
      </div>
    </div>


    <div class="mb-3">
      <label for="" class="form-label">nom</label>
      <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder=""
      />
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    
  <script>
        function fetchDataFromBackend() {
      return fetch('/users') // Assuming you have a route to retrieve products data
        .then(response => response.json())
        .catch(error => console.error('Error fetching data:', error));
    }
    let gridApi;

    class CustomButtonComponent {
  constructor() {
    this.eGui = document.createElement("div");
    this.eButton = document.createElement("button");
    this.eButton.className = "btn btn-sm btn-danger";
    this.eButton.innerText = "Push Me!";
    this.eventListener = this.onClick.bind(this);
    this.eButton.addEventListener("click", this.eventListener);
    this.eGui.appendChild(this.eButton);
  }

  init(params) {}

  getGui() {
    return this.eGui;
  }

  refresh(params) {
    return true;
  }

  destroy() {
    if (this.eButton) {
      this.eButton.removeEventListener("click", this.eventListener);
    }
  }

  onClick() {
    alert("clicked");
  }
}

document.addEventListener('DOMContentLoaded', function () {
      const myGrid = document.getElementById("myGrid");

      const gridOptions = {
        columnDefs: [
          { field: "name" },
          { field: "email" },
          { field: "role" },
          { field: "actions", cellRenderer: CustomButtonComponent }
        ],
        defaultColDef: {
          filter: 'agNumberColumnFilter',
          flex: 1,
          minWidth: 200,
          floatingFilter: true,
        },
        rowHeight: 45,
      };

      // Create ag-Grid
      gridApi = agGrid.createGrid(myGrid, gridOptions);

      // Fetch data from Laravel backend and populate ag-Grid table
      fetchDataFromBackend().then(data => {
        gridApi.setRowData(data);
      });

      function onFilterTextBoxChanged() {
        gridApi.setGridOption(
          'quickFilterText',
          document.getElementById('filter-text-box').value
        );
      }
    });
  </script>
  
</body>
</html>