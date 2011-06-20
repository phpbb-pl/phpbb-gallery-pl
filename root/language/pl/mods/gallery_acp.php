<?php
/**
*
* gallery_acp [Polish]
*
* @package phpBB Gallery
* @version $Id: gallery_acp.php 181 2009-09-12 06:29:32Z daroPL $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 1160 2009-06-15 10:32:25 Zespół Olympus.pl $
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_GALLERY_CLEANUP_EXPLAIN'		=> 'Z tego miejsca można usunąć niektóre niepotrzebne pozostałości. Są to różne wpisy w bazie danych oraz osierocone albumy, zdjęcia i komentarze. Powstają one wówczas, gdy konto użytkownika, który je zamieścił/utworzył, zostało usunięte z witryny – nie mają już swojego autora, właściciela.',
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Gallery',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'		=> 'Tutaj znajdują się statystyki oraz funkcje synchronizacji i resetowania statystyk zainstalowanej galerii.',
	'ACP_IMPORT_ALBUMS'			=> 'Importowanie zdjęć',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'Z tego miejsca można zaimportować dużą liczbę zdjęć z katalogu witryny. Przed wykonaniem importu zdjęć, proszę ręcznie zmienić ich rozmiar.',


	'ADD_ALBUM_ON_TOP'				=> 'Dodaj album na górze',
	'ADD_PERMISSIONS'			=> 'Dodaj uprawnienia',
	'ALBUM_ADMIN'				=> 'Administracja albumem',
	'ALBUM_ADMIN_EXPLAIN'			=> 'W phpBB Gallery nie ma kategorii, wszystko jest oparte na albumach. Każdy album może mieć nielimitowaną liczbę subalbumów, a administrator może decydować czy można do nich dodawać zdjęcia. Tutaj można dodawać, zmieniać, usuwać, blokować i odblokowywać poszczególne albumy i ustawiać dodatkowe funkcje. Jeżeli zdjęcia wymagają synchronizacji, można to zrobić tutaj poprzez synchronizację albumu. <strong>Aby nowe albumy były widoczne, należy dla nich określić lub skopiować odpowiednie uprawnienia.</strong>',
	'ALBUM_AUTH_TITLE'			=> 'Uprawnienia albumów',
	'ALBUM_CREATED'				=> 'Nowy album został utworzony.',
	'ALBUM_DELETE'				=> 'Usuń album',
	'ALBUM_DELETE_EXPLAIN'			=> 'Poniższy formularz umożliwia usunięcie albumu i podjęcie decyzji, gdzie trafią umieszczone w nim zdjęcia.',
	'ALBUM_DELETED'				=> 'Album został usunięty.',
	'ALBUM_DESC'				=> 'Opis albumu',
	'ALBUM_DESC_EXPLAIN'			=> 'Wprowadzone w tym polu znaczniki HTML nie będą interpretowane i zostaną wyświetlone w takiej postaci, jak zostały wprowadzone.',
	'ALBUM_DESC_TOO_LONG'			=> 'Opis albumu jest za długi. Maksymalnie może składać się z 4000 znaków.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Poniższy formularz umożliwia dostosowanie albumu. Należy pamiętać, że funkcje moderacyjne są zdefiniowane poprzez uprawienia albumu dla każdego użytkownika lub grupy użytkowników.',
	'ALBUM_ID'				=> 'Identyfikator albumu',
	'ALBUM_IMAGE'				=> 'Obrazek albumu',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Lokalizacja – relatywna do katalogu głównego witryny – dodatkowego obrazka skojarzonego z tym albumem.',
	'ALBUM_NAME_EMPTY'			=> 'Należy wprowadzić nazwę albumu.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Nie można zmienić typu albumu zwykłego na typ „Konkurs”.',
	'ALBUM_PARENT'				=> 'Album macierzysty',
	'ALBUM_PASSWORD'			=> 'Hasło albumu',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Aby zdefiniować hasło dla tego albumu, proszę użyć systemu uprawnień w ustawieniach.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Potwierdź hasło albumu',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Potwierdzenie jest wymagane tylko w przypadku, gdy zostało wprowadzone hasło albumu.',
	'ALBUM_RESYNCED'			=> 'Album “%s” został zsynchronizowany',
	'ALBUM_SETTINGS'			=> 'Ustawienia albumu',
	'ALBUM_STATUS'				=> 'Status albumu',
	'ALBUM_TYPE'				=> 'Typ albumu',
	'ALBUM_TYPE_CAT'			=> 'Kategoria',
	'ALBUM_TYPE_CONTEST'			=> 'Konkurs',
	'ALBUM_TYPE_UPLOAD'			=> 'Album',
	'ALBUM_UPDATED'				=> 'Album został zaktualizowany.',
	'ALBUM_WATERMARK'			=> 'Wyświetlaj znak wodny',
	'ALBUM_WATERMARK_EXPLAIN'	=> 'Jeżeli ta opcja jest ustawiona na <samp>Nie</samp, znak wodny nie będzie wyświetlany, niezależnie od uprawnień!',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Nie można zmienić typu albumu „Konkurs” na „Album”.',
	'ALBUMS'				=> 'Albumy',

	'CACHE_DIR_SIZE'			=> 'Katalog cache/ – rozmiar katalogu',
	'CHANGE_AUTHOR'				=> 'Zmień autora na gościa',
	'CHECK'					=> 'Sprawdź',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Nie znaleziono osieroconych zdjęć.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Nie znaleziono osieroconych komentarzy.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Aby w bazie danych wyszukać pliki bez wpisu, należy uruchomić sprawdzanie.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Nie znaleziono osieroconych albumów osobistych.',
	'CHECK_PERSONALS_BAD_EXPLAIN'		=> 'Nie znaleziono albumów osobistych.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Nie znaleziono żadnego wpisu. Aby się upewnić, należy uruchomić sprawdzanie.',
	'CLEAN_AUTHORS_DONE'			=> 'Usunięto osierocone zdjęcia.',
	'CLEAN_CHANGED'				=> 'Autor został zmieniony na „Gość”.',
	'CLEAN_COMMENTS_DONE'			=> 'Usunięto osierocone komentarze.',
	'CLEAN_ENTRIES_DONE'			=> 'Usunięto pliki bez wpisów w bazie danych.',
	'CLEAN_GALLERY'				=> 'Wyczyść galerię',
	'CLEAN_GALLERY_ABORT'			=> 'Przerwij porządkowanie!',
	'CLEAN_PERSONALS_DONE'			=> 'Usunięto osierocone albumy osobiste.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Albumy osobiste zaznaczonych użytkowników zostały usunięte.',
	'CLEAN_SOURCES_DONE'			=> 'Usunięto zdjęcia bez plików.',
	'COLS_PER_PAGE'				=> 'Liczba kolumn na stronie miniatur',
	'COMMENT'				=> 'Komentowanie',
	'COMMENT_ID'				=> 'Identyfikator komentarza',
	'COMMENT_SYSTEM'			=> 'Komentarze',
	'CONFIRM_CLEAN'				=> 'Ta operacja jest nieodwracalna!',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Usunąć osierocone zdjęcia?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Usunąć osierocone komentarze?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Usunąć pliki bez wpisów w bazie danych?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Usunąć osierocone albumy osobiste?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_PERSONALS_BAD'		=> 'Usunąć albumy osobiste zaznaczonych użytkowników?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> 'Usunąć zdjęcia bez pliku?',
	'CONTEST_DATE_EXPLAIN'			=> 'Proszę wprowadzić datę w formacie YYYY-MM-DD HH:MM.',
	'CONTEST_END'				=> 'Zakończenie konkursu',
	'CONTEST_END_BEFORE_RATING'		=> 'Data zakończenia konkursu nie może być przed datą rozpoczęcia oceniania.',
	'CONTEST_END_BEFORE_START'		=> 'Data zakończenia konkursu nie może być przed datą jego rozpoczęcia.',
	'CONTEST_END_EXPLAIN'			=> 'Data po upłynięciu, której użytkownicy nie mogą już oceniać zdjęć.',
	'CONTEST_END_INVALID'			=> 'Niepoprawna data zakończenia konkursu (%s). Proszę wprowadzić datę w formacie YYYY-MM-DD HH:MM.',
	'CONTEST_RATING'			=> 'Rozpoczęcie oceniania',
	'CONTEST_RATING_BEFORE_START'		=> 'Data rozpoczęcia oceniania nie może być przed datą rozpoczęcia konkursu.',
	'CONTEST_RATING_EXPLAIN'		=> 'Data po upłynięciu, której użytkownicy nie mogą już zamieszczać zdjęć.',
	'CONTEST_RATING_INVALID'		=> 'Niepoprawna data rozpoczęcia oceniania (%s). Proszę wprowadzić datę w formacie YYYY-MM-DD HH:MM.',
	'CONTEST_SETTINGS'			=> 'Ustawienia konkursu',
	'CONTEST_START'				=> 'Rozpoczęcie konkursu',
	'CONTEST_START_EXPLAIN'			=> 'Po rozpoczęciu konkursu, użytkownicy mogą zamieszczać zdjęcia.',
	'CONTEST_START_INVALID'			=> 'Niepoprawna data rozpoczęcia konkursu (%s). Proszę wprowadzić datę w formacie YYYY-MM-DD HH:MM.',
	'COPY_PERMISSIONS'			=> 'Kopiuj uprawnienia z',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Jeśli zostanie wybrana opcja skopiowania uprawnień, album będzie miał takie same uprawnienia jak wybrany album. Jeśli nie zostanie wybrany żaden album do skopiowania uprawnień, uprawnienia należy określić później.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'		=> 'Jeśli zostanie wybrana opcja skopiowania uprawnień, album będzie miał takie same uprawnienia jak wybrany album. Operacja ta spowoduje zastąpienie wcześniej określonych uprawnień uprawnieniami wybranego albumu. Jeśli nie zostanie wybrany żaden album do skopiowania uprawnień, zostaną zachowane aktualne uprawnienia.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'      => 'Albumy do których chcesz zastosować skopiowane uprawnienia.',
	'COPY_PERMISSIONS_CONFIRM'      => 'Pamiętaj, że wszelkie istniejące uprawnienia zostaną nadpisane.',

	'COPY_PERMISSIONS_FROM'         => 'Kopiuj uprawnienia z',
	'COPY_PERMISSIONS_SUCCESSFUL'   => 'Skopiowano uprawnienia do wybranych albumów.',
	'COPY_PERMISSIONS_TO'         => 'Zastosuj uprawnienia do',

	'JPG_QUALITY'               => 'Jakość JPG',
	'JPG_QUALITY_EXP'            => 'Jeżeli obracasz lub zmieniasz rozmiar zdjęcia, rozmiar pliku może być większy niż wcześniej. Możesz zmniejszyć jakość zdjęć, aby zaoszczędzić przestrzeń dyskową.',

	'LOOK_UP_ALBUM'               => 'Wybierz album',
	'LOOK_UP_ALBUMS_EXPLAIN'      => 'Możesz wybrać więcej niż jeden album.',

	'NO_DESTINATION_ALBUM'         => 'Nie wybrałeś albumu do którego ma zostać przeniesiona zawartość.',

	'SEARCH_SETTINGS'            => 'Ustawienia wyszukiwania',

	'SELECTED_ALBUM_NOT_EXIST'      => 'Zaznaczony album(y) nie istnieją.',
	'CREATE_ALBUM'				=> 'Utwórz nowy album',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Usuń konkurs lub przenieś do albumu',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Usuń subalbumy lub przenieś do albumu',
	'DEFAULT_SORT_EXPLAIN'			=> 'Jeżeli zaznaczysz <samp>Domyślnie</samp>, sortowanie będzie przebiegać na podstawie konfiguracji.',
	'DEFAULT_SORT_METHOD'			=> 'Domyślna metoda sortowania',
	'DEFAULT_SORT_ORDER'			=> 'Domyślna kolejność sortowania',
	'DELETE_ALBUM_SUBS'				=> 'Proszę najpierw usunąć subalbumy',
	'DELETE_ALL_IMAGES'				=> 'Usuń wszystkie zdjęcia',
	'DELETE_IMAGES'					=> 'Usuń zdjęcia',
	'DELETE_PERMISSIONS'			=> 'Usuń uprawnienia',
	'DELETE_SUBALBUMS'				=> 'Usuń subalbumy z ich zawartością',
	'DISP_BIRTHDAYS'				=> 'Wyświetlaj urodziny',
	'DISP_EXIF_DATA'			=> 'Wyświetlanie danych Exif',
	'DISP_EXIF_DATA_EXP'         => 'Nie możesz użyć tej właściwości w tym momencie, jako że wymagana funkcja "exif_read_data" nie jest zawarta w twojej instalacji PHP.',

	'ROTATE_IMAGES_EXP'            => 'Nie możesz użyć tej właściwości w tym momencie, jako że wymagana funkcja "imagerotate" nie jest zawarta w twojej wersji GD.',
	'DISP_FAKE_THUMB'			=> 'Wyświetlanie miniatury na liście albumu',
	'DISP_LOGIN'					=> 'Wyświetlaj pole logowania',
	'DISP_LOGIN_EXP'				=> 'Tylko gość',
	'DISP_PERSONAL_ALBUM_PROFILE'		=> 'Wyświetlaj w profilu użytkownika odnośnik do albumu osobistego',
	'DISP_STATISTIC'				=> 'Wyświetlaj statystyki galerii',
	'DISP_TOTAL_IMAGES'			=> 'Wyświetlaj na stronie indeksu witryny liczbę zdjęć',
	'DISP_USER_IMAGES_PROFILE'		=> 'Wyświetlaj w profilu użytkownika statystyki wysłanych zdjęć',
	'DISP_VIEWTOPIC_ICON'			=> 'Wyświetlaj przycisk do albumu osobistego w widoku tematu',
	'DISP_VIEWTOPIC_IMAGES'			=> 'Wyświetlaj licznik zdjęć w widoku tematu',
	'DISP_VIEWTOPIC_LINK'			=> 'Licznik zdjęć odnośnikiem do zdjęć użytkownika',
	'DISP_WHOISONLINE'				=> 'Wyświetlaj użytkowników będących online',
	'DISPLAY_IN_RRC'				=> 'Wyświetlaj zdjęcia z tego albumu w panelach „Ostatnie” i „Losowe”',
	'DONT_COPY_PERMISSIONS'			=> 'Nie kopiuj uprawnień',

	'EDIT_ALBUM'				=> 'Edytuj album',

	'FAKE_THUMB_SIZE'			=> 'Rozmiar miniatury',
	'FAKE_THUMB_SIZE_EXP'			=> 'Podczas zmiany rozmiaru miniatur na maksymalny, należy pamiętać, że 16 pikseli jest przeznaczonych na czarną linię informacyjną.',

	'GALLERY_ALBUMS_TITLE'			=> 'Zarządzanie albumami galerii',
	'GALLERY_CONFIG'			=> 'Ustawienia galerii',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Tutaj można zmienić główne ustawienia phpBB Gallery.',
	'GALLERY_CONFIG_UPDATED'		=> 'Zaktualizowano ustawienia galerii.',
	'GALLERY_INDEX'				=> 'Indeks galerii',
	'GALLERY_PURGE_CACHE_EXPLAIN'		=> 'Jeśli jest używana funkcja buforowania miniatur, aby ponownie wygenerować miniatury po zmianie ich ustawień, należy wyczyścić bufor miniatur.',
	'GALLERY_STATS'				=> 'Statystyki galerii',
	'GALLERY_VERSION'			=> 'Wersja galerii',
	'GD_VERSION'				=> 'Optymalizacja dla wersji GD',
	'GENERAL_ALBUM_SETTINGS'		=> 'Ustawienia ogólne albumu',
	'GIF_ALLOWED'				=> 'Zamieszczanie plików GIF',
	'GUPLOAD_DIR_SIZE'			=> 'Katalog upload/ – rozmiar katalogu',

	'HACKING_ATTEMPT'			=> 'Próba włamania!',
	'HANDLE_IMAGES'				=> 'Co robić ze zdjęciami?',
	'HANDLE_SUBS'				=> 'Co robić z subalbumami?',
	'HOTLINK_ALLOWED'			=> 'Domeny uprawnione do przekierowań typu „hotlink”',
	'HOTLINK_ALLOWED_EXP'			=> 'Nazwy domen muszą być oddzielone tylko przecinkiem (bez spacji). Np. „flying-bits.org,phpbb.com”',
	'HOTLINK_PREVENT'			=> 'Zapobieganie przekierowaniom typu „hotlink”',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Maksymalna długość opisu/komentarza zdjęcia (bajty)',
	'IMAGE_ID'				=> 'ID zdjęcia',
	'IMAGE_SETTINGS'			=> 'Ustawienia zdjęć',
	'IMAGES_PER_DAY'			=> 'Zdjęć dziennie',
	'IMPORT_ALBUM'				=> 'Album dla importowanych zdjęć',
	'IMPORT_DEBUG_MES'			=> 'Zaimportowane zdjęcia: %1$s. Liczba pozostałych zdjęć: %2$s.',
	'IMPORT_DIR_EMPTY'			=> 'Katalog %s jest pusty. Aby importować zdjęcia, muszą one znajdować się w tym katalogu.',
	'IMPORT_FINISHED'			=> 'Zaimportowane zdjęcia: %1$s.',
	'IMPORT_MISSING_ALBUM'			=> 'Proszę wybrać album, do którego będą importowane zdjęcia.',
	'IMPORT_SELECT'				=> 'Proszę zaznaczyć zdjęcia do zaimportowaania. Wysłane zdjęcia zostaną usunięte. Wszystkie inne zdjęcia będą w dalszym ciągu dostępne.',
	'IMPORT_SCHEMA_CREATED'			=> 'Schemat importu został utworzony. Proszę czekać na zakończenie pobrania zdjęć.',
	'IMPORT_USER'				=> 'Zamieszczone przez',
	'IMPORT_USER_EXP'			=> 'Tutaj można dodawać zdjęcia do innych użytkowników.',
	'INDEX_SETTINGS'			=> 'Ustawienia indeksu galerii.',
	'INFO_LINE'				=> 'Wyświetlanie rozmiaru pliku na miniaturze',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Dziedziczy uprawnienia od innego albumu',
	'INHERIT_PERMISSIONS_VICTIM'		=> 'Dziedziczy uprawnienia od innego ustawienia',

	'JPG_ALLOWED'				=> 'Zamieszczanie plików JPG',

	'LIST_INDEX'				=> 'Wyświetlaj subalbumy w legendzie albumu macierzystego',
	'LIST_INDEX_EXPLAIN'			=> 'Uaktywnienie tej funkcji spowoduje – jeżeli ma on włączoną funkcję „Wyświetlaj subalbumy w legendzie” – wyświetlanie tego albumu na stronie indeksu galerii i w innych miejscach jako odnośnika w legendzie albumu macierzystego.',
	'LIST_SUBALBUMS'			=> 'Wyświetlaj subalbumy w legendzie',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Uaktywnienie tej funkcji spowoduje – jeżeli mają one włączoną funkcję „Wyświetlaj subalbumy w legendzie albumu macierzystego” – wyświetlanie subalbumów tego albumu na stronie indeksu galerii i w innych miejscach jako odnośnika w legendzie.',
	'LOCKED'				=> 'Zablokowany',

	'MANAGE_CRASHED_ENTRIES'		=> 'Uszkodzone wpisy',
	'MANAGE_CRASHED_IMAGES'			=> 'Uszkodzone zdjęcia',
	'MANAGE_PERSONALS'			=> 'Albumy osobiste',
	'MAX_IMAGES_PER_ALBUM'			=> 'Maksymalna liczba zdjęć dla każdego albumu',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> '-1 = brak limitu',
	'MEDIUM_CACHE'				=> 'Bufor zmienionych rozmiarów zdjęć dla strony zdjęć',
	'MEDIUM_DIR_SIZE'			=> 'Katalog medium/- rozmiar katalogu',
	'MISSING_ALBUM_NAME'			=> 'Należy wprowadzić nazwę albumu.',
	'MISSING_AUTHOR'			=> 'Osierocone zdjęcia',
	'MISSING_AUTHOR_C'			=> 'Osierocone komentarze',
	'MISSING_ENTRY'				=> 'Pliki bez wpisu w bazie danych',
	'MISSING_IMPORT_SCHEMA'			=> 'Nie znaleziono wybranego schematu importu (%s).',
	'MISSING_OWNER'				=> 'Osierocone albumy osobiste',
	'MISSING_OWNER_EXP'			=> 'Zostaną również usunięte subalbumy, zdjęcia i komentarze.',
	'MISSING_SOURCE'			=> 'Zdjęcia bez plików',
	'MOVE_IMAGES_TO'			=> 'Przenieś zdjęcia do',
	'MOVE_SUBALBUMS_TO'			=> 'Przenieś subalbumy do',

	'NEW_ALBUM_CREATED'			=> 'Nowy album został utworzony',
	'NO_ALBUM_SELECTED'			=> 'Należy zaznaczyć przynajmniej jeden album.',
	'NO_FILE_SELECTED'			=> 'Należy zaznaczyć przynajmniej jeden plik.',
	'NO_PERMISSIONS_SELECTED'		=> 'Należy zaznaczyć przynajmniej jeden album lub specjalny system uprawnień.',
	'NO_VICTIM_SELECTED'			=> 'Należy zaznaczyć przynajmniej jednego użytkownika lub grupę.',
	'NO_INHERIT'				=> 'Nie kopiuj uprawnień',
	'NO_PARENT_ALBUM'			=> 'Nie ma albumu macierzystego',
	'NO_SUBALBUMS'				=> 'Nie ma załączonych albumów',
	'NUMBER_ALBUMS'				=> 'Liczba albumów',
	'NUMBER_IMAGES'				=> 'Liczba zdjęć',
	'NUMBER_PERSONALS'			=> 'Liczba albumów osobistych',

	'OWN_PERSONAL_ALBUMS'			=> 'Własne albumy osobiste',

	'PERMISSION'				=> 'Uprawnienie',
	'PERMISSION_NEVER'			=> 'Nigdy',
	'PERMISSION_NO'				=> 'Nie',
	'PERMISSION_SETTING'			=> 'Ustawienie',
	'PERMISSION_YES'			=> 'Tak',

	'PERMISSION_A_LIST'			=> 'Może widzieć album',
	'PERMISSION_ALBUM_COUNT'		=> 'Maksymalna liczba subalbumów osobistych',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Nielimitowana liczba subalbumów osobistych',
	'PERMISSION_C'				=> 'Komentarze',
	'PERMISSION_C_DELETE'			=> 'Usuwanie własnych komentarzy',
	'PERMISSION_C_EDIT'			=> 'Edytowanie własnych komentarzy',
	'PERMISSION_C_POST'			=> 'Komentowanie zdjęcia',
	'PERMISSION_C_READ'			=> 'Czytanie komentarzy',
	'PERMISSION_I'				=> 'Zdjęcia',
	'PERMISSION_I_APPROVE'			=> 'Zamieszczanie zdjęć bez akceptowania',
	'PERMISSION_I_COUNT'			=> 'Maksymalna liczba zdjęć do wysłania',
	'PERMISSION_I_DELETE'			=> 'Usuwanie własnych zdjęć',
	'PERMISSION_I_EDIT'			=> 'Edytowanie własnych zdjęć',
	'PERMISSION_I_LOCK'			=> 'Blokowanie zdjęć',
	'PERMISSION_I_RATE'			=> 'Ocenianie zdjęć',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Goście i zamieszczający zdjęcie nigdy <strong>nie mogą</strong> oceniać zdjęć.',
	'PERMISSION_I_REPORT'			=> 'Zgłaszanie zdjęć',
	'PERMISSION_I_UNLIMITED'		=> 'Nielimitowana liczba zdjęć do zamieszczenia',
	'PERMISSION_I_UPLOAD'			=> 'Zamieszczanie zdjęć',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Te uprawnienie jest także używane do określenia czy użytkownik może przenosić zdjęcia do albumu, mając uprawnienia moderatora na innych forach.',
	'PERMISSION_I_VIEW'			=> 'Oglądanie zdjęć',
	'PERMISSION_I_WATERMARK'		=> 'Oglądanie zdjęć bez znaku wodnego',
	'PERMISSION_M'				=> 'Moderacja',
	'PERMISSION_MISC'			=> 'Różne',
	'PERMISSION_M_COMMENTS'			=> 'Moderowanie komentarzy',
	'PERMISSION_M_DELETE'			=> 'Usuwanie zdjęć',
	'PERMISSION_M_EDIT'			=> 'Edytowanie zdjęć',
	'PERMISSION_M_MOVE'			=> 'Przenoszenie zdjęć',
	'PERMISSION_M_REPORT'			=> 'Zarządzanie zgłoszeniami',
	'PERMISSION_M_STATUS'			=> 'Akceptowanie i blokowanie zdjęć',

	'PERMISSION_EMPTY'			=> 'Nie określono wszystkich uprawnień.',
	'PERMISSIONS'				=> 'Uprawnienia',
	'PERMISSIONS_COPY'				=> 'Skopiuj uprawnienia albumu',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Tutaj można skopiować uprawnienia albumu do innych albumów.',
	'PERMISSIONS_EXPLAIN'			=> 'Tutaj można określić użytkowników i grupy, które mają dostęp do poszczególnych albumów.',
	'PERMISSIONS_STORED'			=> 'Uprawnienia zostały zapisane.',
	'PERSONAL_ALBUM_INDEX'			=> 'Wyświetlaj na stronie indeksu albumy osobiste jako album',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Jeżeli wybrano „Nie” – zostanie umieszczony do nich odnośnik.',
	'PGALLERIES_PER_PAGE'			=> 'Liczba galerii osobistych na stronę',
	'PHPBB_INTEGRATION'				=> 'Integracja z phpBB',
	'PNG_ALLOWED'				=> 'Zamieszczanie plików PNG',
	'PURGED_CACHE'				=> 'Bufor został opróżniony',

	'RATE_SCALE'				=> 'Skala ocen', 
	'RATE_SYSTEM'				=> 'Oceny',
	'REDIRECT_ACL'				=> 'Teraz można %sokreślić uprawnienia%s dla tego albumu.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Aby zmienić typ albumu na „Kategoria”, należy z niego najpierw usunąć zdjęcia.',
	'RESET_RATING'				=> 'Resetuj oceny albumu',
	'RESET_RATING_COMPLETED'		=> 'Oceny zostały usunięte.',
	'RESET_RATING_CONFIRM'			=> 'Czy na pewno chcesz usunąć wszystkie oceny zdjęć z albumu „%s”?',
	'RESET_RATING_EXPLAIN'			=> 'Zostaną usunięte wszystkie oceny zdjęć w wybranym albumie. W pole znajdujące się po prawej stronie, należy wprowadzić identyfikator albumu.',
	'RESIZE_IMAGES'				=> 'Skalowanie dużych zdjęć',
	'RESYNC_IMAGECOUNTS'			=> 'Synchronizuj licznik zdjęć',
	'RESYNC_IMAGECOUNTS_CONFIRM'		=> 'Czy na pewno chcesz wykonać synchronizację licznika zdjęć?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'		=> 'W trakcie synchronizacji będą brane pod uwagę tylko istniejące zdjęcia.',
	'RESYNC_LAST_IMAGES'			=> 'Odśwież „Najnowsze zdjęcie”',
	'RESYNC_PERSONALS'			=> 'Synchronizuj identyfikatory albumów osobistych',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Czy na pewno chcesz wykonać synchronizację identyfikatorów albumów osobistych?',
	'RESYNCED_IMAGECOUNTS'			=> 'Zsynchronizowano licznik zdjęć',
	'RESYNCED_LAST_IMAGES'			=> 'Odświeżono „Najnowsze zdjęcie”',
	'RESYNCED_PERSONALS'			=> 'Zsynchronizowano ID albumów osobistych',
	'ROTATE_IMAGES'					=> 'Zezwól na obracanie zdjęć',
	'ROWS_PER_PAGE'				=> 'Liczba wierszy na stronie miniatur',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Nazwa albumu',
	'RRC_DISPLAY_COMMENTS'			=> 'Komentarze',
	'RRC_DISPLAY_IMAGENAME'			=> 'Tytuł zdjęcia',
	'RRC_DISPLAY_IMAGETIME'			=> 'Czas zdjęcia',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Liczba odsłon zdjęcia',
	'RRC_DISPLAY_IP'				=> 'Adres IP użytkownika',
	'RRC_DISPLAY_NONE'			=> 'Brak',
	'RRC_DISPLAY_OPTIONS'			=> 'Wartości wyświetlane pod miniaturami',
	'RRC_DISPLAY_USERNAME'			=> 'Nazwa użytkownika',
	'RRC_DISPLAY_RATINGS'			=> 'Ocena',
	'RRC_GINDEX'				=> 'Ostatnio zamieszczone, Losowo wybrane i Komentarze – Właściwości',
	'RRC_GINDEX_COLUMNS'			=> 'Kolumny',
	'RRC_GINDEX_COMMENTS'			=> 'Zwijanie komentarzy',
	'RRC_GINDEX_CONTESTS'			=> 'Liczba konkursów',
	'RRC_GINDEX_CROWS'				=> 'Liczba komentarzy',
	'RRC_GINDEX_MODE'			=> 'Tryb',
	'RRC_GINDEX_MODE_EXP'			=> 'Przy bardzo dużych bazach danych losowo wybrane zdjęcia mogą długo się wczytywać!',
	'RRC_GINDEX_PGALLERIES'			=> 'Wyświetlaj zdjęcia z albumów osobistych',
	'RRC_GINDEX_ROWS'			=> 'Wiersze',
	'RRC_MODE_COMMENTS'			=> 'Komentarze',
	'RRC_MODE_NONE'					=> 'Brak',
	'RRC_MODE_RANDOM'			=> 'Losowo wybrane zdjęcia',
	'RRC_MODE_RECENT'			=> 'Ostatnio zamieszczone zdjęcia',
	'RRC_PROFILE_COLUMNS'			=> 'Kolumny',
	'RRC_PROFILE_MODE'			=> 'Tryb „Ostatnie i losowo wybrane” w profilu',
	'RRC_PROFILE_MODE_EXP'			=> 'Przy bardzo dużych bazach danych losowo wybrane zdjęcia mogą długo się wczytywać!',
	'RRC_PROFILE_ROWS'			=> 'Wiersze',

	'RSZ_HEIGHT'				=> 'Maksymalna wysokość wyświetlanego zdjęcia',
	'RSZ_WIDTH'				=> 'Maksymalna szerokość wyświetlanego zdjęcia',

	'SELECT_ALBUM'				=> 'Wybierz album',
	'SELECT_GROUPS'				=> 'Wybierz grupy',
	'SELECT_PERM_SYS'			=> 'Wybierz system uprawnień',
	'SELECT_PERMISSIONS'			=> 'Wybierz uprawnienia',
	'SELECTED_ALBUMS'			=> 'Wybrane albumy',
	'SELECTED_GROUPS'			=> 'Wybrane grupy',
	'SELECTED_PERM_SYS'			=> 'Wybrany system uprawnień',
	'SET_PERMISSIONS'			=> '<br />Teraz określ <a href="%s">uprawnienia</a>.',
	'SHORTED_IMAGENAMES'			=> 'Skracanie nazw zdjęć',
	'SHORTED_IMAGENAMES_EXP'		=> 'Jeżeli tytuł zdjęcia jest długi i nie zawiera spacji, może to źle wpływać na układ strony. Tutaj można określić do ilu znaków będzie skracany tytuł zdjęcia.',
	'SORRY_NO_STATISTIC'			=> 'Wartość nie jest jeszcze dostępna.',
	'SYNC_IN_PROGRESS'			=> 'Synchronizowanie albumu',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Obecny zakres synchronizacji zdjęć %1$d/%2$d.',

	'THUMBNAIL_CACHE'			=> 'Bufor miniatur',
	'THUMBNAIL_QUALITY'			=> 'Jakość miniatur (1–100)',
	'THUMBNAIL_SETTINGS'			=> 'Ustawienia miniatur',

	'UC_IMAGE_NAME'				=> 'Tytuł zdjęcia',
	'UC_IMAGE_ICON'				=> 'Ikona ostatniego zdjęcia',
	'UC_IMAGEPAGE'				=> 'Zdjęcie na stronie zdjęcia (z komentarzami i ocenami)',
	'UC_LINK_CONFIG'			=> 'Konfiguracja odnośników',
	'UC_LINK_HIGHSLIDE'			=> 'Otwórz za pomocą wtyczki Highslide',
	'UC_LINK_IMAGE'				=> 'Otwórz zdjęcie',
	'UC_LINK_IMAGE_PAGE'			=> 'Otwórz stronę zdjęcia (z komentarzami i ocenami)',
	'UC_LINK_LYTEBOX'			=> 'Otwórz za pomocą wtyczki Lightbox',
	'UC_LINK_NONE'				=> 'Bez odnośnika',
	'UC_LINK_SHADOWBOX'				=> 'Otwórz plugin Shadowbox',
	'UC_THUMBNAIL'				=> 'Miniatura',
	'UC_THUMBNAIL_EXP'			=> 'Używana także do BBCode.',
	'UNLOCKED'				=> 'Niezablokowany',
	'UPDATE_BBCODE'				=> 'Aktualizuj BBCode',
	'UPLOAD_IMAGES'				=> 'Zamieszczanie wielu zdjęć',

	'VIEW_IMAGE_URL'			=> 'Wyświetlanie na stronie zdjęcia jego adresu URL',

	'WATERMARK'				=> 'Znak wodny',
	'WATERMARK_HEIGHT'			=> 'Minimalna wysokość znaku wodnego',
	'WATERMARK_HEIGHT_EXP'			=> 'Aby uniknąć zasłaniania małych zdjęć przez znak wodny, należy tutaj wprowadzić minimalną wysokość zdjęcia. Jeżeli zdjęcie jest mniejsze, znak wodny nie będzie pokazywany.',
	'WATERMARK_IMAGES'			=> 'Znak wodny zdjęć',
	'WATERMARK_OPTIONS'			=> 'Ustawienia znaku wodnego',
	'WATERMARK_POSITION'			=> 'Położenie znaku wodnego',
	'WATERMARK_POSITION_BOTTOM'		=> 'na dole',
	'WATERMARK_POSITION_CENTER'		=> 'na środku',
	'WATERMARK_POSITION_LEFT'		=> 'po lewej stronie',
	'WATERMARK_POSITION_MIDDLE'		=> 'pośrednio',
	'WATERMARK_POSITION_RIGHT'		=> 'po prawej stronie',
	'WATERMARK_POSITION_TOP'		=> 'na górze',
	'WATERMARK_SOURCE'		 	=> 'Plik źródłowy znaku wodnego (relatywnie do głównego katalogu witryny)',
	'WATERMARK_WIDTH'			=> 'Minimalna szerokość znaku wodnego',
	'WATERMARK_WIDTH_EXP'			=> 'Aby uniknąć zasłaniania małych zdjęć przez znak wodny, należy tutaj wprowadzić minimalną szerokość zdjęcia. Jeżeli zdjęcie jest mniejsze, znak wodny nie będzie pokazywany.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'			=> 'Informacje o wydaniu',
	'CURRENT_VERSION'			=> 'Zainstalowana wersja',
	'DOWNLOAD_LATEST'			=> 'Pobierz najnowszą wersję',
	'LATEST_VERSION'			=> 'Najnowsza wersja',
	'NO_INFO'				=> 'Nie można połączyć się serwerem',
	'NOT_UP_TO_DATE'			=> 'Wersja %s jest nieaktualna',
	'RELEASE_ANNOUNCEMENT'			=> 'Temat informacji',
	'UP_TO_DATE'				=> 'Jest zainstalowana najnowsza wersja %s',
	'VERSION_CHECK'				=> 'Sprawdź wersję moda',
));

?>