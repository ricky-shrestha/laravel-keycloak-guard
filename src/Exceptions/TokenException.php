<?php
namespace KeycloakGuard\Exceptions;

class TokenException extends KeycloakGuardException
{
  return response(['status' => 401]);
}
