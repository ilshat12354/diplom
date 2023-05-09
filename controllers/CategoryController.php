<?php

/**
 *  categoryController.php
 * 
 *  Контроллер страницы категории (/category/1)
 * 
 */

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/CoursesModel.php';

 /**
 * Формирование страницы категории
 * 
 * @param object $smarty шаблонизатор  
 */
 function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null; 
    if ($catId == null) {
       exit(); }
    $rsCourses  = null;
    $rsChildCats = null;
    $rsCategory = getCatById($catId);
    // если главная категория то показываем дочернии категории,
    // иначе показывает товар
    if($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);
    } else {
        $rsCourses = getCoursesByCat($catId);
    }
    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);
     
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsCourses', $rsCourses);
    $smarty->assign('rsChildCats', $rsChildCats);
     
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}
