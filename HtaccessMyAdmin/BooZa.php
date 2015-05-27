<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HtaccessMyAdmin</title>
    
<!--  ################################################################################################################  -->
<!--  ######################## (¯`·._.·[ In the wild frontier, off the beaten track ]·._.·´¯) ########################  -->
<!--  ####################### (¯`·._.·[ In the wild frontier, better watch your back ]·._.·´¯) #######################  -->
<!--  ################################################################################################################  -->

	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<link rel="stylesheet" type="text/css" href="portal.css" />
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php
/*
<script src="codef_music.js"></script> 
<script> 
<!-- var player = new music("MK");  -->
<!-- //player.stereo(true);  -->
<!-- player.LoadAndRun('hmd3.mod');  -->
</script>
*/
?>
</head>
<body>
        <div class='MainDiv'>
<div id="main">
	<div id="container">
		<div id="header">
			<div id="logo-wordmark"><a href="/"><img src="wordmark.png" alt="" /></a></div>
			<div id="logo-satellite"><img src="logo-satellite.png" alt="" /></div>		
		</div>
		<div id="menu">

		</div>
		<div id="mid">
			<div id="cert-splash">
<?php
$userName = "root";
$passWord = "toor";

// If password is valid let the user get access
if ((isset($_POST['username']) && ($_POST["username"]==$userName)) && (isset($_POST["password"]) && ($_POST["password"]==$passWord))) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

<?php
$filename = "../.htaccess"; // set file to read

if (isset($_POST['Submit'])) {
$fh = fopen($filename, 'w') or die("<br /><center><b><font color='red'>&#9899; ERROR</font></b>: Can't open file</center>");
fwrite($fh, "\n");
fclose($fh);
echo "<br /><center><b><font color='lime'>&#9745; SUCCESS: Erazed</font></b></center>";
}
  
if(! isset($newdata)) $newdata = '';
if(isset($_POST['newd'])) $newdata = $_POST['newd'];

if ($newdata != '') {

// open file 
$fw = fopen($filename, 'w') or die('<br /><center><b><font color="red">&#9899; ERROR</font></b>: Could not open file!</center>');
// write to file
// added stripslashes to $newdata
$fb = fwrite($fw,stripslashes($newdata)) or die('<br /><center><b><font color="red">&#9899; ERROR</font></b>: Could not write to file</center>');
// close file
fclose($fw);
echo "<br /><center><b><font color='lime'>&#9745; SUCCESS: Fuckin' saved !</font></b></center>";
}

// open file
  $fh = fopen($filename, "r") or die("<br /><center><b><font color='red'>&#9899; ERROR</font></b>: Could not open file!</center>");
// read file contents
  $data = fread($fh, filesize($filename)) or die("<br /><center><b><font color='red'>&#9899; ERROR</font></b>: Could not read file!</center>");
// close file
  fclose($fh);
// print file contents
 echo "<br /><center><h3>&#x2605; htaccess &#x2605;</h3></center><center><form action='" . $_SERVER['PHP_SELF'] . "' method= 'post' >
<input type='hidden' name='username' value='$userName'>
<input type='hidden' name='password' value='$passWord'>
<textarea style='width: 820px; height: 305px; overflow: scroll;' name='newd' cols='100%' rows='40'>$data</textarea><br />
<input class='cert-loginsubmit' type='submit' value='Save Changes'>
</form></center>";
 echo "<center><form action='" . $_SERVER['PHP_SELF'] . "' method= 'post'>
<input class='cert-loginsubmit' type='Submit' name = 'Submit' value= 'Erase content'>
<input type='hidden' name='username' value='$userName'>
<input type='hidden' name='password' value='$passWord'>
</form></center>";
?>

<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
?>
					<div id="cert-loginbox">
					<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
						<input class="cert-loginfield" type="text" id="username" name="username" onfocus="if(this.value == 'Username') { this.value = ''; }" onblur="if (this.value == '') {this.value = 'Username'; }" value="Username"/>
						<input class="cert-loginfield" type="text" id="password" name="password" onfocus="if(this.value == 'Password') { this.value = ''; setAttribute('type', 'password'); }" onblur="if (this.value == '') {this.value = 'Password'; setAttribute('type', 'text'); }" value="Password"/>
						<input class="cert-loginsubmit" type="submit" id="submit" name="sumbit" onClick="index.php" value="Login" />
					</form>
<?php
if ((isset($_POST['password']) || $passWord == "") && (isset($_POST['username']) || $userName == "")) {
print "<font color=\"red\"><b>&#8594; Incorrect username or password</b></font>";
}
print "				</div>";
}
?>
				
			</div>
		</div>
		<div id="footer">
			<div class="footercolumn">
				<h4>HtaccessMyAdmin v0.1</h4>
			</div>
			<div class="footercolumn">
			</div>
			<div class="footercolumn">
			</div>
			<div class="footercolumn">
			</div>
			<div class="footercolumn">
			<input type="button" value="About" onClick="info()" name="info" class="cert-resourcetable-submit" />
            <script>
			function info()
			{
				alert("i N F O\nThis crap was made by Xylitol");
			}
			</script>
			<br />
		  </div>
		</div>
	</div>
	<div id="endblurb">
	  <p>&copy; <?php echo date('Y'); ?> | Brought to you by !X | Service: JMP-JECXZ [<?php echo date('d/m/y'); ?> - <?php echo date('h:i:s'); ?>] | <?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 4);
	echo 'Page generated in '.$total_time.' seconds';
?> | SiNCE 2o10!</p></div>
</div>
</body>

</html>