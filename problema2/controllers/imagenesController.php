<?php 
   require_once('models/imagenes.php');
 class imagenesController{

    public static function index(){
      $data=new imagenes();
      $inf=[
         ['img'=>"https://img.remediosdigitales.com/dacd4f/audi-rs-7-mansory-02/450_1000.jpeg",'name'=>"audi R7"],
         ['img'=>"https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2021/05/rivales-audi-r8-2329767.jpg",'name'=>"audi R8"],
         ['img'=>"https://www.diariomotor.com/imagenes/2016/03/bmw-m3-e46-gtr-p.jpg",'name'=>"BMW3"],
         ['img'=>"https://cdn.motor1.com/images/mgl/7O4NJ/s1/lanzamiento-porsche-911-carrera-s.webp",'name'=>"Porche 911"],
         ['img'=>"https://img.remediosdigitales.com/0b7d3d/mercedes-amg-gt-2020-002/1366_2000.jpg",'name'=>"Mercedes AMG"]
      ];
      $data->setData($inf);
      return $data->getData();
    }

 
 }