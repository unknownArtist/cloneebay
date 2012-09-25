$(function(){
	
$("#BuyItNowprice").hide();
   $("#auctionOrFixed").change(function(){
	//var h = $("#auctionOrFixed").val();
	  if($("#auctionOrFixed").val() == '0')
	  {
	  	$("#BuyItNowprice").hide();
	  }
	  else
	  {
	  	$("#BuyItNowprice").show();
	  }
	});
});