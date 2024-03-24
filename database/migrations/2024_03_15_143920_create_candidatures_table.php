<?php

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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('cin')->nullable();
            $table->string('scan_cin')->nullable();
            $table->string('cne_cme')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville_natale')->nullable();
            $table->string('num_tel')->nullable();
            $table->string('photo_personnel')->nullable();
            $table->string('merite')->nullable();
            $table->string('annee_universitaire')->nullable();
            $table->string('etat')->nullable();
            $table->string('note_ecrite')->nullable();
            $table->foreignId("choix_classement_id")->nullable()->constrained('choix_classements')->onDelete('cascade');
            $table->foreignId("user_id")->constrained('users')->onDelete('cascade');
            $table->foreignId("diplome_id")->nullable()->constrained('diplomes')->onDelete('cascade');
            $table->unique('choix_classement_id');
            $table->unique('user_id');
            $table->unique('diplome_id');
            $table->timestamps();
        });
      /*
      INSERT INTO candidatures (nom, prenom, sexe, cin, scan_cin, cne_cme, date_naissance, nationalite, adresse, ville_natale, num_tel, photo_personnel, merite, annee_universitaire, etat, note_ecrite ) 
VALUES 
('Doe', 'John', 'M', 'AB123456', NULL, 'CNE12345', '1990-05-15', 'Moroccan', '123 Main St', 'Rabat', '0612345678', 'photo1.jpg', 85.5, '2023-2024', null, NULL),
('Smith', 'Jane', 'F', 'CD789012', NULL, 'CNE67890', '1992-08-20', 'French', '456 Elm St', 'Casablanca', '0698765432', 'photo2.jpg', 92.0, '2023-2024', null, NULL),
('Williams', 'Emily', 'F', 'EF345678', NULL, 'CNE11223', '1991-11-10', 'American', '789 Oak St', 'Marrakech', '0654321098', 'photo3.jpg', 88.3, '2022-2023', null, NULL),
('Johnson', 'Michael', 'M', 'GH456789', NULL, 'CNE45678', '1989-03-25', 'British', '101 Pine St', 'Tangier', '0678901234', 'photo4.jpg', 90.7, '2022-2023', null, NULL),
('Brown', 'Olivia', 'F', 'IJ567890', NULL, 'CNE78901', '1993-06-12', 'Canadian', '202 Cedar St', 'Fes', '0643210987', 'photo5.jpg', 86.9, '2023-2024', null, NULL),
('Jones', 'Daniel', 'M', 'KL678901', NULL, 'CNE23456', '1990-09-30', 'Australian', '303 Maple St', 'Agadir', '0689012345', 'photo6.jpg', 89.2, '2022-2023', null, NULL),
('Garcia', 'Sophia', 'F', 'MN789012', NULL, 'CNE34567', '1992-12-15', 'Spanish', '404 Birch St', 'Oujda', '0678901234', 'photo7.jpg', 91.4, '2023-2024', null, NULL),
('Miller', 'Ethan', 'M', 'OP890123', NULL, 'CNE45678', '1988-04-20', 'Irish', '505 Oak St', 'Meknes', '0690123456', 'photo8.jpg', 87.6, '2022-2023', null, NULL),
('Wilson', 'Ava', 'F', 'QR901234', NULL, 'CNE56789', '1991-07-05', 'Italian', '606 Elm St', 'Tetouan', '0654321098', 'photo9.jpg', 90.0, '2023-2024', null, NULL),
('Taylor', 'Liam', 'M', 'ST012345', NULL, 'CNE67890', '1989-10-10', 'New Zealander', '707 Pine St', 'Essaouira', '0643210987', 'photo10.jpg', 88.8, null, 'Accepté', NULL);




      */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condidatures');
    }
};
