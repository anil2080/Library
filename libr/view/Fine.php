<?php
?>

<script src="<?php echo JS_PATH?>/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo CSS_PATH?>/jquery-ui.css" />
<script>

$(function() {                    //to display calendar
	$( "#datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true
	})

});  

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
			<form
				action="<?php  echo SITE_PATH?>index.php?controller=admin&function=Fine_Load"
				method="post">
				<table>
					<tr>
						ALL:
						<input type="radio" name="fine" value="All" />
					</tr>
					</br>
					<tr>
						Last Month:
						<input type="radio" name="fine" value="Last Month" />
					</tr>
					</br>
					<tr>
						Last week:
						<input type="radio" name="fine" value="Last week" />
					</tr>
					</br>
				</table>
				<p>

					</td> <input type="text" id="datepicker"  name="date_of_birth" />

				</p>
				<input type="submit" value="show">
			</form>
		</div>
	</div>


