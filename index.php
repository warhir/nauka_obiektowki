<?php
/**
 * Created by PhpStorm.
 * User: warhir
 * Date: 23.12.2017
 * Time: 19:24
 */
require 'classes/form.php';

$form = new Form();
$form->setName('form');
echo $form->getName();