<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/lista-')) {
            // lista_actividadextra
            if ('/lista-actividadextra' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::listaCursoAction',  '_route' => 'lista_actividadextra',);
            }

            // lista_alumno
            if ('/lista-alumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::listaAlumnoAction',  '_route' => 'lista_alumno',);
            }

            // lista_curso
            if ('/lista-curso' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CursoController::listaCursoAction',  '_route' => 'lista_curso',);
            }

        }

        elseif (0 === strpos($pathinfo, '/nuev')) {
            // nueva_actividadextra
            if ('/nueva-actividadextra' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::nuevoactividadextraAction',  '_route' => 'nueva_actividadextra',);
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

        elseif (0 === strpos($pathinfo, '/editar-')) {
            // editar_actividadextra
            if (0 === strpos($pathinfo, '/editar-actividadextra') && preg_match('#^/editar\\-actividadextra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_actividadextra')), array (  '_controller' => 'AppBundle\\Controller\\ActividadExtraController::editaractividadextraAction',));
            }

            // editar_alumno
            if (0 === strpos($pathinfo, '/editar-alumno') && preg_match('#^/editar\\-alumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_alumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::editarAlumnoAction',));
            }

            // editar_curso
            if (0 === strpos($pathinfo, '/editar-curso') && preg_match('#^/editar\\-curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_curso')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::editarCursoAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
