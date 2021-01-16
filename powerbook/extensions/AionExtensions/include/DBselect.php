<?php
/**
 * @author Grzegorz Nowakowski
 */

global $aionDB, $aionDB_classic;

if (isClassic() == "1") {
    $db = $aionDB_classic;
}else {
    $db = $aionDB;
}

