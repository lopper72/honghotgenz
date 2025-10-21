<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up(): void
    {
        Schema::create('clones', function (Blueprint $table) {
            $table->id();
            $table->string('source_url', 500)->nullable()->comment('Link gốc của bài viết hoặc trang cào');
            $table->string('title', 255)->nullable()->comment('Tiêu đề nội dung');
            $table->longText('content')->nullable()->comment('Nội dung text chính');
            $table->longText('images')->nullable()->comment('Các link ảnh, phân tách bằng dấu ;');
            $table->longText('videos')->nullable()->comment('Các link video, phân tách bằng dấu ;');
            $table->string('author', 150)->nullable()->comment('Tên tác giả nếu có');
            $table->dateTime('publish_date')->nullable()->comment('Ngày đăng gốc');
            $table->string('category', 100)->nullable()->comment('Danh mục hoặc loại nội dung');
            $table->enum('status', ['new', 'done', 'error'])->default('new')->comment('Trạng thái xử lý');
            $table->dateTime('crawled_at')->nullable()->comment('Ngày cào dữ liệu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clones');
    }
};
