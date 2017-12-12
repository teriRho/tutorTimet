@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Test</div>

                    <div class="panel-body" style="padding-left:10px;">

                        <form action="/attempt/{{$test->id}}" method="post" role="form">
                            {{csrf_field()}}
                            {{--<legend>Practice Test</legend>--}}
                            {{--<h2> THE MEN OF BREWSTER PLACE</h2>--}}
                            @foreach($questions as $question)

                                {{--{{dd($question)}}--}}
                            <blockquote>
                                {{$question[0]->article->article}}
                            </blockquote>

                            <h3>Questions:</h3>
                                @foreach($question as $q)
                                    <h4> {{$loop->index + 1 . '- ' .  $q->question}}</h4>
                                    <ol type="a">
                                        <div class="form-group">
                                        @foreach($q->answer as $answer)
                                        <li>
                                        <input  type="radio" name="{{$q->id}}" id="{{$answer->id}}" value="{{$answer->id}}" required>
                                            {{$answer->answer}}
                                        </li>
                                            @endforeach
                                        </div>
                                    </ol>
                                @endforeach
                            @endforeach

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                        <div class="col-sm-12">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
