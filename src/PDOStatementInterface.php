<?php

namespace MI;

interface PDOStatementInterface {

	/**
	 * http://www.php.net/manual/en/pdostatement.bindcolumn.php
	 */
	public function bindColumn ( $column , &$param, $type = "", $maxlen = "", $driverdata = "" );

	/**
	 * http://www.php.net/manual/en/pdostatement.bindparam.php
	 */
	public function bindParam ( $parameter , &$variable, $data_type = \PDO::PARAM_STR, $length = "", $driver_options );

	/**
	 * http://www.php.net/manual/en/pdostatement.bindvalue.php
	 */
	public function bindValue ( $parameter , $value, $data_type = \PDO::PARAM_STR );

	/**
	 * http://www.php.net/manual/en/pdostatement.closecursor.php
	 */
	public function closeCursor ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.columncount.php
	 */
	public function columnCount ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.debugdumpparams.php
	 */
	public function debugDumpParams ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.errorcode.php
	 */
	public function errorCode ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.errorinfo.php
	 */
	public function errorInfo ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.execute.php
	 */
	public function execute ( array $input_parameters = array());

	/**
	 * http://www.php.net/manual/en/pdostatement.fetch.php
	 */
	public function fetch ( $fetch_style = "", $cursor_orientation = \PDO::FETCH_ORI_NEXT, $cursor_offset = 0 );

	/**
	 * http://www.php.net/manual/en/pdostatement.fetchall.php
	 */
	public function fetchAll ( $fetch_style ="", $fetch_argument = "", array $ctor_args = array() );

	/**
	 * http://www.php.net/manual/en/pdostatement.fetchcolumn.php
	 */
	public function fetchColumn ( $column_number = 0);

	/**
	 * http://www.php.net/manual/en/pdostatement.fetchobject.php
	 */
	public function fetchObject ( $class_name = "stdClass", array $ctor_args = array() );

	/**
	 * http://www.php.net/manual/en/pdostatement.getattribute.php
	 */
	public function getAttribute ( $attribute );

	/**
	 * http://www.php.net/manual/en/pdostatement.getcolumnmeta.php
	 */
	public function getColumnMeta ( $column );

	/**
	 * http://www.php.net/manual/en/pdostatement.nextrowset.php
	 */
	public function nextRowset ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.rowcount.php
	 */
	public function rowCount ( );

	/**
	 * http://www.php.net/manual/en/pdostatement.setattribute.php
	 */
	public function setAttribute ( $attribute , $value );

	/**
	 * http://www.php.net/manual/en/pdostatement.setfetchmode.php
	 */
	public function setFetchMode ( $mode );

}