<?php
require_once './functions.php';

if ($_POST['action'] === 'generate_password') {
  $length = intval($_POST['length'] ?? 10);
  $upperWords = filter_var($_POST['upperWords'], FILTER_VALIDATE_BOOLEAN);
  $lowerWords = filter_var($_POST['lowerWords'], FILTER_VALIDATE_BOOLEAN);
  $numbers = filter_var($_POST['numbers'], FILTER_VALIDATE_BOOLEAN);
  $specSymbols = filter_var($_POST['specSymbols'], FILTER_VALIDATE_BOOLEAN);

  $password = generatePassword($length, $upperWords, $lowerWords, $numbers, $specSymbols);

  echo json_encode([
    'success' => true,
    'password' => $password,
    'length' => $length,
    'used_options' => [
      'upper' => $upperWords,
      'lower' => $lowerWords,
      'numbers' => $numbers,
      'symbols' => $specSymbols
    ]
  ]);
}
