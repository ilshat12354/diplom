<?php

/**
 * Модель для таблицы продукции (products)
 * 
 */

/**
 * Получаем последние добавленные товары
 * 
 * @param integer $limit Лимит товаров
 * @return array Массив товаров 
 */
function getLastCourses($limit = null){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "SELECT * FROM `courses` ORDER BY id DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs); 
}

/**
 * Получить продукты для категории $itemId
 * 
 * @param integer $itemId ID категории
 * @return array массив продуктов 
 */
function getCoursesByCat($itemId){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "SELECT * FROM courses WHERE category_id = '{$itemId}'";
    $rs = mysqli_query($db, $sql); 
    return createSmartyRsArray($rs);   
}

/**
 * Получить данные продукта по ID 
 * 
 * @param integer $itemId ID продукта
 * @return array массив данных продукта 
 */
function getCourseById($itemId){
   $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
   $sql = "SELECT * FROM courses WHERE id = '{$itemId}'";
   $rs = mysqli_query($db, $sql); 
   return mysqli_fetch_assoc($rs);   
}

/**
 * Получить список продуктов из массива идентификаторов (ID`s)
 * 
 * @param array $itemsIds массив идентификаторов продуктов
 * @return array массив данных продуктов 
 */
function getCoursesFromArray($itemsIds){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $strIds = implode(', ', $itemsIds);
    $sql = "SELECT * FROM courses WHERE id in ({$strIds})";	
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs); 
}

function getCourses(){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "SELECT * FROM `courses` ORDER BY category_id";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/**
 * Добавление нового товара
 * 
 * @param type $itemName Название продукта
 * @param type $itemPrice Цена
 * @param type $itemDesc Описание
 * @param type $itemCat ID категории
 * @return type
 */
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "INSERT INTO courses SET 
                `name` = '{$itemName}',
                `price` = '{$itemPrice}',
                `description` = '{$itemDesc}',
                `category_id` = '{$itemCat}'";
                    
    $rs = mysqli_query($db, $sql);
    return $rs;
}

function updateCourse($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $newFileName = null){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $set = array();
    if($itemName){
        $set[] = "`name` = '{$itemName}'";
    }
    if($itemPrice > 0){
        $set[] = "`price` = '{$itemPrice}'";
    }
    if($itemStatus !== null){
        $set[] = "`status` = '{$itemStatus}'";
    }
    if($itemDesc){
        $set[] = "`description` = '{$itemDesc}'";
    }
    if($itemCat){
        $set[] = "`category_id` = '{$itemCat}'";
    }
    if($newFileName){
        $set[] = "`image` = '{$newFileName}'";
    }
    $setStr = implode(", ", $set);
    $sql = "UPDATE courses SET {$setStr} WHERE id = '{$itemId}'";
    $rs = mysqli_query($db, $sql);
    return $rs;
}

function updateCourseImage($itemId, $newFileName){
    $rs = updateCourse($itemId, null, null, null, null, null, $newFileName);
    return $rs;
}

