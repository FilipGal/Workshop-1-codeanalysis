<?php
require_once('modell/MetricsCalculations.php');

class MetricsView {
    private $mc;
    
    /**
     * Constructor forward file to MetricsCalulations
     *
     * @param array $file
     */
    public function __construct(array $file) {
        $this->mc = new MetricsCalculations($file);
    }

    /**
     * Return html
     *
     * @return string
     */
    public function getHtml() {
        return '
        <div>
        Number of lines: '.$this->mc->numberOfLines().'
        Max nested depth: '.$this->mc->getNestedDepth().'
        </div>';
    }
}
