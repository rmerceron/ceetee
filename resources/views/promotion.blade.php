@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (Auth::user() != null && Auth::user()->userType_id == 2)
                    <div class="card-header">Mes promotions</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <promotion-card :promotions="{{$promotions}}"></promotion-card>
                    </div>
                    @else
                        <div class="card-header">Mes promotions</div>

                        <div class="flex justify-center items-center">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <promotion-user :promotions="{{$promotions}}"></promotion-user>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

