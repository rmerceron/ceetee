@extends('layouts.app')

@section('content')
    <div class="container">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div id="app" class=" flex justify-center items-center">
                        <shop-card :shops="{{$shops}}" ></shop-card>
                    </div>

                    <script src="./js/app.js"></script>
                </div>
            </div>
        </div>
    </div>
@endsection

