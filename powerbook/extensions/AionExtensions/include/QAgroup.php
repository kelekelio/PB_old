<?

global $wgUser;
$groups = $wgUser->getGroups();

if (in_array("QA", $groups)) {
	$QAgroups = '_QA';
}else {
	$QAgroups = '';
}