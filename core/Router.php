<?php 

namespace core;

class Router {
    
    private $controller = 'Site';
    private $method = 'home';
    private $param = [];

    public function __construct()
    {
        $router = $this->url();

        if(file_exists('app/controllers/' . ucfirst($router[0]) . '.php')):
            $this->controller = ucfirst($router[0]);
            unset($router[0]);
        endif;

        $class = "\\app\\controllers\\" . $this->controller;
        $object = new $class;

        if(isset($router[1]) and method_exists($class, $router[1])):
            $this->method = $router[1];
            unset($router[1]);
        endif;

        //Aqui foi feito dessa forma para caso haja mais parâmetros, então ele passa um array de parâmetros
        //Por isso também ele retirou os outros valores router, para que os que sobrassem fossem os parâmetros
        $this->param = $router ? array_values($router): [];

        call_user_func_array([$object, $this->method], $this->param);
        
    }

    private function url()
    {
        #Input_get sinaliza que essa variável está retornando da URL.
        #Filter_input serve para a gente conseguir estrair essa variável, seja da url seja de outro local da request
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}
?>