<?php

/* default_frame.twig */
class __TwigTemplate_968a946051218eaab035d03ca33e2f0b9581e1d7a97ea153c34d77bdd750fdc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        echo "</title>
";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->
";
        // line 46
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 47
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

";
        // line 52
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())) {
            // line 53
            echo "    ";
            // line 54
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())));
            echo "
    ";
        }
        // line 58
        echo "
</head>
<body id=\"page_";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter((isset($context["body_class"]) ? $context["body_class"] : null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            ";
        // line 65
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())) {
            // line 66
            echo "                ";
            // line 67
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())));
            echo "
                ";
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        // line 71
        echo "            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "theme", array()), "html", null, true);
        echo "\">

        <div id=\"contents_top\">
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())) {
            // line 80
            echo "                ";
            // line 81
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())));
            echo "
                ";
            // line 83
            echo "            ";
        }
        // line 84
        echo "            ";
        // line 85
        echo "        </div>

        <div class=\"container-fluid inner\">
            ";
        // line 89
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())) {
            // line 90
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 92
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())));
            echo "
                    ";
            // line 94
            echo "                </div>
            ";
        }
        // line 96
        echo "            ";
        // line 97
        echo "
            <div id=\"main\">
                ";
        // line 100
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())) {
            // line 101
            echo "                    <div id=\"main_top\">
                        ";
            // line 102
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 105
        echo "                ";
        // line 106
        echo "
                <div id=\"main_middle\">
                    ";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 109
        echo "                </div>

                ";
        // line 112
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())) {
            // line 113
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 114
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 117
        echo "                ";
        // line 118
        echo "            </div>

            ";
        // line 121
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())) {
            // line 122
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 124
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())));
            echo "
                    ";
            // line 126
            echo "                </div>
            ";
        }
        // line 128
        echo "            ";
        // line 129
        echo "
            ";
        // line 131
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())) {
            // line 132
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 134
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())));
            echo "
                    ";
            // line 136
            echo "                </div>
            ";
        }
        // line 138
        echo "            ";
        // line 139
        echo "
        </div>

        <footer id=\"footer\">
            ";
        // line 144
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())) {
            // line 145
            echo "                ";
            // line 146
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())));
            echo "
                ";
            // line 148
            echo "            ";
        }
        // line 149
        echo "            ";
        // line 150
        echo "
        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 179
        $this->displayBlock('javascript', $context, $blocks);
        // line 180
        echo "</body>
</html>
";
    }

    // line 46
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 108
    public function block_main($context, array $blocks = array())
    {
    }

    // line 179
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 179,  371 => 108,  366 => 46,  360 => 180,  358 => 179,  346 => 170,  336 => 165,  330 => 164,  324 => 163,  318 => 162,  304 => 150,  302 => 149,  299 => 148,  294 => 146,  292 => 145,  289 => 144,  283 => 139,  281 => 138,  277 => 136,  272 => 134,  269 => 132,  266 => 131,  263 => 129,  261 => 128,  257 => 126,  252 => 124,  249 => 122,  246 => 121,  242 => 118,  240 => 117,  234 => 114,  231 => 113,  228 => 112,  224 => 109,  222 => 108,  218 => 106,  216 => 105,  210 => 102,  207 => 101,  204 => 100,  200 => 97,  198 => 96,  194 => 94,  189 => 92,  186 => 90,  183 => 89,  178 => 85,  176 => 84,  173 => 83,  168 => 81,  166 => 80,  163 => 79,  157 => 75,  151 => 71,  149 => 70,  146 => 69,  141 => 67,  139 => 66,  136 => 65,  127 => 60,  123 => 58,  117 => 54,  115 => 53,  113 => 52,  106 => 49,  102 => 47,  100 => 46,  93 => 44,  87 => 43,  81 => 42,  77 => 41,  74 => 40,  68 => 38,  66 => 37,  60 => 35,  58 => 34,  52 => 32,  50 => 31,  44 => 29,  42 => 28,  31 => 27,  25 => 23,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_frame.twig", "/Users/workspace/eccube-3.0.14/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
