<?php 
require_once __DIR__ . '/lib/WxPay.Api.php';

call_user_func(['WxPayApi','notify'],function($res){
	file_get_contents('./bb.php',var_export($res,true));
})