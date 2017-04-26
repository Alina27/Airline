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
                        <li><a href="menu_ul.php">Home</a></li>

                        <li><a href="#">Book Ticket <span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="searchAndbook.php">Adult Ticket</a></li>
                               <li><a href="searchAndbookChldAlone.php">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>
                        <li><a href="searchAndbook.php">Flight List</a></li>

                         <li><a href="#">Find Ticket <span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="#" id = "findBtn">Adult Ticket</a></li>
                               <li><a href="#" id = "findBtnAM">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>
                        <li><a href="#">Site Help</a></li>
                        <li><a href="menu.php">Log Out</a></li>
                    </ul>
            </nav>
         </div>

	    <div class = "list"></div>


         <div class = "Panel_template" style = "display:none;">  
        	  {for  $i = 0 to $count-1}  
        	<div class = "container" id = "flCont">
		    <span id = "outInfo">Outbound:</span>
		    <span id = "destLabel">{$destination[$i]}</span>
		    <span id = "dateInfo">{$destinationDate[$i]}</span>
		    <!--
		    <span id = "flightNum">{$flightNumber[$i]}</span> -->
		   <!-- <span id = "flightNum"><a href = "createReservation.php" name = "priceT">{$flightNumber[$i]}</a></span> -->
          </div>
      
        <div class = "container" id = "fullFlightInfo">
		       <div class = "col" id = "f">
			      <h4 id = "a1">Departure</h4>
			      <h4 id = "a2">{$destinationDate[$i]}</h4>
			      <h4 id = "a3">{$departureTime[$i]}</h4>
			      <h4 id = "a4">Duration: <span>{$duration[$i]}</span></h4>
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
			    <!-- {$price[$i]} -->
			<form method = 'POST' action = 'flightlistrepresChldAlone.php'> 
			    <input type="radio" name = "radio" value = {$price[$i]}>{$price[$i]}<span>$</span>
			    <button type="submit" name = "reg" class="btn btn-warning" id = "bookTkt"> Book </button> 
			</form>
		        <!-- <h4> <input type="radio" name="price" id = "priceChooser">{$price[$i]} <span>$</span></h4> -->
		        <!-- <h4>{$price[$i]}<span>$</span></h4> -->
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

        <div class = "container" id = "searchForm">
	          <form action = "agentPage.php" method = "POST">
	             <input type = "text" name = "search" placeholder = "Search" id = "searchF">	
	             <button type="submit" class="btn btn-success" id = "searchBtn">Find</button>
	         </form>
        </div>

        <div class = "container" id = "searchFormAM">
	        <form action = "agentPage.php" method = "POST">
	            <input type = "text" name = "searchAM" placeholder = "Search" id = "searchF">	
	            <button type="submit" class="btn btn-success" id = "searchBtnAM">Find</button>
	        </form>
        </div>
        
	</div>
		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script>
</body>
</html>