    <?php
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $grade = $_POST['grade'];
        echo '服务器端接收数据：<br />';
        echo '用户名：'.$name.'<br />';
        echo '密码：'.$pass.'<br />';
        echo '等级：'.$grade.'<br />';
        flush();
    ?>