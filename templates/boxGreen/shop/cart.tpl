<div class="frame-inside page-cart pageCart">
    <div class="container">
        <div class="js-empty empty {if count($items) == 0}d_b{/if}">
            <div class="f-s_0 title-cart without-crumbs">
                <div class="frame-title">
                    <h1 class="title">{lang('Оформление заказа','boxGreen')}</h1>
                </div>
            </div>
            <div class="msg layout-highlight layout-highlight-msg">
                <div class="info">
                    <span class="icon_info"></span>
                    <span class="text-el">{lang('Корзина пуста','boxGreen')}</span>
                </div>
            </div>
        </div>
        {if count($items) !== 0}
            <div class="js-no-empty no-empty">
                <div class="f-s_0 title-cart without-crumbs">
                    <div class="frame-title">
                        <h1 class="title">{lang('Оформление заказа','boxGreen')}</h1>
                        {if !$is_logged_in}
                            <span class="old-buyer">
                                <button type="button" data-trigger="#loginButton">
                                    <span class="d_l text-el">{lang('Я уже тут покупал','boxGreen')}</span>
                                </button>
                            </span>
                        {/if}
                    </div>
                </div>
                <form method="post" action="{$BASE_URL}shop/order/make_order" class="clearfix">
                    <div class="left-cart">
                        <div class="horizontal-form order-form big-title">
                            {if $errors}
                                <div class="groups-form">
                                    <div class="msg">
                                        <div class="error">
                                            <span class="icon_error"></span>
                                            <span class="text-el">{echo $errors}</span>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <div class="groups-form">
                                <label>
                                    <span class="title">{lang('Имя получателя','boxGreen')}</span>
                                    <span class="frame-form-field">
                                        {if $isRequired['userInfo[fullName]']}
                                            <span class="must">*</span>
                                        {/if}
                                        <input type="text" value="{$profile.name}" name="userInfo[fullName]">
                                    </span>
                                </label>
                                <div class="frame-label">
                                    <span class="title">{lang('Телефон','boxGreen')}</span>
                                    <div class="frame-form-field">
                                        {if trim(ShopCore::app()->CustomFieldsHelper->setRequiredHtml('<span class="must">*</span>')->setPatternMain('pattern_custom_field_phone')->getOneCustomFieldsByName('addphone','order',$profile.id,'user')->asHtml()) != ''}
                                            <span class="f_r l-h_35">
                                                <button type="button" class="d_l_3" data-drop=".drop-add-phone" data-overlay-opacity="0" data-place="inherit">{lang('Еще один номер', 'boxGreen')}</button>
                                            </span>
                                        {/if}
                                        <div class="d_b o_h maskPhoneFrame">
                                            {if $isRequired['userInfo[phone]']}
                                                <span class="must">*</span>
                                            {/if}
                                            <input type="text" name="userInfo[phone]" value="{$profile.phone}" class="m-b_5">
                                            <div class="drop drop-add-phone">
                                                {echo ShopCore::app()->CustomFieldsHelper->setRequiredHtml('<span class="must">*</span>')->setPatternMain('pattern_custom_field_phone')->getOneCustomFieldsByName('addphone','order',$profile.id,'user')->asHtml()}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label>
                                    <span class="title">{lang('Email','boxGreen')}</span>
                                    <span class="frame-form-field">
                                        {if $isRequired['userInfo[email]']}
                                            <span class="must">*</span>
                                        {/if}
                                        <input type="text" value="{$profile.email}" name="userInfo[email]">
                                    </span>
                                </label>
                                {echo ShopCore::app()->CustomFieldsHelper->setRequiredHtml('<span class="must">*</span>')->setPatternMain('pattern_custom_field')->getOneCustomFieldsByName('country','order',$profile.id,'user')->asHtml()}
                                {echo ShopCore::app()->CustomFieldsHelper->setRequiredHtml('<span class="must">*</span>')->setPatternMain('pattern_custom_field')->getOneCustomFieldsByName('Selo','order',$profile.id,'user')->asHtml()}
                            </div>
                            <div class="groups-form">
                                {if count($deliveryMethods) > 0}
                                    <!-- Start. Delivery methods block -->
                                    <div class="frame-label" id="frameDelivery">
                                        <span class="title">{lang('Способ доставки','boxGreen')}</span>
                                        <div class="frame-form-field check-variant-delivery">
                                            {/* <div class="lineForm">
                                            <select id="method_deliv" name="deliveryMethodId">
                                                <option value="">{lang('--Выбирете способ доставки--', 'boxGreen')}</option>
                                            {foreach $deliveryMethods as $deliveryMethod}
                                            <option
                                                name="met_del"
                                                value="{echo $deliveryMethod->getId()}">
                                                {echo $deliveryMethod->getName()}
                                            </option>
                                            {/foreach}
                                        </select>
                                    </div>*/}
                                            <div class="frame-radio">
                                                {foreach $deliveryMethods as $deliveryMethod}
                                                    <div class="frame-label">
                                                        <span class="niceRadio b_n">
                                                            <input type="radio"
                                                                   name="deliveryMethodId"
                                                                   value="{echo $deliveryMethod->getId()}"
                                                                   />
                                                        </span>
                                                        <div class="name-count">
                                                            <span class="text-el p_r">
                                                                {echo $deliveryMethod->getName()}
                                                                {if $deliveryMethod->getDescription() && trim($deliveryMethod->getDescription()) != ""}
                                                                    <span class="icon_ask" data-rel="tooltip" data-placement="right" data-other-class="info-delivery" data-title='{echo $deliveryMethod->getDescription()}' data-offset-x="16"></span>
                                                                {/if}
                                                            </span>
                                                        </div>
                                                        <div class="help-block">
                                                            {if $deliveryMethod->getDeliverySumSpecified()}
                                                                {echo $deliveryMethod->getDeliverySumSpecifiedMessage()}
                                                            {/if}
                                                        </div>
                                                    </div>
                                                {/foreach}
                                            </div>
                                        </div>
                                        <!-- End. Delivery methods block -->
                                    </div>
                                {/if}
                                <!-- Start. Delivery  address block and comment-->
                                <div class="frame-label">
                                    <span class="title">{lang('Адрес', 'boxGreen')}</span>
                                    <span class="frame-form-field">
                                        {if $isRequired['userInfo[deliverTo]']}
                                            <span class="must">*</span>
                                        {/if}
                                        <input name="userInfo[deliverTo]" type="text" value="{$profile.address}"/>
                                    </span>
                                </div>
                                <!-- End. Delivery  address block and comment-->

                                {echo ShopCore::app()->CustomFieldsHelper->setRequiredHtml('<span class="must">*</span>')->setPatternMain('pattern_custom_field')->getOneCustomFieldsByName('city','order',$profile.id,'user')->asHtml()}

                                <div class="frame-label">
                                    <div class="frame-form-field">
                                        <button type="button" class="d_l_3 m-b_5" data-drop=".hidden-comment" data-place="inherit" data-overlay-opacity="0">{lang('Добавить комментарий к заказу', 'boxGreen')}</button>
                                        <div class="hidden-comment drop">
                                            <textarea name="userInfo[commentText]" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                {if count($deliveryMethods) > 0}
                                    <!-- Start. Payment methods block-->
                                    <div class="frame-payment p_r">
                                        <div id="framePaymentMethod">
                                            <div class="frame-label">
                                                <span class="title">{lang('Оплата','boxGreen')}:</span>
                                                <div class="frame-form-field" style="padding-top: 6px;">
                                                    <div class="help-block">{lang('Выберите доставку', 'boxGreen')}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preloader d_n_"></div>
                                    </div>
                                    <!-- End. Payment methods block-->
                                {/if}
                            </div>
                            <div class="groups-form">
                                <div class="frame-label">
                                    <span class="title">&nbsp;</span>
                                    <span class="frame-form-field">
                                        <div class="btn-buy btn-buy-p btn-buy-pp">
                                            <input type="submit" value="{lang('Подтвердить заказ','boxGreen')}" id="submitOrder"/>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-cart">
                        <div class="frame-bask frame-bask-order">
                            <div class="frame-title clearfix">
                                <div class="title f_l">{lang('Мой заказ', 'boxGreen')}</div>
                                <div class="f_r">
                                    <button type="button" class="d_l_3 editCart">{lang('Редактировать', 'boxGreen')}</button>
                                </div>
                            </div>

                            <div id="orderDetails" class="p_r">
                                {include_tpl('cart_order')}
                            </div>
                        </div>
                    </div>
                    {form_csrf()}
                </form>
            </div>
        {/if}
    </div>
</div>
<script type="text/javascript">
    initDownloadScripts(['jquery.maskedinput-1.3.min', 'cusel-min-2.5', 'order'], 'initOrderTrEv', 'initOrder');
</script>