<?php

/* @core/form.twig */
class __TwigTemplate_4506504c1b1f2240710518c26781e22b1cf518bec6a0fec930c541446879fa3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 76
        echo "
";
        // line 88
        echo "
";
        // line 94
        echo "
";
        // line 100
        echo "
";
        // line 110
        echo "
";
        // line 116
        echo "
";
        // line 122
        echo "
";
        // line 128
        echo "
";
        // line 134
        echo "
";
        // line 140
        echo "
";
        // line 150
        echo "
";
        // line 158
        echo "
";
        // line 166
        echo "
";
        // line 177
        echo "
";
        // line 183
        echo "
";
        // line 187
        echo "
";
        // line 191
        echo "
";
    }

    // line 1
    public function getopen($__method__ = null, $__action__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "action" => $__action__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["method"] ?? null)), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["action"] ?? null))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute(($context["tooltips"] ?? null), ($context["id"] ?? null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array()), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo ($context["title"] ?? null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tooltips_icon"] ?? null), "style", array()));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, twig_trim_filter($context["property"]), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($__label__ = null, $__element__ = null, $__id__ = null, $__titleRow__ = null, $__row_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "element" => $__element__,
            "id" => $__id__,
            "titleRow" => $__titleRow__,
            "row_id" => $__row_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ( !twig_test_empty(($context["row_id"] ?? null))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ( !twig_test_empty(($context["titleRow"] ?? null))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\" ";
                if ( !twig_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 32
                echo ($context["label"] ?? null);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ( !twig_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ( !twig_test_empty(($context["id"] ?? null))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo ($context["element"] ?? null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($__label__ = null, $__link__ = null, $__id__ = null, $__element__ = null, $__titleRow__ = null, $__notAddBr__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "link" => $__link__,
            "id" => $__id__,
            "element" => $__element__,
            "titleRow" => $__titleRow__,
            "notAddBr" => $__notAddBr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ( !twig_test_empty(($context["titleRow"] ?? null))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ( !twig_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "\t\t\t";
            if ((($context["notAddBr"] ?? null) == null)) {
                // line 69
                echo "\t\t\t\t<br/>
\t\t\t";
            }
            // line 71
            echo "\t\t\t<label><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array(($context["link"] ?? null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a> </label>
        </th>
        <td>";
            // line 73
            echo ($context["element"] ?? null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 80
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 83
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"
        ";
                }
                // line 85
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function gettext($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    ";
            $context["form"] = $this;
            // line 91
            echo "
    ";
            // line 92
            echo $context["form"]->getinput("text", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function getpassword($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 96
            echo "    ";
            $context["form"] = $this;
            // line 97
            echo "
    ";
            // line 98
            echo $context["form"]->getinput("password", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 101
    public function getbutton($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "    ";
            $context["form"] = $this;
            // line 103
            echo "
    ";
            // line 104
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 105
                echo "        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
                // line 106
                echo "    ";
            }
            // line 107
            echo "
    ";
            // line 108
            echo $context["form"]->getinput("button", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 111
    public function getcheckbox($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "    ";
            $context["form"] = $this;
            // line 113
            echo "
    ";
            // line 114
            echo $context["form"]->getinput("checkbox", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function getfile($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "    ";
            $context["form"] = $this;
            // line 119
            echo "
    ";
            // line 120
            echo $context["form"]->getinput("file", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function gethidden($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "    ";
            $context["form"] = $this;
            // line 125
            echo "
    ";
            // line 126
            echo $context["form"]->getinput("hidden", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function getradio($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "    ";
            $context["form"] = $this;
            // line 131
            echo "
    ";
            // line 132
            echo $context["form"]->getinput("radio", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function getcolor($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 136
            echo "    ";
            $context["form"] = $this;
            // line 137
            echo "
    ";
            // line 138
            echo $context["form"]->getinput("color", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 141
    public function getsubmit($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 142
            echo "    ";
            $context["form"] = $this;
            // line 143
            echo "
    ";
            // line 144
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 145
                echo "        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
                // line 146
                echo "    ";
            }
            // line 147
            echo "
    ";
            // line 148
            echo $context["form"]->getinput("submit", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function getselect($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 152
            echo "\t<select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 154
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["value"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 159
    public function getselectv($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 162
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["text"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 167
    public function getselectWithElem($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 168
            echo "\t<select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
\t";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 170
                echo "\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "value", array()), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["value"], "title", array())), "html", null, true);
                echo "\"
\t\t\t\t";
                // line 171
                if ((($context["selected"] ?? null) == $this->getAttribute($context["value"], "value", array()))) {
                    echo "selected=\"selected\"";
                }
                // line 172
                echo "\t\t\t\t";
                if (($this->getAttribute($context["value"], "disabled", array()) == 1)) {
                    echo " disabled=\"disabled\"";
                }
                // line 173
                echo "\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
                echo "</option>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t</select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 178
    public function getspan($__name__ = null, $__text__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "text" => $__text__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 179
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 180
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["text"] ?? null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 184
    public function getselected($__actual__ = null, $__expected__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $__actual__,
            "expected" => $__expected__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 185
            echo "    ";
            if ((($context["actual"] ?? null) == ($context["expected"] ?? null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function getlabel($__label__ = null, $__for__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            echo "\t<label for=\"";
            echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 192
    public function geticon($__name__ = null, $__size__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "size" => $__size__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 193
            echo "    <i class=\"fa ";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo " mp-icon-preview\" style=\"font-size:";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "px;\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"></i>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1216 => 193,  1202 => 192,  1170 => 189,  1156 => 188,  1138 => 185,  1125 => 184,  1107 => 180,  1090 => 179,  1076 => 178,  1060 => 175,  1051 => 173,  1046 => 172,  1042 => 171,  1035 => 170,  1031 => 169,  1014 => 168,  999 => 167,  983 => 164,  966 => 162,  962 => 161,  945 => 160,  930 => 159,  914 => 156,  897 => 154,  893 => 153,  876 => 152,  861 => 151,  844 => 148,  841 => 147,  838 => 146,  835 => 145,  833 => 144,  830 => 143,  827 => 142,  813 => 141,  796 => 138,  793 => 137,  790 => 136,  776 => 135,  759 => 132,  756 => 131,  753 => 130,  739 => 129,  722 => 126,  719 => 125,  716 => 124,  702 => 123,  685 => 120,  682 => 119,  679 => 118,  665 => 117,  648 => 114,  645 => 113,  642 => 112,  628 => 111,  611 => 108,  608 => 107,  605 => 106,  602 => 105,  600 => 104,  597 => 103,  594 => 102,  580 => 101,  563 => 98,  560 => 97,  557 => 96,  543 => 95,  526 => 92,  523 => 91,  520 => 90,  506 => 89,  490 => 86,  484 => 85,  476 => 83,  458 => 81,  455 => 80,  451 => 79,  442 => 78,  427 => 77,  409 => 73,  403 => 71,  399 => 69,  396 => 68,  390 => 65,  386 => 64,  375 => 63,  369 => 60,  365 => 59,  362 => 58,  360 => 57,  355 => 54,  352 => 53,  335 => 52,  315 => 47,  311 => 45,  305 => 43,  303 => 42,  300 => 41,  294 => 38,  290 => 37,  279 => 36,  273 => 33,  269 => 32,  260 => 31,  258 => 30,  255 => 29,  251 => 27,  245 => 25,  243 => 24,  240 => 23,  237 => 22,  221 => 21,  193 => 17,  189 => 16,  184 => 15,  182 => 14,  179 => 13,  176 => 12,  174 => 11,  162 => 10,  146 => 7,  135 => 6,  107 => 3,  98 => 2,  84 => 1,  79 => 191,  76 => 187,  73 => 183,  70 => 177,  67 => 166,  64 => 158,  61 => 150,  58 => 140,  55 => 134,  52 => 128,  49 => 122,  46 => 116,  43 => 110,  40 => 100,  37 => 94,  34 => 88,  31 => 76,  28 => 51,  25 => 20,  22 => 9,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@core/form.twig", "C:\\myphp\\PHPTutorial\\WWW\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Core\\views\\form.twig");
    }
}
