// Get the form and update button elements
const editForm1 = document.getElementById('edit-donor');
const updateButton1 = document.getElementById('donor-update');

// Store the initial form data as a serialized string
const initialFormData1 = new FormData(editForm1);

// Add event listener to the form
editForm1.addEventListener('input', function () {
    // Serialize the current form data
    const currentFormData1 = new FormData(editForm1);
    const currentDataString1 = Array.from(currentFormData1.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged1 = currentDataString1 !== Array.from(initialFormData1.entries()).toString();

    // Enable or disable the update button based on whether the values have changed
    updateButton1.disabled = !hasChanged1;
    console.log('Button has been enabled hehe');
});

