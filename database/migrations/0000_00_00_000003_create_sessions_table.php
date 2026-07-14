<?php

use Novalites\Database\Schema\Blueprint;
use Novalites\Database\Schema\Schema;

return new class
{
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id');
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();

            $table->primaryColumn = 'id';
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
