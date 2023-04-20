<?php
function generatePassword($length)
{
    $lowercaseAlphabet = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChar = '!@#$%^&*()_-+=;:<>/?';

    $alphanumericChars = $lowercaseAlphabet . $uppercaseAlphabet . $numbers . $specialChar;

    $generatedPassword = "";

    for ($i = 0; $i < $length; $i++) {

        $newRandomChar = $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

        $generatedPassword .= $newRandomChar;
    }

    return $generatedPassword;

}