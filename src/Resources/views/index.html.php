<?php

use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables;
use Symfony\Bundle\FrameworkBundle\Templating\PhpEngine;
use Symfony\Component\HttpKernel\Controller\ControllerReference;

/**
 * @var GlobalVariables $app
 * @var PhpEngine $view
 *
 */

$view['slots']->set('headTitle', '');
$view['slots']->set('headDescription', '');
$view->extend('layout/extend/layout.html.php');
?>

<div class="justify-content-md-center col-lg-4">
    <div class="row align-items-center">
        <div class="col col-xs-12 col-lg-3">
            <div class="math-screen">
                <div class="math-state">
                    <span>
                        2 + 2 =
                    </span>
                    <span>
                        4
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="row align-items-end">
        <div class="col">
            <div class="npad" data-target="buttons">
                <div class="npad-line">
                    <button class="btn btn-lg npad-btn">1</button>
                    <button class="btn btn-lg npad-btn">2</button>
                    <button class="btn btn-lg npad-btn">3</button>
                </div>
                <div class="npad-line">
                    <button class="btn btn-lg npad-btn">4</button>
                    <button class="btn btn-lg npad-btn">5</button>
                    <button class="btn btn-lg npad-btn">6</button>
                </div>
                <div class="npad-line">
                    <button class="btn btn-lg npad-btn">7</button>
                    <button class="btn btn-lg npad-btn">8</button>
                    <button class="btn btn-lg npad-btn">9</button>
                </div>
                <div class="npad-line">
                    <button class="btn btn-lg npad-btn">.</button>
                    <button class="btn btn-lg npad-btn">0</button>
                    <button class="btn btn-lg npad-btn">.</button>
                </div>
            </div>
        </div>
    </div>
</div>