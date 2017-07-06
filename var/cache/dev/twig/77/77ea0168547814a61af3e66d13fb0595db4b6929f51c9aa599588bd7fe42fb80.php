<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f9334056c4d184b97226ef6e71e1b3d722c3d46f0affe9ba221170105fc2e8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9334056c4d184b97226ef6e71e1b3d722c3d46f0affe9ba221170105fc2e8c3->enter($__internal_f9334056c4d184b97226ef6e71e1b3d722c3d46f0affe9ba221170105fc2e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4fbf0260143e92bf4b85ffee12cc3dd71118cc87bc2390c738a8e980e02c4585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbf0260143e92bf4b85ffee12cc3dd71118cc87bc2390c738a8e980e02c4585->enter($__internal_4fbf0260143e92bf4b85ffee12cc3dd71118cc87bc2390c738a8e980e02c4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9334056c4d184b97226ef6e71e1b3d722c3d46f0affe9ba221170105fc2e8c3->leave($__internal_f9334056c4d184b97226ef6e71e1b3d722c3d46f0affe9ba221170105fc2e8c3_prof);

        
        $__internal_4fbf0260143e92bf4b85ffee12cc3dd71118cc87bc2390c738a8e980e02c4585->leave($__internal_4fbf0260143e92bf4b85ffee12cc3dd71118cc87bc2390c738a8e980e02c4585_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_072606e1f9a44d2f3a11846b9a38df1b7685e0534352ce79c1e4b8ad3e428594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072606e1f9a44d2f3a11846b9a38df1b7685e0534352ce79c1e4b8ad3e428594->enter($__internal_072606e1f9a44d2f3a11846b9a38df1b7685e0534352ce79c1e4b8ad3e428594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f2d8c4afb4a85ef556be412d09de3cf212ae0775e8fb32f8dc2772ced8cab4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2d8c4afb4a85ef556be412d09de3cf212ae0775e8fb32f8dc2772ced8cab4f->enter($__internal_5f2d8c4afb4a85ef556be412d09de3cf212ae0775e8fb32f8dc2772ced8cab4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f2d8c4afb4a85ef556be412d09de3cf212ae0775e8fb32f8dc2772ced8cab4f->leave($__internal_5f2d8c4afb4a85ef556be412d09de3cf212ae0775e8fb32f8dc2772ced8cab4f_prof);

        
        $__internal_072606e1f9a44d2f3a11846b9a38df1b7685e0534352ce79c1e4b8ad3e428594->leave($__internal_072606e1f9a44d2f3a11846b9a38df1b7685e0534352ce79c1e4b8ad3e428594_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_303009e120e6d783f8bd1c368b3db94d89f50349ca32d7f6f55dbf9efab34783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303009e120e6d783f8bd1c368b3db94d89f50349ca32d7f6f55dbf9efab34783->enter($__internal_303009e120e6d783f8bd1c368b3db94d89f50349ca32d7f6f55dbf9efab34783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e97869d48dba6f76b952947371dfabfeffc9d92bc12e0130a507ff4b58ae05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e97869d48dba6f76b952947371dfabfeffc9d92bc12e0130a507ff4b58ae05d->enter($__internal_3e97869d48dba6f76b952947371dfabfeffc9d92bc12e0130a507ff4b58ae05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e97869d48dba6f76b952947371dfabfeffc9d92bc12e0130a507ff4b58ae05d->leave($__internal_3e97869d48dba6f76b952947371dfabfeffc9d92bc12e0130a507ff4b58ae05d_prof);

        
        $__internal_303009e120e6d783f8bd1c368b3db94d89f50349ca32d7f6f55dbf9efab34783->leave($__internal_303009e120e6d783f8bd1c368b3db94d89f50349ca32d7f6f55dbf9efab34783_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_360e2a3426069fbb32aed138dde7b0539399072683990a247fe4df75cba038e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360e2a3426069fbb32aed138dde7b0539399072683990a247fe4df75cba038e6->enter($__internal_360e2a3426069fbb32aed138dde7b0539399072683990a247fe4df75cba038e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a71e3a26f679ab66f8ce788cc5948a14c4ca9a8fedc9d6a59a19dd724893bcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71e3a26f679ab66f8ce788cc5948a14c4ca9a8fedc9d6a59a19dd724893bcf2->enter($__internal_a71e3a26f679ab66f8ce788cc5948a14c4ca9a8fedc9d6a59a19dd724893bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a71e3a26f679ab66f8ce788cc5948a14c4ca9a8fedc9d6a59a19dd724893bcf2->leave($__internal_a71e3a26f679ab66f8ce788cc5948a14c4ca9a8fedc9d6a59a19dd724893bcf2_prof);

        
        $__internal_360e2a3426069fbb32aed138dde7b0539399072683990a247fe4df75cba038e6->leave($__internal_360e2a3426069fbb32aed138dde7b0539399072683990a247fe4df75cba038e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
