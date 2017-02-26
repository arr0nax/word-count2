<?php
    require_once 'src/Count.php';

    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_parse_function() {
            $input = 'the quick brown brown fox';
            $test_count = new Count;

            $result = $test_count->parse_sentence($input);

            $this->assertEquals(['0'=>'the','1'=>'quick','2'=>'brown','3'=>'brown','4'=>'fox'], $result);
        }
    }



?>
