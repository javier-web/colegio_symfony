<?php

/* AppBundle:Curso:editar_curso.html.twig */
class __TwigTemplate_2543f241ef9d311fd4cd21ace49c780694c635b28d4acb2ccf9779763546c444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Curso:editar_curso.html.twig", 3);
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
        $__internal_6dffc31e2e69993bfe93e48404f5ff44dfd04dca6b84d27d51e186ecf3a930f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dffc31e2e69993bfe93e48404f5ff44dfd04dca6b84d27d51e186ecf3a930f9->enter($__internal_6dffc31e2e69993bfe93e48404f5ff44dfd04dca6b84d27d51e186ecf3a930f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:editar_curso.html.twig"));

        $__internal_39f4e1955cc074166bb71f24c1a640cf46a076e56a295d9d864752c11d896e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f4e1955cc074166bb71f24c1a640cf46a076e56a295d9d864752c11d896e83->enter($__internal_39f4e1955cc074166bb71f24c1a640cf46a076e56a295d9d864752c11d896e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:editar_curso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dffc31e2e69993bfe93e48404f5ff44dfd04dca6b84d27d51e186ecf3a930f9->leave($__internal_6dffc31e2e69993bfe93e48404f5ff44dfd04dca6b84d27d51e186ecf3a930f9_prof);

        
        $__internal_39f4e1955cc074166bb71f24c1a640cf46a076e56a295d9d864752c11d896e83->leave($__internal_39f4e1955cc074166bb71f24c1a640cf46a076e56a295d9d864752c11d896e83_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c13eee48896162392ab2853d4e7036f5331d7c4faa7e96f63abf9f5df2ab0312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13eee48896162392ab2853d4e7036f5331d7c4faa7e96f63abf9f5df2ab0312->enter($__internal_c13eee48896162392ab2853d4e7036f5331d7c4faa7e96f63abf9f5df2ab0312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c38755e9480742df36b2a40a1225c1d5bbb723b38c7c84ce15fed36a8090ecec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38755e9480742df36b2a40a1225c1d5bbb723b38c7c84ce15fed36a8090ecec->enter($__internal_c38755e9480742df36b2a40a1225c1d5bbb723b38c7c84ce15fed36a8090ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >
    
        <h3>FORMULARIO de edición de CURSO</h3>
        
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "
        
        <a class=\"btn btn-danger\"  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_curso_editado", array("id" => $this->getAttribute(($context["curso"] ?? $this->getContext($context, "curso")), "id", array()))), "html", null, true);
        echo "\">Eliminar Curso</a>
        
    </main>

";
        
        $__internal_c38755e9480742df36b2a40a1225c1d5bbb723b38c7c84ce15fed36a8090ecec->leave($__internal_c38755e9480742df36b2a40a1225c1d5bbb723b38c7c84ce15fed36a8090ecec_prof);

        
        $__internal_c13eee48896162392ab2853d4e7036f5331d7c4faa7e96f63abf9f5df2ab0312->leave($__internal_c13eee48896162392ab2853d4e7036f5331d7c4faa7e96f63abf9f5df2ab0312_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Curso:editar_curso.html.twig";
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
    
        <h3>FORMULARIO de edición de CURSO</h3>
        
        {{form(formulario)}}
        
        <a class=\"btn btn-danger\"  href=\"{{ path('eliminar_curso_editado', {'id': curso.id}) }}\">Eliminar Curso</a>
        
    </main>

{% endblock %}

", "AppBundle:Curso:editar_curso.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Curso/editar_curso.html.twig");
    }
}
