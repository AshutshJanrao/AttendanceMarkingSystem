<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
				<h4>ATTENDANCE</h4>
			</div>

			<div class="rightmenu">
				<nav>
				<ul>
					
					<li><a href='lgin.php'>Login</a> </li>
					<li><a href='signup.php'>Signup</li>
					<li><a href='contactus.php'>contact Us</li>
					<li><a href='aboutus/about.php'> About Us</li>
				</ul>
			</nav>			
		</div>

		</div>

		<div class="text">
			
			<h1 id="type">  </h1>
			
		</div>
	</div>
	<script type="text/javascript">
		  var i=0;
		  var text ="ATTENDANCE MARKING SYSTEM ";
		  var cont=document.getElementById("type");
		  function typing()
		  {
			if(i<text.length)
			{
		    console.log(cont.innerHTML +=text.charAt(i));
			  i++;
			  setTimeout(typing,200);
			}
		     else {
			  i=0;
			  cont.innerHTML="";
              setTimeout(typing,200);
 			  }  
		  }
	     typing();
	</script>
</body>
</html>