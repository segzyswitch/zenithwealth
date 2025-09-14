$(function(){

	calc();

	$('#calc_plan').on('change', calc);
	$('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);

});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode > 31 && (charCode < 45 || charCode > 57))
		return false;
	return true;
}

function calc() {

	var plan = $('#calc_plan').val();
	var amount = $('#inv_amount').val();
	var percent;

	switch (plan) {
		case '1':
			switch (true) {
				case (amount>=30):
					percent = 20;
					break;
			
		

			
		case '2':
			switch (true) {
				case (amount>=500 ):
					percent = 50;
					break;
				
			
			
		case '3':
			switch (true) {
				case (amount>=1000):
					percent = 100;
					break;
			
			
		case '4':
			switch (true) {
				case (amount>=5000):
					percent = 150;
					break;
				
						
	case (amount<=25000):
					percent = 700;
					break;	
					
			   default:
					percent = 0;
			}
			break;
	
	case '5':
			switch (true) {
				case (amount<20):
					percent = 0;
					break;
				case (amount>25000):
					percent = 0;
					break;
				case (amount<=999):
					percent = 280;
					break;	
					
					case (amount<=1999):
					percent = 400;
					break;

	case (amount<=4999):
					percent = 550;
					break;	

	case (amount<=9999):
					percent = 780;
					break;						
	
						
	case (amount<=25000):
					percent = 1100;
					break;	
					
			   default:
					percent = 0;
			}
			break;	
			
case '6':
			switch (true) {
				case (amount<20):
					percent = 0;
					break;
				case (amount>25000):
					percent = 0;
					break;
				case (amount<=999):
					percent = 850;
					break;	
					
					case (amount<=1999):
					percent = 1050;
					break;

	case (amount<=4999):
					percent = 1450;
					break;	

	case (amount<=9999):
					percent = 1900;
					break;						
	
						
	case (amount<=25000):
					percent = 2500;
					break;	
					
			   default:
					percent = 0;
			}
			break;	
				
		
			
		case '7':
			switch (true) {
				case (amount<5000):
					percent = 0;
					break;
				case (amount>50000):
					percent = 0;
					break;
				case (amount<=50000):
					percent = 1100;
					break;	

			   default:
					percent = 0;
			}
			break;
			
		case '8':
			switch (true) {
				case (amount<1000):
					percent = 0;
					break;
				case (amount>50000):
					percent = 0;
					break;
				case (amount<=50000):
					percent = 3000;
					break;	

			   default:
					percent = 0;
			}
			break;
		
			
	}

$('#assign_per').val(percent+'%');
	var total = amount*percent/100;
	$('#total_return').val('$'+total.toFixed(2));
	
	if(total <= 0){
		$('#net_profit').val('0.00');
	}else{
		$('#net_profit').val('$'+(total-amount).toFixed(2));
	}
	
	
	

}



