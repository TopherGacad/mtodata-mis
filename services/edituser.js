const seePassCheckbox = document.getElementById("see-pass");
const passwordInput = document.getElementById("user-pass");
const confirmPassInput = document.getElementById("user-confirmPass");

seePassCheckbox.addEventListener("change", function() {
    if (this.checked) {
        passwordInput.type = "text";
        confirmPassInput.type = "text";
    } else {
        passwordInput.type = "password";
        confirmPassInput.type = "password";
    }
});

// Function to display the success toast notification
function displayToast() {
const successToast = document.getElementById("toast-success");
successToast.style.display = "flex";
}

// Function to disable the update button if no changes are made
function disableUpdateButton() {
const updateBtn = document.getElementById("user-update");
const form = document.getElementById("user-form");

// Add event listener to form fields
form.addEventListener("input", function() {
const inputs = form.querySelectorAll("input, select");

let changesMade = false;

inputs.forEach(function(input) {
  if (input.defaultValue !== input.value) {
    changesMade = true;
  }
});

updateBtn.disabled = !changesMade;
});
}

// AJAX code to handle form submission
document.addEventListener("DOMContentLoaded", function() {
const form = document.getElementById("user-form");

form.addEventListener("submit", function(event) {
event.preventDefault(); // Prevent form submission

const formData = new FormData(form);
const xhr = new XMLHttpRequest();

xhr.open(form.method, form.action, true);
xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

xhr.onload = function() {
  if (xhr.status === 200) {
    displayToast(); // Display success toast notification
    setTimeout(function() {
      location.reload(); // Reload the page after a delay
    }, 3000); // Change the delay as per your preference
  } else {
    // Handle error case
    console.log("Error:", xhr.status, xhr.statusText);
  }
};

xhr.onerror = function() {
  // Handle error case
  console.log("Request failed");
};

xhr.send(formData);
});

disableUpdateButton(); // Disable update button if no changes made
});