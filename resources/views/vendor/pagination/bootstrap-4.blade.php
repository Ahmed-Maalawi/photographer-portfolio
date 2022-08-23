{{--<!-- Pagination -->--}}
{{--<ul class="news-pagination-wrap align-center mt-90">--}}
{{--    <li><a href="#"><i class="ti-angle-left"></i></a></li>--}}
{{--    <li><a href="#" class="active">1 </a></li>--}}
{{--    <li><a href="#">2 </a></li>--}}
{{--    <li><a href="#">3 </a></li>--}}
{{--    <li><a href="#"><i class="ti-angle-right"></i></a></li>--}}
{{--</ul>--}}
@if ($paginator->hasPages())
    <nav>
{{--        <ul class="pagination">--}}
        <ul class="news-pagination-wrap align-center mt-90">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--                </li>--}}
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a><i class="ti-angle-left"></i></a></li>

            @else
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
                <li><a href="{{ $paginator->previousPageUrl() }}"><i class="ti-angle-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
{{--                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}
                            <li class="active" aria-current="page"><a class="active">{{ $page }} </a></li>
                        @else
{{--                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
                            <li><a href="{{ $url }}">{{ $page }} </a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            @else
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--                </li>--}}
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a><i class="ti-angle-right"></i></a></li>
            @endif
        </ul>
    </nav>
@endif
