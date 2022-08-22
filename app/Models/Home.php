<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table='user_details';

    public function role(){
        return $this->hasOne(Role::class);
    }
    public function country(){
        return $this->hasOne(Country::class);
    }


}
