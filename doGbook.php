<?php
include('./conn.php');
session_start();
$action=$_GET['action'];
if($action=='q'){
    // if(!isset($_GET['page'])){
    //     exit('Hacker Action!')
    // }
    $sql='SELECT * FROM gbook;';
    $result=$conn->query($sql);
    $result_arr=array('status'=>0,'result'=> array());
    if ($result->num_rows > 0) {
        // 输出数据
        $result_arr['status']=1;
        while($row = $result->fetch_assoc()) {
            $now_arr=array('username' => $row['username'],
                           'comment'  => $row['comment'],
                           'time'     => $row['timest']
                    );
            array_push($result_arr['result'],$now_arr);
        }
        print json_encode($result_arr);

    } else {
        $result_arr['status']=0;
        print json_encode($result_arr);
    }
}
if($action=='c'){
    if(strtolower($_POST['vcode'])!=$_SESSION['vcode']){
        echo "ErrorCode";
        session_unset();
        exit();
    }
    $pre=$conn->prepare("INSERT INTO gbook (username,mail,comment) VALUES (?,?,?);");
    $pre->bind_param("sss",$username,$mail,$comment);
    $username=$_POST['username'];
    $mail=$_POST['mail'];
    $comment=$_POST['comment'];
    $result=$pre->execute();
    if($result){
        echo "OK";
    }else{
        echo "ERROR";
    }
}