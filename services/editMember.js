document.getElementById('mem-pic').addEventListener('change', function (e) {
    var file = e.target.files[0];
    var imageType = /^image\//;

    if (!file || !imageType.test(file.type)) {
        alert('Please select an image file.');
        return;
    }

    var reader = new FileReader();

    reader.onload = function (e) {
        document.getElementById('profileImage').src = e.target.result;
    };

    reader.readAsDataURL(file);
});


function toggle(me, other) {
    me.style.display = 'none';
    var otherElement = document.getElementById(other);
    otherElement.style.display = '';

    if (otherElement.tagName.toLowerCase() === 'select') {
        myValue = me.value;
        for (var n = 0; n < otherElement.options.length; n++) {
            if (otherElement.options[n].value === myValue) {
                otherElement.options[n].selected = true;
                break;
            }
        }
    } else {
        myValue = me.options[me.selectedIndex].value;
        otherElement.value = myValue;
    }
}

// Get the form, file upload input, and update button elements
const editForm = document.getElementById('edit-mem');
const fileInput = document.getElementById('mem-pic');
const updateButton = document.getElementById('member-update');

// Store the initial form data as a serialized string
const initialFormData = new FormData(editForm);

// Add event listener to the form
editForm.addEventListener('input', function () {
    // Serialize the current form data
    const currentFormData = new FormData(editForm);
    const currentDataString = Array.from(currentFormData.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

    // Check if the file upload field has changed
    const fileChanged = fileInput.files.length > 0;

    // Enable or disable the update button based on whether there are changes in the form or file upload
    updateButton.disabled = !hasChanged && !fileChanged;
});


function formatPattern(input) {

    // Remove non-alphanumeric characters
    var formattedInput = input.replace(/[^A-Za-z0-9]/g, '');

    // Apply input length limit
    var maxLength = 11; // Set your desired maximum length
    formattedInput = formattedInput.substring(0, maxLength);

    // Add hyphens in the desired pattern
    if (formattedInput.length > 3) {
        formattedInput = formattedInput.substring(0, 3) + '-' + formattedInput.substring(3);
    }
    if (formattedInput.length > 6) {
        formattedInput = formattedInput.substring(0, 6) + '-' + formattedInput.substring(6);
    }

    return formattedInput;
}

function handleInput() {
    var input = document.getElementById("mem-license");
    input.value = formatPattern(input.value);
}




