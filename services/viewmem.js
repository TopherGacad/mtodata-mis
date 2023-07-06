// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');
    const toastContainer = document.getElementById('toast-success');
    const toastMessage = document.getElementById('success-con');

    if (success === 'true') {


        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated member info.`;

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }

    if (success === 'true%member') {

        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated donor info.`;

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