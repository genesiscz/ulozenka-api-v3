<?php
/**
 * Created by PhpStorm.
 * User: benke
 * Date: 12.6.17
 * Time: 17:19
 */

namespace UlozenkaLib\APIv3\Model\TransportService;


use UlozenkaLib\APIv3\Enum\Attributes\LinkAttr;
use UlozenkaLib\APIv3\Model\Link;

class TransportService
{
	/** @var Link[] */
	protected $links;

	private $id;
	private $name;
	private $description;
	private $alias;
	private $active;
	private $transport;
	private $use_destination_branches;
	private $requirements;

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
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
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

	/**
	 * @return mixed
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * @param mixed $active
	 */
	public function setActive($active)
	{
		$this->active = $active;
	}

	/**
	 * @return Transport
	 */
	public function getTransport()
	{
		return $this->transport;
	}

	/**
	 * @param Transport $transport
	 */
	public function setTransport(Transport $transport)
	{
		$this->transport = $transport;
	}

	/**
	 * @return mixed
	 */
	public function getUseDestinationBranches()
	{
		return $this->use_destination_branches;
	}

	/**
	 * @param mixed $use_destination_branches
	 */
	public function setUseDestinationBranches($use_destination_branches)
	{
		$this->use_destination_branches = $use_destination_branches;
	}

	/**
	 * @return Requirements
	 */
	public function getRequirements()
	{
		return $this->requirements;
	}

	/**
	 * @param Requirements $requirements
	 */
	public function setRequirements(Requirements $requirements)
	{
		$this->requirements = $requirements;
	}

	/**
	 * @return Link[]
	 */
	public function getLinks()
	{
		return $this->links;
	}

	/**
	 *
	 * @return Link|null
	 */
	public function getLogoLink()
	{
		foreach ($this->links as $link) {
			if ($link->getResourceName() === LinkAttr::RESOURCE_LOGO) {
				return $link;
			}
		}
		return null;
	}

	/**
	 * @param Link[] $links
	 */
	public function setLinks($links)
	{
		$this->links = $links;
	}
}