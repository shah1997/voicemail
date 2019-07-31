
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/speech-input.css">
<script src="scripts/script.js"></script>
</head>
<body>

<div class="header_acc">
  <?php 
  include 'header.php';
  ?>
</div>

<div class="row">

<div class="col-3 col-m-3 menu">
  <ul>
    <li><a href="#" id="in_box">Inbox</a></li>
    <li><a href="#" id="in_chat">Online Chat</a></li>
    <li><a href="#" id="in_comp">Compose Mail</a></li>
    <li><a href="#" id="in_sent">Sent Mail</a></li>
    <li><a href="#" id="in_prf">Profile</a></li>
    <li><a href="#" id="in_edit">Edit Profile</a></li>
    <li><a href="#" id="in_chgp">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
   
  </ul>
</div>


<div class="col-9 col-m-9" id="acc_in">
  <h1>The City</h1>
  <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
</div>
</div>

<div class="footer_acc">
<?php include 'footer.php';?>
</div>
<script src="scripts/jquery.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){

    	
    	//$("#suc").text(" ");
    	$("#acc_in").load("inbox.php");
    $("#in_box").click(function(){
    $("#acc_in").load("inbox.php");
    });
$("#in_comp").click(function(){
    	
    	//$(".msg").text(" ");
    	$("#acc_in").load("compose.php");
    });

$("#in_sent").click(function(){
    	
    	//$(".msg").text(" ");
    	$("#acc_in").load("sent.php");
    });
$("#in_edit").click(function(){
	
	//$(".msg").text(" ");
	$("#acc_in").load("editprf.php");
});
$("#in_prf").click(function(){
	
	//$(".msg").text(" ");
	$("#acc_in").load("profile.php");
});

$("#in_chgp").click(function(){
	
	//$(".msg").text(" ");
	$("#acc_in").load("changepass.php");
});
$("#in_chat").click(function(){
	
	//$(".msg").text(" ");
	$("#acc_in").load("chat.php");
});
 $("#regs").submit(function(){
alert("submit");
 });
    });
    </script>
</body>
</html>
