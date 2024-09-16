<x-layout>
    <div class="container w-25 mt-5">
        <form method="POST" action="/customer/{{ $customer->id }}/edit" class="text-start">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Handphone" autofocus required value="{{ $customer->name ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Smartphone" value="{{ $customer->email ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Smartphone" value="{{ $customer->phone ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Smartphone" value="{{ $customer->address ?? '' }}">
            </div>

            <x-button-save>Save</x-button-save>
        </form>
    </div>
</x-layout>