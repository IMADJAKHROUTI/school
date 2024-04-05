<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getURL();

        $controllerFile = "../private/controllers/" . $url[0] . ".php";
        if (file_exists($controllerFile)) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require $controllerFile;
        $this->controller = new $this->controller();

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = ucfirst($url[1]);
            unset($url[1]);
        }

        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        $url = trim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode("/", $url);
    }
}