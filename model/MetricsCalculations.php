<?php
class MetricsCalculations {
    private $file;

    /**
     * Constructor
     *
     * @param array $file
     */
    public function __construct(array $file) {
        $this->file = $file;
    }
    
    /**
     * Return number of lines in file uploaded.
     *
     * @return number
     */
    public function numberOfLines(): int {
        $numberOfLines = 0;
        foreach ($this->file as $line) {
            $numberOfLines++;
        }
        return $numberOfLines;
    }
    
    // Example max nested depth is 2.
    // {
    //  { 
    //    
    //  }
    // }

    // This function do not work.
    // Trying to get maxNestedDepth by running regexp on everyline.
    // If { is found NestedDepth should be +1
    // If } is found NestedDepth should be -1
    // If NestedDepth > maxNestedDepth change it

    public function getNestedDepth(): int {
        $maxNestedDepth = 0;
        $nestedDepth = 0;
        foreach($this->file as $line) {
            $rightBracketFound;
            $leftBracketFound;
            
            preg_match('{', $line, $leftBracketFound);
            preg_match('}', $line, $rightBracketFound);

            if (is_array($leftBracketFound)) {
                $nestedDepth += 1;
                if ($nestedDepth > $maxNestedDepth) {
                    $maxNestedDepth = $nestedDepth;
                }
            } else if (is_array($rightBracketFound)) {
                $nestedDepth -= 1;
            }
        }
        return $maxNestedDepth;
    }
}