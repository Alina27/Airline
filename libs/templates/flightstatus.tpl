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
	
		<h1 id = "statusLabel">Fligth Status</h1>

		<hr>

  <form action = 'flightstatus.php' method = 'POST'> 
		<div id = "optionStatusPanel">

			      <label id = "directionLabel">Direction</label>
			        <span>
                        <input type = "text" name = "direction" id = "dateSelection" list = "direction_list">
			                   <datalist id = "direction_list">
                                    <option value="departure">departure</option>
                                    <option value="arriving">arriving</option>
                               </datalist>
			        </span>
		
			
			      <label id = "from_Status">Fly from:</label>
			        <span> 
                        <input type="text" name='depStatus' id="departureStatus" list="departure_list">
                               <datalist id="departure_list">
                                  <option>Londog-Getwick (LGW)</option>
                               </datalist>
			        </span>

			     <label id = "to_Status">Fly to:</label>
			       <span>
			            <input type="text" name="arr" id="arrivingStatus" list="arriving_list">
                               <datalist id="arriving_list">
                                   <option>Бавария</option>
                               </datalist>
			      </span>

			    
			     <label id = "perisdLabel">Period</label>
			       <span>
                        <input type = "text" name = "period" id = "dateSelection" list = "period_list">
	                          <datalist id = "period_list">
		                            <option value="today">today</option>	
                                    <option value="three_ago">three days ago</option>
                                    <option value="two_ago">two days ago</option>
		                            <option value="yesterday">yesterday</option>
		                            <option value="tomorrow">tomorrow</option>
		                            <option value="two_in">in two days</option>	
                              </datalist>
			      </span>
			
		</div>
		
		             <div id = "flightStatusPanel">
			              <span><label id = "fl">Flight</label></span>
			              <span><label id = "from_To">From_To</label></span>
			              <span><label id = "dep_Arr">Dep_Arr</label></span>
			              <span><label id = "status">Status</label></span>
		             </div>


       <div class = "my_list"></div>


     <div class = "my_template" style = "display: none">
     	  {for $i = 0 to $count-1}
		<div id = "statusData">
			<span><label id = "fl">1</label></span>
			<span><label id = "from_To">{$todayFlights[$i]}</label></span>
			<span><label id = "dep_Arr">3</label></span>
			<span><label id = "statusState">On Time</label></span> 
		</div>
		    {/for}
	 </div> 


 </form>
       
    <button  id = "flighstBtn">Submit</button>
                  


    </div>
			

		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script>
</body>
</html>
