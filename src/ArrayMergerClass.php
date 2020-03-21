<?php
    class ArrayMerger
    {
        private $mergedArray = [];
        private $mergedEvenArray = [];

        private function createArrayConcatenation($arr1, $arr2): array
        {
            $buffLength = count($arr1) + count($arr2);
            $firstI = count($arr1);
            for ( $i = count($arr1); $i < $buffLength; $i++ ) {
                $arr1[$i] = $arr2[$i - $firstI];
            }
            return $arr1;
        }

        private function createEvenArray($arr): array
        {
            return array_filter($arr, function ($item) {
                return $item % 2 === 0;
            });
        }

        function getMergedArray()
        {
            return $this->mergedArray;
        }

        function getMergedEvenArray()
        {

            return $this->mergedEvenArray;
        }

        function __construct($arr1, $arr2)
        {
            $this->mergedArray = $this->createArrayConcatenation($arr1, $arr2);
            $this->mergedEvenArray = $this->createEvenArray($this->mergedArray);
        }
    }