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
        Schema::create('outcome', function (Blueprint $table) {
            $table->id();
            $table->string('reason', 45);
            $table->unsignedBigInteger('username_fk');
            $table->foreign('username_fk')->references('username')->on('user')->onDelete('no action');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outcome');
    }
};