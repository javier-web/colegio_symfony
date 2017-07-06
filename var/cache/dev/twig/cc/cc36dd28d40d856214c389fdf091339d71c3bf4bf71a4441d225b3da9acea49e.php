<?php

/* AppBundle:ActividadExtra:lista_actividadextra.html.twig */
class __TwigTemplate_693a702de82088798deefe098e2658620e08659d969f07dece30e0670d10fd94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:ActividadExtra:lista_actividadextra.html.twig", 3);
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
        $__internal_ebd134e87fc740167e72201689b23348731514d4958b2fd019f1a290c1701fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd134e87fc740167e72201689b23348731514d4958b2fd019f1a290c1701fa1->enter($__internal_ebd134e87fc740167e72201689b23348731514d4958b2fd019f1a290c1701fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:lista_actividadextra.html.twig"));

        $__internal_efbad45574f770ba5a40f6c7005a30f444137b153d3441e7963daed855f6802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbad45574f770ba5a40f6c7005a30f444137b153d3441e7963daed855f6802e->enter($__internal_efbad45574f770ba5a40f6c7005a30f444137b153d3441e7963daed855f6802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ActividadExtra:lista_actividadextra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd134e87fc740167e72201689b23348731514d4958b2fd019f1a290c1701fa1->leave($__internal_ebd134e87fc740167e72201689b23348731514d4958b2fd019f1a290c1701fa1_prof);

        
        $__internal_efbad45574f770ba5a40f6c7005a30f444137b153d3441e7963daed855f6802e->leave($__internal_efbad45574f770ba5a40f6c7005a30f444137b153d3441e7963daed855f6802e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_d991a1ef3733ebc5cffb587edb44e67b5d4e3b33f1fd29b00da3035e9c289eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d991a1ef3733ebc5cffb587edb44e67b5d4e3b33f1fd29b00da3035e9c289eeb->enter($__internal_d991a1ef3733ebc5cffb587edb44e67b5d4e3b33f1fd29b00da3035e9c289eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_177157df6e7ea3d7bf00968147b6c44ee42a3b869429459bf4b7e606f4c4fda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177157df6e7ea3d7bf00968147b6c44ee42a3b869429459bf4b7e606f4c4fda0->enter($__internal_177157df6e7ea3d7bf00968147b6c44ee42a3b869429459bf4b7e606f4c4fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >

        <h3>LISTA de ACTIVIDADES EXTRA</h3>

        <a class=\"btn btn-primary\"  href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_actividadextra");
        echo "\">Nueva Actividad Extra</a>
        
        <table class=\"table\"  cellspacing=\"0\">
            <thead>
                <tr>
                    <td><h4>";
        // line 16
        echo "ID";
        echo "</h4></td>
                    <td><h4>";
        // line 17
        echo "ACTIVIDAD";
        echo "</h4></td>
                    <td class=\"accion\" ><h4>";
        // line 18
        echo "Acción";
        echo "</h4></td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actividadesextra"] ?? $this->getContext($context, "actividadesextra")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividadextra"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividadextra"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividadextra"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td><a  class=\"btn btn-info\"  href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_actividadextra", array("id" => $this->getAttribute($context["actividadextra"], "id", array()))), "html", null, true);
            echo "\">Editar Actividad</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_actividad_lista", array("id" => $this->getAttribute($context["actividadextra"], "id", array()))), "html", null, true);
            echo "\">Eliminar Actividad</a></td></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividadextra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>

        <a class=\"btn btn-primary\"  href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_actividadextra");
        echo "\">Nueva Actividad Extra</a>

    </main>

";
        
        $__internal_177157df6e7ea3d7bf00968147b6c44ee42a3b869429459bf4b7e606f4c4fda0->leave($__internal_177157df6e7ea3d7bf00968147b6c44ee42a3b869429459bf4b7e606f4c4fda0_prof);

        
        $__internal_d991a1ef3733ebc5cffb587edb44e67b5d4e3b33f1fd29b00da3035e9c289eeb->leave($__internal_d991a1ef3733ebc5cffb587edb44e67b5d4e3b33f1fd29b00da3035e9c289eeb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ActividadExtra:lista_actividadextra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  107 => 30,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  83 => 23,  79 => 22,  72 => 18,  68 => 17,  64 => 16,  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
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

        <h3>LISTA de ACTIVIDADES EXTRA</h3>

        <a class=\"btn btn-primary\"  href=\"{{ path('nueva_actividadextra') }}\">Nueva Actividad Extra</a>
        
        <table class=\"table\"  cellspacing=\"0\">
            <thead>
                <tr>
                    <td><h4>{{ 'ID' }}</h4></td>
                    <td><h4>{{ 'ACTIVIDAD' }}</h4></td>
                    <td class=\"accion\" ><h4>{{ 'Acción' }}</h4></td>
                </tr>
            </thead>
            <tbody>
                {% for actividadextra in actividadesextra %}
                    <tr>
                        <td>{{ actividadextra.id }}</td>
                        <td>{{ actividadextra.nombre }}</td>
                        <td><a  class=\"btn btn-info\"  href=\"{{ path('editar_actividadextra', {'id': actividadextra.id}) }}\">Editar Actividad</a>
                        <a class=\"btn btn-danger\" href=\"{{ path('eliminar_actividad_lista', {'id': actividadextra.id}) }}\">Eliminar Actividad</a></td></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a class=\"btn btn-primary\"  href=\"{{ path('nueva_actividadextra') }}\">Nueva Actividad Extra</a>

    </main>

{% endblock %}
", "AppBundle:ActividadExtra:lista_actividadextra.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/ActividadExtra/lista_actividadextra.html.twig");
    }
}
