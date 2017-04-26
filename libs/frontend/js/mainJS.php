<?php header("Content-type: text/javascript"); ?>
$(function(){
	
	var $bookBtn = $("#bookBtn");
	
	var $findBtn = $("#findBtn");

	var $findBtnAM = $("#findBtnAM");

	var $flightListBtn = $("#flBtn");

	var $flightStatusBtn = $("#fsBtn");

	var $adltTicketBook = $("#adlBtn");

	var $accMinBook = $("#AMBtn"); 
	
	//var $find = $("#myBtn");

	var $modal = $("#myModal");
	var $Ok = $("#bookTicket");
	var $cls = $(".close"); 
	
	$bookBtn.click(function(){
		$("#adlBtn").css("visibility", "visible");
		$("#AMBtn").css("visibility", "visible");
	});
	
	$findBtn.click(function(){
		$("#searchForm").css("visibility", "visible");
	});	

	$findBtnAM.click(function(){
		$("#searchFormAM").css("visibility", "visible");
	});	


/*
	var $a = "Hello"
	$Ok.click(function(){
		//$("#tN").text('$a');
		$modal.css("display","block");
		//$tktDisplay
		//location.href = 'ticketList.php';
	}); */
	
	$cls.click(function(){
		$modal.css("display","none");
	});

	$flightListBtn.click(function(){
		location.href = 'flightlist.php';
	});

	$flightStatusBtn.click(function(){
		location.href = 'flightstatus.php';
	});
	
	$adltTicketBook.click(function(){
		location.href = 'searchAndbook.php';
	});

	$accMinBook.click(function(){
		location.href = 'childAlone.php';
	});

    var ITEM_TEMPLATE = $(".Panel_template").html();
    var $list = $(".list");

    
    var $flighstBtn = $('#flighstBtn');
    
    function add(){
    	var $node = $(ITEM_TEMPLATE);
    	var $arrTime = $node.find("#arrTime");
    	$list.append($node); 
    }

    add();
    
    var MY_TEMPLATE = $(".my_template").html();
    var $myList = $('.my_list');
    var $node1 = $(MY_TEMPLATE);
    
     
    $flighstBtn.click(function(){
    	var $statusData = $node1.find("#statusData");
    	$myList.append($node1);
    }); 
     
    var $priceChooser = $("#priceChooser");
    var $bookTicketBtn = $("#bookTkt");

    $priceChooser.click(function(){
         $bookTicketBtn.removeAttr("disabled");
    });
 
     // це для checkbox to work as radio
     $('input[type="checkbox"]').on('change', function() {
           $(this).siblings('input[type="checkbox"]').prop('checked', false);
     });
        
});

