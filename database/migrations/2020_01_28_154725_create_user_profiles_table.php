<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('sex')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('Address')->nullable();
            $table->string('State')->nullable();
            $table->string('Country')->nullable();
            $table->string('guidance_name')->nullable();
            $table->integer('guidance_number')->nullable();
            $table->string('guidance_address')->nullable();
            $table->longText('about_you')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
