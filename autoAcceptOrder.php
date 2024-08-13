<?php

if ( !defined('WHMCS')) {
    header("Location: ../../index.php");
}

/**
 * Automatically accept order when paid
 *
 * @package     WHMCS
 * @copyright   Jggunter
 * @link        https://jggunter.com
 * @author      Joshua Gunter <hey@jggunter.com>
 */

use WHMCS\Database\Capsule;

add_hook('OrderPaid', 1, function($vars) {
    $orderId = $vars['orderId'];
    localAPI('AcceptOrder', ['orderid' => $orderId]);
});

?>
