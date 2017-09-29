<?php
declare(strict_types=1);

namespace Ikuwow\TestCase;

use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase {

    public function setUp() {
        $this->Sample = new \Ikuwow\Sample();
    }

    public function testGenerateProblems(): void {
        $numProblems = 100;
        $this->Sample->generateMathProblems($numProblems);

        $this->assertEquals($numProblems, count($this->Sample->mathProblems));
        foreach ($this->Sample->mathProblems as $p) {
            $this->assertRegexp('/[0-9]+\ \+\ [0-9]+\ =/', $p);
        }
    }

    public function tearDown() {
        unset($this->Sample);
    }
}
