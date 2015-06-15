jQuery(document).ready(function () {
 
	// -------------- Add or remove guests ----------------------------------------------
		// $('div.shaded').css('width','25%');
		var i = $('#guests div.col-md-3').size();
		$('button#addGuest').click(function(){
			$('#removeGuest').removeAttr('disabled','disabled');
			$('div.col-md-3:nth-Child(' + i +')').css('display','block');


			/*$('<div class="col-md-3 shaded"><h1>&nbsp;</h1><h4>Additional Guest ' + i + ' Info:</h4><div class="form-group"><label for="firstName' + i + '">First Name:</label><input type="text" class="form-control" id="firstName' + i + '" placeholder="First Name"></div><div class="form-group"><label for="lastName' + i + '">Last Name:</label><input type="text" class="form-control" id="lastName' + i + '" placeholder="Last Name"></div><div class="form-group"><label for="foodChoice' + i + '">Select Food:</label><select class="form-control" id="foodChoice' + i + '" name="foodChoice' + i + '"><option value="">Select Food</option><option value="chicken">Chicken</option><option value="beef">Beef</option><option value="vegetarian">Vegetarian</option></select></div></div>').appendTo('div#guests');
			 $('<div class="col-md-3"><h4>Additional Guest ' + i + ' Info:</h4><div class="form-group"><label for="firstName' + i + '">First Name:</label><input type="text" class="form-control" id="firstName' + i + '" placeholder="First Name"></div><div class="form-group"><label for="lastName' + i + '">Last Name:</label><input type="text" class="form-control" id="lastName' + i + '" placeholder="Last Name"></div><div class="form-group"><label for="foodChoice' + i + '">Select Food:</label><select class="form-control" id="foodChoice' + i + '" name="foodChoice' + i + '"><option value="">Select Food</option><option value="chicken">Chicken</option><option value="beef">Beef</option><option value="vegetarian">Vegetarian</option></select></div></div>').appendTo('div#guests'); */


			i++;
			if(i===3){
				$('button#addGuest').attr('disabled','disabled');
			}
			return false;
		});
		
		$('button#removeGuest').click(function(){
			if(i===1){
				$('#removeGuest').removeAttr('disabled','disabled');
				return false;
			}
			else {
				$('#guests div.col-md-3:nth-Child(' + (i-1) +')').css('display','none');
				$('#guests div.col-md-3:nth-Child(' + (i-1) +') input,#guests div.col-md-3:nth-Child(' + (i-1) +') select').val('');
				$('#guests div.col-md-3:nth-Child(' + (i-1) +') input,#guests div.col-md-3:nth-Child(' + (i-1) +') select').parent().removeClass('has-success has-error');
				i--;
				if(i===2){
					$('#addGuest').removeAttr('disabled','disabled');
				}
				if(i===2){
					$('#removeGuest').attr('disabled','disabled');
				}
				return false;
			}
		});


	// ----------------------------------------------------------------------------------
	// -------------- Form Validation ---------------------------------------------------
		// Prevent the enter key from submitting the form
			$('input,select').keypress(function(event) { 
				if (event.keyCode == 13) {
					event.preventDefault();
				}
			});

		// Add the error and success styles when leaving the form fields
			$('input,select').on("blur", function() {
				var myLength = $(this).val().length;
				if (myLength <= 2) {
					$(this).parent().addClass('has-error');
				} else {
					$(this).parent().removeClass('has-error');
					$(this).parent().addClass('has-success');

				}
			});

		// Hide submit button if either field is empty
		    $('#rsvpForm input, #rsvpForm select, #rsvpForm button').on("keyup change click",function(){
		    	if(i==2){
			        if($('#firstName0').val() == "" || $('#lastName0').val() == "" || $('#foodChoice0').val() == "" || $('#accommodation0').val() == ""){
			            $('#submit').attr('disabled','disabled')
			        }
			        else {
			            $('#submit').removeAttr('disabled','disabled');
			        }
			    }
			    else if(i==3){
			    	if($('#firstName0').val() == "" || $('#lastName0').val() == "" || $('#foodChoice0').val() == "" || $('#accommodation0').val() == "" || $('#firstName1').val() == "" || $('#lastName1').val() == "" || $('#foodChoice1').val() == ""){
			            $('#submit').attr('disabled','disabled')
			        }
			        else {
			            $('#submit').removeAttr('disabled','disabled');
			        }
			    }
			    else if(i==4){
			    	if($('#firstName0').val() == "" || $('#lastName0').val() == "" || $('#foodChoice0').val() == "" || $('#accommodation0').val() == "" || $('#firstName1').val() == "" || $('#lastName1').val() == "" || $('#foodChoice1').val() == "" || $('#firstName2').val() == "" || $('#lastName2').val() == "" || $('#foodChoice2').val() == ""){
			            $('#submit').attr('disabled','disabled')
			        }
			        else {
			            $('#submit').removeAttr('disabled','disabled');
			        }
			    }
			    else if(i==5){
			    	if($('#firstName0').val() == "" || $('#lastName0').val() == "" || $('#foodChoice0').val() == "" || $('#accommodation0').val() == "" || $('#firstName1').val() == "" || $('#lastName1').val() == "" || $('#foodChoice1').val() == "" || $('#firstName2').val() == "" || $('#lastName2').val() == "" || $('#foodChoice2').val() == "" || $('#firstName3').val() == "" || $('#lastName3').val() == "" || $('#foodChoice3').val() == ""){
			            $('#submit').attr('disabled','disabled')
			        }
			        else {
			            $('#submit').removeAttr('disabled','disabled');
			        }
			    }
		    });
		    $('#songForm input, #songForm select, #songForm button').on("keyup change click",function(){
		        if($('#requestName').val() == "" || $('#artistName').val() == "" || $('#songName').val() == ""){
		            $('#submitSong').attr('disabled','disabled')
		        }
		        else {
		            $('#submitSong').removeAttr('disabled','disabled');
		        }
			});
});