
<?php
require("includes/top.php");
require("includes/nav.php");

if(isset($_POST['txt'])){
       $userInput = $_POST['txt'];
       $userInputPlus = str_replace(' ', '+', $userInput);
       echo $userInputPlus;
       
}

require("includes/footer.php");
       
?>
