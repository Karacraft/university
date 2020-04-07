<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssembliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assemblies', function (Blueprint $table) {
            $table->id();
            $table->string('batch_number');
            $table->string('assembly_name');
            $table->string('mold');
            $table->integer('mold_id');
            $table->integer('planned_qty')->nullable();
            $table->integer('produced_qty')->nullable();
            $table->string('shift');
            $table->integer('shift_id');
            $table->integer('supervisor')->nullable();
            $table->integer('skilled')->nullable();
            $table->integer('unskilled')->nullable();
            $table->timestamp('production_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assemblies');
    }
}
