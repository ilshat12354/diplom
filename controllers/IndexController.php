<?php

/**
 *  Контроллер главной страницы
 * 
 */

include_once '../models/CategoriesModel.php';
include_once '../models/CoursesModel.php';

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null; 
        if($itemId == null){}
    
    $rsCategories = getAllMainCatsWithChildren();
    $rsCourses = getLastCourses(100);            
    $rsCourse = getCourseById($itemId);
    
    $smarty->assign('itemInCart', 0);
    if(in_array($itemId, $_SESSION['cart'])){
        $smarty->assign('itemInCart', 1);
    }
        
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsCourses', $rsCourses);
    $smarty->assign('rsCourse', $rsCourse);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

