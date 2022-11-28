@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="gif-block">
                <img src="https://i.gifer.com/1V8t.gif" alt="this slowpoke moves"  width="250" />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-description">
                    {!! __('main.description_for_easy') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="btn-group">
                <div class="col-sm-12">
                    <a href="{{ route('home') }}" class="btn btn3">{!! __('btn.return') !!}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
