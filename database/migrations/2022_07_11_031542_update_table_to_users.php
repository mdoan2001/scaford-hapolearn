<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->integer('role')->nullable();
            $table->string('full_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('telephone')->nullable();
            $table->string('about')->nullable();
            $table->renameColumn('name', 'user_name');
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
            $table->dropColumn('id');
            $table->dropColumn('role');
            $table->dropColumn('full_name');
            $table->dropColumn('birthday');
            $table->dropColumn('telephone');
            $table->dropColumn('about');
        });
    }
}
