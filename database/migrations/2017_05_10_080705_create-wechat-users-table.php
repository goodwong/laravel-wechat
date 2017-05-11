<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('subscribe')->unsigned()->nullable()->default(0);
            $table->string('unionid')->nullable();
            $table->string('openid')->unique();
            $table->string('remark', 32)->nullable();
            $table->string('nickname', 32)->nullable();
            $table->string('sex', 8)->nullable();
            $table->string('province', 8)->nullable();
            $table->string('city', 16)->nullable();
            $table->string('country', 16)->nullable();
            $table->string('language', 16)->nullable();
            $table->string('headimgurl')->nullable();
            $table->timestamp('subscribe_time')->nullable();
            $table->string('groupid')->nullable();
            $table->string('tagid_list')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wechat_users');
    }
}
