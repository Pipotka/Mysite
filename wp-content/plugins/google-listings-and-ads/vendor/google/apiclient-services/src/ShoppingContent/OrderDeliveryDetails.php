<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class OrderDeliveryDetails extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var OrderAddress
   */
  public $address;
  protected $addressType = OrderAddress::class;
  protected $addressDataType = '';
  /**
   * @var string
   */
  public $phoneNumber;

  /**
   * @param OrderAddress
   */
  public function setAddress(OrderAddress $address)
  {
    $this->address = $address;
  }
  /**
   * @return OrderAddress
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * @param string
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrderDeliveryDetails::class, 'Google_Service_ShoppingContent_OrderDeliveryDetails');
