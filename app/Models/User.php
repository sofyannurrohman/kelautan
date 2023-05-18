<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = 'id';
    protected $fillable =["nama","email"];
    public $timestamps = false;
}
?>