<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model {

	protected  $fillable =[
            'hotel_Name',
            'hotel_Address',
            'hotel_city',
            'created_at',
            'updated_at'
        ];

      

}
