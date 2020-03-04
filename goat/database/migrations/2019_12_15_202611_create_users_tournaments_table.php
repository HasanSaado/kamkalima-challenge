<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tournaments', function (Blueprint $table) {
            $table->bigIncrements('userstournaments_id');
            $table->unsignedBigInteger('userstournaments_userid');
            $table->unsignedBigInteger('userstournaments_tournamentid');
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
        Schema::dropIfExists('users_tournaments');
    }
}
