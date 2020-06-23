<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id'); //per la foreign key
            $table->string('nickname', 20);
            $table->text('body');
            $table->timestamps();

            //Relation
            $table->foreign('post_id') //nome della foreign key...
            ->references('id') //...che fa riferimento all'id...
            ->on('posts'); //...della tabella users.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
