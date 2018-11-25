<?php

namespace App\Cli;



class Checkout
{
    /** @var string $shell */
    public $shell = '';
    private $baseDir = '~/laravel/';

    public function exec($dir, $branch)
    {
        $cd = $this->CdDir($dir);
        $checkout = $this->checkoutBranch($branch);

        dd(shell_exec("cd {$this->baseDir}dir1; git checkout b1"));
    }

    /**
     * checkout to branch
     * 
     * @param string $branch
     * 
     * @return string
     */
    public function checkoutBranch($branch)
    {
        return 'git checkout ' . $branch; 
    }

    /**
     * go to directory
     *
     * @param string $dir
     *
     * @return string
     */
    public function CdDir($dir)
    {
        return 'cd ' . $dir;
    }

    /**
     * @return string
     */
    public function getShell(): string
    {
        return $this->shell;
    }

    /**
     * @param string $shell
     */
    public function setShell(string $shell): void
    {
        $this->shell = $shell;
    }
}