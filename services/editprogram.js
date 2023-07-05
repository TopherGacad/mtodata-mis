document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === 'true') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Events & Programs updated.`;
        console.log("dapat lumabas ako");
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const programID = urlParams.get('id');

    if (programID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$programID');
    }
};