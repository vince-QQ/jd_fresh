<?
class Personal extends Control{

	public function edit_user(){//进入个人信息页面

       $this->display();

	}
	public function do_edit_user(){//返回给个人信息页面所需要的数据
		
		 echo json_encode($this->model('Personal')->select_goods());
	}
	public function save_user(){


		$picurl = '';
		
		
		print_r($_FILES['picture']['tmp_name']) ;
		if(empty($_FILES['picture']['tmp_name'])) {//如果没有上传新头像
			$_FILES['picture']['tmp_name'];
			echo "这是空的图片";
			$picurl = $_POST['pic'];
			
			
		}
		else {
			echo '保存图片';//上传了新的头像
			$picurl = 'picture/'.time().".jpg";
			 copy($_FILES['picture']['tmp_name'],$picurl);
		}

		$this->model('Goods')->update(['id'=>$_POST['id'],'p_name'=>$_POST['p_name'],'p_age'=>$_POST['p_age'],
		 	'p_sex'=>$_POST['p_sex'],'picurl'=>$picurl]);//将商品表单添加的商品信息插入商品表中

		header('location:http://localhost/pratice_mvc/index.php?control=Personal&action=edit_user');
	}



}



?>