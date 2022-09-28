<?php 

class validateNote{
 
    


    public  static function nota($nota){
    
       if($nota>=61&& $nota<=70){
        return "D";
       }else if($nota>=71&& $nota<=80){
        return "C";
       }else if($nota>=81&& $nota<=90){
        return "B";
       }else if($nota>=91&& $nota<=100){
        return "A";
       }

       return "F";
    }

    public static function colorText($nota){
        if($nota>=61&& $nota<=70){
            return "text-warning";
           }else if($nota>=71&& $nota<=80){
            return "text-secondary";
           }else if($nota>=81&& $nota<=90){
            return "text-info";
           }else if($nota>=91&& $nota<=100){
            return "text-success";
           }
    
           return "text-danger";
    }
}