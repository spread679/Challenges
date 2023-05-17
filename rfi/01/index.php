<!DOCTYPE html>
<html>
    <head>
        <title>RFI Challenge</title>
    </head>
    <body>
        <?php
            if (isset($_GET["rfi"])) {
                $rfi = $_GET["rfi"];
                include $rfi;
            } 
            
        ?>

        <h1>RFI Challenge</h1>
        <p>Get the flag</p>

        <form action="index.php" method="get">
            <label for="rfi">RFI: </label>
            <input id="rfi" name="rfi" type="text">
            <input type="submit" placeholder="Send">
        </form>
    </body>
</html>