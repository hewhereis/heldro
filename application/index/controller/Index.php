<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
       return $this->fetch();
	}

   public function contact(){
   	   return $this->fetch();
   }

    public function evenementen(){
   	   return $this->fetch();
   }

    public function ijsproducten(){
   	   return $this->fetch();
   }

    public function solliciteren(){
   	   return $this->fetch();
   }

    public function verkooppunten(){
   	   return $this->fetch();
   }

    public function opscheppunten(){
   	   return $this->fetch();
   }

   public function getImg(){
     $arr = [
        'https://www.heldro.nl/wp-content/uploads/2018/05/84-e1526023850710-600x400.jpg',
        'https://www.heldro.nl/wp-content/uploads/2018/05/14-e1526024641103-600x400.jpg',
        'https://www.heldro.nl/wp-content/uploads/2018/05/image005.png'
     ];
   }


   
}
