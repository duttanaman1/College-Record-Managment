/* ========================WRITE YOUR JS FROM HERE======================== */
$(document).ready(function() {
  $(window).on("load", function() {
    $("nav")
      .animate({ right: "15%" })
      .delay(200);
    $("nav")
      .animate({ left: "5%" })
      .delay(100);
    $("nav")
      .animate({ left: "0%" })
      .delay(50);
    //animating the navigation bar
  });

  $("#headingClick").text("Click to enter your details");
  $("#headingClick").click(function() {
    $("#form")
      .slideToggle("slow")
      .delay(800);
    $(".footer").slideToggle("slow");
    $("#headingClick").text("Fill in your details");
    //animating the heading
  });

  $("#submit").click(function(e) {
    e.preventDefault();
    //on submission validating
    var usrname = $("#usrname").val();
    var confpass = $("#confpass").val();
    var email = $("#email").val();
    var password = $("#pass").val();
    var err = false;
    $(".error").remove();

    if (usrname.length < 1) {
      $("#usrname").after(
        '<br><span class="error">This field is required</span>'
      );
      err = true;
    }
    if (email.length < 1) {
      $("#email").after(
        '<br><span class="error">This field is required</span>'
      );
      err = true;
    } else {
      var regEx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $("#email").after('<br><span class="error">Enter a valid email</span>');

        err = true;
      }
    }

    if (password.length < 8) {
      $("#pass").after(
        '<br><span class="error">Password must be at least 8 characters long</span>'
      );
      err = true;
    }
    if (password !== confpass) {
      $("#confpass").after(
        '<br><span class="error">Confirm Password is not same</span>'
      );
      err = true;
    }
    if (err == false) {
      $("div")
        .animate({
          height: "toggle"
        })
        .delay(800);
      //if no error in validating moving on to sucess window
      window.open("sucess.html", "_self").delay(3000);
    }
  });
});
