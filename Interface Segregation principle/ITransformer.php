<?php
/**
 * Solid
 * I - Interface segregation principle(принцип разделения интерфейса)
 *
 * Клиенты не должны зависеть от методов, которые они не используют
 *
 * Много специализированных интерфейсов лучше, чем один универсальный
 */

interface ICarTransformer {
    public function toCar();
}

interface IPlaneTransformer {
    public function toPlane();
}

interface IShipTransformer {
    public function toShip();
}