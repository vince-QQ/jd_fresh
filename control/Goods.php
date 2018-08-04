<?

class Goods extends Control{
  
   


	function goods_list(){//切换展示商品页面
       $this->display();
	} 
	function goods_list_data(){//用于给前台返回商品数
		
	 echo json_encode($this->model('Goods')->select_goods());//返回商品的数据给前端		
	// if($data ==null){
	// 	echo json_encode('数据库里面的内容是空的');
	// }
	// else{
	// 	echo json_encode('执行错误');
	// }

	}
   function get_id(){//获取商品的id然后展示商品详情

   	$id = $_REQUEST['id'];
   	$data = $this->model('Goods')->select_goods_byid($id);
   	$this->assign('good_data',$data);
   	$this->display('Goods/desc.html');



   }

   function desc(){
   	$this->display();
   }


	function add(){
		$this->display();
	}
	function do_add(){
		
		$picurl = '';
		if ($_FILES['picture']['tmp_name']) {

			$picurl = 'picture/'.time().".jpg";

			copy($_FILES['picture']['tmp_name'],$picurl);
		}

		$this->model('Goods')->insert(['g_name'=>$_POST['g_name'],'g_price'=>$_POST['g_price'],
			'g_desc'=>$_POST['g_desc'],'g_picurl'=>$picurl]);//将商品表单添加的商品信息插入商品表中
	}


	function edit_user(){
		$this->display();
	}
function edit_user1(){
		$this->display();
	}

}



?>