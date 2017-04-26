<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>{$title}</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS основний файл -->
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
</head>
<body>
	
	
	<div class = mainPanel>
		
		<div id = "topPanel">
	       <img src = "frontend/img/planeLogo.png" id = "planeLogo">
	    </div>

	    <div class="menu-wrap">
            <nav class="menu">
               
                	<ul class="clearfix">
                        <li><a href="menu.php">Home</a></li>
                         <li><a href="flightlist.php">Flight List</a></li>
                         <li><a href="#">Price<span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="flightlist.php">Adult Ticket</a></li>
                               <li><a href="#">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>

                        <li><a href="#">Travelling with us<span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                            	<li><a href="#">Baggage</a></li>
                               <li><a href="#">Check-in and boarding</a></li>
                               <li><a href="#">Special assistance</a></li>
                            </ul>   
                        </li>
                    </ul>

            </nav>
         </div>
		
		
		<form id = "login_form" action = "loginForm.php" method = "POST">
			<div class = "imgcontainer">
			   <img src = "frontend/img/img_avatar2.png" alt="Avatar" class="avatar"/>
			</div>
			
			<div class = "container" id = "logCont">
				<label><b>Username</b></label>
				<input type = "text" placeholder="Enter Username" name = "uname" required id = "userInput">
				
				<label><b>Password</b></label>
				<input type = "password" placeholder="Enter Password" name = "psw" required id = "passInput">
				
				<button type = "submit" id = "loginButton">Login</button>
				<!-- <input type = "checkbox" checked = "checked"> Remember me -->
			</div>	
			<!--
			<div class = "container">
				<button type = "button" class = "cancelbtn">Cancel</button>
			</div> -->
		</form>
			
		
	</div>
		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/main.js"> </script>
</body>
</html>
