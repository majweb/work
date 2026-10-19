<?php

use App\Support\DefaultForbiddenWords;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Wiadomości: rozmowy pracownika z firmą lub rekruterem (z akceptacją kontaktu)
 * i firm/rekruterów z administracją. Blokady kontaktu i zakazane słowa.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            // worker - pracownik z firmą/rekruterem; admin - firma/rekruter ze wspólną skrzynką administracji
            $table->string('type')->default('worker');
            // Strona pracodawcy: konto firmy albo rekrutera (oferta rekrutera = rozmowa z rekruterem)
            $table->foreignId('employer_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('worker_id')->nullable()->constrained('users')->cascadeOnDelete();
            // Admin, który założył rozmowę z administracją - odpowiadać może każdy admin
            $table->foreignId('admin_id')->nullable()->constrained('users')->nullOnDelete();
            // Oferta, z której pracownik napisał pierwszy raz
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();
            $table->string('status')->default('pending');
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('last_message_at')->nullable();
            // Jednostronne usunięcie - rozmowa znika tylko u tej strony
            $table->timestamp('employer_deleted_at')->nullable();
            $table->timestamp('participant_deleted_at')->nullable();
            $table->timestamps();

            $table->unique(['employer_id', 'worker_id']);
            $table->index(['employer_id', 'type']);
            $table->index('last_message_at');
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();
            $table->foreignId('sender_id')->constrained('users')->cascadeOnDelete();
            // Oferta, której dotyczy wiadomość ("Dotyczy: ...")
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();
            $table->text('body');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();

            $table->index(['conversation_id', 'created_at']);
        });

        Schema::create('contact_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blocker_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('blocked_id')->constrained('users')->cascadeOnDelete();
            // null = blokada bezterminowa
            $table->timestamp('blocked_until')->nullable();
            $table->timestamps();

            $table->unique(['blocker_id', 'blocked_id']);
        });

        Schema::create('forbidden_words', function (Blueprint $table) {
            $table->id();
            // Słowo lub fraza; "*" na końcu = rdzeń (wszystkie odmiany)
            $table->string('word', 100)->unique();
            $table->boolean('is_active')->default(true);
            $table->string('note')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            // Ostatnia aktywność - "online" w wiadomościach i decyzja o wysłaniu maila
            $table->timestamp('last_seen_at')->nullable();
            // Firma/rekruter przyjmuje nowe wiadomości od pracowników
            $table->boolean('messenger_online')->default(true);
            $table->string('messenger_reply_hours')->nullable();
        });

        // Język powiadomień i maili (UpdateLastSeenAt). Kolumnę dopisano do starszej migracji już po jej
        // uruchomieniu, więc nie każda baza ją ma - dodajemy, jeśli brakuje.
        if (! Schema::hasColumn('users', 'locale')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('locale')->nullable();
            });
        }

        // Lista startowa zakazanych słów od razu w bazie - wdrożenie nie uruchamia seederów
        $now = now();
        DB::table('forbidden_words')->insertOrIgnore(array_map(
            fn (string $word) => ['word' => $word, 'is_active' => true, 'created_at' => $now, 'updated_at' => $now],
            DefaultForbiddenWords::all(),
        ));
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_seen_at', 'messenger_online', 'messenger_reply_hours']);
        });

        Schema::dropIfExists('forbidden_words');
        Schema::dropIfExists('contact_blocks');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('conversations');
    }
};
