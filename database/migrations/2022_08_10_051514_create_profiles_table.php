<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id"); //Foreign key
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("linkUrl")->nullable();
            $table->string("profileImage")->nullable();
            $table->timestamps();

            $table->index("user_id"); //For quick search
        });
    }

    /**
     * Reverse the migrations., reversing what you did
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
