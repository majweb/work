<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";

const props = defineProps({
    page: Object
});
</script>
<template>
    <FrontLayout
        :title="props.page.title"
        :image="props.page.image"
        :keywords="props.page.keywords"
        :description="props.page.description"
        :url="route('front.privacy')"
        type="website"
    >
        <div class="py-24 bg-gray-50/50 dark:bg-gray-900/50 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 dark:bg-blue-900/10 rounded-full -mr-64 -mt-64 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 dark:bg-red-900/10 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-sm border border-gray-100 dark:border-gray-700 mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[10px] font-black text-[#0A2C5C] dark:text-blue-400 uppercase tracking-[0.2em]">Dokumentacja</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-black text-[#0A2C5C] dark:text-white leading-tight uppercase tracking-tighter mb-4">
                        Polityka Prywatności
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-[10px]">
                        Ostatnia aktualizacja: 19 marca 2026 r.
                    </p>
                </div>

                <!-- Content Card -->
                <div class="bg-white dark:bg-gray-800 rounded-[2.5rem] shadow-xl shadow-blue-900/5 p-8 md:p-12 border border-gray-100 dark:border-gray-700">
                    <div class="prose prose-blue dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 leading-relaxed">
                        <section class="mb-10">
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">01</span>
                                Informacje ogólne
                            </h2>
                            <p>
                                Niniejsza Polityka Prywatności określa zasady przetwarzania i ochrony danych osobowych przekazywanych przez Użytkowników w związku z korzystaniem z usług oferowanych przez nasz serwis internetowy. Dbamy o bezpieczeństwo Twoich danych i szanujemy Twoją prywatność, stosując najwyższe standardy ochrony informacji oraz przestrzegając obowiązujących przepisów prawa, w tym Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 (RODO).
                            </p>
                            <p>
                                Administratorem danych osobowych zawartych w serwisie jest właściciel platformy, który dokłada wszelkich starań, aby procesy przetwarzania danych były przejrzyste, bezpieczne i ograniczone do niezbędnego minimum wymaganego do prawidłowego świadczenia usług drogą elektroniczną.
                            </p>
                        </section>

                        <section class="mb-10">
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">02</span>
                                Zakres zbieranych danych
                            </h2>
                            <p>
                                Serwis realizuje funkcje pozyskiwania informacji o użytkownikach i ich zachowaniu w następujący sposób:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Poprzez dobrowolnie wprowadzone w formularzach informacje (np. imię, nazwisko, adres e-mail, numer telefonu).</li>
                                <li>Poprzez zapisywanie w urządzeniach końcowych plików cookie (tzw. "ciasteczka").</li>
                                <li>Poprzez gromadzenie logów serwera www przez operatora hostingowego.</li>
                            </ul>
                            <p>
                                Dane podawane w formularzu są przetwarzane w celu wynikającym z funkcji konkretnego formularza, np. w celu dokonania procesu obsługi kontaktu informacyjnego, rejestracji konta lub realizacji zamówienia usługi.
                            </p>
                        </section>

                        <section class="mb-10">
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">03</span>
                                Cele przetwarzania danych
                            </h2>
                            <p>
                                Twoje dane osobowe przetwarzane są w celu:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Nawiązania, ukształtowania treści, zmiany lub rozwiązania umowy o świadczenie usług drogą elektroniczną.</li>
                                <li>Realizacji zamówień i obsługi transakcji płatniczych.</li>
                                <li>Prowadzenia działań marketingowych własnych produktów i usług (za uprzednią zgodą).</li>
                                <li>Zapewnienia bezpieczeństwa serwisu i ochrony przed nadużyciami.</li>
                                <li>Wypełnienia obowiązków prawnych ciążących na Administratorze, np. podatkowych i księgowych.</li>
                            </ul>
                        </section>

                        <section class="mb-10">
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">04</span>
                                Pliki Cookies i technologie śledzące
                            </h2>
                            <p>
                                Serwis korzysta z plików cookies. Stanowią one dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu końcowym Użytkownika Serwisu i przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer.
                            </p>
                            <p>
                                Podmiotem zamieszczającym na urządzeniu końcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest Administrator Serwisu. Pliki cookies wykorzystywane są w celu utrzymania sesji użytkownika (po zalogowaniu), dostosowania zawartości stron do preferencji oraz optymalizacji korzystania ze stron internetowych, a także tworzenia anonimowych statystyk.
                            </p>
                            <p>
                                Użytkownik może w każdej chwili zmienić ustawienia dotyczące plików cookies w swojej przeglądarce internetowej. Ograniczenie stosowania plików cookies może jednak wpłynąć na niektóre funkcjonalności dostępne na stronach internetowych Serwisu.
                            </p>
                        </section>

                        <section class="mb-10">
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">05</span>
                                Prawa Użytkownika
                            </h2>
                            <p>
                                Każdemu Użytkownikowi, którego dane są przetwarzane, przysługuje prawo do:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Dostępu do treści swoich danych osobowych oraz otrzymania ich kopii.</li>
                                <li>Sprostowania (poprawiania) swoich danych.</li>
                                <li>Usunięcia danych („prawo do bycia zapomnianym”), jeśli nie ma podstaw prawnych do ich dalszego przetwarzania.</li>
                                <li>Ograniczenia przetwarzania danych.</li>
                                <li>Wniesienia sprzeciwu wobec przetwarzania danych na podstawie prawnie uzasadnionego interesu Administratora.</li>
                                <li>Przenoszenia danych do innego administratora.</li>
                                <li>Wniesienia skargi do organu nadzorczego (Prezesa Urzędu Ochrony Danych Osobowych).</li>
                            </ul>
                        </section>

                        <section>
                            <h2 class="text-[#0A2C5C] dark:text-white text-2xl font-black uppercase tracking-tight mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">06</span>
                                Kontakt i zmiany w polityce
                            </h2>
                            <p>
                                Wszelkie zapytania dotyczące ochrony prywatności oraz realizacji przysługujących praw prosimy kierować na adres e-mail podany w zakładce Kontakt. Administrator zastrzega sobie prawo do wprowadzania zmian w niniejszej Polityce Prywatności, co może wynikać z rozwoju technologii internetowej, zmian w powszechnie obowiązujących przepisach prawa lub rozwoju samego Serwisu. O wszelkich istotnych zmianach Użytkownicy zostaną poinformowani w sposób wyraźny na stronie serwisu.
                            </p>
                        </section>
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="mt-12 text-center text-gray-400 dark:text-gray-500 text-[10px] uppercase tracking-widest font-medium">
                    © 2026 Wszystkie prawa zastrzeżone. Dokument wygenerowany dla celów informacyjnych.
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
