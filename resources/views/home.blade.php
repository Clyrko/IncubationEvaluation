@extends('layouts.app')

@section('content')



{{-- <div class="container"> --}}
{{-- <form action="/survey" method="push"> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <center>
                <div class="card-header">Welcome</div> {{-- The Card title--}}
              </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>
{{-- </form> --}}
@endsection