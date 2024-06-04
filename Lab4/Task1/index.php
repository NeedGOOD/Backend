<?php
require_once 'autoload.php';

// include_once('./Controllers/UserController.php');
// include_once('./Models/UserModel.php');
// include_once('./Views/UserView.php');

use Controllers\UserController;
use Models\UserModel;
use Views\UserView;

$string = 'Hello, World!<br>';
$controller = new UserController($string);
$controller->displayText();

$model = new UserModel;
echo $model->sum(2, 3) . '<br>';

$view = new UserView('Vlad', 20);
$view->viewInfo();