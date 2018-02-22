<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="./css/main.css">
        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body>

        <h1>E-Mail</h1>
        <?php
            $vard = $_GET['vardas'];
            $klaus = $_GET['klausimas'];
            $elmail = $_GET['epastas'];

            echo $vard . $klaus . $elmail;


            // print_r( $_GET);   -----testavimas



         ?>


<form class="" action="send_email.php" method="get">
    <input type="text" name="vardas" value="<?php echo $vard; ?>" placeholder="Vardas" maxlength="40"> <br>
    <br>
    <textarea name="klausimas" rows="8" placeholder="Klausimas" cols="80" required></textarea> <br>
    <br>
    <input type="email" name="epastas" autocomplete="" placeholder="E-pastas" value="" required maxlength="50"> <br>
    <br>
    <input type="submit" name="Go" value="Siusti"> <br>

</form>









        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>

        <!-- <script type="text/javascript">
        $('input[name="epastas"]').val("tekstas ivestas neteisingai");
        </script> -->
    </body>
</html>
