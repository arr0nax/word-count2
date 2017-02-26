<?php
    require_once 'src/Count.php';

    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_parse_function() {
            $input = 'the quick brown brown fox';
            $test_count = new Count($input);

            $result = $test_count->parse_sentence();

            $this->assertEquals(['0'=>'the','1'=>'quick','2'=>'brown','3'=>'brown','4'=>'fox'], $result);
        }

        function test_count_function(){
            $input_sentence = 'the quick brown brown fox';
            $input_word = 'brown';
            $test_count = new Count($input_sentence, $input_word);

            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_ignore_special_characters() {
            $input_sentence = 'the qui<ck brown brown fox';
            $input_word = 'brown_';
            $test_count = new Count($input_sentence, $input_word);

            $test_count->remove_special_chars();
            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_remove_word_spaces() {
            
        }
    }



?>
