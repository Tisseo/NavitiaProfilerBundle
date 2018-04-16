<?php

namespace CanalTP\NavitiaProfilerBundle\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NavitiaDataCollector extends DataCollector
{
    private $navitiaAdapter = null;

    public function __construct(NavitiaAdapter $navitiaAdapter)
    {
        $this->navitiaAdapter = $navitiaAdapter;
        $this->data = array(
            'request_number' => 0,
            'requests' => array()
        );
    }

    public function getRequestNumber()
    {
        return ($this->data['request_number']);
    }

    public function getRequests()
    {
        return ($this->data['requests']);
    }

    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data['request_number'] = $this->navitiaAdapter->getRequestNumber();
        $this->data['requests'] = $this->navitiaAdapter->getRequests();
    }

    public function reset()
    {
        $this->data = array();
    }
    
    public function getName()
    {
        return 'navitia';
    }
}