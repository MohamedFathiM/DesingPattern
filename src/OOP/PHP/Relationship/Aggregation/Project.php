<?php

namespace DesignPattern\OOP\PHP\Relationship\Aggregation;

class Project
{
    private string $name;
    private \DateTime $deadLine;
    private array $developers;

    /**
     * @param string $name
     * @param \DateTime $deadLine
     * @param array $developers
     */
    public function __construct(string $name, \DateTime $deadLine, array $developers)
    {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->developers = $developers;
    }

    public function setDeadLineTo(\DateInterval $interval)
    {
        $this->deadLine->add($interval);
    }

    public function getDevelopersAsString(): string
    {
        return join(' - ', array_map(fn(Developer $dev) => $dev->getName(), $this->developers));
    }

    public function showProjectInfo(): string
    {
        return "
            Name : {$this->name}\n
            DeadLine : {$this->deadLine->format('Y-m-d')}\n
            Developers : {$this->getDevelopersAsString()}
        ";
    }

}