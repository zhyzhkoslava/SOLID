<?php

/**
 * SOLID
 * S - Single responsibility principle(Принцип единственной ответственности)
 * Любой объект должен иметь лишь одну обязанность, и
 * эта обязанность должна быть полностью реализована в классе объекта
 */

    $logger = new Logger();
    $product = new Product($logger);
    $product->setPrice(10);
