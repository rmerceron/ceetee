@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>


                    <div id="app" class=" flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <shop-card :shops="{{$shops}}" ></shop-card>
                    </div>

                    <script src="./js/app.js"></script>
                </div>
            </div>
        </div>
    </div>
@endsection

