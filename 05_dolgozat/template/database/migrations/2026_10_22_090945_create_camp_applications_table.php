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
        Schema::create('camp_applications', function (Blueprint $table) {
            $table->id();
            $table->string('child_name', 100);
            $table->string('parent_email');
            $table->unsignedTinyInteger('age');
            $table->unsignedTinyInteger('camp_session');
            $table->string('accomodation', 20);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_applications');
    }
};
