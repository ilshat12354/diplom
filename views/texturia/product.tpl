{* страница продукта *}
<div id="jf-content">
    <div id="image_detail" class="gallery">
        <div>
            <h3 id="jg_photo_title" class="jg_imgtitle">
                {$rsProduct['name']}
            </h3>
        </div>
        
        <div style="text-align: center;" class="jg_dtl_photo" id="jg_dtl_photo">
            <img width="675" id="jg_photo_big" class="jg_photo" src="/images/products/{$rsProduct['image']}"/>
        </div>
        
        <div class="jg_photo_details" style="font-size: 20px; padding-top: 20px;">
            <div class="jg_details">
                <div class="sectiontableentry2">
                    <div class="jg_photo_left">
                        Стоимость
                    </div>
                    <div id="jg_photo_date" class="jg_photo_right">
                        {$rsProduct['price']}
                    </div>
                </div>
            </div>
            <div class="jg_detail_navi" style="padding-top: 8px;">
                <div class="jg_iconbar">
                    <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart} style="display: none" {/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
                    <a id="addCart_{$rsProduct['id']}" {if $itemInCart} style="display: none" {/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>   
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>  
            
        <div class="jg_photo_description">
            <div id="jg_photo_description_label">
                Описание
            </div>
            <div class="jg_photo_des">
                <p>{$rsProduct['description']}</p>
            </div>
        </div>
        <div class="sectiontableheader">
            &nbsp;
        </div> 
    </div>
</div>