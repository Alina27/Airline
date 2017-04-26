$(function(){
	
	var $bookBtn = $("#bookBtn");
	
	var $findBtn = $("#findBtn");

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
	
	$Ok.click(function(){
		$modal.css("display","block");
	});
	
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
 
    function add(){
    	var $node = $(ITEM_TEMPLATE);
    	$list.append($node);
    };
    
      add();

});

/*
function send(){
	var data = "";
	$.ajax({
		type: "POST",
		url: "flightlist.php", 
		data: data,
		dataType: 'json',
		success: function(data){
			alert(data.status);
			if(data.status == 'success'){
				return true;
			}
			else if(data.status == 'fail'){
				return false;
			}
		}
	});
	//return false;
} */

function send(){
	var data = 2;
	$.ajax({
		type: "POST",
		url: "flightlist.php", 
		data: data,
		success: function(data){
			alert(data);
			if(data == 0){
				return true;
			}
			else if(data == 1){
				return false;
			}
		}
	});
	return false;
}

function getM(){
	var data = 0;
	$.ajax({
		type: "POST",
		url: "flightlist.php", 
		data: data,
		success: function(data){
			alert(data);
		}
	});
}

function btn(){
	var $find = $("#myBtn");
	var $modal = $("#myModal");
	var $k = send();
	$find.click(function(){
		if($k == true){
			location.href = 'childAlone.php';
		}
		else {
			$modal.css("display","block");
		}
	});
}

function makeBlack(){
	var $find = $("#myBtn");
	var $modal = $("#myModal");

	$modal.css("display","block");
}


function correctInfo(){
	var $find = $("#myBtn");
	$find.click(function(){
			location.href = 'childAlone.php';

	});
}

function falseInfo(){
   var $find = $("#myBtn");
   var $modal = $("#myModal");

   $find.click(function(){
		$modal.css("display","block");
	});
}

function disableButton(){
	$.ajax({
		type: 'POST',
		url: 'flightlist.php',
		data: data,
		cashe: false,
		success: function(data){
			alert(data);
		}
	});
	return false;
}

/*
function getM(){
	var m = 0;
	$.ajax({
		url: 'flightlist.php',
		dataType: Number,
		async:false,
		success: function(){
			var m = $first;
		}
	});
	return m;
}

var data = getM(); */

/*
function correctInfo(){
   var $find = $("#myBtn");
   var $modal = $("#myModal");
   var $m;
   $find.click(function(){
		$.ajax({
			type: 'POST',
			url: 'flightlist.php',
			success: function(){
				 m = $first;
				//if(m == 1){
				//	location.href = 'childAlone.php';
			//	}
			//	else {
                 //   $modal.css("display","block");
                 alert(m[0]);
			//	}
			}
		});
	});
};   */

/*

function myF(){
	$.ajax({
		type:'GET';
		url: 'flightlist.php',
		data: '{"first": "first"}',
		success: function(data){
			//alert(data);
				alert(data);
		}
		error: function(){
			alert("error");
		}
	});
}
  */

