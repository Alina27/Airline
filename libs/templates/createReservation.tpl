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

		
		  <h2><p id = "flightBookingForm">Flight Booking</p></h>
		<form action = "createReservation.php" method = "POST" id = "passForm">
			
<div id= "passLabel"><p id = "passengers">Passengers</p></div>
				 
	<div id = "passNameWarn">
		<p id = "pasInf">Please ensure that passengers' names are identical to the way they are written in their passports.</p>
	</div>
                  <hr id = "third"/>
			
	<span>
	 <label id = "firstNameLabel">First Name</label>
	 <input type = "text" name = "fName" required id = "firstName">
	</span>
				
	<span>
	 <label id = "secondNameLabel">Second Name</label>
	 <input type = "text" name = "sName" id = "secondName">
	</span>
				
	 <span>
	  <label id = "lastNameLabel">Last Name</label>
	  <input type = "text" name = "lName" required id = "lastName">
	 </span>
				
	 <span>
		<label id = "genderLabel">Gender</label>
		 <input type="text" name="adltGen" id="gender" list="gender_list">
		 <datalist id = "gender_list">
		   <option value = "choose">--Choose--</option>
			<option value = "Female">Female</option>
			<option value = "Male">Male</option>
		 </datalist>
		
	</span>
			
			
  <div id = "bhDate">
	  <label id = "birthDate">Date of birth</label>
	<span>
		<div id = "bhDate">
	  <label id = "birthDate">Date of birth</label>
	<span>
		<input type = "text" name = "dayBrth" id = "day" list = "day_list" required>
		<datalist id = "day_list">
		   <option value = "day">--Day--</option>		
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
							<option value = "13">13</option>
							<option value = "14">14</option>
							<option value = "15">15</option>
							<option value = "16">16</option>
							<option value = "17">17</option>
							<option value = "18">18</option>
							<option value = "19">19</option>
							<option value = "20">20</option>
							<option value = "21">21</option>
							<option value = "22">22</option>
							<option value = "23">23</option>
							<option value = "24">24</option>
							<option value = "25">25</option>
							<option value = "26">26</option>
							<option value = "27">27</option>
							<option value = "28">28</option>
							<option value = "29">29</option>
							<option value = "30">30</option>
							<option value = "31">31</option>
		</datalist>
		
	<input type = "text" name = "month" id = "month" list = "month_list" required>
		<datalist id = "month_list">
			<option value = "month">month</option>
			<option value = "01">01</option>
			<option value = "January">January</option>
	        <option value = "Fabrurary">Fabrurary</option>
	        <option value = "March">March</option>
	        <option value = "April">April</option>
	        <option value = "May">May</option>
            <option value = "June">June</option>
	        <option value = "July">July</option>
	        <option value = "August">August</option>
            <option value = "September">September</option>
	        <option value = "October">October</option>
	        <option value = "November">November</option>
	        <option value = "December">December</option>
		</datalist>
		
	<input type = "text" name = "year" id = "year" list = "year_list" required>
		<datalist id = "year_list">
		   <option value = "year">year</option>
		   <option value = "1990">1990</option>
		   <option value = "2017">2017</option>
		</datalist>
		
		 </span>
				</div>
		</span>		
						

<label id = "emaillLabel">E-Mail</label>
  <div id = "passEMail">
   <input type="email" name="email" id = "eM" required>
  </div>
		
<label id = "pNLabel">Phone Number</label>
  <div id = "phoneNUmber">
	<input type="phone" name="phone" id = "pN" required>
  </div>
		
 <label id = "luggLabel">Baggage</label>
 <!--
	<select id = "lugg">
	   <option value = "lugg">Select bagage</option>
	   <option value = "handOnly">Hand bagage only</option>
	   <option value = "oneLugg">1 bag ($45.00)</option>
	   <option value = "oneLugg">2 bags ($95.00)</option>
	</select> -->

   <input type = "text" name = "lugg" id = "lugg" list = "lugg_list">
	<datalist id = "lugg_list">
	   <option value = "handOnly">Hand bagage only</option>
	   <option value = "oneLugg">1 bag ($45.00)</option>
	   <option value = "twoLugg">2 bags ($95.00)</option>
	</datalist>	

		      <hr id = "fourth">	
		
<label id = "withInfantLabrl">With Infant ?</label>
	<!--	<form id = "trueFalse"> -->
		<div id = "trueFalse">
  <input type="checkbox" name="inf" value="Yes">Yes
	    <br>
  <input type="checkbox" name="inf" value="No">No
		<br>
		</div>
        <!--</form> -->
		
<span>
   <label id = "infFirstNameLabel">Infant First Name</label>
   <input type = "text" name = "infFName" id = "infFirstName"> 
</span>
				
<span>
  <label id = "infSecondNameLabel">Infant Second Name</label>
  <input type = "text" name = "infSName" id = "infSecondName">
</span>
				
<span>
  <label id = "intLastNameLabel">Infant Last Name</label>
  <input type = "text" name = "infLName"  id = "infLastName">
</span>
				
 <span>
   <label id = "infGenderLabel">Gender</label>
      <input type = "text" name = "infGender" id = "infGender" list = "infGender_list">
        <datalist id = "infGender_list">
	        <option value = "choose">--- Choose ---</option>
	        <option value = "Female">Female</option>
	        <option value = "Male">Male</option>
       </datalist>	

   <!--
	 <select id = "infGender">Gender
	   <option value = "choose">--Choose--</option>
	   <option value = "Female">Female</option>
	   <option value = "Male">Male</option>
	 </select> -->
</span>
		
		
<div id = "infDate">
   <label id = "infbirthDate">Infant Date of birth</label>
	  <span>
<input type = "text" name = "infDay" id = "infDay" list = "infDay_list">
     	<datalist id = "infDay_list">
			<option value = "infDay">--Day--</option>		
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
							<option value = "13">13</option>
							<option value = "14">14</option>
							<option value = "15">15</option>
							<option value = "16">16</option>
							<option value = "17">17</option>
							<option value = "18">18</option>
							<option value = "19">19</option>
							<option value = "20">20</option>
							<option value = "21">21</option>
							<option value = "22">22</option>
							<option value = "23">23</option>
							<option value = "24">24</option>
							<option value = "25">25</option>
							<option value = "26">26</option>
							<option value = "27">27</option>
							<option value = "28">28</option>
							<option value = "29">29</option>
							<option value = "30">30</option>
							<option value = "31">31</option>
		</datalist>
	   </span>
	  <span>
<input type = "text" name = "infMonth" id = "infMonth" list = "infMonth_list">
    <datalist id = "infMonth_list">
	   <option value = "infMonth">--Month--</option>
	   <option value = "January">January</option>
	   <option value = "Fabrurary">Fabrurary</option>		   <option value = "March">March</option>
	   <option value = "April">April</option>
	   <option value = "May">May</option>
	   <option value = "June">June</option>
	   <option value = "July">July</option>
	   <option value = "August">August</option>
	   <option value = "September">September</option>
	   <option value = "October">October</option>
	   <option value = "November">November</option>
	   <option value = "December">December</option>
	</datalist>
		</span>
	<span>
<input type = "text" name = "infYear" id = "infYear" list = "infYear_list">
	  <datalist id = "infYear_list">
		<option value = "infYear">-Year-</option>
	    <option value = "2017">2017</option>
	   </datalist>
	</span>
	   </div>
	       <hr id = "fifth"/>
		
		
		
<label id = "withChildLabrl">With Child ?</label>
   <div id = "childTrueFalse">
     <input type="checkbox" name="cld" value="Yes">Yes
	      <br>
     <input type="checkbox" name="cld" value="No">No
		   <br>
    </div>
		
  <span>
    <label id = "childFirstNameLabel">Child First Name</label>
    <input type = "text" name = "childFName" id = "childFName">
  </span>
				
  <span>
    <label id = "childSecondNameLabel">Child Second Name</label>
    <input type = "text" name = "childSName" id = "childSecondName">
  </span>
				
  <span>
	<label id = "childLastNameLabel">Child Last Name</label>
    <input type = "text" name = "childLName" id = "childLastName">
  </span>
				
  <span>
    <label id = "childGenderLabel">Gender</label>

      <input type = "text" name = "childGender" id = "childGender" list = "childGender_list">
	    <datalist id = "childGender_list">
	       <option value = "choose">--- Choose ---</option>
	       <option value = "Female">Female</option>
	       <option value = "Male">Male</option>
        </datalist>

        <!--
	   <select id = "childGender">Gender
	       <option value = "choose">--- Choose ---</option>
		   <option value = "Female">Female</option>
		   <option value = "Male">Male</option>
	    </select> -->
  </span> 
		
   <div id = "childDate">
	  <label id = "childbirthDate">Child Date of birth</label>
	<span>
<input type = "text" name = "childDay" id = "childDay" list = "childDay_list">
		<datalist id = "childDay_list">
		   <option value = "childDay">--Day--</option>			
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
							<option value = "13">13</option>
							<option value = "14">14</option>
							<option value = "15">15</option>
							<option value = "16">16</option>
							<option value = "17">17</option>
							<option value = "18">18</option>
							<option value = "19">19</option>
							<option value = "20">20</option>
							<option value = "21">21</option>
							<option value = "22">22</option>
							<option value = "23">23</option>
							<option value = "24">24</option>
							<option value = "25">25</option>
							<option value = "26">26</option>
							<option value = "27">27</option>
							<option value = "28">28</option>
							<option value = "29">29</option>
							<option value = "30">30</option>
							<option value = "31">31</option>
		 </datalist>
	</span>
		<span>
<input type = "text" name = "childMonth" id = "childMonth" list = "childMonth_list">
 <datalist id = "childMonth_list">
	 <option value = "childMonth">--Month--</option>
     <option value = "January">January</option>
	 <option value = "Fabrurary">Fabrurary</option>
     <option value = "March">March</option>
	 <option value = "April">April</option>
	 <option value = "May">May</option>
	 <option value = "June">June</option>
     <option value = "July">July</option>
     <option value = "August">August</option>
	 <option value = "September">September</option>
	 <option value = "October">October</option>
	 <option value = "November">November</option>
	 <option value = "December">December</option>
 </datalist>
		   </span>
	<span>
<input type = "text" name = "childYear" id = "childYear" list = "childYear_list">
	    <datalist id = "childYear_list">
		   <option value = "childYear">-Year-</option>
		   <option value = "2017">2017</option>
		</datalist>
   </span>
		
	<span>
	  <label id = "childluggLabel">Baggage</label>
		<input type = "text" name = "childLugg" id = "childLugg" list = "childLugg_list">
		<datalist id = "childLugg_list">
			<option value = "lugg">Select bagage</option>
		    <option value = "handOnly">Hand bagage only</option>
			<option value = "oneLugg">1 bag ($45.00)</option>
			<option value = "twoLugg">2 bags ($95.00)</option>
		</datalist>
	  </span>
</div>		

<div class="modal" id="myModal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p id = "pTN">Ticket Number</p>
			  <p id = "tN">{$tic}</p>
          </div>
       </div> 
		  
		<button type = "submit" id = "bookTicket" >Book Ticket</button>
	      
		
</form>
		
		
		<form id = "tranSelection">
				 <div id = "myTranSelection">My Travel Selection</div>
				 <div id = "outboundSelect">Outbound</div>
				 <hr id = "sec"/>
				 <div id = "destSelect">
				 	{$destinationChoosen}
					 <!--<span>From</span>
					  -
					 <span>To</span> -->
				 </div>
				 <div id = "timeSelect">{$timeChoosen}</div>
				 <div id = "priceSelect">
				     <span id = "totalPrice">Total Price</span>
					 <span id = "price">{$price}</span>
					 <span id = "dolSign">$</span>
				 </div>
			 </form>
		
		
	<!--	  
	<div class="modal" id="myModal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p id = "pTN">Ticket Number</p>
			  <p id = "tN">{$tic}</p>
          </div>
       </div> -->

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
