<?

class User extends Control{


	public function login(){

      $this->display();

	}
	public function do_login(){

		$name = $_POST['uname'];
		$password = $_POST['password'];
		
		if (!$name||!$password) {
			echo "<h1>您的输入有误请重新输入！</h1>";
		}
		else{
		$this->model('User')->select([
		'name'=>$name,'password'=>$password]);
		}



	}
	public function reg(){

		$this->display();

	}
	public function before_reg(){

		$this->model('User')->select_uname($_GET['uname']);
	}

	public function do_reg(){

		$name = $_POST['uname'];
		$password = $_POST['password'];
		$time =time();
		if (!$name||!$password) {
			echo "<h1>您的输入有误请重新输入！</h1>";
		}
		else{
		$this->model('User')->insert([
		'name'=>$name,'password'=>$password,'time'=>$time
		]);
		header('location:http://localhost/pratice_mvc/index.php?control=User&action=login');
		}

		//跳转到control中的model函数

	}
	




}



?>