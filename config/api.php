<?php

//access to this vars using Yii::$app->params['varname']

return [

		'url' => [
				1 =>$params['apiUrl'],
		],
		'connectTimeout' => 30000,
		'timeout' => 50000,
		'retry' => 2,
		'defaultMethod' => 'POST',
		'encode64' => false,

		//only allow access with access key in the api calls
		'accessKey'=>$params['accessKey'],

		'useragent' => 'cURL Request',

		'call' => [
				'info/api' => [
						'url' => 1,
						'method' => 'POST',
						'validateAccessKey' => true,
						'validateToken' => false,
				],

				'register/parent' => [
						'url' => 1,
						'method' => 'POST',
						'validateAccessKey' => true,
						'validateToken' => false,
				],
				'login/parent' => [
						'url' => 1,
						'method' => 'POST',
						'validateAccessKey' => true,
						'validateToken' => false,
				],