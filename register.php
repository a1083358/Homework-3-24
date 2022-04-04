<?php
    session_start();//開始session，一定要加
    if(isset($_SESSION['login'])){//如果變數存在
    if($_SESSION['login']=="yes"){//如果是yes
        echo "<body bgcolor='#e0effc'>" ;
        echo "<center>"."<a href=logout.php>登出系統</a>";
    }else{
        echo "<body bgcolor='#ffe8fd'>" ;
        echo "<center>"."非法進入"."<br>";
        echo "<a href=index.php>回登入頁</a>";
        exit();//不加會連html一起跑出來
    }
}else{
    echo "變數沒出現";
    exit();
}
    ?>