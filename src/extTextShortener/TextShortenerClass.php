<?php

    class TextShortener
    {
        private string $initialText;
        private string $shortenedText;

        private string $pattern = '/(?<=[[:<:]][^\s]{6})[^\s]+(?=[[:>:]])/u';

        public function __construct(string $text)
        {
            $this->initialText = $text;
            $this->createShortenedText();
        }

        private function createShortenedText()
        {
            $newText = preg_replace($this->pattern, '*', $this->initialText);
            if (null != $newText) {
                $this->shortenedText = $newText;
            }
        }

        public function getShortenedText(): string
        {
            return $this->shortenedText;
        }
    }
