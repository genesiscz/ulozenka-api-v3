<?php
/**
 * Created by PhpStorm.
 * User: benke
 * Date: 12.6.17
 * Time: 17:35
 */

namespace UlozenkaLib\APIv3\Model\TransportService;


class Transport
{
	private $id;
	private $name;
	private $alias;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getAlias()
	{
		return $this->alias;
	}

	/**
	 * @param mixed $alias
	 */
	public function setAlias($alias)
	{
		$this->alias = $alias;
	}
}