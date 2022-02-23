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
        Schema::create('immunization', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->string('age');
            $table->string('vaccine_type');
            $table->string('date');
            $table->string('doctor');
            $table->string('hospital');
            $table->string('notes');
            $table->string('mother_name');
            $table->string('next_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immunization');
    }
};
