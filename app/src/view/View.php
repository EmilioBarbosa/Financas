<?php

namespace App\view;
const VIEW_PATH = __DIR__ . '/../view';

class View
{

    public function __construct(protected string $view, protected array $params =  [])
    {

    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    /**
     * @throws \Exception
     */
    public function render(): string
    {
        $viewPath = VIEW_PATH ."/{$this->view}.view.php";

        if (!file_exists($viewPath)){
            throw new \Exception('View not found');
        }

        foreach ($this->params as $key => $value){
            $$key = $value;
        }

        ob_start();

        include $viewPath;

        return ob_get_flush();
    }


    public function __toString():string
    {
        return $this->render();
    }
}