<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_users', function (Blueprint $table) {
            $table->foreignId('user_id'); //per la foreign key
            $table->string('phone', 50);
            $table->string('address');
            $table->string('avatar');

            //Relation
            $table->foreign('user_id') //nome della foreign key...
            ->references('id') //...che fa riferimento all'id...
            ->on('users'); //...della tabella users.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_users');
    }
}
