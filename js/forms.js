"use strict";

$(document).ready(function() {
	// New User
	$("#registerForm").on('submit', function(){
	  event.preventDefault();

	  $.ajax({
	    url: "../config/register.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
        $('#registerForm .submit-btn').prop('disabled', true);
		    $("#registerForm .submit-btn").html("Loading <i class='spinner-border spinner-border-sm'></i>");
	    },
	    success: function(data) {
		    $("#registerForm .submit-btn").html("Sign Up");
		    if ( data.search('success') !== -1 ) {
          notifySuccess(data);
		    	$("#registerForm input").val('');
		    	$("#registerForm select").val('');
          $('#registerForm .submit-btn').prop('disabled', false);
		    }else {
          $('#registerForm .submit-btn').prop('disabled', false);
          notifyWarning(data);
		    }
	    },
	    error: function() {
        $('#registerForm .submit-btn').prop('disabled', false);
		    $("#registerForm .submit-btn").html("Sign Up");
        notifyWarning('An error occured, try again!');
	    }
	  });
	});

	// loginForm
	$("#loginForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
        $('#loginForm .submit-btn').prop('disabled', true);
		    $("#loginForm .submit-btn").html("Loading <i class='spinner-border spinner-border-sm'></i>");
	    },
	    success: function(data) {
		    $("#loginForm .submit-btn").html("Sign In");
		    if ( data.search('success') !== -1 ) {
		    	$("#loginForm input").val('');
					notifySuccess("Taking you to your dashboard");
		    	window.location.href = 'dashboard';
		    }else {
          $('#loginForm .submit-btn').prop('disabled', false);
					notifyWarning(data);
		    }
	    },
	    error: function() {
        $('#loginForm .submit-btn').prop('disabled', false);
		    $("#loginForm .submit-btn").html("Sign In");
        notifyWarning('An error occured, try again!');
	    }
	  });
	});

	// depositForm
	$("#depositForm").on('submit', function(ev){
	  ev.preventDefault();
		
	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#depositForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#depositForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#depositForm .submit-btn").html('<i class="bi bi-check-circle"></i> Continue to Payment');
		    $("#depositForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	notifySuccess(data);
		    	$('.modal').modal('hide');
		    	$("#depositForm input[type='file']").val('');
		    	$("#depositForm input[type='number']").val('');
					setTimeout( function() {
						window.location.reload();
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(err) {
		    $("#depositForm .submit-btn").html('<i class="bi bi-check-circle"></i> Continue to Payment');
		    $("#depositForm .submit-btn").removeClass("disabled");
	    	notifyWarning(JSON.stringify(err));
	    }
	  });
	});

	// withdraw Form
	$("#withdrawForm").on('submit', function(){
	  event.preventDefault();
	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#withdrawForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#withdrawForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#withdrawForm .submit-btn").html('<i class="bi bi-arrow-up-circle"></i> Request Withdrawal');
		    $("#withdrawForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
					$("#withdrawForm").find("input, select, textarea").val("");
		    	notifySuccess(data);
					setTimeout( function() {
						window.location.href = "./transactions?message="+data;
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#withdrawForm .submit-btn").html('<i class="bi bi-arrow-up-circle"></i> Request Withdrawal');
		    $("#withdrawForm .submit-btn").removeClass("disabled");
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

	// withdraw Form
	$("#transferForm").on('submit', function(){
	  event.preventDefault();
	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#transferForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#transferForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#transferForm .submit-btn").html("Withdraw");
		    $("#transferForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
					$("#transferForm").find("input, select, textarea").val("");
		    	notifySuccess(data);
					setTimeout( function() {
						window.location.href = "./transactions?message="+data;
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#transferForm .submit-btn").html("Withdraw");
		    $("#transferForm .submit-btn").removeClass("disabled");
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

	// investForm
	$("#investForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#investForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#investForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#investForm .submit-btn").html("Start investment");
		    $("#investForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	// $("#depositForm .feedback").html(data);
		    	notifySuccess(data);
					setTimeout( function() {
						window.location.href = "./invest-logs?message="+data;
					}, 3500);
		    }else {
		    	notifyWarning(data);
		      // $("#investForm .feedback").html(data);
		    }
	    },
	    error: function(error) {
		    $("#investForm .submit-btn").html("Start investment");
		    $("#investForm .submit-btn").removeClass("disabled");
	    	notifyWarning('An error occured, check your connection and try again');
	    	// $("#investForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// updateProfileForm
	$("#updateProfileForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#updateProfileForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#updateProfileForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#updateProfileForm .submit-btn").html("Save Changes");
		    $("#updateProfileForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	notifySuccess(data);
					$("#updateProfileForm input[type='password']").val("");
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#updateProfileForm .submit-btn").html("Save Changes");
		    $("#updateProfileForm .submit-btn").removeClass("disabled");
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

	// tokenForm
	$("#tokenForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#tokenForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#tokenForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#tokenForm .submit-btn").html("Verify token <i class='bi bi-arrow-right'></i>");
		    $("#tokenForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
					data = JSON.parse(data);
		    	notifySuccess(data.message);
					setTimeout( function() {
						window.location.href = "./verify-token?token="+data.data;
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#tokenForm .submit-btn").html("Verify token <i class='bi bi-arrow-right'></i>");
		    $("#tokenForm .submit-btn").removeClass("disabled");
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

	// accountSetupForm
	$("#accountSetupForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#accountSetupForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#accountSetupForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#accountSetupForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
		    $("#accountSetupForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	notifySuccess(data);
					setTimeout( function() {
						window.location.href = "./login?new_login";
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#accountSetupForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
		    $("#accountSetupForm .submit-btn").removeClass("disabled");
				console.log(error);
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

	// passwordForm
	$("#passwordForm").on('submit', function(ev){
	  ev.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#passwordForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
		    $("#passwordForm .submit-btn").addClass("disabled");
	    },
	    success: function(data) {
		    $("#passwordForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
		    $("#passwordForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	notifySuccess(data);
					setTimeout( function() {
						window.reload();
					}, 3500);
		    }else {
		    	notifyWarning(data);
		    }
	    },
	    error: function(error) {
		    $("#passwordForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
		    $("#passwordForm .submit-btn").removeClass("disabled");
				console.log(error);
	    	notifyWarning('An error occured, check your connection and try again');
	    }
	  });
	});

});