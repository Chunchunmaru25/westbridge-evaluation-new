<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logistic_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('driver_id')->unique();
            $table->string('vehicle_id')->unique();
            $table->string('package_description');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            $table->dateTime('schedule_pickup_time');
            $table->dateTime('schedule_dropoff_time');
            $table->enum('status',
            [
                'pending',
                'accepted',
                'in_transit',
                'in_progress',
                'arrived',
                'delivered',
                'failed',
                'cancelled',
                'returned',
                'scheduled',
                'dispatching',
                'on_hold',
            ]);
            $table->string('client_name');
            $table->string('client_contact');
            $table->integer('estimated_distance')->nullable();
            $table->integer('estimated_duration')->nullable();
            $table->integer('estimated_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistic_jobs');
    }
};
