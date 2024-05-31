<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            #設定新增使用者
            #設定回布告欄列表
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
                                #(ip,            帳號,            密碼,     資料庫);
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            #從資料庫查詢資料
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                #設定修改欄位
                #設定刪除欄位
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
