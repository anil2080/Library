<html>
<head>
<title> DELETE MEMBER DETAILS</title>

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
<form action="<?php echo SITE_PATH?>index.php?controller=admin&function=DELETEMember_Click" method="post" id="AddMember">

                         <table id="frmTable">
                         <tr>
                         <td><p>id to delete*</p></td><td><input type="text" name="id"  /></td>
                         
                         </tr>

                              <tr>
                            <td colspan="2"><input type="submit" value="DELETE"/></td>
                            <td colspan="2"><input type="reset" value="CANCEL"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
