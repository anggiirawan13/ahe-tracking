<x-layout>
    <div class="container w-25 mt-5">
        <form method="POST" action="/product" class="text-start">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Handphone" autofocus required value="{{ $name ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Smartphone" value="{{ $description ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Smartphone" value="{{ $price ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <select id="supplier" class="form-select" name="supplier" aria-label="Select Supplier">
                    <option hidden>Select Supplier</option>
                    @foreach ($suppliers as $sup)
                    <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select" name="category" aria-label="Select Category">
                    <option hidden>Select Category</option>
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-button-save>Save</x-button-save>
        </form>
    </div>
</x-layout>