@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter une promotion</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <create-promotion :shopselected="{{$shopselected}}"></create-promotion>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

