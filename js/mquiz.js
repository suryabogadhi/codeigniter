 	function startTimer(duration, display) {
	    var timer = duration, minutes, seconds;
	    setInterval(function () {
	        minutes = parseInt(timer / 60, 10)
	        seconds = parseInt(timer % 60, 10);

	        minutes = minutes < 10 ? "0" + minutes : minutes;
	        seconds = seconds < 10 ? "0" + seconds : seconds;

	        display.text(minutes + ":" + seconds);

	        if (--timer < 0) {
	            timer = duration;
	            $( "#sub_one" ).trigger( "click" );
	        }
	    }, 1000);
	}
	
	// TIMER CODE
	$( window ).load(function() {
		var refresh;
		var fiveMinutes = 29,
        	display = $('#time');
        	startTimer(fiveMinutes, display);	
	});


	// REMOVE RIGHT CLICK OPTION
	$(document).ready(function(){
	    $(document).on("contextmenu",function(e){
	        if(e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
	             e.preventDefault();
	     });
	 }); 