<?php
namespace sebastian\project;
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 07.05.2018
 * Time: 22:05
 */

use sfaulhammer\baelle\Fussball;
use sfaulhammer\baelle\Basketball;
use sfaulhammer\baelle\PingPongBall;

require_once "vendor/autoload.php";

$fussball = new Fussball("Adidas Sport 1000", 30.75, "Gummi");
$fussball2 = new Fussball("Nike Sport Elite", 30.75, "Gummi");
$basketball = new Basketball("NBA Pro Elite", 25.7, "Kautschuk");
$basketball2 = new Basketball("NBA Alpha Elite", 25.7, "Kautschuk");
$pingpongball = new PingPongBall("Xang Li 5000", 10, "Plastik");
$pingpongball2 = new PingPongBall("Xang Hu Ultra", 10, "Plastik");