<?php

// Wiadomości pracownik - firma/rekruter oraz firma/rekruter - administracja
return [
    'title' => 'Wiadomości',
    'subtitle' => 'Rozmowy z pracodawcami, pracownikami i administracją',
    'administration' => 'Administracja Work4you.global',
    'messageAttribute' => 'treść wiadomości',
    'forbiddenWords' => 'Wiadomość zawiera niedozwolone słowa. Popraw treść i wyślij ponownie.',

    // Powiadomienia w dzwonku
    'notificationTitle' => 'Wiadomości',
    'notificationNewMessage' => 'Nowa wiadomość od: :sender_name',
    'notificationAccepted' => ':sender_name zaakceptował(a) kontakt. Możesz pisać dalej.',
    'openConversation' => 'Przejdź do rozmowy',

    // Komunikaty po akcjach
    'sent' => 'Wiadomość została wysłana.',
    'accepted' => 'Kontakt został zaakceptowany. Możesz odpowiedzieć.',
    'deleted' => 'Rozmowa została usunięta.',
    'blocked24h' => 'Kontakt został zablokowany na 24 godziny.',
    'blockedPermanent' => 'Kontakt został zablokowany bezterminowo.',
    'unblocked' => 'Kontakt został odblokowany.',
    'settingsSaved' => 'Ustawienia wiadomości zostały zapisane.',

    // Powody, dla których nie można wysłać wiadomości
    'denied' => [
        'adminOnly' => 'Tylko administracja może pisać z tego miejsca.',
        'notEmployer' => 'To konto nie jest firmą ani rekruterem.',
        'unblockFirst' => 'Odblokuj to konto, aby do niego napisać.',
        'workersOnly' => 'Wiadomości do firm i rekruterów mogą wysyłać pracownicy.',
        'verifyEmail' => 'Potwierdź adres e-mail, aby wysyłać wiadomości.',
        'employerUnavailable' => 'Ten pracodawca nie przyjmuje obecnie wiadomości.',
        'employerOffline' => 'Pracodawca nie przyjmuje teraz nowych wiadomości.',
        'blocked' => 'Nie możesz wysłać wiadomości.',
        'waitingForAcceptance' => 'Twoja wiadomość czeka na akceptację pracodawcy.',
        'notParticipant' => 'Nie jesteś uczestnikiem tej rozmowy.',
        'accountInactive' => 'Twoje konto jest nieaktywne.',
        'acceptFirst' => 'Zaakceptuj kontakt, aby odpowiedzieć.',
    ],

    // E-maile
    'mail' => [
        'newMessageSubject' => ':name – nowa wiadomość w :app',
        'newMessageHeading' => 'Nowa wiadomość',
        'newMessageLine' => ':name wysłał(a) Ci wiadomość.',
        'newMessageAboutProject' => ':name wysłał(a) Ci wiadomość w sprawie oferty „:project”.',
        'pendingHint' => 'To pierwszy kontakt od tej osoby. Zaakceptuj go w wiadomościach, aby móc odpowiedzieć.',
        'regards' => 'Pozdrawiamy,',
        'greeting' => 'Dzień dobry,',
        'acceptedSubject' => ':name zaakceptował(a) kontakt',
        'acceptedLine' => ':name zaakceptował(a) Twoją prośbę o kontakt. Możesz kontynuować rozmowę.',
        'lockedHint' => 'Zaloguj się, aby odczytać wiadomość i odpowiedzieć.',
    ],

    // Panel wiadomości
    'emptyList' => 'Nie masz jeszcze żadnych rozmów.',
    'emptyListWorker' => 'Napisz do firmy lub rekrutera z widoku oferty albo profilu firmy.',
    'selectConversation' => 'Wybierz rozmowę z listy.',
    'you' => 'Ty:',
    'back' => 'Wróć',
    'options' => 'Opcje rozmowy',
    'pendingRequest' => 'Nowa prośba o kontakt',
    'awaitingAcceptance' => 'Oczekuje na akceptację',
    'online' => 'Online',
    'offline' => 'Offline',
    'lastSeen' => 'Aktywność: :time',
    'repliesUsually' => 'Odpowiada zwykle:',
    'regarding' => 'Dotyczy:',
    'roleFirm' => 'Firma',
    'roleRecruiter' => 'Rekruter',
    'roleWorker' => 'Pracownik',
    'typing' => 'pisze…',
    'read' => 'Przeczytano',
    'sentStatus' => 'Wysłano',
    'placeholder' => 'Napisz wiadomość…',
    'send' => 'Wyślij',
    'sendHint' => 'Enter – wyślij, Shift+Enter – nowa linia',
    'prefill' => 'Dzień dobry, piszę w sprawie oferty „:title”.',
    'acceptBar' => 'Pracownik prosi o kontakt. Zaakceptuj, aby odpowiedzieć.',
    'acceptButton' => 'Akceptuj kontakt',
    'block24h' => 'Zablokuj na 24 godziny',
    'blockPermanent' => 'Zablokuj bezterminowo',
    'unblock' => 'Odblokuj',
    'blockedUntil' => 'Kontakt zablokowany do :date.',
    'blockedForever' => 'Kontakt zablokowany bezterminowo.',
    'delete' => 'Usuń rozmowę',
    'deleteConfirmTitle' => 'Usunąć rozmowę?',
    'deleteConfirmText' => 'Rozmowa zniknie z Twojej listy, ale druga strona nadal ją widzi. Jeśli ktoś napisze ponownie, rozmowa wróci bez wcześniejszej historii.',
    'cancel' => 'Anuluj',

    // Ustawienia firmy/rekrutera
    'acceptingMessages' => 'Przyjmuję nowe wiadomości',
    'acceptingHint' => 'Przyjmowanie wiadomości jest wyłączone – pracownicy nie mogą do Ciebie pisać. Na istniejące rozmowy nadal możesz odpowiadać.',
    'replyHours' => 'Godziny odpowiedzi',
    'replyHoursPlaceholder' => 'np. pon.–pt. 8:00–16:00',
    'save' => 'Zapisz',

    // Administracja
    'adminNewConversation' => 'Napisz do firmy lub rekrutera',
    'searchEmployer' => 'Szukaj po nazwie lub e-mailu',
    'openExisting' => 'Otwórz rozmowę',
    'noResults' => 'Brak wyników.',
    'messageTo' => 'Wiadomość do: :name',
    'change' => 'Zmień',

    // Przycisk na stronie oferty i firmy
    'writeToFirm' => 'Napisz do firmy',
    'writeToRecruiter' => 'Napisz do rekrutera',
    'guestHint' => 'Aby napisać, zaloguj się jako pracownik.',
    'register' => 'Nie masz konta? Zarejestruj się',
    'verifyLink' => 'Wyślij link ponownie',
    'goToConversation' => 'Przejdź do rozmowy',
    'firstMessageHint' => 'Pierwsza wiadomość to prośba o kontakt – :name odpowie po jej zaakceptowaniu.',

    // Firma: podgląd rozmów rekruterów
    'tabMine' => 'Moje rozmowy',
    'tabRecruiters' => 'Rozmowy rekruterów',
    'emptyRecruiters' => 'Twoi rekruterzy nie mają jeszcze rozmów z pracownikami.',
    'recruiterLabel' => 'Rekruter: :name',
    'oversightReadOnly' => 'Podgląd rozmowy rekrutera :name – odpowiada rekruter.',

    // Płatne odczytanie wiadomości od kandydata
    'lockedPreview' => 'Wiadomość do odczytania',
    'lockedTitle' => 'Wiadomość od kandydata: :name',
    'lockedText' => 'Odczytaj wiadomość, aby zobaczyć jej treść, zaakceptować kontakt i odpowiedzieć.',
    'oversightLocked' => 'Rekruter jeszcze nie odczytał tej wiadomości.',
    'unlockButton' => 'Odczytaj wiadomość – :points pkt',
    'yourPoints' => 'Punkty firmy: :points',
    'noPoints' => 'Za mało punktów, aby odczytać wiadomość.',
    'buyPoints' => 'Kup punkty',
    'unlocked' => 'Wiadomość odczytana. Pobrano :points pkt.',
    'pointsName' => 'Odczytanie wiadomości od kandydata',
    'pointsDesc' => 'Odczytanie pierwszej wiadomości od nowego kandydata w wiadomościach. Kolejne wiadomości w tej rozmowie są bezpłatne.',
];
