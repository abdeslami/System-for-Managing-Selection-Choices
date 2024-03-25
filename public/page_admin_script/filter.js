function filter_rows() {
    var select = document.querySelector('.table-filter');
    var selectedRole = select.value.toLowerCase(); // Convert selected value to lowercase for case-insensitive comparison

    var rows = document.querySelectorAll('#emp-table tbody tr');

    rows.forEach(function(row) {
        var roleCell = row.querySelector('td:nth-child(3)'); // Select the cell containing role information
        var role = roleCell.textContent.trim().toLowerCase(); // Get the role text and convert to lowercase

        if (selectedRole === 'all' || role === selectedRole) {
            row.style.display = ''; // Show the row
        } else {
            row.style.display = 'none'; // Hide the row
        }
    });
}

var selectElement = document.querySelector('.table-filter');
if (selectElement) {
    selectElement.addEventListener('change', filter_rows);
}

filter_rows();