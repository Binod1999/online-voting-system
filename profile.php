<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<center>
<h2> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2><br><br>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT * from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "<h3>Your profile name is <i>". $row['firstname']." ".$row['lastname']."</i></h3>";
        // echo "<h3>You have voted for: " . " " . $row['voted']."</h3>";
        echo "<h3>Your voter number is : <b>".$row['voterID']."</b></h3><br>";
        echo "<a href ='".$row['voteimg']."'><img src='".$row['voteimg']."' height='240' width='auto'></a>";
        echo "<h3>You have voted for: " . " " . $row['voted']."</h3>";
        // $imgurl="student/".$row['voteimg'];
        ?>
        <!-- <img height="320px" width="auto" src="?php $imgurl; ?>"/> -->
        <?php
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?>
</center>

