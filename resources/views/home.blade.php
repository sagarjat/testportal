<!-- @extends('layouts.app') -->

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        
                        <?php $i=1;?>
                        @foreach ($data as $sub)
                        <div>Question {{$i}}: <span>{{$sub['question']}}</span> </div>
                        <br>
                            <div>Answer {{$i}}:</div>
                            <div class="d-flex flex-column">
                                <?php $required = 1; ?>
                                @foreach ($sub['all'] as $index => $ans)
                                    <label class="radio">
                                    @if ($required == 1)
                                        <input type="radio" name="{{$sub['question']}}" value="{{$ans}}___{{$sub['correct_answer']}}" required>
                                    @else
                                        <input type="radio" name="{{$sub['question']}}" value="{{$ans}}___{{$sub['correct_answer']}}">
                                    @endif
                                        
                                        {{$ans}}
                                    </label>
                                    <?php $required++ ?>
                                @endforeach
                            </div>
                            
                            <hr>
                            <!-- <div>
                            <input type="radio" id="optionC{{$sub['correct_answer']}}" name="option{{$sub['correct_answer']}}" value="C">
                            </div> -->

                            <?php $i++ ?>
                        @endforeach
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
