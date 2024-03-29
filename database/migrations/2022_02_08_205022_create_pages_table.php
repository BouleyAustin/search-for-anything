<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable();
            $table->string('url_ending')->unique();
            $table->string('search_title')->nullable();
            $table->string('sub_search_title')->nullable();
            $table->string('search_bar_input')->nullable();
            $table->string('search_bar_text')->nullable();
            $table->string('text_color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('background_image')->nullable();
            $table->string('search_bar_background_color')->nullable();
            $table->string('search_bar_outline_color')->nullable();
            $table->string('search_bar_button_color')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('link_home')->nullable();
            $table->string('link_url')->nullable();
            $table->string('podcast_rss')->nullable();
            $table->boolean('automatic_transcription')->default(false);
            $table->string('apple_link')->nullable();
            $table->string('spotify_link')->nullable();
            $table->string('google_link')->nullable();
            $table->string('overcast_link')->nullable();
            $table->string('breaker_link')->nullable();
            $table->string('castbox_link')->nullable();
            $table->string('pocketcasts_link')->nullable();
            $table->string('radiopublic_link')->nullable();
            $table->string('stitcher_link')->nullable();
            $table->boolean('social_share')->default(false);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('favicon_url')->nullable();
            $table->longText('tracking_code_search')->nullable();
            $table->longText('tracking_code_episode')->nullable();
            $table->boolean('collect_email')->default(false);
            $table->string('email_provider')->nullable();
            $table->string('email_api_key')->nullable();
            $table->string('email_api_tag')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('pages');
    }
}
