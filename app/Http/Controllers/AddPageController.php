<?php namespace App\Http\Controllers;

use App\Add;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Input;

class AddPageController extends Controller {

 public function index(){
  
  return view('hotel.addHotels');
 }

 public function create(){

    $input = Request::all();
    $model = new Add;
    Add::create($input);
  	return redirect('/add');
 }

}















	


  