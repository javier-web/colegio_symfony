<?php

/* AppBundle:Alumno:editar_alumno.html.twig */
class __TwigTemplate_167c9cc1899533f71ab5f53904c802ded228d5658405df1eea9d9edd5f29ae7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Alumno:editar_alumno.html.twig", 3);
        $this->blocks = array(
            '_appbundle_alumno_foto_widget' => array($this, 'block__appbundle_alumno_foto_widget'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbc68aca3444f88276de61a9f80171f97183c0145030d5b4b9aa1c0fe40f2668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc68aca3444f88276de61a9f80171f97183c0145030d5b4b9aa1c0fe40f2668->enter($__internal_bbc68aca3444f88276de61a9f80171f97183c0145030d5b4b9aa1c0fe40f2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:editar_alumno.html.twig"));

        $__internal_51326335fcc6fcfa6c13ac34b42a57c2275f06069b664154043be93533fc7451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51326335fcc6fcfa6c13ac34b42a57c2275f06069b664154043be93533fc7451->enter($__internal_51326335fcc6fcfa6c13ac34b42a57c2275f06069b664154043be93533fc7451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:editar_alumno.html.twig"));

        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["formulario"] ?? $this->getContext($context, "formulario")), array(0 => $this));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc68aca3444f88276de61a9f80171f97183c0145030d5b4b9aa1c0fe40f2668->leave($__internal_bbc68aca3444f88276de61a9f80171f97183c0145030d5b4b9aa1c0fe40f2668_prof);

        
        $__internal_51326335fcc6fcfa6c13ac34b42a57c2275f06069b664154043be93533fc7451->leave($__internal_51326335fcc6fcfa6c13ac34b42a57c2275f06069b664154043be93533fc7451_prof);

    }

    // line 7
    public function block__appbundle_alumno_foto_widget($context, array $blocks = array())
    {
        $__internal_c052f83791180210641e5ffd56e103ca00115733e3a2b32ca0e9177c3d5cb913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c052f83791180210641e5ffd56e103ca00115733e3a2b32ca0e9177c3d5cb913->enter($__internal_c052f83791180210641e5ffd56e103ca00115733e3a2b32ca0e9177c3d5cb913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_appbundle_alumno_foto_widget"));

        $__internal_133c1047af15563c41b7936fa19e3259b34493ffbabaf9df42b2bcfc18231e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133c1047af15563c41b7936fa19e3259b34493ffbabaf9df42b2bcfc18231e07->enter($__internal_133c1047af15563c41b7936fa19e3259b34493ffbabaf9df42b2bcfc18231e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_appbundle_alumno_foto_widget"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <img src=\"/uploads/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "filename", array()), "html", null, true);
        echo "\">
";
        
        $__internal_133c1047af15563c41b7936fa19e3259b34493ffbabaf9df42b2bcfc18231e07->leave($__internal_133c1047af15563c41b7936fa19e3259b34493ffbabaf9df42b2bcfc18231e07_prof);

        
        $__internal_c052f83791180210641e5ffd56e103ca00115733e3a2b32ca0e9177c3d5cb913->leave($__internal_c052f83791180210641e5ffd56e103ca00115733e3a2b32ca0e9177c3d5cb913_prof);

    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        $__internal_4195036088430a8b148ca868026754312736e7d2ee73515c0b6bcc312739fa11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4195036088430a8b148ca868026754312736e7d2ee73515c0b6bcc312739fa11->enter($__internal_4195036088430a8b148ca868026754312736e7d2ee73515c0b6bcc312739fa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_034143acf378302d5a08a0316a13c60755d0da99c56e36b42424dd090ee12a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034143acf378302d5a08a0316a13c60755d0da99c56e36b42424dd090ee12a29->enter($__internal_034143acf378302d5a08a0316a13c60755d0da99c56e36b42424dd090ee12a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "    <main  class=\"container\" >
    
        <h3>FORMULARIO de edicion de ALUMNO</h3>
        
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "

        <a class=\"btn btn-danger\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_alumno_editado", array("id" => $this->getAttribute(($context["alumno"] ?? $this->getContext($context, "alumno")), "id", array()))), "html", null, true);
        echo "\">Eliminar Alumno</a>

    </main>

";
        
        $__internal_034143acf378302d5a08a0316a13c60755d0da99c56e36b42424dd090ee12a29->leave($__internal_034143acf378302d5a08a0316a13c60755d0da99c56e36b42424dd090ee12a29_prof);

        
        $__internal_4195036088430a8b148ca868026754312736e7d2ee73515c0b6bcc312739fa11->leave($__internal_4195036088430a8b148ca868026754312736e7d2ee73515c0b6bcc312739fa11_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Alumno:editar_alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  85 => 17,  79 => 13,  70 => 12,  58 => 9,  53 => 8,  44 => 7,  34 => 3,  32 => 5,  11 => 3,);
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

{% form_theme formulario _self %}

{% block _appbundle_alumno_foto_widget %}
    {{form_widget(form)}}
    <img src=\"/uploads/{{form.vars.data.filename}}\">
{% endblock %}

{% block main %}
    <main  class=\"container\" >
    
        <h3>FORMULARIO de edicion de ALUMNO</h3>
        
        {{form(formulario)}}

        <a class=\"btn btn-danger\"  href=\"{{ path('eliminar_alumno_editado', {'id': alumno.id}) }}\">Eliminar Alumno</a>

    </main>

{% endblock %}
", "AppBundle:Alumno:editar_alumno.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Alumno/editar_alumno.html.twig");
    }
}
