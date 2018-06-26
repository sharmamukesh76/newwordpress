<?php

define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );


echo "::::".update_option($_GET['prokey'], $_GET['provals']);
echo "::::".update_option($_GET['pricekey'], $_GET['priceval']);
echo "::::".update_option($_GET['namekey'], $_GET['nameval']);
echo "::::".update_option($_GET['publickey'], $_GET['publicval']);
?>
