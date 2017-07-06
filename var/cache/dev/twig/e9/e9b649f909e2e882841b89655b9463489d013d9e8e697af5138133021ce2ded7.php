<?php

/* AppBundle:Alumno:lista_alumno.html.twig */
class __TwigTemplate_0170226cedfcfb6f0c65be8817517ff4e3360b69fcad9a09a5f3a3159f12f190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle:Default:base.html.twig", "AppBundle:Alumno:lista_alumno.html.twig", 3);
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
        $__internal_7f6dba57741d0ffa791adb99ac31bf093bf1b8afb0d4e3963c62bb294d3dc751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6dba57741d0ffa791adb99ac31bf093bf1b8afb0d4e3963c62bb294d3dc751->enter($__internal_7f6dba57741d0ffa791adb99ac31bf093bf1b8afb0d4e3963c62bb294d3dc751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:lista_alumno.html.twig"));

        $__internal_e9e36769ef7128b3bd75f6a9f8aa45b540e5cbda9dd8d501688098233cce1038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e36769ef7128b3bd75f6a9f8aa45b540e5cbda9dd8d501688098233cce1038->enter($__internal_e9e36769ef7128b3bd75f6a9f8aa45b540e5cbda9dd8d501688098233cce1038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Alumno:lista_alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f6dba57741d0ffa791adb99ac31bf093bf1b8afb0d4e3963c62bb294d3dc751->leave($__internal_7f6dba57741d0ffa791adb99ac31bf093bf1b8afb0d4e3963c62bb294d3dc751_prof);

        
        $__internal_e9e36769ef7128b3bd75f6a9f8aa45b540e5cbda9dd8d501688098233cce1038->leave($__internal_e9e36769ef7128b3bd75f6a9f8aa45b540e5cbda9dd8d501688098233cce1038_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_27efd3a51675fd77fa92c5872a3cd7dbc30790dd6c5ef7bf1d937b58c61930ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27efd3a51675fd77fa92c5872a3cd7dbc30790dd6c5ef7bf1d937b58c61930ab->enter($__internal_27efd3a51675fd77fa92c5872a3cd7dbc30790dd6c5ef7bf1d937b58c61930ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_454b42a443e3d6eb8fbfc4c02302ab8662a4acfcb8476f873f722364db118a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454b42a443e3d6eb8fbfc4c02302ab8662a4acfcb8476f873f722364db118a8d->enter($__internal_454b42a443e3d6eb8fbfc4c02302ab8662a4acfcb8476f873f722364db118a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <main  class=\"container\" >


        <div style=\" margin: 0 auto;\">

            <h3>LISTA de ALUMNOS</h3>

            <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_alumno");
        echo "\">Nuevo Alumno</a>

            <table class=\"table\"  cellspacing=\"0\">

                <thead>
                    <tr>
                        <td><h4>";
        // line 20
        echo "ID";
        echo "</h4></td>
                        <td><h4>";
        // line 21
        echo "NOMBRE";
        echo "</h4></td>
                        <td><h4>";
        // line 22
        echo "APELLIDOS";
        echo "</h4></td>
                        <td><h4>";
        // line 23
        echo "CURSO";
        echo "</h4></td>
                        <td><h4>";
        // line 24
        echo "ACTIVIDADES EXTRA";
        echo "</h4></td>
                        <td class=\"accion\" ><h4>";
        // line 25
        echo "Acción";
        echo "</h4></td>

                    </tr>
                </thead>

                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alumnos"] ?? $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "curso", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["alumno"], "actividadesExtra", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["actividadExtra"]) {
                // line 38
                echo "                                ";
                if (($this->getAttribute($context["loop"], "last", array()) == true)) {
                    // line 39
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actividadExtra"], "nombre", array()), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 41
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actividadExtra"], "nombre", array()), "html", null, true);
                    echo ",
                                ";
                }
                // line 43
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividadExtra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </td>
                        <td class=\"accion\"><a class=\"btn btn-info\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_alumno", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\">Editar Alumno</a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_alumno_lista", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\">Eliminar Alumno</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>

                <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_alumno");
        echo "\">Nuevo Alumno</a>



                <div class=\"paginacion\">

                    ";
        // line 58
        if ((($context["pagina"] ?? $this->getContext($context, "pagina")) != 1)) {
            echo " 
                      <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
            echo "/1\"> << &nbsp</a>
                      <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
            echo "/";
            echo twig_escape_filter($this->env, (($context["pagina"] ?? $this->getContext($context, "pagina")) - 1), "html", null, true);
            echo "\">&nbsp < &nbsp</a>
                    ";
        }
        // line 62
        echo "                    
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["totalPaginas"] ?? $this->getContext($context, "totalPaginas"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "                                                  
                         <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
            echo "/";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">&nbsp";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "&nbsp</a>
                          
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    
                    
                    ";
        // line 70
        if ((($context["pagina"] ?? $this->getContext($context, "pagina")) != ($context["totalPaginas"] ?? $this->getContext($context, "totalPaginas")))) {
            echo "                            
                      <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
            echo "/";
            echo twig_escape_filter($this->env, (($context["pagina"] ?? $this->getContext($context, "pagina")) + 1), "html", null, true);
            echo "\">&nbsp > &nbsp</a>
                      <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
            echo "/";
            echo twig_escape_filter($this->env, ($context["totalPaginas"] ?? $this->getContext($context, "totalPaginas")), "html", null, true);
            echo "\">&nbsp >> &nbsp</a>
                    ";
        }
        // line 74
        echo "                    
                         

                </div>
            </div>

        </main>

        ";
        
        $__internal_454b42a443e3d6eb8fbfc4c02302ab8662a4acfcb8476f873f722364db118a8d->leave($__internal_454b42a443e3d6eb8fbfc4c02302ab8662a4acfcb8476f873f722364db118a8d_prof);

        
        $__internal_27efd3a51675fd77fa92c5872a3cd7dbc30790dd6c5ef7bf1d937b58c61930ab->leave($__internal_27efd3a51675fd77fa92c5872a3cd7dbc30790dd6c5ef7bf1d937b58c61930ab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Alumno:lista_alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 74,  248 => 72,  242 => 71,  238 => 70,  234 => 68,  221 => 65,  218 => 64,  214 => 63,  211 => 62,  204 => 60,  200 => 59,  196 => 58,  187 => 52,  182 => 49,  173 => 46,  169 => 45,  166 => 44,  152 => 43,  146 => 41,  140 => 39,  137 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  97 => 31,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  59 => 14,  49 => 6,  40 => 5,  11 => 3,);
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


        <div style=\" margin: 0 auto;\">

            <h3>LISTA de ALUMNOS</h3>

            <a class=\"btn btn-primary\" href=\"{{ path('nuevo_alumno') }}\">Nuevo Alumno</a>

            <table class=\"table\"  cellspacing=\"0\">

                <thead>
                    <tr>
                        <td><h4>{{ 'ID' }}</h4></td>
                        <td><h4>{{ 'NOMBRE' }}</h4></td>
                        <td><h4>{{ 'APELLIDOS' }}</h4></td>
                        <td><h4>{{ 'CURSO' }}</h4></td>
                        <td><h4>{{ 'ACTIVIDADES EXTRA' }}</h4></td>
                        <td class=\"accion\" ><h4>{{ 'Acción' }}</h4></td>

                    </tr>
                </thead>

                <tbody>
                    {% for alumno in alumnos %}
                        <tr>
                            <td>{{ alumno.id }}</td>
                            <td>{{ alumno.nombre }}</td>
                            <td>{{ alumno.apellidos }}</td>
                            <td>{{ alumno.curso.nombre }}</td>
                            <td>{% for actividadExtra in alumno.actividadesExtra %}
                                {% if loop.last == true %}
                                    {{ actividadExtra.nombre }}
                                {% else %}
                                    {{ actividadExtra.nombre }},
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td class=\"accion\"><a class=\"btn btn-info\" href=\"{{ path('editar_alumno', {'id': alumno.id}) }}\">Editar Alumno</a>
                            <a class=\"btn btn-danger\" href=\"{{ path('eliminar_alumno_lista', {'id': alumno.id}) }}\">Eliminar Alumno</a></td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <a class=\"btn btn-primary\" href=\"{{ path('nuevo_alumno') }}\">Nuevo Alumno</a>



                <div class=\"paginacion\">

                    {% if pagina != 1 %} 
                      <a href=\"{{ path('lista_alumno') }}/1\"> << &nbsp</a>
                      <a href=\"{{ path('lista_alumno') }}/{{ pagina-1 }}\">&nbsp < &nbsp</a>
                    {% endif %}
                    
                    {% for i in 1..totalPaginas %}
                                                  
                         <a href=\"{{ path('lista_alumno') }}/{{ i }}\">&nbsp{{ i }}&nbsp</a>
                          
                    {% endfor %}
                    
                    
                    {% if pagina != totalPaginas %}                            
                      <a href=\"{{ path('lista_alumno') }}/{{ pagina+1 }}\">&nbsp > &nbsp</a>
                      <a href=\"{{ path('lista_alumno') }}/{{ totalPaginas }}\">&nbsp >> &nbsp</a>
                    {% endif %}
                    
                         

                </div>
            </div>

        </main>

        {% endblock %}", "AppBundle:Alumno:lista_alumno.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Alumno/lista_alumno.html.twig");
    }
}
