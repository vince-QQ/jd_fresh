<?
class Address extends Control{

	function show_address(){//跳转收获地址界面

		$this->display();

	}
	function do_show_address(){//将收获地址的信息返回给收获地址界面
		
		echo json_encode($this->model('Address')->select_goods());//收获地址的json数据！！！！！！！！！！！
	}

	function edit_address(){//跳转编辑收货地址页面
		$this->display();
	}
	function save_address(){//保存编辑的收货地址信息
		
		 $address_data = ['a_name'=>$_POST['a_name'],'a_area'=>$_POST['a_area'],'a_desc'=>$_POST['a_desc'],'a_phone'=>$_POST['a_phone']];
		
		$this->model('Address')->insert($address_data);//将要添加的数据放入数组中进行添加
		header('location:http://localhost/pratice_mvc/index.php?control=Address&action=show_address');//跳转回主界面
	}
    





}

?>