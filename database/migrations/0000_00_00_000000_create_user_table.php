<?php

use Novalites\Database\Schema\Blueprint;
use Novalites\Database\Schema\Schema;

return new class
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->dateTime('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
