@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-2">
            <div class="card">
                <div class="card-header">ラベル一覧</div>

                <div class="card-body">

                    <div class="rabel-block">
                            <div class="d-flex flex-column" style="height: 200px;">
                            @foreach($rabels as $rabel)
                            <div class="flex-fill border">
                                <a href = "">{{ $rabel['rabel_content'] }}</a>
                            </div>  
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">タスク</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>



        </div>

        <div class="col-md-4">
            <div class="card">

                <div class="card-header">締切順</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="title-block">
                        <div class="d-flex flex-column">
                            @foreach($titles as $title_content)
                            <div class="flex-fill border">
                                <a href = "">{{ $title_content['title'] }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

<!-- ↓containerdiv -->
</div>



@endsection
