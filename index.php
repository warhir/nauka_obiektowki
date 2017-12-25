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
$form->set('name','uniwersalna')->set('id','1');
echo $form->getName();
echo $form->id;
echo Form::NAME;