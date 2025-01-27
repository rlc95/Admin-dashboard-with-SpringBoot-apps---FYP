<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->tinyIncrements('uri')->comment('User Role ID');
            $table->string('urn',50)->unique()->comment('User Role Name');
            $table->string('password')->comment('User Role password');
            $table->tinyInteger('rti')->unsigned()->comment('User Role Type ID');
            $table->timestamps();
        });

        //Set Table Comment
        DB::statement('ALTER TABLE `admins` COMMENT "User Roles"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
