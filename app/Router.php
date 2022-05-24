<?php 

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext();
        $request = Request::createFromGlobals();
        $context->fromRequest(Request::createFromGlobals());

        $matcher = new UrlMatcher($routes, $context);
        try {
            $mathcer = $matcher->match($_SERVER['REQUEST_URI']);

            array_walk($mathcer, function(&$param)
            {
                if(is_numeric($param))
                {
                    $param = (int) $param;
                }
            });

            $className = '\\App\\Controllers\\' . $mathcer['controller'];
            $classInstance = new $className();

            $params = array_merge(array_slice($mathcer, 2, -1), array('routes' => $routes));

            call_user_func_array(array($classInstance, $matcher['method']), $params);
        } catch (MethodNotAllowedException $e) {
            echo "Route method is not allowed.";
        } catch (ResourceNotFoundException $e) {
            echo "Route does not exists.";
        } catch (NoConfigurationException $e) {
            echo "Configuration does not exists.";
        }
    }
}

$router = new Router();
$router($routes);
