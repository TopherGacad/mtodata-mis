const dashContain = document.getElementById("dash-container")
const userContain = document.getElementById("users-container")
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