<?php

namespace Serwisant\SerwisantApi\Types\SchemaInternal;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class SecretToken extends Types\Type
{
  /**
   * @var string
  */
  public $oauthClientId;

  /**
   * @var string
  */
  public $oauthClientSecret;

  /**
   * @var string
  */
  public $oauthScopes;

  /**
   * @var SecretTokenSubject
  */
  public $subjectType;

  /**
   * @var string
  */
  public $token;

  protected function schemaNamespace()
  {
    return 'SchemaInternal';
  }
}