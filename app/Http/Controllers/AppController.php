<?php namespace App\Http\Controllers;
use Input;
use Redirect;

/*
TODO
	Add Exception Handeling for when Insta may not be available.
	Seperate Insta inta and curL into seperate classes.  

*/
class AppController extends Controller {

	public $tag;
	private $client_id = "4cfb9d9803704548a93b5cc4c172f919";
	private $url;
	/**
	 * Show the application Search Form.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('searchForm');
	}

	/**
	 * Perform Search
	 *
	 * @return return View with data or error
	 */
	public function search()
	{
		if (Input::has('tag')){
			$this->getTag();
    		$data = $this->getData();
    		$data = json_decode($data, true);
    		return view('searchForm', $data);
    	}
    	else {
    		return Redirect::to('/')->withNotification('Oopsie! Zooey Deschanel says "Hey Winston, give me a #Tag to search".');
    	}
	}

	/**
	 * GET tag and remove space and #
	 *
	 * @return Response
	 */
	private function getTag()
	{
		
    	$tag = Input::get('tag');
    	$tag = preg_replace('/\s+/', '', $tag);
    	$tag = str_replace('#', '', $tag);
    	$this->tag = $tag;	
	}
	public function createUrl(){

		$this->url = "https://api.instagram.com/v1/tags/".$this->tag."/media/recent?client_id=".$this->client_id;
	}

	/**
	 * Curl call 
	 *
	 * @return data
	 */
	public function getData()
    {
    		//$this->tag = $tag;
    	 	$this->createUrl();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            $result = curl_exec($ch);
    		if(curl_errno($ch)){
    			//TODO -SEND TO LOG
    			return Redirect::to('/')->withNotification(curl_error($ch));
    		}
    		return $result;
            curl_close ($ch);
    }
}
