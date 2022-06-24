<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * マイグレーションを実行する
     * @return void
     */
    public function up()
    {
        /**
         * tasks Table create
         * tasksテーブルと各列を作成する
         * column1 -> カラム名：id, 型：BIGINTEGER, オプション：AI
         * column2 -> カラム名：title, 型：VARCHAR(100)
         * column3 -> カラム名：content, 型：VARCHAR(100)
         * column4 -> カラム名：person_in_charge, 型：VARCHAR(100)
         * column6 -> カラム名：created_at, 型：TIMESTAMP
         * column7 -> カラム名：updated_at, 型：TIMESTAMP
         *
         * @param Blueprint $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Builder
         */
        Schema::create('tasks', function (Blueprint $table) {
            // UNSIGNED BIGINTEGER（主キー）の同等の列を自動インクリメントする
            $table->bigIncrements('id');
            // オプションの長さのVARCHAR相当の列を追加する
            $table->string('title', 100);
            // オプションの長さのVARCHAR相当の列を追加する
            $table->string('content', 100);
            // オプションの長さのVARCHAR相当の列を追加する
            $table->string('person_in_charge', 100);
            // created_atとupdated_atのTIMESTAMPに相当する列を追加する
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * tasksテーブルを削除する
     * @return void
     */
    public function down()
    {
        // tasksテーブルを削除する
        Schema::dropIfExists('tasks');
    }
};
