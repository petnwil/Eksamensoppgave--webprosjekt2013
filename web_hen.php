<?php
$navn = $_REQUEST['navn'];
$epost = $_REQUEST['epost'];
$melding = $_REQUEST['melding'];

$mottaker = "webprosjekt2013@gmail.com";
$subject = "Hendvendelse";
$body = "Hendvendelse fra: " . $navn ."\n Epost: " . $epost . "\n" . $melding;
mail($mottaker,$subject,$body);

if(isset($_REQUEST['knapp']))
{
    echo"Hei $navn!<br/> Takk for din hendvendelse.<br/>";
}

?>
