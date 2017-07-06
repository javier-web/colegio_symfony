<?php

/* AppBundle:Alumno:nuevo_alumno.html.twig */
class __TwigTemplate_3c954d843cac93495b4092c672f42eb8fea0002acdbe259697bff8d044455c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Alumno:nuevo_alumno.html.twig", 3);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9963a0818b80914a1e958dfc358e7562750fef16585ee02f8e0d4cdb591771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9963a0818b80914a1e958dfc358e7562750fef16585ee02f8e0d4cdb591771->enter($__internal_5c9963a0818b80914a1e958dfc358e7562750fef16585ee02f8e0d4cdb591771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:nuevo_alumno.html.twig"));

        $__internal_2a80a308762c856dfe494aa5305bac097365c8633d8088a304e18b5c3baccdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a80a308762c856dfe494aa5305bac097365c8633d8088a304e18b5c3baccdf8->enter($__internal_2a80a308762c856dfe494aa5305bac097365c8633d8088a304e18b5c3baccdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:nuevo_alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9963a0818b80914a1e958dfc358e7562750fef16585ee02f8e0d4cdb591771->leave($__internal_5c9963a0818b80914a1e958dfc358e7562750fef16585ee02f8e0d4cdb591771_prof);

        
        $__internal_2a80a308762c856dfe494aa5305bac097365c8633d8088a304e18b5c3baccdf8->leave($__internal_2a80a308762c856dfe494aa5305bac097365c8633d8088a304e18b5c3baccdf8_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_9d6b145c6b90be8d6dd9836cf05b3a65faa14145bd554beb3d0f2371e32e8fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6b145c6b90be8d6dd9836cf05b3a65faa14145bd554beb3d0f2371e32e8fba->enter($__internal_9d6b145c6b90be8d6dd9836cf05b3a65faa14145bd554beb3d0f2371e32e8fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f0f8806be13be69f2964dfc5e6e08af38d4d479fbb94a1c1d8d9b53aed3466be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f8806be13be69f2964dfc5e6e08af38d4d479fbb94a1c1d8d9b53aed3466be->enter($__internal_f0f8806be13be69f2964dfc5e6e08af38d4d479fbb94a1c1d8d9b53aed3466be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    <main  class=\"container\" >
    
        <h3>FORMULARIO de nuevo ALUMNO</h3>
    
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "

    </main>

";
        
        $__internal_f0f8806be13be69f2964dfc5e6e08af38d4d479fbb94a1c1d8d9b53aed3466be->leave($__internal_f0f8806be13be69f2964dfc5e6e08af38d4d479fbb94a1c1d8d9b53aed3466be_prof);

        
        $__internal_9d6b145c6b90be8d6dd9836cf05b3a65faa14145bd554beb3d0f2371e32e8fba->leave($__internal_9d6b145c6b90be8d6dd9836cf05b3a65faa14145bd554beb3d0f2371e32e8fba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Alumno:nuevo_alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  49 => 8,  40 => 7,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'AppBundle:Default:base.html.twig' %}



{% block main %}

    <main  class=\"container\" >
    
        <h3>FORMULARIO de nuevo ALUMNO</h3>
    
        {{form(formulario)}}

    </main>

{% endblock %}


", "AppBundle:Alumno:nuevo_alumno.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Alumno/nuevo_alumno.html.twig");
    }
}
