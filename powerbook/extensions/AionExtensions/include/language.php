<?

/**
 * Gives back the language used.
 *
 * @return string
 */
  
function lang()
{
    global $wgLang;             // $wgLang - global language variable
    $code = $wgLang->getCode();	// get language code, based on preferences

    $language = strtoupper($code);
    // EN = US, EN-GB = EN
    if ('EN' === $language) {
        $language = 'US';
    }

    if (!in_array($language, ['EN', 'US', 'DE', 'FR', 'ES', 'IT', 'PL', 'TR', 'KO'])) {
        $language = 'EN';
    }

    return $language;
}

/**
 * @param string $name
 * @param string $language
 * @return string false on failure
 */
