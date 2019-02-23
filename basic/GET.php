<?php 
$nameCode = $_GET['name'];
$country = $_GET['country'];
    //echo 'Hi '.$nameCode;
    //echo ' from '.$country;

?>

<div>
    Hi.<b><?php echo $nameCode; ?></b>
    from <u><?php echo $country;?> </u>
    <hr>
</div>