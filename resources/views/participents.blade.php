<!-- @extends('layouts.app') -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello {{ Auth::user()->name }}, Here You Can See All Participents Results:</div>
                <form action="/participents" method="POST">
                    @csrf
                    <div class="inline-block mt-2 ml-2">
                        <input type="text" name="name" id="name" placeholder="search by name">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
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
                                <th scope="col">@sortablelink('name', 'Name Of Candidate')</th>
                                <th scope="col">@sortablelink('no_of_tests', 'No Of Test Taken')</th>
                                <th scope="col">@sortablelink('no_of_pass', 'No Of Cleared Exam')</th>
                                <th scope="col">@sortablelink('no_of_fail', 'No Of Fail Exam')</th>
                                <th scope="col">@sortablelink('no_of_pass', 'Overall Performance %')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1; ?>
                            @foreach ($data as $sub)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$sub->name}}</td>
                                    <td>{{$sub->no_of_tests}}</td>
                                    <td>{{$sub->no_of_pass}}</td>
                                    <td>{{$sub->no_of_fail}}</td>
                                    <td>{{(($sub->no_of_pass)/$sub->no_of_tests)*100}} %</td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <div class="row">                    
                        <div class="col-md-10">
                            {{$data->links("pagination::bootstrap-4")}}
                        </div>
                        <div class="col-md-2">
                            <a href="/home" class="btn btn-primary">GO Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
