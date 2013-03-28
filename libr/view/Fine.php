
<script src="<?php echo JS_PATH?>jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo CSS_PATH?>jquery-ui.css" />
<script>

//$(function() {                    //to display calendar
	$( "#datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true
	});

//});  
//$(function() {                    //to display calendar
	$( "#datepicker1" ).datepicker({
		changeMonth: true,
		changeYear: true
	});

//});

//$(function() {
	$(".fine").click(function () {
		$("#date").hide();
	});

//});

//$(function() {
	$("#betweenDates").click(function () {
		//alert("hiii");
		$("#date").show();
	});
//});

	
$("#show").click(function() {
$.ajax({
    url: '<?php  echo SITE_PATH?>index.php?controller=admin&function=Fine_Load',
    success: function (response) {//response is value returned from php for your example it's "bye bye"
        alert("here");
      alert(response);
    }
 });
});
// function zz() {
// 	document.getElementById("date").style.display='block';
// 	//alert("hi");
// }
</script>
<style>
#rightDiv {
	float: right;
	/* 	border: 1px solid black; */
	width: 20%;
}

#leftDiv {
	float: left;
	/* 	border: 1px solid black; */
	width: 79.6%;
	height: 100%;
	/* 	background-color: rgb(128,200,209); */
}

#mainDiv {
	height: 100%;

}

#menu2 {
	background: url("../images/img02.jpg") no-repeat scroll 0 0 transparent;
	height: 50px;
	margin: 0 auto;
	width: 100%;
}

#resultDiv {
	background: url("../images/img02.jpg") no-repeat scroll 0 0 transparent;
	top: 50px;
	height: 100%;
	margin: 0 auto;
	width: 100%;
}

th {
	background-color: rgb(128, 200, 209);
	color: white;
}


</style>


	<div id="mainDiv">
		<div id="leftDiv">
			<div id="menu2">
				<h3>
					<a><blink>Export to Excel</blink></a> &nbsp;&nbsp;&nbsp; <a><blink>Export
							to word</blink></a>
				</h3>
			</div>
			<div id="resultDiv">
				<table border="2" cellpadding="5" cellspacing="0">
					<tr>
						<th style="width: 50px;">S. No.</th>
						<th style="width: 80px;">Fine</th>
						<th style="width: 100px;">Book Id</th>
						<th style="width: 150px;">Book Name</th>
						<th style="width: 100px;">Member Id</th>
						<th style="width: 200px;">Member Name</th>
						<th style="width: 100px;">Date</th>
						<th style="width: 200px;">Remark</th>
					</tr>
				</table>

			</div>
		</div>

		<div id="rightDiv">
			<form >
				
				<table>
					<tr>
						ALL:
						<input type="radio" class ="fine" name="fine" value="All" />
					</tr>
					</br>
					<tr>
						Last Month:
						<input type="radio"  class ="fine" name="fine" value="Last Month" />
					</tr>
					</br>
					<tr>
						Last week:
						<input type="radio"  class ="fine" name="fine" value="Last week" />
					</tr>
					</br>
					Between Dates:
						<input type="radio" id="betweenDates" name="fine" value="Between Dates" >
						<div id="date" style="display: none;"><p>

					</td> <input type="text" id="datepicker"  name="date1" />

				</p>
				<p>

					</td> <input type="text" id="datepicker1"  name="date2" />

				</p>
				</input>
					</div>
				
				</table>
				<input type="submit" value="show" id='show'>
			</form>
		</div>
	</div>

