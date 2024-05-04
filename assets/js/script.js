$(document).ready(function () {
  $("#logoutlink").click(function () {
    $("#logoutmodal").modal("show");
  });
  $(".login").click(function () {
    $("#login-box").show();
    $("#signup-box").hide();
    $("#forgot-box").hide();
    $("#alert").hide();
  });
  $(".sign").click(function () {
    $("#login-box").hide();
    $("#signup-box").show();
    $("#forgot-box").hide();
    $("#alert").hide();
  });
  $("#forgot-btn").click(function () {
    $("#login-box").hide();
    $("#forgot-box").show();
    $("#alert").hide();
  });
  $("#login-form").validate();
  $("#forgot-form").validate();
  $("#signup-form").validate({
    rules: {
      cpass: {
        equalTo: "#pass",
      },
    },
  });

  // submit signup form without page refresh
  $("#signup").click(function (e) {
    if (document.getElementById("signup-form").checkValidity()) {
      e.preventDefault();
      $("#loader").show();
      $.ajax({
        url: "action.php",
        method: "post",
        data: $("#signup-form").serialize() + "&action=signup",
        success: function (response) {
          $("#alert").show();
          $("#result").html(response);
          $("#signup-form")[0].reset();
          $("#loader").hide();
        },
      });
    }
    return true;
  });

  // submit login form without page refresh
  $("#login").click(function (e) {
    if (document.getElementById("login-form").checkValidity()) {
      e.preventDefault();
      $("#loader").show();
      $.ajax({
        url: "action.php",
        method: "post",
        data: $("#login-form").serialize() + "&action=login",
        success: function (response) {
          if (response === "ok") {
            window.location = "post.php";
          } else {
            $("#alert").show();
            $("#result").html(response);
            $("#login-form")[0].reset();
            $("#loader").hide();
          }
        },
      });
    }
    return true;
  });

  // submit forgot form without page refresh
  $("#forgot").click(function (e) {
    if (document.getElementById("forgot-form").checkValidity()) {
      e.preventDefault();
      $("#loader").show();
      $.ajax({
        url: "action.php",
        method: "post",
        data: $("#forgot-form").serialize() + "&action=forgot",
        success: function (response) {
          $("#alert").show();
          $("#result").html(response);
          $("#forgot-form")[0].reset();
          $("#loader").hide();
        },
      });
    }
    return true;
  });
});
