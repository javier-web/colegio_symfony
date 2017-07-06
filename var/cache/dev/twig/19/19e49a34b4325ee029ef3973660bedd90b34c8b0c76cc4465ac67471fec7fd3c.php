<?php

/* AppBundle:ActividadExtra:nueva_actividadextra.html.twig */
class __TwigTemplate_aaaf02dd39d7b594bfd1fd40fb636b15ff51d12d65f266ed0651acc1476fa45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:ActividadExtra:nueva_actividadextra.html.twig", 3);
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
        $__internal_c4da001b0443e744588cbe3d114db01e83fcf88e9344fec3899d9ac2ae8fc191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4da001b0443e744588cbe3d114db01e83fcf88e9344fec3899d9ac2ae8fc191->enter($__internal_c4da001b0443e744588cbe3d114db01e83fcf88e9344fec3899d9ac2ae8fc191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:nueva_actividadextra.html.twig"));

        $__internal_a324f1a030ceda8fb654dc7ff56058a4c4278f61249fb03af2f28a60631c44eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a324f1a030ceda8fb654dc7ff56058a4c4278f61249fb03af2f28a60631c44eb->enter($__internal_a324f1a030ceda8fb654dc7ff56058a4c4278f61249fb03af2f28a60631c44eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:nueva_actividadextra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4da001b0443e744588cbe3d114db01e83fcf88e9344fec3899d9ac2ae8fc191->leave($__internal_c4da001b0443e744588cbe3d114db01e83fcf88e9344fec3899d9ac2ae8fc191_prof);

        
        $__internal_a324f1a030ceda8fb654dc7ff56058a4c4278f61249fb03af2f28a60631c44eb->leave($__internal_a324f1a030ceda8fb654dc7ff56058a4c4278f61249fb03af2f28a60631c44eb_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4c6eb56c0d6d3f18b9c0a5bae1684d37ae2175377b39e49c979114064ccb58f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6eb56c0d6d3f18b9c0a5bae1684d37ae2175377b39e49c979114064ccb58f8->enter($__internal_4c6eb56c0d6d3f18b9c0a5bae1684d37ae2175377b39e49c979114064ccb58f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4e22d8bf55f84a355d0645145348b2cc4e68ff99891eed194e61b16a54e3a427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e22d8bf55f84a355d0645145348b2cc4e68ff99891eed194e61b16a54e3a427->enter($__internal_4e22d8bf55f84a355d0645145348b2cc4e68ff99891eed194e61b16a54e3a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >
    
        <h3>FORMULARIO de nueva ACTIVIDAD EXTRA</h3>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? $this->getContext($context, "formulario")), 'form');
        echo "

    </main>

";
        
        $__internal_4e22d8bf55f84a355d0645145348b2cc4e68ff99891eed194e61b16a54e3a427->leave($__internal_4e22d8bf55f84a355d0645145348b2cc4e68ff99891eed194e61b16a54e3a427_prof);

        
        $__internal_4c6eb56c0d6d3f18b9c0a5bae1684d37ae2175377b39e49c979114064ccb58f8->leave($__internal_4c6eb56c0d6d3f18b9c0a5bae1684d37ae2175377b39e49c979114064ccb58f8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ActividadExtra:nueva_actividadextra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
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
    
        <h3>FORMULARIO de nueva ACTIVIDAD EXTRA</h3>

        {{form(formulario)}}

    </main>

{% endblock %}
", "AppBundle:ActividadExtra:nueva_actividadextra.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/ActividadExtra/nueva_actividadextra.html.twig");
    }
}
