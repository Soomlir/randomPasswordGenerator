<?php
function generatePassword($length, $useUpper, $useLower, $useNumbers, $useSymbols)
{
  $charset = '';
  $password = '';

  if ($useUpper) $charset .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  if ($useLower) $charset .= 'abcdefghijklmnopqrstuvwxyz';
  if ($useNumbers) $charset .= '0123456789';
  if ($useSymbols) $charset .= '!@#$%^&*()_+-=[]{}|;:,.<>?';

  for ($i = 0; $i < $length; $i++) {
    $randomIndex = random_int(0, strlen($charset) - 1);
    $password .= $charset[$randomIndex];
  }

  return $password;
}
