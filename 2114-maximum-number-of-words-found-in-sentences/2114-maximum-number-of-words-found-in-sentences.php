class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $max = 0;
        foreach ($sentences as $sentence) {
            $c= str_word_count($sentence);
            if ($max < $c) $max = $c;
        }
        unset($sentences, $sentence, $c);
        return $max;
    }
}