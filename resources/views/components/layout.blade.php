<x-header></x-header>
<div class="d-flex">
    <x-sidebar></x-sidebar>
    <div class="w-100">
        <nav class="navbar bg-dark text-white text-bg-dark d-flex justify-content-between">
            <div class="card-header bg-dark text-white d-flex ps-2">
                <h4 class="mb-0">{{ $menuName ?? 'Shipment Application'}}</h4>
            </div>

            <div class="d-flex align-items-center justify-content-end pe-2">
                <span class="text-bg-dark pe-2 fw-bold">Anugrah Hadi Electric</span>

                <img src="{{asset('LOGO_SMALL.jpg') }}" alt="Logo AHE" style="width: 4%;" />
            </div>
        </nav>

        {{ $slot }}
    </div>

    <x-footer></x-footer>