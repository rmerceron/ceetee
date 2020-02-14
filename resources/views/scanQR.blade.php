@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Scanner le QR code</div>

                    <div class="flex justify-center items-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <scan-qrcode :promotion="{{$promotion}}"></scan-qrcode>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

