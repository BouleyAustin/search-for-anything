<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('title')->nullable();
            $table->string('podcast_rss')->nullable();
            $table->string('podcast_link');
            $table->string('video_link');
            $table->longText('summary')->nullable();
            $table->string('platform')->nullable();
            $table->string('tags')->nullable();
            $table->string('people')->nullable();
            $table->decimal('length')->default(0);
            $table->boolean('show_cta')->default(false);
            $table->unsignedBigInteger('cta_id');
            $table->bigInteger('cta_clicks');
            $table->timestamps();

            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
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
        Schema::dropIfExists('contents');
    }
}
