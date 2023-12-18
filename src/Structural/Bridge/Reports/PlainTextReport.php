<?php

namespace DesignPattern\Structural\Bridge\Reports;

class PlainTextReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "this is grade 1 report \n";
    }

    public function showGrade2Report(): string
    {
        return "this is grade 2 report \n";
    }

    public function showGrade3Report(): string
    {
        return "this is grade 3 report \n";
    }
}
