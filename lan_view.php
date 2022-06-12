<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$memberC = mysqli_query($con, "SELECT * FROM voters where status='VOTED' and voted='CONGRESS'" );
$memberB = mysqli_query($con, "SELECT * FROM voters where status='VOTED' and voted='BJP'" );
$memberA = mysqli_query($con, "SELECT * FROM voters where status='VOTED' and voted='AAP'" );
$memberN = mysqli_query($con, "SELECT * FROM voters where status='VOTED' and voted='NOTA'" );

$N=mysqli_num_rows($memberC);
$N1=mysqli_num_rows($memberB);
$N2=mysqli_num_rows($memberA);
$N3=mysqli_num_rows($memberN);

	echo '<center><table><tr bgcolor="#FF6600">
<td width="30px">ID</td>		
<td width="100px">PARTY</td>
<td width="30px">VOTE</td>
<td width="30px">SYMBOL</td>
</tr>';
echo '<tr><td>1</td>
<td><h4>BJP</h4></td>
<td>'.$N1.'</td>
<td><img src="BJP.png" height=100 width=100></td></tr>';
echo '<tr><td>2</td>
<td><h4>CONGRESS</h4></td>
<td>'.$N.'</td>
<td><img src="Congress.png" height=100 width=100></td></tr>';
echo '<tr><td>3</td>
<td><h4>AAP</h4></td>
<td>'.$N2.'</td>
<td><img src="aap.jpg" height=100 width=100></td></tr>';
echo '<tr><td>4</td>
<td><h4>NOTA</h4></td>
<td>'.$N3.'</td>
<td><img src="NOTA.png" height=100 width=100></td></tr>';
// while($mb=mysqli_fetch_object($member))
// 		{	
// 			$id=$mb->lan_id;
// 			$name=$mb->fullname;
// 			$about=$mb->about;
// 			$vote=$mb->votecount;
// 			echo '<tr bgcolor="#BBBEFF">';
// 	echo '<td>'.$id.'</td>';		
// 	echo '<td>'.$name.'</td>';
// 	echo '<td>'.$vote.'</td>';
// 	echo "</tr>";
// 		}
		echo'</table></center>';
	
?>
