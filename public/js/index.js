const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");

  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
  function myFunction1() {
    
    document.getElementById("myDropdown1").classList.toggle("show");
  }
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn1')) {
    var myDropdown = document.getElementById("myDropdown1");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
  function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");

  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown2");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
 
  function myFunction3() {
    
    document.getElementById("myDropdown3").classList.toggle("show");
  }
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn1')) {
    var myDropdown = document.getElementById("myDropdown3");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
  function myFunction4() {
    document.getElementById("myDropdown4").classList.toggle("show");
    
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown4");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
 
  function myFunction5() {
    
    document.getElementById("myDropdown5").classList.toggle("show");
  }
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn1')) {
    var myDropdown = document.getElementById("myDropdown5");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }

  