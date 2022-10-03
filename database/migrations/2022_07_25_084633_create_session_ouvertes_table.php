<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionOuvertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_ouvertes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->integer('montant');
            $table->string('type_formation');
            $table->string('lieu');
            $table->string('certification');
            $table->string('examen');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->foreignId('formation_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->string('statut')->default('en cours');
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
        Schema::dropIfExists('session_ouvertes');
    }
}
