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

/* common/login.twig */
class __TwigTemplate_5ae2c1475b52b237d54f8d632d01937329ef8ffba9e1414714bcd7b1aec8b11a extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-4 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-lock\"></i> ";
        // line 9
        echo ($context["text_login"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 16
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 21
        echo "            <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label for=\"input-username\" class=\"col-form-label\">";
        // line 23
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                  </div>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 28
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"input-password\" class=\"col-form-label\">";
        // line 32
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                  </div>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 37
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                ";
        // line 39
        if (($context["forgotten"] ?? null)) {
            // line 40
            echo "                  <div class=\"form-text\"><a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></div>
                ";
        }
        // line 42
        echo "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-key\"></i> ";
        // line 44
        echo ($context["button_login"] ?? null);
        echo "</button>
              </div>
              ";
        // line 46
        if (($context["redirect"] ?? null)) {
            // line 47
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
              ";
        }
        // line 49
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  139 => 49,  133 => 47,  131 => 46,  126 => 44,  122 => 42,  114 => 40,  112 => 39,  105 => 37,  97 => 32,  88 => 28,  80 => 23,  74 => 21,  66 => 17,  63 => 16,  55 => 12,  53 => 11,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/login.twig", "");
    }
}
