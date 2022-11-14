<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('게시글 타이틀');
            $table->text('content')->comment('게시글 내용');
            $table
                ->integer('hit')
                ->default(0)
                ->comment('게시글 조회수');
            $table->string('kind')->comment('게시글 종류');
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
        Schema::dropIfExists('notices');
    }
}
