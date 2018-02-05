<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQtyColumnInCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('cart', 'qty')):
            Schema::table('cart', function (Blueprint $table) {
                $table->integer('qty');
            });
        endif;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('cart', 'qty')):
            Schema::table('cart', function (Blueprint $table) {
                $table->dropColumn('qty');
            });
        endif;
    }
}
