
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/header.css">


</head>
<header>

<div class="header">
	<div class="logo">
		<a href="index.php">Biometric enrollment system</a>
	</div>
</div>

<div class="topnav" id="myTopnav">
    
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
	  <i class="fa fa-bars"></i></a>
</div>
</header>
<script>
	function navFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
</script>

<script>

  let hrs = document.getElementById("hrs");
  let min = document.getElementById("min");
  let sec = document.getElementById("sec");

  setInterval(() => {
    let currentTime = new Date();

    hrs.innerHTML = (currentTime.getHours() < 10 ? "0" : "") + currentTime.getHours();
    min.innerHTML = (currentTime.getMinutes() < 10 ? "0" : "") + currentTime.getMinutes();
    sec.innerHTML = (currentTime.getSeconds() < 10 ? "0" : "") + currentTime.getSeconds();
}, 1000);


  
</script>



	

	
