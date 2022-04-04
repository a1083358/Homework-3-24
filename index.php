<?php
    session_start();
    ?>
<?php
    if(isset($_COOKIE["UID"])){
        $cookieUID=$_COOKIE["UID"];
        echo "感謝".$cookieUID."回到本系統";
    }else{
        echo "歡迎初次來本系統";
    }
    ?>
<html>
    <head>
        <title>Login登入</title>
    </head>
    <body>
        <center><h1>Login登入</h1></center>
        <center><form action="" method="get" style="width: 80%;" enctype="multipart/form-data">
        帳號ID：<input type="text" name="id" placeholder="id('user/admin')" required><br><br>
        密碼PWD：<input type="password" name="password" placeholder="PWD('123')" required><br><br>
        <input type="submit"><br><br>
    </center></form>
    <?php
        echo "<body bgcolor='#feffd9'>" ;
        $userid="user";
        $adminid="admin";
        $pwd="123";
        if(isset($_GET["id"])){
            if($_GET["id"]!=null){
                $id=$_GET["id"];
                $password=$_GET["password"];
                if($id==$userid){
                    if($password==$pwd){
                        $_SESSION['login']="yes";
                        setcookie("UID",$id,time()+17280);
                        header("Location:register.php");
                    }else{
                        $_SESSION['login']="no";
                        header("Location:register.php");
                    }
                }else if($id==$adminid){
                    if($password==$pwd){
                        $_SESSION['login']="yes";
                        setcookie("UID",$id,time()+17280);
                       header("Location:admin.php");
                    }else{
                        $_SESSION['login']="no";
                        header("Location:admin.php");
                    }
                }else{
                    header("Location:index.php");
                }
            }else{
                echo "請重新輸入";
            }
        }
        ?>
    </body>
</html>