<x-layout>
    <div class="container w-25 mt-5">
        <form method="POST" action="/product/{{ $product->id }}/edit" class="text-start">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Handphone" autofocus required value="{{ $product->name ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Smartphone" value="{{ $product->description ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Smartphone" value="{{ $product->price ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <select id="supplier" class="form-select" aria-label="Select Supplier">
                    <option hidden>Select Supplier</option>
                    @foreach ($suppliers as $sup)
                    <option value="{{ $sup->id }}" {{$sup->id == $product->supplier_id ? 'selected' : ''}}>{{ $sup->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select" aria-label="Select Category">
                    <option hidden>Select Category</option>
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-button-save>Save</x-button-save>
        </form>
    </div>
</x-layout>