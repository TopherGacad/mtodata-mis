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
adduserBtn.addEventListener("click", function() {
    userModal.style.display = "flex"
    modalBg.style.display = "block"
})
addmemBtn.addEventListener("click", function() {
    memberModal.style.display = "flex"
    modalBg.style.display = "block"
})
addfinanceBtn.addEventListener("click", function() {
    financeModal.style.display = "flex"
    modalBg.style.display = "block"
})
addComplainBtn.addEventListener("click", function() {
    complainModal.style.display = "flex"
    modalBg.style.display = "block"
})
addEventBtn.addEventListener("click", function() {
    eventModal.style.display = "flex"
    modalBg.style.display = "block"
})

// USER TYPE DISABLE INPUTS
const selectType = document.getElementById("select-type");
    const midnameInput = document.getElementById("midname");
    const contactInput = document.getElementById("contact");
    const accType = document.getElementById("acc-type");
function disableInputs() {
    if (selectType.value === "butaw") {
        midnameInput.disabled = true;
        contactInput.disabled = true;
        accType.disabled = true;
    } else {
        midnameInput.disabled = false;
        contactInput.disabled = false;
        accType.disabled = false;
    }
}

// CANCEL BUTTONS
userCancel.addEventListener("click", function() {
    document.getElementById("user-form").reset()
    userModal.style.display = "none"
    modalBg.style.display = "none"
})
memberCancel.addEventListener("click", function() {
    document.getElementById("member-form").reset()
    memberModal.style.display = "none"
    modalBg.style.display = "none"
})
financeCancel.addEventListener("click", function() {
    document.getElementById("finance-form").reset()
    financeModal.style.display = "none"
    modalBg.style.display = "none"
    midnameInput.disabled = false;
    contactInput.disabled = false;
    accType.disabled = false;
})
complaintCancel.addEventListener("click", function() {
    document.getElementById("complaint-form").reset()
    complainModal.style.display = "none"
    modalBg.style.display = "none"
})
eventCancel.addEventListener("click", function() {
    document.getElementById("event-form").reset()
    eventModal.style.display = "none"
    modalBg.style.display = "none"
})

//FI: CREATE A FUNCTION FOR SHOW PASSWORD INSTEAD OF THIS 
seePass.addEventListener("change", function() {
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

//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("mem-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Members Information");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function(buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Members.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#mem-export");
exportBtn.addEventListener("click", exportToExcel);

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

        if (
            userId.includes(searchText) ||
            userName.includes(searchText) ||
            userRole.includes(searchText)
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
        const memLicense = row.cells[3].textContent.toLowerCase();
        const memStat = row.cells[4].textContent.toLowerCase();

        if (
            memId.includes(MemsearchText) ||
            memName.includes(MemsearchText) ||
            memOperation.includes(MemsearchText) ||
            memLicense.includes(MemsearchText) ||
            memStat.includes(MemsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//WARNING & SUCCESS TOAST FOR ADD USER
// document.getElementById("user-form").addEventListener("submit", function(event) {
//     event.preventDefault();

//     // Check if user role is selected
//     var role = document.getElementById("select-role").value;
//     if (role === "") {
//         // Display warning toast
//         var warningToast = document.getElementById("warningToast");
//         warningToast.style.display = "block";

//         // Hide toast after 3 seconds
//         setTimeout(function() {
//             warningToast.style.display = "none";
//         }, 3000);
//         return;
//     }

//     // Send an AJAX request to add the user to the database
//     var formData = new FormData(this);
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "../php/adduser.php", true);
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 // Display success toast
//                 var successToast = document.getElementById("user-successToast");
//                 successToast.style.display = "flex";
//                 modalBg.style.display="none"

//                 // Hide toast after 2 seconds
//                 setTimeout(function() {
//                     successToast.style.display = "none";
//                     // Refresh the page
//                     location.reload();
//                 }, 2000);

//                 // Reset the form
//                 document.getElementById("user-form").reset();

//                 // Hide the modal
//                 var userModalContainer = document.getElementById("user-modal-container");
//                 userModalContainer.style.display = "none";
//             } else {
//                 // Handle the error case
//                 console.error("Error: " + xhr.status);
//             }
//         }
//     };
//     xhr.send(formData);
// });
 // Function to check if the email address exists in the database
 function checkEmailExists(email) {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkemail.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
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
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + contact);
    });
}

// Event listener for input changes
document.getElementById('user-email').addEventListener('input', function() {
    var emailInput = this.value;
    var emailValidation = document.getElementById('email-validation');

    checkEmailExists(emailInput)
        .then(function(exists) {
            if (exists) {
                emailValidation.textContent = 'Email address already exist';
            } else {
                emailValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var contactValidation = document.getElementById('contact-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '';
        })
        .catch(function(error) {
            console.error(error);
        });
});

// Event listener for input changes
document.getElementById('user-contact').addEventListener('input', function() {
    var contactInput = this.value;
    var contactValidation = document.getElementById('contact-validation');

    checkContactExists(contactInput)
        .then(function(exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var emailValidation = document.getElementById('email-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '';
        })
        .catch(function(error) {
            console.error(error);
        });
});

document.getElementById("user-form").addEventListener("submit", function(event) {
    event.preventDefault();

    // Check if user role is selected
    var role = document.getElementById("select-role").value;
    if (role === "") {
        // Display warning toast
        var warningToast = document.getElementById("warningToast");
        warningToast.style.display = "block";

        // Hide toast after 3 seconds
        setTimeout(function() {
            warningToast.style.display = "none";
        }, 3000);
        return;
    }

    // Send an AJAX request to add the user to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/adduser.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Display success toast
                var successToast = document.getElementById("user-successToast");
                successToast.style.display = "flex";
                modalBg.style.display="none"

                // Hide toast after 2 seconds
                setTimeout(function() {
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
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});

//WARNING & SUCCESS TOAST FOR ADD MEMBER
// document.getElementById("member-form").addEventListener("submit", function(event) {
//     event.preventDefault();

//     // Check if user role is selected
//     var role = document.getElementById("select-mem").value;
//     if (role === "") {
//         // Display warning toast
//         var warningToast = document.getElementById("mem-warningToast");
//         warningToast.style.display = "block";

//         // Hide toast after 3 seconds
//         setTimeout(function() {
//             warningToast.style.display = "none";
//         }, 3000);
//         return;
//     }

//     // Send an AJAX request to add the member to the database
//     var formData = new FormData(this);
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "../php/addmember.php", true);
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 // Display success toast
//                 var successToast = document.getElementById("mem-successToast");
//                 successToast.style.display = "flex";
//                 modalBg.style.display="none"

//                 // Hide toast after 2 seconds
//                 setTimeout(function() {
//                     successToast.style.display = "none";
//                     // Refresh the page
//                     location.reload();
//                 }, 2000);

//                 // Reset the form
//                 document.getElementById("member-form").reset();

//                 // Hide the modal
//                 var memberModalContainer = document.getElementById("member-modal-container");
//                 memberModalContainer.style.display = "none";
//             } else {
//                 // Handle the error case
//                 console.error("Error: " + xhr.status);
//             }
//         }
//     };
//     xhr.send(formData);
// });
 // Function to check if the contact number exists in the database for mem-contact
 function checkMemContactExists(phone) {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkmemcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + phone);
    });
}

// Event listener for input changes in mem-contact
document.getElementById('mem-contact').addEventListener('input', function() {
    var contactInput = this.value;
    var contactValidation = document.getElementById('mem-contact-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkMemContactExists(contactInput)
        .then(function(exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            checkLicenseExists(document.getElementById('mem-license').value)
                .then(function(exists) {
                    var licenseValidation = document.getElementById('license-validation');
                    if (exists) {
                        licenseValidation.textContent = 'License number already exist';
                    } else {
                        licenseValidation.textContent = '';
                    }

                    saveButton.disabled = exists || contactValidation.textContent !== '' || licenseValidation.textContent !== '';
                })
                .catch(function(error) {
                    console.error(error);
                });
        })
        .catch(function(error) {
            console.error(error);
        });
});

// Function to check if the license number exists in the database
function checkLicenseExists(license_no) {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checklicense.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('license=' + license_no);
    });
}

// Event listener for input changes in mem-license
document.getElementById('mem-license').addEventListener('input', function() {
    var licenseInput = this.value;
    var licenseValidation = document.getElementById('license-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkLicenseExists(licenseInput)
        .then(function(exists) {
            if (exists) {
                licenseValidation.textContent = 'License number already exist';
            } else {
                licenseValidation.textContent = '';
            }

            checkMemContactExists(document.getElementById('mem-contact').value)
                .then(function(exists) {
                    var contactValidation = document.getElementById('mem-contact-validation');
                    if (exists) {
                        contactValidation.textContent = 'Contact number already exist';
                    } else {
                        contactValidation.textContent = '';
                    }

                    saveButton.disabled = exists || licenseValidation.textContent !== '' || contactValidation.textContent !== '';
                })
                .catch(function(error) {
                    console.error(error);
                });
        })
        .catch(function(error) {
            console.error(error);
        });
});

        document.getElementById("member-form").addEventListener("submit", function(event) {
            event.preventDefault();

            // Check if user role is selected
            var role = document.getElementById("select-mem").value;
            if (role === "") {
                // Display warning toast
                var warningToast = document.getElementById("mem-warningToast");
                warningToast.style.display = "block";

                // Hide toast after 3 seconds
                setTimeout(function() {
                    warningToast.style.display = "none";
                }, 3000);
                return;
            }

            // Send an AJAX request to add the member to the database
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../php/addmember.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display success toast
                        var successToast = document.getElementById("mem-successToast");
                        successToast.style.display = "flex";
                        modalBg.style.display="none"

                        // Hide toast after 2 seconds
                        setTimeout(function() {
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
dashBtn.addEventListener('click', function() {
    renderModule('dash');
});
memBtn.addEventListener('click', function() {
    renderModule('member');
});
userBtn.addEventListener('click', function() {
    renderModule('users');
});
financeBtn.addEventListener('click', function() {
    renderModule('finance');
});
complainBtn.addEventListener('click', function() {
    renderModule('complain');
});
programsBtn.addEventListener('click', function() {
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

// Add event listener to the logout button
const logoutBtn = document.getElementById("logout-btn");
logoutBtn.addEventListener("click", handleLogout);