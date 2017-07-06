<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70b50a0a1921360209fe1270f3922097f7ddd5931f095fe8aa6af1cbda6c930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70b50a0a1921360209fe1270f3922097f7ddd5931f095fe8aa6af1cbda6c930->enter($__internal_e70b50a0a1921360209fe1270f3922097f7ddd5931f095fe8aa6af1cbda6c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a2a72d86be1d2b5369d9c0d461c73e58c5edd92bca3eee0c87edb02cdbce00ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a72d86be1d2b5369d9c0d461c73e58c5edd92bca3eee0c87edb02cdbce00ee->enter($__internal_a2a72d86be1d2b5369d9c0d461c73e58c5edd92bca3eee0c87edb02cdbce00ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70b50a0a1921360209fe1270f3922097f7ddd5931f095fe8aa6af1cbda6c930->leave($__internal_e70b50a0a1921360209fe1270f3922097f7ddd5931f095fe8aa6af1cbda6c930_prof);

        
        $__internal_a2a72d86be1d2b5369d9c0d461c73e58c5edd92bca3eee0c87edb02cdbce00ee->leave($__internal_a2a72d86be1d2b5369d9c0d461c73e58c5edd92bca3eee0c87edb02cdbce00ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_388ba2e5a6aaafb8b3b808d48a6d3ccfa41b6fd79541ca2a6d9f9bfb0cf238b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388ba2e5a6aaafb8b3b808d48a6d3ccfa41b6fd79541ca2a6d9f9bfb0cf238b4->enter($__internal_388ba2e5a6aaafb8b3b808d48a6d3ccfa41b6fd79541ca2a6d9f9bfb0cf238b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45a43ef901425068bc21d0b1d15bfaba96b6126af1b49d26f30a60598c05df65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a43ef901425068bc21d0b1d15bfaba96b6126af1b49d26f30a60598c05df65->enter($__internal_45a43ef901425068bc21d0b1d15bfaba96b6126af1b49d26f30a60598c05df65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_45a43ef901425068bc21d0b1d15bfaba96b6126af1b49d26f30a60598c05df65->leave($__internal_45a43ef901425068bc21d0b1d15bfaba96b6126af1b49d26f30a60598c05df65_prof);

        
        $__internal_388ba2e5a6aaafb8b3b808d48a6d3ccfa41b6fd79541ca2a6d9f9bfb0cf238b4->leave($__internal_388ba2e5a6aaafb8b3b808d48a6d3ccfa41b6fd79541ca2a6d9f9bfb0cf238b4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_37ea74563a364046f195bb7a7d727a7fa137e50889b308675326246e2948ab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ea74563a364046f195bb7a7d727a7fa137e50889b308675326246e2948ab7d->enter($__internal_37ea74563a364046f195bb7a7d727a7fa137e50889b308675326246e2948ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f4db0c4268e373bc537152a8df3ba47361f9e8776711c0138dbc9bc2db9715f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4db0c4268e373bc537152a8df3ba47361f9e8776711c0138dbc9bc2db9715f->enter($__internal_5f4db0c4268e373bc537152a8df3ba47361f9e8776711c0138dbc9bc2db9715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f4db0c4268e373bc537152a8df3ba47361f9e8776711c0138dbc9bc2db9715f->leave($__internal_5f4db0c4268e373bc537152a8df3ba47361f9e8776711c0138dbc9bc2db9715f_prof);

        
        $__internal_37ea74563a364046f195bb7a7d727a7fa137e50889b308675326246e2948ab7d->leave($__internal_37ea74563a364046f195bb7a7d727a7fa137e50889b308675326246e2948ab7d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a033a46a889ce3c701ab139d52133ea8c436727d881c39beff1ad8329e678f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a033a46a889ce3c701ab139d52133ea8c436727d881c39beff1ad8329e678f4->enter($__internal_8a033a46a889ce3c701ab139d52133ea8c436727d881c39beff1ad8329e678f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b059e19dd9af764b134a1a157698aaec6b79143ca00f8d8b4eecef719ceb8f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b059e19dd9af764b134a1a157698aaec6b79143ca00f8d8b4eecef719ceb8f8c->enter($__internal_b059e19dd9af764b134a1a157698aaec6b79143ca00f8d8b4eecef719ceb8f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b059e19dd9af764b134a1a157698aaec6b79143ca00f8d8b4eecef719ceb8f8c->leave($__internal_b059e19dd9af764b134a1a157698aaec6b79143ca00f8d8b4eecef719ceb8f8c_prof);

        
        $__internal_8a033a46a889ce3c701ab139d52133ea8c436727d881c39beff1ad8329e678f4->leave($__internal_8a033a46a889ce3c701ab139d52133ea8c436727d881c39beff1ad8329e678f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
