<?php
/**
 * Created by PhpStorm.
 * User: benke
 * Date: 12.6.17
 * Time: 17:37
 */

namespace UlozenkaLib\APIv3\Model\TransportService;


class Requirements
{
	private $company_name;
	private $customer_name;
	private $customer_surname;
	private $customer_phone;
	private $customer_email;
	private $address_street;
	private $address_town;
	private $address_zip;
	private $address_state;
	private $cash_on_delivery;
	private $stated_price;
	private $insurance;
	private $currency;
	private $destination_branch_id;
	private $variable;
	private $password;
	private $parcel_count;
	private $note;
	private $weight;
	private $allow_card_payment;
	private $require_full_age;

	/**
	 * @return mixed
	 */
	public function getCompanyName()
	{
		return $this->company_name;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCompanyName($state)
	{
		$this->company_name = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCustomerName()
	{
		return $this->customer_name;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCustomerName($state)
	{
		$this->customer_name = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCustomerSurname()
	{
		return $this->customer_surname;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCustomerSurname($state)
	{
		$this->customer_surname = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCustomerPhone()
	{
		return $this->customer_phone;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCustomerPhone($state)
	{
		$this->customer_phone = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCustomerEmail()
	{
		return $this->customer_email;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCustomerEmail($state)
	{
		$this->customer_email = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressStreet()
	{
		return $this->address_street;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setAddressStreet($state)
	{
		$this->address_street = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressTown()
	{
		return $this->address_town;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setAddressTown($state)
	{
		$this->address_town = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressZip()
	{
		return $this->address_zip;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setAddressZip($state)
	{
		$this->address_zip = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressState()
	{
		return $this->address_state;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setAddressState($state)
	{
		$this->address_state = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCashOnDelivery()
	{
		return $this->cash_on_delivery;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCashOnDelivery($state)
	{
		$this->cash_on_delivery = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatedPrice()
	{
		return $this->stated_price;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setStatedPrice($state)
	{
		$this->stated_price = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getInsurance()
	{
		return $this->insurance;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setInsurance($state)
	{
		$this->insurance = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setCurrency($state)
	{
		$this->currency = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDestinationBranchId()
	{
		return $this->destination_branch_id;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setDestinationBranchId($state)
	{
		$this->destination_branch_id = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVariable()
	{
		return $this->variable;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setVariable($state)
	{
		$this->variable = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setPassword($state)
	{
		$this->password = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getParcelCount()
	{
		return $this->parcel_count;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setParcelCount($state)
	{
		$this->parcel_count = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setNote($state)
	{
		$this->note = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setWeight($state)
	{
		$this->weight = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAllowCardPayment()
	{
		return $this->allow_card_payment;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setAllowCardPayment($state)
	{
		$this->allow_card_payment = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRequireFullAge()
	{
		return $this->require_full_age;
	}

	/**
	 * @param mixed $state
	 * @return Requirements
	 */
	public function setRequireFullAge($state)
	{
		$this->require_full_age = $state;
		return $this;
	}
}