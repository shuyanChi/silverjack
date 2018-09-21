<?php
    include 'functions.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Silverjack </title>
    </head>
    <body>
        <div>
            <?php
                play();
                
            ?>
            <div>
                <?php displayElapsedTime(); ?>
            <form>
                <input type = "submit" value = "Spin"/>
            </form>
            </div>
        </div>
    </body>
</html> 