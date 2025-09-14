"use strict";

$(document).ready(function() {
	// New User
	$("#registerForm").on('submit', function(){
	  event.preventDefault();

	  $.ajax({
	    url: "../config/process.php",
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
		    $("#loginForm .submit-btn").html("Account login");
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
		    $("#loginForm .submit-btn").html("Account login");
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
		    $("#depositForm .submit-btn").html("Make payment");
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
		    $("#depositForm .submit-btn").html("Make payment");
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
		    $("#withdrawForm .submit-btn").html("Withdraw Now");
		    $("#withdrawForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	notify('success', data);
		    	$('.modal').modal('hide');
		    	window.location.href = "withdrawal?message="+data;
		    }else {
		    	notify('warning', data);
		    }
	    },
	    error: function(error) {
		    $("#withdrawForm .submit-btn").html("Withdraw Now");
		    $("#withdrawForm .submit-btn").removeClass("disabled");
	    	notify('warning', 'An error occured, check your connection and try again');
	    }
	  });
	});


	// investForm
	$("#investForm").on('submit', function(){
	  event.preventDefault();
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
		    $("#investForm .submit-btn").html("Invest Now");
		    $("#investForm .submit-btn").removeClass("disabled");
		    if ( data.search('success') !== -1 ) {
		    	// $("#depositForm .feedback").html(data);
		    	notify('success', data);
		    	$('.modal').modal('hide');
		    	window.location.href = "trades?message="+data;
		    }else {
		    	notify('warning', data);
		      // $("#investForm .feedback").html(data);
		    }
	    },
	    error: function(error) {
		    $("#investForm .submit-btn").html("Invest Now");
		    $("#investForm .submit-btn").removeClass("disabled");
	    	notify('warning', 'An error occured, check your connection and try again');
	    	// $("#investForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});
});