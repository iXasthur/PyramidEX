<?php

    class FileTreeNode
    {
        public string $path = '';
        public array $internalNodes = [];

        public function __construct(string $path)
        {
            $this->path = $path;
        }
    }
