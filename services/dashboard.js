
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

const editUser = document.getElementById("editUser-modal")
const editMem = document.getElementById("editMem-modal")

const modalBg = document.getElementById('bg')
const seePass = document.getElementById("see-pass")

// CANCEL BUTTONS
const userCancel = document.getElementById("adduser-cancel")
const memberCancel = document.getElementById("member-cancel")
const financeCancel = document.getElementById("finance-cancel")
const complaintCancel = document.getElementById("complaint-cancel")
const eventCancel = document.getElementById("event-cancel")

// EDIT-CLOSE BUTTONS
const editUserClose = document.getElementById("editUser-close")
const editMemClose = document.getElementById("editMem-close")


dashBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('hide')
    dashContain.classList.toggle('active')
    memContain.classList.remove('active')
    memContain.classList.add('hide')
    userContain.classList.remove('active')
    financeContain.classList.remove('active')
    financeContain.classList.add('hide')
    complainContain.classList.remove('active')
    complainContain.classList.add('hide')
    EventContain.classList.remove('active')
    EventContain.classList.add('hide')
    
    //BUTTON STYLING ACTIVE
    dashBtn.classList.add('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
})

userBtn.addEventListener("click", function(){
    dashContain.classList.remove('active')
    dashContain.classList.add('hide')
    memContain.classList.remove('active')
    memContain.classList.add('hide')
    userContain.classList.remove('hide')
    userContain.classList.add('active')
    financeContain.classList.remove('active')
    financeContain.classList.add('hide')
    complainContain.classList.remove('active')
    complainContain.classList.add('hide')
    EventContain.classList.remove('active')
    EventContain.classList.add('hide')

    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.add('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
})

memBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('active')
    dashContain.classList.add('hide')
    userContain.classList.remove('active')
    userContain.classList.add('hide')
    memContain.classList.remove('hide')
    memContain.classList.add('active')
    financeContain.classList.remove('active')
    financeContain.classList.add('hide')
    complainContain.classList.remove('active')
    complainContain.classList.add('hide')
    EventContain.classList.remove('active')
    EventContain.classList.add('hide')
    
    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.add('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
    
})

financeBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('active')
    dashContain.classList.add('hide')
    userContain.classList.remove('active')
    userContain.classList.add('hide')
    memContain.classList.remove('active')
    memContain.classList.add('hide')
    financeContain.classList.remove('hide')
    financeContain.classList.add('active')
    complainContain.classList.remove('active')
    complainContain.classList.add('hide')
    EventContain.classList.remove('active')
    EventContain.classList.add('hide')

    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.add('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
})

complainBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('active')
    dashContain.classList.add('hide')
    userContain.classList.remove('active')
    userContain.classList.add('hide')
    memContain.classList.remove('active')
    memContain.classList.add('hide')
    financeContain.classList.remove('active')
    financeContain.classList.add('hide')
    complainContain.classList.remove('hide')
    complainContain.classList.add('active')
    EventContain.classList.remove('active')
    EventContain.classList.add('hide')

    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.add('btn-active')
    programsBtn.classList.remove('btn-active')
})

programsBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('active')
    dashContain.classList.add('hide')
    userContain.classList.remove('active')
    userContain.classList.add('hide')
    memContain.classList.remove('active')
    memContain.classList.add('hide')
    financeContain.classList.remove('active')
    financeContain.classList.add('hide')
    complainContain.classList.remove('active')
    complainContain.classList.add('hide')
    EventContain.classList.remove('hide')
    EventContain.classList.add('active')

    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.add('btn-active')
})

// FORM MODALS 
adduserBtn.addEventListener("click", function(){
    userModal.style.display = "flex"
    modalBg.style.display ="block"
})
addmemBtn.addEventListener("click", function(){
    memberModal.style.display = "flex"
    modalBg.style.display ="block"
})
addfinanceBtn.addEventListener("click", function(){
    financeModal.style.display = "flex"
    modalBg.style.display = "block"
})
addComplainBtn.addEventListener("click",function(){
    complainModal.style.display = "flex"
    modalBg.style.display = "block"
})
addEventBtn.addEventListener("click",function(){
    eventModal.style.display = "flex"
    modalBg.style.display = "block"
})

// USER TYPE DISABLE INPUTS
function disableInputs() {
    const selectType = document.getElementById("select-type");
    const midnameInput = document.getElementById("midname");
    const contactInput = document.getElementById("contact");
    const accType = document.getElementById("acc-type");
    
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
userCancel.addEventListener("click", function(){
    document.getElementById("user-form").reset()
    userModal.style.display = "none"
    modalBg.style.display ="none"
})
memberCancel.addEventListener("click",function(){
    document.getElementById("member-form").reset()
    memberModal.style.display = "none"
    modalBg.style.display ="none"
})
financeCancel.addEventListener("click",function(){
    document.getElementById("finance-form").reset()
    financeModal.style.display = "none"
    modalBg.style.display = "none"
})
complaintCancel.addEventListener("click", function(){
    document.getElementById("complaint-form").reset()
    complainModal.style.display = "none"
    modalBg.style.display = "none"
})
eventCancel.addEventListener("click",function(){
    document.getElementById("event-form").reset()
    eventModal.style.display = "none"
    modalBg.style.display = "none"
})

// EDIT-CLOSE BUTTONS
editUserClose.addEventListener("click", function(){
    editUser.style.display = "none"
    modalBg.style.display = "none"
    userDetailsContain.style.display = "flex"
})
editMemClose.addEventListener("click", function(){
    editMem.style.display = "none"
    modalBg.style.display = "none"
})



//FI: CREATE A FUNCTION FOR SHOW PASSWORD INSTEAD OF THIS 
seePass.addEventListener("change", function(){
    const inputPass = document.getElementById("user-pass")
    const confirmPass = document.getElementById("user-confirmPass")
    if(inputPass.type === 'password' || confirmPass.type === 'password'){
        inputPass.type='text';
        confirmPass.type ='text';
    }
    else{
        inputPass.type='password';
        confirmPass.type ='password';
    }
})


/*TOAST 
const delUser = document.querySelector('.fa-trash-can')
delUser.addEventListener("click", function(){
    console.log("click")
    const toast = document.querySelector(".toast-container")
    toast.style.display = "flex"
    //TO DO: fix click event
    setTimeout(function(){
        toast.classList.add('toast-container-hide')
        toast.style.display = "none"
    },7000)
    toast.classList.remove("toast-container-hide")
    // TO DO: if confirm then delete selected user else stay
}) */

const editIcon = document.querySelector(".fa-eye")
editIcon.addEventListener("click", function() {
                // code to edit the user with this ID
                editUser.style.display = "flex"
                modalBg.style.display = "block"
            })

const editMemIcon = document.getElementById("edit-member-icon")
editMemIcon.addEventListener("click", function(){
    editMem.style.display = "flex"
    modalBg.style.display = "block"
})

const editDetails = document.getElementById("edit-details")
const userDetailsContain = document.getElementById("user-details-contain")
editDetails.addEventListener("click", function(){
    userDetailsContain.style.display = "none"
    
})

//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("mem-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length-1; j++) {
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
    workbook.xlsx.writeBuffer().then(function (buffer) {
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
    ){
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});

//WARNING TOAST FOR ADD USER
const selectRole = document.getElementById('select-role');
const form = document.querySelector('form');
const error = document.getElementById("warningToast")

form.addEventListener('submit', (event) => {
    if (selectRole.value === '') {
        event.preventDefault();
        error.style.display = "flex"

        setTimeout(function(){
            error.style.display = "none"
        },2000)
    }
});

// WARNING TOAST FOR ADD MEMBER
const selectMemRole = document.getElementById('select-mem');
const memForm = document.querySelector('#member-form');
const memError = document.getElementById("mem-warningToast")

memForm.addEventListener('submit', (event) => {
    if (selectMemRole.value === '') {
        event.preventDefault();
        memError.style.display = "flex"

        setTimeout(function(){
            memError.style.display = "none"
        },2000)
    }
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
  } else if(module === 'programs') {
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