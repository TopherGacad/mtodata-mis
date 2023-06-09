//DONOR INFO SEARCH
const donorSearch = document.getElementById('donor-search');
const donorTableBody = document.getElementById('donor-table-body');

donorSearch.addEventListener('input', () => {
    const donorSearchText = donorSearch.value.toLowerCase();

    for (let i = 0; i < donorTableBody.rows.length; i++) {
        const row = donorTableBody.rows[i];
        const donorId = row.cells[0].textContent.toLowerCase();
        const donorName = row.cells[1].textContent.toLowerCase();
        const donorGender = row.cells[2].textContent.toLowerCase();
        const donorNum = row.cells[3].textContent.toLowerCase();
        const donorEmail = row.cells[4].textContent.toLowerCase();


        if (
            donorId.includes(donorSearchText) ||
            donorName.includes(donorSearchText) ||
            donorGender.includes(donorSearchText) ||
            donorNum.includes(donorSearchText) ||
            donorEmail.includes(donorSearchText)
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
    const success = urlParams.get('success');

    if (success === 'true') {
        const toastContainer = document.getElementById('toast-success');
        const toastMessage = document.getElementById('success-con');

        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> donor information added.`;

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }
});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const memberID = urlParams.get('id');

    if (memberID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$memberID');
    }
}; 