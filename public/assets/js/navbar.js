// Hide Navbar on scroll down
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;

}


// active menu
// $(document).ready(function(){
//   $('ul li a').click(function(){
//     $('li a').removeClass("active");
//     $(this).addClass("active");
// });
// });