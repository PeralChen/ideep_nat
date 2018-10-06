<?php

/*!
 * Quanzhou iDeep Network Co., Ltd. 
 * https://www.ideep.net/
 * Version: Alpha test
 * Author Eddy eddy@ideep.net
 * Copyright 2018, Quanzhou iDeep
 */
 
  if (!defined('WHMCS')) {
	exit('This file cannot be accessed directly');
}

if (!function_exists('iDeepNAT_config')) {
	function ReNew_config()
	{
		$configarray = array(
			'name'        => 'SolusVM NAT插件',
			'description' => '提供SolusVM NAT功能',
			'version'     => 'Alpha test',
			'author'      => '<a href="http://www.ideep.net" target="_blank">iDeep Eddy</a>',
			'fields'      => array(
			        "option1" => array ("FriendlyName" => "APIkey", "Type" => "text", "Size" => "25",
                              "Description" => "Textbox", "Default" => "Example", ),
					"option2" => array ("FriendlyName" => "Client_IP", "Type" => "text", "Size" => "25",
                              "Description" => "Textbox", "Default" => "Example", ),
					"option3" => array ("FriendlyName" => "Start_Port", "Type" => "text", "Size" => "25",
                              "Description" => "Textbox", "Default" => "Example", ),			
			)
			);
		return $configarray;
	}
}

if (!function_exists('iDeepNAT_activate')) {
	function iDeepNAT_activate()
	{

			try {
				if (!\WHMCS\Database\Capsule::schema()->hasTable('mod_ideepnat')) {
					\WHMCS\Database\Capsule::schema()->create('mod_ideepnat', function($table) {
						$table->increments('id');
						$table->unsignedInteger('ip');
						$table->unsignedInteger('inport');
						$table->unsignedInteger('outport');
						$table->text('server');
						$table->text('log');
						$table->dateTime('date')->default('0000-00-00 00:00:00');
						$table->text('status');
					});
				}
			}
			catch (Exception $e) {
				return array('status' => 'error', 'description' => '不能创建表 mod_ideepnat: ' . $e->getMessage());
			}

			return array('status' => 'success', 'description' => '模块激活成功. 点击 配置 对模块进行设置。');
	}
}

if (!function_exists('iDeepNAT_deactivate')) {
	function iDeepNAT_deactivate()
	{
		try {
			\WHMCS\Database\Capsule::schema()->dropIfExists('mod_ideepnat');
			return array('status' => 'success', 'description' => '模块卸载成功');
		}
		catch (Exception $e) {
			return array('status' => 'error', 'description' => 'Unable to drop tables: ' . $e->getMessage());
		}
	}
}
if (!function_exists('iDeepNAT_output')) {
	function iDeepNAT_output($vars)
	{
		$modulelink = $vars['modulelink'];

		try{
		$result = Capsule::table(string $tableName)->get()}
			catch (\Exception $e) {
						echo "数据库查询出错. {$e->getMessage()}";
					};
		
		$row = mysqli_fetch_array($result);
		
	}
}