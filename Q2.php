<!DOCTYPE>
<html>
<head>
        <title>

        </title>
</head>
<body>
<form method = "get">
    <input type="text" name="username">
    <BUTTON type="submit"> Submit </BUTTON>
</form>

    <?php
    $myname = $_GET["username"];
    echo " My name is " . $myname ;

    ?>
</body>
</html>