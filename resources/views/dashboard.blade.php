@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="col-sm-12">

                            <div class="col-sm-6">
                                <p class="heading-title">Previous Attempts</p>
                                <div class="col-sm-12">

                                        @foreach($history as $h)
                                            <p><b>Attempt ID: {{$h->id}} </b> Score: <span class="score">%{{$h->score}}</span> @if($h->is_practice)<span class="label label-info">Practice </span>@endif</p>
                                        @endforeach

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p class="heading-title">Attempt New</p>
                                <div class="col-sm-12 padd-down">
                                    <div class="col-sm-6"><p>Attempt Test </p></div>
                                    <div class="col-sm-6"><a href="/attempt/Test">
                                            <button class="btn btn-success">Attempt</button>
                                        </a></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6"><p>Attempt Practive </p></div>
                                    <div class="col-sm-6"><a href="/attempt/Practice">
                                            <button class="btn btn-primary">Attempt</button>
                                        </a></div>
                                </div>
                                <div class="col-sm-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
