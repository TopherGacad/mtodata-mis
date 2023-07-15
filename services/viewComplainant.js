//COMPLAINTANT SEARCH
const compSearchBar = document.getElementById('complainant-search')
const compTableBody = document.getElementById('complainant-table-body')

compSearchBar.addEventListener('input', () => {
    const compSearchText = compSearchBar.value.toLowerCase();

    for (let i = 0; i < compTableBody.rows.length; i++) {
        const row = compTableBody.rows[i];
        const compId = row.cells[0].textContent.toLowerCase();
        const compName = row.cells[1].textContent.toLowerCase();
        const compGender = row.cells[2].textContent.toLowerCase();
        const compPhone = row.cells[3].textContent.toLowerCase();
        if (
            compId.includes(compSearchText) ||
            compName.includes(compSearchText) ||
            compGender.includes(compSearchText) ||
            compPhone.includes(compSearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});