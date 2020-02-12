<?php
/**
 * SOLID
 * L - Liskov Substitution principle(Принцип подстановки Лисков)
 *
 * Поведение наследуемых классов не должно противоречить
 * поведению заданному базовым классом
 */
    $bird = new Bird();
    // $bird = new Duck();
    // $bird = new Penguin();
    $birdRun = new BirdRun($bird);
    $birdRun->run();
