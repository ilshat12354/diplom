<?php

/**
 * Модель для таблицы категорий (categories)
 * 
 */

/**
 * Получить дочернии категории для категории $catId
 * 
 * @param integer $catId ID категории
 * @return array массив дочерних категорий 
 */
function getChildrenForCat($catId){
   $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
   $sql = "SELECT * FROM categories WHERE parent_id = '{$catId}'";
   $rs = mysqli_query($db, $sql);   
   return createSmartyRsArray($rs); 
}

/**
 * Получить главные категории с привязками дочерних
 * 
 * @return array массив категорий 
 */
function getAllMainCatsWithChildren(){
    $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $rs = mysqli_query($db, $sql);
    $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs)){
        $rsChildren = getChildrenForCat($row['id']);
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

/**
 * Получить данные категории по id
 * 
 * @param integer $catId ID категории
 * @return array массив - строка категории 
 */
function getCatById($catId){ 
   $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
   $sql = "SELECT * FROM categories WHERE id = '{$catId}'"; 
   $rs = mysqli_query($db, $sql);
   return mysqli_fetch_assoc($rs);  
}

/**
 * Получить все главные категории (категорий которые не являются дочерними)
 * 
 * @return array массив категорий
 */
function getAllMainCategories(){
    $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
    $sql = 'SELECT *FROM categories WHERE parent_id = 0';
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * 
 * Добавление новой категории
 * @param type $catName Название катетегории
 * @param type $catParentId ID родительской категории
 * @return type id новой категории
 */
function insertCat($catName, $catParentId = 0){
    $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
    $sql = "INSERT INTO categories (`parent_id`, `name`) VALUES ('{$catParentId}', '{$catName}')";
    mysqli_query($db, $sql);
    $id = mysqli_insert_id($db);
    return $id;
}

/**
 * Получить все категории
 * 
 * @return array массив категорий
 */
function getAllCategories(){
    $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
    $sql = 'SELECT * FROM categories ORDER BY parent_id ASC';
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * Обновление категории
 * 
 * @param type $itemId ID категории
 * @param type $parentId ID главной категории
 * @param type $newName новое имя категории
 * @return type
 */
function updateCategoryData($itemId, $parentId = -1, $newName = ''){
    $db = mysqli_connect("127.0.0.1", "root", "", "volleyshop");
    $set = array();
    
    if($newName){
        $set[] = "`name` = '{$newName}'";
    }
    
    if($parentId > -1){
        $set[] = "`parent_id` = '{$parentId}'";
    }
    
    $setStr = implode(", ", $set);
    $sql = "UPDATE categories SET {$setStr} WHERE id = '{$itemId}'";
    $rs = mysqli_query($db, $sql);
    return $rs;
}