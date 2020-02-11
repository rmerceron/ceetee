@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->userType_id == 2)
                    <div class="card-header">Mes commerces</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <shop-trader :tradershops="{{$tradershops}}"></shop-trader>
                    </div>
                @endif
                @if (Auth::user()->userType_id == 3)
                    <div class="card-header">Mes favoris</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <shop-user :tradershops="{{$usershops}}"></shop-user>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
