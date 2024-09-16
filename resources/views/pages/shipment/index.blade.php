<x-layout menuName="Shipment">
    <div class="container mt-5">

        <x-navbar-table addUrl="shipment.create"></x-navbar-table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tracking Number</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Ship Date</th>
                    <th scope="col">Delivery Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach ($shipments as $ship)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ship->tracking_number }}</td>
                    <td>{{ $ship->company_name }}</td>
                    <td>{{ $ship->ship_date }}</td>
                    <td>{{ $ship->delivery_date }}</td>
                    <td>{{ $ship->status }}</td>
                    <td class="text-center">
                        <x-button-edit actionUrl="/shipment/{{ $ship->id }}/edit"></x-button-edit>
                        <x-button-delete actionUrl="/{{ $ship->id }}"></x-button-delete>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <x-pagination></x-pagination>
    </div>

</x-layout>