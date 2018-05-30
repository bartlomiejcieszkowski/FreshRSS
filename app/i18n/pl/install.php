<?php

return array(
	'action' => array(
		'finish' => 'Zakońćz instalac',
		'fix_errors_before' => 'Napraw błedy zanim przejdziesz do następnego kroku.',
		'keep_install' => 'Zachowaj poprzednią konfiguracje',
		'next_step' => 'Przejdź do następnego kroku',
		'reinstall' => 'Zainstaluj ponownie FreshRSS',
	),
	'auth' => array(
		'form' => 'Formularz Web (tradycjny, wymaga JavaScriptu)',
		'http' => 'HTTP (dla zaawansowanych użytkowników z HTTPS) HTTP (for advanced users with HTTPS)',
		'none' => 'Brak (niebezpieczne)',
		'password_form' => 'Hasło<br /><small>(dla logowania przez formularz Webowy)</small>',
		'password_format' => 'Conajmniej 7 znaków',
		'type' => 'Metoda autentykacji',
	),
	'bdd' => array(
		'_' => 'Baza danych',
		'conf' => array(
			'_' => 'Konfiguracja bazy danych',
			'ko' => 'Zweryfikuj dane o bazie danych.',
			'ok' => 'Konfiguracja bazy danych została zapisana.',
		),
		'host' => 'Host',
		'prefix' => 'Prefix tabeli',
		'password' => 'Hasło bazy danych',
		'type' => 'Rodzaj bazy danych',
		'username' => 'Użytkownik bazy danych',
	),
	'check' => array(
		'_' => 'Checks',
		'already_installed' => 'Wykryto, że FreshRSS jest już zainstalowany!',
		'cache' => array(
			'nok' => 'Sprawdz uprawnienia folderu <em>./data/cache</em>. Serwer HTTP musi mieć prawo zapisu do tej scieżki',
			'ok' => 'Uprawnienia do folderu \'cache\' są poprawne.',
		),
		'ctype' => array(
			'nok' => 'Nie można znaleźć wymaganej biblioteki do sprawdzania rodzaju znaków (php-ctype).',
			'ok' => 'Posiadasz zainstalowana biblioteke do sprawdzania rodzaju znaków (php-ctype).',
		),
		'curl' => array(
			'nok' => 'Nie można znaleźć wymaganej biblioteki cURL (php-curl).',
			'ok' => 'Posiadasz zainstalowana biblioteke cURL (php-curl).',
		),
		'data' => array(
			'nok' => 'Sprawdz uprawnienia folderu <em>./data</em>. Serwer HTTP musi mieć prawo zapisu do tej scieżki',
			'ok' => 'Uprawnienia do folderu \'data\' są poprawne.',
		),
		'dom' => array(
			'nok' => 'Nie można znaleźć wymaganej bibliotek do przeglądania drzewa DOM (php-dom).',
			'ok' => 'Posiadasz zainstalowana biblioteke do przeglądania drzewa DOM (php-dom).',
		),
		'favicons' => array(
			'nok' => 'Sprawdz uprawnienia folderu <em>./data/favicons</em>. Serwer HTTP musi mieć prawo zapisu do tej scieżki',
			'ok' => 'Uprawnienia do folderu \'favicons\' są poprawne.',
		),
		'fileinfo' => array(
			'nok' => 'Nie można znaleźć wymaganej biblioteki PHP fileinfo (php-fileinfo).',
			'ok' => 'Posiadasz zainstalowana biblioteke PHP fileinfo (php-fileinfo).',
		),
		'http_referer' => array(
			'nok' => 'Upewnij się, że nie zmieniasz pola HTTP REFERER.',
			'ok' => 'Pole HTTP REFERER jest poprawne i odpowiada twojemu serwerowi.',
		),
		'json' => array(
			'nok' => 'Nie można znaleźć zalecanej biblioteki do parsowania JSON-a.',
			'ok' => 'Posiadasz zainstalowana zalecaną biblioteke do parsowania JSON-a.',
		),
		'minz' => array(
			'nok' => 'Nie można znaleźć frameworku Minz.',
			'ok' => 'Posiadasz zainstalowany framework Minz.',
		),
		'pcre' => array(
			'nok' => 'Nie można znaleźć wymaganej bibliotek do wyrażeń regularnych (php-pcre).',
			'ok' => 'Posiadasz zainstalowaną wymaganą biblioteke do wyrażeń regularnych (php-pcre).',
		),
		'pdo' => array(
			'nok' => 'Nie można znaleźć PDO lub jednego ze wspieranych sterowników (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'Posiadasz zainstalowane PDO oraz conajmniej jeden ze wspieranych sterowników (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'nok' => 'Twoja wersja PHP to %s, ale FreshRSS potrzebuje co najmniej wersji %s.',
			'ok' => 'Twoja wersja PHP to %s, która jest kompatybilna z FreshRSS.',
		),
		'users' => array(
			'nok' => 'Sprawdz uprawnienia folderu <em>./data/users</em>. Serwer HTTP musi mieć prawo zapisu do tej scieżki',
			'ok' => 'Uprawnienia do folderu \'users\' są poprawne.',
		),
		'xml' => array(
			'nok' => 'Nie można znaleźć biblioteki do parsowania XML-a.',
			'ok' => 'Posiadasz zainstalowaną wymaganą biblioteke do parsowania XML-a.',
		),
	),
	'conf' => array(
		'_' => 'Ogólna konfiguracja',
		'ok' => 'Ogólna konfiguracja została zapisana.',
	),
	'congratulations' => 'Gratulacje!',
	'default_user' => 'Nazwa domyślnego użytkownika <small>(maksymalnie 16 alfanumerycznych znaków)</small>',
	'delete_articles_after' => 'Usuń artykuły po',
	'fix_errors_before' => 'Napraw błedy zanim przejdziesz do następnego kroku.',
	'javascript_is_better' => 'FreshRSS jest przyjemniejszy z włączonym JavaScriptem',
	'js' => array(
		'confirm_reinstall' => 'Starcisz poprzednią konfiguracje przez ponowną instalacje FreshRSS. Jesteś pewien, że chesz kontynuować?',
	),
	'language' => array(
		'_' => 'Język',
		'choose' => 'Wybierz język FreshRSS',
		'defined' => 'Język został zdefiniowany .',
	),
	'not_deleted' => 'Coś poszło nie tak; musisz usunąć plik <em>%s</em> ręcznie.',
	'ok' => 'Instalacja się powiodła.',
	'step' => 'krok %d',
	'steps' => 'Kroki',
	'title' => 'Intalacja · FreshRSS',
	'this_is_the_end' => 'To już jest koniec',
);
