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
		
		<h2 id = "tickadge">My Ticket &#9786 </h2>
		
		<div id = "my">
		
		<div class = "container" id = "ticketContainer">
			<h3 id = "ticketNumber">CE{$tktNum}</h3>
			<h4 id = "ticketDestination">{$tktDest}</h4>
			<h4 id = "ticketDate">{$tktDate}</h4>
		
		</div>
		
        <div id = "ticketInfo">
		  <label id = "passInf"> Passenger Info</label>
			
			<hr id = "seventh">
			
			<h3 id = "ticketFN">{$tktFullName}</h3>
			<h4 id = "ticketDB">{$tktBDay}</h4>
			<h4 id = "ticketPN">+380983198895</h4>
			<h4 id = "ticketEM">{$tktEmail}</h4>
			<h4 id = "ticketLugg">Baggage <span id = "luggAmount">{$tktLuggAmt}</span> </h4>
			<h4 id = "ticketSeats">{$seat}</h4>
			
		<hr id = "seventh">	
		
		  <label id = "passInf"> Infant Info</label>
	   
			<h3 id = "ticketFN">{$infantFullName}</h3>
			<h4 id = "ticketDB">{$infantBD}</h4>
			<h4 id = "ticketDB">{$infantG}</h4>
		<hr id = "seventh">
			
	<label id = "passInf"> Child Info </label>
			<h3 id = "ticketFN">{$childFullName}</h3>
			<h4 id = "ticketDB">{$childBD}</h4>
			<h4 id = "ticketDB">{$childGender}</h4>
			<h4 id = "ticketDB">{$chldSeat}</h4>
			<!-- <h4 id = "ticketLugg">Baggage <span id = "luggAmount">2</span></h4> 
			<h4 id = "ticketSeats">5A</h4>-->
		
	  <hr id = "seventh">		
			<label id = "passInf"> Total Price: <span id = "totPrs">{$totalPrice} $</span> <span></span></span> </label>
			
		</div>
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
<script type="text/javascript"  src="frontend/js/main.js"> </script>
</body>
</html>
