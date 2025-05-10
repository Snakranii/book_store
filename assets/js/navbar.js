function myFunction() {
    var element = document.getElementById("nav-togglebar");
    element.classList.toggle("open-menu");  
}
function myfunction1() {
  var element = document.getElementById("user-btn");
  element.classList.toggle("active");
}
document.querySelector('#close-update').onclick = () =>{
  document.querySelector('.edit-product-form').style.display = 'none';
  window.location.href = 'admin_product.php';
}

// let userBox = document.querySelector('.header .nav-icons .user-box');
// document.querySelector('#user-btn').onclick = () =>{
//    userBox.classList.toggle('active');
  //  navbar.classList.remove('active');


// document.querySelector('.navbar-toggler').addEventListener('click', function(){ 
//     if(this.getAttribute('aria-expanded')) { 
//       this.classList.toggle('bg-dark');
//     };
//   });
  