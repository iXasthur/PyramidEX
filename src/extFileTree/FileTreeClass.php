<?php

    require 'FileTreeNodeClass.php';

    class FileTree
    {
        private FileTreeNode $mainNode;
        private int $overallSize;

        private function getNodes(FileTreeNode $node)
        {
            $saveDir = getcwd();
            chdir($node->path);
            $files = array_diff(scandir($node->path), ['.', '..']);

            foreach ($files as $file) {
                $buffNode = new FileTreeNode(realpath($file));
                if (is_dir($buffNode->path)) {
                    $this->getNodes($buffNode);
                } else {
                    $this->overallSize = $this->overallSize + filesize($buffNode->path);
                }
                array_push($node->internalNodes, $buffNode);
            }
            chdir($saveDir);
        }

        private function printTreeTableRecursion(int $nesting, FileTreeNode $node)
        {
            echo '<tr>';
            for ($i = 0; $i < $nesting; ++$i) {
                echo '<td>-</td>';
            }
            echo '<td>'.basename($node->path).'</td>';
            if ($node->internalNodes != []) {
                foreach ($node->internalNodes as $internalNode) {
                    $this->printTreeTableRecursion($nesting + 1, $internalNode);
                }
            }
            echo '</tr>';
        }

        public function printTreeTable()
        {
            $nesting = 0;
            echo '<table>';
            $this->printTreeTableRecursion($nesting, $this->mainNode);
            echo '<tr>';
            echo '<td>Size: '.$this->overallSize.' bytes</td>';
            echo '</tr>';
            echo '</table>';
        }

        public function __construct(string $path)
        {
            $this->mainNode = new FileTreeNode(realpath($path));
            $this->overallSize = 0;

            $this->getNodes($this->mainNode);
        }
    }
