<?php

namespace Millennium\Router;

class Router
{

    /**
     *
     * @var string
     */
    private $url;

    /**
     *
     * @var array
     */
    private $params;

    /**
     *
     * @var array
     */
    private $defaults;

    /**
     *
     * @var array
     */
    private $validates;

    /**
     *
     * @var array
     */
    private $methods;

    /**
     *
     * @var string
     */
    private $regEx;

    /**
     * 
     * @param string $url
     * 
     * @return \Millennium\Router\Router
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 
     * @param array $params
     * 
     * @return \Millennium\Router\Router
     */
    public function setParams($params = array())
    {
        $this->params = $params;

        return $this;
    }

    /**
     * 
     * @return arary|null
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * 
     * @param array $defaults
     * 
     * @return \Millennium\Router\Router
     */
    public function setDefaults($defaults = array())
    {
        $this->defaults = $defaults;

        return $this;
    }

    /**
     * 
     * @return array|null
     */
    public function getDefaults()
    {
        return $this->defaults;
    }

    /**
     * 
     * @param array $validates
     * 
     * @return \Millennium\Router\Router
     */
    public function setValidates($validates = array())
    {
        $this->validates = $validates;

        return $this;
    }

    /**
     * 
     * @return array|null
     */
    public function getValidates()
    {
        return $this->validates;
    }

    /**
     * 
     * @param array $methods
     * 
     * @return \Millennium\Router\Router
     */
    public function setMethods($methods = array())
    {
        $this->methods = $methods;

        return $this;
    }

    /**
     * 
     * @return array|null
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * 
     * @param string $regEx
     * 
     * @return \Millennium\Router\Router
     */
    public function setRegEx($regEx)
    {
        $this->regEx = $regEx;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getRegEx()
    {
        return $this->regEx;
    }

}
