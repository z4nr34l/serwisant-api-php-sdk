<?php

namespace Serwisant\SerwisantApi\Types\SchemaPublic;

use Serwisant\SerwisantApi\Types;

class OrderTimeStatus extends Types\Enum
{
  /**
   * Inside agreed timespan
  */
  const OK = 'OK';

  /**
   * Approaching to timespan border
  */
  const WARNING = 'WARNING';

  /**
   * Out of time
  */
  const DELAYED = 'DELAYED';

}