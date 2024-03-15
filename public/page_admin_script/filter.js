window.onload = () => {
    getUniqueValuesFromColumn();
};

function getUniqueValuesFromColumn() {
    var unique_col_values_dict = {};

    const allFilters = document.querySelectorAll(".table-filter");
    allFilters.forEach((filter_i) => {
        const col_index = filter_i.parentElement.getAttribute("col-index");
        const rows = document.querySelectorAll("#emp-table > tbody > tr");
        rows.forEach((row) => {
            const cell_value = row.querySelector("td:nth-child(" + col_index   + ")").innerHTML.trim();
            if (col_index in unique_col_values_dict) {
                if (!unique_col_values_dict[col_index].includes(cell_value)) {
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
            const row_cell_value = row.querySelector("td:nth-child(" + col_i  + ")").innerHTML.trim();

            if (!row_cell_value.includes(filter_value) && filter_value !== "all") {
                display_row = false;
                break;
            }
        }

        row.style.display = display_row ? "table-row" : "none";
    });
}