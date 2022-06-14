$('#ourteam').owlCarousel({
    items: 3,
    loop: false,
   // autoplay: true,
    nav: true,
    responsive: {
      0: {
          items: 1,
    
      },
      766: {
          items: 2,
      },
      1366: {
          items: 3,

      }
  }
});



$('#choose_card').owlCarousel({
    items: 1,
    loop: true,
   autoplay: true,
    nav: false,
    dots:true
  
});





$('#service_card').owlCarousel({
    items: 1,
    loop: true,
    dots:true,
    autoplay: true,
    nav: false,
  
});


/***************Scroll Header fixed js and search show hide **************************/
var prevScrollpos = window.pageYOffset;
console.log(prevScrollpos)
$(window).scroll(function() {    
var currentScrollPos = window.pageYOffset;

   console.log(scroll)

if (currentScrollPos >= 500) {
   $("header").addClass("active");
   $("header").css("top","0")
   
  
} else {
   $("header").removeClass("active");
//    $("header").css("top","-80px")
}

// if (currentScrollPos >= 500) {

//    $("header").addClass("active");
// }

// prevScrollpos = currentScrollPos;
});
/***************Scroll Header fixed js and search show hide  close**************************/






//AOS SCRIPT ANIMATION
AOS.init({
   disable: function() {
   var maxWidth = 1024;
   return window.innerWidth < maxWidth;
   },
   duration: 1200,
   });
   //AOS SCRIPT ANIMATION CLOSE  



   $(".mobile_nav").click(function(){
      $("nav").addClass("active");
   })

   $(".close_menu").click(function(){
      $("nav").removeClass("active");
   })













   function validateContactForm() {
      var valid = true;

      $(".info").html("");
      $(".input-field").css('border', '#e0dfdf 1px solid');
      var userName = $("#userName").val();
      var userEmail = $("#userEmail").val();
      var subject = $("#subject").val();
      var content = $("#content").val();
      
      if (userName == "") {
          $("#userName-info").html("Required.");
          $("#userName").css('border', '#e66262 1px solid');
          valid = false;
      }
      if (userEmail == "") {
          $("#userEmail-info").html("Required.");
          $("#userEmail").css('border', '#e66262 1px solid');
          valid = false;
      }
      if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
      {
          $("#userEmail-info").html("Invalid Email Address.");
          $("#userEmail").css('border', '#e66262 1px solid');
          valid = false;
      }

      if (subject == "") {
          $("#subject-info").html("Required.");
          $("#subject").css('border', '#e66262 1px solid');
          valid = false;
      }
      if (content == "") {
          $("#userMessage-info").html("Required.");
          $("#content").css('border', '#e66262 1px solid');
          valid = false;
      }
      return valid;
  }




//   document.onkeydown = function(e) {
//    if(event.keyCode == 123) {
//       return false;
//    }
//    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//       return false;
//    }
//    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//       return false;
//    }
//    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//       return false;
//    }
//    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//       return false;
//    }
//  }


//  $(document).bind("contextmenu",function(e) {
//    e.preventDefault();
//   });





var $navyyLi = $('.tab ul li a');
$navyyLi.click(function () {
    $navyyLi.removeClass('active');
    $(this).addClass('active');
});
$(document).ready(function () {
    function restab() {
        $('.tab ul li a').removeClass('active');
        $('.hide-box').removeClass('show-tab-box');
    }

    $('.tab ul li a').click(function () {
        restab();

        var getID = $(this).attr('data-in');
        $(this).addClass('active');
        $(getID).addClass('show-tab-box');
    });
});



function reset_acc() {
    $('.ac-title').removeClass('acc-active');
    $('.accordian-para').slideUp();
    $('.plus-icon').removeClass('cross-icon');
    }
    $('.ac-title').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('acc-active'))
    {
    reset_acc();
    }
    else {
    reset_acc();
    var getID = $(this).attr('data-in');
    $(getID).slideDown();
    $(this).addClass('acc-active');
    $(this).find('.plus-icon').addClass('cross-icon');
    }
    });




    $(window).scroll(function () {


        var currentScrollPos = $(window).scrollTop();
    
    
    
        if (currentScrollPos >= 800) {
    
            $(".dentistscroll_btn").css("opacity", "1");
        } else {
            $(".dentistscroll_btn").css("opacity", "0");
        }
    
    });