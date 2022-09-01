<html>
	<head>
		<title>Capcha</title>
	</head>
	<style>
	table
	{
		font-size:20;
		font-family:verdana;
	}
	textarea
	{
			font-size:20;
	}
	</style>
	<script>
	function generatecapcha()
	{
		var str1 = Math.ceil(Math.random() * 10) + '';
		var str2 = Math.ceil(Math.random() * 10) + '';
		var str3 = Math.ceil(Math.random() * 10) + '';
		
		var capchacode = str1 + '' + str2 + '' + str3 ;
		
		document.getElementById("capchahere").value = capchacode 
	}
	function verifycapcha()
	{
		var chr1 = document.getElementById('capcha').value;
		var chr2 = document.getElementById('capchahere').value;
		
		if ( chr1 == chr2)
		{
			alert("Your Capcha Is Right");
		}
		else
		{
			alert("Please Enter Valid Capcha");
		}
	}
	</script>
	<body>
	<table border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th colspan="2">Capcha Verification</th>
	</tr>
	<tr>
		<th>Enter The Capcha Text</th>
		<td><input type="text" name="capcha" id="capcha" placeholder="Enter a valid capcha"></td>
	</tr>
	<tr>
		<th>Generate Capcha:</th>
		<td><textarea cols="21" rows="5" name="capchahere" id="capchahere" ></textarea></td>
	</tr>
	<tr>
		<th></th>
		<td><input type="button" name="verify" id="verify" value="Verify" onclick="verifycapcha()">
		<input type="button" name="refresh" id="refresh" value="Refresh" onclick="generatecapcha()"></td>
		
	</tr>
	</table>
	</body>
</html> 

