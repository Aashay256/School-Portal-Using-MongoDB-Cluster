<!DOCTYPE html>
<html>
<head>
	<title>State Management</title>
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
	<h2 style="margin-top: 50px;">State Management</h2><p id="date1" style="float: left;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);"></p>
		<script>
			var d = new Date(); 
		document.getElementById("date1").innerHTML = d.toDateString(); 
		</script>
		<!--<p style="float: right;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);">Welcome, <?php include 'db_conn.php';echo $_SESSION['name'];?>!</p>-->
</div>
<div>
	<img src="logo1.jpg" style="width: 256px; height: 200px; margin-left: 0px; margin-top: 0px;">
</div>
<div class="options" data-position="fixed" style="margin-top: 0px;">
    <a href="admin.php">Home</a>
    <a href="reguser1.php">Analytics</a>
    <a href="newbook1.php">Report Generation</a>
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
</body>
</html>
