<?php
    Class Count {
        public $sentence_array;
        public $word;

        function parse_sentence($sentence)
        {
            $this->sentence_array = explode(' ',$sentence);
            return $this->sentence_array;
        }
    }


 ?>
