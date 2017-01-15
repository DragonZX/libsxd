<?php
// Language File for Sypex Dumper 2
$LNG = array(

// Informācija par lokalizācijas failu
'ver'				=> 20005, // Kādai versijai ir minēts fails
'translated'		=> 'Shader (http://www.dautkom.lv/)', // Tulkotāja kontakti
'name'				=> 'Latviešu', // Valodas nosaukums

// Rīkjosla
'tbar_backup'		=> 'Eksports',
'tbar_restore'		=> 'Imports', 
'tbar_files'		=> 'Faili',
'tbar_services'		=> 'Servisi',
'tbar_options'		=> 'Opcijas',
'tbar_createdb'		=> 'Izveidot DB',
'tbar_connects'		=> 'Savienojums',
'tbar_exit'			=> 'Izeja',

// Strukturēto objektu nosaukums
'obj_tables'		=> 'Tabulas',
'obj_views'			=> 'Skati',
'obj_procs'			=> 'Procedūras',
'obj_funcs'			=> 'Funkcijas',
'obj_trigs'			=> 'Trigeri',
'obj_events'		=> 'Notikumi',

// Eksports
'zip_max'			=> 'maksimums',
'zip_min'			=> 'minimums',
'zip_none'			=> 'Bez kompresijas',
'default'			=> 'pēc noklusējuma',
'combo_db'			=> 'Datu bāze:', 
'combo_charset'		=> 'Kodējums:', 
'combo_zip'			=> 'Kompresija:', 
'combo_comments'	=> 'Komentārs:',
'del_legend'		=> 'Autodzēšana, jā:',
'del_date'			=> 'faili ir vecāki par %s dienām',
'del_count'			=> 'failu skaits ir virs %s',
'tree'				=> 'Izvēlēties objektus:',
'no_saved'			=> '*Nav saglabātus uzdevumus',
'btn_save'			=> 'Saglabāt',
'btn_exec'			=> 'Izpildīt',

// Imports	
'combo_file'		=> 'Fails:',
'combo_strategy'	=> 'Atgūšanas stratēģija:',
'ext_legend'		=> 'Papildu opcijas:',
'correct'			=> 'Kodējuma korekcija',
'autoinc'			=> 'Atiestātīt AUTO_INCREMENT',

// Žurnāls
'status_current'	=> 'Pašreizējais statuss:',
'status_total'		=> 'Vispārējais statuss:',
'time_elapsed'		=> 'Pagājis:',
'time_left'			=> 'Palika:',
'btn_stop'			=> 'Pārtraukt',
'btn_pause'			=> 'Pauze',
'btn_resume'		=> 'Turpināt',
'btn_again'			=> 'Atkārtot',
'btn_clear'			=> 'Izdzēst žurnālu',

// Faili
'btn_delete'		=> 'Izdzēst',
'btn_download'		=> 'Lejuplādēt',
'btn_open'			=> 'Atvert',

// Servisi
'opt_check'			=> 'Opcijas pārbaudei:',
'opt_repair'		=> 'Opcijas labošanai:',
'btn_delete_db'		=> 'Izdzēst DB',
'btn_check'			=> 'Pārbaudīt',
'btn_repair'		=> 'Labot',
'btn_analyze'		=> 'Analizēt',
'btn_optimize'		=> 'Optimizēt',

// Opcijas
'cfg_legend'		=> 'Pamatkonfigurācija:',
'cfg_time_web'		=> 'Web izpildes laiks (sek.):',
'cfg_time_cron'		=> 'Cron izpildes laiks (sek.):',
'cfg_backup_path'	=> 'backup directorijas atrašanas vieta:',
'cfg_backup_url'	=> 'URL līdz backup direktorijai:',
'cfg_globstat'		=> 'Globāla statistika:',
'cfg_extended'		=> 'Papildiespējas:',
'cfg_charsets'		=> 'Filtrs kodējumiem:',
'cfg_only_create'	=> 'Kopēt tikai struktūru:',
'cfg_auth'			=> 'Autorizācijas ķēde:',
'cfg_confirm'		=> 'Pieprasīt apstiprinājumu:',
'cfg_conf_import'	=> 'DB importam',
'cfg_conf_file'		=> 'failu dzēšanai',
'cfg_conf_db'		=> 'DB dzēšanai',

// Savienojums
'con_header'		=> 'Savienojuma parametri',
'connect'			=> 'Savienojums',
'my_host'			=> 'Hosts:',
'my_port'			=> 'Ports:',
'my_user'			=> 'Lietotājs:',
'my_pass'			=> 'Parole:',
'my_pass_hidden'	=> 'Parole netiek parādīta',
'my_comp'			=> 'Protokols ar kompresiju',
'my_db'				=> 'Datu bāze:',
'btn_cancel'		=> 'Atcelt',

// Uzdevuma saglabāšana
'sj_header'			=> 'Saglabāt uzdevumu',
'sj_job'			=> 'Uzdevums',
'sj_name'			=> 'Nosaukums (angl.):',
'sj_title'			=> 'Apraksts:',

// DB izveidošana
'cdb_header'		=> 'Datu bāzes izveidošana',
'cdb_detail'		=> 'Sīkāka informācija',
'cdb_name'			=> 'Nosaukums:',
'combo_collate'		=> 'Salīdzināšana',
'btn_create'		=> 'Izveidot',

// Autorizācija
'js_required'		=> 'JavaScript jābūt ieslēgtam',
'auth'				=> 'Autorizācija',
'auth_user'			=> 'Lietotājs:',
'auth_remember'		=> 'Atcereties',
'btn_enter'			=> 'Ienākt',
'btn_details'		=> 'Sīkāka informācija',

// Paziņojumi žurnālā
'not_found_rtl'		=> 'Nav RTL-faila',
'backup_begin'		=> 'DB `%s` eksporta sākums',
'backup_TC'			=> 'Tabulas `%s` eksports',
'backup_VI'			=> 'Skata `%s` eksports',
'backup_PR'			=> 'Procedūras `%s` eksports',
'backup_FU'			=> 'Funkcijas `%s` eksports',
'backup_EV'			=> 'Notikuma `%s` eksports',
'backup_TR'			=> 'Trigera `%s` eksports',
'continue_from'		=> 'no %s pozicijas',
'backup_end'		=> 'Ir izveidota `%s` DB rezerves kopija.',
'autodelete'		=> 'Veco failu autodzēšana:',
'del_by_date'		=> '- `%s` - izdzēsts (pēc datuma)',
'del_by_count'		=> '- `%s` - izdzēsts (pēc datuma)',
'del_fail'			=> '- `%s` - neizdevās izdzēst',
'del_nothing'		=> '- nav failus dzēšanai',
'set_names'			=> 'Savienojumam uzstādīts kodējums: `%s`',
'restore_begin'		=> 'DB `%s` importa sākums',
'restore_TC'		=> 'Tabulas `%s` imports',
'restore_VI'		=> 'Skata `%s` imports',
'restore_PR'		=> 'Procedūras `%s` imports',
'restore_FU'		=> 'Funkcijas `%s` imports',
'restore_EV'		=> 'Notikuma `%s` imports',
'restore_TR'		=> 'Trigera `%s` imports',
'restore_keys'		=> 'Indeksu atjaunošana',
'restore_end'		=> 'Datu bāze `%s` veiksmīgi atgūta no rezerves kopijas.',
'stop_1'			=> 'Lietotājs pārtrauca izpildi', 
'stop_2'			=> 'Lietotājs pārtrauca izpildi',
'stop_3'			=> 'Izpilde ir pārtraukta pēc taimera',
'stop_4'			=> 'Izpilde ir pārtraukta pēc taimauta',
'stop_5'			=> 'Izpilde ir pārtraukta kļūdas dēļ',
'job_done'			=> 'Uzdevums veiksmīgi izpildīts',
'file_size'			=> 'Faila izmērs',
'job_time'			=> 'Patērētais laiks',
'seconds'			=> 'sek.',
'job_freeze'		=> 'Process netika atjaunots vairāk par 30 sekundēm. Nospiediet Turpināt',
'stop_job'			=> 'Pārtraukuma pieprasījums',

// JS ieraksti
'js' => array(

	// Tabu virsraksti
	'backup'		=> 'Datu bāzes eksports',
	'restore'		=> 'Datu bāzes imports',
	'log'			=> 'Rīcības žurnāls',
	'result'		=> 'Izpildes rezultāts',
	'files'			=> 'Rezerves kopijas faili',
	'services'		=> 'Servisi',
	'options'		=> 'Opcijas',

	// Tabulu virsraksti
	'dt'			=> 'Datums un laiks',
	'action'		=> 'Rīcība',
	'db'			=> 'Datu bāze',
	'type'			=> 'Tips',
	'tab'			=> 'Tab.',
	'records'		=> 'Ieraksti',
	'size'			=> 'Izmērs',
	'comment'		=> 'Komentārs',
	
	// Statusi
	'load'			=> 'Lejuplāde',
	'run'			=> 'Izpilde...',
	'sdb'			=> 'Datu bāzes izveidošana',
	'sc'			=> 'Savienojuma saglabāšana',
	'sj'			=> 'Uzdevuma saglabāšana',
	'so'			=> 'Opciju saglabāšana',

	// Paziņojumi
	'pro'			=> 'Šī opcija ir pieejama tikai Pro-versijā',
	'err_fopen'		=> 'Nevaru atvērt failu',
	'err_sxd2'		=> 'Faila satura apskats ir pieejams tikai failiem, kas ir izveidoti ar Sypex Dumper 2',
	'err_empty_db'	=> 'Datu bāze ir tukša',
	'fdc'			=> 'Vai jūs tiešām vēlaties izdzēst šo failu?',
	'ddc'			=> 'Vai jūs tiešām vēlaties izdzēst šo datu bāzi?',
	'fic'			=> 'Vai jūs tiešām vēlaties importēt šo failu?',

	// Failu izmēri
	'sizes'			=> array('B', 'KB', 'MB', 'GB'),
)
);
?>