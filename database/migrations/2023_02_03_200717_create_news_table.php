<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title',200)->nullable();
            $table->string('shortlink',200)->unique();
            $table->string('description',200)->nullable();
            $table->text('content')->nullable();
            $table->string('img_thumbnail',200)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('source_id')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->text('link_source')->nullable();
            $table->string('date_source',50)->nullable();
            $table->string('date_fa',11)->nullable();
            $table->string('time_fa',6)->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('news');
    }
}
