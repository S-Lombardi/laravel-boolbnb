<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_sponsorships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartment_id')->constrained('apartments');
            $table->foreignId('sponsorship_id')->constrained('sponsorships');
            $table->timestamps();
            $table->timestamp('expire_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_sponsorships');
    }
};
