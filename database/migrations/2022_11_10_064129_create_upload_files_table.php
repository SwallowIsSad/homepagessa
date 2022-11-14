<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_files', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('fileable_id')
                ->cascadeOnDelete()
                ->comment('파일 키');
            $table->string('fileable_type')->comment('파일 타입');
            $table->text('filename')->comment('파일 원본 이름');
            $table->text('savename')->comment('저장할 파일 이름');
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
        Schema::dropIfExists('upload_files');
    }
}
