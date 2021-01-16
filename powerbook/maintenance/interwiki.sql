-- Based more or less on the public interwiki map from MeatballWiki
-- Default interwiki prefixes...

REPLACE INTO /*$wgDBprefix*/interwiki (iw_prefix,iw_url,iw_local,iw_api) VALUES
('acronym','http://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=$1',0,''),
('advogato','http://www.advogato.org/$1',0,''),
('arxiv','http://www.arxiv.org/abs/$1',0,''),
('c2find','http://c2.com/cgi/wiki?FindPage&value=$1',0,''),
('cache','http://www.google.com/search?q=cache:$1',0,''),
('commons','https://commons.wikimedia.org/wiki/$1',0,'https://commons.wikimedia.org/w/api.php'),
('dictionary','http://www.dict.org/bin/Dict?Database=*&Form=Dict1&Strategy=*&Query=$1',0,''),
('doi','http://dx.doi.org/$1',0,''),
('drumcorpswiki','http://www.drumcorpswiki.com/$1',0,'http://drumcorpswiki.com/api.php'),
('dwjwiki','http://www.suberic.net/cgi-bin/dwj/wiki.cgi?$1',0,''),
('elibre','http://enciclopedia.us.es/index.php/$1',0,'http://enciclopedia.us.es/api.php'),
('emacswiki','http://www.emacswiki.org/cgi-bin/wiki.pl?$1',0,''),
('foldoc','http://foldoc.org/?$1',0,''),
('foxwiki','http://fox.wikis.com/wc.dll?Wiki~$1',0,''),
('freebsdman','http://www.FreeBSD.org/cgi/man.cgi?apropos=1&query=$1',0,''),
('gentoo-wiki','http://gentoo-wiki.com/$1',0,''),
('google','http://www.google.com/search?q=$1',0,''),
('googlegroups','http://groups.google.com/groups?q=$1',0,''),
('hammondwiki','http://www.dairiki.org/HammondWiki/$1',0,''),
('hrwiki','http://www.hrwiki.org/wiki/$1',0,'http://www.hrwiki.org/w/api.php'),
('imdb','http://www.imdb.com/find?q=$1&tt=on',0,''),
('kmwiki','http://kmwiki.wikispaces.com/$1',0,''),
('linuxwiki','http://linuxwiki.de/$1',0,''),
('lojban','http://www.lojban.org/tiki/tiki-index.php?page=$1',0,''),
('lqwiki','http://wiki.linuxquestions.org/wiki/$1',0,''),
('meatball','http://www.usemod.com/cgi-bin/mb.pl?$1',0,''),
('mediawikiwiki','https://www.mediawiki.org/wiki/$1',0,'https://www.mediawiki.org/w/api.php'),
('memoryalpha','http://en.memory-alpha.org/wiki/$1',0,'http://en.memory-alpha.org/api.php'),
('metawiki','http://sunir.org/apps/meta.pl?$1',0,''),
('metawikimedia','https://meta.wikimedia.org/wiki/$1',0,'https://meta.wikimedia.org/w/api.php'),
('mozillawiki','http://wiki.mozilla.org/$1',0,'https://wiki.mozilla.org/api.php'),
('mw','https://www.mediawiki.org/wiki/$1',0,'https://www.mediawiki.org/w/api.php'),
('oeis','http://oeis.org/$1',0,''),
('openwiki','http://openwiki.com/ow.asp?$1',0,''),
('pmid', 'https://www.ncbi.nlm.nih.gov/pubmed/$1?dopt=Abstract',0,''),
('pythoninfo','http://wiki.python.org/moin/$1',0,''),
('rfc','https://tools.ietf.org/html/rfc$1',0,''),
('s23wiki','http://s23.org/wiki/$1',0,'http://s23.org/w/api.php'),
('seattlewireless','http://seattlewireless.net/$1',0,''),
('senseislibrary','http://senseis.xmp.net/?$1',0,''),
('shoutwiki','http://www.shoutwiki.com/wiki/$1',0,'http://www.shoutwiki.com/w/api.php'),
('squeak','http://wiki.squeak.org/squeak/$1',0,''),
('tmbw','http://www.tmbw.net/wiki/$1',0,'http://tmbw.net/wiki/api.php'),
('tmnet','http://www.technomanifestos.net/?$1',0,''),
('theopedia','http://www.theopedia.com/$1',0,''),
('twiki','http://twiki.org/cgi-bin/view/$1',0,''),
('uncyclopedia','http://en.uncyclopedia.co/wiki/$1',0,'http://en.uncyclopedia.co/w/api.php'),
('unreal','http://wiki.beyondunreal.com/$1',0,'http://wiki.beyondunreal.com/w/api.php'),
('usemod','http://www.usemod.com/cgi-bin/wiki.pl?$1',0,''),
('wiki','http://c2.com/cgi/wiki?$1',0,''),
('wikia','http://www.wikia.com/wiki/$1',0,''),
('wikibooks','https://en.wikibooks.org/wiki/$1',0,'https://en.wikibooks.org/w/api.php'),
('wikidata','https://www.wikidata.org/wiki/$1',0,'https://www.wikidata.org/w/api.php'),
('wikif1','http://www.wikif1.org/$1',0,''),
('wikihow','http://www.wikihow.com/$1',0,'http://www.wikihow.com/api.php'),
('wikinfo','http://wikinfo.co/English/index.php/$1',0,''),
('wikimedia','https://wikimediafoundation.org/wiki/$1',0,'https://wikimediafoundation.org/w/api.php'),
('wikinews','https://en.wikinews.org/wiki/$1',0,'https://en.wikinews.org/w/api.php'),
('wikipedia','https://en.wikipedia.org/wiki/$1',0,'https://en.wikipedia.org/w/api.php'),
('wikiquote','https://en.wikiquote.org/wiki/$1',0,'https://en.wikiquote.org/w/api.php'),
('wikisource','https://wikisource.org/wiki/$1',0,'https://wikisource.org/w/api.php'),
('wikispecies','https://species.wikimedia.org/wiki/$1',0,'https://species.wikimedia.org/w/api.php'),
('wikiversity','https://en.wikiversity.org/wiki/$1',0,'https://en.wikiversity.org/w/api.php'),
('wikivoyage','https://en.wikivoyage.org/wiki/$1',0,'https://en.wikivoyage.org/w/api.php'),
('wikt','https://en.wiktionary.org/wiki/$1',0,'https://en.wiktionary.org/w/api.php'),
('wiktionary','https://en.wiktionary.org/wiki/$1',0,'https://en.wiktionary.org/w/api.php')
;
