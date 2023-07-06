// UNIT INFO SEARCH
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

// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const successParam = urlParams.get('success');
    const toastContainer = document.getElementById('toast-success');
    const toastMessage = document.getElementById('success-con');

    if (successParam === '0') {
        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Successful</strong> Unit information added.`;
        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    } 
    
    if (successParam === 'true') {
        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> donor information added.`;
        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    } 
    
    if (successParam === 'true-unit') {
        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated unit info.`;
        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }
});


window.onload = function () {
    if (window.location.search.includes("success")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const memberID = urlParams.get('id');

    if (memberID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log(memberID);
    }
}; 
