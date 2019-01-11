<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTips extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('meals', function (Blueprint $table) {
      $table->decimal('tips', 8, 2)->default(0);
    });
    Schema::table('invoices', function (Blueprint $table) {
      $table->decimal('tips', 8, 2)->default(0);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('meals', function (Blueprint $table) {
      $table->dropColumn('tips');
    });
    Schema::table('invoices', function (Blueprint $table) {
      $table->dropColumn('tips');
    });
  }
}
