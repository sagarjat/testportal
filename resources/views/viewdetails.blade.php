@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="/submit" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">Hello {{ Auth::user()->name }} Here You Can See Your Result:</div>
                            <div class="col-md-2"><button type="/submitexam" class="btn btn-primary">GO Back</button></div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <?php $i =1; $j=1; $res;?>
                        <div class="d-flex justify-content-center"><b>Test No : {{$test_id}}</b></div>
                        @foreach ($data as $sub)  
                            <div class="d-flex flex-column">
                                <?php if($i == 1) {
                                   $res = $sub->result_id;
                                }else {
                                   if($res != $sub->result_id) {
                                        $j++;
                                        $res = $sub->result_id;
                                   }
                                }?>
                                
                                <div><b>Question {{$i}} : </b>{{$sub->question}}</div>
                                <br>
                                <div> <b>Correct Answer: </b>{{$sub->correct_answer}}</div>
                                <div> <b>Marked Answer: </b> {{$sub->submit_answer}}</div>
                                <div> <b> <i>Status: </i></b> {{$sub->question_status}} <span class="{{$sub->question_status}}"></span></div>
                                
                            </div>
                            <hr>
                            <?php $i++; ?>
                        @endforeach
                    </div>
                    
                </div>
                <div class="card-footer">
                <div class="text-center"><button type="/submitexam" class="btn btn-primary">GO Back</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
