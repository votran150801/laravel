<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $table = 'planes';
    public $fillable = [
        'name','image','brands_id' , 'desc','status'
    ];
    public function brand(){
        return $this->belongsTo(Brands::class , 'brands_id');
    }
}
