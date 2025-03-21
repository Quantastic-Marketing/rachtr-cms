<?php

use App\Models\Pages;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Pages::whereNotNull('schema_data')->get()->each(function ($item) {
            if (is_string($item->schema_data)) {
                $item->schema_data = [['schema' => $item->schema_data]];
                $item->save();
            }
        });
        Product::whereNotNull('schema_data')->get()->each(function ($item) {
            if (is_string($item->schema_data)) {
                // Convert it to the new format
                $item->schema_data = [['schema' => $item->schema_data]];
                $item->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Pages::whereNotNull('schema_data')->get()->each(function ($item) {
            if (is_array($item->schema_data) && isset($item->schema_data[0]['schema'])) {
                $item->schema_data = $item->schema_data[0]['schema'];
                $item->save();
            }
        });

        Product::whereNotNull('schema_data')->get()->each(function ($item) {
            if (is_array($item->schema_data) && isset($item->schema_data[0]['schema'])) {
                $item->schema_data = $item->schema_data[0]['schema'];
                $item->save();
            }
        });


    }
};
