<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        # 使用$_GET["bid"]，擷取上個頁面用GET方法傳過來，變數名稱為bid的參數
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
