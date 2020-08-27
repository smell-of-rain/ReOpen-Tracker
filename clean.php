<?php
/*
 * ReopenTracker
 *
 * This is a fork of the OpenTracker project, which impliments PDO driver for SQLite
 * database support and is easily changed to MySQL if that is the preferred database.
 *
 * This application requires PHP5.
 */

// Delete records that have an expire time over 3 days old.
$time = time() - 259200;
$sql_table_user = "DELETE FROM ". 'peers' ." WHERE expire_time < '". $time ."'";
$db_init = new SQLite3("smellofrain.sdb");
$result_table_user = $db_init->exec($sql_table_user);
