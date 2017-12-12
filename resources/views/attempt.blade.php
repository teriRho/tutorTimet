@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$attempt_type}} Attempt Screen</div>

                    <div class="panel-body">

                        <div class="col-sm-12">


                            <form action="/attempt" method="post" role="form">
                                {{csrf_field()}}
                                {{--<div class="form-group">--}}
                                {{--<label for=""></label>--}}
                                {{--<input type="text" class="form-control" name="" id="" placeholder="Input...">--}}
                                {{--</div>--}}

                                <input type="hidden" name="kind" value="{{$attempt_type}}">
                                <div class="col-sm-12">


                                    
                                    
                                    
                                    <div class="col-sm-6">
                                        <label for="test_type">Test Type</label>
                                        <select name="test_type" id="test_type" class="form-control">
                                            <option value="1" selected>Reading</option>
                                            <option value="2">Writing</option>
                                        </select>
                                    </div>


                                    <div class="col-sm-6">
                                        <label for="test_type">Difficulty Level</label>
                                        <select name="difficulty_level" id="test_type" class="form-control">
                                            <option value="1" selected>Easy</option>
                                            <option value="2">Medium</option>
                                            <option value="2">Difficult</option>
                                        </select>
                                    </div>


                                    @if($attempt_type == 'Practice')

                                        <div class="col-sm-6">
                                            <label for="number_of_questions">Number of Questions</label>
                                            <select name="number_of_questions" id="test_type" class="form-control">
                                                <option value="5" selected>5</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>

                                        @endif
                                </div>

                                <div class="clearfix"></div>
                                <div class="padd-up">
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                </div>
                            </form>


                        </div>


                        </div>




                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
