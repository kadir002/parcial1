<?php
  require_once('models/studen.php');
class viewController {

    public static function view(){
      $user=[
        ['id'=>1,'name'=>"kadir","nota"=> rand(1,100)],
        ['id'=>2,'name'=>"josé","nota"=> rand(1,100)],
        ['id'=>3,'name'=>"pedro","nota"=> rand(1,100)],
        ['id'=>4,'name'=>"raúl","nota"=> rand(1,100)],
        ['id'=>5,'name'=>"maría","nota"=> rand(1,100)],
        ['id'=>6,'name'=>"luisa","nota"=> rand(1,100)],
        ['id'=>7,'name'=>"adriana","nota"=> rand(1,100)],
        ['id'=>8,'name'=>"angela","nota"=> rand(1,100)],
        ['id'=>9,'name'=>"alan","nota"=> rand(1,100)],
        ['id'=>10,'name'=>"marcos","nota"=> rand(1,100)],
      ];
        $data=new studen();
        $data->setData($user);

      return $data->getData();
    }
}