<!DOCTYPE html>
<html>
 <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
 </head>
 
 <form action="web_hen.txt" method="GET">
     Navn: <br/>
     <input type="text" name="navn" placeholder="Fyll inn"/><br/>
     E-post: <br/>
     <input type="text" name="epost" placeholder="Fyll inn"/><br/>
     <select size="1" name="emne">
     <option>Spørsmål</option>
     <option>Ris/Ros</option>
     <option>Annet...</option>
     </select><br/>
     <textarea wrap="OFF" name="melding" placeholder="Skriv her..."></textarea><br/>
     <input type="submit" value="send" name="knapp"/>
     
 </form>

<?php


?>