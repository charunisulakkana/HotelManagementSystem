<?php namespace App\Http\Controllers;

use App\Add;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Input;

class SearchPageController extends Controller {

	public function index(){
		return view('hotel.searchhotels');
	}

	public function show(){

		if(isset($_POST)){
		$shows = Add::orderBy('hotel_city','asc')->get();
		//$shows = DB::table('adds')->select('hotel_city')->get();		
		//$shows = DB::table('adds')->get();

		foreach ($shows as $show)
		{
			var_dump($show->hotel_city);
			//var_dump($show->hotel_Name);
			//var_dump($show->hotel_Address);
			
		}
		//return view('hotel.searchHotels', compact('shows'));
	//}

 	
		}


	}
}

 