<!DOCTYPE>
<html>
<head>
        <title>

        </title>
</head>
<body>
<form method = "get">
    <input type="text" name="userchanel">
    <BUTTON type="submit"> Submit </BUTTON>
</form>

    <?php
    $myname = $_GET["userchanel"];
    echo $myname ." is the awesome chanel";

    ?>
</body>
</html>