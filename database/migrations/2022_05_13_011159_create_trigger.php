<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER update_student AFTER UPDATE ON students FOR EACH ROW
        BEGIN
           UPDATE borrowings SET nis=NEW.nis, nama=NEW.nama WHERE nis=OLD.nis;
        END');

        DB::unprepared('CREATE TRIGGER update_rombel AFTER UPDATE ON rombel FOR EACH ROW
                BEGIN
                   UPDATE students SET rombel=NEW.rombels WHERE rombel=OLD.rombels;
                   UPDATE borrowings SET rombel=NEW.rombels WHERE rombel=OLD.rombels;
                END');
        
        DB::unprepared('CREATE TRIGGER update_rayon AFTER UPDATE ON rayon FOR EACH ROW
        BEGIN
           UPDATE students SET rayon=NEW.rayon WHERE rayon=OLD.rayon;
           UPDATE borrowings SET rayon=NEW.rayon WHERE rayon=OLD.rayon;
        END');

        DB::unprepared('CREATE TRIGGER update_book AFTER UPDATE ON book FOR EACH ROW
        BEGIN
            UPDATE borrowings SET judul_buku=NEW.judul WHERE judul_buku=OLD.judul;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `update_rombel`');
    }
};
