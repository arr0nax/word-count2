<?php
    class RepeatCounter {
        public $sentence;
        public $sentence_array;
        public $word;
        public $original_sentence;

        function __construct($sentence, $word = null)
        {
            $this->sentence = $sentence;
            $this->word = $word;
            $this->original_sentence = $sentence;
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
            $special_characters = ['~','!','@','#','$','%','^','&','*','(',')','_','+','-','=','{','}','|','[',']',':',';','"',"'",'<','>','?',',','.','/','`'];
            $this->sentence = str_replace($special_characters, '', $this->sentence);
            $this->word = str_replace($special_characters, '', $this->word);
        }

        function remove_word_spaces()
        {
            $this->word = str_replace(' ', '', $this->word);
        }

        function all_to_lowercase()
        {
            $this->word = strtolower($this->word);
            $this->sentence = strtolower($this->sentence);
        }

        function count()
        {
            $this->remove_special_chars();
            $this->remove_word_spaces();
            $this->all_to_lowercase();
            $this->parse_sentence();
            return $this->count_words();
        }

    }


 ?>
