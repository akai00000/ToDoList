@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    タスクの新規作成
                </div>
                <div class="card-body">
                    <form method='POST' action="/create_store">
                        @csrf
                        <!-- ユーザーIDのhidden送信 -->
                        <!-- <input type='hidden' name='user_id' value="{{}}"> -->
                        <!-- タイトル -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">・タイトル</label>
                            <input type="text" class="form-control" name="title" placeholder="タイトルを入れてください">
                        </div>
                        <!-- ラベル -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">・ラベル</label>
                            <input type="text" class="form-control" id="rabel" placeholder="ラベルを入れてください">
                        </div>
                        <!-- 優先度 -->
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">・優先度</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">高</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">中</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">低</label>
                            </div>
                        </div>
                        <!-- 内容 -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">・タスク</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <!-- 締切日 -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">・締切日</label><br>
                            <input name="date" type="date">
                        </div>
                        <!-- 送信ボタン -->
                        <button type='submit' class="btn btn-primary btn-lg">作成</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
