<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_model extends Model
{
    use HasFactory;
    // テーブル名がListsだが、Model名としてListが使えなかったため、List_modelとしている。
    // このモデルが扱えるテーブルはおそらくlists_models？になる可能性があるため、念の為、
    // 別テーブルをつなげるコードを入れている。
    protected $table = "Lists";
    protected $guarded = ['id'];


    public static $rules = array([
        'title' => 'required',
        'rabel' => 'required',
        'rabel_id' => 'nullable',
        'priority' => 'required',
        'deadline' => 'required',
        'content' => 'required',
    ]);
}
