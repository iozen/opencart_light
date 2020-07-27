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

/* default/template/product/product.twig */
class __TwigTemplate_08476c3268ef320d095df63735f5bfa6faafe69734bfae9ff11d89ec6bb5f127 extends Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        ";
        // line 11
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          ";
        // line 17
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 18
            echo "            <ul class=\"thumbnails\">
              ";
            // line 19
            if (($context["thumb"] ?? null)) {
                // line 20
                echo "                <li class=\"text-center\"><a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid\"/></a></li>
              ";
            }
            // line 22
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    echo "                  <li class=\"image-additional\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 24);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 24);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-fluid\"/></a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "              ";
            }
            // line 27
            echo "            </ul>
          ";
        }
        // line 29
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-description\" id=\"description-tab\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 31
        if (($context["attribute_groups"] ?? null)) {
            // line 32
            echo "              <li class=\"nav-item\"><a href=\"#tab-specification\" id=\"specification-tab\" class=\"nav-link\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 34
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 35
            echo "              <li class=\"nav-item\"><a href=\"#tab-review\" id=\"review-tab\" class=\"nav-link\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 37
        echo "          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
              ";
        // line 40
        echo ($context["description"] ?? null);
        echo "
            </div>
            ";
        // line 42
        if (($context["attribute_groups"] ?? null)) {
            // line 43
            echo "              <div id=\"tab-specification\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"specification-tab\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 47
                echo "                      <thead>
                        <tr>
                          <td colspan=\"2\"><strong>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 49);
                echo "</strong></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 54
                    echo "                          <tr>
                            <td>";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 55);
                    echo "</td>
                            <td>";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 56);
                    echo "</td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                      </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                  </table>
                </div>
              </div>
            ";
        }
        // line 65
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 66
            echo "              <div id=\"tab-review\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
                <form id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 69
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 70
            if (($context["review_guest"] ?? null)) {
                // line 71
                echo "                    <div class=\"form-group required\">
                      <label for=\"input-name\" class=\"col-form-label\">";
                // line 72
                echo ($context["entry_name"] ?? null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group required\">
                      <label for=\"input-review\" class=\"col-form-label\">";
                // line 75
                echo ($context["entry_review"] ?? null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                      <div class=\"help-block\">";
                // line 76
                echo ($context["text_note"] ?? null);
                echo "</div>
                    </div>
                    <div class=\"form-group row required\">
                      <div class=\"col-sm-12\">
                        <label class=\"col-form-label\">";
                // line 80
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                        &nbsp;&nbsp;&nbsp; ";
                // line 81
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"1\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"2\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"3\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"4\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"5\"/>
                        &nbsp;";
                // line 91
                echo ($context["entry_good"] ?? null);
                echo "</div>
                    </div>
                    ";
                // line 93
                echo ($context["captcha"] ?? null);
                echo "
                    <div class=\"d-inline-block pt-2 pd-2 w-100\">
                      <div class=\"float-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 96
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                      </div>
                    </div>
                  ";
            } else {
                // line 100
                echo "                    ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 102
            echo "                </form>
              </div>
            ";
        }
        // line 104
        echo "</div>
        </div>
        ";
        // line 106
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 107
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 108
            echo "        ";
        } else {
            // line 109
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 110
            echo "        ";
        }
        // line 111
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 113
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 114
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
          </div>
          <h1>";
        // line 116
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 118
        if (($context["manufacturer"] ?? null)) {
            // line 119
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 121
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 122
        if (($context["reward"] ?? null)) {
            // line 123
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 125
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 127
        if (($context["price"] ?? null)) {
            // line 128
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 129
            if ( !($context["special"] ?? null)) {
                // line 130
                echo "                <li>
                  <h2>";
                // line 131
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
              ";
            } else {
                // line 134
                echo "                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li>
                  <h2>";
                // line 136
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
              ";
            }
            // line 139
            echo "              ";
            if (($context["tax"] ?? null)) {
                // line 140
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 142
            echo "              ";
            if (($context["points"] ?? null)) {
                // line 143
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 145
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 146
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 150
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 150);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 150);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "              ";
            }
            // line 153
            echo "            </ul>
          ";
        }
        // line 155
        echo "          <div id=\"product\">";
        if (($context["options"] ?? null)) {
            // line 156
            echo "              <hr>
              <h3>";
            // line 157
            echo ($context["text_option"] ?? null);
            echo "</h3>
              ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 159
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159), "select"))) {
                    // line 160
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 162
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 163));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 164
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 164);
                        echo "
                          ";
                        // line 165
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165)) {
                            // line 166
                            echo "                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 166);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166);
                            echo ")
                          ";
                        }
                        // line 167
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    echo "                    </select>
                  </div>
                ";
                }
                // line 172
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 172), "radio"))) {
                    // line 173
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 173)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174);
                    echo "</label>
                    <div id=\"input-option";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\">
                      ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 176));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 177
                        echo "                        <div class=\"form-check\">
                          <label><input type=\"radio\" name=\"option[";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 178);
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 179);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 179);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 180
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 180);
                        echo "
                            ";
                        // line 181
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 181)) {
                            // line 182
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182);
                            echo ")
                            ";
                        }
                        // line 184
                        echo "                          </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "                    </div>
                  </div>
                ";
                }
                // line 190
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190), "checkbox"))) {
                    // line 191
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                    <div id=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 194
                        echo "                        <div class=\"form-check\">
                          <label><input type=\"checkbox\" name=\"option[";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 195);
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 196
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 196)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 196);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 196);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 197
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                        echo "
                            ";
                        // line 198
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 199);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199);
                            echo ")
                            ";
                        }
                        // line 200
                        echo "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "                    </div>
                  </div>
                ";
                }
                // line 206
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206), "text"))) {
                    // line 207
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 211
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211), "textarea"))) {
                    // line 212
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 213);
                    echo "</textarea>
                  </div>
                ";
                }
                // line 216
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 216), "file"))) {
                    // line 217
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 217)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\"/>
                  </div>
                ";
                }
                // line 223
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223), "date"))) {
                    // line 224
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 227);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 234
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234), "datetime"))) {
                    // line 235
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 245
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245), "time"))) {
                    // line 246
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 246)) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 249);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 256
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "            ";
        }
        // line 258
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 259
            echo "              <hr/>
              <h3>";
            // line 260
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 263
            echo ($context["text_select"] ?? null);
            echo "</option>
                  ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 265
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 265);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "                </select>
                <div id=\"recurring-description\" class=\"help-block\"></div>
              </div>
            ";
        }
        // line 271
        echo "            <div class=\"form-group\">
              <label for=\"input-quantity\" class=\"col-form-label\">";
        // line 272
        echo ($context["entry_qty"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 274
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 276
        if ((1 === twig_compare(($context["minimum"] ?? null), 1))) {
            // line 277
            echo "              <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 278
        echo "</div>

          ";
        // line 280
        if (($context["review_status"] ?? null)) {
            // line 281
            echo "            <div class=\"rating\">
              <p>";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 283
                echo "                  ";
                if ((-1 === twig_compare(($context["rating"] ?? null), $context["i"]))) {
                    echo "<span class=\"fas fa-stack\"><i class=\"far fa-star fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-1x\"></i><i class=\"far fa-star fa-stack-1x\"></i></span>";
                }
                // line 284
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
              <hr/>
              <!-- AddThis Button BEGIN -->
              <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 288
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
              <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
              <!-- AddThis Button END -->
            </div>
          ";
        }
        // line 293
        echo "        </div>
      </div>
      ";
        // line 295
        if (($context["products"] ?? null)) {
            // line 296
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 299
                echo "            <div class=\"product-layout product-list col-lg-3 col-md-3 col-sm-6 col-12\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "        </div>
      ";
        }
        // line 303
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 304
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 306
                echo "            ";
                if ((-1 === twig_compare($context["i"], (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)))) {
                    // line 307
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 307);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 307);
                    echo "</a>,
            ";
                } else {
                    // line 309
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 309);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 309);
                    echo "</a>
            ";
                }
                // line 311
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "        </p>
      ";
        }
        // line 314
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 316
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-control').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['quantity']) {
\t\t\t\t\t\$('input[name=\\'quantity\\']').after('<div class=\"text-danger\">' + json['error']['quantity'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').each(function() {
\t\t\t\t\tvar element = \$(this).parent().find(':input');

\t\t\t\t\tif (element.hasClass('form-control')) {
\t\t\t\t\t\telement.addClass('is-invalid');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('.invalid-tooltip').show();
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\thtml = '<div id=\"toast\" class=\"toast\">';
\t\t\t\thtml += '  <div class=\"toast-header\">';
\t\t\t\thtml += '\t <strong class=\"mr-auto\"><i class=\"fas fa-shopping-cart\"></i> Shopping Cart</strong>';
\t\t\t\thtml += '    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\">&times;</button>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '  <div class=\"toast-body\">' + json['success'] + '</div>';
\t\t\t\thtml += '</div>';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#toast').toast({'delay': 3000});
\t\t\t\t\$('#toast').toast('show');

\t\t\t\t\$('#cart').parent().load('index.php?route=common/cart/info');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 415
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 421
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 427
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#review').fadeOut('slow');

\t\$('#review').load(this.href);

\t\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 495
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 499
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$('#form-review').serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 537
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1296 => 537,  1255 => 499,  1248 => 495,  1177 => 427,  1168 => 421,  1159 => 415,  1057 => 316,  1051 => 314,  1047 => 312,  1041 => 311,  1033 => 309,  1025 => 307,  1022 => 306,  1018 => 305,  1013 => 304,  1010 => 303,  1006 => 301,  997 => 299,  993 => 298,  987 => 296,  985 => 295,  981 => 293,  973 => 288,  964 => 285,  958 => 284,  951 => 283,  947 => 282,  944 => 281,  942 => 280,  938 => 278,  932 => 277,  930 => 276,  923 => 274,  914 => 272,  911 => 271,  905 => 267,  894 => 265,  890 => 264,  886 => 263,  880 => 260,  877 => 259,  874 => 258,  871 => 257,  865 => 256,  851 => 249,  844 => 247,  837 => 246,  834 => 245,  820 => 238,  813 => 236,  806 => 235,  803 => 234,  789 => 227,  782 => 225,  775 => 224,  772 => 223,  764 => 220,  756 => 219,  752 => 218,  745 => 217,  742 => 216,  726 => 213,  719 => 212,  716 => 211,  700 => 208,  693 => 207,  690 => 206,  685 => 203,  677 => 200,  670 => 199,  668 => 198,  663 => 197,  647 => 196,  641 => 195,  638 => 194,  632 => 193,  628 => 192,  621 => 191,  618 => 190,  613 => 187,  605 => 184,  598 => 182,  596 => 181,  591 => 180,  575 => 179,  569 => 178,  566 => 177,  562 => 176,  558 => 175,  554 => 174,  547 => 173,  544 => 172,  539 => 169,  532 => 167,  525 => 166,  523 => 165,  516 => 164,  512 => 163,  508 => 162,  498 => 161,  491 => 160,  488 => 159,  484 => 158,  480 => 157,  477 => 156,  474 => 155,  470 => 153,  467 => 152,  456 => 150,  452 => 149,  447 => 146,  444 => 145,  436 => 143,  433 => 142,  425 => 140,  422 => 139,  416 => 136,  410 => 134,  404 => 131,  401 => 130,  399 => 129,  396 => 128,  394 => 127,  386 => 125,  378 => 123,  376 => 122,  369 => 121,  359 => 119,  357 => 118,  352 => 116,  345 => 114,  339 => 113,  333 => 111,  330 => 110,  327 => 109,  324 => 108,  321 => 107,  319 => 106,  315 => 104,  310 => 102,  304 => 100,  295 => 96,  289 => 93,  284 => 91,  271 => 81,  267 => 80,  260 => 76,  256 => 75,  248 => 72,  245 => 71,  243 => 70,  239 => 69,  234 => 66,  231 => 65,  225 => 61,  218 => 59,  209 => 56,  205 => 55,  202 => 54,  198 => 53,  191 => 49,  187 => 47,  183 => 46,  178 => 43,  176 => 42,  171 => 40,  166 => 37,  160 => 35,  157 => 34,  151 => 32,  149 => 31,  145 => 30,  142 => 29,  138 => 27,  135 => 26,  118 => 24,  113 => 23,  110 => 22,  96 => 20,  94 => 19,  91 => 18,  89 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  70 => 11,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
