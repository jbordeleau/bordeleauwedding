jQuery(document).ready(function () {
 
	// -------------- Add or remove guests ----------------------------------------------
		// $('div.shaded').css('width','25%');
		var i = $('#guests div.col-md-3').size();
		$('button#addGuest').click(function(){
			$('#removeGuest').removeAttr('disabled','disabled');
			$('<div class="col-md-3 shaded"><h1>&nbsp;</h1><h4>Additional Guest ' + i + ' Info:</h4><div class="form-group"><label for="firstName' + i + '">First Name:</label><input type="text" class="form-control" id="firstName' + i + '" placeholder="First Name"></div><div class="form-group"><label for="lastName' + i + '">Last Name:</label><input type="text" class="form-control" id="lastName' + i + '" placeholder="Last Name"></div><div class="form-group"><label for="foodChoice' + i + '">Select Food:</label><select class="form-control" id="foodChoice' + i + '" name="foodChoice' + i + '"><option value="">Select Food</option><option value="chicken">Chicken</option><option value="beef">Beef</option><option value="vegetarian">Vegetarian</option></select></div></div>').appendTo('div#guests');
			/* $('<div class="col-md-3"><h4>Additional Guest ' + i + ' Info:</h4><div class="form-group"><label for="firstName' + i + '">First Name:</label><input type="text" class="form-control" id="firstName' + i + '" placeholder="First Name"></div><div class="form-group"><label for="lastName' + i + '">Last Name:</label><input type="text" class="form-control" id="lastName' + i + '" placeholder="Last Name"></div><div class="form-group"><label for="foodChoice' + i + '">Select Food:</label><select class="form-control" id="foodChoice' + i + '" name="foodChoice' + i + '"><option value="">Select Food</option><option value="chicken">Chicken</option><option value="beef">Beef</option><option value="vegetarian">Vegetarian</option></select></div></div>').appendTo('div#guests'); */
			i++;
			if(i===4){
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
				$('#guests div.col-md-3:last').remove();
				i--;
				if(i===3){
					$('#addGuest').removeAttr('disabled','disabled');
				}
				if(i===1){
					$('#removeGuest').attr('disabled','disabled');
				}
				return false;
			}
		});


	// ----------------------------------------------------------------------------------
	// -------------- Form Validation ---------------------------------------------------
		$('input,select').keypress(function(event) { 
			if (event.keyCode == 13) {
				event.preventDefault();
			}
		});
		$('input,select').on("blur", function() {
			var myLength = $(this).val().length;
			if (myLength <= 2) {
				$(this).parent().addClass('has-error');
			} else {
				$(this).parent().removeClass('has-error');
				$(this).parent().addClass('has-success');

			}
		});
});