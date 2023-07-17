// MAIN CONTAINERS
const dashContain = document.getElementById("dash-container")
const userContain = document.getElementById("users-container")
const memContain = document.getElementById("member-container")
const financeContain = document.getElementById("finance-container")
const complainContain = document.getElementById("complain-container")
const EventContain = document.getElementById("event-container")

// SIDE-NAV BTN
const dashBtn = document.getElementById("dash-btn")
const memBtn = document.getElementById("member-btn")
const userBtn = document.getElementById("users-btn")
const financeBtn = document.getElementById("finance-btn")
const complainBtn = document.getElementById("complain-btn")
const programsBtn = document.getElementById("programs-btn")

//ADD BUTTONS
const adduserBtn = document.getElementById("addUser-btn")
const addmemBtn = document.getElementById("addmem-btn")
const addfinanceBtn = document.getElementById("addFinance-btn")
const addComplainBtn = document.getElementById("addComplain-btn")
const addEventBtn = document.getElementById("addEvent-btn")

// MODALS
const userModal = document.getElementById("user-modal-container")
const memberModal = document.getElementById("member-modal-container")
const financeModal = document.getElementById("finance-modal-container")
const complainModal = document.getElementById("complaint-modal-container")
const eventModal = document.getElementById("event-modal-container")

const modalBg = document.getElementById('bg')
const seePass = document.getElementById("see-pass")

// CANCEL BUTTONS
const userCancel = document.getElementById("adduser-cancel")
const memberCancel = document.getElementById("member-cancel")
const financeCancel = document.getElementById("finance-cancel")
const complaintCancel = document.getElementById("complaint-cancel")
const eventCancel = document.getElementById("event-cancel")

// FORM MODALS 
adduserBtn.addEventListener("click", function () {
    userModal.style.display = "flex"
    modalBg.style.display = "block"
})
addmemBtn.addEventListener("click", function () {
    memberModal.style.display = "flex"
    modalBg.style.display = "block"
})
addfinanceBtn.addEventListener("click", function () {
    financeModal.style.display = "flex"
    modalBg.style.display = "block"
})
addComplainBtn.addEventListener("click", function () {
    complainModal.style.display = "flex"
    modalBg.style.display = "block"
   
})
addEventBtn.addEventListener("click", function () {
    eventModal.style.display = "flex"
    modalBg.style.display = "block"
})


// USER TYPE DISABLE INPUTS
const selectType = document.getElementById("select-type")
const bodyNo = document.getElementById("body-no")
const donorName = document.getElementById("donor-select")
const expenseType = document.getElementById("expense-type")
const addDonor = document.getElementById("donorbtn")
const amountInput = document.getElementById("amount");
const transDate = document.getElementById("trans-date");
const rem = document.getElementById("remarks");
const today = new Date().toISOString().split('T')[0];

//DISABLE INPUTS FOR FINANCE
function disableInputs() {
    if (selectType.value === "Butaw") {
        bodyNo.disabled = false;
        donorName.disabled = true;
        expenseType.disabled = true;
        addDonor.disabled = true;
        amountInput.value = "10";
        amountInput.disabled = false;
        transDate.disabled = false;
        rem.disabled = true;

    } else if (selectType.value === "Donation") {
        bodyNo.disabled = true;
        donorName.disabled = false;
        expenseType.disabled = true;
        addDonor.disabled = false;
        amountInput.value = "";
        amountInput.disabled = false;
        transDate.disabled = true;
        rem.disabled = true;

    } else if (selectType.value === "Expenses") {
        bodyNo.disabled = true;
        donorName.disabled = true;
        expenseType.disabled = false;
        addDonor.disabled = true;
        amountInput.value = "";
        amountInput.disabled = false;
        transDate.disabled = false;
        rem.disabled = false;
    } else {
        bodyNo.disabled = true;
        donorName.disabled = true;
        expenseType.disabled = true;
        addDonor.disabled = true;
        amountInput.value = "";
        amountInput.disabled = true;
        transDate.disabled = true;
        rem.disabled = true;
    }

    if (selectType.value === "Butaw" || selectType.value === "Donation" || selectType.value === "Expenses") {
        transDate.max = today;
    } else {
        transDate.removeAttribute("max");
    }
}
disableInputs()

// CANCEL BUTTONS
userCancel.addEventListener("click", function () {
    document.getElementById("user-form").reset()
    userModal.style.display = "none"
    modalBg.style.display = "none"
})
memberCancel.addEventListener("click", function () {
    document.getElementById("member-form").reset()
    memberModal.style.display = "none"
    modalBg.style.display = "none"
})
financeCancel.addEventListener("click", function () {
    document.getElementById("finance-form").reset()
    financeModal.style.display = "none"
    modalBg.style.display = "none"
    bodyNo.disabled = true;
    donorName.disabled = true;
    expenseType.disabled = true;
    addDonor.disabled = true;
    amountInput.value = "";
    amountInput.disabled = true;
    transDate.disabled = true;
})
complaintCancel.addEventListener("click", function () {
    document.getElementById("complaint-form").reset()
    complainModal.style.display = "none"
    modalBg.style.display = "none"
})
eventCancel.addEventListener("click", function () {
    var budgetInput = document.getElementById('events-budget');
    document.getElementById("event-form").reset()
    eventModal.style.display = "none"
    modalBg.style.display = "none"
    budgetInput.disabled = true;
})

//FI: CREATE A FUNCTION FOR SHOW PASSWORD INSTEAD OF THIS 
seePass.addEventListener("change", function () {
    const inputPass = document.getElementById("user-pass")
    const confirmPass = document.getElementById("user-confirmPass")
    if (inputPass.type === 'password' || confirmPass.type === 'password') {
        inputPass.type = 'text';
        confirmPass.type = 'text';
    } else {
        inputPass.type = 'password';
        confirmPass.type = 'password';
    }
})


/*TOAST 
const delUser = document.querySelector('.fa-trash-can')
delUser.addEventListener("click", function() {
    console.log("click")
    const toast = document.querySelector(".toast-container")
    toast.style.display = "flex"
        //TO DO: fix click event
    setTimeout(function() {
        toast.classList.add('toast-container-hide')
        toast.style.display = "none"
    }, 7000)
    toast.classList.remove("toast-container-hide")
    // TO DO: if confirm then delete selected user else stay
}) */




//SESSION TIMEOUT
var sessionTimeoutMilliseconds = 60 * 60 * 1000;
var timeoutTimer;

function resetTimeout() {
    clearTimeout(timeoutTimer);
    timeoutTimer = setTimeout(logout, sessionTimeoutMilliseconds);
}

function logout() {
    window.location.href = "../html/login.html";
}
document.addEventListener("mousemove", resetTimeout);

//USER SEARCH
const UsersearchBar = document.getElementById('user-search');
const UsertableBody = document.getElementById('user-table-body');

UsersearchBar.addEventListener('input', () => {
    const searchText = UsersearchBar.value.toLowerCase();

    for (let i = 0; i < UsertableBody.rows.length; i++) {
        const row = UsertableBody.rows[i];
        const userId = row.cells[0].textContent.toLowerCase();
        const userName = row.cells[1].textContent.toLowerCase();
        const userRole = row.cells[2].textContent.toLowerCase();
        const userEmail = row.cells[3].textContent.toLowerCase();

        if (
            userId.includes(searchText) ||
            userName.includes(searchText) ||
            userRole.includes(searchText) ||
            userEmail.includes(searchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//MEMBER SEARCH
const MemsearchBar = document.getElementById('mem-search');
const MemtableBody = document.getElementById('mem-table-body');

MemsearchBar.addEventListener('input', () => {
    const MemsearchText = MemsearchBar.value.toLowerCase();

    for (let i = 0; i < MemtableBody.rows.length; i++) {
        const row = MemtableBody.rows[i];
        const memId = row.cells[0].textContent.toLowerCase();
        const memName = row.cells[1].textContent.toLowerCase();
        const memOperation = row.cells[2].textContent.toLowerCase();
        const memRole = row.cells[3].textContent.toLowerCase();
        const memLicense = row.cells[4].textContent.toLowerCase();
        const memStat = row.cells[5].textContent.toLowerCase();

        if (
            memId.includes(MemsearchText) ||
            memName.includes(MemsearchText) ||
            memOperation.includes(MemsearchText) ||
            memRole.includes(MemsearchText) ||
            memLicense.includes(MemsearchText) ||
            memStat.includes(MemsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//FINANCE SEARCH
const finsearchBar = document.getElementById('fin-search')
const fintablebody = document.getElementById('fin-table-body')

finsearchBar.addEventListener('input', () => {
    const finsearchText = finsearchBar.value.toLowerCase();

    for (let i = 0; i < fintablebody.rows.length; i++) {
        const row = fintablebody.rows[i];
        const finId = row.cells[0].textContent.toLowerCase();
        const finType = row.cells[1].textContent.toLowerCase();
        const finCode = row.cells[2].textContent.toLowerCase();
        const finName = row.cells[4].textContent.toLowerCase();

        if (
            finId.includes(finsearchText) ||
            finType.includes(finsearchText) ||
            finCode.includes(finsearchText) ||
            finName.includes(finsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//COMPLAINTS SEARCH
const compSearchBar = document.getElementById('comp-search')
const compTableBody = document.getElementById('complaint-table-body')

compSearchBar.addEventListener('input', () => {
    const compSearchText = compSearchBar.value.toLowerCase();

    for (let i = 0; i < compTableBody.rows.length; i++) {
        const row = compTableBody.rows[i];
        const compId = row.cells[0].textContent.toLowerCase();
        const compName = row.cells[1].textContent.toLowerCase();
        const compCon = row.cells[2].textContent.toLowerCase();
        const compPerson = row.cells[3].textContent.toLowerCase();
        const compDate = row.cells[4].textContent.toLowerCase();
        if (
            compId.includes(compSearchText) ||
            compName.includes(compSearchText) ||
            compCon.includes(compSearchText) ||
            compPerson.includes(compSearchText) ||
            compDate.includes(compSearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//EVENTS AND PROGRAMS SEARCH
const programsSearch = document.getElementById('programs-search')
const progTableBody = document.getElementById('programs-table-body')

programsSearch.addEventListener('input', () => {
    const progsearchText = programsSearch.value.toLowerCase();

    for (let i = 0; i < progTableBody.rows.length; i++) {
        const row = progTableBody.rows[i];
        const progId = row.cells[0].textContent.toLowerCase();
        const progTitle = row.cells[1].textContent.toLowerCase();
        const progDate = row.cells[2].textContent.toLowerCase();
        const progLoc = row.cells[4].textContent.toLowerCase();

        if (
            progId.includes(progsearchText) ||
            progTitle.includes(progsearchText) ||
            progDate.includes(progsearchText) ||
            progLoc.includes(progsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});


//WARNING & SUCCESS TOAST FOR ADD USER
function checkEmailExists(email) {

    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkemail.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('street=' + email); // Use "street" parameter instead of "email"
    });
}

// Function to check if the contact number exists in the database
function checkContactExists(contact) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + contact);
    });
}

// Function to check if the username exists in the database
function checkUsernameExists(username) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkusername.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('user-uname=' + username);
    });
}

// Event listener for input changes
document.getElementById('user-email').addEventListener('input', function () {
    var emailInput = this.value;
    var emailValidation = document.getElementById('email-validation');

    checkEmailExists(emailInput)
        .then(function (exists) {
            if (exists) {
                emailValidation.textContent = 'Email address already exist';
            } else {
                emailValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var contactValidation = document.getElementById('contact-validation');
            var usernameValidation = document.getElementById('username-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Event listener for input changes
document.getElementById('user-contact').addEventListener('input', function () {
    var contactInput = this.value;
    var contactValidation = document.getElementById('contact-validation');

    checkContactExists(contactInput)
        .then(function (exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var emailValidation = document.getElementById('email-validation');
            var usernameValidation = document.getElementById('username-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Event listener for input changes
document.getElementById('user-uname').addEventListener('input', function () {
    var usernameInput = this.value;
    var usernameValidation = document.getElementById('username-validation');

    checkUsernameExists(usernameInput)
        .then(function (exists) {
            if (exists) {
                usernameValidation.textContent = 'Username already exist';
            } else {
                usernameValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var emailValidation = document.getElementById('email-validation');
            var contactValidation = document.getElementById('contact-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

document.getElementById("user-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Check if user role is selected
    var role = document.getElementById("select-role").value;
    if (role === "") {
        // Display warning toast
        var warningToast = document.getElementById("warningToast");
        warningToast.style.display = "flex";

        // Hide toast after 3 seconds
        setTimeout(function () {
            warningToast.style.display = "none";
        }, 3000);
        return;
    }

    // Send an AJAX request to add the user to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/adduser.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Display success toast
                    var successToast = document.getElementById("user-successToast");
                    successToast.style.display = "flex";
                    modalBg.style.display = "none";

                    // Hide toast after 2 seconds
                    setTimeout(function () {
                        successToast.style.display = "none";
                        // Refresh the page
                        location.reload();
                    }, 2000);

                    // Reset the form
                    document.getElementById("user-form").reset();

                    // Hide the modal
                    var userModalContainer = document.getElementById("user-modal-container");
                    userModalContainer.style.display = "none";
                } else {
                    // Handle the error case
                    var err = response.error;
                    if (err === "user-role-already-exists") {
                        // Display error toast
                        var toastContainers2 = document.getElementById('warningToast2');
                        var warningCon = document.getElementById('warning-con');
                        warningCon.innerHTML = `<strong>Warning:</strong> ${response.role} Role already exists in the database`;
                        toastContainers2.style.display = "flex";
                        toastContainers2.style.zIndex = "9999999";

                        // Hide toast after 3 seconds
                        setTimeout(function () {
                            toastContainers2.style.display = "none";
                        }, 3000);
                    } else {
                        console.error("Error: " + err);
                    }
                }
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});



//Add Complaint Confirmation Toast
document.getElementById("complaint-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Send an AJAX request to add the user to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/complaints.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Display success toast
                var successToast = document.getElementById("cmplnt-successToast");
                successToast.style.display = "flex";
                modalBg.style.display = "none"

                // Hide toast after 2 seconds
                setTimeout(function () {
                    successToast.style.display = "none";
                    // Refresh the page
                    location.reload();
                }, 2000);

                // Reset the form
                document.getElementById("complaint-form").reset();

                // Hide the modal
                var complaintModalContainer = document.getElementById("complaint-modal-container");
                complaintModalContainer.style.display = "none";
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});

//WARNING & SUCCESS TOAST FOR ADD MEMBER
function checkMemContactExists(phone) {

    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkmemcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + phone);
    });
}

// Event listener for input changes in mem-contact
document.getElementById('mem-contact').addEventListener('input', function () {
    var contactInput = this.value;
    var contactValidation = document.getElementById('mem-contact-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkMemContactExists(contactInput)
        .then(function (exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            checkLicenseExists(document.getElementById('mem-license').value)
                .then(function (exists) {
                    var licenseValidation = document.getElementById('license-validation');
                    if (exists) {
                        licenseValidation.textContent = 'License number already exist';
                    } else {
                        licenseValidation.textContent = '';
                    }

                    saveButton.disabled = exists || contactValidation.textContent !== '' || licenseValidation.textContent !== '';
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Function to check if the license number exists in the database
function checkLicenseExists(license_no) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checklicense.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('license=' + license_no);
    });
}

// Event listener for input changes in mem-license
document.getElementById('mem-license').addEventListener('input', function () {
    var licenseInput = this.value;
    var licenseValidation = document.getElementById('license-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkLicenseExists(licenseInput)
        .then(function (exists) {
            if (exists) {
                licenseValidation.textContent = 'License number already exist';
            } else {
                licenseValidation.textContent = '';
            }

            checkMemContactExists(document.getElementById('mem-contact').value)
                .then(function (exists) {
                    var contactValidation = document.getElementById('mem-contact-validation');
                    if (exists) {
                        contactValidation.textContent = 'Contact number already exist';
                    } else {
                        contactValidation.textContent = '';
                    }

                    saveButton.disabled = exists || licenseValidation.textContent !== '' || contactValidation.textContent !== '';
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        .catch(function (error) {
            console.error(error);
        });
});


document.getElementById("member-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Check if user role is selected
    var role = document.getElementById("select-mem").value;
    if (role === "") {
        // Display warning toast
        var warningToast = document.getElementById("mem-warningToast");
        warningToast.style.display = "flex";

        // Hide toast after 3 seconds
        setTimeout(function () {
            warningToast.style.display = "none";
        }, 3000);
        return;
    }

    // Send an AJAX request to add the member to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/addmember.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Display success toast
                var successToast = document.getElementById("mem-successToast");
                successToast.style.display = "flex";
                modalBg.style.display = "none"

                // Hide toast after 2 seconds
                setTimeout(function () {
                    successToast.style.display = "none";
                    // Refresh the page
                    location.reload();
                }, 2000);


                // Reset the form
                document.getElementById("member-form").reset();

                // Hide the modal
                var memberModalContainer = document.getElementById("member-modal-container");
                memberModalContainer.style.display = "none";
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});



//RENDERING CONTAINERS AND PREVENT FROM RETURNING TO DASHBOARD
const selectedModule = localStorage.getItem('selectedModule');

// Set the initial selected module or the default module if none is stored
const initialModule = selectedModule || 'dash';
renderModule(initialModule);

// Attach event listeners to the buttons
dashBtn.addEventListener('click', function () {
    renderModule('dash');
});
memBtn.addEventListener('click', function () {
    renderModule('member');
});
userBtn.addEventListener('click', function () {
    renderModule('users');
});
financeBtn.addEventListener('click', function () {
    renderModule('finance');
});
complainBtn.addEventListener('click', function () {
    renderModule('complain');
});
programsBtn.addEventListener('click', function () {
    renderModule('programs');
});

// Render the module based on the selected module
function renderModule(module) {
    // Hide all modules and deactivate all buttons
    dashContain.style.display = 'none';
    userContain.style.display = 'none';
    memContain.style.display = 'none';
    financeContain.style.display = 'none';
    complainContain.style.display = 'none';
    EventContain.style.display = 'none';

    dashBtn.classList.remove('btn-active');
    memBtn.classList.remove('btn-active');
    userBtn.classList.remove('btn-active');
    financeBtn.classList.remove('btn-active');
    complainBtn.classList.remove('btn-active');
    programsBtn.classList.remove('btn-active');

    // Show the selected module and activate its button
    if (module === 'dash') {
        dashContain.style.display = 'block';
        dashBtn.classList.add('btn-active');
    } else if (module === 'member') {
        memContain.style.display = 'block';
        memBtn.classList.add('btn-active');
    } else if (module === 'users') {
        userContain.style.display = 'block';
        userBtn.classList.add('btn-active');
    } else if (module === 'complain') {
        complainContain.style.display = 'block';
        complainBtn.classList.add('btn-active');
    } else if (module === 'finance') {
        financeContain.style.display = 'block'
        financeBtn.classList.add('btn-active')
    } else if (module === 'programs') {
        EventContain.style.display = 'block';
        programsBtn.classList.add('btn-active');
    }

    // Store the selected module in browser storage
    localStorage.setItem('selectedModule', module);
}

// Function to handle logout
function handleLogout() {
    localStorage.removeItem('selectedModule'); // Remove the selected module from storage
    renderModule('dash'); // Set the dashboard as the default module
    // Perform any additional logout actions here
}

//DISABLING OF SIDENAV OPTIONS
const logoutBtn = document.getElementById("logout-btn");
logoutBtn.addEventListener("click", handleLogout);

const listItems = document.querySelectorAll("#nav-list .locked");


listItems.forEach(function (item) {
    item.style.pointerEvents = "none";
    item.style.opacity = "0.5";
});

//Budget Checkbox

function handleBudgetCheckboxChange() {
    var budgetCheckbox = document.getElementById('events-isbudget');
    var budgetInput = document.getElementById('events-budget');

    if (budgetCheckbox.checked) {
        budgetInput.disabled = false;
        budgetInput.required = true;
    } else {
        budgetInput.disabled = true;
        budgetInput.required = false;
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const err = urlParams.get('error');
    const role = urlParams.get('role');
    const toastContainers = document.getElementById('toast-success');
    const toastContainers2 = document.getElementById('warningToast2');

    if (suc === 'true%finance') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Finance record added.`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%events') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Program details added`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%complaint') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Complaint added`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (err === 'insufficient-bal') {
        toastContainers2.style.display = 'flex';
        document.getElementById('warning-con').innerHTML = `<strong>Warning</strong> Insufficient Balance`;
        setTimeout(() => {
            toastContainers2.style.display = 'none';
        }, 3000);
    }

});

window.onload = function () {
    if (window.location.search.includes("success")) {
        history.replaceState({}, document.title, window.location.pathname);
    }

    if (window.location.search.includes("error")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}

listItems.forEach(function (item) {
    item.style.pointerEvents = "none";
    item.style.opacity = "0.5";
});

function countChar(val) {
    var len = val.value.length;
    if (len >= 350) {
        val.value = val.value.substring(0, 350);
    } else {
        var remaining = 350 - len;
        if (remaining > 0) {
            $('#charRem').text('Remaining: ' + remaining);
        } else {
            $('#charRem').text('Remaining: 0');
        }
    }
}

function generatePDF(complaintId, fileName) {
    const pdfUrl = '../reports/' + fileName + '?id=' + complaintId;

    const printContainer = document.createElement('div');
    printContainer.id = 'print-container';
    printContainer.style.display = 'none';
    document.body.appendChild(printContainer);

    const iframe = document.createElement('iframe');
    iframe.src = pdfUrl;
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = 'none';
    printContainer.appendChild(iframe);

    iframe.onload = function () {
        const printWindow = iframe.contentWindow || iframe.contentDocument.defaultView;
        printWindow.print();
    };
}
//Generate Membership status Report

function save_generate() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/meminfo.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF1(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF1(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('meminfo.pdf');
    });
}


//Generate Donation Report

function save_generate1() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/don-report.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF2(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF2(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('donation-report.pdf');
    });
}

//Generate Contribution Report

function save_generate2() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/balance_sheet.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF3(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}


function generatePDF3(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('contribution-report.pdf');
    });
}

//Generate Finance Income Report

function save_generate3() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/finance_IS.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF4(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF4(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('finance-report.pdf');
    });
}

//Generate Complaint Report
function save_generate5() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/comp-report.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var compInfoContainer = container.querySelector('#container');
            generatePDF6(compInfoContainer.innerHTML);
        }
    };
    xhr.send();
}


function generatePDF6(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('complaint-report.pdf');
    });
}

//Generate Program Details Report

function save_generate4(complaintId, fileName) {
    const pdfUrl = '../reports/' + fileName + '?id=' + complaintId;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', pdfUrl, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#ep-container');
            generatePDF5(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF5(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 1, .5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('Program Details.pdf');
    });
}


// Get the current date
var currentDate = new Date();

// Array of month names
var monthNames = [
    "January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"
];

// Array of weekday names
var weekdayNames = [
    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
];

// Format the date as desired ("Saturday, 8 July 2023")
var formattedDate = weekdayNames[currentDate.getDay()] + ', ' +
    currentDate.getDate() + ' ' +
    monthNames[currentDate.getMonth()] + ' ' +
    currentDate.getFullYear();

// Insert the formatted date into the <i> element
document.getElementById('current-date').innerText = formattedDate;

function toggleRemarks() {
    var expenseType = document.getElementById('expense-type').value;
    var remarksInput = document.getElementById('rem-container');
    if (expenseType === 'Expenses - ') {
      remarksInput.style.display = 'block';
    } else {
      remarksInput.style.display = 'none';
    }
  }
  
  // Call the toggleRemarks function initially to set the visibility based on the default selected value
  toggleRemarks();
  
  function toggleSelect() {
    var select = document.getElementById("complaintSubjectBody");
    var checkbox = document.getElementById("activateSelect");

    if (checkbox.checked) {
        select.disabled = false;
    } else {
        select.disabled = true;
    }
}

