<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
include "connection.php";
?>
<h3> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h3>
<h3>Make a Vote </h3>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT * from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        // echo "You have voted for: " . " " . $row['voted']."<br>";
        echo "<h4>Your voter number is : <b>".$row['voterID']."</b></h4><br>";
        echo "<a href ='".$row['voteimg']."'><img src='".$row['voteimg']."' height='140' width='140'></a>";
        // $imgurl="student/".$row['voteimg'];
    
        
        
    }
}
    ?>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Please Select a Party to Vote!! <BR>
<table>
<tr>
<td>
<input type="radio" name="lan" value="BJP" style="height: 30px; width: 30px; vertical-aligh:middle;"><img src="BJP.png" height=100 width=100>BJP<BR>
</td>
</tr>
<tr>
<td>
<input type="radio" name="lan" value="CONGRESS" style="height: 30px; width: 30px; vertical-aligh:middle;"><img src="Congress.png" height=100 width=100>CONGRESS<BR>
</td>
</tr>
<tr>
<td>
<input type="radio" name="lan" value="AAP" style="height: 30px; width: 30px; vertical-aligh:middle;"><img src="aap.jpg" height=100 width=100>AAP<BR>
</td>
</tr>
<tr>
<td>
<input type="radio" name="lan" value="NOTA" style="height: 30px; width: 30px; vertical-aligh:middle;"><img src="NOTA.png" height=100 width=100>NOTA<BR>
</td>
</tr>
</table>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

