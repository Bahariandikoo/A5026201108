<?php



use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



class CreateProductTable extends Migration

{

   /**

    * Run the migrations.

    *

    * @return void

    */

   public function up()

   {

       Schema::create('products', function (Blueprint $table) {

           $table->increments('id');

           $table->timestamps();

           $table->string('Title');

           $table->string('Description');

           $table->integer('price');

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
