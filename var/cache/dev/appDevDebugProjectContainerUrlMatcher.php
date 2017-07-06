<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/lista-a')) {
            // lista_actividadextra
            if ('/lista-actividadextra' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::listaActividadExtraAction',  '_route' => 'lista_actividadextra',);
            }

            // lista_alumno
            if (0 === strpos($pathinfo, '/lista-alumno') && preg_match('#^/lista\\-alumno(?:/(?P<pagina>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lista_alumno')), array (  'pagina' => 1,  '_controller' => 'AppBundle\\Controller\\AlumnoController::listaAlumnoAction',));
            }

            // lista_asignatura
            if ('/lista-asignatura' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AsignaturaController::listaAsignaturaAction',  '_route' => 'lista_asignatura',);
            }

        }

        // lista_curso
        if ('/lista-curso' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CursoController::listaCursoAction',  '_route' => 'lista_curso',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/eliminar-')) {
                if (0 === strpos($pathinfo, '/eliminar-a')) {
                    // eliminar_actividad_lista
                    if (0 === strpos($pathinfo, '/eliminar-actividad-lista') && preg_match('#^/eliminar\\-actividad\\-lista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_actividad_lista')), array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::eliminarActividadAction',));
                    }

                    // eliminar_actividad_editado
                    if (0 === strpos($pathinfo, '/eliminar-actividad-editado') && preg_match('#^/eliminar\\-actividad\\-editado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_actividad_editado')), array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::borrarActividadextraAction',));
                    }

                    // eliminar_alumno_lista
                    if (0 === strpos($pathinfo, '/eliminar-alumno-lista') && preg_match('#^/eliminar\\-alumno\\-lista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_alumno_lista')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::eliminarAlumnoAction',));
                    }

                    // eliminar_alumno_editado
                    if (0 === strpos($pathinfo, '/eliminar-alumno-editado') && preg_match('#^/eliminar\\-alumno\\-editado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_alumno_editado')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::borrarAlumnoAction',));
                    }

                    // eliminar_asignatura_lista
                    if (0 === strpos($pathinfo, '/eliminar-asignatura-lista') && preg_match('#^/eliminar\\-asignatura\\-lista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_asignatura_lista')), array (  '_controller' => 'AppBundle\\Controller\\AsignaturaController::eliminarAsignaturaAction',));
                    }

                    // eliminar_asignatura_editada
                    if (0 === strpos($pathinfo, '/eliminar-asignatura-editada') && preg_match('#^/eliminar\\-asignatura\\-editada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_asignatura_editada')), array (  '_controller' => 'AppBundle\\Controller\\AsignaturaController::borrarAsignaturaAction',));
                    }

                }

                // eliminar_curso_lista
                if (0 === strpos($pathinfo, '/eliminar-curso-lista') && preg_match('#^/eliminar\\-curso\\-lista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_curso_lista')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::eliminarCursoAction',));
                }

                // eliminar_curso_editado
                if (0 === strpos($pathinfo, '/eliminar-curso-editado') && preg_match('#^/eliminar\\-curso\\-editado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_curso_editado')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::borrarCursoAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/editar-a')) {
                // editar_actividadextra
                if (0 === strpos($pathinfo, '/editar-actividadextra') && preg_match('#^/editar\\-actividadextra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_actividadextra')), array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::editaractividadextraAction',));
                }

                // editar_alumno
                if (0 === strpos($pathinfo, '/editar-alumno') && preg_match('#^/editar\\-alumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_alumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::editarAlumnoAction',));
                }

                // editar_asignatura
                if (0 === strpos($pathinfo, '/editar-asignatura') && preg_match('#^/editar\\-asignatura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_asignatura')), array (  '_controller' => 'AppBundle\\Controller\\AsignaturaController::editarAsignaturaAction',));
                }

            }

            // editar_curso
            if (0 === strpos($pathinfo, '/editar-curso') && preg_match('#^/editar\\-curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_curso')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::editarCursoAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/nuev')) {
            // nueva_actividadextra
            if ('/nueva-actividadextra' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::nuevoActividadextraAction',  '_route' => 'nueva_actividadextra',);
            }

            // nueva_asignatura
            if ('/nueva-asignatura' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AsignaturaController::nuevoAsignaturaAction',  '_route' => 'nueva_asignatura',);
            }

            // nuevo_alumno
            if ('/nuevo-alumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::nuevoAlumnoAction',  '_route' => 'nuevo_alumno',);
            }

            // nuevo_curso
            if ('/nuevo-curso' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CursoController::nuevoCursoAction',  '_route' => 'nuevo_curso',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
