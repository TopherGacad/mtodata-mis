document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === 'true') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Complaint updated.`;
        console.log("TEST SUCCESS");
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const complaintID = urlParams.get('id');

    if (complaintID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$complaintID');
    }
};

// Get the form and update button elements
const editForm = document.getElementById('form-complaint');
const updateButton = document.getElementById('complaint-update');

// Store the initial form data as a serialized string
const initialFormData = new FormData(editForm);

// Add event listener to the form
editForm.addEventListener('input', function() {
    // Serialize the current form data
    const currentFormData = new FormData(editForm);
    const currentDataString = Array.from(currentFormData.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

    // Enable or disable the update button based on whether the values have changed
    updateButton.disabled = !hasChanged;
    console.log('Button has been enabled for Complaint');
});

