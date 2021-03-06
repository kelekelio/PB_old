-- Improves indexes for better peformance with large result sets
-- vim: autoindent syn=mysql sts=2 sw=2
-- Replace /*$wgDBprefix*/ with the proper prefix

ALTER TABLE /*$wgDBprefix*/cu_changes
  ADD INDEX cuc_ip_hex_time (cuc_ip_hex,cuc_timestamp),
  ADD INDEX cuc_user_ip_time (cuc_user,cuc_ip,cuc_timestamp),
  ADD INDEX cuc_xff_hex_time (cuc_xff_hex,cuc_timestamp),
  DROP INDEX cuc_ip_hex,
  DROP INDEX cuc_xff_hex,
  DROP INDEX cuc_user;
