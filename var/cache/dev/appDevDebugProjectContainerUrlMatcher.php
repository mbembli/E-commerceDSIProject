<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/avis')) {
                // admin_avis_index
                if ('/admin/avis' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AvisController::indexAction',  '_route' => 'admin_avis_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_avis_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_avis_index'));
                    }

                    return $ret;
                }
                not_admin_avis_index:

                // admin_avis_new
                if ('/admin/avis/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AvisController::newAction',  '_route' => 'admin_avis_new',);
                }

                // admin_avis_show
                if (preg_match('#^/admin/avis/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_avis_show')), array (  '_controller' => 'AppBundle\\Controller\\AvisController::showAction',));
                }

                // admin_avis_edit
                if (preg_match('#^/admin/avis/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_avis_edit')), array (  '_controller' => 'AppBundle\\Controller\\AvisController::editAction',));
                }

                // admin_avis_delete
                if (preg_match('#^/admin/avis/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_avis_delete')), array (  '_controller' => 'AppBundle\\Controller\\AvisController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/categorie')) {
                // admin_categorie_index
                if ('/admin/categorie' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategorieController::indexAction',  '_route' => 'admin_categorie_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_categorie_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_categorie_index'));
                    }

                    return $ret;
                }
                not_admin_categorie_index:

                // admin_categorie_new
                if ('/admin/categorie/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::newAction',  '_route' => 'admin_categorie_new',);
                }

                // admin_categorie_show
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_show')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::showAction',));
                }

                // admin_categorie_edit
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::editAction',));
                }

                // admin_categorie_delete
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/commande')) {
                // admin_commande_index
                if ('/admin/commande' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CommandeController::indexAction',  '_route' => 'admin_commande_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_commande_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_commande_index'));
                    }

                    return $ret;
                }
                not_admin_commande_index:

                // admin_commande_details
                if (0 === strpos($pathinfo, '/admin/commande/details') && preg_match('#^/admin/commande/details/(?P<id_commande>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commande_details')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController::detailsAction',));
                }

            }

            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAdminAction',  '_route' => 'admin_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
                }

                return $ret;
            }
            not_admin_homepage:

            if (0 === strpos($pathinfo, '/admin/produit')) {
                // admin_produit_index
                if ('/admin/produit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ProduitController::indexAction',  '_route' => 'admin_produit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_produit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_produit_index'));
                    }

                    return $ret;
                }
                not_admin_produit_index:

                // admin_produit_new
                if ('/admin/produit/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::newAction',  '_route' => 'admin_produit_new',);
                }

                // admin_produit_show
                if (preg_match('#^/admin/produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produit_show')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::showAction',));
                }

                // admin_produit_edit
                if (preg_match('#^/admin/produit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produit_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::editAction',));
                }

                // admin_produit_delete
                if (preg_match('#^/admin/produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produit_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::deleteAction',));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/panier')) {
            // add_produit
            if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id_produit>[^/]++)/(?P<qte>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_produit')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::addToCart',));
            }

            // update_produit
            if (0 === strpos($pathinfo, '/panier/modifier') && preg_match('#^/panier/modifier/(?P<id_produit>[^/]++)/(?P<qte>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_produit')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::updateProductPanier',));
            }

            // panier_details
            if ('/panier/details' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PanierController::panierDetails',  '_route' => 'panier_details',);
            }

            // produit_delete
            if (0 === strpos($pathinfo, '/panier/delete') && preg_match('#^/panier/delete/(?P<id_produit>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::removeProductAction',));
            }

            // clear_panier
            if ('/panier/clear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PanierController::ClearPanierAction',  '_route' => 'clear_panier',);
            }

        }

        elseif (0 === strpos($pathinfo, '/products')) {
            // user_produit_index
            if (preg_match('#^/products/(?P<categorietId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_produit_index')), array (  '_controller' => 'AppBundle\\Controller\\UserProductController::indexAction',));
            }

            // user_produit_details
            if (0 === strpos($pathinfo, '/products/details') && preg_match('#^/products/details/(?P<id_produit>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_produit_details')), array (  '_controller' => 'AppBundle\\Controller\\UserProductController::detailsProductAction',));
            }

        }

        // page_commander_index
        if ('/commander' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\UserCommandeController::indexAction',  '_route' => 'page_commander_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_page_commander_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'page_commander_index'));
            }

            return $ret;
        }
        not_page_commander_index:

        // user_rating_index
        if (0 === strpos($pathinfo, '/rating/add') && preg_match('#^/rating/add/(?P<id_produit>[^/]++)/(?P<stars>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_rating_index')), array (  '_controller' => 'AppBundle\\Controller\\UserRatingController::addAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
