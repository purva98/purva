<?php
include('connsp.php');

if(isset($_REQUEST['submit']))
{
	$TeamName = $_REQUEST['Team Name'];
	$Name = $_REQUEST['Name'];
	$Mail=$_REQUEST['Mail ID'];
 	$City = $_REQUEST['City']; 	
 	$College = $_REQUEST['College'];
 	$Contact= $_REQUEST['Contact Number']; 	
 	$GitHub = $_REQUEST['GitHub Profile'];
    $stack = $_REQUEST['Stackoverflow Profile'];
    $project = $_REQUEST['Projects'];
    $past = $_REQUEST['Past Experience'];
    $theme=$_REQUEST['Theme'];
    
	       
	
		$ins="insert into record(
		
	Team Name,
	Name,
	Mail ID,
 	City, 	
 	College,
 	Contact Number,	
 	GitHub Profile,
    Stackoverflow Profile,
    Projects,
    Past Experience,
    Theme
		
		) values ('$TeamName','$Name','$Mail','$City','$College','$Contact','$GitHub','$stack','$project','$past','$theme')";

		$res=$connsp->query($ins);
		if($res)
		{
			?> 
			<script type="text/javascript">
				alert('insert success'); 
			
			</script>
			<?php
		}
		else
		{
			echo "insert not success";

		}
	}
		 
	

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
	<script>
  function back(){
    window.location="index.php";
  }
  </script>
  	<title>sign up</title>
	<style>	
	.bg {
    background-image: url("m1.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 100px;
        }
</style>

	<script type="text/javascript" src="backfix.min.js"></script>
	<script type="text/javascript">
	bajb_backdetect.OnBack = function()
	{
		window.location = "index.php";
	}
	</script>

</head>
<body>
<div class="bg">
<br>
    <div class="second" style="float:right; padding-right: 2%;"><button class="btn btn-success" onclick="back()" type="button">Back</button></div>
<br><br><br>
<h1 style="font-family: georgia;color:white;" align="center"><b>Add your details:</b></h1>
<br><br><br>	
<form action="" method="POST">
 <table border="0" align="center" width="50%" cellpadding="90px" cellspacing="90px" >
 
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px; color:white"><center>Team Name</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px; border-radius: 10px;" name="TeamName"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px; color:white"><center>Name</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px; border-radius: 10px;" name="Name"></td>
	</tr>

	
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>Mail</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 50px;border-radius: 10px;" name="Mail"></td>
	</tr>

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>City</center></td>
		<td  style="width: 25%;"><input type="number" style="width:150%; height: 30px;border-radius: 10px;" name="City"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>College</center></td>
		<td  style="width: 25%;"><input type="number" style="width:150%; height: 30px;border-radius: 10px;" name="College"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>Contact</center></td>
		<td  style="width: 25%;"><input type="number" style="width:150%; height: 30px;border-radius: 10px;" name="Contact"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>GitHub</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="GitHub"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>stack</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="stack"></td>
	</tr>

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>project</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="project"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>past</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="past"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:white;"><center>theme</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="theme"></td>
	</tr>
		
		<tr>
		<td></td>
		
		<td style="font-family: georgia;width: 25%;font-size: 20px;color: white;"><input class="btn btn-success" type="submit" name="submit" style="width:20%; height: 45%;" value="submit"></td>
	</tr>
 </table>
</form>
</div>
</body>
</html>