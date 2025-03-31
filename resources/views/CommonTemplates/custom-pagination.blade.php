@if ($paginator->hasPages())
    <nav>
        <ul class="pagination d-flex flex-wrap justify-content-center px-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">«</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">«</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @php
                $totalPages = $paginator->lastPage();
                $currentPage = $paginator->currentPage();
                $halfTotalLinks = floor(5 / 2); // Show 3 pages max
                $start = max(1, $currentPage - $halfTotalLinks);
                $end = min($totalPages, $start + 4);
                
                if ($end - $start < 4) {
                    $start = max(1, $end - 4);
                }
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">»</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">»</span></li>
            @endif
        </ul>
    </nav>
@endif
