<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class join extends Model
{
    use HasFactory;
    protected $table='joins';
    protected $fillable=[
'name',
'email',
'phone'
,'subscription'
,'agency_name'
,'agency_desc'
];
}
