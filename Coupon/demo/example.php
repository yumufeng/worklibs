<?php
/**
 * Date: 2018-06-27 21:37
 * @author storm <hi@yumufeng.com>
 */
require_once '../Coupon.php';


// 例子
$coupon = new Coupon(200, 5, 30);
$res = $coupon->handle();
print_r($res);
