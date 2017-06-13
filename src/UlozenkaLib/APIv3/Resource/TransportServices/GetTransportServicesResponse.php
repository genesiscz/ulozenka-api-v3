<?php
/**
 * Created by PhpStorm.
 * User: benke
 * Date: 13.6.17
 * Time: 9:38
 */

namespace UlozenkaLib\APIv3\Resource\TransportServices;


use UlozenkaLib\APIv3\Enum\TransportService;
use UlozenkaLib\APIv3\Model\BaseResponse;

class GetTransportServicesResponse extends BaseResponse
{
	/**
	 * @return TransportService[]
	 */
	public function getData()
	{
		return $this->data;
	}
}