<?php

namespace Src\Controllers;

use Interop\Container\ContainerInterface as ContainerInterface;
use Src\Models\Project as Project;

class IndexController
{
    protected $container;
    
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
    }
    
    public function index($request, $response, $args) {
        $params = $request->getQueryParams();
        $config['id'] = isset($params['id'])?$params['id']:'';
        $projectModel = new Project($this->container->get('db'));
        $args['project'] = $projectModel->getProjectById($config);

        return $this->container->get('renderer')->render($response, 'index.phtml', $args);
    }
	
}