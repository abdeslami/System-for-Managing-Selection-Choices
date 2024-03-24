
    window.onload = () => {
        getUniqueValuesFromColumn();
        populateSortSelect();
        sortTable(); 
    };

    function getUniqueValuesFromColumn() {
        var unique_col_values_dict = {};

        const allFilters = document.querySelectorAll(".table-filter");
        allFilters.forEach((filter_i) => {
            const col_index = filter_i.parentElement.getAttribute("col-index");
            const rows = document.querySelectorAll("#emp-table > tbody > tr");
            rows.forEach((row) => {
                const cell_value = row.querySelector("td:nth-child(" + col_index + ")").innerText.trim();
                if (col_index in unique_col_values_dict) {
                    if (!unique_col_values_dict[col_index].includes(cell_value) && cell_value !== "") {
                        unique_col_values_dict[col_index].push(cell_value);
                    }
                } else {
                    unique_col_values_dict[col_index] = [cell_value];
                }
            });
        });

        updateSelectOptions(unique_col_values_dict);
    }

    function updateSelectOptions(unique_col_values_dict) {
        const allFilters = document.querySelectorAll(".table-filter");
        allFilters.forEach((filter_i) => {
            const col_index = filter_i.parentElement.getAttribute("col-index");
            const options = unique_col_values_dict[col_index] || [];
            const optionsHTML = options.map((value) => `<option value="${value}">${value}</option>`).join("");
            filter_i.innerHTML = `<option value="all"></option>${optionsHTML}`;
        });
    }

    function filter_rows() {
        const allFilters = document.querySelectorAll(".table-filter");
        const filter_value_dict = {};

        allFilters.forEach((filter_i) => {
            const col_index = filter_i.parentElement.getAttribute("col-index");
            const value = filter_i.value;
            if (value !== "all") {
                filter_value_dict[col_index] = value;
            }
        });

        const rows = document.querySelectorAll("#emp-table tbody tr");
        rows.forEach((row) => {
            let display_row = true;

            for (const col_i in filter_value_dict) {
                const filter_value = filter_value_dict[col_i];
                const row_cell_value = row.querySelector("td:nth-child(" + col_i + ")").innerText.trim();

                if (!row_cell_value.includes(filter_value) && filter_value !== "all") {
                    display_row = false;
                    break;
                }
            }

            row.style.display = display_row ? "table-row" : "none";
        });
    }

    function sortTable() {
        const table = document.getElementById('emp-table');
        const columnIndex = 5; // Column index for "Date de Bac"

        const sortOrder = document.querySelector(".table-sort").value === 'asc' ? 1 : -1;

        const rows = Array.from(table.querySelectorAll('tbody tr'));
        rows.sort((a, b) => {
            const aValue = a.querySelector(`td:nth-child(${columnIndex})`).innerText.trim();
            const bValue = b.querySelector(`td:nth-child(${columnIndex})`).innerText.trim();
            return sortOrder * aValue.localeCompare(bValue);
        });

        const tbody = document.querySelector('#emp-table tbody');
        rows.forEach(row => tbody.appendChild(row));
    }

    function populateSortSelect() {
        const sortSelect = document.querySelector(".table-sort");
        const sortOptionsHTML = `
            <option value="asc">Asc</option>
            <option value="desc">Desc</option>
        `;
        sortSelect.innerHTML = sortOptionsHTML;
    }