{* страница продукта *}

<div class="page__main-block main-block">
    <div class="main-block__container _container">
        <div class="main-block__container_tovar__container">
            <div class="main-block__container_tovar">
                <div class="main-block__container_tovar_photo">
                    <a class="main-block__container_tovar_photo_link">
                        <img src="/images/courses/{$rsCourse['image']}" alt="Товар">
                    </a>
                </div>
                <div class="main-block__container_tovar_characterisiki">
                    <span class="main-block__container_tovar_characterisiki_name">{$rsCourse['name']}</span>
                    <span class="main-block__container_tovar_characterisiki_cost">Стоимость</span>
                    <span class="main-block__container_tovar_characterisiki_price">{$rsCourse['price']} руб.</span>
                    <div class="main-block__container_tovar_button">
                        <span class="main-block__container_tovar_button_link">
                            <a href="##" id="addCart_{$rsCourse['id']}" {if $itemInCart}class="hideme"{/if} onClick="addToCart({$rsCourse['id']}); return false;" alt="Добавить в корзину">В корзину</a> 
                            <a href="##" id="removeCart_{$rsCourse['id']}" {if ! $itemInCart}class="hideme"{/if} onClick="removeFromCart({$rsCourse['id']}); return false;" alt="Удалить из корзины">Удалить</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="main-block__container_description">
                <div class="main-block__container_description_container">
                    <div class="main-block__container_description_header">
                        <span>Описание</span>
                    </div>
                    <div class="main-block__container_description_body">
                        <span>{$rsCourse['description']}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>