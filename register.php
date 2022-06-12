<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" enctype="multipart/form-data" >
Firstname:
<input type="text" name="firstname" value="" placeholder="eg. Binod"/>
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" placeholder="eg. satapathy"/>
<br>
<br>
Username: 
<input type="text" name="username" value="" placeholder="enter username"/>
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
Vote-ID:
<input type="text" name="voteid" value="" placeholder="eg. IMP1234567" />
<br>
<br>
Upload Vote-ID card:
<input type="file" name="uploadfile" value="">
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
<input type="submit" name="submit" value="Next" style="border:2px solid black; margin:15px; display:block; font-size:14px; padding:8px; width:100px;" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("password","maxlen=15","Password must not be greater than 15 characters.");
 frmvalidator.addValidation("voteid","req","Please enter voter ID"); 
 frmvalidator.addValidation("voteid","minlen=10","voter id must be in the format 'ABC1234567'.");
 frmvalidator.addValidation("voteid","maxlen=10","voter id must be in the format 'ABC1234567'.");
 frmvalidator.addValidation("uploadfile","req","Please upload your Vote-Id."); 

</script>
<?php include "footer.php" ;?>
