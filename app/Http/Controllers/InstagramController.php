<?php namespace App\Http\Controllers;
use Input;

class InstagramController extends Controller {

	private $tag;
	private static $client_id = "4cfb9d9803704548a93b5cc4c172f919";
	private static $client_secret = "73f06ce8acbb44bebd7f33491a986335";
	private static $url;
	//https://api.instagram.com/v1/tags/pictureline/media/recent?client_id=4cfb9d9803704548a93b5cc4c172f919
	
    	 

   	public function getData($tag)
    {
    		$this->tag = $tag;
    	 	$this->url = "https://api.instagram.com/v1/tags/".$this->tag."/media/recent?client_id=".$this->client_id;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_URL, $this->url);
            //curl_setopt($ch, CURLOPT_HEADER, TRUE);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            ob_start(); // prevent any output
            return curl_exec ($ch); // execute the curl command
            ob_end_clean(); // stop preventing output
            curl_close ($ch);
    }

	
}
