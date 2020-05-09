<!DOCTYPE html>
<html>
<head>
	<title>Library Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="lbs.css">
<script type="text/javascript">
	function logout() {
		var c = confirm("Are You Sure You want to logout??");
		if(c == true){
			alert("You have successfully logged out....");
			location.replace("index.html");
		}
	}
</script>
</head>
<body style="background-image: url(bg.jpg);">
<div class="header" style="background-color: #333333;">
	<h2 style="margin-top: 50px;">Block Management</h2><p id="date1" style="float: left;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);"></p>
		<script>
			var d = new Date(); 
		document.getElementById("date1").innerHTML = d.toDateString(); 
		</script>
		<!--<p style="float: right;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);">Welcome, <?php include 'db_conn.php';echo $_SESSION['name'];?>!</p>-->
</div>
<div>
	<img src="logo1.jpeg" style="width: 256px; height: 200px; margin-left: 0px; margin-top: 0px;">
</div>
<div class="options" style="margin-top: 0px;">
    <a href="admin.php">Home</a>
    <a href="reguser1.php">School</a> 
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
<div class="w3-animate-bottom" style="width: 900px;height: 100px; margin-left: 600px; margin-top: -600px;">
	

	</form>
</div>
</body>
</html>
