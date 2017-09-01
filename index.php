
        <?php
        session_start();
        $_SESSION['lang'] = 'ru';
        include './classes/pageClass.php'; //подключаем файл класса страницы
        include 'socbuttons.php';//подключаем файл скодами социальніх кнопок
        
        //если пользователь авторизирвался
        if (isset($_SESSION['access']) && $_SESSION['access']){
            //переходим в личный кабинет
             header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/office.php');
        }
        else{
            /*/если пользователь еще не авторизирвался
            //отображаем интерфейс авторизации
             */
        }
        $content = about();
        $content = facebookButton($content);
        $pageObj = new pageClass($content);
        echo $pageObj->build_Page();
        
        function about(){
            $text = 
<<<ABOUT

                    <div class = 'about'>
                    <h1 >О сайте</h1>
                    
                        <p>Этот сайт является интернет-сервисом облегчающим изучение английских слов при чтении английских текстов. Он будет полезен тем кто много работает с печатными текстами.</p>
                        <p>Для работы с сайтом необходимо зарегистрироваться и зайти в личный кабинет. Пользователю пока доступно два режима: режим чтения и режим изучения</p>
                        <h2>В чем фишка сайта</h2>
                    <p> Вы будете учить действительно нужные для вас слова, и не будете тратить время на те слова, которые уже знаете. И через короткое время, при условии регулярного использования сайта, удивитесь, какие большие куски текста сможете переводить, не обращаясь к словарю или переводчику!</p>
                    <h2>Режим чтения</h2>
                    <p>Пользователю необходимо занести фрагмент читаемого текста в соответствующее поле формы. 
                        Затем из этого текста выбрать непонятные слова или словосочетания и перевести их. 
                        Если перевода не обнаружено, пользователю прийдется самостоятельно разыскать в интернете перевод и ввести его в соответствующее поле формы.</p>
                    <p>Все слова, на которые пользователь посмотрел перевод, будут автоматически добавлены в список для изучения. Остальные слова будут также добавлены в базу слов пользователя, но они будут помечены, как выученные.</p>
                    <p>Если вы довольно хорошо знаете английский, необязательно вводить весь текст, достаточно вводить только предложения вызвавшие затруднения.</p>
                    <h2>Режим изучения</h2>
                    <p>К нему следует приступать если вы хотя бы раз поработали в режиме чтения, чтобы набрать список слов для изучения. Для изучения выбираются слова из личной базы слов пользователя с наименьшим уровнем освоения. 
                        Даже если вы по каким-то причинам не читаете временно на английском, рекомендуется все-равно регулярно проходить режим изучения, чтобы слова не забывались.</p>
                            <p> Рекомендумая величина списка для изучения 20-30 слов.</p>
                    </div>
                    
ABOUT;
            return $text;
        }

        
        ?>
  
