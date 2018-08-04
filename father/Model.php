<?
// 这个是model模型的底层实现
class Model{
	private $pdo = null;
	public $debug = false;//不开启调试
	protected $table_name = '';

  function __construct($C){
//连接数据库操作
  	$this->debug = $C['debug'];
  	$dsn = $C['driver'].":dbhost=".$C['dbhost'].";dbname=".$C['dbname'].";charset=".$C['charset'];

	$dbuname = $C['dbuser'];
	$dbpwd = $C['dbpwd'];
	// PHP连接mysql
	// mongodb、oracle、
	$this->pdo = new PDO($dsn,$dbuname,$dbpwd);
		
	// PDO报错级别设置，默认不安全显示出来
	if ($this->debug) {
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}


  }
  function insert($insert_data){
 	
   	$tablename = $this->table_name;
   	$cols = implode(',', array_keys($insert_data));
   	$value = $this->setValues(array_values($insert_data));
   	$sql = "insert into $tablename ($cols) values ($value)";
   	$this->pdo->exec($sql);




  }
  public function setValues($value_data)
	{
		// ['榴莲','1.68']  ...... "'榴莲',1.68"
		 
		foreach ($value_data as $key => $value) {
			if (is_string($value)) {
				$value_data[$key] = "'".$value."'";
			}
		}
		return implode(",", $value_data);
		# code...
	}


	function select($select_data){
       $s_name = $select_data['name'];
       $password =$select_data['password'];
      
       $table_name =  $this->table_name;
       $sql = "SELECT  `password` FROM `user` WHERE name = "."'".$s_name."'";
        
		$pdoStatement = $this->pdo->prepare($sql);//pdoStatement结果集

		$pdoStatement->execute();

		$s_password = $pdoStatement->fetchColumn();
		
		if ($s_password==$password) {
			header("location:http://localhost/pratice_mvc/index.php?control=Goods&action=goods_list");
		}
		else if($s_password==null){
			echo "<h1>您输入的用户名不存在！！！</h1>";
		}
		else{
			echo "<h1>您输入的密码有误,请重新输入!!!</h1>";
		}

	}

	function select_uname($uname){
		$table_name =  $this->table_name;
        $sql = "SELECT  * FROM `user` WHERE name = "."'".$uname."'";
        
		$pdoStatement = $this->pdo->prepare($sql);//pdoStatement结果集

		$pdoStatement->execute();

		$user_data = $pdoStatement->fetchAll();
		if (empty($user_data)) {
			echo "该用户名未被注册";
		}
		else{
			echo "该用户名已被注册";
		}
	}


	function select_goods(){
		
		$pdoStatement = $this->pdo->prepare("select * from ".$this->table_name." order by id desc");//pdoStatement结果集
		
		$pdoStatement->execute();
		return $pdoStatement->fetchAll();
		
	}

	function select_goods_byid($id){
      $tablename = $this->table_name;
      $sql = "select * from ".$this->table_name." WHERE id = " . $id;
      $pdoStatement = $this->pdo->prepare($sql);
      $pdoStatement->execute();
		return $pdoStatement->fetch();

	}



	function update($update_data){

		$tablename = $this->table_name;
		$update_cols = implode(',', array_keys($update_data));
		$update_value = $this->setValues(array_values($update_data));
		$update_sql = "UPDATE `personal_data` SET `p_name`= '".$update_data['p_name']."',`p_age`= '".$update_data['p_age']." ' ,`p_sex`= '".$update_data['p_sex']." ',`p_picurl`= '".$update_data['picurl']."'WHERE id = ". $update_data['id'];
		
		$pdoStatement = $this->pdo->prepare($update_sql);
		$pdoStatement->execute();

		


	}




}



?>