<?php
    class Count {
        public $sentence;
        public $sentence_array;
        public $word;

        function __construct($sentence)
        {
            $this->sentence = $sentence;
        }

        function parse_sentence()
        {
            $this->sentence_array = explode(' ',$this->sentence);
            return $this->sentence_array;
        }
    }


 ?>
