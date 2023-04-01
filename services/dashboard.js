
//TO DO: TRANSFER GLOBAL VARS TO SCOPRE VAR

// MAIN CONTAINERS
const dashContain = document.getElementById("dash-container")
const userContain = document.getElementById("users-container")

// SIDE-NAV BTN
const dashBtn = document.getElementById("dash-btn")
const memBtn = document.getElementById("member-btn")
const userBtn = document.getElementById("users-btn")
const financeBtn = document.getElementById("finance-btn")
const complainBtn = document.getElementById("complain-btn")
const programsBtn = document.getElementById("programs-btn")
const adduserBtn = document.getElementById("addUser-btn")
const modalContain = document.getElementById("modal-container")
const modalBg = document.getElementById('bg')
const cancelBtn = document.getElementById("adduser-cancel")
const seePass = document.getElementById("see-pass")


dashBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('hide')
    dashContain.classList.toggle('active')
    userContain.classList.remove('active')
    
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
    userContain.classList.add('active')

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
    
    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.add('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
})

financeBtn.addEventListener("click", function(){
    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.add('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.remove('btn-active')
})

complainBtn.addEventListener("click", function(){
    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.add('btn-active')
    programsBtn.classList.remove('btn-active')
})

programsBtn.addEventListener("click", function(){
    //BUTTON STYLING ACTIVE
    dashBtn.classList.remove('btn-active')
    userBtn.classList.remove('btn-active')
    memBtn.classList.remove('btn-active')
    financeBtn.classList.remove('btn-active')
    complainBtn.classList.remove('btn-active')
    programsBtn.classList.add('btn-active')
})

adduserBtn.addEventListener("click", function(){
    
    modalContain.style.display = "flex"
    modalBg.style.display ="block"
})

cancelBtn.addEventListener("click", function(){
    modalContain.style.display = "none"
    modalBg.style.display ="none"
})


//FI: CREATE A FUNCTION FOR SHOW PASSWORD INSTEAD OF THIS 
seePass.addEventListener("change", function(){
    const inputPass = document.getElementById("input-pass")
    if(inputPass.type === 'password'){
        inputPass.type='text';
    }
    else{
        inputPass.type='password';
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
    },7000)

    // TO DO: if confirm then delete selected user else stay
})

//move this array on another js file
const userData = [
    {
     id: 1,
     firstname: "Christopher",
     lastname: "Gacad",
     role: "Developer",
     password: "hellotest1"
    },

    {
    id: 2,
    firstname: "Topher",
    lastname: "Gacad",
    role: "Admin",
    password: "hellotest2"
    },

    {
    id: 3,
    firstname: "Benimaru",
    lastname: "Tempest",
    role: "General",
    password: "passpass1"
    }
]

function renderUser(){
    const userTable = document.getElementById("user-table")
    for(let i = 0; i < userData.length; i++){

        userTable.innerHTML += `
        <tr>
            <td>${userData[i].id}</td>
            <td>${userData[i].firstname} ${userData[i].lastname}</td>
            <td>${userData[i].password}</td>
            <td>${userData[i].role}</td>
            <td>
                <i class="tools fa-solid fa-trash-can"></i>
                <i class="tools fa-solid fa-pen-to-square"></i>
            </td>
        </tr>
        `
    }
}
renderUser()

/*TO DO: 
1.add function to automate id increments
2.add function that will push input values to user arr from addUser modal
3.render newly push values 
*/