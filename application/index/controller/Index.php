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

    public function about(){
   	   return $this->fetch();
    }

    public function service(){
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
        set_time_limit(0);
     //halt(realpath('../'));
     $arr = [
         "https://www.heldro.nl/wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.min.css",
         "https://www.heldro.nl/wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.min.css"
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
