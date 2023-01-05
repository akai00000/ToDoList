<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rabel extends Model
{
    use HasFactory;

    protected $table = "rabels";
    protected $guarded = ['rabel_id'];

    // public static $rules = array([
    //     'status' => 'required',
    //     ]);
}
