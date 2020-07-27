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

/* common/header.twig */
class __TwigTemplate_10eb6fcb48f1fc508d5caf06d6c33e9d177490a164d73602f0e207df8bc199cb extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 10
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <link type=\"text/css\" href=\"view/stylesheet/bootstrap.css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\"/>
  <link type=\"text/css\" href=\"view/javascript/fontawesome/css/fontawesome-all.css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\"/>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-3.3.1.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 28);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 28);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "    <script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</head>
<body>
<div id=\"container\">
  <header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">
    <div class=\"container-fluid\">
      <a href=\"";
        // line 38
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand d-none d-md-block border-right\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"/></a>
      ";
        // line 39
        if (($context["logged"] ?? null)) {
            // line 40
            echo "        <a href=\"#\" id=\"button-menu\" class=\"d-inline-block d-md-none border-right\"><span class=\"fas fa-bars\"></span></a>
        <ul class=\"navbar-nav\">
          <li class=\"nav-item dropdown border-left\">
            <a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><img src=\"";
            // line 43
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"rounded-circle\"/>&nbsp;&nbsp; ";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fas fa-caret-down fa-fw\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <a href=\"";
            // line 45
            echo ($context["profile"] ?? null);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-user-circle fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a>
              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 47
            echo ($context["text_store"] ?? null);
            echo "</h6>
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 49
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 49);
                echo "\" target=\"_blank\" class=\"dropdown-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 49);
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 52
            echo ($context["text_help"] ?? null);
            echo "</h6>
              <a href=\"https://www.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fab fa-opencart fa-fw\"></i> ";
            // line 53
            echo ($context["text_homepage"] ?? null);
            echo "</a> <a href=\"http://docs.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fas fa-file-alt fa-fw\"></i> ";
            echo ($context["text_documentation"] ?? null);
            echo "</a> <a href=\"http://forum.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fas fa-comments fa-fw\"></i> ";
            echo ($context["text_support"] ?? null);
            echo "</a>
            </div>
          </li>
          <li class=\"nav-item border-left\"><a href=\"";
            // line 56
            echo ($context["logout"] ?? null);
            echo "\" class=\"nav-link\"><i class=\"fas fa-sign-out-alt\"></i> <span class=\"d-none d-md-inline\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
        </ul>
      ";
        }
        // line 59
        echo "    </div>
  </header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 59,  213 => 56,  203 => 53,  199 => 52,  196 => 51,  185 => 49,  181 => 48,  177 => 47,  170 => 45,  155 => 43,  150 => 40,  148 => 39,  140 => 38,  133 => 33,  124 => 31,  119 => 30,  108 => 28,  103 => 27,  90 => 25,  86 => 24,  73 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
