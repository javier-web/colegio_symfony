<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce990c955848555cd57cc2557d965580679412cde575678b0ec60463cda29eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce990c955848555cd57cc2557d965580679412cde575678b0ec60463cda29eeb->enter($__internal_ce990c955848555cd57cc2557d965580679412cde575678b0ec60463cda29eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ad2402b2779b6681520624925afdc592005bbc86e29ef06d62ef63a4abe8fa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2402b2779b6681520624925afdc592005bbc86e29ef06d62ef63a4abe8fa2d->enter($__internal_ad2402b2779b6681520624925afdc592005bbc86e29ef06d62ef63a4abe8fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ce990c955848555cd57cc2557d965580679412cde575678b0ec60463cda29eeb->leave($__internal_ce990c955848555cd57cc2557d965580679412cde575678b0ec60463cda29eeb_prof);

        
        $__internal_ad2402b2779b6681520624925afdc592005bbc86e29ef06d62ef63a4abe8fa2d->leave($__internal_ad2402b2779b6681520624925afdc592005bbc86e29ef06d62ef63a4abe8fa2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_368f82a14bd12aaee823954acec583ac1190d3c448a165c0f21f1ae9093ceddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368f82a14bd12aaee823954acec583ac1190d3c448a165c0f21f1ae9093ceddb->enter($__internal_368f82a14bd12aaee823954acec583ac1190d3c448a165c0f21f1ae9093ceddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0768fe7b74195814dea282fd58003da297bca97493581d6a2fd8db8289ee0c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0768fe7b74195814dea282fd58003da297bca97493581d6a2fd8db8289ee0c7a->enter($__internal_0768fe7b74195814dea282fd58003da297bca97493581d6a2fd8db8289ee0c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0768fe7b74195814dea282fd58003da297bca97493581d6a2fd8db8289ee0c7a->leave($__internal_0768fe7b74195814dea282fd58003da297bca97493581d6a2fd8db8289ee0c7a_prof);

        
        $__internal_368f82a14bd12aaee823954acec583ac1190d3c448a165c0f21f1ae9093ceddb->leave($__internal_368f82a14bd12aaee823954acec583ac1190d3c448a165c0f21f1ae9093ceddb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_95fd74cb3f4cd4712b9d1df66e8dddff6346eadb4287914a942ff5886afa11f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fd74cb3f4cd4712b9d1df66e8dddff6346eadb4287914a942ff5886afa11f4->enter($__internal_95fd74cb3f4cd4712b9d1df66e8dddff6346eadb4287914a942ff5886afa11f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_785d548fe0829772ce90b7dedc524f1087f91cb199f5ab841c2ec9742e1428e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d548fe0829772ce90b7dedc524f1087f91cb199f5ab841c2ec9742e1428e6->enter($__internal_785d548fe0829772ce90b7dedc524f1087f91cb199f5ab841c2ec9742e1428e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_785d548fe0829772ce90b7dedc524f1087f91cb199f5ab841c2ec9742e1428e6->leave($__internal_785d548fe0829772ce90b7dedc524f1087f91cb199f5ab841c2ec9742e1428e6_prof);

        
        $__internal_95fd74cb3f4cd4712b9d1df66e8dddff6346eadb4287914a942ff5886afa11f4->leave($__internal_95fd74cb3f4cd4712b9d1df66e8dddff6346eadb4287914a942ff5886afa11f4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e23def7870cf63628e4ab26233317d4bcfc340ee6b72676870eb52265321f295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23def7870cf63628e4ab26233317d4bcfc340ee6b72676870eb52265321f295->enter($__internal_e23def7870cf63628e4ab26233317d4bcfc340ee6b72676870eb52265321f295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3655cadedd0add5705978918827885b1bf9880b2fc3db860b75079e292070ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655cadedd0add5705978918827885b1bf9880b2fc3db860b75079e292070ef8->enter($__internal_3655cadedd0add5705978918827885b1bf9880b2fc3db860b75079e292070ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3655cadedd0add5705978918827885b1bf9880b2fc3db860b75079e292070ef8->leave($__internal_3655cadedd0add5705978918827885b1bf9880b2fc3db860b75079e292070ef8_prof);

        
        $__internal_e23def7870cf63628e4ab26233317d4bcfc340ee6b72676870eb52265321f295->leave($__internal_e23def7870cf63628e4ab26233317d4bcfc340ee6b72676870eb52265321f295_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/colegio_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
