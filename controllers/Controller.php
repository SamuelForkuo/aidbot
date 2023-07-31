<?php
namespace Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFunction;



class Controller {

    public $view;

    public function __construct() {
        $this->loadView();
    }
    
    public function loadView() {

        $loader = new FilesystemLoader("views");

        $twig   = new Environment($loader, [
            'cache' => '../assets/cache',
            'auto_reload' => true,
            'autoescape' => false,
            'debug' => true,
            'strict_variables' => true,
        ]);

        $asset = new TwigFunction('asset', function($path) {
            return '/aidapp/views/assets/' . ltrim($path, '/');
        });

        $twig->addFunction($asset);

        $asset = new TwigFunction('route', function($path) {
            return '/aidapp/' . ltrim($path, '/');
        });

        $twig->addFunction($asset);


        $this->view = $twig;
    }
}