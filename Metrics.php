<?php

class Metrics {
    private $file;

    function __construct(array $file) {
        $this->file = $file;
    }
    
    public function getHtml() {
        return '<div>
            Number of lines: '.$this->numberOfLines().'
        </div>';
    }
    
    public function numberOfLines() {
        $numberOfLines = 0;
        foreach ($this->file as $line) {
            $numberOfLines++;
        }
        return $numberOfLines;
    }

    private function getNestedDepth() {
        // TODO
    }
}