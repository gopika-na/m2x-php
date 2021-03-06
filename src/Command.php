<?php

namespace Att\M2X;

use Att\M2X\M2X;

/**
 * Wrapper for {@link https://m2x.att.com/developer/documentation/v2/commands M2X Commands} API
 */
class Command extends Resource {

/**
 * REST path of the resource
 *
 * @var string
 */
  public static $path = '/commands';

/**
 * The Device resource properties
 *
 * @var array
 */
  protected static $properties = array(
    'name', 'id', 'url', 'sent_at'
  );

/**
 * The resource id for the REST URL
 *
 * @return string Command ID
 */
  public function id() {
    return $this->id;
  }

/**
 * Refresh the Command Info
 *
 */
  public function refresh() {
    $response = $this->client->get($this->path());
    $this->setData($response->json());
  }
}
