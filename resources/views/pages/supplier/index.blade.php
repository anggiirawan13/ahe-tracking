<x-layout>
    <div class="container mt-5">

        <x-navbar-table addUrl="/supplier-create"></x-navbar-table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">Address</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach ($suppliers as $sup)
                <tr>
                    <th scope="row">{{ $sup->id }}</th>
                    <td>{{ $sup->name }}</td>
                    <td>{{ $sup->contact_info }}</td>
                    <td>{{ $sup->address }}</td>
                    <td class="text-center">
                        <x-button-edit actionUrl="/supplier-edit/{{ $sup->id }}"></x-button-edit>
                        <x-button-delete actionUrl="/{{ $sup->id }}"></x-button-delete>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <x-pagination></x-pagination>
    </div>

</x-layout>