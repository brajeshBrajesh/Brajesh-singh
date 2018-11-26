<html>

<head>
<title>Validation</title>
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


</style>
</head>
<body>
<div id="main">
	<div id="top_bar">
		<p id="top_msg"><i><strong>Cyberteam</strong></i></p>
	
	
	</div>
		<div id="msg">

<?php

$answer=$_POST['answer'];

$ans='pwd';

if($answer==$ans)
{
?>
	
   <h1 style="color:white">Successful</h1>
<?php
echo "<script>setTimeout(\"location.href='./next.php';\",3000);</script>";
}

else
{
?>
	<h1 style="color:white">Not successful</h1>
	<?php
	echo  "<script>setTimeout(\"location.href='./task1.php';\",3000);</script>";
}
?>
		</div>
</html>