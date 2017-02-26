<?php
    class Count {
        public $sentence;
        public $sentence_array;
        public $word;

        function __construct($sentence, $word = null)
        {
            $this->sentence = $sentence;
            $this->word = $word;
        }

        function parse_sentence()
        {
            $this->sentence_array = explode(' ',$this->sentence);
            return $this->sentence_array;
        }

        function count_words()
        {
            $word_count = 0;
            foreach($this->sentence_array as $word2)
            {
                if($word2 == $this->word)
                {
                    ++$word_count;
                }
            }
            return $word_count;
        }

        function remove_special_chars()
        {
            
        }
    }


 ?>
