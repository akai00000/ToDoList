@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">タスク</div>

                <div class="card-body">
                    
                    {{ __('You are logged in!') }}

                    <div id="vueDataGet">
                        <vueDataGet-component></vueDataGet-component>
                    </div>
                </div>
            </div>

            <script src="{{ mix('js/app.js') }}"></script>

        </div>

    </div>
<!-- ↓containerdiv -->
</div>



@endsection
