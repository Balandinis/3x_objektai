<?php
class Seka {
    // Metodas skirtas skaičiuoti vienai reikšmei
    public function iterationCounter($x) {
        $check = false;
        $iter_count = 0;
        $sequence = [];
        if (isset($x)) {
            while (!$check) {
                $sequence[] = $x;
                if ($x == 1)
                    $check = true;
                else if (($x % 2) == 0) {
                    $x = $x / 2;
                } else {
                    $x = 3 * $x + 1;
                }
                $iter_count++;
            }
        }
        return ['iterations' => $iter_count, 'sequence' => $sequence];
    }

    // Metodas skirtas skaičiuoti intervalui.
    public function intervalCounter($start, $end) {
        $results = [];
        for ($i = $start; $i <= $end; $i++) {
            $results[$i] = $this->iterationCounter($i);
        }
        return $results;
    }

    // Metodas skirtas skaičiuoti aritmetinei progresijai
    public function arithmeticProgression($a, $d, $n) {
        $progression = [];
        for ($i = 0; $i < $n; $i++) {
            $progression[] = $a + ($i * $d);
        }
        return $progression;
    }
}
?>

