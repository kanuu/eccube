<?php

/* __string_template__3d4fdb9805eaf7339a7b071e794f110ac56a3efb4a9db6cd28524727e35daf6f */
class __TwigTemplate_7684b52aafc39f39efa3b13718b778f8262c0a044ca6383755aeed4b74a83f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3d4fdb9805eaf7339a7b071e794f110ac56a3efb4a9db6cd28524727e35daf6f", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        }
        // line 44
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

    \$('#add-cart').click(function() {
        \$('#mode').val('add_cart');
    });

    // bfcache無効化
    \$(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            location.reload(true);
        }
    });
});
</script>

";
    }

    // line 94
    public function block_main($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        // line 108
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div id=\"detail_wrap\" class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    ";
        // line 115
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array())) > 0)) {
            // line 116
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 117
                echo "                        <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                    ";
        } else {
            // line 120
            echo "                        <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 122
        echo "                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 id=\"detail_description_box__name\" class=\"item_name\">";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
        echo "</h3>
                <div id=\"detail_description_box__body\" class=\"item_detail\">

                    ";
        // line 131
        if ( !twig_test_empty($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductTag", array()))) {
            // line 132
            echo "                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 135
                echo "                                <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                        </div>
                        <hr>
                        <!--▲商品タグ-->
                    ";
        }
        // line 141
        echo "
                    <!--★通常価格★-->
                    ";
        // line 143
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 144
            if (( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) && ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMax", array())))) {
                // line 145
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 146
(isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) &&  !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 147
                echo "                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 149
            echo "                    ";
        } else {
            // line 150
            if ( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array()))) {
                // line 151
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 153
            echo "                    ";
        }
        // line 155
        echo "<!--★販売価格★-->
                    ";
        // line 156
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 157
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMax", array()))) {
                // line 158
                echo "                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } else {
                // line 160
                echo "                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 162
            echo "                    ";
        } else {
            // line 163
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                    ";
        }
        // line 166
        echo "<!--▼商品コード-->
                    <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 169
        if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()), "html", null, true);
        }
        // line 170
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductCategories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 177
            echo "                        <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 179
                echo "                            <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                        </ol>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">
                            ";
        // line 189
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "stock_find", array())) {
            // line 190
            echo "
                                ";
            // line 192
            echo "                                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 193
                echo "                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    ";
                // line 195
                echo "                                    <li>
                                        ";
                // line 196
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 197
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 200
                echo "                                    ";
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 201
                    echo "                                        <li>
                                            ";
                    // line 202
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 203
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 206
                echo "                                </ul>
                                ";
            }
            // line 208
            echo "
                                ";
            // line 210
            echo "                                <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 213
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 220
                echo "                                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 221
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                }
                // line 223
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                                </div>

                                ";
            // line 227
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button></li>
                                    </ul>
                                    ";
            // line 232
            echo "                                    ";
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 233
                echo "                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            ";
                // line 234
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : null) == false)) {
                    // line 235
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            ";
                } else {
                    // line 237
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            ";
                }
                // line 239
                echo "                                        </ul>
                                    ";
            }
            // line 241
            echo "                                </div> ";
            // line 242
            echo "                            ";
        } else {
            // line 243
            echo "                                ";
            // line 244
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                    ";
            // line 249
            echo "                                    ";
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 250
                echo "                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            ";
                // line 251
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : null) == false)) {
                    // line 252
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            ";
                } else {
                    // line 254
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            ";
                }
                // line 256
                echo "                                        </ul>
                                    ";
            }
            // line 258
            echo "                                </div> ";
            // line 259
            echo "                            ";
        }
        echo " ";
        // line 260
        echo "                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </form>

                    <!--★商品説明★-->
                    <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
        // line 266
        echo nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "description_detail", array()));
        echo "</p>

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 276
        echo "        ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())) {
            // line 277
            echo "        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 279
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 283
        echo "    </div>
    <!-- ▲item_detail▲ -->
";
    }

    public function getTemplateName()
    {
        return "__string_template__3d4fdb9805eaf7339a7b071e794f110ac56a3efb4a9db6cd28524727e35daf6f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 283,  582 => 279,  578 => 277,  575 => 276,  563 => 266,  556 => 262,  552 => 260,  548 => 259,  546 => 258,  542 => 256,  538 => 254,  534 => 252,  532 => 251,  529 => 250,  526 => 249,  520 => 244,  518 => 243,  515 => 242,  513 => 241,  509 => 239,  505 => 237,  501 => 235,  499 => 234,  496 => 233,  493 => 232,  487 => 227,  483 => 224,  477 => 223,  471 => 221,  468 => 220,  464 => 219,  456 => 214,  452 => 213,  447 => 210,  444 => 208,  440 => 206,  434 => 203,  430 => 202,  427 => 201,  424 => 200,  419 => 197,  415 => 196,  412 => 195,  409 => 193,  406 => 192,  403 => 190,  401 => 189,  393 => 183,  378 => 181,  351 => 179,  334 => 178,  327 => 177,  310 => 176,  302 => 170,  297 => 169,  293 => 168,  289 => 166,  283 => 163,  280 => 162,  272 => 160,  266 => 158,  264 => 157,  262 => 156,  259 => 155,  256 => 153,  250 => 151,  248 => 150,  245 => 149,  237 => 147,  235 => 146,  230 => 145,  228 => 144,  226 => 143,  222 => 141,  216 => 137,  205 => 135,  201 => 134,  197 => 132,  195 => 131,  189 => 128,  181 => 122,  173 => 120,  170 => 119,  149 => 117,  131 => 116,  129 => 115,  120 => 108,  118 => 95,  115 => 94,  63 => 44,  57 => 41,  54 => 40,  52 => 39,  38 => 28,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3d4fdb9805eaf7339a7b071e794f110ac56a3efb4a9db6cd28524727e35daf6f", "");
    }
}
