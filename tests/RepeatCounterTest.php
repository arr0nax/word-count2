<?php
    require_once 'src/RepeatCounter.php';

    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_parse_function() {
            $input = 'the quick brown brown fox';
            $test_count = new RepeatCounter($input);

            $result = $test_count->parse_sentence();

            $this->assertEquals(['0'=>'the','1'=>'quick','2'=>'brown','3'=>'brown','4'=>'fox'], $result);
        }

        function test_count_function(){
            $input_sentence = 'the quick brown brown fox';
            $input_word = 'brown';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_ignore_special_characters() {
            $input_sentence = 'the qui<ck brown brown fox';
            $input_word = 'brown_';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $test_count->remove_special_chars();
            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_remove_word_spaces() {
            $input_sentence = 'the qui<ck brown brown fox';
            $input_word = 'brown_ ';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $test_count->remove_special_chars();
            $test_count->remove_word_spaces();
            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_no_matches() {
            $input_sentence = 'the qui<ck brown brown fox';
            $input_word = 'red';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $test_count->remove_special_chars();
            $test_count->remove_word_spaces();
            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(0, $result);
        }

        function test_ignore_capitalization()
        {
            $input_sentence = 'the qui<ck Brown browN fox';
            $input_word = 'brOwn';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $test_count->remove_special_chars();
            $test_count->remove_word_spaces();
            $test_count->all_to_lowercase();
            $test_count->parse_sentence();
            $result = $test_count->count_words();

            $this->assertEquals(2, $result);
        }

        function test_combine_functions()
        {
            $input_sentence = 'the qui<ck Br"own browN fox';
            $input_word = '.brOwn ';
            $test_count = new RepeatCounter($input_sentence, $input_word);

            $result = $test_count->count();

            $this->assertEquals(2, $result);
        }
    }



?>
