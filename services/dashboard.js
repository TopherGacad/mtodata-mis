const dashContain = document.getElementById("dash-container")
const dashBtn = document.getElementById("dash-btn")
const memBtn = document.getElementById("member-btn")

memBtn.addEventListener("click", function(){
    dashContain.classList.toggle('hide')
})
dashBtn.addEventListener("click", function(){
    dashContain.classList.remove('hide')
    dashContain.classList.toggle('active')
})