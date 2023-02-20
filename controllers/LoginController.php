<?php

/**
 *  Контроллер страницы авторизации
 * 
 */
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * Формирование страницы авторизайии
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty){
    
    // получаем главные категории с привязками дочерних
    $rsCategories = getAllMainCatsWithChildren();
    
    // получаем список заказов пользователя
    $rsUserOrders = getCurUserOrders();
    
    $smarty->assign('pageTitle', '');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsUserOrders', $rsUserOrders);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'login');
    loadTemplate($smarty, 'footer');
}
