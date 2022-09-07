<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;
    protected $table='estates';
    

    protected $fillable=[
  
'building_company',
'description',
'city'
,'location',
'address1',
'address2',
'neighbourhood'
,'price',
'space',
'year',
'garage'
,'rooms_num',
'bathrooms',
'status',
'image1',
'image2',
'image3',
'category_id',
'agency_id',
'state',
'owner_name',
'oEmail',
'owner_phone',
'oAddress',
];

public function estates(){
    return $this->belongsToMany(Categories::class,Agencies::class,'category_id ','	agency_id');
}
}
