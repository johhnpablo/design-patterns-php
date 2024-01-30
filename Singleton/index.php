<?php

use Singleton\LogsSingleton;

$instance = LogsSingleton::getInstance();
$newIstance = LogsSingleton::getInstance();

if ($instance === $newIstance) {
    echo 'As intâncias são exatamente as mesmas!';
} else {
    echo 'As intâncias não são as mesmas. ';
}