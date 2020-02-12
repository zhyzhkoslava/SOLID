<?php

class Product
{
    private $logger;

    public function __construct(Logger $logger) // Logger $logger - вызов конструктора будем передавать экземпляр класса Logger
    {
        $this->logger = $logger;
    }

    public function setPrice($price) {
        try {
            //save price in db
        } catch (DbException $e) {
            $this->logger->log($e->getMessage());
        }
    }

}
