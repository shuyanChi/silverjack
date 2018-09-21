<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><h1> Silverjack </h1></title>
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
    <hr>
    <footer>
        CST 336 2018 &copy; Baird, Chi, and Anacleto <br/>
        Disclaimer: This website is for academic purposes only. <br/>
        <img src="../cst336/img/csumb_logo.jpg" alt="CSUMB logo" title="This is the CSUMB logo"/>
    </footer>
</html>
