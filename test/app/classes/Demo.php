<?php

namespace App\classes;

class Demo
{
    public function wordCharCount($data)
    {
        $stringLenght = strlen($data['enter_string']);
//        echo $stringLenght;
       $wordLength = str_word_count($data['enter_string']);
//       echo $wordLength;
        $result = [
            'string_lenght'=> $stringLenght,
            'word_length'=> $wordLength,
        ];
        return $result;
    }
}