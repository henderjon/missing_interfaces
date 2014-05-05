<?php

namespace MI;

interface PDOInterface {

	/**
	 * http://us1.php.net/manual/en/pdo.begintransaction.php
	 */
	public function beginTransaction();

	/**
	 * http://us1.php.net/manual/en/pdo.commit.php
	 */
	public function commit();

	/**
	 * http://us1.php.net/manual/en/pdo.construct.php
	 */
	public function __construct ($dsn, $username = "", $password = "", array $driver_options = array());

	/**
	 * http://us1.php.net/manual/en/pdo.errorCode.php
	 */
	public function errorCode();

	/**
	 * http://us1.php.net/manual/en/pdo.errorInfo.php
	 */
	public function errorInfo();

	/**
	 * http://us1.php.net/manual/en/pdo.exec.php
	 */
	public function exec($statement);

	/**
	 * http://us1.php.net/manual/en/pdo.getAttribute.php
	 */
	public function getAttribute($attribute);

	/**
	 * http://us1.php.net/manual/en/pdo.getAvailableDrivers.php
	 */
	public static function getAvailableDrivers();

	/**
	 * http://us1.php.net/manual/en/pdo.inTransaction.php
	 */
	public function inTransaction();

	/**
	 * http://us1.php.net/manual/en/pdo.lastInsertId.php
	 */
	public function lastInsertId($name = NULL);

	/**
	 * http://us1.php.net/manual/en/pdo.prepare.php
	 */
	public function prepare($statement, array $driver_options = array());

	/**
	 * http://us1.php.net/manual/en/pdo.query.php
	 */
	public function query($statement);

	/**
	 * http://us1.php.net/manual/en/pdo.quote.php
	 */
	public function quote($string, $parameter_type = \PDO::PARAM_STR);

	/**
	 * http://us1.php.net/manual/en/pdo.rollBack.php
	 */
	public function rollBack();

	/**
	 * http://us1.php.net/manual/en/pdo.setAttribute.php
	 */
	public function setAttribute($attribute, $value);

}