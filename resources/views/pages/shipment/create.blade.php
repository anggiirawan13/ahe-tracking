<x-layout menuName="Create Shipment">
    <div class="container mt-5">

        <x-breadcrumb routeName="shipment.index" menuName="Shipment" currentMenu="Create"></x-breadcrumb>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('shipment.store') }}" method="POST">
                    @csrf

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Shipment Details</h4>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tracking_number" class="form-label">Tracking Number</label>
                                <input type="text" class="form-control" id="tracking_number" name="tracking_number" placeholder="Enter tracking number" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status" required>
                                    <option value="" disabled selected>Select status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="ship_date" class="form-label">Ship Date</label>
                                <input type="date" class="form-control" id="ship_date" name="ship_date" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="delivery_date" class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                            </div>
                            <div class="col-md-6">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter Whatsapp Number" required>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Origin Information</h4>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_city" class="form-label">Origin City</label>
                                <input type="text" class="form-control" id="origin_city" name="origin_city" placeholder="Enter origin city" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_district" class="form-label">Origin District</label>
                                <input type="text" class="form-control" id="origin_district" name="origin_district" placeholder="Enter origin district" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_village" class="form-label">Origin Village</label>
                                <input type="text" class="form-control" id="origin_village" name="origin_village" placeholder="Enter origin village" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_rt" class="form-label">Origin RT</label>
                                <input type="text" class="form-control" id="origin_rt" name="origin_rt" placeholder="Enter origin RT" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="origin_rw" class="form-label">Origin RW</label>
                                <input type="text" class="form-control" id="origin_rw" name="origin_rw" placeholder="Enter origin RW" required>
                            </div>
                            <div class="col-md-6">
                                <label for="origin_postal_code" class="form-label">Origin Postal Code</label>
                                <input type="text" class="form-control" id="origin_postal_code" name="origin_postal_code" placeholder="Enter origin postal code" required>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 mb-4">
                        <div class="card-header bg-dark text-white d-flex mb-3">
                            <h4 class="mb-0">Destination Information</h4>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_city" class="form-label">Destination City</label>
                                <input type="text" class="form-control" id="destination_city" name="destination_city" placeholder="Enter destination city" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_district" class="form-label">Destination District</label>
                                <input type="text" class="form-control" id="destination_district" name="destination_district" placeholder="Enter destination district" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_village" class="form-label">Destination Village</label>
                                <input type="text" class="form-control" id="destination_village" name="destination_village" placeholder="Enter destination village" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_rt" class="form-label">Destination RT</label>
                                <input type="text" class="form-control" id="destination_rt" name="destination_rt" placeholder="Enter destination RT" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="destination_rw" class="form-label">Destination RW</label>
                                <input type="text" class="form-control" id="destination_rw" name="destination_rw" placeholder="Enter destination RW" required>
                            </div>
                            <div class="col-md-6">
                                <label for="destination_postal_code" class="form-label">Destination Postal Code</label>
                                <input type="text" class="form-control" id="destination_postal_code" name="destination_postal_code" placeholder="Enter destination postal code" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="justify-content-between">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>