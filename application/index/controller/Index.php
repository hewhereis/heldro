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
     halt(realpath('../'));
     $arr = [
        'http://www.heldro.nl/wp-content/uploads/2018/05/84-e1526023850710-600x400.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/05/14-e1526024641103-600x400.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/05/image005.png',
        'http://www.heldro.nl/wp-content/uploads/2018/05/IMG_4954-768x768.jpg',
        'http://www.heldro.nl/wp-content/uploads/2017/03/219A1524-1-e1527946114159-768x797.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/10/CC396E2B-4DD4-4930-93ED-4868CBAEF20D-768x514.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/05/15-e1525348455881-600x599.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/05/9-e1525348286771-600x599.jpg',
        'http://www.heldro.nl/wp-content/uploads/2017/03/iets-vieren-e1525166547236-600x599.jpg',
        'http://www.heldro.nl/wp-content/uploads/2018/05/Heldro-officieel-verkooppunt-600x514.jpg',
        'http://www.heldro.nl/wp-content/themes/sweettooth/assets/fonts/quicksand-regular.otf',
        'http://www.heldro.nl/wp-content/plugins/contact-form-7/images/ajax-loader.gif',
        'http://www.heldro.nl/wp-content/uploads/2018/05/Heldro-sticker-80jaar-600x541.jpg'
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
