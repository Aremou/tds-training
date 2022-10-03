<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug')->unique();
            $table->string('reference');
            $table->string('niveau');
            $table->string('duree');
            $table->string('lieu');
            $table->string('type_formation');
            $table->text('description');
            $table->text('objectif');
            $table->text('prerequis');
            $table->text('public');
            $table->text('acquis')->nullable();
            $table->text('certification')->nullable();
            $table->longText('programme');
            $table->foreignId('categorie_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('formations');
    }
}
