<?php
/**
 * Solid
 * Dependency inversion principle(принцип инверсии зависимостей)
 *
 * Зависимости внутри системы строятся на основе абстракций,
 * модули верхних уровней не должны зависеть от модулей
 * нижних уровней. Оба типа модулей должны зависеть от абстракций.
 * Абстракции не должны зависеть от деталей. Детали должны
 * зависеть от абстракций
 *
 * Зависимости должны строится относительно абстракций, а не классов
 */

class lowRankingMale {

    public function eat() {
        $wife = new Wife();
        $food = $wife->getFood();
        // ...eat
    }
}

class averageRankingMale {

    private $wife;

    public function __construct(Wife $wife) {
        $this->wife = $wife;
    }

    public function eat() {
        $food = $this->wife->getFood();
        // ...eat
    }

}

class highRankingMale {

    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider) {
        $this->foodProvider = $foodProvider;
    }

    public function eat() {
        $food = $this->foodProvider->getFood();
        // ...
    }
}