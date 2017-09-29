<?php
declare(strict_types=1);

namespace Ikuwow;

final class Sample {

    const MINVALUE = 0;
    const MAXVALUE = 99;

    public $mathProblems = [];

    public function generateMathProblems(int $numProblems): array {
        $problems = [];
        while (count($problems) < $numProblems) {
            do {
                $first = mt_rand(self::MINVALUE, self::MAXVALUE);
                $second = mt_rand(self::MINVALUE, self::MAXVALUE);
            } while ($first + $second > self::MAXVALUE);
            $problems[] = sprintf('%d + %d =', $first, $second);
        }
        $this->mathProblems = $problems;
        return $problems;
    }

    public function exportProblems(): void {
        foreach ($this->mathProblems as $p) {
            echo $p . PHP_EOL;
        }
    }
}
