@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Page Features -->
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">No Of Paticipents</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="/participents" class="btn btn-primary">{{$data['no_of_user']}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">No Of Tests</h5>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">{{$data['no_of_test']}}</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Total Fail Tests</h5>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">{{$data['total_fail']}}</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pass Tests</h5>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">{{$data['total_pass']}}</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
