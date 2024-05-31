<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    # 使用$_GET["id"]，擷取上個頁面用GET方法傳過來，變數名稱為id的參數(tony)
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
                             #(ip,        帳號,           密碼,     資料庫);
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        #修改使用者，建立與新增使用者相同的介面，讓使用者更新資訊。
        echo "S
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
