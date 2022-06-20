<?php

if ( function_exists ( 'pll_register_string' ) ){
    pll_register_string( 'hnry', 'Hiilineutraaleja ja resurssiviisaita ratkaisuja yritysalueille', 'header');
    pll_register_string( 'hnry', 'Ladattava aineisto', 'acf-blocks' );
    pll_register_string( 'hnry', 'Linkit', 'acf-blocks' );
    pll_register_string( 'hnry', 'Ratkaisut', 'acf-blocks' );
    pll_register_string( 'hnry', 'Voi harmi!', '404' );
    pll_register_string( 'hnry', 'Hakemaasi sivua ei löytynyt!', '404' );
    pll_register_string( 'hnry', 'Takaisin ylös', 'footer' );
    pll_register_string( 'hnry', 'Saavutettavuusseloste', 'footer' );
    pll_register_string( 'hnry', 'Lue lisää', 'search' );
    pll_register_string( 'hnry', 'Palaa takaisin etusivulle', 'footer' );
    pll_register_string( 'hnry', 'Näytä artikkelit: ', 'acf-blocks');
    pll_register_string( 'hnry', 'Syötä hakusana haettaville ratkaisuille', 'search');
    pll_register_string( 'hnry', 'Hae ratkaisuja', 'search');
    pll_register_string( 'hnry', 'Valitse kieli', 'header');
    pll_register_string( 'hnry', 'Hyppää sisältöön', 'header');
    pll_register_string( 'hnry', 'Avaa/sulje mobiili navigaatio linkit', 'header');
    pll_register_string( 'hnry', 'Kaikki', 'acf-blocks' );
}
/*
pll_register_string( $name, $string, $group, $multiline );
‘$name’ => (required) name provided for sorting convenience (ex: ‘myplugin’)
‘$string’ => (required) the string to translate
‘$group’ => (optional) the group in which the string is registered, defaults to ‘polylang’
‘$multiline’ => (optional) if set to true, the translation text field will be multiline, defaults to false*/

/* return translated string*/
function hnry_t($text) {
	if (function_exists('pll__')) {
		return pll__($text);
	}

	return $text;
}

function hnry_get_page_title() {
	$desc = hnry_t('Hiilineutraaleja ja resurssiviisaita ratkaisuja yritysalueille');
	return get_bloginfo('name') . ' – ' . $desc;
}