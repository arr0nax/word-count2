###Specs
#1. Program should accept sentences and parse them in to individual words
    *input: The quick brown brown fox*
    *output: "[the,quick,brown,brown,fox"]*
#2. Program should identify and count the frequency of a selected word
    *input: 'The quick brown brown fox', 'brown'*
    *output: 2*
#3. Program should special characters
    *input: 'The quick quick b'rown fox', 'brown_'*
    *output: 1*
#3. Program should remove special characters
    *input: 'The quick quick brown fox', 'brown '*
    *output: 1*
#4. Program should ignore capitalization
    *input: 'The quick Brown brOwn Fox', 'broWn'*
    *output: 2*
#5. Program should recognize when no words match
    *input: 'The quick brown brown fox', 'red'*
    *output: 0, false, or 'sorry, no matches'*
#6. Program should highlight matched words in the original sentence for clarity
    *input: 'The quick brown brown fox', 'brown'*
    *output: 2, 'The quick BROWN BROWN fox'*
