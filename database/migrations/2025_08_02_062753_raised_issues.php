<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('raised_issues', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->text('description');
            $table->string('category'); // Consider lowercase for consistency
            $table->string('status')->default('Not resolved');
            $table->string('location');
            $table->string('image_path')->nullable(); // For uploaded photo
            $table->decimal('latitude', 10, 7)->nullable(); // Accurate lat/lng
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 
    }
};
