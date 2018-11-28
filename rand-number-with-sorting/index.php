<?php
// path to admin/
$this_dir = dirname(__FILE__);
include('php/createFile.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Untitled Form</title>
        <link rel="stylesheet" type="text/css" href="view.css" media="all">
        <script type="text/javascript" src="view.js"></script>
    </head>
    <body id="main_body" >
        <img id="top" src="top.png" alt="">
        <div id="form_container">
            <h1><a>Test</a></h1>
            <form id="form_38193" class="appnitro"  method="post" action="">
                <div class="form_description">
                    <h2>Test Form</h2>
                    <p>This is your form description. Click here to edit.</p>
                    <?php
                        if($error != '') {
                            echo "<font color='red'><b>".$error."</b></font><br>";
                        }
                        if($success) {
                            echo "<font color='green'><b>File created successfully with random number by given range</b></font><br>";
                        }
                    ?>
                </div>
                <ul >
                    <li id="li_1" >
                        <label class="description" for="element_1">Random Number to genrate </label>
                        <div>
                            <input id="element_1" name="number" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div>
                    </li>
                    <li id="li_2" >
                        <label class="description" for="element_2">File name to save random number </label>
                        <div>
                            <input id="element_2" name="file_name" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div>
                    </li>
                    <li class="buttons">
                        <input type="hidden" name="form_id" value="38193" />
                        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                    </li>
                </ul>
            </form>
            <div id="footer">
            </div>
        </div>
        <img id="bottom" src="bottom.png" alt="">
    </body>
</html>