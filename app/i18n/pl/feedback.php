<?php

return array(
	'admin' => array(
		'optimization_complete' => 'Optymalizacja zakończona',
	),
	'access' => array(
		'denied' => 'Nie posiadasz uprawnień dostępu do tej strony',
		'not_found' => 'Ta strona nie istnieje',
	),
	'auth' => array(
		'form' => array(
			'not_set' => 'Wystąpił problem podczas konfiguracji systemu uwierzytelniania. Spróbuj ponownie później.',
			'set' => 'Formularz jest teraz domyślną metodą uwierzytelniania.',
		),
		'login' => array(
			'invalid' => 'Login jest nieprawidłowy',
			'success' => 'Jesteś połączony',
		),
		'logout' => array(
			'success' => 'Jesteś rozłączony',
		),
		'no_password_set' => 'Hasło administratora nie zostało ustawione. Ta funkcjonalność nie jest dostępna.',
	),
	'conf' => array(
		'error' => 'Wystąpił błąd przy zapisywaniu konfiguracji',
		'query_created' => 'Zapytanie "%s" zostało utworzone.',
		'shortcuts_updated' => 'Skróty zostały zaktualizowane',
		'updated' => 'Konfiguracja została zaktualizowana',
	),
	'extensions' => array(
		'already_enabled' => '%s jest już włączona',
		'disable' => array(
			'ko' => '%s nie może zostać wyłączona. Aby uzyskać więcej informacji, <a href="%s">sprawdź logi FreshRSS</a>.',
			'ok' => '%s została wyłączona',
		),
		'enable' => array(
			'ko' => '%s nie może zostać włączona. Aby uzyskać więcej informacji, <a href="%s">sprawdź logi FreshRSS</a>.',
			'ok' => '%s została włączona',
		),
		'no_access' => 'Nie masz dostępu do %s',
		'not_enabled' => '%s nie jest włączona',
		'not_found' => '%s nie istnieje',
	),
	'import_export' => array(
		'export_no_zip_extension' => 'Brak rozszerzenia do archiwizacji ZIP na serwerze. Spróbuj wyeksportować pliki pojedyńczo.',
		'feeds_imported' => 'Twoje kanały zostaly zaimportowane i teraz zostaną zaktualizowane',
		'feeds_imported_with_errors' => 'Twoje kanały zostały zaimportowane, ale wystąpiło parę błędów',
		'file_cannot_be_uploaded' => 'Pliki nie mogą zostać wysłane!',
		'no_zip_extension' => 'Brak rozszerzenia do archwizacji ZIP na serwerze.',
		'zip_error' => 'Wystąpił błąd podczas importu archiwum ZIP.',
	),
	'sub' => array(
		'actualize' => 'Aktualizowanie',
		'category' => array(
			'created' => 'Kategoria %s została utworzona.',
			'deleted' => 'Kategoria została usunięta.',
			'emptied' => 'Kategoria została opróżniona',
			'error' => 'Nie można zaktualizować kategorii',
			'name_exists' => 'Kategoria o takiej nazwie już istnieje.',
			'no_id' => 'Musisz podać identyfikator kategorii.',
			'no_name' => 'Nazwa kategorii nie może być pusta',
			'not_delete_default' => 'Nie możesz usunąć domyślnej kategorii!',
			'not_exist' => 'Kategoria nie istnieje!',
			'over_max' => 'Osiągnąłeś swój limit kategorii (%d)',
			'updated' => 'Kategoria została zaktualizowana.',
		),
		'feed' => array(
			'actualized' => '<em>%s</em> została zaktualizowana',
			'actualizeds' => 'Kanał RSS został zaktualizowany',
			'added' => 'Kanał RSS <em>%s</em> został dodany',
			'already_subscribed' => 'Już subskrybujesz <em>%s</em>',
			'deleted' => 'Kanał został usunięty',
			'error' => 'Nie można zaktualizować kanału',
			'internal_problem' => 'Kanał nie może zostać dodany. Aby uzyskać więcej informacji, <a href="%s">sprawdź logi FreshRSS</a>. Może spróbować dodać kanał na siłę poprzez dodanie <code>#force_feed</code> do adresu.',
			'invalid_url' => 'Adres <em>%s</em> jest nieprawidłowy',
			'marked_read' => 'Kanały zostały oznaczone jako przeczytane',
			'n_actualized' => '%d kanałów zostało zaktualizowanych',
			'n_entries_deleted' => '%d artykułów zostało usuniętych',
			'no_refresh' => 'Brak kanału do odświeżenia…',
			'not_added' => '<em>%s</em> nie może zostać dodany',
			'over_max' => 'Osiągnąłeś twój limit kanałów (%d)',
			'updated' => 'Kanał został zaktualizowany',
		),
		'purge_completed' => 'Kasowanie ukończone (%d artykułów usuniętych)',
	),
	'update' => array(
		'can_apply' => 'FreshRSS będzie teraz aktualizowany do <strong>wersji %s</strong>.',
		'error' => 'Proces aktualizacji napotkał błąd: %s',
		'file_is_nok' => 'Nowa <strong>wersja %s</strong> dostępna. Wpierw sprawdź uprawnienia do folderu <em>%s</em>, serwer HTTP musi mieć uprawnienia zapisu do niego',
		'finished' => 'Aktualizacja zakończona!',
		'none' => 'Brak aktualizacji',
		'server_not_found' => 'Nie można znaleźć serwera aktualizacji. [%s]',
	),
	'user' => array(
		'created' => array(
			'_' => 'Utworzono użytkownika %s',
			'error' => 'Nie można utworzyć użytkownika %s',
		),
		'deleted' => array(
			'_' => 'Usunięto użytkownika %s',
			'error' => 'Nie można usunąć użytkownika %s',
		),
		'updated' => array(
			'_' => 'Zaktualizowano użytkownika %s',
			'error' => 'Niezaktualizowano użytkownika %s',
		),
	),
	'profile' => array(
		'error' => 'Nie można zmodyfikować twojego profilu',
		'updated' => 'Twój profil został zmodyfikowany',
	),
);
