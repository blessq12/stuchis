<?php

use App\Models\CarpetsType;
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
        Schema::create('carpets_heights', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CarpetsType::class);
            $table->string('height_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carpets_heights');
    }
};
