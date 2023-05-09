<?php

/**
 *  ProductController.php
 * 
 *  Контроллер страницы товара (/product/1)
 * 
 */

// подключаем модели
include_once '../models/CoursesModel.php';
include_once '../models/CategoriesModel.php';

/**
 * Формирование страницы курса
 * 
 * @param object $smarty шаблонизатор 
 */
function indexAction($smarty){ 
    $itemId = isset($_GET['id']) ? $_GET['id'] : null; 
    if($itemId == null){
        exit(); }
        
    // получить данные о курсе
    $rsCourse = getCourseById($itemId);

    // получить все категории 
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('itemInCart', 0);
    if(in_array($itemId, $_SESSION['cart'])){
        $smarty->assign('itemInCart', 1);
    }
     	 	 
    $smarty->assign('pageTitle', '');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsCourse', $rsCourse);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'course');
    loadTemplate($smarty, 'footer');
}
