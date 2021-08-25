<?php

if (!function_exists('array_diff_recursive')) {
    /**
     * Credit: https://stackoverflow.com/a/29526501/13156571
     * 
     * Returns the difference of the arrays recursively.
     */
    function array_diff_recursive(array $arr1, array $arr2): array
    {
        $outputDiff = [];

        foreach ($arr1 as $key => $value)
        {
            //if the key exists in the second array, recursively call this function 
            //if it is an array, otherwise check if the value is in arr2
            if (array_key_exists($key, $arr2))
            {
                if (is_array($value))
                {
                    $recursiveDiff = array_diff_recursive($value, $arr2[$key]);

                    if (count($recursiveDiff))
                    {
                        $outputDiff[$key] = $recursiveDiff;
                    }
                }
                else if (!in_array($value, $arr2))
                {
                    $outputDiff[$key] = $value;
                }
            }
            //if the key is not in the second array, check if the value is in 
            //the second array (this is a quirk of how array_diff works)
            else if (!in_array($value, $arr2))
            {
                $outputDiff[$key] = $value;
            }
        }

        return $outputDiff;
    }
}

if (!function_exists('possessive')) {
    /**
     * Create the possessive version of a string.
     */
    function possessive(string $string): string
    {
		  return $string.'\''.($string[strlen($string) - 1] !== 's' ? 's' : '');
    }
}
