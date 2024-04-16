<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE vitals ROW_FORMAT=COMPRESSED;');
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
            $table->string('patient_code');
            $table->text('cc')->nullable();
            $table->text('pohx')->nullable();
            $table->text('lee')->nullable();
            $table->text('pmhx')->nullable();
            $table->text('pfohx')->nullable();
            $table->string('odunaided')->nullable();
            $table->string('odpinhole')->nullable();
            $table->string('odaxis')->nullable();
            $table->string('osunaided')->nullable();
            $table->string('ospinhole')->nullable();
            $table->string('osaxis')->nullable();
            $table->string('lodsph')->nullable();
            $table->string('lodcyl')->nullable();
            $table->string('lodaxis')->nullable();
            $table->string('lodva')->nullable();
            $table->string('lossph')->nullable();
            $table->string('loscyl')->nullable();
            $table->string('losaxis')->nullable();
            $table->string('losva')->nullable();
            $table->string('addsph')->nullable();
            $table->string('addcyl')->nullable();
            $table->string('addaxis')->nullable();
            $table->string('addva')->nullable();
            $table->string('arodsphere')->nullable();
            $table->string('arodcyl')->nullable();
            $table->string('arodaxis')->nullable();
            $table->string('arossphere')->nullable();
            $table->string('aroscyl')->nullable();
            $table->string('arosaxis')->nullable();
            $table->string('rodsph')->nullable();
            $table->string('rodcyl')->nullable();
            $table->string('rodaxis')->nullable();
            $table->string('rossph')->nullable();
            $table->string('roscyl')->nullable();
            $table->string('rosaxis')->nullable();
            $table->string('srodsphere')->nullable();
            $table->string('srodcyl')->nullable();
            $table->string('srodaxis')->nullable();
            $table->string('srodva')->nullable();
            $table->string('srodadd')->nullable();
            $table->string('srodnva')->nullable();
            $table->string('fodsph')->nullable();
            $table->string('fodcyl')->nullable();
            $table->string('fodaxis')->nullable();
            $table->string('fodva')->nullable();
            $table->string('fodadd')->nullable();
            $table->string('fodnva')->nullable();
            $table->string('eyelidod')->nullable();
            $table->string('eyelidos')->nullable();
            $table->string('conjuctivaod')->nullable();
            $table->string('conjuctivaos')->nullable();
            $table->string('corneaod')->nullable();
            $table->string('corneaos')->nullable();
            $table->string('pupilod')->nullable();
            $table->string('pupilos')->nullable();
            $table->string('irisod')->nullable();
            $table->string('irisos')->nullable();
            $table->string('lensod')->nullable();
            $table->string('lensos')->nullable();
            $table->string('vitreousod')->nullable();
            $table->string('vitreousos')->nullable();
            $table->string('cdratiood')->nullable();
            $table->string('cdratioos')->nullable();
            $table->string('macularod')->nullable();
            $table->string('maculaos')->nullable();
            $table->string('odccct')->nullable();
            $table->string('odnct')->nullable();
            $table->string('oscct')->nullable();
            $table->text('osnct')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vitals', function (Blueprint $table) {
            //
        });
    }
};
