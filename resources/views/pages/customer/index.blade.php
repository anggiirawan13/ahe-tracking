<x-layout>
    <div class="container mt-5">

        <x-navbar-table addUrl="/customer-create"></x-navbar-table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach ($customers as $cust)
                <tr>
                    <th scope="row">{{ $cust->id }}</th>
                    <td>{{ $cust->name }}</td>
                    <td>{{ $cust->email }}</td>
                    <td>{{ $cust->phone }}</td>
                    <td>{{ $cust->address }}</td>
                    <td class="text-center">
                        <x-button-edit actionUrl="/customer-edit/{{ $cust->id }}"></x-button-edit>
                        <x-button-delete actionUrl="/{{ $cust->id }}"></x-button-delete>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <x-pagination></x-pagination>
    </div>

</x-layout>