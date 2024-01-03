<?php

namespace DesignPattern\Structural\Decorator;

class NotifierDecorator implements Notifier
{
    protected Notifier $notifier;

    /**
     * @param Notifier $notifier
     */
    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function getNotifier(): Notifier
    {
        return $this->notifier;
    }

    public function setNotifier(Notifier $notifier): void
    {
        $this->notifier = $notifier;
    }

    public function notify()
    {
        $this->notifier->notify();
    }
}