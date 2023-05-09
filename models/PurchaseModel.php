<?php

/**
 * Модель для таблицы продукции (purchase)
 * 
 */

/**
 *  Внесение в БД данных продуктов с привязкой к заказу
 *
 * @param integer $orderId ID заказа
 * @param array $cart массив корзины 
 * @return boolean TRUE в случае успешного добавления в БД
 */
function setPurchaseForOrder($orderId, $cart){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "INSERT INTO purchase (order_id, course_id, price, amount) VALUES ";
    $values = array();
    // формируем массив строк для запроса для каждого товара
    foreach ($cart as $item) {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
    }
    // преобразовываем массив в строку
    $sql .= implode(', ', $values);
    $rs = mysqli_query($db, $sql); 
    return $rs; 
}
/**
 * Получить список продуктов по определенному заказу у пользователя
 * 
 * @param type $orderId ID заказа
 * @return array
 */
function getPurchaseForOrder($orderId){
    $db = mysqli_connect("127.0.0.1", "root", "", "courseart");
    $sql = "SELECT `pe`.*, `cs`.`name` 
            FROM purchase as `pe`
            JOIN courses as `cs` ON `pe`.course_id = `cs`.id
            WHERE `pe`.order_id = {$orderId}";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs); 
}