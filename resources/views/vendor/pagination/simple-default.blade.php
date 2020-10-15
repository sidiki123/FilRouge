@if ($paginator->hasPages())

    <div class="col-lg-12">
            <div class="pagination__links">
                 @if ($paginator->onFirstPage())
                    <a class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                @endif 

                    {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="disabled" aria-disabled="true"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" aria-current="page"><span>{{ $page }}</span></a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
                @endforeach
                
                 {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                @else
                    <a class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></a>
                @endif
            </div>
        </div>
@endif
