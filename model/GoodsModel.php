<?php

class GoodsModel extends Model{

	protected $table_name ='goods_data';//这里要设置Goods中要操作的数据库表名

	function __construct()
	{	
		global $C;//一个存储着数据库连接参数的全局变量
		parent::__construct($C);//执行父类的构造函数
	}



}



?>