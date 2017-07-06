<?php

/* AppBundle:Curso:nuevo_curso.html.twig */
class __TwigTemplate_870923561da3acff08b551a4f91f9e708f69279e9f7f787b4c8a030672f7f889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Curso:nuevo_curso.html.twig", 3);
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
        $__internal_c2fa592774f308ab215f81a43f51b4618b9e783db8afc62d31404f73044eed97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fa592774f308ab215f81a43f51b4618b9e783db8afc62d31404f73044eed97->enter($__internal_c2fa592774f308ab215f81a43f51b4618b9e783db8afc62d31404f73044eed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:nuevo_curso.html.twig"));

        $__internal_e8ee99273bcfe1335f059be0c7b797ffe52ce2215b87f6f695c00d399943daa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ee99273bcfe1335f059be0c7b797ffe52ce2215b87f6f695c00d399943daa2->enter($__internal_e8ee99273bcfe1335f059be0c7b797ffe52ce2215b87f6f695c00d399943daa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:nuevo_curso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fa592774f308ab215f81a43f51b4618b9e783db8afc62d31404f73044eed97->leave($__internal_c2fa592774f308ab215f81a43f51b4618b9e783db8afc62d31404f73044eed97_prof);

        
        $__internal_e8ee99273bcfe1335f059be0c7b797ffe52ce2215b87f6f695c00d399943daa2->leave($__internal_e8ee99273bcfe1335f059be0c7b797ffe52ce2215b87f6f695c00d399943daa2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2c826299176ef16c48520c5168d2beb2ad946d9b8c776c0c09d0cf817ce294c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c826299176ef16c48520c5168d2beb2ad946d9b8c776c0c09d0cf817ce294c->enter($__internal_a2c826299176ef16c48520c5168d2beb2ad946d9b8c776c0c09d0cf817ce294c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d45a013692d637f4cd4d035da181d83838dd68e3be3c0f5c80a0d6a5bc13e938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45a013692d637f4cd4d035da181d83838dd68e3be3c0f5c80a0d6a5bc13e938->enter($__internal_d45a013692d637f4cd4d035da181d83838dd68e3be3c0f5c80a0d6a5bc13e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >
    
        <h3>FORMULARIO de nuevo CURSO</h3>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "
        
    </main>

";
        
        $__internal_d45a013692d637f4cd4d035da181d83838dd68e3be3c0f5c80a0d6a5bc13e938->leave($__internal_d45a013692d637f4cd4d035da181d83838dd68e3be3c0f5c80a0d6a5bc13e938_prof);

        
        $__internal_a2c826299176ef16c48520c5168d2beb2ad946d9b8c776c0c09d0cf817ce294c->leave($__internal_a2c826299176ef16c48520c5168d2beb2ad946d9b8c776c0c09d0cf817ce294c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Curso:nuevo_curso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 6,  40 => 5,  11 => 3,);
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
    
        <h3>FORMULARIO de nuevo CURSO</h3>
        {{form(formulario)}}
        
    </main>

{% endblock %}

", "AppBundle:Curso:nuevo_curso.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Curso/nuevo_curso.html.twig");
    }
}
