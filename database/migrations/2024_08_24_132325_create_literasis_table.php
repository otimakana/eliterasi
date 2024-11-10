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
        Schema::create('literasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('content');
            $table->string('thumbnail');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('author_id')->constrained()->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->string('tautan_siswa');
            $table->string('tautan_guru');
            $table->datetime('start_datetime');
            $table->datetime('end_datetime');
            $table->boolean('is_active')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('literasis');
    }
};