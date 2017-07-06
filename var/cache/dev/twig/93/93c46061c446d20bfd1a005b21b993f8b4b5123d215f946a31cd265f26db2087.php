<?php

/* AppBundle:ActividadExtra:editar_actividadextra.html.twig */
class __TwigTemplate_a7cced0a7fd04b914ff78a2e3da54c740130db649ab5bf5a9c6b17e21cebf3ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:ActividadExtra:editar_actividadextra.html.twig", 3);
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
        $__internal_019458098b46b31bcb63520b69f9f00dd769c53378a031f36c023ea428acf393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019458098b46b31bcb63520b69f9f00dd769c53378a031f36c023ea428acf393->enter($__internal_019458098b46b31bcb63520b69f9f00dd769c53378a031f36c023ea428acf393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:editar_actividadextra.html.twig"));

        $__internal_2cbb140e0a3b6d6ea61eb37c81313afed3304542be258fa02f66083e2657da68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbb140e0a3b6d6ea61eb37c81313afed3304542be258fa02f66083e2657da68->enter($__internal_2cbb140e0a3b6d6ea61eb37c81313afed3304542be258fa02f66083e2657da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:editar_actividadextra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019458098b46b31bcb63520b69f9f00dd769c53378a031f36c023ea428acf393->leave($__internal_019458098b46b31bcb63520b69f9f00dd769c53378a031f36c023ea428acf393_prof);

        
        $__internal_2cbb140e0a3b6d6ea61eb37c81313afed3304542be258fa02f66083e2657da68->leave($__internal_2cbb140e0a3b6d6ea61eb37c81313afed3304542be258fa02f66083e2657da68_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a6817b37739c1c661575d48776da71b7a7fc91d816e4b60593382c8ad11585fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6817b37739c1c661575d48776da71b7a7fc91d816e4b60593382c8ad11585fb->enter($__internal_a6817b37739c1c661575d48776da71b7a7fc91d816e4b60593382c8ad11585fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ee14fb7e0150c6c2f01c667d4c79f16357af85af4ac590755a46974c5e73549b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee14fb7e0150c6c2f01c667d4c79f16357af85af4ac590755a46974c5e73549b->enter($__internal_ee14fb7e0150c6c2f01c667d4c79f16357af85af4ac590755a46974c5e73549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >
    
        <h3>FORMULARIO de edición de ACTIVIDADES EXTRA</h3>
        
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "
        
        <a class=\"btn btn-danger\"  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_actividad_editado", array("id" => $this->getAttribute(($context["actividadextra"] ?? $this->getContext($context, "actividadextra")), "id", array()))), "html", null, true);
        echo "\">Eliminar Actividad</a>
        
    </main>

";
        
        $__internal_ee14fb7e0150c6c2f01c667d4c79f16357af85af4ac590755a46974c5e73549b->leave($__internal_ee14fb7e0150c6c2f01c667d4c79f16357af85af4ac590755a46974c5e73549b_prof);

        
        $__internal_a6817b37739c1c661575d48776da71b7a7fc91d816e4b60593382c8ad11585fb->leave($__internal_a6817b37739c1c661575d48776da71b7a7fc91d816e4b60593382c8ad11585fb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ActividadExtra:editar_actividadextra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
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
    
        <h3>FORMULARIO de edición de ACTIVIDADES EXTRA</h3>
        
        {{form(formulario)}}
        
        <a class=\"btn btn-danger\"  href=\"{{ path('eliminar_actividad_editado', {'id': actividadextra.id}) }}\">Eliminar Actividad</a>
        
    </main>

{% endblock %}

", "AppBundle:ActividadExtra:editar_actividadextra.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/ActividadExtra/editar_actividadextra.html.twig");
    }
}
