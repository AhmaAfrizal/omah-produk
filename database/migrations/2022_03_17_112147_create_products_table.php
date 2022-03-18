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
			$table->string('nama_produk')->nullable();
			$table->string('url_produk')->nullable();
			$table->integer('kategori_id')->nullable();
			$table->text('deskripsi_produk')->nullable();
			$table->text('foto_produk')->nullable();
			$table->timestamps();
		});
		Schema::create('kategories', function (Blueprint $table) {
			$table->id();
			$table->string('jenis_kategori')->nullable();
			$table->string('url_jenis_kategori')->nullable();
			$table->timestamps();
		});
		Schema::create('qrcodes', function (Blueprint $table) {
			$table->id();
			$table->integer('product_id')->nullable();
			$table->text('qr_code')->nullable();
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
		Schema::dropIfExists('kategories');
		Schema::dropIfExists('qrcodes');
		// setelah di php artisan migrate dibawah ini dihapus ya
		Schema::dropIfExists('produk');
	}
}
