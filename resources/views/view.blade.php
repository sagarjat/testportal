@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/submit" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Hello {{ Auth::user()->name }} Here You Can See Your Result:
                    
                    </div>
                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">No Of Question</th>
                                    <th scope="col">Marks Obtained</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i =1; ?>
                                @foreach ($data as $sub)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$sub->no_of_question}}</td>
                                        <td>{{$sub->no_of_correct_answer}}</td>
                                        <td>{{$sub->status}}</td>
                                        <td><a href="{{ url('viewdetails', [$sub->id] )}}" class="btn btn-xs btn-success pull-right">View Details</a></td>
                                    </tr>
                                    <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button type="/submitexam" class="btn btn-primary">GO Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
