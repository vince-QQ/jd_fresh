<?

/**
 * 
 */
class Control
{   
	private static $control;
	private static $action;
	private  $smarty;

	public function __construct()//定义一个构造函数使得每次调用control的时候都new smarty
	{
		$this->smarty = new Smarty();

		$this->smarty->template_dir = 'view'; 


	}
	
	static function run(){

		self::$control = $control_mid =  isset($_REQUEST['control'])?$_REQUEST['control']:'User';		
		self::$action = $action_mid =  isset($_REQUEST['action'])?$_REQUEST['action']:'login';
		include_once  "control/$control_mid.php"; 
		$control_obj = new $control_mid();
		$control_obj->$action_mid();
	}
	function display($html=''){

        
        if($html){
        	$this->smarty->display($html);
        }
        else{
        	include_once "view/".self::$control."/".self::$action.".html";
        }
        
        

	}
public function assign($name,$value)//模板使得
	{
		// 赋予我们什么做人技能
		$this->smarty->assign($name,$value);
	}

	public function model($modelname){//model函数指向执行model层

       		
   			$model_name =$modelname."Model";
   			include "model/$model_name.php";
   			return new $model_name();

	}

}


?>