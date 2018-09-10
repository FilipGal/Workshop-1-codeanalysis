<?php
class MetricsCalculations {
    private $file;

    public function __construct(array $file) {
        $this->file = $file;
    }
    
    public function numberOfLines() {
        $numberOfLines = 0;
        foreach ($this->file as $line) {
            $numberOfLines++;
        }
        return $numberOfLines;
    }
}