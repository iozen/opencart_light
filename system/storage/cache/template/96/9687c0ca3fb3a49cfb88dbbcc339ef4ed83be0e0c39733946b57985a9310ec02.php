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

/* default/template/product/review.twig */
class __TwigTemplate_7ff5763624b3448df9782b2396dd5e6fbfd3d52559cf33896f56446beb12a26b extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "    <table class=\"table table-striped table-bordered\">
      <tr>
        <td style=\"width: 50%;\"><strong>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                echo "</strong></td>
        <td class=\"text-right\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
                echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\"><p>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                echo "</p>
          ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 11
                    echo "            ";
                    if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 11), $context["i"]))) {
                        echo " <span class=\"fas fa-stack\"><i class=\"fas fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-2x\"></i><i class=\"fas fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 12
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
      </tr>
    </table>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  <div class=\"text-right\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 18
            echo "  <p class=\"text-center\">";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
        // line 19
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  93 => 18,  87 => 16,  73 => 12,  66 => 11,  62 => 10,  58 => 9,  52 => 6,  48 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/review.twig", "");
    }
}
