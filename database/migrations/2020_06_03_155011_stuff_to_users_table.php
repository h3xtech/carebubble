<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StuffToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pcn')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->nullable();
            $table->boolean('translator')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('religion')->nullable();
            $table->text('allergies')->nullable();
            $table->boolean('DNAR')->nullable();
            $table->text('DNAR_where')->nullable();
            $table->boolean('pets')->nullable();
            $table->boolean('smoke')->nullable();
            $table->text('support')->nullable();
            $table->text('notes')->nullable();
            $table->text('referered_by')->nullable();
            $table->text('referered_to')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
