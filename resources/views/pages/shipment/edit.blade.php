<x-layout menuName="Edit Shipment">
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('shipment.index') }}">Shipment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('shipment.update', $shipment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Shipment Details</h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tracking_number" class="form-label">Tracking Number</label>
                                <input type="text" class="form-control" id="tracking_number" name="tracking_number" value="{{ old('tracking_number', $shipment->tracking_number) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $shipment->company_name) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status" required>
                                    <option value="Pending" {{ $shipment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Shipped" {{ $shipment->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                    <option value="Delivered" {{ $shipment->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="ship_date" class="form-label">Ship Date</label>
                                <input type="date" class="form-control" id="ship_date" name="ship_date" value="{{ old('ship_date', $shipment->ship_date) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="delivery_date" class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" id="delivery_date" name="delivery_date" value="{{ old('delivery_date', $shipment->delivery_date) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $shipment->whatsapp) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Origin Information</h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_city" class="form-label">City</label>
                                <input type="text" class="form-control" id="origin_city" name="origin_city" value="{{ old('origin_city', $shipment->origin_city) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_district" class="form-label">District</label>
                                <input type="text" class="form-control" id="origin_district" name="origin_district" value="{{ old('origin_district', $shipment->origin_district) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_village" class="form-label">Village</label>
                                <input type="text" class="form-control" id="origin_village" name="origin_village" value="{{ old('origin_village', $shipment->origin_village) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_postal_code" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="origin_postal_code" name="origin_postal_code" value="{{ old('origin_postal_code', $shipment->origin_postal_code) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_rt" class="form-label">RT</label>
                                <input type="text" class="form-control" id="origin_rt" name="origin_rt" value="{{ old('origin_rt', $shipment->origin_rt) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_rw" class="form-label">RW</label>
                                <input type="text" class="form-control" id="origin_rw" name="origin_rw" value="{{ old('origin_rw', $shipment->origin_rw) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Destination Information</h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_city" class="form-label">City</label>
                                <input type="text" class="form-control" id="destination_city" name="destination_city" value="{{ old('destination_city', $shipment->destination_city) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_district" class="form-label">District</label>
                                <input type="text" class="form-control" id="destination_district" name="destination_district" value="{{ old('destination_district', $shipment->destination_district) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_village" class="form-label">Village</label>
                                <input type="text" class="form-control" id="destination_village" name="destination_village" value="{{ old('destination_village', $shipment->destination_village) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_postal_code" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="destination_postal_code" name="destination_postal_code" value="{{ old('destination_postal_code', $shipment->destination_postal_code) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_rt" class="form-label">RT</label>
                                <input type="text" class="form-control" id="destination_rt" name="destination_rt" value="{{ old('destination_rt', $shipment->destination_rt) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_rw" class="form-label">RW</label>
                                <input type="text" class="form-control" id="destination_rw" name="destination_rw" value="{{ old('destination_rw', $shipment->destination_rw) }}" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="justify-content-between">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>