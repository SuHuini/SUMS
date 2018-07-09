<?php
require('conn.php');
?> 
<!-- HTML START HERE -->
<!DOCTYPE html>
<html>
    <head>
    <title>Add Items</title>
    <!-- Custom  css styles for this site -->
    <link href="../css/sums.css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    </head>
    <body>
		<?php
			include('header.php');
		?>
        <!-- ALL BODY CONTENT COMES HERE -->
        <div id="j_form">
            <form action="new_item.php" method="post">
                <fieldset>
                    <!-- select image -->
                    <div>
                        select an image <input type="file" name="uploadfl"/>
                    </div>
                    <br>
                    <!-- set name --> 
                    <br>
                    <div>
                        <label for="itemN">Item Name:</label>
                        <input type="text" name="itemN" placeholder="name of item">
                    </div>
                    <br>
                    <!-- set price -->
                    <br>
                    <div>
                        <label for="itemP">Item price:</label>
                        <span>
                            <!-- select currency -->
                            <select>
                                <option value="volvo"  hidden>-- select currency --</option>
                                <option value="Ksh">Ksh</option>
                                <option value="Euro">Euro (£)</option>
                                <option value="Dollar">dollar ($)</option>
                            </select>
                        </span>
                        <input type="text" name="itemP" placeholder="price of item">
                    </div>
                    <br>
                    <!-- set description -->
                    <br>
                    <div>
                        <label for="itemD">Item Description:</label>
                        <textarea name="itemD" cols="60" rows="5" maxlength="254" placeholder="Description of item"></textarea>
                    </div>
                    <input type="submit" name="add" value="ADD">
                </fieldset>
            </form>
        </div>
        
        <!-- ALL BODY CONTENT ENDS HERE -->
    </body>
    <!-- custom JavaScript for this site-->
    <script src="javascript/sums.js"></script>
</html>
<!-- HTML ENDS HERE -->

<!-- PHP STARTS HERE -->


