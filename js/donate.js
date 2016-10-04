jQuery(document).ready(function($){
		// function tierrange($){
			// var donateamount = $('#donate-amount').val();
				$( "#donate-amount" ).on("change paste keyup", function() {
	  				var donateamount = $( this ).val();
    $( "p" ).text( donateamount );
  // })
  // .keyup();
			if (donateamount <=149 && donateamount >=1 ) {
				var tier = '100';
			}
			else if (donateamount <=199 && donateamount >=150 ) {
				var tier = '150';
			}
			else if (donateamount <=499 && donateamount >=200 ) {
				var tier = '200';
			}
			else if (donateamount <=1999 && donateamount >=500 ) {
				var tier = '500';
			}
			else if (donateamount <=4999 && donateamount >=2000 ) {
				var tier = '2000';
			}
			else if (donateamount >=5000 ) {
				var tier = '5000';
			}
			// $("#donate-amount").on("change paste keyup", function() {
			  $(".price-box").removeClass('selected');
		      $('#' + tier + ".price-box").addClass('selected');
		      $('.price-explain').hide();
		      $('.donate-icon').hide();
		      $('#' + tier + ".price-explain").show();
		      $('#' + tier + ".donate-icon").show();
		      $('form#give-money-donate-form').removeClass();
		       $('form#give-money-donate-form').addClass('_' + tier);
  			});

		// }
		$('.price-box').click(function() {
    	var clickId= $(this).attr('id');
    	// var src = $(this).attr("src").replace("goals", "hover");
     //  $(this).attr('src',src);
     $(".price-box").removeClass('selected');
      $('#' + clickId + ".price-box").addClass('selected');
      $('.price-explain').hide();
       $('.donate-icon').hide();
      $('#' + clickId + ".price-explain").show();
      $('#' + clickId + ".donate-icon").show();
      $('form#give-money-donate-form').removeClass();
      $('form#give-money-donate-form').addClass('_' + clickId);
      $('#donate-amount').val(clickId);

      
	    
  });
		$('button.goal-btn').click(function() {
    	var clickId1= $(this).attr('id');
    	// var src = $(this).attr("src").replace("goals", "hover");
     //  $(this).attr('src',src);
      $('#' + clickId1).removeClass('hover');
    
  });



	});