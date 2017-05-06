<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Data;
require app_path()."\Components\simple_html_dom.php";
class AdminController extends Controller
{
    //
     public function index()
     {
         return view('admin.getdata');
     }
     public function getdata(Requests\AdminRequest $request){
         $html = file_get_html($request->name);
         $title = $html->find('.post-title',0)->plaintext;
         $time=$html->find('.post-byline',0);
         $create=$time->plaintext;
         $data=explode(' ',$create);
         $date=$data['5']."-".$this->getmonths($data['3'])."-".rtrim($data['4'],',');
         $img="";
         $behavior="";
         $resource="";
         $map="";
         foreach($html->find('div.entry-inner p img') as $element) {
             $img.=$element->src.",";
         }
         $img_show=rtrim($img,',');
         foreach($html->find('div.entry-inner p img') as $element) {
             $element->outertext='';
         }
         $html ->load($html ->save());
         foreach($html->find('div.entry-inner') as $post) {
             $text=$post->plaintext;
         }
         $data=explode('Installation',$text);
         $desc=$data['0'];
         foreach($html->find('div.entry-inner a') as $value) {
             $text=$value->plaintext;
             if ((strlen(strstr($text,".McWorld")) > 0)||(strlen(strstr($text,"Behavior")) > 0)) {
                 // Tìm thấy
                 $behavior.=$value->href.",";
             }
             if ((strlen(strstr($text,".ZIP")) > 0)||(strlen(strstr($text,"Resource")) > 0)) {
                 // Tìm thấy
                 $resource.=$value->href.",";
             }
         }
         $behaviorLink=rtrim($behavior,',');
         $resourceLink=rtrim($resource,',');

         $data= new Data();
         $data->title = $title;
         $data->date = $date;
         $data->desc = $desc;
         $data->imgLink = $img_show;
         $data->resourceLink = $resourceLink;
         $data->behaviorLink = $behaviorLink;
         $data->mapLink='';
         if($data->save()){
             $request->session()->flash('status', 'Lưu thành công!');
             return redirect()->route('admin');
         }else{
             $request->session()->flash('status1', 'Thất bại!');
             return redirect()->route('admin');
         }
     }
     public function getmonths($data){
        switch ($data){
            case 'January':
                return 1;
                break;
            case 'February':
                return 2;
                break;
            case 'March':
                return 3;
                break;
            case 'April':
                return 4;
                break;
            case 'May':
                return 5;
                break;
            case 'June':
                return 6;
                break;
            case 'July':
                return 7;
                break;
            case 'August':
                return 8;
                break;
            case 'September':
                return 9;
                break;
            case 'October':
                return 10;
                break;
            case 'November':
                return 11;
                break;
            case 'December':
                return 12;
                break;
        }
    }
    public function error(){
        return view('admin.error');
    }
}
