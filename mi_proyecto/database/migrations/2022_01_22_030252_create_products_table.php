       <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            //$table->float('price')->default(0)->after('slug');
            $table->string('picture_url');
            //$table->string('picture_one_url',1024)->nullable()->after('picture_url');
            //$table->string('picture_two_url',1024)->nullable()->after('picture_one_url');        
            //$table->string('picture_three_url',1024)->nullable()->after('picture_two_url');
            $table->longText('description')->nullable();
            
            $table->boolean('status')->default(1);

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
        Schema::dropIfExists('products');
    }
}
