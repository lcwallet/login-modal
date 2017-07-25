// Plugin options and our code
$("#modal_trigger").leanModal({
		top: 100,
		overlay: 0.6,
		closeButton: ".modal_close"
});

$(function() {


	    $("#modal_trigger").click(function() {
				$("#myNavbar").hide();
				$(".navbar-header").css( { opacity : "0.6" } );
				return false;
		});

		$(".modal_close").click(function() {
				$(".navbar-header").css( { opacity : "1" } );
				return false;
		});

		 $(".navbar-toggle").click(function() {
				$("#myNavbar").show();
				return false;
		});


		$(".InitialForm_btn").click(function() {
			    $(".header_title").text('Register');
				$(".InitialForm_pg").show();
				$(".LoginForm_pg").hide();
				$(".RegisterForm_pg").hide();
				return false;
		});

		$(".LoginForm_btn").click(function() {
			    $(".header_title").text('Sign in');
				$(".InitialForm_pg").hide();
				$(".LoginForm_pg").show();
				$(".RegisterForm_pg").hide();
				return false;
		});		

		$(".RegisterForm_btn").click(function() {
			    $(".header_title").text('Register');
				$(".InitialForm_pg").hide();
				$(".LoginForm_pg").hide();
				$(".RegisterForm_pg").show();
				return false;
		});

});