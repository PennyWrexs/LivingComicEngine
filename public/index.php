<?php

require_once "../config/Config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo Config::$siteName; ?></title>

    <style>

        body{
            margin:0;
            background:#1b1b1b;
            color:white;
            font-family:Arial, Helvetica, sans-serif;
        }

        .container{

            width:900px;
            margin:auto;
            margin-top:80px;
            text-align:center;

        }

        h1{

            font-size:48px;
            margin-bottom:10px;

        }

        h2{

            color:#9ccfff;
            font-weight:normal;

        }

        .card{

            background:#2a2a2a;
            padding:40px;
            border-radius:15px;
            margin-top:40px;

        }

    </style>

</head>

<body>

<div class="container">

<h1>Living Comic Engine</h1>

<h2><?php echo Config::$version; ?></h2>

<div class="card">

<h3>Genesis Build</h3>

<p>If you're reading this...</p>

<p>The Living Comic Engine has officially begun.</p>

<p><strong>Welcome to Penny's world.</strong></p>

</div>

</div>

</body>

</html>