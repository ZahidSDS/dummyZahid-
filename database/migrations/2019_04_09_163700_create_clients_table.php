<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('clients')) {
            Schema::create('clients', function (Blueprint $table) {

                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('mtype_id')->unsigned()->nullable();
                $table->foreign('mtype_id')->references('id')->on('mtypes')->onDelete('cascade');
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->string('phone')->nullable();
                $table->string('address')->nullable();
                $table->string('mailing_address')->nullable();
                $table->date('expire_date')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
