<?php namespace Atom\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('atom_test_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->integer('likes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atom_test_notes');
    }
}
