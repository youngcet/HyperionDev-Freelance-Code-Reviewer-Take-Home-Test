<?php

    declare(strict_types=1);

    require ('option_1.php');

    use PHPUnit\Framework\Attributes\TestWith;
    use PHPUnit\Framework\TestCase;

    final class SayNumberTest extends TestCase
    {
        #[TestWith(['zero', 0])]
        #[TestWith(['eleven', 11])]
        #[TestWith(['one million, fourty three thousand, two hundred and eighty three', 1043283])]
        #[TestWith(['ninety trillion, three hundred and seventy six billion, ten thousand and twelve', 90376000010012])]
        public function testSayNumber(String $expected, int $num)
        {
            $this->assertEquals($expected, sayNumber ($num));
        }
    }

?>