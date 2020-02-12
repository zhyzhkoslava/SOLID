<?php

/**
 * SOLID
 * O - Open/Closed principle(Принцип Открытости - Закрытости)
 * Классы должны быть открыты для расширения и закрыты для изменений
 */

    $logger = new DBLogger();
    $product = new Product($logger);
    $product->setPrice(10);
