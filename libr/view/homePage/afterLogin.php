<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo CSS_PATH ?>jquery.ui.all.css" />

<link href="<?php echo CSS_PATH ?>Stylesheet.css" rel="stylesheet"
	type="text/css" />
<link href="<?php echo CSS_PATH ?>default.css" rel="stylesheet"
	type="text/css" media="screen" />
<script src="<?php echo JS_PATH ?>jquery-1.9.1.js"></script>

<script src="<?php echo JS_PATH ?>jquery.ui.widget.js"></script>
<script src="<?php echo JS_PATH ?>jquery.ui.accordion.js"></script>

<script src="<?php echo JS_PATH ?>menu.js" type="text/javascript"></script>


<style>
#accordion-resizer {
	padding: 0px;
	width: 350px;
	height: 300px;
}
</style>
<script >


</script>
<script>



	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "fill"
		});
	});
	$(function() {
		$( "#accordion-resizer" ).resizable({
			minHeight: 240,
			minWidth: 200,
			resize: function() {
				$( "#accordion" ).accordion( "refresh" );
			}
		});
	});


	function fncAddBookLoadPage() {
	
		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=MenuAddBook_Click', 
                function() {

		});
	}

	function fncAddMemberLoadPage() {
		
		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=MenuAddMember_Click', function() {

		});
	}
        
        function fncUpdateMemberLoadPage() {
		
		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=MenuUpdateMember_Click', function() {

		});
	}
        
            function fncDeleteMemberLoadPage() {
		
		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=MenuDeleteMember_Click', function() {

		});
	}

            function fncFineTodayLoadPage() {
            	
        		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=ImgFineToday_Click', function() {

        		});
        	}
function fncAddPeriodicalLoadPage() {
        		
        		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=viewPeriodical_Click', function() {

        		});
        	}

function fncDeletePeriodicalLoadPage() {
        		
        		$('#content').load('<?php echo SITE_PATH?>index.php?controller=admin&function=MenuDeletePeriodical_Click', function() {

        		});
        	}
            
        
	</script>


</head>
<body id="containerBody" class="body-main">
	<!-- start header -->
	<!-- top text start -->
	
	
	<div id="header">
		<h1>
			<a href="">Library And Its Magics..</a>
		</h1>
		<p>
			<a href="">Presented By Team 5 </a>
		</p>
	</div>
	<!-- top text end -->
	<!-- end header -->


	<!-- star menu -->
	<div id="menu1">

		<ul id="menu-drop-down">
			<li><a href="" title="Homepage" class="selected">Home</a></li>

			<li><a href="" title="About Books">Book</a>
				<ul id="nav" style="display: none;">
					<li><a href="javascript:void(0)" onclick="fncAddBookLoadPage()"
						title="Add">Add</a></li>
					<li><a href="" title="Update">Update</a></li>
					<li><a href="" title="Delete">Delete</a></li>
				</ul></li>

			<li><a href="" title="Member">Member</a>
				<ul id="nav" style="display: none;">
					<li><a href="javascript:void(0)" onclick="fncAddMemberLoadPage()"
						 title="Add">Add member</a></li>
					<li><a href="javascript:void(0)" onclick="fncUpdateMemberLoadPage()"
                                               title="UpdateMember">Update M</a></li>
					<li><a href="javascript:void(0)" onclick=" fncDeleteMemberLoadPage()"
                                               title="DeleteMember">Delete</a></li>
				</ul></li>

			<li><a href="" title="Projects">Issue/Return</a>
				<ul id="nav" style="display: none;">
					<li><a href="" title="AddIssue">Add</a></li>
					<li><a href="" title="UpdateIssue">Update</a></li>
					<li><a href="" title="DeleteIssue">Delete</a></li>
				</ul></li>

			<li><a href="" title="Projects">Upload</a>
				<ul id="nav" style="display: none;">
					<li><a href="" title="Add projects">Add</a></li>
					<li><a href="" title="Update projects">Update</a></li>
					<li><a href="" title="Delete projects">Delete</a></li>
				</ul></li>

			<li><a href="" title="Projects">Periodical</a>
				<ul id="nav" style="display: none;">
					<li><a href="javascript:void(0)" onclick="fncAddPeriodicalLoadPage()" 
					title="AddPeriodical">Add</a></li>
					<li><a href="" title="UpdatePeriodical">Update</a></li>
					<li><a href="javascript:void(0)" onclick="fncDeletePeriodicalLoadPage()"
                                             title="DeletePeriodical">Delete</a></li>
				</ul></li>

			<li><a href="" title="Projects">Contacts</a>
				<ul id="nav" style="display: none;">
					<li><a href="" title="AddContacts">Add</a></li>
					<li><a href="" title="UpdateContacts">Update</a></li>
					<li><a href="" title="DeleteContacts">Delete</a></li>
				</ul></li>

		</ul>
		
	</div>
	<!-- 	end menu -->

	<!-- 	body start -->
	<div class="bodyBG">

		<!-- main left start	 -->
		<div align="center" valign="top" style="width: 262px; padding: 15px; float: left;">

			<!-- 	date start -->
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="<?php echo IMAGE_PATH ?>img07.jpg" width="236"
						height="14" alt="" /></td>
				</tr>
				<tr>
					<td align="center" valign="middle" class="BlueBG"><span
						class="Time">18:20</span></td>
				</tr>
				<tr>
					<td align="center" valign="middle" class="BlueBG">Thursday, 15th
						October 2011</td>
				</tr>
				<tr>
					<td align="center" valign="middle" class="BlueBG">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="middle" class="BlueBG"><img
						src="<?php echo IMAGE_PATH ?>Calender-Temp.jpg" width="211"
						height="164" alt="Temp Calender" /></td>
				</tr>
				<tr>
					<td><img src="<?php echo IMAGE_PATH ?>img07.jpg" width="236"
						height="11" alt="" /></td>
				</tr>
				<tr>
					<td><table border="0" align="center" cellpadding="5"
							cellspacing="0" class="CalenderBot">
							<tr>
								<td><img src="<?php echo IMAGE_PATH ?>add-icon.jpg" width="11"
									height="11" alt="Add new event" /></td>
								<td><a href="#" class="ClanderLnk">Add new event</a></td>
								<td><img src="<?php echo IMAGE_PATH ?>arrow-icon.jpg" width="11"
									height="11" alt="" /></td>
								<td><a href="#" class="ClanderLnk">Next Event</a></td>
							</tr>
						</table></td>
				</tr>
			</table>
			<!-- 	date end -->

			<!-- 	left search start -->
			<div id="accordion-resizer" class="ui-widget-content">
				<div id="accordion">
					<h3 style="margin: 0px;">
						<table style="width: 200px;" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="11" align="left" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Left.jpg" width="11"
									height="31" alt="" /></td>
								<td align="left" valign="middle" class="PanelHead">Search Books</td>
								<td width="11" align="right" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Right.jpg" width="11"
									height="31" alt="" /></td>
							</tr>
						</table>
					</h3>
					<div style="height: 600px; margin-top: 0px;">
						<table width="236" border="0" cellpadding="0" cellspacing="0">

							<tr>
								<td colspan="3" align="left" valign="top" class="PanelBorder1">
									<form>

<table id="frmTable">                     
                        <tr>
                            <td><p>Accession number</p></td><td><input type="text" name="existing_book_id"  /></td>
<td><input type="checkbox" name="name" /></td> </tr>
                         <tr>   <td><p>Book Title</p></td><td><input type="text" name="book_title" /></td>
                        <td><input type="checkbox" name="name" /></td></tr>
                        <tr>
                            <td><p>Author Name</p></td><td><input type="text" name="author_name" /></td> 
<td><input type="checkbox" name="name" /></td></tr>
                         <tr>   <td><p>Publisher Name</p></td><td><input type="text" name="publisher_name"  /></td>
                        <td><input type="checkbox" name="name" /></td></tr>
                        <tr>
                            <td><p>Subject</p></td><td><input type="text" name="subject_id"  /></td> 
<td><input type="checkbox" name="name" /></td></tr>
                          <tr>  <td><p>Num Of Copy</p></td><td><input type="number" name="number_of_copy"  min="1" /></td>
                        <td><input type="checkbox" name="name" /></td></tr>
                        <tr>
                            <td><p>Main Subject</p></td><td><input type="text" name="main_subject_id"  /></td>
<td><input type="checkbox" name="name" /></td> </tr>
                          <tr>   <td><p>Addition</p></td><td><input type="text" name="addition"  /></td>
                       <td><input type="checkbox" name="name" /></td> </tr>
                        <tr>
                            <td><p>MRP</p></td><td><input type="text" name="price"  /></td>
<td><input type="checkbox" name="name" /></td> </tr>
                          <tr>  <td><p>Dissount</p></td><td><input type="text" name="discount"  /></td>
                        <td><input type="checkbox" name="name" /></td></tr>
                        <tr>
                            <td><p>Net Price</p></td><td><input type="text" name="net_price"  /></td>
<td><input type="checkbox" name="name" /></td> </tr>
                           <tr> <td><p>Bill Number</p></td><td><input type="text" name="bill_detail_id"  /></td>
                        <td><input type="checkbox" name="name" /></td></tr>
                        <tr>
                            <td><p>Vendor Name</p></td><td><input type="text" name="vendor_id"  /></td> 
<td><input type="checkbox" name="name" /></td></tr>
                           <tr> <td><p>Volume</p></td><td><input type="text" name="volume"  /></td>
                       <td><input type="checkbox" name="name" /></td> </tr>
                        <tr>
                            <td><p>Date Of Purchase</p></td><td><input type="text" name="date_of_purchase"  /></td> 
<td><input type="checkbox" name="name" /></td></tr>
                            <tr><td><p>Isbn Number</p></td><td><input type="text" name="isbn_number"  /></td>
                      <td><input type="checkbox" name="name" /></td>  </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="SEARCH"/></td> </tr>

                    </table>



</form>
									<ul>
									</ul>
								</td>
							</tr>
						</table>
					</div>
					<h3 style="margin: 0px;">
						<table style="width: 200px;" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="11" align="left" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Left.jpg" width="11"
									height="31" alt="" /></td>
								<td align="left" valign="middle" class="PanelHead">Search
									Perodicals</td>
								<td width="11" align="right" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Right.jpg" width="11"
									height="31" alt="" /></td>
							</tr>
						</table>
					</h3>
					<div style="height: 600px; margin-top: 0px;">
						<table width="236" border="0" cellpadding="0" cellspacing="0">

							<tr>
								<td colspan="3" align="left" valign="top" class="PanelBorder1">
									<form>
										<table>
											<tr>
												<td>Perodical Name</td>
												<td><input type="text" name="name" size="10" /></td>
												<td><input type="checkbox" name="name" /></td>

											</tr>
											<tr>
												<td>Perodical Class</td>
												<td><input type="text" name="class" size="10" /></td>
												<td><input type="checkbox" name="class" /></td>
											</tr>
											<tr>
												<td>Perodical version</td>
												<td><input type="text" name="areas" size="10" /></td>
												<td><input type="checkbox" name="areas" /></td>
											</tr>

											<tr>
												<td>Perodical publication</td>
												<td><input type="text" name="areas" size="10" /></td>
												<td><input type="checkbox" name="areas" /></td>
											</tr>

										</table>
									</form>
									<ul>
									</ul>
								</td>
							</tr>
						</table>
					</div>
					<h3 style="margin: 0px;">
						<table style="width: 200px;" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="11" align="left" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Left.jpg" width="11"
									height="31" alt="" /></td>
								<td align="left" valign="middle" class="PanelHead">Search
									Members</td>
								<td width="11" align="right" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Right.jpg" width="11"
									height="31" alt="" /></td>
							</tr>
						</table>
					</h3>
					<div style="height: 600px; margin-top: 0px;">
						<table width="236" border="0" cellpadding="0" cellspacing="0">

							<tr>
								<td colspan="3" align="left" valign="top" class="PanelBorder1">
									<form>
										<table>
											<tr>
												<td>Member Name</td>
												<td><input type="text" name="name" size="10" /></td>
												<td><input type="checkbox" name="name" /></td>

											</tr>
											<tr>
												<td>Member Class</td>
												<td><input type="text" name="class" size="10" /></td>
												<td><input type="checkbox" name="class" /></td>
											</tr>
											<tr>
												<td>Member Area</td>
												<td><input type="text" name="areas" size="10" /></td>
												<td><input type="checkbox" name="areas" /></td>
											</tr>


										</table>
									</form>
									<ul>
									</ul>
								</td>
							</tr>
						</table>
					</div>



				</div>
			</div>
			<!-- 						left search end -->

		</div>
		<!-- 	main left end -->

		<!-- 	right start -->
		<div id="righttop" align="left" style="padding-top: 20px; float: right;">
<!-- 			change right main div start -->
			<div id="content">
			
<!-- 			report start -->
		<div>
		<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="11" align="left" valign="top">
								<img src="<?php echo IMAGE_PATH ?>PanelHead-Left.jpg" width="11" height="31" alt="" /></td>
								<td align="left" valign="middle" class="PanelHead">Dashboard</td>
								<td width="11" align="right" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Right.jpg" width="11" height="31" alt="" /></td>
							</tr>
							<tr>
								<td colspan="3" class="PanelBorder"><table width="100%"
										border="0" cellspacing="0" cellpadding="5">
										<tr>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>UserManagement-icon.png" onclick="fncFineTodayLoadPage()" width="103"
												height="101" alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>UploadFolder-icon.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>PhotoGalleries-icon.png" width="103"
												height="101" alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>SiteTemplates-icon.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>SEOTools-icon.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>emailSettings-icon.png" width="103" height="101"
												alt="" /></td>
										</tr>
										<tr>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>HomeStaticPage-icon.png" width="103"
												height="101" alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>Home-icon.png" width="103" height="101" alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>PrintablePage-icon.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>DateTime-icon.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>FavoritesSettings.png" width="103" height="101"
												alt="" /></td>
											<td align="center" valign="middle"><img
												src="<?php echo IMAGE_PATH ?>Graphs-icon.png" width="103" height="101" alt="" /></td>
										</tr>
									</table></td>
							</tr>
						</table>
		</div>
<!-- 		report end -->
		
<!-- 		grid start -->
		<div>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td id="rightBottom" width="11" align="left" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Left.jpg" width="11" height="31" alt="" /></td>
								<td align="left" valign="middle" class="PanelHead">Dashboard</td>
								<td width="11" align="right" valign="top"><img
									src="<?php echo IMAGE_PATH ?>PanelHead-Right.jpg" width="11" height="31" alt="" /></td>
							</tr>
							<tr>
								<td colspan="3" align="left" valign="top" class="PanelBorder1"><table
										width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr style="font-weight: bold;">
											<td width="40" height="30" align="center" valign="middle">No.</td>
											<td width="80" align="center" valign="middle">Status</td>
											<td width="70" align="center" valign="middle">ID#</td>
											<td align="center" valign="middle">Full Name</td>
											<td width="110" align="center" valign="middle">Date</td>
											<td align="center" valign="middle">Price</td>
											<td colspan="5" align="left" valign="middle">Actions</td>
										</tr>
										<tr class="MainGrid">
											<td align="center" valign="middle">1</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td width="100" align="center" valign="middle">$110.55</td>
											<td width="30" align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td width="30" align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td width="30" align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td width="30" align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td width="30" align="center" valign="middle"><input
												type="checkbox" name="checkbox" id="checkbox" /></td>
										</tr>
										<tr class="AltGrid">
											<td align="center" valign="middle">2</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox2" id="checkbox2" /></td>
										</tr>
										<tr class="MainGrid">
											<td align="center" valign="middle">3</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox3" id="checkbox3" /></td>
										</tr>
										<tr class="AltGrid">
											<td align="center" valign="middle">4</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox4" id="checkbox4" /></td>
										</tr>
										<tr class="MainGrid">
											<td align="center" valign="middle">5</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox5" id="checkbox5" /></td>
										</tr>
										<tr class="AltGrid">
											<td align="center" valign="middle">6</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox6" id="checkbox6" /></td>
										</tr>
										<tr class="MainGrid">
											<td align="center" valign="middle">7</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox7" id="checkbox7" /></td>
										</tr>
										<tr class="AltGrid">
											<td align="center" valign="middle">8</td>
											<td align="center" valign="middle">Approved</td>
											<td align="center" valign="middle">AB786</td>
											<td align="center" valign="middle">Xee Kapoor</td>
											<td align="center" valign="middle">06/11/2011</td>
											<td align="center" valign="middle">$110.55</td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>folder-icon.gif" width="14" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>user-icon.gif" width="11" height="13" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>mail-icon.gif" width="13" height="9" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img
													src="<?php echo IMAGE_PATH ?>cross-icon.gif" width="10" height="10" alt="" /></a></td>
											<td align="center" valign="middle"><input type="checkbox"
												name="checkbox8" id="checkbox8" /></td>
										</tr>
									</table></td>
							</tr>
						</table>
		</div>
<!-- 		grid end -->
			
			
<!-- 			</div> -->
<!-- 			change right main div end -->			
		</div>
		<!-- right end -->


	</div>
	<!-- body end	 -->
</body>
</html>

