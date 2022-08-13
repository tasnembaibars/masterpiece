<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;
    protected $table='states';
    

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
'state'
];

public function estates(){
    return $this->belongsToMany(Categories::class,Agencies::class,'category_id ','	agency_id');
}
}
