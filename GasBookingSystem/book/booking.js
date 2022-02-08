function booking()
	{
		var dist = document.getElementById("dist").value;
		var qty = document.getElementById("qty").value;			
		
		if(dist=='')
		{
			alert('Please select a distributor');
		}
		else if(qty==''){
			alert('Please select required quantity')
		}
		else
		{				                            
               alert('Your booking is confirmed. You will be now redirected to home page');
			   // Redirecting to other page
			   window.location = "file:///C:/Users/monis/Downloads/GasBookingSystem/GasBookingSystem/index.html"; 
		}
	}
	function refresh()
	{
		document.getElementById("dist").value="";
		document.getElementById("qty").value="";
	}