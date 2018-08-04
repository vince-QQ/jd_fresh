<?php

class UserModel extends Model{

	protected $table_name ='user';

	function __construct()
	{	
		global $C;//一个存储着数据库连接参数的全局变量
		parent::__construct($C);//执行父类的构造函数
	}



}



?>