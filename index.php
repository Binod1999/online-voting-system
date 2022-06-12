<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<body> 
  <center> <h1 style="background-color:Powderblue;"> WEB BASED APPLICATION FOR VOTING SYSTEM </h1></center>
<p><font color='#190d5c' size='5'><i>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.</i></font>
    <p>&nbsp;&nbsp;</p>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include "footer.php";?>
<style>
body {
    background-image: url('online-voting-hologram-ballot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;}
</style>