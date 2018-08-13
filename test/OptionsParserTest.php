<?php

class OptionsParserTest extends PHPUnit_Framework_TestCase
{
    public function data()
    {
        /**
         * @see http://www.gnu.org/software/libc/manual/html_node/Example-of-Getopt.html#Example-of-Getopt
         */
        $output['null argument'] = [null, ['a' => false, 'b' => false, 'c' => null, 'd' => null], ''];
//        $output['empty argument'] = ['', ['a' => false, 'b' => false, 'c' => null, 'd' => null], ''];
//        $output['separate boolean flags'] = ['-a -b', ['a' => true, 'b' => true, 'c' => null, 'd' => null], ''];
//        $output['combined boolean flags'] = ['-ab', ['a' => true, 'b' => true, 'c' => null, 'd' => null], ''];
//        $output['separate flag with required argument'] = ['-c foo', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => null], ''];
//        $output['combined flag with required argument'] = ['-cfoo', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => null], ''];
//        $output['flag with optional argument'] = ['-d', ['a' => false, 'b' => false, 'c' => null, 'd' => true], ''];
//        $output['separate flag with optional argument'] = ['-d foo', ['a' => false, 'b' => false, 'c' => null, 'd' => 'foo'], ''];
//        $output['combined flag with optional argument'] = ['-dfoo', ['a' => false, 'b' => false, 'c' => null, 'd' => 'foo'], ''];
//        $output['argument without flag'] = ['arg1', ['a' => false, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument arg1'];
//        $output['boolean flag with argument'] = ['-a arg1', ['a' => true, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument arg1'];
//        $output['flag with two arguments'] = ['-c foo arg1', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => null], 'Non-option argument arg1'];
//        $output['flag after special argument'] = ['-a -- -b', ['a' => true, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument -b'];
//        $output['incomplete flag'] = ['-a -', ['a' => true, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument -'];
//        $output['long boolean flags'] = ['--alpha --beta', ['a' => true, 'b' => true, 'c' => null, 'd' => null], ''];
//        $output['separate long flag with required argument'] = ['--charlie foo', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => null], ''];
//        $output['combined long flag with required argument'] = ['-charliefoo', ['a' => false, 'b' => false, 'c' => null, 'd' => null], ''];
//        $output['long flag with optional argument'] = ['--delta', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => true], ''];
//        $output['separate long flag with optional argument'] = ['--delta foo', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => 'foo'], ''];
//        $output['combined long flag with optional argument'] = ['-deltafoo', ['a' => false, 'b' => false, 'c' => null, 'd' => 'foo'], ''];
//        $output['boolean long flag with argument'] = ['--alpha arg1', ['a' => true, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument arg1'];
//        $output['long flag with two arguments'] = ['--charlie foo arg1', ['a' => false, 'b' => false, 'c' => 'foo', 'd' => null], 'Non-option argument arg1'];
//        $output['long flag after special argument'] = ['--alpha -- --bravo', ['a' => true, 'b' => false, 'c' => null, 'd' => null], 'Non-option argument --bravo'];

        return $output;
    }

    /**
     * @dataProvider data
     * @param string $argument
     * @param array $output
     * @param string $error
     */
    public function testConfirmGetErrorReturnsExpected($argument, array $output, $error)
    {
        $fixture = new OptionsParser($argument);
        $this->assertSame($output, $fixture->toArray());
    }

    /**
     * @dataProvider data
     * @param string $argument
     * @param array $output
     * @param string $error
     */
    public function testConfirmToArrayReturnsExpected($argument, array $output, $error)
    {
        $fixture = new OptionsParser($argument);
        $this->assertSame($error, $fixture->getError());
    }
}
