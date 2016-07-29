<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // incentives_cotizaciones_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'incentives_cotizaciones_homepage')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/solicitud')) {
            if (0 === strpos($pathinfo, '/solicitudes')) {
                // solicitudes
                if ($pathinfo === '/solicitudes') {
                    return array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::listadoAction',  '_route' => 'solicitudes',);
                }

                // solicitudes_nueva
                if ($pathinfo === '/solicitudes/nueva') {
                    return array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::nuevaAction',  '_route' => 'solicitudes_nueva',);
                }

                // solicitudes_datos
                if (0 === strpos($pathinfo, '/solicitudes/datos') && preg_match('#^/solicitudes/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_datos')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::datosAction',  'id' => NULL,));
                }

                // solicitudes_editar
                if (0 === strpos($pathinfo, '/solicitudes/editar') && preg_match('#^/solicitudes/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_editar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::editarAction',  'id' => NULL,));
                }

                if (0 === strpos($pathinfo, '/solicitudes/a')) {
                    // solicitudes_asignar
                    if (0 === strpos($pathinfo, '/solicitudes/asignar') && preg_match('#^/solicitudes/asignar(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_asignar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::asignarSolicitudAction',  'solicitud' => NULL,));
                    }

                    // solicitudes_archivos
                    if (0 === strpos($pathinfo, '/solicitudes/archivos') && preg_match('#^/solicitudes/archivos(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_archivos')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::agregarArchivoAction',  'solicitud' => NULL,));
                    }

                }

                // solicitudes_ordenesDespacho
                if (0 === strpos($pathinfo, '/solicitudes/ordenesDespacho') && preg_match('#^/solicitudes/ordenesDespacho(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_ordenesDespacho')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::agregarOrdenesDespachoAction',  'solicitud' => NULL,));
                }

                // solicitudes_cargardespachos
                if (0 === strpos($pathinfo, '/solicitudes/cargardespachos') && preg_match('#^/solicitudes/cargardespachos(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_cargardespachos')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::cargardespachosAction',  'solicitud' => NULL,));
                }

                // solicitudes_precotizacion
                if (0 === strpos($pathinfo, '/solicitudes/precotizacion') && preg_match('#^/solicitudes/precotizacion(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudes_precotizacion')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::agregarPrecotizacionAction',  'solicitud' => NULL,));
                }

            }

            // solicitud_archivo_estado
            if (0 === strpos($pathinfo, '/solicitud/archivo/estado') && preg_match('#^/solicitud/archivo/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_archivo_estado')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::archivoEstadoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/solicitud/c')) {
                // solicitud_cerrar
                if (0 === strpos($pathinfo, '/solicitud/cerrar') && preg_match('#^/solicitud/cerrar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_cerrar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::cerrarAction',  'id' => NULL,));
                }

                // solicitud_cancelar
                if (0 === strpos($pathinfo, '/solicitud/cancelar') && preg_match('#^/solicitud/cancelar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_cancelar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::cancelarAction',  'id' => NULL,));
                }

            }

            // solicitud_aceptar
            if (0 === strpos($pathinfo, '/solicitud/aceptar') && preg_match('#^/solicitud/aceptar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_aceptar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::aceptarAction',  'id' => NULL,));
            }

            // solicitud_observaciones
            if (0 === strpos($pathinfo, '/solicitud/observaciones') && preg_match('#^/solicitud/observaciones(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_observaciones')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\SolicitudesController::observacionesAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/cotizaciones')) {
            // cotizaciones
            if ($pathinfo === '/cotizaciones') {
                return array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::listadoAction',  '_route' => 'cotizaciones',);
            }

            // cotizaciones_nueva
            if (0 === strpos($pathinfo, '/cotizaciones/nueva') && preg_match('#^/cotizaciones/nueva(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_nueva')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::nuevaAction',  'solicitud' => NULL,));
            }

            // cotizaciones_datos
            if (0 === strpos($pathinfo, '/cotizaciones/datos') && preg_match('#^/cotizaciones/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_datos')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::datosAction',  'id' => NULL,));
            }

            // cotizaciones_editarvalores
            if (0 === strpos($pathinfo, '/cotizaciones/editarvalores') && preg_match('#^/cotizaciones/editarvalores(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_editarvalores')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::editarvaloresAction',  'id' => NULL,));
            }

            // cotizaciones_agregarproducto
            if (0 === strpos($pathinfo, '/cotizaciones/agregarproducto') && preg_match('#^/cotizaciones/agregarproducto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_agregarproducto')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::agregarproductoAction',  'id' => NULL,));
            }

            // cotizaciones_valores
            if (0 === strpos($pathinfo, '/cotizaciones/valores') && preg_match('#^/cotizaciones/valores(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_valores')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::valoresAction',  'id' => NULL,));
            }

            // cotizaciones_aprobar_producto
            if (0 === strpos($pathinfo, '/cotizaciones/aprobar') && preg_match('#^/cotizaciones/aprobar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_aprobar_producto')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::aprobarProductoAction',  'id' => NULL,));
            }

            // cotizaciones_rechazar_producto
            if (0 === strpos($pathinfo, '/cotizaciones/rechazar') && preg_match('#^/cotizaciones/rechazar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_rechazar_producto')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::rechazarProductoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/cotizaciones/e')) {
                // cotizaciones_eliminar_producto
                if (0 === strpos($pathinfo, '/cotizaciones/eliminarproducto') && preg_match('#^/cotizaciones/eliminarproducto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_eliminar_producto')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::eliminarProductoAction',  'id' => NULL,));
                }

                // cotizaciones_editar
                if (0 === strpos($pathinfo, '/cotizaciones/editar') && preg_match('#^/cotizaciones/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_editar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::editarAction',  'id' => NULL,));
                }

            }

            // cotizaciones_cancelar
            if (0 === strpos($pathinfo, '/cotizaciones/cancelar') && preg_match('#^/cotizaciones/cancelar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_cancelar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::cancelarAction',  'id' => NULL,));
            }

            // cotizaciones_finalizar
            if (0 === strpos($pathinfo, '/cotizaciones/finalizar') && preg_match('#^/cotizaciones/finalizar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_finalizar')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::finalizarAction',  'id' => NULL,));
            }

            // cotizaciones_pdf
            if (0 === strpos($pathinfo, '/cotizaciones/pdf') && preg_match('#^/cotizaciones/pdf(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotizaciones_pdf')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\CotizacionesController::pdfAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/requisiciones')) {
            // requisiciones
            if ($pathinfo === '/requisiciones') {
                return array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\RequisicionesController::listadoAction',  '_route' => 'requisiciones',);
            }

            // requisiciones_nueva
            if (0 === strpos($pathinfo, '/requisiciones/nueva') && preg_match('#^/requisiciones/nueva(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisiciones_nueva')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\RequisicionesController::nuevaAction',  'solicitud' => NULL,));
            }

            // requisiciones_datos
            if (0 === strpos($pathinfo, '/requisiciones/datos') && preg_match('#^/requisiciones/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisiciones_datos')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\RequisicionesController::datosAction',  'id' => NULL,));
            }

            // requisiciones_agregarproducto
            if (0 === strpos($pathinfo, '/requisiciones/agregarproducto') && preg_match('#^/requisiciones/agregarproducto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisiciones_agregarproducto')), array (  '_controller' => 'Incentives\\SolicitudesBundle\\Controller\\RequisicionesController::agregarproductoAction',  'id' => NULL,));
            }

        }

        // incentives_ordenes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'incentives_ordenes_homepage')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/orden')) {
            if (0 === strpos($pathinfo, '/ordenes')) {
                // ordenes
                if ($pathinfo === '/ordenes') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::listadoAction',  '_route' => 'ordenes',);
                }

                if (0 === strpos($pathinfo, '/ordenes/nueva')) {
                    // ordenes_nueva
                    if ($pathinfo === '/ordenes/nueva') {
                        return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::nuevaAction',  '_route' => 'ordenes_nueva',);
                    }

                    // ordenes_nueva_solicitud
                    if (0 === strpos($pathinfo, '/ordenes/nuevasolicitud') && preg_match('#^/ordenes/nuevasolicitud(?:/(?P<solicitudId>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_nueva_solicitud')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::nuevaOrdenSolicitudAction',  'solicitudId' => NULL,));
                    }

                }

                // ordenes_datos
                if (0 === strpos($pathinfo, '/ordenes/datos') && preg_match('#^/ordenes/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_datos')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::datosAction',  'id' => NULL,));
                }

                // ordenes_editar
                if (0 === strpos($pathinfo, '/ordenes/editar') && preg_match('#^/ordenes/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_editar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::editarAction',  'id' => NULL,));
                }

                // ordenes_recibir
                if (0 === strpos($pathinfo, '/ordenes/recibir') && preg_match('#^/ordenes/recibir(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_recibir')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::verificarAction',  'id' => NULL,));
                }

                // ordenes_estado
                if (0 === strpos($pathinfo, '/ordenes/estado') && preg_match('#^/ordenes/estado(?:/(?P<id>[^/]++)(?:/(?P<cierre>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_estado')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::estadoAction',  'id' => NULL,  'cierre' => NULL,));
                }

                if (0 === strpos($pathinfo, '/ordenes/pdf')) {
                    // ordenes_pdf
                    if (preg_match('#^/ordenes/pdf(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_pdf')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::pdfAction',  'id' => NULL,));
                    }

                    // ordenes_pdfcodes
                    if (0 === strpos($pathinfo, '/ordenes/pdfcodes') && preg_match('#^/ordenes/pdfcodes(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_pdfcodes')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::pdfCodesAction',  'id' => NULL,));
                    }

                }

                // ordenes_total
                if (0 === strpos($pathinfo, '/ordenes/total') && preg_match('#^/ordenes/total(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_total')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::totalordenAction',  'id' => NULL,));
                }

                // ordenes_correo
                if (0 === strpos($pathinfo, '/ordenes/correo') && preg_match('#^/ordenes/correo(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_correo')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::correoAction',  'id' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/ordenredencion')) {
                if (0 === strpos($pathinfo, '/ordenredencion/generar')) {
                    // ordenredencion_generar
                    if ($pathinfo === '/ordenredencion/generar') {
                        return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::generarAction',  '_route' => 'ordenredencion_generar',);
                    }

                    // ordenredencion_generartotalpass
                    if (0 === strpos($pathinfo, '/ordenredencion/generartotalpass') && preg_match('#^/ordenredencion/generartotalpass(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_generartotalpass')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::generartotalpassAction',  'id' => NULL,));
                    }

                }

                // ordenredencion_totalpass
                if ($pathinfo === '/ordenredencion/totalpass') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::totalPassAction',  '_route' => 'ordenredencion_totalpass',);
                }

                // ordenredencion_aprobar
                if (0 === strpos($pathinfo, '/ordenredencion/aprobar') && preg_match('#^/ordenredencion/aprobar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_aprobar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::aprobarAction',  'id' => NULL,));
                }

                if (0 === strpos($pathinfo, '/ordenredencion/c')) {
                    // ordenredencion_cerrar
                    if (0 === strpos($pathinfo, '/ordenredencion/cerrar') && preg_match('#^/ordenredencion/cerrar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_cerrar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::cerrarAction',  'id' => NULL,));
                    }

                    // ordenredencion_cancelar
                    if (0 === strpos($pathinfo, '/ordenredencion/cancelar') && preg_match('#^/ordenredencion/cancelar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_cancelar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::cancelarAction',  'id' => NULL,));
                    }

                }

                // ordenredencion_pendientes
                if ($pathinfo === '/ordenredencion/pendientes') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::pendientesAction',  '_route' => 'ordenredencion_pendientes',);
                }

                // ordenredencion_editarvalores
                if (0 === strpos($pathinfo, '/ordenredencion/editarvalores') && preg_match('#^/ordenredencion/editarvalores(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_editarvalores')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::editarvaloresAction',  'id' => NULL,));
                }

                // ordenredencion_listadopendientes
                if (0 === strpos($pathinfo, '/ordenredencion/listadopendientes') && preg_match('#^/ordenredencion/listadopendientes(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_listadopendientes')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::listadopendientesAction',  'id' => NULL,));
                }

                // ordenredencion_valores
                if (0 === strpos($pathinfo, '/ordenredencion/valores') && preg_match('#^/ordenredencion/valores(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_valores')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::valoresAction',  'id' => NULL,));
                }

                if (0 === strpos($pathinfo, '/ordenredencion/pdf')) {
                    // ordenredencion_pdf
                    if (preg_match('#^/ordenredencion/pdf(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_pdf')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::pdfAction',  'id' => NULL,));
                    }

                    // ordenredencion_pdffinal
                    if (0 === strpos($pathinfo, '/ordenredencion/pdffinal') && preg_match('#^/ordenredencion/pdffinal(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_pdffinal')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::pdffinalAction',  'id' => NULL,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ordenes')) {
                if (0 === strpos($pathinfo, '/ordenes/ingreso')) {
                    // ordenes_ingreso_listado
                    if ($pathinfo === '/ordenes/ingreso/listado') {
                        return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::ingresolistadoAction',  '_route' => 'ordenes_ingreso_listado',);
                    }

                    // ordenes_ingreso
                    if (preg_match('#^/ordenes/ingreso(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_ingreso')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::ingresoAction',  'id' => NULL,));
                    }

                }

                // ordenes_ingreso_detalle
                if (0 === strpos($pathinfo, '/ordenes/detalleingreso') && preg_match('#^/ordenes/detalleingreso(?:/(?P<productoOrden>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_ingreso_detalle')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::detalleIngresoAction',  'productoOrden' => NULL,));
                }

                // ordenes_ingreso_redencion
                if (0 === strpos($pathinfo, '/ordenes/ingresoredencion') && preg_match('#^/ordenes/ingresoredencion(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_ingreso_redencion')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::ingresoRedencionAction',  'redencion' => NULL,));
                }

                // ordenes_agregarproducto
                if (0 === strpos($pathinfo, '/ordenes/agregarproducto') && preg_match('#^/ordenes/agregarproducto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_agregarproducto')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::agregarproductoAction',  'id' => NULL,));
                }

                // ordenes_producto_cotizaciones
                if (0 === strpos($pathinfo, '/ordenes/productocotizaciones') && preg_match('#^/ordenes/productocotizaciones(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_producto_cotizaciones')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::productoCotizacionesAction',  'id' => NULL,));
                }

                // ordenes_agregarproducto_cotizaciones
                if (0 === strpos($pathinfo, '/ordenes/agregarproductocotizaciones') && preg_match('#^/ordenes/agregarproductocotizaciones(?:/(?P<id>[^/]++)(?:/(?P<ordencompra>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_agregarproducto_cotizaciones')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::agregarProductoCotizacionesAction',  'id' => NULL,  'ordencompra' => NULL,));
                }

                // ordenes_procesarvalores
                if ($pathinfo === '/ordenes/procesarvalores') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::procesarvaloresAction',  '_route' => 'ordenes_procesarvalores',);
                }

                // ordenes_actualizarcantidad
                if (0 === strpos($pathinfo, '/ordenes/actualizarcantidad') && preg_match('#^/ordenes/actualizarcantidad(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_actualizarcantidad')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::actualizarCantidadAction',  'id' => NULL,));
                }

                // ordenes_cerrarorden
                if (0 === strpos($pathinfo, '/ordenes/cerrarorden') && preg_match('#^/ordenes/cerrarorden(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_cerrarorden')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::cerrarOrdenAction',  'id' => NULL,));
                }

                // ordenes_tracking
                if (0 === strpos($pathinfo, '/ordenes/tracking') && preg_match('#^/ordenes/tracking(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_tracking')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::trackingAction',  'id' => NULL,));
                }

            }

        }

        // tracking_reporte
        if ($pathinfo === '/tracking/reporte') {
            return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::trackingReporteAction',  '_route' => 'tracking_reporte',);
        }

        if (0 === strpos($pathinfo, '/orden')) {
            if (0 === strpos($pathinfo, '/ordenredencion/eliminar')) {
                // ordenredencion_eliminar
                if (preg_match('#^/ordenredencion/eliminar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_eliminar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::eliminarProductoAction',  'id' => NULL,));
                }

                // ordenredencion_eliminarred
                if (0 === strpos($pathinfo, '/ordenredencion/eliminarred') && preg_match('#^/ordenredencion/eliminarred(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenredencion_eliminarred')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::eliminarRedencionAction',  'id' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/ordenes')) {
                // ordenes_generarsegmentado
                if ($pathinfo === '/ordenes/generarsegmentado') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::generarSegmentadoAction',  '_route' => 'ordenes_generarsegmentado',);
                }

                if (0 === strpos($pathinfo, '/ordenes/detalle')) {
                    // ordenes_detallesegmentado
                    if (0 === strpos($pathinfo, '/ordenes/detallesegmentado') && preg_match('#^/ordenes/detallesegmentado(?:/(?P<id>[^/]++)(?:/(?P<categoria>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_detallesegmentado')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenRedencionController::detalleSegmentadoAction',  'id' => NULL,  'categoria' => NULL,));
                    }

                    if (0 === strpos($pathinfo, '/ordenes/detalleproducto')) {
                        // ordenes_productoorden_detalle
                        if (0 === strpos($pathinfo, '/ordenes/detalleproductoorden') && preg_match('#^/ordenes/detalleproductoorden(?:/(?P<productoOrden>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_productoorden_detalle')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::detalleProductoOrdenAction',  'productoOrden' => NULL,));
                        }

                        // ordenes_productorequisicion_detalle
                        if (0 === strpos($pathinfo, '/ordenes/detalleproductorequisicion') && preg_match('#^/ordenes/detalleproductorequisicion(?:/(?P<productoOrden>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_productorequisicion_detalle')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::detalleProductoRequisicionAction',  'productoOrden' => NULL,));
                        }

                    }

                }

                // ordenes_productoorden_editar
                if (0 === strpos($pathinfo, '/ordenes/editarproductoorden') && preg_match('#^/ordenes/editarproductoorden(?:/(?P<productoOrden>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordenes_productoorden_editar')), array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::editarProductoOrdenAction',  'productoOrden' => NULL,));
                }

                // ordenes_reporteamazon
                if ($pathinfo === '/ordenes/reporteamazon') {
                    return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::reporteAmazonAction',  '_route' => 'ordenes_reporteamazon',);
                }

                if (0 === strpos($pathinfo, '/ordenes/exportar')) {
                    // ordenes_exportar
                    if ($pathinfo === '/ordenes/exportar') {
                        return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::exportarAction',  '_route' => 'ordenes_exportar',);
                    }

                    // ordenes_exportar_productos
                    if ($pathinfo === '/ordenes/exportarproductos') {
                        return array (  '_controller' => 'Incentives\\OrdenesBundle\\Controller\\OrdenesController::exportarProductosAction',  '_route' => 'ordenes_exportar_productos',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/facturacion')) {
            if (0 === strpos($pathinfo, '/facturacion/presupuesto')) {
                // presupuesto_listado
                if ($pathinfo === '/facturacion/presupuesto/listado') {
                    return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\PresupuestoController::listadoAction',  '_route' => 'presupuesto_listado',);
                }

                // presupuesto_detalle
                if (0 === strpos($pathinfo, '/facturacion/presupuesto/detalle') && preg_match('#^/facturacion/presupuesto/detalle(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'presupuesto_detalle')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\PresupuestoController::detalleAction',  'id' => NULL,));
                }

                // presupuesto_editar
                if (0 === strpos($pathinfo, '/facturacion/presupuesto/editar') && preg_match('#^/facturacion/presupuesto/editar(?:/(?P<programa>\\d+)(?:/(?P<area>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'presupuesto_editar')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\PresupuestoController::editarAction',  'programa' => NULL,  'area' => NULL,));
                }

            }

            // presupuesto_reportes
            if ($pathinfo === '/facturacion/reportes/listado') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\ReportesController::listadoAction',  '_route' => 'presupuesto_reportes',);
            }

            // facturacion_listado
            if ($pathinfo === '/facturacion/listado') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::listadoAction',  '_route' => 'facturacion_listado',);
            }

            if (0 === strpos($pathinfo, '/facturacion/factura')) {
                // facturas_listado
                if (0 === strpos($pathinfo, '/facturacion/factura/listado') && preg_match('#^/facturacion/factura/listado(?:/(?P<programa>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturas_listado')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::facturasprogramaAction',  'programa' => NULL,));
                }

                // factura_nueva
                if (0 === strpos($pathinfo, '/facturacion/factura/nueva') && preg_match('#^/facturacion/factura/nueva(?:/(?P<programa>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_nueva')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::nuevaAction',  'programa' => NULL,));
                }

                // factura_generarnueva
                if (0 === strpos($pathinfo, '/facturacion/factura/generar') && preg_match('#^/facturacion/factura/generar(?:/(?P<programa>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_generarnueva')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::generarNuevaAction',  'programa' => NULL,));
                }

                // factura_datos
                if (0 === strpos($pathinfo, '/facturacion/factura/datos') && preg_match('#^/facturacion/factura/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_datos')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::datosAction',  'id' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/facturacion/generar')) {
                // generarfactura_premios
                if (0 === strpos($pathinfo, '/facturacion/generar/premios') && preg_match('#^/facturacion/generar/premios(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generarfactura_premios')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::generarpremiosAction',  'id' => NULL,));
                }

                // factura_generar
                if (preg_match('#^/facturacion/generar(?:/(?P<id>\\d+)(?:/(?P<periodo>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_generar')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::generarAction',  'id' => NULL,  'periodo' => NULL,));
                }

            }

            // factura_pdf
            if (0 === strpos($pathinfo, '/facturacion/pdf') && preg_match('#^/facturacion/pdf(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_pdf')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::pdfAction',  'id' => NULL,));
            }

            // factura_detallepremios
            if (0 === strpos($pathinfo, '/facturacion/detallepremios') && preg_match('#^/facturacion/detallepremios(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_detallepremios')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::detallePremiosAction',  'id' => NULL,));
            }

            // factura_agregarlogistica
            if (0 === strpos($pathinfo, '/facturacion/agregarlogistica') && preg_match('#^/facturacion/agregarlogistica(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_agregarlogistica')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::agregarLogisticaAction',  'id' => NULL,));
            }

            // factura_generarsegmentado
            if ($pathinfo === '/facturacion/generarsegmentado') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::generarSegmentadoAction',  '_route' => 'factura_generarsegmentado',);
            }

            if (0 === strpos($pathinfo, '/facturacion/re')) {
                // factura_redencionesgenerar
                if ($pathinfo === '/facturacion/redencionesgenerar') {
                    return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::redencionesGenerarAction',  '_route' => 'factura_redencionesgenerar',);
                }

                // factura_requisicionesgenerar
                if ($pathinfo === '/facturacion/requisicionesgenerar') {
                    return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::requisicionesGenerarAction',  '_route' => 'factura_requisicionesgenerar',);
                }

            }

            // factura_detallesolicitudes
            if (0 === strpos($pathinfo, '/facturacion/detallesolicitudes') && preg_match('#^/facturacion/detallesolicitudes(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_detallesolicitudes')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::detalleSolicitudesAction',  'id' => NULL,));
            }

            // factura_logisticagenerar
            if ($pathinfo === '/facturacion/logisticagenerar') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::logisticaGenerarAction',  '_route' => 'factura_logisticagenerar',);
            }

        }

        if (0 === strpos($pathinfo, '/rentabilidad')) {
            // rentabilidad
            if ($pathinfo === '/rentabilidad') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::listadoAction',  '_route' => 'rentabilidad',);
            }

            // rentabilidad_general
            if ($pathinfo === '/rentabilidad/general') {
                return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::rentabilidadGeneralAction',  '_route' => 'rentabilidad_general',);
            }

            if (0 === strpos($pathinfo, '/rentabilidad/pr')) {
                if (0 === strpos($pathinfo, '/rentabilidad/programa')) {
                    // rentabilidad_listaprogramas
                    if ($pathinfo === '/rentabilidad/programas') {
                        return array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::listaprogramasAction',  '_route' => 'rentabilidad_listaprogramas',);
                    }

                    // rentabilidad_programa
                    if (preg_match('#^/rentabilidad/programa(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rentabilidad_programa')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::rentabilidadProgramaAction',  'id' => NULL,));
                    }

                }

                // rentabilidad_premios
                if (0 === strpos($pathinfo, '/rentabilidad/premios') && preg_match('#^/rentabilidad/premios(?:/(?P<programa>[^/]++)(?:/(?P<categoria>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rentabilidad_premios')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::rentabilidadPremiosAction',  'programa' => NULL,  'categoria' => NULL,));
                }

            }

            // rentabilidad_categoria
            if (0 === strpos($pathinfo, '/rentabilidad/categoria') && preg_match('#^/rentabilidad/categoria(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rentabilidad_categoria')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::categoriaAction',  'id' => NULL,));
            }

            // rentabilidad_exportar
            if (0 === strpos($pathinfo, '/rentabilidad/exportar') && preg_match('#^/rentabilidad/exportar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rentabilidad_exportar')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\RentabilidadController::exportarAction',  'id' => NULL,));
            }

        }

        // factura_solicitudes_detalle
        if (0 === strpos($pathinfo, '/facturacion/detallefacturasolicitudes') && preg_match('#^/facturacion/detallefacturasolicitudes(?:/(?P<programa>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_solicitudes_detalle')), array (  '_controller' => 'Incentives\\FacturacionBundle\\Controller\\FacturasController::detalleFacturaSolicitudesAction',  'programa' => NULL,));
        }

        // incentives_garantias_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'incentives_garantias_homepage')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/garantias')) {
            if (0 === strpos($pathinfo, '/garantias/redenciones')) {
                // garantias_redenciones
                if ($pathinfo === '/garantias/redenciones') {
                    return array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::listadoAction',  '_route' => 'garantias_redenciones',);
                }

                // garantiasredenciones_programa
                if (preg_match('#^/garantias/redenciones(?:/(?P<programa>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasredenciones_programa')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::listadoprogramaAction',  'programa' => NULL,));
                }

            }

            // garantiasredenciones_datos
            if (0 === strpos($pathinfo, '/garantias/datosredencion') && preg_match('#^/garantias/datosredencion(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasredenciones_datos')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::datosredencionAction',  'redencion' => NULL,));
            }

            if (0 === strpos($pathinfo, '/garantias/novedad')) {
                // garantiasnovedad_nueva
                if (0 === strpos($pathinfo, '/garantias/novedadnueva') && preg_match('#^/garantias/novedadnueva(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasnovedad_nueva')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::novedadAction',  'redencion' => NULL,));
                }

                if (0 === strpos($pathinfo, '/garantias/novedades')) {
                    // garantiasnovedades_listado
                    if ($pathinfo === '/garantias/novedadeslistado') {
                        return array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::novedadeslistadoAction',  '_route' => 'garantiasnovedades_listado',);
                    }

                    // garantiasnovedades_accion
                    if (0 === strpos($pathinfo, '/garantias/novedadesaccion') && preg_match('#^/garantias/novedadesaccion(?:/(?P<novedad>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasnovedades_accion')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::novedadesaccionAction',  'novedad' => NULL,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/garantias/recompra')) {
                // garantiasrecompras_listado
                if ($pathinfo === '/garantias/recompraslistado') {
                    return array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::recompraslistadoAction',  '_route' => 'garantiasrecompras_listado',);
                }

                if (0 === strpos($pathinfo, '/garantias/recompraaproba')) {
                    // garantiasrecompra_aprobacion
                    if (0 === strpos($pathinfo, '/garantias/recompraaprobacion') && preg_match('#^/garantias/recompraaprobacion(?:/(?P<novedad>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasrecompra_aprobacion')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::aprobacionrecompraAction',  'novedad' => NULL,));
                    }

                    // garantiasrecompra_aprobar
                    if (0 === strpos($pathinfo, '/garantias/recompraaprobar') && preg_match('#^/garantias/recompraaprobar(?:/(?P<novedad>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasrecompra_aprobar')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::aprobarrecompraAction',  'novedad' => NULL,));
                    }

                }

                // garantiasrecompra_cancelar
                if (0 === strpos($pathinfo, '/garantias/recompracancelar') && preg_match('#^/garantias/recompracancelar(?:/(?P<novedad>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantiasrecompra_cancelar')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::cancelarrecompraAction',  'novedad' => NULL,));
                }

            }

            // garantias_editarenvio
            if (0 === strpos($pathinfo, '/garantias/editarenvio') && preg_match('#^/garantias/editarenvio(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'garantias_editarenvio')), array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::envioedicionAction',  'redencion' => NULL,));
            }

            // garantias_reenvios
            if ($pathinfo === '/garantias/reenvios') {
                return array (  '_controller' => 'Incentives\\GarantiasBundle\\Controller\\RedencionesController::reenvioslistadoAction',  '_route' => 'garantias_reenvios',);
            }

        }

        // inventario_listado
        if ($pathinfo === '/inventario') {
            return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::listadoAction',  '_route' => 'inventario_listado',);
        }

        if (0 === strpos($pathinfo, '/planilla')) {
            if (0 === strpos($pathinfo, '/planillas')) {
                // planillas_lista
                if ($pathinfo === '/planillas/lista') {
                    return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillasAction',  '_route' => 'planillas_lista',);
                }

                // planillas_generar
                if ($pathinfo === '/planillas/generar') {
                    return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::generarplanillaAction',  '_route' => 'planillas_generar',);
                }

                if (0 === strpos($pathinfo, '/planillas/nueva')) {
                    // planillas_nueva
                    if ($pathinfo === '/planillas/nueva') {
                        return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::nuevaplanillaAction',  '_route' => 'planillas_nueva',);
                    }

                    // planillas_nueva_solicitud
                    if (0 === strpos($pathinfo, '/planillas/nuevasolicitud') && preg_match('#^/planillas/nuevasolicitud(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'planillas_nueva_solicitud')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillaSolicitudAction',  'id' => NULL,));
                    }

                }

                // planillas_datos
                if (0 === strpos($pathinfo, '/planillas/datos') && preg_match('#^/planillas/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planillas_datos')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::datosplanillaAction',  'id' => NULL,));
                }

                // planillas_generarsegmentado
                if ($pathinfo === '/planillas/generarsegmentado') {
                    return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillasegmentadoAction',  '_route' => 'planillas_generarsegmentado',);
                }

            }

            // planilla_requisicion
            if (0 === strpos($pathinfo, '/planilla/requisicion') && preg_match('#^/planilla/requisicion(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planilla_requisicion')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillarequisicionAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/inventario')) {
            // inventario_historico
            if (0 === strpos($pathinfo, '/inventario/historico') && preg_match('#^/inventario/historico(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_historico')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::historicoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/inventario/planilla')) {
                // inventario_generar_planilla
                if (preg_match('#^/inventario/planilla(?:/(?P<fecha>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_generar_planilla')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillaAction',  'fecha' => NULL,));
                }

                // inventario_planilla_redencion
                if (0 === strpos($pathinfo, '/inventario/planillaredencion') && preg_match('#^/inventario/planillaredencion(?:/(?P<fecha>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_planilla_redencion')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillaRedencionAction',  'fecha' => NULL,));
                }

            }

            // inventario_listado_planilla
            if ($pathinfo === '/inventario/listado') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::listadoPlanillaAction',  '_route' => 'inventario_listado_planilla',);
            }

            if (0 === strpos($pathinfo, '/inventario/e')) {
                // inventario_listado_planilla_estado
                if (0 === strpos($pathinfo, '/inventario/estadoplanilla') && preg_match('#^/inventario/estadoplanilla(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_listado_planilla_estado')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::estadoPlanillaAction',  'id' => NULL,));
                }

                // inventario_exportar_planilla
                if (0 === strpos($pathinfo, '/inventario/exportar') && preg_match('#^/inventario/exportar(?:/(?P<fecha>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_exportar_planilla')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillaexportarAction',  'fecha' => NULL,));
                }

            }

            // inventario_importar_planilla
            if ($pathinfo === '/inventario/importar') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::importarAction',  '_route' => 'inventario_importar_planilla',);
            }

            // inventario_cargarguias
            if ($pathinfo === '/inventario/cargarguias') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::cargarguiasAction',  '_route' => 'inventario_cargarguias',);
            }

        }

        // inventario_courier_listado
        if ($pathinfo === '/courier') {
            return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\CourierController::listadoAction',  '_route' => 'inventario_courier_listado',);
        }

        if (0 === strpos($pathinfo, '/inventario')) {
            // inventario_planilla_actualizar
            if (0 === strpos($pathinfo, '/inventario/actualizarplanilla') && preg_match('#^/inventario/actualizarplanilla(?:/(?P<id>[^/]++)(?:/(?P<descargar>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_planilla_actualizar')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::actualizarplanillaAction',  'id' => NULL,  'descargar' => NULL,));
            }

            // inventario_planilla_cierre
            if ($pathinfo === '/inventario/planillascierre') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillasCierreAction',  '_route' => 'inventario_planilla_cierre',);
            }

            if (0 === strpos($pathinfo, '/inventario/c')) {
                if (0 === strpos($pathinfo, '/inventario/cierre')) {
                    // inventario_planilla_cierre_detalle
                    if (0 === strpos($pathinfo, '/inventario/cierredetalle') && preg_match('#^/inventario/cierredetalle(?:/(?P<planilla>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_planilla_cierre_detalle')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::cierreDetalleAction',  'planilla' => NULL,));
                    }

                    // inventario_planilla_cierre_entrega
                    if (0 === strpos($pathinfo, '/inventario/cierreentrega') && preg_match('#^/inventario/cierreentrega(?:/(?P<id>[^/]++)(?:/(?P<planilla>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_planilla_cierre_entrega')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::cierreEntregaAction',  'id' => NULL,  'planilla' => NULL,));
                    }

                }

                // inventario_planilla_costos
                if (0 === strpos($pathinfo, '/inventario/costosplanilla') && preg_match('#^/inventario/costosplanilla(?:/(?P<planilla>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_planilla_costos')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::costosplanillaAction',  'planilla' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/courier')) {
            // inventario_courier_nuevo
            if ($pathinfo === '/courier/nuevo') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\CourierController::nuevoAction',  '_route' => 'inventario_courier_nuevo',);
            }

            // inventario_courier_correo
            if (0 === strpos($pathinfo, '/courier/correoingreso') && preg_match('#^/courier/correoingreso(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_courier_correo')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\CourierController::correoIngresoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/inventario')) {
            // inventario_guias
            if ($pathinfo === '/inventario/importar') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::importarAction',  '_route' => 'inventario_guias',);
            }

            // inventario_entregado
            if ($pathinfo === '/inventario/entregado') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::entregadoAction',  '_route' => 'inventario_entregado',);
            }

            // inventario_programas
            if ($pathinfo === '/inventario/programas') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::programasAction',  '_route' => 'inventario_programas',);
            }

            // inventario_redenciones
            if (0 === strpos($pathinfo, '/inventario/redenciones') && preg_match('#^/inventario/redenciones(?:/(?P<programa>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_redenciones')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::redencionesAction',  'programa' => NULL,));
            }

            // inventario_ingreso
            if (0 === strpos($pathinfo, '/inventario/ingreso') && preg_match('#^/inventario/ingreso(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_ingreso')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::ingresoAction',  'id' => NULL,));
            }

            // inventario_salida
            if (0 === strpos($pathinfo, '/inventario/salida') && preg_match('#^/inventario/salida(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_salida')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::salidaAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/inventario/listado')) {
                // inventario_listadosalida
                if (0 === strpos($pathinfo, '/inventario/listadosalida') && preg_match('#^/inventario/listadosalida(?:/(?P<arreglo>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_listadosalida')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::listadosalidaAction',  'arreglo' => NULL,));
                }

                // inventario_listadoliberar
                if (0 === strpos($pathinfo, '/inventario/listadoliberar') && preg_match('#^/inventario/listadoliberar(?:/(?P<arreglo>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_listadoliberar')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::listadoliberarAction',  'arreglo' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/inventario/reporte')) {
                // inventario_exportar
                if ($pathinfo === '/inventario/reporte') {
                    return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::reporteAction',  '_route' => 'inventario_exportar',);
                }

                // inventario_exportar_detalle
                if ($pathinfo === '/inventario/reportedetalle') {
                    return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::reporteDetalleAction',  '_route' => 'inventario_exportar_detalle',);
                }

            }

        }

        // planilla_agregar
        if (0 === strpos($pathinfo, '/planilla/agregar') && preg_match('#^/planilla/agregar(?:/(?P<planilla>[^/]++)(?:/(?P<producto>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'planilla_agregar')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\InventarioController::planillagregarAction',  'planilla' => NULL,  'producto' => NULL,));
        }

        if (0 === strpos($pathinfo, '/logistica')) {
            // logistica_despacho_solicitudes
            if (0 === strpos($pathinfo, '/logistica/despachosolicitudes') && preg_match('#^/logistica/despachosolicitudes(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'logistica_despacho_solicitudes')), array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\LogisticaController::planillaDespachoSolicitudesAction',  'id' => NULL,));
            }

            // logistica_importar_guias
            if ($pathinfo === '/logistica/importarguias') {
                return array (  '_controller' => 'Incentives\\InventarioBundle\\Controller\\LogisticaController::importarGuiasAction',  '_route' => 'logistica_importar_guias',);
            }

        }

        if (0 === strpos($pathinfo, '/participante')) {
            // participante
            if ($pathinfo === '/participante') {
                return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\ParticipanteController::listadoAction',  '_route' => 'participante',);
            }

            // participante_nuevo
            if ($pathinfo === '/participante/nuevo') {
                return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\ParticipanteController::nuevoAction',  '_route' => 'participante_nuevo',);
            }

            if (0 === strpos($pathinfo, '/participante/e')) {
                // participante_editar
                if (0 === strpos($pathinfo, '/participante/editar') && preg_match('#^/participante/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participante_editar')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\ParticipanteController::editarAction',  'id' => NULL,));
                }

                // participante_estado
                if (0 === strpos($pathinfo, '/participante/estado') && preg_match('#^/participante/estado(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participante_estado')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\ParticipanteController::estadoAction',  'id' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/redenciones')) {
            // redenciones
            if ($pathinfo === '/redenciones') {
                return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::listadoAction',  '_route' => 'redenciones',);
            }

            // redenciones_programa
            if (preg_match('#^/redenciones(?:/(?P<programa>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_programa')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::listadoprogramaAction',  'programa' => NULL,));
            }

            // redenciones_datos
            if (0 === strpos($pathinfo, '/redenciones/datos') && preg_match('#^/redenciones/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_datos')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::datosAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/redenciones/e')) {
                // redenciones_estado
                if (0 === strpos($pathinfo, '/redenciones/estado') && preg_match('#^/redenciones/estado(?:/(?P<accion>[^/]++)(?:/(?P<id>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_estado')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::estadoAction',  'accion' => NULL,  'id' => NULL,));
                }

                // redenciones_exportar
                if (0 === strpos($pathinfo, '/redenciones/exportar') && preg_match('#^/redenciones/exportar/(?P<programa>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_exportar')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::exportarAction',));
                }

            }

            // redenciones_completo
            if ($pathinfo === '/redencionescompleto') {
                return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::listadocompletoAction',  '_route' => 'redenciones_completo',);
            }

            // redenciones_exportarcompleto
            if ($pathinfo === '/redencionesexportarcompleto') {
                return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::exportarCompletoAction',  '_route' => 'redenciones_exportarcompleto',);
            }

            // redenciones_exportarnew
            if (0 === strpos($pathinfo, '/redenciones/exportarnew') && preg_match('#^/redenciones/exportarnew/(?P<programa>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_exportarnew')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::exportarNewAction',));
            }

        }

        // guia_nueva
        if ($pathinfo === '/guia/nueva') {
            return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\GuiaController::nuevaAction',  '_route' => 'guia_nueva',);
        }

        // redenciones_datosredencion
        if (0 === strpos($pathinfo, '/redenciones/datosredencion') && preg_match('#^/redenciones/datosredencion(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_datosredencion')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::datosredencionAction',  'redencion' => NULL,));
        }

        // redenciones_listadototalpass
        if (0 === strpos($pathinfo, '/listadototalpass') && preg_match('#^/listadototalpass(?:/(?P<programa>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_listadototalpass')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::listadototalpassAction',  'programa' => NULL,));
        }

        // redenciones_programastotalpass
        if ($pathinfo === '/programastotalpass') {
            return array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::programastotalpassAction',  '_route' => 'redenciones_programastotalpass',);
        }

        if (0 === strpos($pathinfo, '/redenciones')) {
            if (0 === strpos($pathinfo, '/redenciones/e')) {
                // redenciones_exportartotalpass
                if (0 === strpos($pathinfo, '/redenciones/exportartotalpass') && preg_match('#^/redenciones/exportartotalpass/(?P<programa>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_exportartotalpass')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::exportartotalpassAction',));
                }

                // redenciones_editarproducto
                if (0 === strpos($pathinfo, '/redenciones/editarproducto') && preg_match('#^/redenciones/editarproducto(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_editarproducto')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::editarproductoAction',  'redencion' => NULL,));
                }

            }

            // redenciones_justificacion
            if (0 === strpos($pathinfo, '/redenciones/justificacion') && preg_match('#^/redenciones/justificacion(?:/(?P<id>[^/]++)(?:/(?P<planilla>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_justificacion')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::justificacionAction',  'id' => NULL,  'planilla' => NULL,));
            }

            // redenciones_editarenvio
            if (0 === strpos($pathinfo, '/redenciones/editarenvio') && preg_match('#^/redenciones/editarenvio(?:/(?P<redencion>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'redenciones_editarenvio')), array (  '_controller' => 'Incentives\\RedencionesBundle\\Controller\\RedencionController::envioedicionAction',  'redencion' => NULL,));
            }

        }

        // incentives_autenticacion_login
        if (rtrim($pathinfo, '/') === '/autenticacion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'incentives_autenticacion_login');
            }

            return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\AutenticacionController::loginAction',  '_route' => 'incentives_autenticacion_login',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // usuarios
        if ($pathinfo === '/usuarios') {
            return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\UsuariosController::listadoAction',  '_route' => 'usuarios',);
        }

        // recordar_password
        if ($pathinfo === '/recordar') {
            return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\UsuariosController::recordarAction',  '_route' => 'recordar_password',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuarios')) {
                // usuarios_nuevo
                if ($pathinfo === '/usuarios/nuevo') {
                    return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\UsuariosController::nuevoAction',  '_route' => 'usuarios_nuevo',);
                }

                // usuarios_editar
                if (0 === strpos($pathinfo, '/usuarios/editar') && preg_match('#^/usuarios/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_editar')), array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\UsuariosController::editarAction',  'id' => NULL,));
                }

            }

            // usuario_nombre
            if (rtrim($pathinfo, '/') === '/usuario/nombre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_nombre');
                }

                return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\UsuariosController::nombreAction',  '_route' => 'usuario_nombre',);
            }

        }

        if (0 === strpos($pathinfo, '/campos')) {
            if (0 === strpos($pathinfo, '/campos/c')) {
                // campos_ciudad
                if (0 === strpos($pathinfo, '/campos/ciudad') && preg_match('#^/campos/ciudad(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'campos_ciudad')), array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\CamposController::ciudadAction',  'id' => NULL,));
                }

                // campos_capitales
                if (0 === strpos($pathinfo, '/campos/capitales') && preg_match('#^/campos/capitales(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'campos_capitales')), array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\CamposController::capitalesAction',  'id' => NULL,));
                }

            }

            // campos_departamento
            if (0 === strpos($pathinfo, '/campos/departamento') && preg_match('#^/campos/departamento(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'campos_departamento')), array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\CamposController::departamentoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/proveedor')) {
            if (0 === strpos($pathinfo, '/proveedores')) {
                // proveedores
                if ($pathinfo === '/proveedores') {
                    return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::listadoAction',  '_route' => 'proveedores',);
                }

                // proveedores_nuevo
                if ($pathinfo === '/proveedores/nuevo') {
                    return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::nuevoAction',  '_route' => 'proveedores_nuevo',);
                }

                // proveedores_editar
                if (0 === strpos($pathinfo, '/proveedores/editar') && preg_match('#^/proveedores/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_editar')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::editAction',  'id' => NULL,));
                }

                if (0 === strpos($pathinfo, '/proveedores/d')) {
                    // proveedores_datos
                    if (0 === strpos($pathinfo, '/proveedores/datos') && preg_match('#^/proveedores/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_datos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::datosAction',  'id' => NULL,));
                    }

                    if (0 === strpos($pathinfo, '/proveedores/documentos')) {
                        // proveedores_documentos
                        if (preg_match('#^/proveedores/documentos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_documentos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::documentosAction',  'id' => NULL,));
                        }

                        // proveedores_documentos_carga
                        if (0 === strpos($pathinfo, '/proveedores/documentos/carga') && preg_match('#^/proveedores/documentos/carga(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_documentos_carga')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::documentosAction',  'id' => NULL,));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/proveedores/c')) {
                    if (0 === strpos($pathinfo, '/proveedores/comprobar')) {
                        // proveedores_comprobar_identificacion
                        if (0 === strpos($pathinfo, '/proveedores/comprobaridentificacion') && preg_match('#^/proveedores/comprobaridentificacion(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_comprobar_identificacion')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::comprobaridentificacionAction',  'id' => NULL,));
                        }

                        // proveedores_comprobar_correo
                        if (0 === strpos($pathinfo, '/proveedores/comprobarcorreo') && preg_match('#^/proveedores/comprobarcorreo(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_comprobar_correo')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::comprobarcorreoAction',  'id' => NULL,));
                        }

                    }

                    if (0 === strpos($pathinfo, '/proveedores/catalogo')) {
                        // proveedores_catalogo
                        if (preg_match('#^/proveedores/catalogo(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_catalogo')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::catalogoAction',  'id' => NULL,));
                        }

                        // proveedores_catalogo_carga
                        if (0 === strpos($pathinfo, '/proveedores/catalogo/carga') && preg_match('#^/proveedores/catalogo/carga(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_catalogo_carga')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::catalogoAction',  'id' => NULL,));
                        }

                        // proveedores_catalogo_removercatalogo
                        if (0 === strpos($pathinfo, '/proveedores/catalogo/remover') && preg_match('#^/proveedores/catalogo/remover(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_catalogo_removercatalogo')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::removercatalogoAction',  'id' => NULL,));
                        }

                    }

                }

                // proveedores_estado
                if (0 === strpos($pathinfo, '/proveedores/estado') && preg_match('#^/proveedores/estado(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::estadoAction',  'id' => NULL,));
                }

                // proveedores_correo_ingreso
                if (0 === strpos($pathinfo, '/proveedores/correoingreso') && preg_match('#^/proveedores/correoingreso(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_correo_ingreso')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::correoingresoAction',  'id' => NULL,));
                }

                // proveedores_actualizarpassword
                if (0 === strpos($pathinfo, '/proveedores/pass') && preg_match('#^/proveedores/pass(?:/(?P<id>\\d+)(?:/(?P<pass>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_actualizarpassword')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::actualizarpasswordAction',  'id' => NULL,  'pass' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/proveedor/contactos')) {
                // proveedores_contactos
                if (preg_match('#^/proveedor/contactos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_contactos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ContactoController::listadoAction',  'id' => NULL,));
                }

                // proveedores_catalogos
                if (preg_match('#^/proveedor/contactos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_catalogos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ContactoController::listadoAction',  'id' => NULL,));
                }

            }

            // proveedores_archivo_estado
            if (0 === strpos($pathinfo, '/proveedor/archivo/estado') && preg_match('#^/proveedor/archivo/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_archivo_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::archivoProveedorEstadoAction',  'id' => NULL,));
            }

            // proveedores_catalogo_estado
            if (0 === strpos($pathinfo, '/proveedor/catalogo/estado') && preg_match('#^/proveedor/catalogo/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_catalogo_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::catalogoProveedorEstadoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/proveedores/ca')) {
                // proveedores_calificacion
                if (0 === strpos($pathinfo, '/proveedores/calificacion') && preg_match('#^/proveedores/calificacion(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_calificacion')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::calificacionAction',  'id' => NULL,));
                }

                // proveedores_cargaplan
                if (0 === strpos($pathinfo, '/proveedores/cargaplan') && preg_match('#^/proveedores/cargaplan(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_cargaplan')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::cargaplanAction',  'id' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/contacto/e')) {
            // contacto_editar
            if (0 === strpos($pathinfo, '/contacto/editar') && preg_match('#^/contacto/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_editar')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ContactoController::editAction',  'id' => NULL,));
            }

            // contacto_estado
            if (0 === strpos($pathinfo, '/contacto/estado') && preg_match('#^/contacto/estado(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ContactoController::estadoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/proveedores')) {
            // contacto_nuevo
            if (0 === strpos($pathinfo, '/proveedores/contacto') && preg_match('#^/proveedores/contacto(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_nuevo')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ContactoController::nuevoAction',  'id' => NULL,));
            }

            // proveedores_importar
            if (rtrim($pathinfo, '/') === '/proveedores/importar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proveedores_importar');
                }

                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::importarAction',  '_route' => 'proveedores_importar',);
            }

            // proveedores_exportar
            if (rtrim($pathinfo, '/') === '/proveedores/exportar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proveedores_exportar');
                }

                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::exportarAction',  '_route' => 'proveedores_exportar',);
            }

            // proveedores_formato
            if (rtrim($pathinfo, '/') === '/proveedores/formato') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proveedores_formato');
                }

                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::formatoAction',  '_route' => 'proveedores_formato',);
            }

        }

        // ordenes_proveedor
        if ($pathinfo === '/ordenes/proveedor') {
            return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::importarAction',  '_route' => 'ordenes_proveedor',);
        }

        if (0 === strpos($pathinfo, '/convocatorias')) {
            // convocatorias
            if ($pathinfo === '/convocatorias') {
                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::listadoAction',  '_route' => 'convocatorias',);
            }

            // convocatorias_nueva
            if (0 === strpos($pathinfo, '/convocatorias/nueva') && preg_match('#^/convocatorias/nueva(?:/(?P<solicitud>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_nueva')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::nuevaAction',  'solicitud' => NULL,));
            }

            // convocatorias_editar
            if (0 === strpos($pathinfo, '/convocatorias/editar') && preg_match('#^/convocatorias/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_editar')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::editarAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/convocatorias/c')) {
                // convocatorias_correoa
                if (0 === strpos($pathinfo, '/convocatorias/correoa') && preg_match('#^/convocatorias/correoa(?:/(?P<id>\\d+)(?:/(?P<id_prov>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_correoa')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::correoAconvocatoriaAction',  'id' => NULL,  'id_prov' => NULL,));
                }

                // convocatorias_cargaproveedor
                if (0 === strpos($pathinfo, '/convocatorias/cargaproveedor') && preg_match('#^/convocatorias/cargaproveedor(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_cargaproveedor')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::cargaproveedorAction',  'id' => NULL,));
                }

            }

            // convocatorias_datos
            if (0 === strpos($pathinfo, '/convocatorias/datos') && preg_match('#^/convocatorias/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_datos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::datosAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/convocatorias/archivo')) {
                // convocatorias_archivos
                if (0 === strpos($pathinfo, '/convocatorias/archivos') && preg_match('#^/convocatorias/archivos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_archivos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::agregarArchivoAction',  'id' => NULL,));
                }

                // convocatorias_archivo_estado
                if (0 === strpos($pathinfo, '/convocatorias/archivo/estado') && preg_match('#^/convocatorias/archivo/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_archivo_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::archivoEstadoAction',  'id' => NULL,));
                }

            }

            // convocatorias_proveedor
            if (0 === strpos($pathinfo, '/convocatorias/proveedor') && preg_match('#^/convocatorias/proveedor(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'convocatorias_proveedor')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ConvocatoriasController::agregarproveedorAction',  'id' => NULL,));
            }

        }

        // proveedores_importar_proveedor
        if (0 === strpos($pathinfo, '/proveedores/importarporproveedor') && preg_match('#^/proveedores/importarporproveedor(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_importar_proveedor')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\ProveedorController::importarproductoproveedorAction',  'id' => NULL,));
        }

        if (0 === strpos($pathinfo, '/calificaciones')) {
            // calificaciones
            if ($pathinfo === '/calificaciones') {
                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::pendientesAction',  '_route' => 'calificaciones',);
            }

            // calificacion_datos
            if (0 === strpos($pathinfo, '/calificaciones/datos') && preg_match('#^/calificaciones/datos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calificacion_datos')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::datosAction',  'id' => NULL,));
            }

            // calificacion_pdf
            if (0 === strpos($pathinfo, '/calificaciones/pdf') && preg_match('#^/calificaciones/pdf(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calificacion_pdf')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::pdfAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/calificaciones/c')) {
                // calificacion_carta
                if (0 === strpos($pathinfo, '/calificaciones/carta') && preg_match('#^/calificaciones/carta(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calificacion_carta')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::cartaAction',  'id' => NULL,));
                }

                // calificacion_correo
                if (0 === strpos($pathinfo, '/calificaciones/correo') && preg_match('#^/calificaciones/correo(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calificacion_correo')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::correoAction',  'id' => NULL,));
                }

            }

            // calificacion_aprobar
            if (0 === strpos($pathinfo, '/calificaciones/aprobar') && preg_match('#^/calificaciones/aprobar(?:/(?P<id>[^/]++)(?:/(?P<accion>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calificacion_aprobar')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::aprobarAction',  'id' => NULL,  'accion' => NULL,));
            }

            // calificacion_exportar
            if ($pathinfo === '/calificaciones/exportar') {
                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::exportarAction',  '_route' => 'calificacion_exportar',);
            }

        }

        if (0 === strpos($pathinfo, '/plan')) {
            // planes
            if ($pathinfo === '/planes') {
                return array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::planesAction',  '_route' => 'planes',);
            }

            // plan_estado
            if (0 === strpos($pathinfo, '/plan/estado') && preg_match('#^/plan/estado(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plan_estado')), array (  '_controller' => 'Incentives\\OperacionesBundle\\Controller\\CalificacionController::planestadoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/servicios')) {
            // servicios_productos
            if ($pathinfo === '/servicios/productos') {
                return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\CatalogoController::productosAction',  '_route' => 'servicios_productos',);
            }

            if (0 === strpos($pathinfo, '/servicios/ca')) {
                // servicios_categoria
                if ($pathinfo === '/servicios/categorias') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\CatalogoController::categoriasAction',  '_route' => 'servicios_categoria',);
                }

                // servicios_calificacion
                if ($pathinfo === '/servicios/calificacion') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\CatalogoController::calificacionAction',  '_route' => 'servicios_calificacion',);
                }

            }

            // servicios_inventarioentrada
            if ($pathinfo === '/servicios/inventarioentrada') {
                return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\InventariosController::entradaAction',  '_route' => 'servicios_inventarioentrada',);
            }

            // servicios_datoscompra
            if ($pathinfo === '/servicios/datoscompra') {
                return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\InventariosController::datoscompraAction',  '_route' => 'servicios_datoscompra',);
            }

            if (0 === strpos($pathinfo, '/servicios/inventariode')) {
                // servicios_inventariodespac
                if ($pathinfo === '/servicios/inventariodespacho') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\InventariosController::salidaAction',  '_route' => 'servicios_inventariodespac',);
                }

                // servicios_inventariodevolucion
                if ($pathinfo === '/servicios/inventariodevolucion') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\InventariosController::devolucionAction',  '_route' => 'servicios_inventariodevolucion',);
                }

            }

            if (0 === strpos($pathinfo, '/servicios/redencion')) {
                // servicios_redencionnueva
                if ($pathinfo === '/servicios/redencionnueva') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::nuevaAction',  '_route' => 'servicios_redencionnueva',);
                }

                // servicios_redencionautorizada
                if ($pathinfo === '/servicios/redencionautorizada') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::autorizadaAction',  '_route' => 'servicios_redencionautorizada',);
                }

            }

            if (0 === strpos($pathinfo, '/servicios/puntos')) {
                if (0 === strpos($pathinfo, '/servicios/puntosre')) {
                    // servicios_puntosredimidos
                    if ($pathinfo === '/servicios/puntosredimidos') {
                        return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::puntosredimidosAction',  '_route' => 'servicios_puntosredimidos',);
                    }

                    // servicios_puntosrechazados
                    if ($pathinfo === '/servicios/puntosrechazados') {
                        return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::puntosrechazadosAction',  '_route' => 'servicios_puntosrechazados',);
                    }

                }

                // servicios_listadopuntosredimidos
                if ($pathinfo === '/servicios/puntosprograma') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::listadoPuntosRedimidosAction',  '_route' => 'servicios_listadopuntosredimidos',);
                }

            }

            if (0 === strpos($pathinfo, '/servicios/redenciones')) {
                // servicios_redencionesparticipante
                if ($pathinfo === '/servicios/redencionesparticipante') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::redencionesparticipanteAction',  '_route' => 'servicios_redencionesparticipante',);
                }

                // servicios_redencioneslistado
                if ($pathinfo === '/servicios/redencioneslistado') {
                    return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::redencioneslistadoAction',  '_route' => 'servicios_redencioneslistado',);
                }

            }

            // servicios_entregado
            if ($pathinfo === '/servicios/entregado') {
                return array (  '_controller' => 'Incentives\\ServiciosBundle\\Controller\\RedencionesController::entregadoAction',  '_route' => 'servicios_entregado',);
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\AutenticacionController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // _inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_inicio');
            }

            return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\DefaultController::indexAction',  '_route' => '_inicio',);
        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto
            if ($pathinfo === '/producto') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::listadoAction',  '_route' => 'producto',);
            }

            // producto_listadouniversal
            if ($pathinfo === '/producto/listadouniversal') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::listadouniversalAction',  '_route' => 'producto_listadouniversal',);
            }

            // producto_nuevo
            if ($pathinfo === '/producto/nuevo') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::nuevoAction',  '_route' => 'producto_nuevo',);
            }

            // producto_editar
            if (0 === strpos($pathinfo, '/producto/editar') && preg_match('#^/producto/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_editar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::editarAction',  'id' => NULL,));
            }

            // producto_datos
            if (0 === strpos($pathinfo, '/producto/datos') && preg_match('#^/producto/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_datos')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::datosAction',  'id' => NULL,));
            }

            // producto_estado
            if (0 === strpos($pathinfo, '/producto/estado') && preg_match('#^/producto/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_estado')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::estadoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/producto/imagen')) {
                // producto_agregarimagen
                if (0 === strpos($pathinfo, '/producto/imagen/agregar') && preg_match('#^/producto/imagen/agregar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_agregarimagen')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::cargaImagenAction',  'id' => NULL,));
                }

                // producto_estadoimagen
                if (0 === strpos($pathinfo, '/producto/imagen/estado') && preg_match('#^/producto/imagen/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_estadoimagen')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::estadoImagenAction',  'id' => NULL,));
                }

                // producto_imagenmasivo
                if ($pathinfo === '/producto/imagen/masivo') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::masivoImagenAction',  '_route' => 'producto_imagenmasivo',);
                }

            }

            if (0 === strpos($pathinfo, '/producto/pre')) {
                if (0 === strpos($pathinfo, '/producto/precio')) {
                    // producto_agregarprecio
                    if (0 === strpos($pathinfo, '/producto/precio/agregar') && preg_match('#^/producto/precio/agregar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_agregarprecio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::agregarPrecioAction',  'id' => NULL,));
                    }

                    // producto_estadoprecio
                    if (0 === strpos($pathinfo, '/producto/precio/estado') && preg_match('#^/producto/precio/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_estadoprecio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::estadoPrecioAction',  'id' => NULL,));
                    }

                }

                // producto_estadopremio
                if (0 === strpos($pathinfo, '/producto/premio/estado') && preg_match('#^/producto/premio/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_estadopremio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::estadoPremioAction',  'id' => NULL,));
                }

                // producto_editarprecio
                if (0 === strpos($pathinfo, '/producto/precio/editar') && preg_match('#^/producto/precio/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_editarprecio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::editarPrecioAction',  'id' => NULL,));
                }

            }

            // producto_catalogoproductoo
            if (0 === strpos($pathinfo, '/producto/catalogoproducto') && preg_match('#^/producto/catalogoproducto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_catalogoproductoo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::catalogoproductoAction',  'id' => NULL,));
            }

            // producto_buscar
            if ($pathinfo === '/producto/buscar') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::buscarAction',  '_route' => 'producto_buscar',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cliente')) {
                // cliente
                if ($pathinfo === '/cliente') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ClienteController::listadoAction',  '_route' => 'cliente',);
                }

                // cliente_nuevo
                if ($pathinfo === '/cliente/nuevo') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ClienteController::nuevoAction',  '_route' => 'cliente_nuevo',);
                }

                // cliente_editar
                if (0 === strpos($pathinfo, '/cliente/editar') && preg_match('#^/cliente/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_editar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ClienteController::editarAction',  'id' => NULL,));
                }

                // cliente_datos
                if (0 === strpos($pathinfo, '/cliente/datos') && preg_match('#^/cliente/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_datos')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ClienteController::datosAction',  'id' => NULL,));
                }

            }

            // cliente_estado
            if (0 === strpos($pathinfo, '/ciente/estado') && preg_match('#^/ciente/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_estado')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ClienteController::estadoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/programa')) {
            // programa
            if ($pathinfo === '/programa') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProgramaController::listadoAction',  '_route' => 'programa',);
            }

            // programa_nuevo
            if (0 === strpos($pathinfo, '/programa/nuevo') && preg_match('#^/programa/nuevo(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_nuevo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProgramaController::nuevoAction',  'id' => NULL,));
            }

            // programa_editar
            if (0 === strpos($pathinfo, '/programa/editar') && preg_match('#^/programa/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_editar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProgramaController::editarAction',  'id' => NULL,));
            }

            // programa_datos
            if (0 === strpos($pathinfo, '/programa/datos') && preg_match('#^/programa/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_datos')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProgramaController::datosAction',  'id' => NULL,));
            }

            // programa_estado
            if (0 === strpos($pathinfo, '/programa/estado') && preg_match('#^/programa/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_estado')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProgramaController::estadoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/catalogo')) {
            // catalogo
            if ($pathinfo === '/catalogo') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::listadoAction',  '_route' => 'catalogo',);
            }

            // catalogo_nuevo
            if (0 === strpos($pathinfo, '/catalogo/nuevo') && preg_match('#^/catalogo/nuevo(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_nuevo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::nuevoAction',  'id' => NULL,));
            }

            // catalogo_editar
            if (0 === strpos($pathinfo, '/catalogo/editar') && preg_match('#^/catalogo/editar(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_editar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::editarAction',  'id' => NULL,));
            }

            // catalogo_datos
            if (0 === strpos($pathinfo, '/catalogo/datos') && preg_match('#^/catalogo/datos(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_datos')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::datosAction',  'id' => NULL,));
            }

            // catalogo_estado
            if (0 === strpos($pathinfo, '/catalogo/estado') && preg_match('#^/catalogo/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_estado')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::estadoAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/catalogo/aprobar')) {
                // catalogo_aprobar
                if (preg_match('#^/catalogo/aprobar(?:/(?P<id>\\d+)(?:/(?P<resumido>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_aprobar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::aprobarAction',  'id' => NULL,  'resumido' => NULL,));
                }

                // catalogo_aprobar_resumido
                if (0 === strpos($pathinfo, '/catalogo/aprobarresumido') && preg_match('#^/catalogo/aprobarresumido(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_aprobar_resumido')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::aprobarresumidoAction',  'id' => NULL,));
                }

            }

            // catalogo_galeria
            if (0 === strpos($pathinfo, '/catalogo/galeria') && preg_match('#^/catalogo/galeria(?:/(?P<id>\\d+)(?:/(?P<vista>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_galeria')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::galeriaAction',  'id' => NULL,  'vista' => NULL,));
            }

            // catalogo_imagenes
            if (0 === strpos($pathinfo, '/catalogo/imagenes') && preg_match('#^/catalogo/imagenes(?:/(?P<id>\\d+)(?:/(?P<productos>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_imagenes')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::imagenesAction',  'id' => NULL,  'productos' => NULL,));
            }

        }

        // productocatalogo_imagenes
        if (0 === strpos($pathinfo, '/productocatalogo/imagenes') && preg_match('#^/productocatalogo/imagenes(?:/(?P<catalogo>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_imagenes')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::imagenesCatalogoAction',  'catalogo' => NULL,));
        }

        if (0 === strpos($pathinfo, '/catalogo')) {
            // catalogo_estadoaprobar
            if (0 === strpos($pathinfo, '/catalogo/aprobarcatalogo') && preg_match('#^/catalogo/aprobarcatalogo(?:/(?P<accion>[^/]++)(?:/(?P<id>[^/]++)(?:/(?P<catalogo>[^/]++)(?:/(?P<resumido>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_estadoaprobar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::aprobarcatalogoAction',  'accion' => NULL,  'id' => NULL,  'catalogo' => NULL,  'resumido' => NULL,));
            }

            // catalogo_indicadores
            if (0 === strpos($pathinfo, '/catalogo/indicadores') && preg_match('#^/catalogo/indicadores(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_indicadores')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::indicadoresAction',  'id' => NULL,));
            }

            // catalogo_navegar
            if ($pathinfo === '/catalogo/navegar') {
                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::navegarAction',  '_route' => 'catalogo_navegar',);
            }

        }

        if (0 === strpos($pathinfo, '/producto')) {
            if (0 === strpos($pathinfo, '/productocatalogo')) {
                // productocatalogo_nuevo
                if (0 === strpos($pathinfo, '/productocatalogo/nuevo') && preg_match('#^/productocatalogo/nuevo(?:/(?P<producto>[^/]++)(?:/(?P<catalogo>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_nuevo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::nuevoAction',  'producto' => NULL,  'catalogo' => NULL,));
                }

                // productocatalogo_listado
                if ($pathinfo === '/productocatalogo/listado') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::listadoAction',  '_route' => 'productocatalogo_listado',);
                }

            }

            // producto_importar
            if (rtrim($pathinfo, '/') === '/producto/importar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto_importar');
                }

                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::importarAction',  '_route' => 'producto_importar',);
            }

            // producto_exportar
            if (rtrim($pathinfo, '/') === '/producto/exportar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto_exportar');
                }

                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::exportarAction',  '_route' => 'producto_exportar',);
            }

            // producto_formato
            if (rtrim($pathinfo, '/') === '/producto/formato') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto_formato');
                }

                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::formatoAction',  '_route' => 'producto_formato',);
            }

            if (0 === strpos($pathinfo, '/productocatalogo')) {
                // productocatalogo_maestro
                if ($pathinfo === '/productocatalogo/maestro') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::maestroAction',  '_route' => 'productocatalogo_maestro',);
                }

                // productocatalogo_grupo
                if (0 === strpos($pathinfo, '/productocatalogo/grupo') && preg_match('#^/productocatalogo/grupo(?:/(?P<id>\\d+)(?:/(?P<pagina>[^/]++)(?:/(?P<str_filtro>[^/]++)(?:/(?P<parametros>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_grupo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::grupoAction',  'id' => NULL,  'pagina' => NULL,  'str_filtro' => NULL,  'parametros' => NULL,));
                }

                // productocatalogo_procesar
                if ($pathinfo === '/productocatalogo/procesar') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::procesarItemAction',  '_route' => 'productocatalogo_procesar',);
                }

                // productocatalogo_calcular
                if ($pathinfo === '/productocatalogo/calcular') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::calcularPuntosAction',  '_route' => 'productocatalogo_calcular',);
                }

                // productocatalogo_importar
                if (0 === strpos($pathinfo, '/productocatalogo/importar') && preg_match('#^/productocatalogo/importar/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_importar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::importarAction',));
                }

                // productocatalogo_formato
                if ($pathinfo === '/productocatalogo/formato') {
                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::formatoAction',  '_route' => 'productocatalogo_formato',);
                }

                // productocatalogo_catalogoim
                if (0 === strpos($pathinfo, '/productocatalogo/catalogoim') && preg_match('#^/productocatalogo/catalogoim/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_catalogoim')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::formatoimagenAction',));
                }

            }

            // producto_editar_mas
            if (rtrim($pathinfo, '/') === '/producto/editarmas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto_editar_mas');
                }

                return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::editarmasAction',  '_route' => 'producto_editar_mas',);
            }

            if (0 === strpos($pathinfo, '/producto/formato')) {
                // producto_formato_edicion
                if (rtrim($pathinfo, '/') === '/producto/formatoeditar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'producto_formato_edicion');
                    }

                    return array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::formatoeditarmasAction',  '_route' => 'producto_formato_edicion',);
                }

                // producto_formato_proveedor
                if (0 === strpos($pathinfo, '/producto/formatoproveedor') && preg_match('#^/producto/formatoproveedor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_formato_proveedor')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::formatoporproveedorAction',));
                }

            }

            if (0 === strpos($pathinfo, '/productocatalogo')) {
                if (0 === strpos($pathinfo, '/productocatalogo/nuevo')) {
                    // productocatalogo_nuevocatalogo
                    if (0 === strpos($pathinfo, '/productocatalogo/nuevocatalogo') && preg_match('#^/productocatalogo/nuevocatalogo(?:/(?P<producto>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_nuevocatalogo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::nuevocatalogoAction',  'producto' => NULL,));
                    }

                    // productocatalogo_nuevopremio
                    if (0 === strpos($pathinfo, '/productocatalogo/nuevopremio') && preg_match('#^/productocatalogo/nuevopremio(?:/(?P<producto>[^/]++)(?:/(?P<catalogo>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_nuevopremio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::nuevoPremioAction',  'producto' => NULL,  'catalogo' => NULL,));
                    }

                }

                if (0 === strpos($pathinfo, '/productocatalogo/e')) {
                    // productocatalogo_editarpremio
                    if (0 === strpos($pathinfo, '/productocatalogo/editarpremio') && preg_match('#^/productocatalogo/editarpremio(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_editarpremio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::editarPremioAction',  'id' => NULL,));
                    }

                    // productocatalogo_estadopremio
                    if (0 === strpos($pathinfo, '/productocatalogo/estadopremio') && preg_match('#^/productocatalogo/estadopremio(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_estadopremio')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::estadoPremioMaestroAction',  'id' => NULL,));
                    }

                }

            }

            // productomaestro_estado
            if (0 === strpos($pathinfo, '/productomaestro/estado') && preg_match('#^/productomaestro/estado(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productomaestro_estado')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::estadoMaestroAction',  'id' => NULL,));
            }

            // productocatalogo_editarcatalogo
            if (0 === strpos($pathinfo, '/productocatalogo/editarcatalogo') && preg_match('#^/productocatalogo/editarcatalogo(?:/(?P<productocatalogo>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_editarcatalogo')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::editarcatalogoAction',  'productocatalogo' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/catalogo')) {
            if (0 === strpos($pathinfo, '/catalogo/intervalos')) {
                // catalogo_intervalos
                if (preg_match('#^/catalogo/intervalos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_intervalos')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::intervalosAction',  'id' => NULL,));
                }

                // catalogo_intervaloseditar
                if (0 === strpos($pathinfo, '/catalogo/intervaloseditar') && preg_match('#^/catalogo/intervaloseditar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_intervaloseditar')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::editarntervalosAction',  'id' => NULL,));
                }

            }

            // catalogo_realcular
            if (0 === strpos($pathinfo, '/catalogo/recalcular') && preg_match('#^/catalogo/recalcular(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogo_realcular')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::recalcularCatalogoAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/pro')) {
            if (0 === strpos($pathinfo, '/producto')) {
                // producto_referencia
                if (0 === strpos($pathinfo, '/producto/referencia') && preg_match('#^/producto/referencia(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_referencia')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\ProductoController::productoreferenciaAction',  'id' => NULL,));
                }

                // productocatalogo_formatocambios
                if (0 === strpos($pathinfo, '/productocatalogo/formatocambios') && preg_match('#^/productocatalogo/formatocambios(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'productocatalogo_formatocambios')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\MaestroController::formatoCambiosAction',  'id' => NULL,));
                }

            }

            // productos_proveedor
            if (0 === strpos($pathinfo, '/proveedores/productos') && preg_match('#^/proveedores/productos(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_proveedor')), array (  '_controller' => 'Incentives\\CatalogoBundle\\Controller\\CatalogosController::productosproveedorAction',  'id' => NULL,));
            }

        }

        // redireccion
        if ($pathinfo === '/red') {
            return array (  '_controller' => 'Incentives\\BaseBundle\\Controller\\AutenticacionController::redireccionAction',  '_route' => 'redireccion',);
        }

        if (0 === strpos($pathinfo, '/audit')) {
            // simple_things_entity_audit_home
            if (preg_match('#^/audit(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_things_entity_audit_home')), array (  '_controller' => 'SimpleThings\\EntityAudit\\Controller\\AuditController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/audit/view')) {
                // simple_things_entity_audit_viewrevision
                if (0 === strpos($pathinfo, '/audit/viewrev') && preg_match('#^/audit/viewrev/(?P<rev>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_things_entity_audit_viewrevision')), array (  '_controller' => 'SimpleThings\\EntityAudit\\Controller\\AuditController::viewRevisionAction',));
                }

                if (0 === strpos($pathinfo, '/audit/viewent')) {
                    // simple_things_entity_audit_viewentity_detail
                    if (preg_match('#^/audit/viewent/(?P<className>[^/]++)/(?P<id>[^/]++)/(?P<rev>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_things_entity_audit_viewentity_detail')), array (  '_controller' => 'SimpleThings\\EntityAudit\\Controller\\AuditController::viewDetailAction',));
                    }

                    // simple_things_entity_audit_viewentity
                    if (preg_match('#^/audit/viewent/(?P<className>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_things_entity_audit_viewentity')), array (  '_controller' => 'SimpleThings\\EntityAudit\\Controller\\AuditController::viewEntityAction',));
                    }

                }

            }

            // simple_things_entity_audit_compare
            if (0 === strpos($pathinfo, '/audit/compare') && preg_match('#^/audit/compare/(?P<className>[^/]++)/(?P<id>[^/]++)(?:/(?P<oldRev>[^/]++)(?:/(?P<newRev>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_things_entity_audit_compare')), array (  '_controller' => 'SimpleThings\\EntityAudit\\Controller\\AuditController::compareAction',  'oldRev' => NULL,  'newRev' => NULL,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
