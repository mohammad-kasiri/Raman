@if ($paginator->hasPages())
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center flex-wrap">
                <div class="d-flex flex-wrap mr-3">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <a class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" aria-label="@lang('pagination.previous')">
                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                        </a>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" aria-label="@lang('pagination.previous')">
                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                {{ $element }}
                            </a>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1 active" aria-current="page">
                                        {{ $page }}
                                    </a>
                                @else
                                    <a href="{{ $url }}" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" aria-current="page">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}"  rel="next" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" aria-label="@lang('pagination.next')">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </a>

                    @else
                        <a  class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"  aria-disabled="true" aria-label="@lang('pagination.next')">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endif
