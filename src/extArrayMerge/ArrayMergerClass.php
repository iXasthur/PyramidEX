<?php

    class ArrayMerger
    {
        private array $mergedArray = [];
        private array $mergedEvenArray = [];

        public function __construct($arr1, $arr2)
        {
            $this->mergedArray = $this->createArrayConcatenation($arr1, $arr2);
            $this->mergedEvenArray = $this->createEvenArray($this->mergedArray);
        }

        private function createArrayConcatenation($arr1, $arr2): array
        {
            $buffLength = count($arr1) + count($arr2);
            $firstI = count($arr1);
            for ($i = count($arr1); $i < $buffLength; ++$i) {
                $arr1[$i] = $arr2[$i - $firstI];
            }

            return $arr1;
        }

        private function createEvenArray($arr): array
        {
            return array_filter($arr, function ($item) {
                return 0 === $item % 2;
            });
        }

        public function getMergedArray(): array
        {
            return $this->mergedArray;
        }

        public function getMergedEvenArray(): array
        {
            return $this->mergedEvenArray;
        }
    }
