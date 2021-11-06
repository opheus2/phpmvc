<?php

namespace orpheusohms\phpmvc;

use orpheusohms\phpmvc\Middlewares\BaseMiddleware;

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /** 
     * @var \orpheusohms\phpmvc\Middlewares\BaseMiddleware[] 
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function redirect(string $url)
    {
        return Application::$app->response->redirect($url);
    }

    public function registerMiddleWare(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * Get the value of middlewares
     *
     * @return  \orpheusohms\phpmvc\Middlewares\BaseMiddleware[]
     */ 
    public function getMiddlewares()
    {
        return $this->middlewares;
    }
}
