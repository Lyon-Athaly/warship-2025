<?php

use App\Models\Type;
use App\Models\Dock;
use App\Models\Nation;
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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Type::class);
            $table->foreignIdFor(Dock::class);
            $table->foreignIdFor(Nation::class);
            $table->integer('hull_number');
            $table->year('built_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};
