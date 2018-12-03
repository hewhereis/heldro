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
     //halt(realpath('../'));
     $arr = [
        "https://www.heldro.nl/wp-content/uploads/2018/05/85-e1526023833791-600x400.jpg",
         "https://www.heldro.nl/wp-content/uploads/2018/05/86-e1526023816376-600x400.jpg",
         "https://www.heldro.nl/wp-content/uploads/2018/05/16-e1526024694836-600x400.jpg",
         "https://www.heldro.nl/wp-content/themes/sweettooth/assets/fonts/quicksand-light.otf",
         "https://www.heldro.nl/wp-content/uploads/2018/05/15-1-e1526024665532-600x400.jpg"
     ];
     $i = 1;
     foreach($arr as $key=>$val){
        $content = file_get_contents($val);
        $file = substr($val,21);
        if($this->putImg($file,$content)){
          dump($i.'file put '.$val.' is successful');
        }else{
          dump($i.'file put '.$val.' is failure');
        }
     }

     return 'game over';
   }


   protected function putImg($file,$content){
      $arr = explode('/', $file);
      $filename = array_pop($arr);
      $dir = 'static';
      foreach($arr as $key => $val) {
         if(!is_dir($dir .= "/$val")) mkdir($dir);
      }
      return file_put_contents("$dir/$filename",$content);
   }
}
