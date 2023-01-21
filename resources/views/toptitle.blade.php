@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div id="toptitle">
                <toptitle-component 
                    v-bind:lists="{{ ($lists) }}" 
                    v-bind:ids="{{ ($ids) }}" 
                    v-bind:dasss="{{ ($dasss) }}">
                </toptitle-component>
            </div>
        </div>

    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    <!-- ↓containerdiv -->
</div>

@endsection
