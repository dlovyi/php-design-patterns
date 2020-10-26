<?php
namespace ServiceLocator\Interfaces;

interface Service
{

    public function getName();

    public function execute();
}