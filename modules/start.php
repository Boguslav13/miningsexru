<?php

$Title = [
	'index' => "СексМайнинг",
	'form' => "СексМайнинг Анкета",
	'donate' => "СексМайнинг Помощь",
	'apps' => "СексМайнинг Приложения",
	'privacypolicytermsconditions' => "СексМайнинг Конфиденциальность",
];

$Description = [
	'index' => "СексМайнинг - Биткоин в мире секса",
	'form' => "СексМайнинг - первый шаг",
	'donate' => "СексМайнинг - помощь проекту",
	'apps' => "СексМайнинг - приложения",
	'privacypolicytermsconditions' => "СексМайнинг - условия политики конфиденциальности",
];

$Keywords = [
	'index' => "СексМайнинг Секс Майнинг SEX токен",
	'form' => "СексМайнинг анкета",
	'donate' => "СексМайнинг помощь поддержка",
	'apps' => "СексМайнинг мобильные десктоп приложения",
	'privacypolicytermsconditions' => "SexMining политика конфиденциальности",
];


if( $Title[$requested_page] ) $HTML = str_replace( '<!--title-->' , $Title[$requested_page] , $HTML );
if( $Description[$requested_page] ) $HTML = str_replace( '<!--description-->' , $Description[$requested_page] , $HTML );
if( $Keywords[$requested_page] ) $HTML = str_replace( '<!--keywords-->' , $Keywords[$requested_page] , $HTML );

?>