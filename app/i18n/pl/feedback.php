<?php

return array(
	'admin' => array(
		'optimization_complete' => 'Optymalizacja zakończona',
	),
	'access' => array(
		'denied' => 'Nie posiadasz uprawnień do tej strony You don’t have permission to access this page',
		'not_found' => 'You are looking for a page which doesn’t exist',
	),
	'auth' => array(
		'form' => array(
			'not_set' => 'A problem occured during authentication system configuration. Please retry later.',
			'set' => 'Form is now your default authentication system.',
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
			'name_exists' => 'Kategoria o tej nazwie już istnieje.',
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
			'internal_problem' => 'Kanał nie może zostać dodany. Aby uzyskać więcej informacji, <a href="%s">sprawdź logi FreshRSS logs</a> for details. You can try force adding by appending <code>#force_feed</code> to the URL.',
			'invalid_url' => 'URL <em>%s</em> is invalid',
			'marked_read' => 'Feeds have been marked as read',
			'n_actualized' => '%d feeds have been updated',
			'n_entries_deleted' => '%d articles have been deleted',
			'no_refresh' => 'There is no feed to refresh…',
			'not_added' => '<em>%s</em> could not be added',
			'over_max' => 'You have reached your limit of feeds (%d)',
			'updated' => 'Feed has been updated',
		),
		'purge_completed' => 'Purge completed (%d articles deleted)',
	),
	'update' => array(
		'can_apply' => 'FreshRSS will now be updated to the <strong>version %s</strong>.',
		'error' => 'The update process has encountered an error: %s',
		'file_is_nok' => 'New <strong>version %s</strong> available, but check permissions on <em>%s</em> directory. HTTP server must have rights to write into',
		'finished' => 'Update completed!',
		'none' => 'No update to apply',
		'server_not_found' => 'Update server cannot be found. [%s]',
	),
	'user' => array(
		'created' => array(
			'_' => 'User %s has been created',
			'error' => 'User %s cannot be created',
		),
		'deleted' => array(
			'_' => 'User %s has been deleted',
			'error' => 'User %s cannot be deleted',
		),
		'updated' => array(
			'_' => 'User %s has been updated',
			'error' => 'User %s has not been updated',
		),
	),
	'profile' => array(
		'error' => 'Your profile cannot be modified',
		'updated' => 'Your profile has been modified',
	),
);
