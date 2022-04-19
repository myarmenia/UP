<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('name');
            $table->string('speaker_name');
            $table->text('speaker_desc');
            $table->string('source_type');
            $table->string('video_path');
            $table->string('video_code');
            $table->string('invite_link_author');
            $table->string('invite_link_mentor');
            $table->string('invite_link_student');
            $table->time('publish_date_video');
            $table->time('publish_date_video_MSK');
            $table->string('video_type');
            $table->string('status');
            $table->timestamps();


            $table->foreign('module_id')
            ->references('id')
            ->on('moduls')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
