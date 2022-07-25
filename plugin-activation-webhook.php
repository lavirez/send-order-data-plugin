<?php

/**
 * plugin Name: Send Order Data
 * plugin URI: https://github.com/alireza-a-razavi/send-order-data-plugin
 * Author: Alireza Alavi Razavi
 * Author URI: https://github.com/alireza-a-razavi
 * Description: Add a webhook to Wordpress to send order data to an external API
 * Version: 0.1.0
 * Licence: None
 * Licence URI: None
 * text-domain: None 
*/


define( 'ABSPATH' ) or die( 'Unauthorized Access' );

$API_URI = getenv('API_URI');

