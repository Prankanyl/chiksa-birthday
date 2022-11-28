@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 heart-block">
                <div class="heart" style=""></div>
            </div>
        </div>
        <div class="row">
            <div class="text-description">
                {!! __('main.description') !!}
            </div>
        </div>
        <div class="row">
            <div class="text-description">
                {!! __('main.way') !!}
            </div>
        </div>
        <div class="row">
            <div class="btn-group">
                <div class="col-sm-6">
                    <a href="{{ route('question-show') }}" class="btn btn3">{!! __('btn.start') !!}</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('easy-way') }}" class="btn btn4">{!! __('btn.easy') !!}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
