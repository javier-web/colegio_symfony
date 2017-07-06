<?php

/* AppBundle:Curso:lista_curso.html.twig */
class __TwigTemplate_38037dd1cdb7dc58a960d186e21fc25ebe568f4d1c6a7c77445e54f83291cb54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Curso:lista_curso.html.twig", 3);
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
        $__internal_e7a9a3e05171478836e1f07a63330deddfa9d6beba1e938f6b4e079a75ea5fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a9a3e05171478836e1f07a63330deddfa9d6beba1e938f6b4e079a75ea5fcb->enter($__internal_e7a9a3e05171478836e1f07a63330deddfa9d6beba1e938f6b4e079a75ea5fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:lista_curso.html.twig"));

        $__internal_38b3a5d0852ce6146c7726a754fc83c9a8c8455031bb7a0eb10d3f44b18025e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b3a5d0852ce6146c7726a754fc83c9a8c8455031bb7a0eb10d3f44b18025e7->enter($__internal_38b3a5d0852ce6146c7726a754fc83c9a8c8455031bb7a0eb10d3f44b18025e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Curso:lista_curso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a9a3e05171478836e1f07a63330deddfa9d6beba1e938f6b4e079a75ea5fcb->leave($__internal_e7a9a3e05171478836e1f07a63330deddfa9d6beba1e938f6b4e079a75ea5fcb_prof);

        
        $__internal_38b3a5d0852ce6146c7726a754fc83c9a8c8455031bb7a0eb10d3f44b18025e7->leave($__internal_38b3a5d0852ce6146c7726a754fc83c9a8c8455031bb7a0eb10d3f44b18025e7_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_144e05be2af449d6400730ef989ace783e12b22ac5fe8a74c1c2b88ce7959056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144e05be2af449d6400730ef989ace783e12b22ac5fe8a74c1c2b88ce7959056->enter($__internal_144e05be2af449d6400730ef989ace783e12b22ac5fe8a74c1c2b88ce7959056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_036042ae027d22016c5e431a3248fc95bb56f33b4383867cae5a7b76ccc732de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036042ae027d22016c5e431a3248fc95bb56f33b4383867cae5a7b76ccc732de->enter($__internal_036042ae027d22016c5e431a3248fc95bb56f33b4383867cae5a7b76ccc732de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >

        <h3>LISTA de CURSOS</h3>
        
        <a class=\"btn btn-primary\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_curso");
        echo "\">Nuevo Curso</a>
        
        <table class=\"table\"  cellspacing=\"0\">
            <thead>
                <tr>
                    <td><h4>";
        // line 16
        echo "ID";
        echo "</h4></td>
                    <td><h4>";
        // line 17
        echo "CURSO";
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
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-info\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_curso", array("id" => $this->getAttribute($context["curso"], "id", array()))), "html", null, true);
            echo "\">Editar Curso</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_curso_lista", array("id" => $this->getAttribute($context["curso"], "id", array()))), "html", null, true);
            echo "\">Eliminar Curso</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>

        <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_curso");
        echo "\">Nuevo Curso</a>

    </main>

";
        
        $__internal_036042ae027d22016c5e431a3248fc95bb56f33b4383867cae5a7b76ccc732de->leave($__internal_036042ae027d22016c5e431a3248fc95bb56f33b4383867cae5a7b76ccc732de_prof);

        
        $__internal_144e05be2af449d6400730ef989ace783e12b22ac5fe8a74c1c2b88ce7959056->leave($__internal_144e05be2af449d6400730ef989ace783e12b22ac5fe8a74c1c2b88ce7959056_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Curso:lista_curso.html.twig";
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

        <h3>LISTA de CURSOS</h3>
        
        <a class=\"btn btn-primary\" href=\"{{ path('nuevo_curso') }}\">Nuevo Curso</a>
        
        <table class=\"table\"  cellspacing=\"0\">
            <thead>
                <tr>
                    <td><h4>{{ 'ID' }}</h4></td>
                    <td><h4>{{ 'CURSO' }}</h4></td>
                    <td class=\"accion\" ><h4>{{ 'Acción' }}</h4></td>
                </tr>
            </thead>
            <tbody>
                {% for curso in cursos %}
                    <tr>
                        <td>{{ curso.id }}</td>
                        <td>{{ curso.nombre }}</td>
                        <td><a class=\"btn btn-info\" href=\"{{ path('editar_curso', {'id': curso.id}) }}\">Editar Curso</a>
                        <a class=\"btn btn-danger\" href=\"{{ path('eliminar_curso_lista', {'id': curso.id}) }}\">Eliminar Curso</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a class=\"btn btn-primary\" href=\"{{ path('nuevo_curso') }}\">Nuevo Curso</a>

    </main>

{% endblock %}", "AppBundle:Curso:lista_curso.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Curso/lista_curso.html.twig");
    }
}
