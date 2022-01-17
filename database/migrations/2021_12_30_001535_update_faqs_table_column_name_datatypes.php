<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFaqsTableColumnNameDatatypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function($table) {

            $table->renameColumn('category', 'category_id');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
}
