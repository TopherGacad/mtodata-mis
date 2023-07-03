const seePassCheckbox = document.getElementById("see-pass");
const passwordInput = document.getElementById("user-pass");
const confirmPassInput = document.getElementById("user-confirmPass");
const updateBtn = document.getElementById("user-update");
const form = document.getElementById("user-form");

// Function to display the success toast notification
function displayToast() {
  const successToast = document.getElementById("toast-success");
  successToast.style.display = "flex";
}

// Function to check if any changes are made in the form fields
function checkForChanges() {
  const inputs = form.querySelectorAll("input, select");
  let changesMade = false;

  inputs.forEach(function(input) {
    if (input.id === "user-pass") {
      // Skip checking the password input field
      return;
    }

    if (input.defaultValue !== input.value) {
      changesMade = true;
    }
  });

  const passwordChanged = passwordInput.defaultValue !== passwordInput.value;
  updateBtn.disabled = !changesMade || (seePassCheckbox.checked && !passwordChanged);
}

// Add event listener to form fields to detect changes
form.addEventListener("input", checkForChanges);

// Function to handle form submission
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

// Disable update button initially since there are no changes yet
updateBtn.disabled = true;

// Event listener for see password checkbox
seePassCheckbox.addEventListener("change", function() {
  if (this.checked) {
    passwordInput.type = "text";
    confirmPassInput.type = "text";
  } else {
    passwordInput.type = "password";
    confirmPassInput.type = "password";
  }

  checkForChanges(); // Call checkForChanges() when see password checkbox changes
});