<?php

    echo ucfirst (sayNumber (0)).".\n";
    echo ucfirst (sayNumber (11)).".\n";
    echo ucfirst (sayNumber (1043283)).".\n";
    echo ucfirst (sayNumber (90376000010012)).".\n";

    function sayNumber ($num)
    {
        $conjunction = ' and ';
        $separator   = ', ';
        $word = '';
        $whitespace  = ' ';

        $glossary  = [
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        ];

        if (! is_numeric ($num)) 
        {
            trigger_error ('Only accepts numbers', E_USER_ERROR);
            return false;
        }

        if ($num < 0 || $num > 999999999999999) 
        {
            trigger_error ('Only accepts numbers between 0 to 999999999999999', E_USER_ERROR);
            return false;
        }

        if ($num < 21)
        {
            $word = $glossary[$num];
        }
        elseif ($num < 100)
        {
            $tens = ((int) ($num / 10)) * 10;
            $units = $num % 10;
            $word = $glossary[$tens];
            if ($units) 
            {
                $word .= $whitespace . $glossary[$units];
            }
        }
        elseif ($num < 1000)
        {
            $hundreds = $num / 100;
            $remainder = $num % 100;
            $word = $glossary[$hundreds] . ' ' . $glossary[100];
            if ($remainder) {
                $word .= $conjunction . sayNumber ($remainder);
            }
        }
        else 
        {
            $baseUnit = pow (1000, floor (log ($num, 1000)));
            $numBaseUnits = (int) ($num / $baseUnit);
            $remainder = $num % $baseUnit;
            $word = sayNumber ($numBaseUnits) . ' ' . $glossary[$baseUnit];
            if ($remainder) {
                $word .= ($remainder < 100) ? $conjunction : $separator;
                $word .= sayNumber ($remainder);
            }
        }

        return $word;
    }
?>