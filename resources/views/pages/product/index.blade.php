<x-layout>
    <div class="container mt-5">

        <x-navbar-table addUrl="/product-create"></x-navbar-table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Category</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach ($products as $prod)
                <tr>
                    <th scope="row">{{ $prod->id }}</th>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->description }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->supplier->name }}</td>
                    <td>{{ $prod->category->name }}</td>
                    <td class="text-center">
                        <x-button-edit actionUrl="/product-edit/{{ $prod->id }}"></x-button-edit>
                        <x-button-delete actionUrl="/{{ $prod->id }}"></x-button-delete>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <x-pagination></x-pagination>
    </div>

</x-layout>