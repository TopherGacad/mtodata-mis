
//TO DO: TRANSFER GLOBAL VARS TO SCOPRE VAR

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

const adduserBtn = document.getElementById("addUser-btn")
const addmemBtn = document.getElementById("addmem-btn")

const userModal = document.getElementById("user-modal-container")
const memberModal = document.getElementById("member-modal-container")
const editUser = document.getElementById("editUser-modal")
const editMem = document.getElementById("editMem-modal")

const modalBg = document.getElementById('bg')
const userCancel = document.getElementById("adduser-cancel")
const memberCancel = document.getElementById("member-cancel")
const editUserClose = document.getElementById("editUser-close")
const editMemClose = document.getElementById("editMem-close")
const seePass = document.getElementById("see-pass")


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

adduserBtn.addEventListener("click", function(){
    userModal.style.display = "flex"
    modalBg.style.display ="block"
})
addmemBtn.addEventListener("click", function(){
    memberModal.style.display = "flex"
    modalBg.style.display ="block"
})

//refactor this event
userCancel.addEventListener("click", function(){
    userModal.style.display = "none"
    modalBg.style.display ="none"
})
memberCancel.addEventListener("click",function(){
    memberModal.style.display = "none"
    modalBg.style.display ="none"
    document.getElementById("mem-lastname").value = ""
})
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


//TOAST 
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
})

const editIcon = document.querySelector(".fa-pen-to-square")
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









// TO DO: 
// 1. create an array of objects to store the users inside datalist.js
// 2. create a function that will render users on user pane from datalist.js
