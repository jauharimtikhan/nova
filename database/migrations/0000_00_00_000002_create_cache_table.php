<?php

use Novalites\Database\Schema\Blueprint;
use Novalites\Database\Schema\Schema;

return new class
{
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key');
            $table->longText('value');
            $table->integer('expiration');

            $table->primaryColumn = 'key';
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cache');
    }
};
