<?php

use App\Models\Receptek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });

        Receptek::create(['nev'=>'Gulyásleves','kat_id'=>2,'kep_eleresi_ut'=>'kep','leiras'=>'Házi marha gulyás']);
        Receptek::create(['nev'=>'Rántott hús','kat_id'=>1,'kep_eleresi_ut'=>'kep','leiras'=>'Rántott csirkemell gilé jázmin rízsel']);
        Receptek::create(['nev'=>'Hekk','kat_id'=>1,'kep_eleresi_ut'=>'kep','leiras'=>'Sült hekk citrommal és hasábburgonyával']);
        Receptek::create(['nev'=>'Palacsinta','kat_id'=>3,'kep_eleresi_ut'=>'kep','leiras'=>'2db választahtó házi barackos lekváros, túrós, nutellás']);
        Receptek::create(['nev'=>'Uborka','kat_id'=>4,'kep_eleresi_ut'=>'kep','leiras'=>'Ecetes uborka sláta tejfölel vagy nélküle']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
