<!DOCTYPE html>
<html>
<head>
	<title>State Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
<div class="options" style="margin-top: 0px;">
  <a href="admin.php">Home</a>
    <a href="reguser1.php">Analytics</a>
    <a href="newbook1.php">Report Generation</a>
    <a onclick="logout()" style="color: white;">Log Out</a>
</div>
<div style="padding-left: 500px; margin-top: -500px;">
    <script type="text/javascript">


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        var c1;
        var c2;

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Student');
        data.addColumn('number', 'NoOfStudents');
          $.ajax({
          url:"dbstats.php",
          method:"POST",
          dataType: 'json',
          cache : false,
          async : false,
          success:function(data1)
          {
              console.log(data1);
              c1 = parseInt(data1.c1m);
              c2 = parseInt(data1.c1f);
          }
          });
        data.addRows([
              ['Male', c1],
              ['Female', c2]
              ]);

        // Set chart options
        var options = {'title':'Gender',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div"></div>
</div>
<div style="padding-left: 1000px; padding-bottom: 400px; margin-top: -300px;">
    <!--Load the AJAX API-->
    <script type="text/javascript">


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        var c1;
        var c2;

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Student');
        data.addColumn('number', 'NoOfStudents');
          $.ajax({
          url:"dbstats1.php",
          method:"POST",
          dataType: 'json',
          cache : false,
          async : false,
          success:function(data1)
          {
              console.log(data1);
              c1 = parseInt(data1.l);
              c2 = parseInt(data1.nl);
          }
          });
        data.addRows([
              ['TC Issued', c1],
              ['Not Issued', c2]
              ]);

        // Set chart options
        var options = {'title':'TC',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
    <!--Div that will hold the pie chart-->
    <div id="chart_div1"></div>
    <div style="padding-left: -500px; margin-top: 50px; margin-left: -500px;">
    <!--Load the AJAX API-->
    <script type="text/javascript">


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        var c1;
        var c2;
        var c3;

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Student');
        data.addColumn('number', 'NoOfStudents');
          $.ajax({
          url:"dbstats2.php",
          method:"POST",
          dataType: 'json',
          cache : false,
          async : false,
          success:function(data1)
          {
              console.log(data1);
              c1 = parseInt(data1.c1);
              c2 = parseInt(data1.c2);
              c3 = parseInt(data1.c3);
          }
          });
        data.addRows([
              ['Class_1', c1],
              ['Class_2', c2],
              ['Class_3', c3]
              ]);

        // Set chart options
        var options = {'title':'Each Class Students',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
    <!--Div that will hold the pie chart-->
    <div id="chart_div2"></div>
    <div style="padding-left: 500px; margin-top: -300px;">
    <!--Load the AJAX API-->
    <script type="text/javascript">


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        var c1;
        var c2;

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Student');
        data.addColumn('number', 'NoOfStudents');
          $.ajax({
          url:"dbstats3.php",
          method:"POST",
          dataType: 'json',
          cache : false,
          async : false,
          success:function(data1)
          {
              console.log(data1);
              maths = parseInt(data1.maths);
              sst = parseInt(data1.sst);
              science = parseInt(data1.science);
          }
          });
        data.addRows([
              ['Maths', maths],
              ['SST', sst],
              ['Science', science]
              ]);

        // Set chart options
        var options = {'title':'Teachers for each subject',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
    </script>
    <!--Div that will hold the pie chart-->
    <div id="chart_div3"></div>
  </body>
</html>
</div>

</body>
</html>
