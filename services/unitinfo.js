//UNIT INFO SEARCH
const unitSearch = document.getElementById('unit-search');
const unitTableBody = document.getElementById('unit-table-body');

unitSearch.addEventListener('input', () => {
    const searchText = unitSearch.value.toLowerCase();

    for (let i = 0; i < unitTableBody.rows.length; i++) {
        const row = unitTableBody.rows[i];
        const unitId = row.cells[0].textContent.toLowerCase();
        const unitName = row.cells[1].textContent.toLowerCase();
        const bodyNum = row.cells[2].textContent.toLowerCase();
        const plateNum = row.cells[11].textContent.toLowerCase();
        const bodyColor = row.cells[12].textContent.toLowerCase();
        const district = row.cells[13].textContent.toLowerCase();


        if (
            unitId.includes(searchText) ||
            unitName.includes(searchText) ||
            bodyNum.includes(searchText) ||
            plateNum.includes(searchText) ||
            bodyColor.includes(searchText) ||
            district.includes(searchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});