<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_ea0c48b2f92ebf3b94fc78fee2080ac68c8bb6e3cfc1447f86a56aba2a754cd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
    <title>Webber</title>

    <style>
        /*capture width 820px for breakpoint*/

       body{
            background-color: #EEEEEE;
            font-family: 'Open Sans', sans-serif;
        }

        #body{
            width: 70%;
            margin: 0 auto;
        }

        .header h1{
            font-weight: bold;
        }

        .header p{
            color: #7b7b7d;
        }

        .authors-grep{
            background-color: #EEEEEE;
            box-shadow: 2px 3px 7px #888888;
            margin: 2em 0 2em 0;
        }

        .authors-grep .header{
            display: flex;
            align-items: center;
            padding: 5px;
            border-bottom: 0.5px solid #d0d0d0;
        }

        .authors-grep .header img{
            border-radius: 50%;
            width: 3%;
            height:0%;
        }
        .authors-grep .header p{
           color: #AFB8C2;
            font-weight: 600;
            font-size: 13px;
            padding-left:8px;
        }
        .author-name{
            color: #F64611;
        }
        .body{
            display: flex;
            padding:1em;
            align-items: flex-start;
        }
        .body .text{
            padding: 0 1em 0 1em;
        }
        .body .text h3{
            margin:0;
            color: #0E1119;
            font-size: 1.5em;
        }

        .body .text p{
            color: #7b7b7d;
        }

        .body .text {
            text-align: justify;
        }

        .second{
            background-color: #CCECFF;
        }

        @media only screen and (max-width: 820px) {
            .body{
                flex-direction: column;
            }
            .image{
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>

<div id=\"body\">
    <div class=\"header\">
        <h1>MAQE Forum</h1>
        <p>Your current timezone is: Asia / Bangkok</p>
    </div>


    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 108
            echo "        <div class=\"authors-grep ";
            if ((0 === twig_compare((($context["key"] + 1) % 2), 0))) {
                echo " second ";
            }
            echo "\">
            <div class=\"header\">
                <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author_avatar", [], "any", false, false, false, 110), "html", null, true);
            echo "\" alt=\"\">
                <p><span class=\"author-name\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author_name", [], "any", false, false, false, 111), "html", null, true);
            echo "</span> posted on ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 111), "html", null, true);
            echo "</p>
            </div>

            <div class=\"body\">
                <div class=\"image\">
                    <img src=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image_url", [], "any", false, false, false, 116), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"text\">
                    <h3>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 119), "html", null, true);
            echo "</h3>
                    <p>
                        ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 121), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 128,  182 => 121,  177 => 119,  171 => 116,  161 => 111,  157 => 110,  149 => 108,  145 => 107,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/Users/elishaukpong/Documents/Web Projects/maqe-web/src/index.html.twig");
    }
}
