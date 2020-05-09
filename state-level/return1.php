<?php
$name = $_POST['name'];
$tcd = $_POST['tcd'];
$class = $_POST['clas'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>State Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="lbs.css">
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
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
	<h2 style="margin-top: 50px;">State Management</h2><p id="date1" style="float: left;margin-top: -30px;font-weight: bold;color: rgb(255,255,128);"></p>
		<script>
			var d = new Date(); 
		document.getElementById("date1").innerHTML = d.toDateString(); 
		</script>
</div>
<div>
	<img src="logo1.jpg" style="width: 256px; height: 200px; margin-left: 0px;">
</div>
<div class="options" data-position="fixed" style="margin-top: 0px;">
    <a href="admin.php">Home</a>
    <a href="reguser1.php">Analytics</a>
    <a href="newbook1.php">Report Generation</a>
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
<div class="w3-animate-bottom" style="width: 900px; height: 500px; margin-left: 400px; margin-top: -600px;"> 
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878; margin-top: 150px; background-color: white;">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Transfer Certificate</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><?php echo $name;?></span><br/><br/>
       <span style="font-size:25px"><i>has completed the schooling till class</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo $class;?></span><br/><br/>
       <span style="font-size:20px">and is being granted the Transfer Certificate on<b></b></span> <br/><br/><br/><br/>
       <div style="margin-top: -50px;"><?php echo $tcd;?></div>
       <span style="font-size:25px"><i>Date</i></span><br>
       <script type="text/javascript">
         function dnldimage() {
        html2canvas([document.getElementById('test')],{
        onrendered: function (canvas) {
         var data = canvas.toDataURL('image/jpeg');
         var im = document.createElement('a');
         console.log(data);
         im.setAttribute('download' , 'image.jpeg');
         im.setAttribute('id' , 'test1');
         im.setAttribute('href' , data);
         document.body.appendChild(im);
         $('#test1')[0].click();
          }
        });
        }     
       </script>
       <input type="image" src="1.png" id="sdcard1" alt="download" style="margin-right: -1000px; margin-top: -1000px; width: 85px;" onclick="dnldimage();">
</div>
</div>
</div>
</body>
</html>
