<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/LoopExercises.php';

class LoopExercisesTest extends TestCase {
    public function testSumUpTo()
    {
        // Cas simples
        $this->assertEquals(0, LoopExercises::sumUpTo(0), "La somme de 0 à 0 devrait être 0");
        $this->assertEquals(1, LoopExercises::sumUpTo(1), "La somme de 0 à 1 devrait être 1");
        $this->assertEquals(3, LoopExercises::sumUpTo(2), "La somme de 0 à 2 devrait être 3");
        $this->assertEquals(15, LoopExercises::sumUpTo(5), "La somme de 0 à 5 devrait être 15");
        $this->assertEquals(55, LoopExercises::sumUpTo(10), "La somme de 0 à 10 devrait être 55");
        $this->assertEquals(5050, LoopExercises::sumUpTo(100), "La somme de 0 à 100 devrait être 5050");
    }

 public function testEstimateSubscribers()
    {
        $this->assertEquals(2894, LoopExercises::estimateSubscribers(2500, 5, 3));
        $this->assertEquals(2500, LoopExercises::estimateSubscribers(2500, 0, 5));
        $this->assertEquals(2500, LoopExercises::estimateSubscribers(2500, 5, 0));
        $this->assertEquals(0, LoopExercises::estimateSubscribers(0, 10, 12));
    }

    public function testStartDungeon(): void {
        // Cas 1 : Objectif atteint en 1 tour (15 XP)
        $this->assertEquals(1, LoopExercises::startDungeon(15), 'Objectif de 15 XP devrait être atteint en 1 tour (5*1 + 10 = 15 XP)');

        // Cas 2 : Objectif nécessitant 2 tours, sans boss (35 XP)
        $this->assertEquals(2, LoopExercises::startDungeon(35), 'Objectif de 35 XP devrait être atteint en 2 tours (15 + 20 = 35 XP)');

        // Cas 3 : Objectif incluant un tour de boss (90 XP)
        $this->assertEquals(4, LoopExercises::startDungeon(90), 'Objectif de 80 XP devrait être atteint en 4 tours (15 + 20 + 45 = 80 XP, avec boss à n=3)');

        // Cas 4 : Objectif juste après un tour de boss (91 XP)
        $this->assertEquals(4, LoopExercises::startDungeon(91), 'Objectif de 91 XP devrait être atteint en 4 tours (15 + 20 + 55 + 25 = 115 XP)');

        // Cas 5 : Objectif de 0 XP (cas limite)
        $this->assertEquals(0, LoopExercises::startDungeon(0), 'Objectif de 0 XP devrait être atteint en 0 tours');
    }

    public function testFactorial()
    {        
        $this->assertEquals(120, LoopExercises::factorial(5));
        $this->assertEquals(1, LoopExercises::factorial(0));
        $this->assertEquals(1, LoopExercises::factorial(1));
        $this->assertEquals(3628800, LoopExercises::factorial(10));
    }





    public function testSumDigits()
    {
        $this->assertEquals(6, LoopExercises::sumDigits(123));
        $this->assertEquals(0, LoopExercises::sumDigits(0));
    }
}
