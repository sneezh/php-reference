<?php
declare(strict_types=1);

namespace FulltextSearch;

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
    public function included(string $needle, string $haystack): bool
    {
        $needleLength = mb_strlen($needle);
        $needleHash = md5($needle);
        $haystackLength = mb_strlen($haystack);

        for ($i = 0; $i < $haystackLength; $i++) {
            $currentHash = md5(mb_substr($haystack, $i, $needleLength));

            if ($currentHash === $needleHash) {
                return true;
            }
        }

        return false;
    }
}
