<x-layout>
    <div class="container w-25 mt-5">
        <form method="POST" action="/category" class="text-start">
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

            <x-button-save>Save</x-button-save>
        </form>
    </div>
</x-layout>