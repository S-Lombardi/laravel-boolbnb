<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('apartment_sponsorship', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartment_id')->constrained();
            $table->foreignId('sponsorship_id')->constrained();
            $table->timestamps(); // 'created_at' e 'updated_at'
            $table->timestamp('expire_date')->nullable(); // Aggiunto per la colonna 'expire_date'

            // Indice composto per ottimizzare le ricerche
            $table->index(['apartment_id', 'sponsorship_id', 'expire_date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('apartment_sponsorship');
    }
};
