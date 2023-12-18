<?php

namespace DesignPattern\Structural\Bridge\Reports;

class XmlReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "<student-report>this is grade 1 report</student-report> \n";
    }

    public function showGrade2Report(): string
    {
        return "<student-report>this is grade 2 report</student-report> \n";
    }

    public function showGrade3Report(): string
    {
        return "<student-report>this is grade 3 report</student-report> \n";
    }
}
