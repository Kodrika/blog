@if ($paginator->hasPages())
    <div class="flex flex-wrap justify-center -mx-6">
        <ul class="font-libre text-base flex list-reset border border-grey-light rounded w-auto bg-white">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><p class="block text-darkslategray text-black border-r border-grey-light px-3 py-2">@lang('pagination.previous')</p></li>
            @else
                <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2"
                       href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><p class="block text-darkslategray text-black border-r border-grey-light px-3 py-2">{{ $element }}</p></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><p class="block text-darkslategray text-black border-r border-grey-light px-3 py-2">{{ $page }}</p></li>
                        @else
                            <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2"
                                   href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2"
                       href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a></li>
            @else
                <li><p class="block text-darkslategray text-black border-r border-grey-light px-3 py-2">@lang('pagination.nex')</p></li>>
            @endif
        </ul>
    </div>
@endif
