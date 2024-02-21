<?php

class SortPackage {
    public function sortPackage(float $width, float $height, float $length, float $mass): string {
        // Validate input to ensure dimensions and mass are positive
        if ($width <= 0 || $height <= 0 || $length <= 0 || $mass < 0) {
            throw new \Exception("Dimensions and mass must be positive values.");
        }
        
        // Calculate the volume of the package
        $volume = $width * $height * $length;

        // Check if the package is bulky
        $isBulky = $volume >= 1000000 || $width >= 150 || $height >= 150 || $length >= 150;

        // Check if the package is heavy
        $isHeavy = $mass >= 20;

        // Determine the stack where the package should go
        if ($isBulky && $isHeavy) {
            // Both bulky and heavy
            return "REJECTED";
        } elseif (!$isBulky && !$isHeavy) {
            // Neither bulky nor heavy
            return "STANDARD";} 
        else  {
            // Either bulky or heavy, but not both
            return "SPECIAL";
        
        }
    }
}

$sort = new SortPackage();
echo $sort->sortPackage(100, 100, 100, 10); //SPECIAL