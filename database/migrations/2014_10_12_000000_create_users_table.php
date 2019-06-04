<?php

use App\Helpers\Constants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Auto Incrementing Value');
            $table->string('name')->comment('Full Name of the User');
            $table->string('email')->unique()->comment('Unique Email Address of User');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('Hashed Password');
            $table->string('designation')->comment('Position in Company');
            $table->integer('role_id')->default(Constants::USERS_ROLE_USER)->comment('Role Id as Per Constants');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
