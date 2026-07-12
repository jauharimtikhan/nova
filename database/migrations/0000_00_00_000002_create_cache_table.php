<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

return new class
{
    public function up(): void
    {
        Capsule::schema()->create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->longText('value');
            $table->integer('expiration');
        });
    }

    public function down(): void
    {
        Capsule::schema()->dropIfExists('cache');
    }
};
