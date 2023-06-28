// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    if (success === 'true') {
        const toastContainer = document.getElementById('toast-success');
        const toastMessage = document.getElementById('success-con');

        toastContainer.style.visibility = 'visible';
        toastMessage.textContent = 'Update Successful';

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }
});