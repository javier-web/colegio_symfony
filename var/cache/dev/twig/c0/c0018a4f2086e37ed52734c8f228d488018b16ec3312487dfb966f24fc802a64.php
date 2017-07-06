<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3e8aa2a8526e3f074d9a1dcef3cf2ff715b05e24568d1503a5d1d06f41a5edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40942b2b550e6e84ff7ecdcec961b8207e0ae595d288f0af9eba10cc72fb0f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40942b2b550e6e84ff7ecdcec961b8207e0ae595d288f0af9eba10cc72fb0f24->enter($__internal_40942b2b550e6e84ff7ecdcec961b8207e0ae595d288f0af9eba10cc72fb0f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_27df8c0ab814f8bdbbc7f13ff51c6050ef71811135bba2e6252b69ebc45c45bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27df8c0ab814f8bdbbc7f13ff51c6050ef71811135bba2e6252b69ebc45c45bb->enter($__internal_27df8c0ab814f8bdbbc7f13ff51c6050ef71811135bba2e6252b69ebc45c45bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_40942b2b550e6e84ff7ecdcec961b8207e0ae595d288f0af9eba10cc72fb0f24->leave($__internal_40942b2b550e6e84ff7ecdcec961b8207e0ae595d288f0af9eba10cc72fb0f24_prof);

        
        $__internal_27df8c0ab814f8bdbbc7f13ff51c6050ef71811135bba2e6252b69ebc45c45bb->leave($__internal_27df8c0ab814f8bdbbc7f13ff51c6050ef71811135bba2e6252b69ebc45c45bb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7931068333ffcdf8402e57a4cd826f629f6315a71745ecabd7b92fc0022d1f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931068333ffcdf8402e57a4cd826f629f6315a71745ecabd7b92fc0022d1f52->enter($__internal_7931068333ffcdf8402e57a4cd826f629f6315a71745ecabd7b92fc0022d1f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e6708e9f2269e90545010588b99292431ce021d67fbc87567356f6a31218f4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6708e9f2269e90545010588b99292431ce021d67fbc87567356f6a31218f4e3->enter($__internal_e6708e9f2269e90545010588b99292431ce021d67fbc87567356f6a31218f4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e6708e9f2269e90545010588b99292431ce021d67fbc87567356f6a31218f4e3->leave($__internal_e6708e9f2269e90545010588b99292431ce021d67fbc87567356f6a31218f4e3_prof);

        
        $__internal_7931068333ffcdf8402e57a4cd826f629f6315a71745ecabd7b92fc0022d1f52->leave($__internal_7931068333ffcdf8402e57a4cd826f629f6315a71745ecabd7b92fc0022d1f52_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dc7ef7c42ad887f84447a97f88a450111053e0e5850774ccc2e415b91c5b372d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7ef7c42ad887f84447a97f88a450111053e0e5850774ccc2e415b91c5b372d->enter($__internal_dc7ef7c42ad887f84447a97f88a450111053e0e5850774ccc2e415b91c5b372d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_649faef14971667c342eeac9b66bebaec8b6ea18e25b59ba8e96ff7f45564b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649faef14971667c342eeac9b66bebaec8b6ea18e25b59ba8e96ff7f45564b2b->enter($__internal_649faef14971667c342eeac9b66bebaec8b6ea18e25b59ba8e96ff7f45564b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_649faef14971667c342eeac9b66bebaec8b6ea18e25b59ba8e96ff7f45564b2b->leave($__internal_649faef14971667c342eeac9b66bebaec8b6ea18e25b59ba8e96ff7f45564b2b_prof);

        
        $__internal_dc7ef7c42ad887f84447a97f88a450111053e0e5850774ccc2e415b91c5b372d->leave($__internal_dc7ef7c42ad887f84447a97f88a450111053e0e5850774ccc2e415b91c5b372d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_636a9da27fed1aabeb5a8e25c8f6c852881a9324679a095b3d950779836faff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636a9da27fed1aabeb5a8e25c8f6c852881a9324679a095b3d950779836faff6->enter($__internal_636a9da27fed1aabeb5a8e25c8f6c852881a9324679a095b3d950779836faff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9f7c7ae8d67a8a2499554ee1367dbe8e4785da1cc330234fcec978881b64a2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7c7ae8d67a8a2499554ee1367dbe8e4785da1cc330234fcec978881b64a2bc->enter($__internal_9f7c7ae8d67a8a2499554ee1367dbe8e4785da1cc330234fcec978881b64a2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9f7c7ae8d67a8a2499554ee1367dbe8e4785da1cc330234fcec978881b64a2bc->leave($__internal_9f7c7ae8d67a8a2499554ee1367dbe8e4785da1cc330234fcec978881b64a2bc_prof);

        
        $__internal_636a9da27fed1aabeb5a8e25c8f6c852881a9324679a095b3d950779836faff6->leave($__internal_636a9da27fed1aabeb5a8e25c8f6c852881a9324679a095b3d950779836faff6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b0dacbc37c4b84ae868807d223399d97e9fd60bdf1d01514dfed47151a0ca707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dacbc37c4b84ae868807d223399d97e9fd60bdf1d01514dfed47151a0ca707->enter($__internal_b0dacbc37c4b84ae868807d223399d97e9fd60bdf1d01514dfed47151a0ca707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_28c5a553073f43926b736208ab41a27e39200d81a495f70cbc5071db708bd2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c5a553073f43926b736208ab41a27e39200d81a495f70cbc5071db708bd2b7->enter($__internal_28c5a553073f43926b736208ab41a27e39200d81a495f70cbc5071db708bd2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_b7c88d8879b9b865e3d6d1b897f856b779a89206fb28464852948a7732e22730 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_57abf2a671fadb47ef9bdcda62417d4b5a98a5910c6c834faed4f2f04ee8ea4c = "{{") && ('' === $__internal_57abf2a671fadb47ef9bdcda62417d4b5a98a5910c6c834faed4f2f04ee8ea4c || 0 === strpos($__internal_b7c88d8879b9b865e3d6d1b897f856b779a89206fb28464852948a7732e22730, $__internal_57abf2a671fadb47ef9bdcda62417d4b5a98a5910c6c834faed4f2f04ee8ea4c)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_28c5a553073f43926b736208ab41a27e39200d81a495f70cbc5071db708bd2b7->leave($__internal_28c5a553073f43926b736208ab41a27e39200d81a495f70cbc5071db708bd2b7_prof);

        
        $__internal_b0dacbc37c4b84ae868807d223399d97e9fd60bdf1d01514dfed47151a0ca707->leave($__internal_b0dacbc37c4b84ae868807d223399d97e9fd60bdf1d01514dfed47151a0ca707_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9af62d1cd57a614320670a4f0ca16e45e36aac0cae262fa1dfc3243dfebaaf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af62d1cd57a614320670a4f0ca16e45e36aac0cae262fa1dfc3243dfebaaf1d->enter($__internal_9af62d1cd57a614320670a4f0ca16e45e36aac0cae262fa1dfc3243dfebaaf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0187cfd818c0bb8358d59bc68da9379ab924ee09b77cc2fa4e4b0f34a49833a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0187cfd818c0bb8358d59bc68da9379ab924ee09b77cc2fa4e4b0f34a49833a3->enter($__internal_0187cfd818c0bb8358d59bc68da9379ab924ee09b77cc2fa4e4b0f34a49833a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0187cfd818c0bb8358d59bc68da9379ab924ee09b77cc2fa4e4b0f34a49833a3->leave($__internal_0187cfd818c0bb8358d59bc68da9379ab924ee09b77cc2fa4e4b0f34a49833a3_prof);

        
        $__internal_9af62d1cd57a614320670a4f0ca16e45e36aac0cae262fa1dfc3243dfebaaf1d->leave($__internal_9af62d1cd57a614320670a4f0ca16e45e36aac0cae262fa1dfc3243dfebaaf1d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e702b353796940b32466d25c0afd4745f91f2f347c5b2b5a3b096701f7b30747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e702b353796940b32466d25c0afd4745f91f2f347c5b2b5a3b096701f7b30747->enter($__internal_e702b353796940b32466d25c0afd4745f91f2f347c5b2b5a3b096701f7b30747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_06eac1700b214759b088e9706e8a32b01cb7051407322440f8bf06696be8514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06eac1700b214759b088e9706e8a32b01cb7051407322440f8bf06696be8514b->enter($__internal_06eac1700b214759b088e9706e8a32b01cb7051407322440f8bf06696be8514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_06eac1700b214759b088e9706e8a32b01cb7051407322440f8bf06696be8514b->leave($__internal_06eac1700b214759b088e9706e8a32b01cb7051407322440f8bf06696be8514b_prof);

        
        $__internal_e702b353796940b32466d25c0afd4745f91f2f347c5b2b5a3b096701f7b30747->leave($__internal_e702b353796940b32466d25c0afd4745f91f2f347c5b2b5a3b096701f7b30747_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_10cc9302ba66d03efa99548454f33cc0c9a5e49edd78ad890bf062f5cae21651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cc9302ba66d03efa99548454f33cc0c9a5e49edd78ad890bf062f5cae21651->enter($__internal_10cc9302ba66d03efa99548454f33cc0c9a5e49edd78ad890bf062f5cae21651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5e4dacf5fc7c65e0264a6a1cea8e34e7966405b071b68bf0621673bccb01494a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4dacf5fc7c65e0264a6a1cea8e34e7966405b071b68bf0621673bccb01494a->enter($__internal_5e4dacf5fc7c65e0264a6a1cea8e34e7966405b071b68bf0621673bccb01494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_5e4dacf5fc7c65e0264a6a1cea8e34e7966405b071b68bf0621673bccb01494a->leave($__internal_5e4dacf5fc7c65e0264a6a1cea8e34e7966405b071b68bf0621673bccb01494a_prof);

        
        $__internal_10cc9302ba66d03efa99548454f33cc0c9a5e49edd78ad890bf062f5cae21651->leave($__internal_10cc9302ba66d03efa99548454f33cc0c9a5e49edd78ad890bf062f5cae21651_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d0657344b5523bf686dadd1e13e781cd950618d6920f379497ae16378ce41c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0657344b5523bf686dadd1e13e781cd950618d6920f379497ae16378ce41c87->enter($__internal_d0657344b5523bf686dadd1e13e781cd950618d6920f379497ae16378ce41c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4b123d453b35c72bfffa8593490d6f3c431ee0956cac748c64d460e50e8158a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b123d453b35c72bfffa8593490d6f3c431ee0956cac748c64d460e50e8158a9->enter($__internal_4b123d453b35c72bfffa8593490d6f3c431ee0956cac748c64d460e50e8158a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_4b123d453b35c72bfffa8593490d6f3c431ee0956cac748c64d460e50e8158a9->leave($__internal_4b123d453b35c72bfffa8593490d6f3c431ee0956cac748c64d460e50e8158a9_prof);

        
        $__internal_d0657344b5523bf686dadd1e13e781cd950618d6920f379497ae16378ce41c87->leave($__internal_d0657344b5523bf686dadd1e13e781cd950618d6920f379497ae16378ce41c87_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e28be609252803597b58a9aafc53c9ccfb2f5b1ea14584e4c2aa4b67eb0c037c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28be609252803597b58a9aafc53c9ccfb2f5b1ea14584e4c2aa4b67eb0c037c->enter($__internal_e28be609252803597b58a9aafc53c9ccfb2f5b1ea14584e4c2aa4b67eb0c037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_21b8d145ad69b91b4c27fe2a33b09609e817ff44b444e85040e09963c680727c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b8d145ad69b91b4c27fe2a33b09609e817ff44b444e85040e09963c680727c->enter($__internal_21b8d145ad69b91b4c27fe2a33b09609e817ff44b444e85040e09963c680727c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_21b8d145ad69b91b4c27fe2a33b09609e817ff44b444e85040e09963c680727c->leave($__internal_21b8d145ad69b91b4c27fe2a33b09609e817ff44b444e85040e09963c680727c_prof);

        
        $__internal_e28be609252803597b58a9aafc53c9ccfb2f5b1ea14584e4c2aa4b67eb0c037c->leave($__internal_e28be609252803597b58a9aafc53c9ccfb2f5b1ea14584e4c2aa4b67eb0c037c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3db248f439759ab5cfd9e447d6c0fe3d30396fad7c7625da118719f691c3be6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db248f439759ab5cfd9e447d6c0fe3d30396fad7c7625da118719f691c3be6a->enter($__internal_3db248f439759ab5cfd9e447d6c0fe3d30396fad7c7625da118719f691c3be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_06df02774c2d8739eed44c84ee13b26bf0ae9523122bf128fd1ef081c6c04127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06df02774c2d8739eed44c84ee13b26bf0ae9523122bf128fd1ef081c6c04127->enter($__internal_06df02774c2d8739eed44c84ee13b26bf0ae9523122bf128fd1ef081c6c04127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_06df02774c2d8739eed44c84ee13b26bf0ae9523122bf128fd1ef081c6c04127->leave($__internal_06df02774c2d8739eed44c84ee13b26bf0ae9523122bf128fd1ef081c6c04127_prof);

        
        $__internal_3db248f439759ab5cfd9e447d6c0fe3d30396fad7c7625da118719f691c3be6a->leave($__internal_3db248f439759ab5cfd9e447d6c0fe3d30396fad7c7625da118719f691c3be6a_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_189befa67f3ff864d1c1a65fbe353fa0547c9ecdc8ae79d6dd038f8e80f6911a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189befa67f3ff864d1c1a65fbe353fa0547c9ecdc8ae79d6dd038f8e80f6911a->enter($__internal_189befa67f3ff864d1c1a65fbe353fa0547c9ecdc8ae79d6dd038f8e80f6911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_64ad8b88bc75ec5a82d5dfb210b2968a929c7d90a5182c10be26c73da32d33b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ad8b88bc75ec5a82d5dfb210b2968a929c7d90a5182c10be26c73da32d33b2->enter($__internal_64ad8b88bc75ec5a82d5dfb210b2968a929c7d90a5182c10be26c73da32d33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_64ad8b88bc75ec5a82d5dfb210b2968a929c7d90a5182c10be26c73da32d33b2->leave($__internal_64ad8b88bc75ec5a82d5dfb210b2968a929c7d90a5182c10be26c73da32d33b2_prof);

        
        $__internal_189befa67f3ff864d1c1a65fbe353fa0547c9ecdc8ae79d6dd038f8e80f6911a->leave($__internal_189befa67f3ff864d1c1a65fbe353fa0547c9ecdc8ae79d6dd038f8e80f6911a_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e8a5cd393981f5d98710162bb4b49e93eaeba1f10d5b090e792635e57230c9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a5cd393981f5d98710162bb4b49e93eaeba1f10d5b090e792635e57230c9ff->enter($__internal_e8a5cd393981f5d98710162bb4b49e93eaeba1f10d5b090e792635e57230c9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5e3d5c6c68938ba764e322ba2a76483868f9a30cb9481be72b852ff7f26d03bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3d5c6c68938ba764e322ba2a76483868f9a30cb9481be72b852ff7f26d03bb->enter($__internal_5e3d5c6c68938ba764e322ba2a76483868f9a30cb9481be72b852ff7f26d03bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_5e3d5c6c68938ba764e322ba2a76483868f9a30cb9481be72b852ff7f26d03bb->leave($__internal_5e3d5c6c68938ba764e322ba2a76483868f9a30cb9481be72b852ff7f26d03bb_prof);

        
        $__internal_e8a5cd393981f5d98710162bb4b49e93eaeba1f10d5b090e792635e57230c9ff->leave($__internal_e8a5cd393981f5d98710162bb4b49e93eaeba1f10d5b090e792635e57230c9ff_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0c9e93d68ebc2dc3051c404560abc7bcf15f49d63dcfdf71362ffb2798785100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9e93d68ebc2dc3051c404560abc7bcf15f49d63dcfdf71362ffb2798785100->enter($__internal_0c9e93d68ebc2dc3051c404560abc7bcf15f49d63dcfdf71362ffb2798785100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bd4927b429fc147f41b641ae5259e893a2dbe7d58904f8db9a646913fc298eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4927b429fc147f41b641ae5259e893a2dbe7d58904f8db9a646913fc298eda->enter($__internal_bd4927b429fc147f41b641ae5259e893a2dbe7d58904f8db9a646913fc298eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_bd4927b429fc147f41b641ae5259e893a2dbe7d58904f8db9a646913fc298eda->leave($__internal_bd4927b429fc147f41b641ae5259e893a2dbe7d58904f8db9a646913fc298eda_prof);

        
        $__internal_0c9e93d68ebc2dc3051c404560abc7bcf15f49d63dcfdf71362ffb2798785100->leave($__internal_0c9e93d68ebc2dc3051c404560abc7bcf15f49d63dcfdf71362ffb2798785100_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b2f7eedeba6f01f17b41ace5802829d910b694fbd56e5ea425ab9d02b771362d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f7eedeba6f01f17b41ace5802829d910b694fbd56e5ea425ab9d02b771362d->enter($__internal_b2f7eedeba6f01f17b41ace5802829d910b694fbd56e5ea425ab9d02b771362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3c4bb2dd579c2ec2a4697bbfc88974686784dd862a1c3643c6289831263ec1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4bb2dd579c2ec2a4697bbfc88974686784dd862a1c3643c6289831263ec1d6->enter($__internal_3c4bb2dd579c2ec2a4697bbfc88974686784dd862a1c3643c6289831263ec1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3c4bb2dd579c2ec2a4697bbfc88974686784dd862a1c3643c6289831263ec1d6->leave($__internal_3c4bb2dd579c2ec2a4697bbfc88974686784dd862a1c3643c6289831263ec1d6_prof);

        
        $__internal_b2f7eedeba6f01f17b41ace5802829d910b694fbd56e5ea425ab9d02b771362d->leave($__internal_b2f7eedeba6f01f17b41ace5802829d910b694fbd56e5ea425ab9d02b771362d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7579114350c279e44362b652aefc4d6e416fe49fa0ac62739d7cb330aeb6d989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7579114350c279e44362b652aefc4d6e416fe49fa0ac62739d7cb330aeb6d989->enter($__internal_7579114350c279e44362b652aefc4d6e416fe49fa0ac62739d7cb330aeb6d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c442236154e36a597c9494ebac0771d9b3fe6475e7f8559f9f943aae6517e3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c442236154e36a597c9494ebac0771d9b3fe6475e7f8559f9f943aae6517e3fd->enter($__internal_c442236154e36a597c9494ebac0771d9b3fe6475e7f8559f9f943aae6517e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c442236154e36a597c9494ebac0771d9b3fe6475e7f8559f9f943aae6517e3fd->leave($__internal_c442236154e36a597c9494ebac0771d9b3fe6475e7f8559f9f943aae6517e3fd_prof);

        
        $__internal_7579114350c279e44362b652aefc4d6e416fe49fa0ac62739d7cb330aeb6d989->leave($__internal_7579114350c279e44362b652aefc4d6e416fe49fa0ac62739d7cb330aeb6d989_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e3f2eae3ec62220d7ad52d30ca261aa3c6250f11ca3212bbfc8bb1f7a18b7bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f2eae3ec62220d7ad52d30ca261aa3c6250f11ca3212bbfc8bb1f7a18b7bda->enter($__internal_e3f2eae3ec62220d7ad52d30ca261aa3c6250f11ca3212bbfc8bb1f7a18b7bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_559c0b354c442b0677c785c86730a1cc47cb524d8ff8dc311cd12af500f754e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559c0b354c442b0677c785c86730a1cc47cb524d8ff8dc311cd12af500f754e5->enter($__internal_559c0b354c442b0677c785c86730a1cc47cb524d8ff8dc311cd12af500f754e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_559c0b354c442b0677c785c86730a1cc47cb524d8ff8dc311cd12af500f754e5->leave($__internal_559c0b354c442b0677c785c86730a1cc47cb524d8ff8dc311cd12af500f754e5_prof);

        
        $__internal_e3f2eae3ec62220d7ad52d30ca261aa3c6250f11ca3212bbfc8bb1f7a18b7bda->leave($__internal_e3f2eae3ec62220d7ad52d30ca261aa3c6250f11ca3212bbfc8bb1f7a18b7bda_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e38aeda933a84ee01b3ead4fb6bff1b275f7c83ef3692153d967ad1b3e30ee05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38aeda933a84ee01b3ead4fb6bff1b275f7c83ef3692153d967ad1b3e30ee05->enter($__internal_e38aeda933a84ee01b3ead4fb6bff1b275f7c83ef3692153d967ad1b3e30ee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_41626b30df886f33c908884bdf16ce3158b50755170f1aad4643de2a50b0823f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41626b30df886f33c908884bdf16ce3158b50755170f1aad4643de2a50b0823f->enter($__internal_41626b30df886f33c908884bdf16ce3158b50755170f1aad4643de2a50b0823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_41626b30df886f33c908884bdf16ce3158b50755170f1aad4643de2a50b0823f->leave($__internal_41626b30df886f33c908884bdf16ce3158b50755170f1aad4643de2a50b0823f_prof);

        
        $__internal_e38aeda933a84ee01b3ead4fb6bff1b275f7c83ef3692153d967ad1b3e30ee05->leave($__internal_e38aeda933a84ee01b3ead4fb6bff1b275f7c83ef3692153d967ad1b3e30ee05_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ce4d6831b16bdcb62d04ae94a9ea5682a8841927fe8e85bebca7ee8645a4280b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4d6831b16bdcb62d04ae94a9ea5682a8841927fe8e85bebca7ee8645a4280b->enter($__internal_ce4d6831b16bdcb62d04ae94a9ea5682a8841927fe8e85bebca7ee8645a4280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5d3f56a9b690275ffd3b9c7053cbfd34cd631a3bbe2eac6f3a9cf21a84936289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3f56a9b690275ffd3b9c7053cbfd34cd631a3bbe2eac6f3a9cf21a84936289->enter($__internal_5d3f56a9b690275ffd3b9c7053cbfd34cd631a3bbe2eac6f3a9cf21a84936289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_5d3f56a9b690275ffd3b9c7053cbfd34cd631a3bbe2eac6f3a9cf21a84936289->leave($__internal_5d3f56a9b690275ffd3b9c7053cbfd34cd631a3bbe2eac6f3a9cf21a84936289_prof);

        
        $__internal_ce4d6831b16bdcb62d04ae94a9ea5682a8841927fe8e85bebca7ee8645a4280b->leave($__internal_ce4d6831b16bdcb62d04ae94a9ea5682a8841927fe8e85bebca7ee8645a4280b_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_48b4820052d888479878657fea33c1656e1851ee066269becb205dbcfe0f918d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b4820052d888479878657fea33c1656e1851ee066269becb205dbcfe0f918d->enter($__internal_48b4820052d888479878657fea33c1656e1851ee066269becb205dbcfe0f918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d37d93860962c920792955d03b0cb14ec8bddf5b63677f0d50403a85539c7a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37d93860962c920792955d03b0cb14ec8bddf5b63677f0d50403a85539c7a60->enter($__internal_d37d93860962c920792955d03b0cb14ec8bddf5b63677f0d50403a85539c7a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_d37d93860962c920792955d03b0cb14ec8bddf5b63677f0d50403a85539c7a60->leave($__internal_d37d93860962c920792955d03b0cb14ec8bddf5b63677f0d50403a85539c7a60_prof);

        
        $__internal_48b4820052d888479878657fea33c1656e1851ee066269becb205dbcfe0f918d->leave($__internal_48b4820052d888479878657fea33c1656e1851ee066269becb205dbcfe0f918d_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_37a23dd8e18fd0ba8d75836a7c645b103dc219836c49d404978ae44d88212506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a23dd8e18fd0ba8d75836a7c645b103dc219836c49d404978ae44d88212506->enter($__internal_37a23dd8e18fd0ba8d75836a7c645b103dc219836c49d404978ae44d88212506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_308d2193e788f3cec68a6cb52eb1addf5ab4eb3a268adf311ea7be1765d4249e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308d2193e788f3cec68a6cb52eb1addf5ab4eb3a268adf311ea7be1765d4249e->enter($__internal_308d2193e788f3cec68a6cb52eb1addf5ab4eb3a268adf311ea7be1765d4249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_308d2193e788f3cec68a6cb52eb1addf5ab4eb3a268adf311ea7be1765d4249e->leave($__internal_308d2193e788f3cec68a6cb52eb1addf5ab4eb3a268adf311ea7be1765d4249e_prof);

        
        $__internal_37a23dd8e18fd0ba8d75836a7c645b103dc219836c49d404978ae44d88212506->leave($__internal_37a23dd8e18fd0ba8d75836a7c645b103dc219836c49d404978ae44d88212506_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c4eabec1739a3e21719743c53a5360416cbcb1f613a5adfacbf9e36904c2cc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4eabec1739a3e21719743c53a5360416cbcb1f613a5adfacbf9e36904c2cc06->enter($__internal_c4eabec1739a3e21719743c53a5360416cbcb1f613a5adfacbf9e36904c2cc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_893e9fb28eb0935f3c8f1dc78ab43fd9d87fa541ca63cb724531555365174802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893e9fb28eb0935f3c8f1dc78ab43fd9d87fa541ca63cb724531555365174802->enter($__internal_893e9fb28eb0935f3c8f1dc78ab43fd9d87fa541ca63cb724531555365174802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_893e9fb28eb0935f3c8f1dc78ab43fd9d87fa541ca63cb724531555365174802->leave($__internal_893e9fb28eb0935f3c8f1dc78ab43fd9d87fa541ca63cb724531555365174802_prof);

        
        $__internal_c4eabec1739a3e21719743c53a5360416cbcb1f613a5adfacbf9e36904c2cc06->leave($__internal_c4eabec1739a3e21719743c53a5360416cbcb1f613a5adfacbf9e36904c2cc06_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_87f74548712b50af17a34fa8a8791ac1201fc17c9e5e251ebeb6e2cb0700e5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f74548712b50af17a34fa8a8791ac1201fc17c9e5e251ebeb6e2cb0700e5bb->enter($__internal_87f74548712b50af17a34fa8a8791ac1201fc17c9e5e251ebeb6e2cb0700e5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d3e7590d12c135c1eb24a41f7410a3127eef7f80f7ac3f61f5c9d8eb5781a702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e7590d12c135c1eb24a41f7410a3127eef7f80f7ac3f61f5c9d8eb5781a702->enter($__internal_d3e7590d12c135c1eb24a41f7410a3127eef7f80f7ac3f61f5c9d8eb5781a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d3e7590d12c135c1eb24a41f7410a3127eef7f80f7ac3f61f5c9d8eb5781a702->leave($__internal_d3e7590d12c135c1eb24a41f7410a3127eef7f80f7ac3f61f5c9d8eb5781a702_prof);

        
        $__internal_87f74548712b50af17a34fa8a8791ac1201fc17c9e5e251ebeb6e2cb0700e5bb->leave($__internal_87f74548712b50af17a34fa8a8791ac1201fc17c9e5e251ebeb6e2cb0700e5bb_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c7ad0096520c2af53cd59cc24db7d90358ee8cbdb155d39e17ea43752fae962a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ad0096520c2af53cd59cc24db7d90358ee8cbdb155d39e17ea43752fae962a->enter($__internal_c7ad0096520c2af53cd59cc24db7d90358ee8cbdb155d39e17ea43752fae962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0b3e7fe39d399420ec644943b7f8ef9a77779c9e951f8c5b18d3fdd57361b896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3e7fe39d399420ec644943b7f8ef9a77779c9e951f8c5b18d3fdd57361b896->enter($__internal_0b3e7fe39d399420ec644943b7f8ef9a77779c9e951f8c5b18d3fdd57361b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b3e7fe39d399420ec644943b7f8ef9a77779c9e951f8c5b18d3fdd57361b896->leave($__internal_0b3e7fe39d399420ec644943b7f8ef9a77779c9e951f8c5b18d3fdd57361b896_prof);

        
        $__internal_c7ad0096520c2af53cd59cc24db7d90358ee8cbdb155d39e17ea43752fae962a->leave($__internal_c7ad0096520c2af53cd59cc24db7d90358ee8cbdb155d39e17ea43752fae962a_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d26c160904731391091ba269f1eed76d9e9fbb192e062999341881b8de6db249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26c160904731391091ba269f1eed76d9e9fbb192e062999341881b8de6db249->enter($__internal_d26c160904731391091ba269f1eed76d9e9fbb192e062999341881b8de6db249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_65f39b505aba2cf56c19b3f37d24a9a6c8cffea18041625715a3afa44505efdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f39b505aba2cf56c19b3f37d24a9a6c8cffea18041625715a3afa44505efdb->enter($__internal_65f39b505aba2cf56c19b3f37d24a9a6c8cffea18041625715a3afa44505efdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_65f39b505aba2cf56c19b3f37d24a9a6c8cffea18041625715a3afa44505efdb->leave($__internal_65f39b505aba2cf56c19b3f37d24a9a6c8cffea18041625715a3afa44505efdb_prof);

        
        $__internal_d26c160904731391091ba269f1eed76d9e9fbb192e062999341881b8de6db249->leave($__internal_d26c160904731391091ba269f1eed76d9e9fbb192e062999341881b8de6db249_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c2df0f9660db02784b74221405e749d41092044b39776ec11f0d26b61fde0cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2df0f9660db02784b74221405e749d41092044b39776ec11f0d26b61fde0cc2->enter($__internal_c2df0f9660db02784b74221405e749d41092044b39776ec11f0d26b61fde0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ec7a08b6c7e444991379b07cde02381a52546cb7a948f1c26c7d77144c087ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7a08b6c7e444991379b07cde02381a52546cb7a948f1c26c7d77144c087ab1->enter($__internal_ec7a08b6c7e444991379b07cde02381a52546cb7a948f1c26c7d77144c087ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_ec7a08b6c7e444991379b07cde02381a52546cb7a948f1c26c7d77144c087ab1->leave($__internal_ec7a08b6c7e444991379b07cde02381a52546cb7a948f1c26c7d77144c087ab1_prof);

        
        $__internal_c2df0f9660db02784b74221405e749d41092044b39776ec11f0d26b61fde0cc2->leave($__internal_c2df0f9660db02784b74221405e749d41092044b39776ec11f0d26b61fde0cc2_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b0947dd1241056cf908c0b750779baa82792add4396a2726a61f878609eb6c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0947dd1241056cf908c0b750779baa82792add4396a2726a61f878609eb6c82->enter($__internal_b0947dd1241056cf908c0b750779baa82792add4396a2726a61f878609eb6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2563634cdbe6fc79bc420db7effcaab011e276eebbd693f35fb7dfb0f7c3717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2563634cdbe6fc79bc420db7effcaab011e276eebbd693f35fb7dfb0f7c3717f->enter($__internal_2563634cdbe6fc79bc420db7effcaab011e276eebbd693f35fb7dfb0f7c3717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_2563634cdbe6fc79bc420db7effcaab011e276eebbd693f35fb7dfb0f7c3717f->leave($__internal_2563634cdbe6fc79bc420db7effcaab011e276eebbd693f35fb7dfb0f7c3717f_prof);

        
        $__internal_b0947dd1241056cf908c0b750779baa82792add4396a2726a61f878609eb6c82->leave($__internal_b0947dd1241056cf908c0b750779baa82792add4396a2726a61f878609eb6c82_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8b43bf6a62eeede0add1344624c867c6f3727b150596a45d63e1cfdbe1791947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b43bf6a62eeede0add1344624c867c6f3727b150596a45d63e1cfdbe1791947->enter($__internal_8b43bf6a62eeede0add1344624c867c6f3727b150596a45d63e1cfdbe1791947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8eacef169604810d0283230396578f6154eac7c7d50157d923f1f6cfc3889eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eacef169604810d0283230396578f6154eac7c7d50157d923f1f6cfc3889eed->enter($__internal_8eacef169604810d0283230396578f6154eac7c7d50157d923f1f6cfc3889eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_8eacef169604810d0283230396578f6154eac7c7d50157d923f1f6cfc3889eed->leave($__internal_8eacef169604810d0283230396578f6154eac7c7d50157d923f1f6cfc3889eed_prof);

        
        $__internal_8b43bf6a62eeede0add1344624c867c6f3727b150596a45d63e1cfdbe1791947->leave($__internal_8b43bf6a62eeede0add1344624c867c6f3727b150596a45d63e1cfdbe1791947_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
