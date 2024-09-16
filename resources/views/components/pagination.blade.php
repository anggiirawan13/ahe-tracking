<div class="d-flex justify-content-between align-items-center">
    <p class="mb-0">Page {{ $data->currentPage() }} of {{ $data->lastPage() }}</p>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @if ($data->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link"><i class="bi bi-chevron-left"></i></span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                    <i class="bi bi-chevron-left"></i>
                </a>
            </li>
            @endif

            @for ($i = 1; $i <= $data->lastPage(); $i++)
                <li class="page-item {{ $data->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                </li>
                @endfor

                @if ($data->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="bi bi-chevron-right"></i></span>
                </li>
                @endif
        </ul>
    </nav>
</div>