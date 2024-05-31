<?php
error_reporting(0);
session_start();

if(!$_session["id"]){
    echo "請先登入";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{
    echo"
          <html>
              <head><title>新增布告</title></head>
              <body>
                  <form method=post action=bulletin_add.php>
                      標題:<input type=text name=title><br>
                      內容:<br><textarea name=content rows=20 clos=100></textarea><br>
                      佈告類型:<input type=radio name=type value=1 cheaked>系上公告
                              <input type=radio name=type value=2 >獲獎資訊
                              <input type=radio name=type value=3 >徵才資訊<br>
                       發布時間:<input type=date name=time><p>
                        <input type=submit value=新增布告> <input type=reset vaule=清除>
                   </form>

                </body>
             </html>
     ";
}


?>