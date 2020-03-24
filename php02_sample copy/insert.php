<?php

if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["detail"]) || $_POST["detail"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = ;
$email = ;
$detail = ;

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=*************;charset=utf8;host=********','*****','*****');
} catch (PDOException $e) {
  exit('dbError:'.$e->getMessage());
}

//３．データ登録SQL作成
$sql ="INSERT INTO **********(***********************)
VALUES(**************************)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue('*****', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('*****', $email, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('*****', $detail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("*************");

}
?>
