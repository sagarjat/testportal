@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/submit" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">{{ __('Welcome') }} {{ Auth::user()->name }}
                    
                    </div>
                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('failure'))
                            <div class="alert alert-danger">
                                {{ session('failure') }}
                            </div>
                        @endif
                        <a href="/starttest" class="btn btn-xs btn-primary pull-right">Start Test</a>
                        <a href="/view" class="btn btn-xs btn-primary pull-right">View Result</a>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
