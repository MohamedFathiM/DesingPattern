<?php

namespace DesignPattern\Structural\Bridge\Reports;

class HtmlReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "<h1>this is grade 1 report</h1> \n";
    }

    public function showGrade2Report(): string
    {
        return "<h1>this is grade 2 report</h1> \n";
    }

    public function showGrade3Report(): string
    {
        return "<h1>this is grade 3 report</h1> \n";
    }
}
