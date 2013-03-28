<html>
<head>
<title> UPDATE MEMBER DETAILS</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="C:\xampp\htdocs\xampp\Library_management\jquery-1.9.1.min"></script>
<!-- <script type="text/javascript">
$(document).ready(function() {
    $("#frmSubmit").click(function() {
        $("#ack").toggle(2000);
    });
});
</script> -->
</head>
<body>
<div id="outerDiv">
<div id="headerDiv">

<div id="leftDiv">

</div>
<div id="frmDiv">
<form action="<?php echo SITE_PATH?>index.php?controller=admin&function=UPDATEMember_Click" method="post" id="AddMember">

                         <table id="frmTable">
                         <tr>
                         <td><p>id*</p></td><td><input type="text" name="id"  /></td>
                         <td><p>Member Name*</p></td><td><input type="text" name="member_name" required="required" /></td>
                         </tr>
                         <tr>
                             <td><p>department*</p></td><td><input type="text" name="department" pattern="[a-zA-Z ]{0,}"  /></td>
                             <td><p>year Of Joining*</p></td><td><input type="text" name="year_of_joining"  /></td>
                             </tr>
                             <tr>
                                 <td><p>Course Id*</p></td><td><input type="text" name="course_id"  /></td>
                                 <td><p>University*</p></td><td><input type="number" name="university"  min="1" /></td>
                                 </tr>
                                     <tr>
                                     <td><p>Father Name*</p></td><td><input type="text" name="father_name"  /></td>
                                     <td><p>address*</p></td><td><input type="text" name="address"  /></td>
                                     </tr>
                                     <tr>
                                     <td><p>City Id*</p></td><td><input type="text" name="city_id "  /></td>
                                     <td><p>Street Id*</p></td><td><input type="text" name="street_id "  /></td>
                                         </tr>
                                         <tr>
                                         <td><p>State Id*</p></td><td><input type="text" name="state_id"  /></td>
                                         <td><p>Country Id*</p></td><td><input type="text" name="country_id "  /></td>
                                         </tr>
                                         <tr>
                                         <td><p>Zip*</p></td><td><input type="text" name="zip"  /></td>
                                         <td><p>Remarks</p></td><td colspan="3"><textarea name="remark" cols="50" rows="4"></textarea></td>
                                         </tr>
                                         <tr>
                                             <td><p>Contact Number*</p></td><td><input type="text" name="contact_number"  /></td>
                                             <td><p>Max Copy*</p></td><td><input type="text" name="max_copy"  /></td>
                                             </tr>
                                             <tr>
                                             <td><p>Copy Alloted</p></td><td><input type="text" name="copy_alloted"  /></td>
                                             <td><p>Visible</p></td><td><input type="text" name="visible"  /></td>
                                             </tr>
                                              <tr>
                                             <td><p>Fine Till Yet</p></td><td><input type="text" name="fine_till_yet"  /></td>
                                             <td><p>Fine Paid</p></td><td><input type="text" name="fine_paid"  /></td>
                                             </tr>
                                              <tr>
                                             <td><p>Image Extension</p></td><td><input type="text" name="image_extension"  /></td>
                                             <td><p>Reserve Void Date</p></td><td><input type="text" name="reserve_void_date"  /></td>
                                             </tr>
                                              <tr>
                                             <td><p>Reserve Id</p></td><td><input type="text" name="reserve_id"  /></td>
                                             <td><p>Reserve Void Date</p></td><td><input type="text" name="reserve_void_date"  /></td>
                                             </tr>
                                             
                                             <tr>
                            <td colspan="2"><input type="submit" value="UPDATE"/></td>
                            <td colspan="2"><input type="reset" value="CANCEL"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>