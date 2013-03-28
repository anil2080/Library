

<html>
    <head>
        <title> ADD BOOK DETAILS</title>
        
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
<!--                 <center><h1>BOOK ENTRY SECTION</h1></center> -->
<!--                 <ul> -->
<!--                     <a href="#"><li>Home</li></a> -->
<!--                     <a href="#"><li>Books status</li></a> -->
<!--                     <a href="#"><li>email us</li></a> -->
<!--                     <a href="#"><li>contact us</li></a> -->
<!--                 </ul> -->
            </div>
           <!-- <div id="frmAck">
                <p id="ack">Form submitted succesfully</p>
            </div> -->
            <div id="leftDiv">
<!--             <ul> -->
<!--                 <li>abc</li> -->
<!--                 <li>xyz</li> -->
<!--             </ul>     -->
            </div>
            <div id="frmDiv">
                <form action="<?php echo SITE_PATH?>index.php?controller=admin&function=addPeriodicalClick" method="post" id="AddBook">
                 <input type="hidden" name="book_id" value="" />
                    <table id="frmTable">                     
                   
                        <tr>
                            <td><p>Name*</p></td><td><input type="text" name="name" /></td>
                            <td><p>Volume*</p></td><td><input type="text" name="volume"  /></td>
                        </tr>
                        <tr>
                            <td><p>MRP*</p></td><td><input type="text" name="price"  /></td>
                            <td><p>Dissount*</p></td><td><input type="text" name="discount"  /></td>
                        </tr>
                        <tr>
                            <td><p>Net Price*</p></td><td><input type="text" name="net_price"  /></td>
                            <td><p>Bill Number*</p></td><td><input type="text" name="bill_number"  /></td>
                        </tr>
                        <tr>
                            <td><p>Date Of Purchase*</p></td><td><input type="text" name="date_of_purchase"  /></td>
                            <td><p>Vendor Name*</p></td><td><input type="text" name="vendor_name"  /></td>
                        </tr>
                        <tr>
                            <td><p>Language*</p></td><td><input type="text" name="language"  /></td>
                            <td><p>Num Of Copy*</p></td><td><input type="number" name="number_of_copy"  min="1" /></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><input type="submit" value="SAVE"/></td>
                            <td colspan="2"><input type="reset" value="CANCEL"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>