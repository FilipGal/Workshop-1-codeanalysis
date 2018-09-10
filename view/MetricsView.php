<?php
require_once('modell/MetricsCalculations.php');

class MetricsView {
    private $mc;
    
    public function __construct(array $file) {
        $this->mc = new MetricsCalculations($file);
    }

    public function getHtml() {
        return '
        <div>
        Number of lines: '.$this->mc->numberOfLines().'
        </div>';
    }
}
