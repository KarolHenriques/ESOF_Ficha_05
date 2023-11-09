<?php

interface BiosInterface
{
    public function execute();
    public function waitForKeyPress();
    public function launch(OsInterface $os);
    public function powerDown();
}
interface OSInterface
{
    public function halt();
    public function getName(): string;
}

class BiosInterfaceImplementation implements BiosInterface{

    public function execute(): void
    {
       echo "<br>This is the execute function of BiosInterfaceImplementation class</br>";
    }

    public function waitForKeyPress(): void
    {
        echo "<br>This is the waitForKeyPress function of BiosInterfaceImplementation class</br>";
    }

    public function launch(OSInterface $os): void
    {
        echo "<br>This is the launch function of BiosInterfaceImplementation class</br>";
    }

    public function powerDown(): void
    {
        echo "<br>This is the powerDown function of BiosInterfaceImplementation class</br>";
    }
}
