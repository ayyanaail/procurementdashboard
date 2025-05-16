<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->string('VendorName');
            $table->string('PQNo');
            $table->date('PQDate');
            $table->string('PINo');
            $table->date('PIDate');
            $table->decimal('APValue', 15, 2);
            $table->date('APDate');
            $table->string('CINo');
            $table->decimal('CIValue', 15, 2);
            $table->date('CIDate');
            $table->string('BLNo');
            $table->date('BLDate');
            $table->date('ETA');
            $table->decimal('BPValue', 15, 2);
            $table->date('BPDate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
