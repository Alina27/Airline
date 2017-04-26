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
<!--onload = "correctInfo()";"falseInfo()";-->	
	
	<div class = mainPanel>
		
		<div id = "topPanel">
	       <img src = "frontend/img/planeLogo.png" id = "planeLogo">
	    </div>

	    <div class="menu-wrap">
            <nav class="menu">
               
                	<ul class="clearfix">
                        <li><a href="menu.php">Home</a></li>
                   <!--     <li><a href="#">Price <span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="#">Adult Ticket</a></li>
                               <li><a href="#">Accompanied Minor Ticket</a></li>
                            </ul> 
                        </li> -->
                        <li><a href="#">Airline Fare Rools</a></li>
                        <li><a href="#">Site Help</a></li>
                    </ul>

            </nav>
         </div>
		
		<div id = "listMainPanel">
		
		<label id = "ffLabel"> Find your flight </label>
		
		<div id = "optionPanel">

			<div id = "sepDiv1"></div>
             
            <div id = "flSearchLabel"> Flight </div>
        
        <form action = "connection.php" method = "POST">
         <label id = "flyFromLabel">Fly from:</label>
           <!--<input type="text" name="team" id="departure" list="departure_list"> -->
           <input type="text" name="dep" id="departure" list="departure_list">
                <datalist id="departure_list">
                 	{$from}
                </datalist>

          <div id = "sepDiv2_1"></div>
          <div id = "sepDiv2_2"></div>

         <label id = "flyToLabel">Fly to:</label>
         <!-- <input type="text" name = "team" id="arriving" list="arriving_list"> -->
           <input type="text" name="arr" id="arriving" list="departure_list">
                <datalist id="arriving_list">
                	<option class = "cls" value = "Choose"></option>
                     {$to}
                </datalist>
       
           <div id = "datePanel">
			<h4 id = "outboundLabel">Outbound</h4>
			<input type="date" name = "date" id = "dateField"/>
 		</div>    
           
            <div id = "sepDiv3"></div>

          <button type = "submit" id = "myBtn">Search</button> 

          <div id = "sepDiv4"></div>

        </form>
		  <!--
			<label id = "flyFromLabel">Fly from:</label>
			<span> 
			  <form action = "flightlist.php" method = "POST">
				<input type="text" name="team" id="departure" list="departure_list">
                <datalist id="departure_list">
                	<option value = "select"> Please Select </option>
                 	{$from}
                </datalist>
             </form>
			</span>
			
			<label id = "flyToLabel">Fly to:</label>
			<span>
			  <form action = "flightlist.php" method = "POST">
			    <input type="text" name = "team" id="arriving" list="arriving_list">
                <datalist id="arriving_list">
                     {$to}
                </datalist>
                <button type="submit" id = "myBtn">Search</button> 
               </form>
			</span> 
		 -->
		</div>
		<!--
		<div id = "datePanel">
			<h4 id = "outboundLabel">Outbound</h4>
			<input type="date" name = "date" id = "dateField"/>
		</div> -->
	 	    
	    	<!-- <button type="button" class="btn btn-warning" id = "myBtn"> Search </button> 
	    	<button type="submit" id = "myBtn">Search</button> -->
	      
        
       <div class="modal" id="myModal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p id = "pTN">Sorry</p>
			  <p id = "tN">No available destination</p>
          </div>
       </div> 

	</div>
			
		
	</div>
	
	<span id = "collapse">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id = "colapseBtn"> &#9992 Book Ticket </button>
                <div id="demo" class="collapse in">
                                  <p id = "callMess">Call us with number <br> &#9990 123456789 </p>
                </div>
 </span>
	
	
	
	<!--
	<div id = "listMainPanel">
		
		<label> Find your flight </label>
		
		<div id = "optionPanel">
		  
			<label id = "flyFromLabel">Fly from:</label>
			<span> 
				<input type="text" name="team" id="departure" list="departure_list">
                <datalist id="departure_list">
                   <option>Бавария</option>
                   <option>Бенфика</option>
                   <option>Боруссия</option>
                   <option>Брюгге</option>
                   <option>Челсі</option>
                   <option>Барселона</option>
                </datalist>
			</span>
			
			<label id = "flyToLabel">Fly to:</label>
			<span>
			    <input type="text" name="team" id="arriving" list="arriving_list">
                <datalist id="arriving_list">
                   <option>Бавария</option>
                   <option>Бенфика</option>
                   <option>Боруссия</option>
                   <option>Брюгге</option>
                   <option>Челсі</option>
                   <option>Барселона</option>
                </datalist>
			</span>
		
		</div>
		
		<div id = "datePanel">
			<h4 id = "outboundLabel">Outbound</h4>
			<input type="date" id = "dateField"/>
		</div>
		
		<button type="button" class="btn btn-warning" id = "search">Search</button>
	
	</div>  -->
	
		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--AJAXS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/main.js"> </script>
</body>
</html>
