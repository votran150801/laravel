<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $table = 'brands';
    public function pland(){
        return $this->hasMany(Planes::class , 'brands_id');
    }
    public $fillable = [
        'name','image','address'
    ];
}
