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
        return view('top');
    }

    public function top()
    {
        $user = \Auth::user();
        $user_id = $user['id'];
        //// dd($user_id);
        $rabels = rabel::select('rabel_content')->where('user_id', $user_id)->get();
        // dd($rabels);
        $titles = List_model::select('title')->where('user_id', $user_id)->orderBy('deadline', 'asc')->get();
        // dd($titles);
        return view('top', compact('rabels', 'titles'));
    }

    public function create()
    {
        $user = \Auth::user();
        $user_id = $user['user_id'];
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
        $exist_rabel = rabel::where('user_id', $user_id)->where('rabel_content', $data['rabel'])->first();
        if(empty($exist_rabel['rabel_id']) )
        {
            //↓リクエストされたラベルを挿入し、挿入時に生成されたraelsのIDを受け取る。
            $rabel_id = rabel::insertGetId(['rabel_content' => $data['rabel'], 'user_id' => $user_id]);
        } else {
            $rabel_id = $exist_rabel['rabel_id'];
        }

        $list->fill([
            'user_id' => $user_id, 
            'title' => $data['title'], 
            'rabel' => $data['rabel'], 
            'rabel_id' => $rabel_id, 
            'priority' => $data['priority'], 
            'status' => 1, 
            'deadline' => $data['deadline'], 
            'content' => $data['content'], 
            ])->save();

        return redirect()->route('top')->with('success', 'タスクを追加しました。');
    }
}
