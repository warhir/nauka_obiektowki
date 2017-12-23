<?php
/**
 * Created by PhpStorm.
 * User: warhir
 * Date: 23.12.2017
 * Time: 13:59
 */
class Form{
const NAME='StdForm';
protected $elements=[];
protected $name;
public $valid=false;
public function getStartTag($attributes=null){
    if(!$attributes)return '<form>';
    $tag="<form";
    foreach ($attributes as $key => $value){
        $tag .="$key=\"$value\"";
    }
    $tag.='>';
    return $tag;

}
public function getEndTag(){
    return '</form>';
}
public function setName($name=null){
    if($name){
        $this->name=$name;
    }else{
        $this->name=self::NAME;
    }
}
public function getName(){
    return $this->name;
}

}
