<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\List_model;
use App\Models\rabel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function top()
    {
        return view('top');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $user = \Auth::user();
        $user_id = $user['id'];
        // dd($user_id);
        $list = new List_model;
        $data = $request->all();
        // array_unshift($data,'user_id');
        // dd($data);
        unset($data['_token']);

// ↓あとでユーザーIDはカラムに入れておく。
        $exist_rabel = rabel::where('rabel_content', $data['rabel'])->first();
        if(empty($exist_rabel['rabel_id']) )
        {
            $rabel_id = rabel::insertGetId(['rabel_content' => $data['rabel']]);
        } else {
            $rabel_id = $exist_rabel['rabel_id'];
        }


        $list->fill(['user_id' => $user_id, 'rabel_id' => $rabel_id, 'status' => 1])->fill($data)->save();

        return redirect('/top');
    }
}
