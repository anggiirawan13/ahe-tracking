<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number')->unique();
            $table->string('company_name');
            $table->string('whatsapp');
            $table->string('status');
            $table->string('origin_city');
            $table->string('origin_district');
            $table->string('origin_village');
            $table->string('origin_rt');
            $table->string('origin_rw');
            $table->string('origin_postal_code');
            $table->string('destination_city');
            $table->string('destination_district');
            $table->string('destination_village');
            $table->string('destination_rt');
            $table->string('destination_rw');
            $table->string('destination_postal_code');
            $table->date('ship_date');
            $table->date('delivery_date')->nullable();
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
