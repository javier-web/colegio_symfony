<?php

/* AppBundle:Alumno:nuevo_alumno.html.twig */
class __TwigTemplate_3c91a62118eda016905cf240038e891dcaebc548a31bcb741262a9bc5dc09a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>FORMULARIO de nuevo ALUMNO</h3>

    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulario"] ?? null), 'form');
        echo "


";
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
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Alumno:nuevo_alumno.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Alumno/nuevo_alumno.html.twig");
    }
}
