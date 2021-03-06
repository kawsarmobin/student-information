@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="text-align: center">
                        Welcome Mr/Mrs - <br>
                        {{ ucwords(Auth::user()->name) }}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
