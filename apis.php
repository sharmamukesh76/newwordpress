<!-- All API calls -->

<?php
define ('BASE_URI', 'https://dev.txl.se/SensorAlarm/SensorAlarmBillectaHandler');
?>

<!-- GET PRODUCTS -->
<script type="text/javascript">
	if ($('.page-id-2').length){

		$.ajax({
	        type: "GET",
	        url: '<?php echo BASE_URI; ?>api/Billecta/GetPackages',
	        async:true,
		    crossDomain: true,
	    }).done(function(data) { 
	    	if (data.Result==true)
	    	{
	    		// for (var d=0; d<=data.Data.length; d++)
	    		// {
		    		$('#Description').text(data.Data[0].Description);
		    		$('#UnitPrice').text(data.Data[0].UnitPrice+':- /månad');


		    		$('#Description1').text(data.Data[1].Description);
		    		$('#UnitPrice1').text(data.Data[1].UnitPrice+':- /månad');
		    	// }
	    	}
	    	else
	    	{
	    		console.log('Err');
	    	}
		}).fail(function (data) {
    		console.log('APi read Err');
		});
	};
</script>