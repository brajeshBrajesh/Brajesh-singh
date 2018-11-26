<html>

<head>
<title>CFT_1</title>

<style type="text/css">
body{
	background-color:grey;
}

body #main{
	  position:absolute;
	  background-color:black;
	  height:54%;
	  width:51.5%;
	  top:200px;
	  left:400px;
	  border:2px solid white;
	  
	  
	}

#main #top_bar{
	
	position:relative;
	width:100%;
	background-color:white;
	height:30px;
	top:-20px;
			 }
		
#main #top_bar #top_msg{
	
	position:relative;
	color:red;
	font-size:20px;
	}

#heading{
	
		position:absolute;
		font-size:70px;
		color:blue;
		left:600px;
		text-shadow:2px 2px 5px red;
		}
</style>

<script>


</script>

</head>

<body>
<h1 id="heading">Capture The flag</h1>

<div id="main">
	<div id="top_bar">
		<p id="top_msg"><i><strong>Cyberteam</strong></i></p>
	
	
	</div>
	
	<div>
		<form action="validate.php" method="post">
		<br/><br/>
		<label  style="color:white;font-size:25px"><span style="color:green">Q) </span>Enter your working directory.</label>
		<br/>
		<label style="color:white;font-size:25px"><strong>-></strong></label>
		<input type="text"   name="answer" style="background-color:black;font-size:25px;color:white;width:40%;border:none"/>
		<br/>
		<input type="submit" value="submit" style="display:none"/>
		
		</form>
	
	
	</div>
	
	

</div>


</body>

</html>
