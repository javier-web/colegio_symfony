<?php

/* AppBundle:Default:base.html.twig */
class __TwigTemplate_c588cb253dacda6cef06af9ba745e803e80d357606f4b5119304041a72dd3cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab551e116f8109d2bd40d499fae7386738f62ded62824a8cef241e6dca54ded7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab551e116f8109d2bd40d499fae7386738f62ded62824a8cef241e6dca54ded7->enter($__internal_ab551e116f8109d2bd40d499fae7386738f62ded62824a8cef241e6dca54ded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:base.html.twig"));

        $__internal_020a01eccb1f2f499a48cae195f42db1e457ac76c8064d055072b556f26dbd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020a01eccb1f2f499a48cae195f42db1e457ac76c8064d055072b556f26dbd4c->enter($__internal_020a01eccb1f2f499a48cae195f42db1e457ac76c8064d055072b556f26dbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:base.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>


<html lang=\"es\">
    <head>
        <title>Colegio Symfony</title>
        <link rel=\"stylesheet\" href=\"/css/resume_head_foot.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css\" />

        <meta charset=\"UTF-8\"/>
        <meta name=\"description\" content=\"colegio en symfony\"/>
        <meta name=\"keywords\" content=\"colegio en symfony\"/>
        <meta name=\"author\" content=\"javier\" />

    </head>

    <body>

        <header>
            <div id=\"cabecera\">
                <div id=\"principal\">
                    <!--fecha dinamica-->
                    <div id=\"date\">
                        <color=#000000><script language=\"JavaScript\">
                            function fecha() {
                                fecha = new Date()
                                mes = fecha.getMonth()
                                diaMes = fecha.getDate()
                                diaSemana = fecha.getDay()
                                anio = fecha.getFullYear()
                                dias = new Array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado')
                                meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
                                document.write('<span id=\"fecha\">')
                                document.write(dias[diaSemana] + \", \" + diaMes + \" de \" + meses[mes] + \" de \" + anio)
                                document.write('</span>')
                            }
                            </script> 
                            <style type=\"text/css\">  
                                <!-- 
                                #fecha { 
                                    font-family: Tahoma, Verdana, Arial; 
                                    font-size: 12px; 
                                    color: silver; 
                                    background :  
                                } 
                                --> 
                            </style>  
                            <script language=\"JavaScript\">
                                function hora() {
                                    var fecha = new Date()
                                    var hora = fecha.getHours()
                                    var minuto = fecha.getMinutes()
                                    var segundo = fecha.getSeconds()
                                    if (hora < 10) {
                                        hora = \"0\" + hora
                                    }
                                    if (minuto < 10) {
                                        minuto = \"0\" + minuto
                                    }
                                    if (segundo < 10) {
                                        segundo = \"0\" + segundo
                                    }
                                    var horita = hora + \":\" + minuto + \":\" + segundo
                                    document.getElementById('hora').firstChild.nodeValue = horita
                                    tiempo = setTimeout('hora()', 1000)
                                }
                                function inicio() {
                                    document.write('<span id=\"hora\">')
                                    document.write('000000</span>')
                                    hora()
                                }
                            </script> 
                            <style type=\"text/css\">  
                                <!-- 
                                #hora { 
                                    width:100px; 
                                    font-family: Tahoma, Verdana, Arial; 
                                    font-size: 12px; 
                                    color: silver; 
                                    background :  
                                } 
                                --> 
                            </style>    
                            <div align=\"right\">  
                                <b><script>fecha()</script></b></div> 
                            <div align=\"right\"> 
                                <b><script>inicio()</script></b></div></color>
                    </div>
                    <!--fin fecha dinamica-->

                    <!--Logo-->
                    <a data-fancybox=\"gallery\" href=\"/images/colegio.jpeg\">
                        <img id=\"logo\" img src=\"/images/colegio.jpeg\" title=\"Colegio\" alt=\"Colegio\">
                    </a>
                    <a href=\"#footer3\">
                        <img id=\"nombre\" img src=\"/images/JCCM-2017.png\" title=\"C.E.I.P La Paloma\" alt=\"C.E.I.P La Paloma\">
                    </a>
                    <!--fin logo-->

                    <!--img id=\"header\"img img src=\"../Headers/Header_azul2.png\" en css-->

                </div>
                <!--barra de navegacion-->

                <nav>

                    <ul>
                        <li class=\"submenu\">
                            <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
        echo "\" class=\"dropbtn\"  style=\"background: #A31621\">Alumno</a>
                            <div class=\"submenu-content\">
                                <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
        echo "\">Lista Alumnos</a>
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_alumno");
        echo "\">Nuevo Alumno</a>
                            </div>
                        </li>

                        <li class=\"submenu\">
                            <a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_curso");
        echo "\" class=\"dropbtn\">Curso</a>
                            <div class=\"submenu-content\">
                                <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_curso");
        echo "\">Lista Cursos</a>
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_curso");
        echo "\">Nuevo Curso</a>
                            </div>
                        </li>

                        <li class=\"submenu\">
                            <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_actividadextra");
        echo "\" class=\"dropbtn\">Actividad Extra</a>
                            <div class=\"submenu-content\">
                                <a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_actividadextra");
        echo "\">Lista Actividades Extra</a>
                                <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_actividadextra");
        echo "\">Nueva Actividad Extra</a>
                            </div>
                        </li>
                        
                    </ul>


                </nav>
            </div>
        </header>

        <main>


            <br>
            <section>
                ";
        // line 147
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "
            </section>
            <div style=\"clear: both\"><br><br><br><br><br></div>
        </main>


        <footer>
            <div id=\"contenido_footer\">
                <div id=\"logo_footer\">
                    <!--<img id=\"name\" src=\"imagenes/nombre/nombre000_transparent.png\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández Ruiz\">-->
                    <!--<img id=\"name\" src=\"imagenes/Fotos cv/Captura2.png\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández Ruiz\">
                    <a data-fancybox=\"gallery\" href=\"/images/Captura2.PNG\">
                        <img id=\"name\" img src=\"imagenes/Fotos cv/Captura2.PNG\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández\">
                    </a>-->
                </div>
                <div id=\"footer_tot\">
                    <div id=\"footer1\">
                        <h3 class=\"title_foot\">Mapa del sitio web:</h3>
                        <ul id=\"text_foot\">
                            <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_alumno");
        echo "\">Lista Alumnos</a></li>
                            <li><a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_alumno");
        echo "\">Nuevo Alumno</a></li>
                            <li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_curso");
        echo "\">Lista Cursos</a></li>
                            <li><a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_curso");
        echo "\">Nuevo Curso</a></li>
                            <li><a href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_actividadextra");
        echo "\">Lista Actividades Extra</a></li>
                            <li><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_actividadextra");
        echo "\">Nueva Actividad Extra</a></li>
                            
                        </ul>
                    </div>

                    <div id=\"footer2\">
                        <h3 class=\"title_foot\">Redes sociales:</h3>

                        <div id=\"redes\">
                            <a href=\"https://web.telegram.org\" target=\"_blank\"><i class=\"fa fa-telegram fa-3x\" aria-hidden=\"true\"></i></a>
                            <a href=\"http://ceip-lapaloma.centros.castillalamancha.es/\" target=\"_blank\"><i class=\"fa fa fa-linkedin-square fa-3x\" aria-hidden=\"true\"></i></a>
                            <a href=\"https://web.whatsapp.com\" target=\"_blank\"><i class=\"fa fa-whatsapp fa-3x\" aria-hidden=\"true\"></i></a>
                        </div>

                    </div>

                    <div id=\"footer3\">
                        <h3 class=\"title_foot\">Contacto:</h3>

                        <div class=\"contacto_footer\">

                            <ul class=\"fa-ul\">
                                <li style=\"margin-left: -40px; font-size: 17px\">
                                    <p>CEIP La Paloma</p>
                                </li>
                                <li>
                                    <i class=\"fa fa-li fa-map-marker fa-2x\"></i>
                                    Calle Gonzalo Torrente Ballester, s/n<br>
                                    19200 Azuqueca de Henares<br>
                                    Guadalajara (ESPAÑA)
                                </li>
                                <li><i class=\"fa fa-li fa-phone fa-2x\" style=\"line-height: 20px\"></i>
                                    <a href=\"#+949249260\" target=\"_blank\"><strong>949 24 91 93</strong></a>
                                </li> 
                                <li><i class=\"fa fa-li fa-envelope fa-2x\" style=\"line-height: 20px\"></i>
                                    <a href=\"mailto:19008095.cp@edu.jccm.es\" target=\"_blank\">19008095.cp@edu.jccm.es</a>
                                </li> 
                            </ul>

                        </div>

                    </div>

                </div>\t\t

                <div id=\"footer4\">
                    <p id=\"title_footer1\">Diseño y programación de página web: <strong>Javier Fernández Ruiz</strong></p>

                </div>
            </div>
        </footer>


        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js\"></script>

  
        <script>
            \$(document).ready(function () {
                \$('#example').dataTable({
                    \"language\": {
                        \"url\": \"https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json\"
                    },
                    \"lengthMenu\": [ 1, 2, 3, 5, 10, 20 ]
                });
            });
        </script>        


        <script src=\"\"></script>

        <script>
                                    \$(function () {
                                        \$('.sub').accordion({
                                            collapsible: true
                                        });
                                    });
        </script>



    </body>
</html>
";
        
        $__internal_ab551e116f8109d2bd40d499fae7386738f62ded62824a8cef241e6dca54ded7->leave($__internal_ab551e116f8109d2bd40d499fae7386738f62ded62824a8cef241e6dca54ded7_prof);

        
        $__internal_020a01eccb1f2f499a48cae195f42db1e457ac76c8064d055072b556f26dbd4c->leave($__internal_020a01eccb1f2f499a48cae195f42db1e457ac76c8064d055072b556f26dbd4c_prof);

    }

    // line 147
    public function block_main($context, array $blocks = array())
    {
        $__internal_e4e10f8cefe43ef4d5578020ab7013e6b0b78c73de8903a96cc01b82c94dc205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e10f8cefe43ef4d5578020ab7013e6b0b78c73de8903a96cc01b82c94dc205->enter($__internal_e4e10f8cefe43ef4d5578020ab7013e6b0b78c73de8903a96cc01b82c94dc205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_701997af00406becc72c06c76b2a6cce32bb66fa7caa22d4027cb2a56b3c1ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701997af00406becc72c06c76b2a6cce32bb66fa7caa22d4027cb2a56b3c1ea5->enter($__internal_701997af00406becc72c06c76b2a6cce32bb66fa7caa22d4027cb2a56b3c1ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 148
        echo "                ";
        
        $__internal_701997af00406becc72c06c76b2a6cce32bb66fa7caa22d4027cb2a56b3c1ea5->leave($__internal_701997af00406becc72c06c76b2a6cce32bb66fa7caa22d4027cb2a56b3c1ea5_prof);

        
        $__internal_e4e10f8cefe43ef4d5578020ab7013e6b0b78c73de8903a96cc01b82c94dc205->leave($__internal_e4e10f8cefe43ef4d5578020ab7013e6b0b78c73de8903a96cc01b82c94dc205_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 148,  342 => 147,  244 => 173,  240 => 172,  236 => 171,  232 => 170,  228 => 169,  224 => 168,  203 => 149,  201 => 147,  182 => 131,  178 => 130,  173 => 128,  165 => 123,  161 => 122,  156 => 120,  148 => 115,  144 => 114,  139 => 112,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿<!DOCTYPE html>


<html lang=\"es\">
    <head>
        <title>Colegio Symfony</title>
        <link rel=\"stylesheet\" href=\"/css/resume_head_foot.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css\" />

        <meta charset=\"UTF-8\"/>
        <meta name=\"description\" content=\"colegio en symfony\"/>
        <meta name=\"keywords\" content=\"colegio en symfony\"/>
        <meta name=\"author\" content=\"javier\" />

    </head>

    <body>

        <header>
            <div id=\"cabecera\">
                <div id=\"principal\">
                    <!--fecha dinamica-->
                    <div id=\"date\">
                        <color=#000000><script language=\"JavaScript\">
                            function fecha() {
                                fecha = new Date()
                                mes = fecha.getMonth()
                                diaMes = fecha.getDate()
                                diaSemana = fecha.getDay()
                                anio = fecha.getFullYear()
                                dias = new Array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado')
                                meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
                                document.write('<span id=\"fecha\">')
                                document.write(dias[diaSemana] + \", \" + diaMes + \" de \" + meses[mes] + \" de \" + anio)
                                document.write('</span>')
                            }
                            </script> 
                            <style type=\"text/css\">  
                                <!-- 
                                #fecha { 
                                    font-family: Tahoma, Verdana, Arial; 
                                    font-size: 12px; 
                                    color: silver; 
                                    background :  
                                } 
                                --> 
                            </style>  
                            <script language=\"JavaScript\">
                                function hora() {
                                    var fecha = new Date()
                                    var hora = fecha.getHours()
                                    var minuto = fecha.getMinutes()
                                    var segundo = fecha.getSeconds()
                                    if (hora < 10) {
                                        hora = \"0\" + hora
                                    }
                                    if (minuto < 10) {
                                        minuto = \"0\" + minuto
                                    }
                                    if (segundo < 10) {
                                        segundo = \"0\" + segundo
                                    }
                                    var horita = hora + \":\" + minuto + \":\" + segundo
                                    document.getElementById('hora').firstChild.nodeValue = horita
                                    tiempo = setTimeout('hora()', 1000)
                                }
                                function inicio() {
                                    document.write('<span id=\"hora\">')
                                    document.write('000000</span>')
                                    hora()
                                }
                            </script> 
                            <style type=\"text/css\">  
                                <!-- 
                                #hora { 
                                    width:100px; 
                                    font-family: Tahoma, Verdana, Arial; 
                                    font-size: 12px; 
                                    color: silver; 
                                    background :  
                                } 
                                --> 
                            </style>    
                            <div align=\"right\">  
                                <b><script>fecha()</script></b></div> 
                            <div align=\"right\"> 
                                <b><script>inicio()</script></b></div></color>
                    </div>
                    <!--fin fecha dinamica-->

                    <!--Logo-->
                    <a data-fancybox=\"gallery\" href=\"/images/colegio.jpeg\">
                        <img id=\"logo\" img src=\"/images/colegio.jpeg\" title=\"Colegio\" alt=\"Colegio\">
                    </a>
                    <a href=\"#footer3\">
                        <img id=\"nombre\" img src=\"/images/JCCM-2017.png\" title=\"C.E.I.P La Paloma\" alt=\"C.E.I.P La Paloma\">
                    </a>
                    <!--fin logo-->

                    <!--img id=\"header\"img img src=\"../Headers/Header_azul2.png\" en css-->

                </div>
                <!--barra de navegacion-->

                <nav>

                    <ul>
                        <li class=\"submenu\">
                            <a href=\"{{ path('lista_alumno') }}\" class=\"dropbtn\"  style=\"background: #A31621\">Alumno</a>
                            <div class=\"submenu-content\">
                                <a href=\"{{ path('lista_alumno') }}\">Lista Alumnos</a>
                                <a href=\"{{ path('nuevo_alumno') }}\">Nuevo Alumno</a>
                            </div>
                        </li>

                        <li class=\"submenu\">
                            <a href=\"{{ path('lista_curso') }}\" class=\"dropbtn\">Curso</a>
                            <div class=\"submenu-content\">
                                <a href=\"{{ path('lista_curso') }}\">Lista Cursos</a>
                                <a href=\"{{ path('nuevo_curso') }}\">Nuevo Curso</a>
                            </div>
                        </li>

                        <li class=\"submenu\">
                            <a href=\"{{ path('lista_actividadextra') }}\" class=\"dropbtn\">Actividad Extra</a>
                            <div class=\"submenu-content\">
                                <a href=\"{{ path('lista_actividadextra') }}\">Lista Actividades Extra</a>
                                <a href=\"{{ path('nueva_actividadextra') }}\">Nueva Actividad Extra</a>
                            </div>
                        </li>
                        
                    </ul>


                </nav>
            </div>
        </header>

        <main>


            <br>
            <section>
                {% block main %}
                {% endblock %}

            </section>
            <div style=\"clear: both\"><br><br><br><br><br></div>
        </main>


        <footer>
            <div id=\"contenido_footer\">
                <div id=\"logo_footer\">
                    <!--<img id=\"name\" src=\"imagenes/nombre/nombre000_transparent.png\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández Ruiz\">-->
                    <!--<img id=\"name\" src=\"imagenes/Fotos cv/Captura2.png\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández Ruiz\">
                    <a data-fancybox=\"gallery\" href=\"/images/Captura2.PNG\">
                        <img id=\"name\" img src=\"imagenes/Fotos cv/Captura2.PNG\" title=\"Javier Fernández Ruiz\" alt=\"Javier Fernández\">
                    </a>-->
                </div>
                <div id=\"footer_tot\">
                    <div id=\"footer1\">
                        <h3 class=\"title_foot\">Mapa del sitio web:</h3>
                        <ul id=\"text_foot\">
                            <li><a href=\"{{ path('lista_alumno') }}\">Lista Alumnos</a></li>
                            <li><a href=\"{{ path('nuevo_alumno') }}\">Nuevo Alumno</a></li>
                            <li><a href=\"{{ path('lista_curso') }}\">Lista Cursos</a></li>
                            <li><a href=\"{{ path('nuevo_curso') }}\">Nuevo Curso</a></li>
                            <li><a href=\"{{ path('lista_actividadextra') }}\">Lista Actividades Extra</a></li>
                            <li><a href=\"{{ path('nueva_actividadextra') }}\">Nueva Actividad Extra</a></li>
                            
                        </ul>
                    </div>

                    <div id=\"footer2\">
                        <h3 class=\"title_foot\">Redes sociales:</h3>

                        <div id=\"redes\">
                            <a href=\"https://web.telegram.org\" target=\"_blank\"><i class=\"fa fa-telegram fa-3x\" aria-hidden=\"true\"></i></a>
                            <a href=\"http://ceip-lapaloma.centros.castillalamancha.es/\" target=\"_blank\"><i class=\"fa fa fa-linkedin-square fa-3x\" aria-hidden=\"true\"></i></a>
                            <a href=\"https://web.whatsapp.com\" target=\"_blank\"><i class=\"fa fa-whatsapp fa-3x\" aria-hidden=\"true\"></i></a>
                        </div>

                    </div>

                    <div id=\"footer3\">
                        <h3 class=\"title_foot\">Contacto:</h3>

                        <div class=\"contacto_footer\">

                            <ul class=\"fa-ul\">
                                <li style=\"margin-left: -40px; font-size: 17px\">
                                    <p>CEIP La Paloma</p>
                                </li>
                                <li>
                                    <i class=\"fa fa-li fa-map-marker fa-2x\"></i>
                                    Calle Gonzalo Torrente Ballester, s/n<br>
                                    19200 Azuqueca de Henares<br>
                                    Guadalajara (ESPAÑA)
                                </li>
                                <li><i class=\"fa fa-li fa-phone fa-2x\" style=\"line-height: 20px\"></i>
                                    <a href=\"#+949249260\" target=\"_blank\"><strong>949 24 91 93</strong></a>
                                </li> 
                                <li><i class=\"fa fa-li fa-envelope fa-2x\" style=\"line-height: 20px\"></i>
                                    <a href=\"mailto:19008095.cp@edu.jccm.es\" target=\"_blank\">19008095.cp@edu.jccm.es</a>
                                </li> 
                            </ul>

                        </div>

                    </div>

                </div>\t\t

                <div id=\"footer4\">
                    <p id=\"title_footer1\">Diseño y programación de página web: <strong>Javier Fernández Ruiz</strong></p>

                </div>
            </div>
        </footer>


        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js\"></script>

  
        <script>
            \$(document).ready(function () {
                \$('#example').dataTable({
                    \"language\": {
                        \"url\": \"https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json\"
                    },
                    \"lengthMenu\": [ 1, 2, 3, 5, 10, 20 ]
                });
            });
        </script>        


        <script src=\"\"></script>

        <script>
                                    \$(function () {
                                        \$('.sub').accordion({
                                            collapsible: true
                                        });
                                    });
        </script>



    </body>
</html>
", "AppBundle:Default:base.html.twig", "/var/www/colegio_symfony/src/AppBundle/Resources/views/Default/base.html.twig");
    }
}
