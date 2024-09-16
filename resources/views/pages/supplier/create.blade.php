<x-layout>
    <div class="container w-25 mt-5">
        <form method="POST" action="/supplier" class="text-start">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Handphone" autofocus required value="{{ $name ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="contact-info" class="form-label">Contact Info</label>
                <input type="text" class="form-control" id="contact-info" name="contact_info" placeholder="Handphone" autofocus required value="{{ $contact_info ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Smartphone" value="{{ $address ?? '' }}">
            </div>

            <x-button-save>Save</x-button-save>
        </form>
    </div>
</x-layout>