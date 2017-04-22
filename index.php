
        <?php
        session_start();
        $_SESSION['lang'] = 'ru';
        include './classes/pageClass.php'; //подключаем файл класса страницы
        
        //если пользователь входит впервые, предложить войти или зарегистрироваться
        if (isset($_SESSION['access']) && $_SESSION['access']){
            //переходим в личный кабинет
             header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/office.php');
        }
        else{
            /*/если пользователь еще не авторизирвался
            //отображаем интерфейс авторизации
            $log_in = 
<<<LOGIN
            <div>Интерфейс входа / регистрации </div>
            <a href='joining.php'>Вход</a><br>
            <a href='registration.php'>Регистрация</a><br>
            <a href='forgot.php'>Забыли пароль</a><br>
LOGIN;*/
        }
        //если пользователь вошел дать ему знать
        $pageObj = new pageClass();
        echo $pageObj->build_Page();
        
        ?>
  
