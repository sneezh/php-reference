<?php
declare(strict_types=1);

namespace App\References\FulltextSearch;

final class HashSearch
{
    /**
     * Text search based on hash algorithm
     *
     * @param string $needle
     * @param string $haystack
     *
     * @return bool
     */
    public static function contains(string $needle, string $haystack): bool
    {
        $haystackLength = mb_strlen($haystack);

        if ($haystackLength === 0) {
            return false;
        }

        $needleLength = mb_strlen($needle);
        $needleHash = md5($needle);

        for ($i = 0; $i < $haystackLength; $i++) {
            $currentHash = md5(mb_substr($haystack, $i, $needleLength));

            if ($currentHash === $needleHash) {
                return true;
            }
        }

        return false;
    }
}
