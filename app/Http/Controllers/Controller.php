<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.46.09%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.46.10%20PM%20(1).jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.46.10%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.48.11%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.51.20%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.52.31%20PM%20(1).jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.52.31%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.52.32%20PM%20(1).jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.52.32%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.54.14%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.54.15%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.55.30%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.56.07%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/WhatsApp%20Image%202021-11-07%20at%202.56.49%20PM.jpeg",
    "https://storage.googleapis.com/imagenes-random/imagen_2021-11-07_145517.png",
    "https://storage.googleapis.com/imagenes-random/imagen_2021-11-07_145705.png",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0, ($totalQuotes - 1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return '<img src="'.$randomQuote.'" alt="'.gethostbyname(gethostname()).'" width="200">';
    }
}
