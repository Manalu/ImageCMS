{if count($products) > 0}    
    <!--фрейм на елемент-->
    <section class="container">
        <div class="frame_carousel_product carousel_js">
            <div class="m-b_20">
                <div class="title_h1 d_i-b v-a_m">{$title}</div>
                <div class="d_i-b groupButton v-a_m">
                    <button type="button" class="btn btn_prev">
                        <span class="icon prev"></span>
                        <span class="text-el"></span>
                    </button>
                    <button type="button" class="btn btn_next">
                        <span class="icon next"></span>
                        <span class="text-el"></span>
                    </button>
                </div>
            </div>
            <div class="carousel bot_border_grey">
                <ul class="items items_catalog">
                    {foreach $products as $hotProduct}
                        <li class="span3 {if $hotProduct->firstvariant->getStock()==0} not-avail{/if}">

                            <!-- product info block -->
                            <div class="description">
                                <div class="frame_response">

                                    <!-- displaying product's rate -->
                                    {$CI->load->module('star_rating')->show_star_rating($hotProduct)}

                                    <!-- displaying comments count -->
                                    {if $Comments[$hotProduct->getId()][0] != '0' && $hotProduct->enable_comments}
                                        <a href="{shop_url('product/'.$hotProduct->url.'#comment')}" class="count_response">
                                            {echo $Comments[$hotProduct->getId()]}
                                        </a>
                                    {/if}
                                </div>

                                <!-- displaying product name -->
                                <a href="{shop_url('product/'.$hotProduct->getUrl())}">
                                    {echo ShopCore::encode($hotProduct->getName())}
                                </a>

                                <!-- displaying products first variant price and currency symbol -->
                                <div class="price price_f-s_16">
                                    <span class="f-w_b">
                                        {echo $hotProduct->firstVariant->toCurrency()}
                                    </span> {$CS}&nbsp;&nbsp;
                                    <span class="second_cash"></span>
                                </div>

                                <!-- displaying buy button according to its availability in stock -->


                                <!-- displaying notify button -->
                                {if $hotProduct->firstvariant->getstock()!=0}
                                    <button class="btn btn_buy" 
                                            type="button" 
                                            data-prodId="{echo $hotProduct->getId()}" 
                                            data-varId="{echo $hotProduct->firstVariant->getId()}" 
                                            data-price="{echo $hotProduct->firstVariant->toCurrency()}" 
                                            data-name="{echo $hotProduct->getName()}"
                                            data-number="{echo $hotProduct->firstVariant->getnumber()}"
                                            data-maxcount="{echo $hotProduct->firstVariant->getstock()}">
                                        {lang('s_buy')}
                                    </button>
                                {else:}
                                    <button data-placement="bottom right"
                                            data-place="noinherit"
                                            data-duration="500"
                                            data-effect-off="fadeOut"
                                            data-effect-on="fadeIn"
                                            data-drop=".drop-report"
                                            data-prodid="{echo $hotProduct->getId()}"
                                            type="button"
                                            class="btn btn_not_avail">
                                        <span class="icon-but"></span>
                                        {lang('s_message_o_report')}
                                    </button> 
                                {/if} 

                                <!-- displaying products small mod image -->
                                <div class="photo-block">
                                    <a href="{shop_url('product/'.$hotProduct->getUrl())}" class="photo">
                                        <span class="helper"></span>
                                        <figure>
                                            <img src="{productImageUrl($hotProduct->getSmallImage())}" 
                                                 alt="{echo ShopCore::encode($hotProduct->getName())} - {echo $hotProduct->getId()}"/>
                                        </figure>
                                    </a>
                                </div>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </section>  
{/if}
<!-- featured -->