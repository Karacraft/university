<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Auto Increment ID');
            $table->string('title', 255)->unique()->comment('Unique Title');
            $table->string('slug')->unique()->comment('Unique Slug');
            $table->string('model')->nullable();    //users
            $table->string('method')->nullable();   //view,create,update,delete,edit,show
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
        Schema::dropIfExists('permissions');
    }
}
