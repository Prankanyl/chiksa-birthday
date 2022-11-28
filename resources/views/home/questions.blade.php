@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @foreach($questions as $single)
        <div class="row">
            <div class="gif-block">
                <img src="{{ $single->image }}"  width="250" />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-description">
                    {!! $single->question[0] !!}
                </div>
                <ol class="pills">
                    @foreach($single->question[1] as $answer)
                    <li>{{ json_decode($answer)[0] }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
        @endforeach
        @if(count($questions) > 0)
            {{ $questions->links('layouts.paginate') }}
        @endif
    </div>
@endsection
