<?php

namespace Millennium\Router;

use Millennium\Router\Router;

class RouterCollection
{

    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    
    /**
     *
     * @var \Millennium\Router\Router[] $collection
     */
    private $collection;

    /**
     * 
     * @param string $url
     * @param array|null $params
     * @param array|null $defaults
     * @param array|null $validates
     * @param array|null $methods
     * 
     * @return boolean
     */
    public function addRouter($url, $params = null, $defaults = null, $validates = null, $methods = null)
    {
        $oRouter = new Router();

        $oRouter
                ->setUrl($url)
                ->setParams($this->createRouterParams($params))
                ->setDefaults($this->createDefaults($defaults))
                ->setValidates($this->createValidates($validates))
                ->setMethods($this->createMethods($methods));

        return $this->collection[] = $oRouter;
    }

    private function createRouterParams($params = null)
    {
        return !empty($params) ? $params : array();
    }
    
    private function createDefaults($defaults = null)
    {
        return !empty($defaults) ? $defaults : array();
    }
    
    private function createValidates($validates = null)
    {
        return !empty($validates) ? $validates : array();
    }
    
    private function createMethods($methods = null)
    {
        $_methods = array();
        
        if (is_array($methods) && !empty($methods)) {
            foreach ($methods AS $method) {
                if (in_array(strtoupper($method), array(self::METHOD_PUT, self::METHOD_GET, self::METHOD_POST, self::METHOD_DELETE))) {
                    $_methods[] = strtoupper($method);
                }
            }
        }
        
        return !empty($methods) ? $_methods : array(self::METHOD_GET, self::METHOD_PUT, self::METHOD_POST, self::METHOD_DELETE);
    }
    
    private function createRegExpression(Router $oRouter)
    {
        
    }
    
}
