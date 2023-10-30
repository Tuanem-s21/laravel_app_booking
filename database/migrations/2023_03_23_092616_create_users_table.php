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
        Schema::create('manage', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('gender')->default(1)->comment("1: Male & 2: Female");
            $table->string('phone');
            $table->string('address');
            $table->tinyInteger('level')->default(1)->comment("1: Copper & 2: Silver & 3: Gold & 4: Diamond");
            $table->tinyInteger('status')->default(1)->comment("1: Active & 2: Block");

            $table->index(['email', 'firstname','lastname', 'level', 'phone']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
