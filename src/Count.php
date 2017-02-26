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
    }


 ?>
