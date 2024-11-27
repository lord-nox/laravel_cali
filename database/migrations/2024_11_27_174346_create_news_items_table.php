<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('news_items', function (Blueprint $table) {
        $table->id();                // Auto-incrementing primary key
        $table->string('title');      // Column for the title of the news item
        $table->text('content');      // Column for the content of the news item
        $table->string('image_path'); // Column for storing the image path (if applicable)
        $table->timestamp('published_at'); // Column for the publication date of the news item
        $table->timestamps();         // Laravel's default created_at and updated_at timestamps
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_items');
    }
};
