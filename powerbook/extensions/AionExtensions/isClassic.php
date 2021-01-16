<?php

function isClassic() {
    $classic = $_GET['aionclassic'];
    global $wgRequest;

    $ClassicCookie = $wgRequest->getCookie( 'AionClassicCookie' );

    if ($classic == '1' || $classic == '0') {
        // value from url
    } else {
        //value from cookie
        $classic = $wgRequest->getCookie( 'AionClassicCookie' );
    }

    return $classic;

}