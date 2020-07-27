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

/* install/step_2.twig */
class __TwigTemplate_14a956fc799031a6fa8cc1e91f0cdaec0973f551057a88b3b4370475863292e3 extends Template
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
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">2
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "
          <br>
          <small>";
        // line 11
        echo ($context["text_step_2"] ?? null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 24
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 27
        echo ($context["text_install_php"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 32
        echo ($context["text_setting"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 33
        echo ($context["text_current"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 34
        echo ($context["text_required"] ?? null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 35
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 40
        echo ($context["text_version"] ?? null);
        echo "</td>
                <td>";
        // line 41
        echo ($context["php_version"] ?? null);
        echo "</td>
                <td>7.0+</td>
                <td class=\"text-center\">
                  ";
        // line 44
        if (($context["version"] ?? null)) {
            // line 45
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 47
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 48
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 51
        echo ($context["text_global"] ?? null);
        echo "</td>
                <td>";
        // line 52
        if (($context["register_globals"] ?? null)) {
            // line 53
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 55
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 56
        echo "</td>
                <td>";
        // line 57
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 59
        if ( !($context["register_globals"] ?? null)) {
            // line 60
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 62
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 63
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 66
        echo ($context["text_magic"] ?? null);
        echo "</td>
                <td>";
        // line 67
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 68
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 70
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 71
        echo "</td>
                <td>";
        // line 72
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 74
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 75
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 77
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 78
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 81
        echo ($context["text_file_upload"] ?? null);
        echo "</td>
                <td>";
        // line 82
        if (($context["file_uploads"] ?? null)) {
            // line 83
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 85
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 86
        echo "</td>
                <td>";
        // line 87
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 88
        if (($context["file_uploads"] ?? null)) {
            // line 89
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 91
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 92
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 95
        echo ($context["text_session"] ?? null);
        echo "</td>
                <td>";
        // line 96
        if (($context["session_auto_start"] ?? null)) {
            // line 97
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 99
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 100
        echo "</td>
                <td>";
        // line 101
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 102
        if ( !($context["session_auto_start"] ?? null)) {
            // line 103
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 105
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 106
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 111
        echo ($context["text_install_extension"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 116
        echo ($context["text_extension"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 117
        echo ($context["text_current"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 118
        echo ($context["text_required"] ?? null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 119
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 124
        echo ($context["text_db"] ?? null);
        echo "</td>
                <td>";
        // line 125
        if (($context["db"] ?? null)) {
            // line 126
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 128
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 129
        echo "</td>
                <td>";
        // line 130
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 131
        if (($context["db"] ?? null)) {
            // line 132
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 134
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 135
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 138
        echo ($context["text_gd"] ?? null);
        echo "</td>
                <td>";
        // line 139
        if (($context["gd"] ?? null)) {
            // line 140
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 142
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 143
        echo "</td>
                <td>";
        // line 144
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 145
        if (($context["gd"] ?? null)) {
            // line 146
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 148
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 149
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 152
        echo ($context["text_curl"] ?? null);
        echo "</td>
                <td>";
        // line 153
        if (($context["curl"] ?? null)) {
            // line 154
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 156
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 157
        echo "</td>
                <td>";
        // line 158
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 159
        if (($context["curl"] ?? null)) {
            // line 160
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 162
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 163
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 166
        echo ($context["text_openssl"] ?? null);
        echo "</td>
                <td>";
        // line 167
        if (($context["openssl"] ?? null)) {
            // line 168
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 170
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 171
        echo "</td>
                <td>";
        // line 172
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 173
        if (($context["openssl"] ?? null)) {
            // line 174
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 176
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 177
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 180
        echo ($context["text_zlib"] ?? null);
        echo "</td>
                <td>";
        // line 181
        if (($context["zlib"] ?? null)) {
            // line 182
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 184
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 185
        echo "</td>
                <td>";
        // line 186
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 187
        if (($context["zlib"] ?? null)) {
            // line 188
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 190
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 191
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 194
        echo ($context["text_zip"] ?? null);
        echo "</td>
                <td>";
        // line 195
        if (($context["zip"] ?? null)) {
            // line 196
            echo "                    ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 198
            echo "                    ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 199
        echo "</td>
                <td>";
        // line 200
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 201
        if (($context["zip"] ?? null)) {
            // line 202
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 204
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 205
        echo "</td>
              </tr>
              ";
        // line 207
        if ( !($context["iconv"] ?? null)) {
            // line 208
            echo "                <tr>
                  <td>";
            // line 209
            echo ($context["text_mbstring"] ?? null);
            echo "</td>
                  <td>";
            // line 210
            if (($context["mbstring"] ?? null)) {
                // line 211
                echo "                      ";
                echo ($context["text_on"] ?? null);
                echo "
                    ";
            } else {
                // line 213
                echo "                      ";
                echo ($context["text_off"] ?? null);
                echo "
                    ";
            }
            // line 214
            echo "</td>
                  <td>";
            // line 215
            echo ($context["text_on"] ?? null);
            echo "</td>
                  <td class=\"text-center\">";
            // line 216
            if (($context["mbstring"] ?? null)) {
                // line 217
                echo "                      <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                    ";
            } else {
                // line 219
                echo "                      <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                    ";
            }
            // line 220
            echo "</td>
                </tr>
              ";
        }
        // line 223
        echo "            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 226
        echo ($context["text_install_file"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 231
        echo ($context["text_file"] ?? null);
        echo "</b></td>
                <td><b>";
        // line 232
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 237
        echo ($context["catalog_config"] ?? null);
        echo "</td>
                <td>";
        // line 238
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 239
            echo "                    <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 241
            echo "                    <span class=\"text-danger\">";
            echo ($context["error_catalog_config"] ?? null);
            echo "</span>
                  ";
        }
        // line 242
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 245
        echo ($context["admin_config"] ?? null);
        echo "</td>
                <td>";
        // line 246
        if ( !($context["error_admin_config"] ?? null)) {
            // line 247
            echo "                    <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 249
            echo "                    <span class=\"text-danger\">";
            echo ($context["error_admin_config"] ?? null);
            echo "</span>
                  ";
        }
        // line 250
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 256
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 258
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 263
        echo ($context["column_left"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 266
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 266,  700 => 263,  692 => 258,  685 => 256,  677 => 250,  671 => 249,  665 => 247,  663 => 246,  659 => 245,  654 => 242,  648 => 241,  642 => 239,  640 => 238,  636 => 237,  628 => 232,  624 => 231,  616 => 226,  611 => 223,  606 => 220,  602 => 219,  598 => 217,  596 => 216,  592 => 215,  589 => 214,  583 => 213,  577 => 211,  575 => 210,  571 => 209,  568 => 208,  566 => 207,  562 => 205,  558 => 204,  554 => 202,  552 => 201,  548 => 200,  545 => 199,  539 => 198,  533 => 196,  531 => 195,  527 => 194,  522 => 191,  518 => 190,  514 => 188,  512 => 187,  508 => 186,  505 => 185,  499 => 184,  493 => 182,  491 => 181,  487 => 180,  482 => 177,  478 => 176,  474 => 174,  472 => 173,  468 => 172,  465 => 171,  459 => 170,  453 => 168,  451 => 167,  447 => 166,  442 => 163,  438 => 162,  434 => 160,  432 => 159,  428 => 158,  425 => 157,  419 => 156,  413 => 154,  411 => 153,  407 => 152,  402 => 149,  398 => 148,  394 => 146,  392 => 145,  388 => 144,  385 => 143,  379 => 142,  373 => 140,  371 => 139,  367 => 138,  362 => 135,  358 => 134,  354 => 132,  352 => 131,  348 => 130,  345 => 129,  339 => 128,  333 => 126,  331 => 125,  327 => 124,  319 => 119,  315 => 118,  311 => 117,  307 => 116,  299 => 111,  292 => 106,  288 => 105,  284 => 103,  282 => 102,  278 => 101,  275 => 100,  269 => 99,  263 => 97,  261 => 96,  257 => 95,  252 => 92,  248 => 91,  244 => 89,  242 => 88,  238 => 87,  235 => 86,  229 => 85,  223 => 83,  221 => 82,  217 => 81,  212 => 78,  208 => 77,  204 => 75,  202 => 74,  197 => 72,  194 => 71,  188 => 70,  182 => 68,  180 => 67,  176 => 66,  171 => 63,  167 => 62,  163 => 60,  161 => 59,  156 => 57,  153 => 56,  147 => 55,  141 => 53,  139 => 52,  135 => 51,  130 => 48,  126 => 47,  122 => 45,  120 => 44,  114 => 41,  110 => 40,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  82 => 27,  78 => 26,  74 => 24,  66 => 20,  64 => 19,  53 => 11,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step_2.twig", "");
    }
}
