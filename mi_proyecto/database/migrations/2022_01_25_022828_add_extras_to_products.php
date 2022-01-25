<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtrasToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('price')->default(0)->after('slug');
            $table->string('picture_one_url',1024)->nullable()->after('picture_url');
            $table->string('picture_two_url',1024)->nullable()->after('picture_one_url');        
            $table->string('picture_three_url',1024)->nullable()->after('picture_two_url');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
