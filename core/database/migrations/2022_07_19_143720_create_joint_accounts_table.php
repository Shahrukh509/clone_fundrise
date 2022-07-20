<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJointAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joint_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('account_type')->nullable();
            $table->string('line_address1_1')->nullable();
             $table->string('line_address2_1')->nullable();
             $table->string('city1')->nullable();
              $table->string('state1')->nullable();
              $table->string('zip_code1',5)->nullable();
              $table->string('line_address1_2')->nullable();
             $table->string('line_address2_2')->nullable();
             $table->string('city2')->nullable();
              $table->string('state2')->nullable();
              $table->string('zip_code2',5)->nullable();
              
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joint_accounts');
    }
}
