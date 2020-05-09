<!DOCTYPE html>
<html>
<head>
	<title>School Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="lbs.css">
<script type="text/javascript">
	function logout() {
		var c = confirm("Are You Sure You want to logout??");
		if(c == true){
			alert("You have successfully logged out....");
			location.replace("../block-level/index.html");
		}
	}
</script>
</head>
<style>
body {
  background-image: url('123.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<body>
<div class="header" style="background-color: #333333;">
	<h2 style="margin-top: 50px;">School Management</h2><p id="date1" style="float: left;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);"></p>
		<script>
			var d = new Date(); 
		document.getElementById("date1").innerHTML = d.toDateString(); 
		</script> 
</div>
<div>
	<img src="logo1.jpeg" style="width: 256px; height: 200px; margin-left: 0px; margin-top: 0px;">
</div>
<div class="options" data-position="fixed" style="margin-top: 0px;">
    <a href="admin.php">Home</a>
    <a href="reguser1.php">Add Students </a> 
    <a href="newbook1.php">Modify Details</a>
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
  <a href="https://drive.google.com/open?id=1FGY9Y-2HELQl_VR6JQ3QvHfp-UMYHTMC" target="_blank">
<img border="0" alt="W3Schools" src="link.jpeg" width="100" height="100"></a>
<p style="margin-left: 110px; margin-top: -90px;"><b>CLICK ON THE IMAGE</b></p><br>
<p style="margin-left: 110px; margin-top: -40px;"><b>TO DOWNLOAD OUT</b></p>
<p style="margin-left: 110px; margin-top: -15px;"><b>APPLICATION.</b></p>
</body> 
</html>
