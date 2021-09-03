<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Request as PostRequest;

class RegController extends Controller
{
   			       public function index(Request $request) 
    {
			$post_data = PostRequest::all();

//添付ファイルを移動させる。

$filepath = '/home/hystericend/www/takasusukisample/public/img/';
$filename = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 6).date("YmdHis");
	
	if(is_uploaded_file($_FILES['file1']['tmp_name'])){
$name1 = $filename.'.'.$request->file('file1')->getClientOriginalExtension();
	move_uploaded_file($_FILES['file1']['tmp_name'], $filepath.$name1);
        }else{
		$name1="";
		}
		

// rec_lat
// rec_lng

$query = $post_data["address"];
$query = urlencode($query);
$url = "http://www.geocoding.jp/api/";
$url.= "?v=1.1&q=".$query;
$line ="";
$fp = fopen($url, "r");
while(!feof($fp)) {
  $line.= fgets($fp);
}
fclose($fp);

$xml = simplexml_load_string($line);
$sendlist_rec_lat=$xml->coordinate->lat;
$sendlist_rec_lng=$xml->coordinate->lng;





$param =[
"name" =>$post_data["name"],
"email" =>$post_data["email"],
"address" =>$post_data["address"],
"sex" =>$post_data["sex"],
"cap1" =>$post_data["cap1"],
"cap2" =>$post_data["cap2"],
"cap3" =>$post_data["cap3"],
"wear1" =>$post_data["wear1"],
"wear2" =>$post_data["wear2"],
"wear3" =>$post_data["wear3"],
"bottom1" =>$post_data["bottom1"],
"bottom2" =>$post_data["bottom2"],
"bottom3" =>$post_data["bottom3"],
"shoes1" =>$post_data["shoes1"],
"shoes2" =>$post_data["shoes2"],
"shoes3" =>$post_data["shoes3"],
"point" =>$post_data["point"],
"filepath" =>$name1,
"lat"  => $sendlist_rec_lat,
"lng"  => $sendlist_rec_lng
];

DB::table("data1")->insert($param);
		
		return redirect('/');
	}
}
