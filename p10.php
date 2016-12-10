<head>
	<title></title>
</head>
<?php 
	if(!isset($_COOKIE['count_magical_creature_cricket'])){
                setcookie('count_magical_creature_cricket',1);
        }else{
                $count=++$_COOKIE['count_magical_creature_cricket'];
                setcookie('count_magical_creature_cricket',$count);
        }
	setcookie("Magical_creature_Cricket",time());
?>
<img src = "./p10.png" alt = "Harry">
<p>This is the small creature that can play against with other cricket.</p>
<tr>
<a href="./listOfProducts.php">see your recently five viewing product</a>
                </tr><br/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
		<div id="RateBlock" style="width:500px;">
			<div id="setRate">
				<p>Please rate this product:</p>
				<div id="rateYo" style="padding-left:40px;"></div><br>
				<textarea rows="4" cols="50" id="rate_input"></textarea><br>
				<button id="rate_submit">Submit</button>
			</div>
			<div id="setRateThanks" style="display:none;">
				Thanks for submiting the review!
			</div>
		</div>
		<script>
			var rate_star;
			var rate_comment;
			var product_id;
			product_id = "30010";
			$( "#rate_submit" ).click(function() { 
			  $( "#setRate" ).css("display", "none");
			  $( "#setRateThanks" ).css("display", "block");
			  rate_comment = $("#rate_input").val();
			  $.post("http://www.magicweaponcompany.com/final-project/setRate.php", {rate_star: rate_star, rate_comment:rate_comment, product_id:product_id}, function(result){
				});
			});
		 
		 
		  $("#rateYo").rateYo({
			starWidth: "40px",
			fullStar: true
			
		  });

		  $("#rateYo").rateYo()
			.on("rateyo.set", function (e, data) {
			rate_star = data.rating;
		  });
		</script>

