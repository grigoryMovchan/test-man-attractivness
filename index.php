<?php

namespace Application;

require __DIR__ . '/vendor/autoload.php';

use Application\AttractivenessModel;
use Application\AttractivenessView;

$attractivenessModel = new AttractivenessModel();
$attractivenessView = new AttractivenessView();

var_dump($attractivenessView->getFormFromArray($attractivenessModel->getArrayFromJson('src/questions.json')));