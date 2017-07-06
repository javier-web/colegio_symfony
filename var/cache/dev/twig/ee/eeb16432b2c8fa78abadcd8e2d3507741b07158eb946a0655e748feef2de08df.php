<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b47fe2c892026d47628c0b02ffcfb5295d5601f5ca7303c90906caacf263f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8415ed7b0914db9f2ccd62cdfa8e14f94f26d90abb6e41c7cd9c5b10ed570cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8415ed7b0914db9f2ccd62cdfa8e14f94f26d90abb6e41c7cd9c5b10ed570cf1->enter($__internal_8415ed7b0914db9f2ccd62cdfa8e14f94f26d90abb6e41c7cd9c5b10ed570cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c1005cab7de6b4ed11cbfb283db3ce555e6bc775b5f11ce67eb8e39e23f0b65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1005cab7de6b4ed11cbfb283db3ce555e6bc775b5f11ce67eb8e39e23f0b65b->enter($__internal_c1005cab7de6b4ed11cbfb283db3ce555e6bc775b5f11ce67eb8e39e23f0b65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8415ed7b0914db9f2ccd62cdfa8e14f94f26d90abb6e41c7cd9c5b10ed570cf1->leave($__internal_8415ed7b0914db9f2ccd62cdfa8e14f94f26d90abb6e41c7cd9c5b10ed570cf1_prof);

        
        $__internal_c1005cab7de6b4ed11cbfb283db3ce555e6bc775b5f11ce67eb8e39e23f0b65b->leave($__internal_c1005cab7de6b4ed11cbfb283db3ce555e6bc775b5f11ce67eb8e39e23f0b65b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c95fe3ac33ec7524f5e689ab98d86d5b203be051f73b05afb3f56e0035cbc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c95fe3ac33ec7524f5e689ab98d86d5b203be051f73b05afb3f56e0035cbc6d->enter($__internal_4c95fe3ac33ec7524f5e689ab98d86d5b203be051f73b05afb3f56e0035cbc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cdcad9b0ac1970dea13675e8f2e95e5d31cbf36cb15b2e0621c220e30bc552b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcad9b0ac1970dea13675e8f2e95e5d31cbf36cb15b2e0621c220e30bc552b7->enter($__internal_cdcad9b0ac1970dea13675e8f2e95e5d31cbf36cb15b2e0621c220e30bc552b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cdcad9b0ac1970dea13675e8f2e95e5d31cbf36cb15b2e0621c220e30bc552b7->leave($__internal_cdcad9b0ac1970dea13675e8f2e95e5d31cbf36cb15b2e0621c220e30bc552b7_prof);

        
        $__internal_4c95fe3ac33ec7524f5e689ab98d86d5b203be051f73b05afb3f56e0035cbc6d->leave($__internal_4c95fe3ac33ec7524f5e689ab98d86d5b203be051f73b05afb3f56e0035cbc6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
