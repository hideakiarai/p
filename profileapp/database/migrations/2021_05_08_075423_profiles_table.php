<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('user_name');
            $table->string('profession');
            $table->string('country');
            $table->string('self_introduction');
            $table->updated_by();
            $table->updated_at();
            $table->created_by();
            $table->created_at();
            $table->deleted_at();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
