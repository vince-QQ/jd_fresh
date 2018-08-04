<?php

class PersonalModel extends Model{

	protected $table_name ='personal_data';

	function __construct()
	{	
		global $C;//一个存储着数据库连接参数的全局变量
		parent::__construct($C);//执行父类的构造函数
	}



}



?>