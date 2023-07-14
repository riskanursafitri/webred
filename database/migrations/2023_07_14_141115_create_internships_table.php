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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->string('phone_number', 16)->nullable();
            $table->enum(
                'role',
                [
                    'School',
                    'University'
                ]
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
