<?php

//создаем объект формы
include_once __DIR__ . '/../classes/class_form.php';

$menu_form=new HtmlForm(array(
   'class'=>'menu',
   'action'=>'./handling_text.php',
   'method'=>'POST'
));

$btn_about = new ButtonElement(array(
    'id'=>'btn_about',
    'formaction' => './about.php',
    'value' => 'О сайте',
    'name' => 'btn_about',
    'type' => 'button',
    'class' => (basename($_SERVER ['PHP_SELF'])  == 'about.php') ? 'active_mode' : 'mode',//в зависимости от выбранного режима подсвечиваем кнопку
));
$btn_read = new ButtonElement(array(
    'id'=>'btn_read',
    'formaction' => './office.php',
    'value' => 'Режим чтения',
    'name' => 'btn_read',
    'type' => 'button',
    'class' => ($_SESSION['mode'] == 'mode_read') ? 'active_mode' : 'mode',//в зависимости от выбранного режима подсвечиваем кнопку
));
$menu_form ->addInputForm($btn_read);

$btn_stud = new ButtonElement(array(
    'id'=>'btn_stud',
    'formaction' => './office.php',
    'value' => 'Режим изучения',
    'name' => 'btn_stud',
    'type' => 'button',
    'class' => ($_SESSION['mode'] == 'mode_stud') ? 'active_mode' : 'mode',//в зависимости от выбранного режима подсвечиваем кнопку
));
$menu_form ->addInputForm($btn_stud);

//пустой абзац отменяющий обтекание
$p_clear = new pElement(array(
    'class' => 'clear',
    'text' =>'-',
));
$menu_form ->addInputForm($p_clear);
