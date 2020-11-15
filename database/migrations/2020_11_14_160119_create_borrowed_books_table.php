<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');
            $table->date('issue_date');
            $table->date('due_date');
            $table->integer('bill');
            $table -> foreign         ( 'book_id' ) -> references( 'id' ) -> on( 'books' ) -> onDelete( 'cascade' ) ;
            $table -> foreign         ( 'user_id' ) -> references( 'id' ) -> on( 'users' ) -> onDelete( 'cascade' ) ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowed_books');
    }
}
