<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68539bb3ede652311aa1fb38b7eb17aa44c36da1293268766d075c723103d142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68539bb3ede652311aa1fb38b7eb17aa44c36da1293268766d075c723103d142->enter($__internal_68539bb3ede652311aa1fb38b7eb17aa44c36da1293268766d075c723103d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5e18aedb2584feaf86300032319b8a8352ae9e08a264ec7c10f1bb8da5856beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e18aedb2584feaf86300032319b8a8352ae9e08a264ec7c10f1bb8da5856beb->enter($__internal_5e18aedb2584feaf86300032319b8a8352ae9e08a264ec7c10f1bb8da5856beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68539bb3ede652311aa1fb38b7eb17aa44c36da1293268766d075c723103d142->leave($__internal_68539bb3ede652311aa1fb38b7eb17aa44c36da1293268766d075c723103d142_prof);

        
        $__internal_5e18aedb2584feaf86300032319b8a8352ae9e08a264ec7c10f1bb8da5856beb->leave($__internal_5e18aedb2584feaf86300032319b8a8352ae9e08a264ec7c10f1bb8da5856beb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcd2289af92d4a1cf4231cff57ed66f8ea71d01ad773ff0524d4624d51e3bbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd2289af92d4a1cf4231cff57ed66f8ea71d01ad773ff0524d4624d51e3bbff->enter($__internal_bcd2289af92d4a1cf4231cff57ed66f8ea71d01ad773ff0524d4624d51e3bbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c3fe674cc09c6d195a479e02adb6bc1f765d14821a02da7f5a5944ba262fb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3fe674cc09c6d195a479e02adb6bc1f765d14821a02da7f5a5944ba262fb0b->enter($__internal_6c3fe674cc09c6d195a479e02adb6bc1f765d14821a02da7f5a5944ba262fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c3fe674cc09c6d195a479e02adb6bc1f765d14821a02da7f5a5944ba262fb0b->leave($__internal_6c3fe674cc09c6d195a479e02adb6bc1f765d14821a02da7f5a5944ba262fb0b_prof);

        
        $__internal_bcd2289af92d4a1cf4231cff57ed66f8ea71d01ad773ff0524d4624d51e3bbff->leave($__internal_bcd2289af92d4a1cf4231cff57ed66f8ea71d01ad773ff0524d4624d51e3bbff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4010f1cddf3e367e738ff54ec9f3fafcaeb42072230ccbaccc325b355da37ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4010f1cddf3e367e738ff54ec9f3fafcaeb42072230ccbaccc325b355da37ea5->enter($__internal_4010f1cddf3e367e738ff54ec9f3fafcaeb42072230ccbaccc325b355da37ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcd1f0ca4ba185d3edad70aa799b00280e4d1456b78ef4ed803e77173ad66b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd1f0ca4ba185d3edad70aa799b00280e4d1456b78ef4ed803e77173ad66b5a->enter($__internal_dcd1f0ca4ba185d3edad70aa799b00280e4d1456b78ef4ed803e77173ad66b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dcd1f0ca4ba185d3edad70aa799b00280e4d1456b78ef4ed803e77173ad66b5a->leave($__internal_dcd1f0ca4ba185d3edad70aa799b00280e4d1456b78ef4ed803e77173ad66b5a_prof);

        
        $__internal_4010f1cddf3e367e738ff54ec9f3fafcaeb42072230ccbaccc325b355da37ea5->leave($__internal_4010f1cddf3e367e738ff54ec9f3fafcaeb42072230ccbaccc325b355da37ea5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a7c2ba6142d5a36e2408cd559db360e06ae62b54352832dfd9081fbcde24043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7c2ba6142d5a36e2408cd559db360e06ae62b54352832dfd9081fbcde24043->enter($__internal_0a7c2ba6142d5a36e2408cd559db360e06ae62b54352832dfd9081fbcde24043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0a4b0a46431a210c58bb43c2f8fbd9f47d3c9f24b8ea1a64373f54c6eb6fa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a4b0a46431a210c58bb43c2f8fbd9f47d3c9f24b8ea1a64373f54c6eb6fa84->enter($__internal_c0a4b0a46431a210c58bb43c2f8fbd9f47d3c9f24b8ea1a64373f54c6eb6fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c0a4b0a46431a210c58bb43c2f8fbd9f47d3c9f24b8ea1a64373f54c6eb6fa84->leave($__internal_c0a4b0a46431a210c58bb43c2f8fbd9f47d3c9f24b8ea1a64373f54c6eb6fa84_prof);

        
        $__internal_0a7c2ba6142d5a36e2408cd559db360e06ae62b54352832dfd9081fbcde24043->leave($__internal_0a7c2ba6142d5a36e2408cd559db360e06ae62b54352832dfd9081fbcde24043_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
