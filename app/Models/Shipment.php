<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $table = 'shipments';  // Nama tabel jika berbeda dari konvensi default

    protected $fillable = [
        'tracking_number',
        'company_name',
        'whatsapp',
        'status',
        'origin_city',
        'origin_district',
        'origin_village',
        'origin_rt',
        'origin_rw',
        'origin_postal_code',
        'destination_city',
        'destination_district',
        'destination_village',
        'destination_rt',
        'destination_rw',
        'destination_postal_code',
        'ship_date',
        'delivery_date',
        'created_by',
        'updated_by',
    ];

    public $timestamps = true;

    protected $dates = ['deleted_at'];
}
