<?php
/** Mirandese (Mirandés)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Alchimista
 * @author Cecílio
 * @author MCruz
 * @author Malafaya
 * @author Romaine
 * @author Urhixidur
 */

$fallback = 'pt';

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Cumbersa',
	NS_USER             => 'Outelizador',
	NS_USER_TALK        => 'Cumbersa_outelizador',
	NS_PROJECT_TALK     => '$1_cumbersa',
	NS_FILE             => 'Fexeiro',
	NS_FILE_TALK        => 'Cumbersa_fexeiro',
	NS_MEDIAWIKI        => 'Biqui',
	NS_MEDIAWIKI_TALK   => 'Cumbersa_Biqui',
	NS_TEMPLATE         => 'Modelo',
	NS_TEMPLATE_TALK    => 'Cumbersa_Modelo',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Cumbersa_ajuda',
	NS_CATEGORY         => 'Catadorie',
	NS_CATEGORY_TALK    => 'Cumbersa_catadorie',
];

$namespaceAliases = [
	'Especial' => NS_SPECIAL,
	'Discussão' => NS_TALK,
	'Usuário' => NS_USER,
	'Usuário_Discussão' => NS_USER_TALK,
	'$1_Discussão' => NS_PROJECT_TALK,
	'Ficheiro' => NS_FILE,
	'Ficheiro_Discussão' => NS_FILE_TALK,
	'Imagem' => NS_FILE,
	'Imagem_Discussão' => NS_FILE_TALK,
	'MediaWiki_Discussão' => NS_MEDIAWIKI_TALK,
	'Predefinição' => NS_TEMPLATE,
	'Predefinição_Discussão' => NS_TEMPLATE_TALK,
	'Ajuda_Discussão' => NS_HELP_TALK,
	'Categoria' => NS_CATEGORY,
	'Categoria_Discussão' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'CreateAccount'             => [ 'Criar Cuonta' ],
	'Lonelypages'               => [ 'Páiginas Uorfanas' ],
	'Uncategorizedcategories'   => [ 'Catadories sien catadories' ],
	'Uncategorizedimages'       => [ 'Eimaiges sien catadories' ],
	'Userlogin'                 => [ 'Antrar' ],
	'Userlogout'                => [ 'Salir' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#ANCAMINAR', '#REDIRECIONAMENTO', '#REDIRECT' ],
	'img_right'                 => [ '1', 'dreita', 'direita', 'right' ],
	'img_left'                  => [ '1', 'squierda', 'esquerda', 'left' ],
	'img_none'                  => [ '1', 'nanhun', 'nenhum', 'none' ],
	'img_center'                => [ '1', 'centro', 'center', 'centre' ],
	'img_middle'                => [ '1', 'meio', 'middle' ],
	'language'                  => [ '0', '#LHENGUA:', '#IDIOMA:', '#LANGUAGE:' ],
	'filepath'                  => [ '0', 'CAMINOFEXEIRO:', 'CAMINHODOARQUIVO', 'FILEPATH:' ],
	'tag'                       => [ '0', 'eitiqueta', 'tag' ],
	'pagesize'                  => [ '1', 'TAMANHOFEXEIRO', 'TAMANHODAPAGINA', 'TAMANHODAPÁGINA', 'PAGESIZE' ],
	'staticredirect'            => [ '1', '_ANCAMINARSTATICO_', '__REDIRECIONAMENTOESTATICO__', '__REDIRECIONAMENTOESTÁTICO__', '__STATICREDIRECT__' ],
];
