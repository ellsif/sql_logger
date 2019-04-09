<?php
namespace ellsif\sql_access;
use ellsif\sql_manager\SqlManageBase;

class SqlManage extends SqlManageBase
{
	public const CREATE_LOG_TABLE_MYSQL = "Create SQL log table for MySQL";
	public const CREATE_SUMMARY_TABLE_MYSQL = "Create LogSummary table for MySQL";
	public const INSERT_LOG = "Insert log";
	public const INSERT_SUMMARY = "Insert LogSummary";

    public static function getSettings()
    {
        return
array (
  0 => 
  array (
    'name' => 'CREATE_LOG_TABLE_MYSQL',
    'label' => 'Create SQL log table for MySQL',
    'sql' => 'CREATE TABLE IF NOT EXISTS 
SqlLog (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(512),
  label VARCHAR(512),
  sql TEXT NOT NULL,
  params TEXT,
  executionTime INT NOT NULL,
  created DATETIME,
  PRIMARY KEY (id)
)',
    'note' => '',
  ),
  1 => 
  array (
    'name' => 'CREATE_SUMMARY_TABLE_MYSQL',
    'label' => 'Create LogSummary table for MySQL',
    'sql' => 'CREATE TABLE IF NOT EXISTS 
SqlLogSummary (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(512),
  label VARCHAR(512),
  slowestParams TEXT,
  maxExecutionTime INT NOT NULL,
  minExecutionTime INT NOT NULL,
  created DATETIME,
  updated DATETIME,
  PRIMARY KEY (id)
)',
    'note' => '',
  ),
  2 => 
  array (
    'name' => 'INSERT_LOG',
    'label' => 'Insert log',
    'sql' => 'INSERT INTO Log (name, label, sql, params, executionTime, created) VALUES (?,?,?,?,?,NOW())',
    'note' => '',
  ),
  3 => 
  array (
    'name' => 'INSERT_SUMMARY',
    'label' => 'Insert LogSummary',
    'sql' => 'INSERT INTO SqlLogSummary
(name, label, slowestParams, maxExecutionTime, minExecutionTime, created, updated)
VALUES
(?, ?, ?, ?, ?, NOW(), NOW())',
    'note' => '',
  ),
);
    }
}