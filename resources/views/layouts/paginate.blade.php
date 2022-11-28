@if ($paginator->hasPages())
    <div class="row">
        <div class="btn-group">
            <div class="col-sm-6">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a href="{{ route('home') }}" class="btn btn3" rel="prev">{!! __('main.home') !!}</a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn3" rel="prev">@lang('pagination.previous')</a>
                @endif
            </div>
            <div class="col-sm-6">
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="btn btn4" rel="next">@lang('pagination.next')</a>
                @else
                    <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
                @endif
            </div>
        </div>
    </div>
@endif
