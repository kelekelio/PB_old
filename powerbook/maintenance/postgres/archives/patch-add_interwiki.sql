DROP FUNCTION IF EXISTS add_interwiki(TEXT,INT,CHARACTER) CASCADE;
CREATE OR REPLACE FUNCTION "add_interwiki" (TEXT,INT,SMALLINT) RETURNS INT LANGUAGE SQL AS
$mw$
  INSERT INTO interwiki (iw_prefix, iw_url, iw_local) VALUES ($1,$2,$3);
  SELECT 1;
$mw$;

DROP FUNCTION IF EXISTS add_interwiki(TEXT,INT,CHARACTER) CASCADE;
CREATE OR REPLACE FUNCTION "add_interwiki" (TEXT,INT,SMALLINT) RETURNS INT LANGUAGE SQL AS
$mw$
  INSERT INTO interwiki (iw_prefix, iw_url, iw_local) VALUES ($1,$2,$3);
  SELECT 1;
$mw$;

