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
            $table->string('PINo')->nullable();
            $table->date('PIDate')->nullable();
            $table->decimal('APValue', 15, 2)->nullable();
            $table->date('APDate')->nullable();
            $table->string('CINo')->nullable();
            $table->decimal('CIValue', 15, 2)->nullable();
            $table->date('CIDate')->nullable();
            $table->string('BLNo')->nullable();
            $table->date('BLDate')->nullable();
            $table->date('ETA')->nullable();
            $table->decimal('BPValue', 15, 2)->nullable();
            $table->date('BPDate')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
