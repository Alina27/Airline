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


		<!--
		<h2><p id = "flightBookingForm">Flight Booking</p></h>
		
		<span>
			<form id = "passForm">
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
					<select id = "gender">Gender
						<option value = "choose">--Choose--</option>
						<option value = "Female">Female</option>
						<option value = "Male">Male</option>
					</select>
				</span>
				
				<div id = "bhDate">
					<label id = "birthDate">Date of birth</label>
					<span>
						<select id = "day">
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
						</select>
					</span>
					<span>
					   <select id = "month">
							<option value = "month">--Month--</option>
						   
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
						   
						</select>
					</span>
					<span>
					   <select id = "year">
							<option value = "year">-Year-</option>
						   <option value = "March">2017</option>
						</select>
					</span>
				</div>
				
			</form>
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
		<select id = "lugg">
			<option value = "lugg">Select bagage</option>
		    <option value = "handOnly">Hand bagage only</option>
			<option value = "oneLugg">1 bag ($45.00)</option>
			<option value = "oneLugg">2 bags ($95.00)</option>
		</select>
		
		<hr id = "fourth">
		
		<div id = "addInfo">Additional Information
			<p id = "outPers">Person, who accompine to the outbound airport</p>
		</div>
		<span>
		   <label id = "outFirstNameLabel">First Name</label>
		   <input type = "text" name = "fName" required id = "outfirstName">
		</span>
				
		<span>
			<label id = "outsecondNameLabel">Second Name</label>
		    <input type = "text" name = "sName" id = "outSecondName">
		</span>
				
		<span>
			<label id = "outLastNameLabel">Last Name</label>
			<input type = "text" name = "lName" required id = "outLastName">
		</span>
		
		<label id = "outpNLabel">Phone Number</label>
		<div id = "phoneNUmber">
		    <input type="phone" name="phone" id = "outpN" required>
		</div>
		
		<hr id = "sixth"/>
		
		<div id = "addInfoArr">
			<p id = "arrPers">Person, who accompine to the outbound airport</p>
		</div>
		<span>
		   <label id = "arrFirstNameLabel">First Name</label>
		   <input type = "text" name = "fName" required id = "arrfirstName">
		</span>
				
		<span>
			<label id = "arrsecondNameLabel">Second Name</label>
		    <input type = "text" name = "sName" id = "arrSecondName">
		</span>
				
		<span>
			<label id = "arrLastNameLabel">Last Name</label>
			<input type = "text" name = "lName" required id = "arrLastName">
		</span>
		
		<label id = "arrpNLabel">Phone Number</label>
		<div id = "phoneNUmber">
		    <input type="phone" name="phone" id = "arrpN" required>
		</div>
	
		<button id = "bookTicket">Book Ticket</button>
		
		
		<span>
		     <form id = "tranSelection">
				 <div id = "myTranSelection">My Travel Selection</div>
				 <div id = "outboundSelect">Outbound</div>
				 <hr id = "sec"/>
				 <div id = "destSelect">
					 <span>From</span>
					  -
					 <span>To</span>
				 </div>
				 <div id = "timeSelect">Time</div>
				 <div id = "priceSelect">
				     <span id = "totalPrice">Total Price</span>
					 <span id = "price">4545</span>
					 <span id = "dolSign">$</span>
				 </div>
			 </form>
		</span>
		
		<div class="modal" id="myModal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p id = "pTN">Ticket Number</p>
			  <p id = "tN">CF09585</p>
          </div>
       </div>
		   -->


  <h2><p id = "flightBookingForm">Accompanied Minor Booking</p></h>
		
	<form action = "childAlone.php" method = "POST" id = "passForm">
		
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
<input type = "text" name = "gender" id = "gender" list = "gender_list">
	<datalist id = "gender_list">Gender
	   <option value = "choose">--Choose--</option>
	   <option value = "Female">Female</option>
	   <option value = "Male">Male</option>
	</datalist>
</span>
		

<div id = "bhDate">
   <label id = "birthDate">Date of birth</label>
<span>
 <input type = "text" name = "dayBrth" id = "day" list = "day_list">
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
</span>
		<span>
<input type = "text" name = "month" id = "month" list = "month_list">
	<datalist id = "month_list">
	   <option value = "month">--Month--</option>
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
 <input type = "text" name = "year" id = "year" list = "year_list">
		<datalist id = "year">
			<option value = "year">-Year-</option>
			<option value = "March">2017</option>
		</datalist>
	  </span>
</div>	
		
		
 <label id = "emaillLabel">E-Mail</label>
    <div id = "passEMail">
       <input type="email" name="email" id = "eM" required>
    </div>
		
 <label id = "pNLabel">Phone Number</label>
	<div id = "phoneNUmber">
	    <input type="phone" name="phone" id = "pN" required>
	</div>
		
<label id = "luggLabel">Baggage</label>
  <input type = "text" name = "lugg" id = "lugg" list = "lugg_list">
   <datalist id = "lugg_list">
	   <option value = "handOnly">Hand bagage only</option>
	   <option value = "oneLugg">1 bag ($45.00)</option>
	   <option value = "oneLugg">2 bags ($95.00)</option>
   </datalist>
		     <hr id = "fourth">	
		
<div id = "addInfo">Additional Information
<p id = "outPers">Person, who accompine to the outbound airport</p>
</div>
 
<span>
       <label id = "outFirstNameLabel">First Name</label>
 <input type = "text" name = "outfName" required id = "outfirstName">
</span>
				
<span>
	   <label id = "outsecondNameLabel">Second Name</label>
 <input type = "text" name = "outsName" id = "outSecondName">
</span>
				
<span>
	   <label id = "outLastNameLabel">Last Name</label>
<input type = "text" name = "outlName" required id = "outLastName">
</span>
		
	    <label id = "outpNLabel">Phone Number</label>
 <div id = "phoneNUmber">
    <input type="phone" name="outPhone" id = "outpN" required>
 </div>
		          <hr id = "sixth"/>
		
<div id = "addInfoArr">
 <p id = "arrPers">Person, who accompine to the outbound airport</p>
</div>
 <span>
    <label id = "arrFirstNameLabel">First Name</label>
<input type = "text" name = "arrfName" required id = "arrfirstName">
 </span>
				
<span>
	<label id = "arrsecondNameLabel">Second Name</label>
 <input type = "text" name = "arrsName" id = "arrSecondName">
</span>
				
<span>
	<label id = "arrLastNameLabel">Last Name</label>
<input type = "text" name = "arrlName" required id = "arrLastName">
</span>
		
    <label id = "arrpNLabel">Phone Number</label>
 <div id = "phoneNUmber">
	<input type="phone" name="arrPhone" id = "arrpN" required>
 </div>
	
 <button id = "bookTicket">Book Ticket</button>
</form>	
			
<span>
    <form id = "tranSelectionAlone">
	  <div id = "myTranSelection">My Travel Selection</div>
	  <div id = "outboundSelect">Outbound</div>
				 <hr id = "sec"/>
		<div id = "destSelect">
			 {$destinationChoosen}
		 </div>
	 <div id = "timeSelect">{$timeChoosen}</div>
			<div id = "priceSelect">
			     <span id = "totalPrice">Total Price</span>
				 <span id = "price">{$price}</span>
				 <span id = "dolSign">$</span>
			</div>
	 </form>
</span>
		
		<div class="modal" id="myModal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p id = "pTN">Ticket Number</p>
			  <p id = "tN">{$tic}</p>
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
