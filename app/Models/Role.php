<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table="role_table";
    public function user_details(){
        return $this->belongsTo(Home::class);
    }
}
