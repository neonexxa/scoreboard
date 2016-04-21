var ip = location.host;
$(document).ready(function() {
    $("#submit1,#submit2,#submit3,#submit4,#submit5,#submit6,#submit7,#submit8,#submit9,#submit10,#submit11").click(function() {  //listen to all submit
	var ID=$(this).closest("form").attr('id'); //get the id of form of the submit clicked
        $.ajax({
            type: 'POST',
            url: 'check_flag.php',
            data: 'flag='+ $("#flag_"+ID).val() +'&id='+ $("#identifier_"+ID).val(),
            success: function(data) {
				$('#status_'+ID).hide();

			if (data.indexOf("true") > -1) {  //if response contains "true" - yeay!
				$('#status_'+ID).html('<img src="../images/green_tick.png"/>');
				//$('#status_'+ID).html(data);
				$('#status_'+ID).fadeIn(500);
				$('#chalbox_'+ID).fadeOut(2000);
			}
			else if (data.indexOf("false") > -1) {  //if response contains "false" - flag x betul
				$('#status_'+ID).html('<span style="color:red;">Try again...</span>');
				//$('#status_'+ID).html(data);
				$('#status_'+ID).fadeIn(500);
				setTimeout(function() {
					$('#status_'+ID).fadeOut(2000);
				}, 10000);
			}
			else if (data.indexOf("attempts") > -1) {  //if response contains "attempts" - mungkin bruteforce
				$('#status_'+ID).html('<span style="color:red;">Can neither confirm nor deny. Please slow down your flag submission. </span>');
				//$('#status_'+ID).html(data);
				$('#status_'+ID).fadeIn(500);
				setTimeout(function() {
				$('#status_'+ID).fadeOut(2000);
				}, 10000);
			}
			else if (data.indexOf("solved") > -1) {  //if response contains "solved"  - dah solved
				$('#status_'+ID).html('<span style="color:red;">Solved before.</span>');
				//$('#status_'+ID).html(data);
				$('#status_'+ID).fadeIn(500);
				$('#chalbox_'+ID).fadeOut(2000);
				setTimeout(function() {
					$('#status_'+ID).hide;
					$('#status_'+ID).html('<img src="../images/green_tick.png"/>');
					$('#status_'+ID).fadeIn(1000);
				}, 5000);
			}		
			else {
				$('#status_'+ID).html('<span style="color:red;">Unknown error. Please contact admin...</span>');
				$('#status_'+ID).fadeIn(500);
				setTimeout(function() {
					$('#status_'+ID).fadeOut(2000);
				}, 10000);
			}
			
            }    
        });
        return false;        
    });
});
