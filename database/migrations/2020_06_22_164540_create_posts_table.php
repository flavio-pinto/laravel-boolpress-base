<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); //per la foreign key
            $table->string('title', 150);
            $table->mediumText('body');
            $table->string('slug');
            $table->timestamps();

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
        Schema::dropIfExists('posts');
    }
}
