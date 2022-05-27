<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer and Clock</title>
</head>
<body>
<?php
include_once('navbar.php');
include_once('time.php'); 
include_once('timer.php'); 
 ?>
</body>
</html>

<style>
    .hide {
        display: none;
    }
</style>
<script>
    jQuery(document).ready(function(){
        jQuery(".navbar-timer").on('click', function(){
            if(jQuery("#timer").attr('data-attribute-hide') === "true"){
            jQuery("#timer").toggleClass('hide')
            jQuery("#time").toggleClass('hide')
            jQuery("#time").attr('data-attribute-hide','true') 
            jQuery("#timer").attr('data-attribute-hide','false') 
            } 
        }) 
        jQuery(".navbar-clock").on('click', function(){
            if(jQuery("#time").attr('data-attribute-hide') === "true"){
            jQuery("#time").toggleClass('hide')
            jQuery("#timer").toggleClass('hide')
            jQuery("#timer").attr('data-attribute-hide','true') 
            jQuery("#time").attr('data-attribute-hide','false') 
            }
        })
    })
    
</script>