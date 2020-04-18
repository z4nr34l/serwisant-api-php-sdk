<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi\Types;

class RepairCosts extends Types\Obj
{
  /**
   * @var float
  */
  public $estimatedGross;

  /**
   * @var float
   * Net price given in repair diagnosis, this is a price customer must confirm. If null, diagnosis wan't performed,
no price given durring diagnosis or sepatate offers for this repair exists - see offer field

  */
  public $estimatedNet;

  /**
   * @var float
  */
  public $finalGross;

  /**
   * @var float
   * Net price to be paid for repair
  */
  public $finalNet;

  /**
   * @var float
   * Full price (incl. tax) to be paid for whole service, decucted by advance, incremented by other possibe costs like shipping, etc.
  */
  public $payment;

  /**
   * @var float
  */
  public $proposedGross;

  /**
   * @var float
   * Net price proposed durring repair aquisition, nil if nothing was proposed, it's not a real price, rather a guess
  */
  public $proposedNet;

}