<?php
if (!empty($_GET['page_id'])){
  $page_id = (string)$_GET['page_id'];
  switch($page_id){
    case '1':{
      include('index.php');
      break;
    }
    case '2':{
      include('bet.php');
      break;
    }
    case '3':{
      include('buy.php');
      break;
    }
    case '4':{
      include('market.php');
      break;
    }
    default:{
      $page_id = 'banhmi/chamcari_'.str_replace('../', '',$page_id).'.php';
      if(isset($page_id))
      {
        include("$page_id");
      }
      else
      {
        include("index.php");
      }  
  }

}
}
?>