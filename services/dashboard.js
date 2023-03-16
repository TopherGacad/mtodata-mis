const dashContain = document.getElementById("dash-container")
const dashBtn = document.getElementById("dash-btn")
const memBtn = document.getElementById("member-btn")

memBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.toggle('hide')
    
    //BUTTON STYLING ACTIVE
    memBtn.classList.add('btn-active')
    dashBtn.classList.remove('btn-active')

})
dashBtn.addEventListener("click", function(){
    //CONTENT STYLING ACTIVE
    dashContain.classList.remove('hide')
    dashContain.classList.toggle('active')
    
    //BUTTON STYLING ACTIVE
    dashBtn.classList.add('btn-active')
    memBtn.classList.remove('btn-active')
})