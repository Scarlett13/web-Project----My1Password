<?php
function echofooter()
{
echo '<footer class="footer">
<p>&copy;No Copyright<br /><br />NO RIGHTS RESERVED</p>
</footer>
</body>
</html>';
}
function echoheader()
{
    header('X-Frame-Options: DENY');
    header("Content-Security-Policy: default-src 'self';");
    header("Pragma: public");
    $expires = 86400;
    header("Cache-Control: max-age=".$expires.", must-revalidate");
    header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My 1Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="My 1Password">
    <meta name="author" content="Group1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/lib/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <script type="text/javascript" src="js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
</head>
<body>';
}
?>
