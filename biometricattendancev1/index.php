<!DOCTYPE html>
<html>
<head>
	<title>Manage Users</title>
<link rel="stylesheet" type="text/css" href="css/manageusers.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/manage_users.js"></script>
<script>
  $(document).ready(function(){
  	  $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    setInterval(function(){
      $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    },5000);
  });
</script>
</head>
<body>
<?php include'header.php';?>
<main>
	
	<div class="form-style-5 slideInDown animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
		<form>
			<fieldset>
			<legend><span class="number">1</span> User Fingerprint ID:</legend>
				<label>Enter Fingerprint ID between 1 & 127:</label>
				<input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
				<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
			</fieldset>
			
		</form>
	</div>

	<div class="section">
	<!--User table-->
		<div class="tbl-header slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
	        	  <th>Finger .ID</th>
		        
		        </tr>
		      </thead>
		    </table>
		</div>
		<div class="tbl-content slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <div id="manage_users"></div>
		</div>
	</div>

</main>
</body>
</html>