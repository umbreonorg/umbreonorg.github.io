
<?php
$bg = array("umbreon1.gif", "umbreon2.gif" ); // array of filenames

$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!DOCTYPE html>
<!-- umbreon.org; hi it's brandon! how are u! -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/ico" href="pokeball2.ico">
    <link rel="stylesheet" href="styles.css">
    <title> UM </title>


    <style type="text/css">
        
        body
        {
        background: url(images/<?php echo $selectedBg; ?>) no-repeat;
        }
        
    </style>


</head>



<!-- <body bgcolor="#000000" text="#D7D7D7" link="#BBBBBB" vlink="#9F9F9F"> -->
<body>

    
    
    <div class="container">

        <h1><center>umbreon.org</center></h1>

        <!-- <center><img src="umbreon1.gif" alt="umbweon"> </center>
        <center><img src="umbreon2.gif" alt="umbweon"> </center> -->

        <p> <center> hi its brandon! <a href="https://discordapp.com/users/299055310180450314">discord </a> -  <a href="https://ogusers.com/bran">ogu</a> </center></p>

    </div>

</body>
</html>