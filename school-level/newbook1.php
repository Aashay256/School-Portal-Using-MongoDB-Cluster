 <!DOCTYPE html>
<html>
<head>
	<title>School Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="lbs.css">
<script src="jquery.min.js"></script>
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
		<!--<p style="float: right;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);">Welcome, <?php include 'db_conn.php';echo $_SESSION['name'];?>!</p>-->
</div>
<div>
	<img src="logo1.jpeg" style="width: 256px; height: 200px; margin-left: 0px;">
</div>
<div class="options" data-position="fixed" style="margin-top: 0px;">
    <a href="admin.php">Home</a>
    <a href="reguser1.php">Add Students</a> 
    <a href="newbook1.php">Modify Details</a>
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
<a href="https://drive.google.com/open?id=1FGY9Y-2HELQl_VR6JQ3QvHfp-UMYHTMC" target="_blank">
<img border="0" alt="W3Schools" src="link.jpeg" width="100" height="100"></a>
<p style="margin-left: 110px; margin-top: -90px;"><b>CLICK ON THE IMAGE</b></p><br>
<p style="margin-left: 110px; margin-top: -40px;"><b>TO DOWNLOAD OUT</b></p>
<p style="margin-left: 110px; margin-top: -15px;"><b>APPLICATION.</b></p>
<div class="w3-animate-bottom" style="width: 700px; height: 100px; margin-left: 600px; margin-top: -650px;">
	<div class="container" >
		<div class="login-box" >
		<div class="row" >
			<div class="col-md-10" align="center">
				<h2 class="whitetext"> Modify the details of the Students </h2>
				<form action="modistud.php" method="POST">
					<div class="form-group" >
						<label><h5 class="whitetext">Please Enter the student Roll No</h5></label>
						<input type="number" name="rollnumber" class="form-control" id="rno" required>
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">Student Name</h5></label>
						<input type="text" name="sname" class="form-control" id="sname" required>
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">Attendance</h5></label>
						<input type="text" name="attendance" class="form-control" id="attend" required>
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">TC Issue Date</h5></label>
						<input type="text" name="tc" class="form-control" id="tc">
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">FM Maths</h5></label>
						<input type="text" name="math" class="form-control" id="math" required>
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">FM SST</h5></label>
						<input type="text" name="sst" class="form-control" id="sst" required>
							
					</div>
					<div class="form-group" >
						<label><h5 class="whitetext">FM Science</h5></label>
						<input type="text" name="science" class="form-control" id="science" required>
							 
					</div>
					<button type="submit" align="center" class="btn btn-primary" name="submit">Submit</button>
					<div class="form-group" >
						<label><h5 class="whitetext">Request for changing other details</h5></label>
						<a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqXPjjPWcLDnkPpjcHnflKhvLrdnnRGzClDcpgPfLhlNmmhvssNcbXLkthwKhssSXRDhcL">Write Request</a>
						<p>send a mail to govsikkim.co.in</p>
							 
					</div>
					<script>
	var data = [];
 function load_data(rollno,sname)
 {
  $.ajax({
   url:"newstudsearch.php",
   method:"POST",
   data:{rollno:rollno,sname:sname},
   dataType: 'json',
   success:function(data)
   {
   		console.log(data);
   			$('#attend').val(data.Attendance); 
   			$('#tc').val(data.TC_Issue_Date);
   			$('#math').val(data.FM_Maths);
   			$('#sst').val(data.FM_SST);
   			$('#science').val(data.FM_Science); 
   }
  });
 }
 /*if ($('#attend').val() == '') {
 	window.location = "reguser1.php";
 }*/
//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 800;  //time in ms (5 seconds)

//on keyup, start the countdown
$('#sname').keyup(function(){
    clearTimeout(typingTimer);
    if ($('#sname').val()) {
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    }
});

//user is "finished typing," do something
function doneTyping () {
    //do something
  var rnodata = $("#rno").val();
  var namedata = $("#sname").val();
  if(namedata != '')
  {
   load_data(rnodata,namedata);
  }
}
</script>
					
				</form>
			</div>
			
		</div>	
		</div>
	</div>

	</form>
</div>
</body>
</html>
