@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acceuil</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Auth::user() != null && Auth::user()->userType_id == 3)
                            <shop-favory :shops="{{$shops}}" :usershops="{{$usershops}}"></shop-favory>
                        @else
                            <shop-card :shops="{{$shops}}"></shop-card>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

