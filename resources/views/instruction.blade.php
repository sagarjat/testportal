@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Welcome') }} {{ Auth::user()->name }}
                    </div>
                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">
                            <b>Instruction</b>
                        </div>
                        <ul>
                            <li>Welcome into Test Portal</li>
                            <li>Exam has Total 10 Questions</li>
                            <li>Each question carry equal 1 marks.
                            <li>Negative Marking Exam : <b>NO</b></li>
                            <li>All Question Compulsory to attempt </li>
                            <li>Once start the test please do not reload the page otherwise all question get reset.</li>
                        </ul>
                        <div class="text-center">
                            <a href="/starttest" class="btn btn-xs btn-primary pull-right">Proceed</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
