<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table="country_table";
    public function user_details(){
        return $this->belongsTo(Home::class);
    }
}
