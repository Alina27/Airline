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
                               <li><a href="flightlist.php">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>

                        <li><a href="#">Travelling with us<span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                            	<li><a href="#">Baggage</a></li>
                               <li><a href="#">Check-in and boarding</a></li>
                               <li><a href="#">Special assistance</a></li>
                            </ul>   
                        </li>

            
                        <li><a href="loginForm.php">Log In</a></li>
                    </ul>

            </nav>
         </div>


	    <div class = "list"></div>
       
        <div class = "Panel_template" style = "display:none;">
        	{for  $i = 0 to $count-1}
        	
        	<div class = "container" id = "flCont">
		    <span id = "outInfo"> &#9992 Outbound:</span>
		    <span id = "destLabel">{$destination[$i]}</span>
		    <span id = "dateInfo">{$destinationDate[$i]}</span>
          </div>
      
        <div class = "container" id = "fullFlightInfo">
		       <div class = "col" id = "f">
			      <h4 id = "a1">Departure</h4>
			      <h4 id = "a2">{$destinationDate[$i]}</h4>
			      <h4 id = "a3">{$departureTime[$i]}</h4>
			      <h4 id = "a4">Duration: <span id = "a4_1">{$duration[$i]}</span></h4>
		       </div>

		   <div class = "col" id = "s">
		         <h4 id = "b1">Arriving</h4>
			     <h4 id = "b2">{$arivalDate[$i]}</h4>
			   	 <h4 id = "b3">{$arivalTime[$i]}</h4> 
		   </div>

		   <div class = "col" id = "t">
		         <h4 id = "c1">Seats Available</h4>
			     <h4 id = "c2">{$freeSeatsNum[$i]}</h4>
		   </div>

		   <div class = "col" id = "four">
			    <h4 id = "d1">Price per 1 seat</h4>
		        <h4 id = "d2">{$price[$i]} <span>$</span></h4>
		   </div>
	     </div>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                 {/for}
        </div>
            
 <span id = "collapse">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id = "colapseBtn">Book Ticket !!!</button>
                <div id="demo" class="collapse in">
                                  <p id = "callMess">Call us with number <br> &#9990 123456789 </p>
                </div>
 </span>



		 <!--
		<div class = "container" id = "flCont">
		    <span id = "outInfo">Outbound:</span>
		    <span id = "destLabel">{$destination}</span>
		    <span id = "dateInfo">{$destinationDate}</span>
        </div>	
   
	<div class = "container" id = "fullFlightInfo">
		<div class = "col" id = "f">
			<h4>Departure</h4>
			<h4>{$destinationDate}</h4>
			<h4>{$departureTime}</h4>
			<h4>Duration: <span>{$duration}</span></h4>
		</div>
		<div class = "col" id = "s">
		    <h4>Arriving</h4>
			<h4>{$arivalDate}</h4>
			  <h4>{$arivalTime}</h4>
		</div>
		<div class = "col" id = "t">
		    <h4>Seats Available</h4>
			<h4>{$freeSeatsNum}</h4>
		</div>
		<div class = "col" id = "four">
			<h4>Price per 1 seat</h4>
		    <h4>{$price} <span>$</span></h4>
		</div>
	</div>
		<br>
		   -->
	</div>
		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>

<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script>
</body>
</html>
