<html>
  
    <head><title>新增使用者</title></head>
    <body>
        
<?php     
     # 一個類似html，可以填入使用者內容的form
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    # 呼叫 15.user_add.php來新增使用者
    # 最後回到使用者管理介面
    else{    
        echo "
            <form action=15.user_add.php method=post>   
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
