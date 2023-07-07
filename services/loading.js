//PRE-LOADING THE IMAGE TO MAKE SURE THAT IT IS NOT AFFECTED BY THE LOADING
function preloadImage(url, callback) {
    var img = new Image();
    img.onload = callback;
    img.src = url;
  }


//LOADING FUNCTION
function showLoadingAnimation() {
    document.getElementById("loading-container").style.display = "flex";
  }
  
  // Hide the loading animation
  function hideLoadingAnimation() {
    document.getElementById("loading-container").style.display = "none";
  }
  
  // Event listener for page load
  window.addEventListener("load", function() {
    showLoadingAnimation();
  
    // Simulate a delay before hiding the loading animation (e.g., 3 seconds)
    setTimeout(function() {
      hideLoadingAnimation();
    }, 1000);
  });
  
  //PRE LOAD IMAGE AND CALL THE LOADING ANIMATION 
  preloadImage('../../public/assets/mtodata_logo.png', showLoadingAnimation);