<?php
/* Smarty version 3.1.30, created on 2018-08-03 09:50:33
  from "F:\warmsever\warm\wamp64\www\pratice_mvc\view\Goods\desc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b642569090d87_31979594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f9bbd5df3a99765309df152772712d990160d7' => 
    array (
      0 => 'F:\\warmsever\\warm\\wamp64\\www\\pratice_mvc\\view\\Goods\\desc.html',
      1 => 1533287420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b642569090d87_31979594 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    *{
      margin: 0px;
      padding: 0px;
    }
    .er{

      width: 300px;
      height: 300px;
      position: relative;
    }
    img{
      width:300px;
      height:300px;
    }
    #small{
      position: absolute;
      background: red;
      opacity: 0.5;
      top: 0px;
      left: 0px;
      height: 100px;
      width: 100px;
      display: none;
    }
    #big{
      width: 300px;
      height: 300px;
      overflow: hidden;
      position: relative;
      margin-left: 400px;
      margin-top: -300px;
      display: none;
    }
    #big img{
      width: 900px;
      height: 900px;
      position: absolute;
    }
    .qwe{
    height:500px;
    margin-left: 50px;
    margin-top: 10px;
  }
  .zhonglei{
    margin-right: 15px;
    margin-top: 10px;
    width: 225px;
    background: #f3f3f3;
}
.zhonglei:hover{
    border: red solid 2px;
}
  .tianjia{
    
    width: 100px;
    height: 50px;
    background: red;
    color: white;
}
.gouwuche{
    margin-left: 10px;
    width: 70px;
    height: 40px;
}

</style>
</head>
<body>

  <div class="box er" id="box" >
    <img src="<?php echo $_smarty_tpl->tpl_vars['good_data']->value['g_picurl'];?>
" alt="">
    <div id="small"></div>
  </div>
  <div id="big">
    <img src="<?php echo $_smarty_tpl->tpl_vars['good_data']->value['g_picurl'];?>
" id="img">
  </div>
  <div class="box qwe">
      <h3><?php echo $_smarty_tpl->tpl_vars['good_data']->value['g_name'];?>
</h3>
      <p>炎炎夏夜，已经到了不该吃东西的时间了，可是…想吃小龙虾~想吃小龙虾~想吃小龙虾~想吃小龙虾！</p>
      <div class="jiage">
        <p class="col-md-1">京 东 价 </p>
        <p  class="col-md-1 danjia">￥20.80</p >
        <a class="col-md-1" href=""> 降价通知</a><br>
        <p class="col-md-8"></p>
      </div><br>
      <div class="dizhi">
        <p class="row col-md-2">配 送 至</p>
        <input  class="row col-md-2"type="text">
        <p class="row col-md-2">有货</p><br><br>
        <p class="fahuo">由 京东 发货, 并提供售后服务. 23:00前下单,预计明天(08月02日)送达</p>
      </div>
      <br>
      <div class="zhongliang">
          <p>重　　量     0.8k</p>
          
      </div>
      <p class="xuanzhe">选择种类</p>
      <div class="zhong">
        <input type="text" class="zhonglei" value="蒜蓉粉丝虾夷扇贝 香辣味 270g">
        <input type="text" class="zhonglei" value="芝士虾夷扇贝 甜味 270g 6只"><br>
        <input type="text" class="zhonglei" value="虾夷裙边扇贝 248g （去内脏）">
        <input type="text" class="zhonglei" value="蒜蓉粉丝蛤 360g 6只"><br>
        <input type="text" class="zhonglei" value="扇贝柱 500g">

      </div>
      <a href=""> <input class=" tianjia" type="text" value="添加到购物车"></a>
        <input class="gouwuche" type="number"><br>
    </div>
    <!-- <div class="che">
        
        <a href=""> <input class=" tianjia" type="text" value="添加到购物车"></a>
        <input class="gouwuche" type="number"><br>
         <input class=" tianjia" type="text" value="添加到购物车"> -->
  

</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
  var box = document.getElementById('box');
  var small = document.getElementById('small');
  var big = document.getElementById('big');
  var img = document.getElementById('img');
  box.onmousemove = function(event){
    console.log(event.clientY);
    var left = event.clientX-50;
    var top = event.clientY-50;
    if(left>200){
      left=200
    }
    else if(left<0){
      left = 0
    }
    if(top>200){
      top=200
    }
    else if(top<0){
      top = 0
    }
    small.style.left = left+'px';
    small.style.top = top+'px';
    img.style.left = -3*(left) + 'px';
    img.style.top = -3*(top) + 'px';
  }
  box.onmouseenter = function(){
    small.style.display = 'block';
    big.style.display = 'block';
  
  }
  box.onmouseleave = function(){
    small.style.display = 'none';
    big.style.display = 'none';
  }
<?php echo '</script'; ?>
><?php }
}
