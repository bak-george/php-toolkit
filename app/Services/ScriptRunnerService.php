<?php

namespace App\Services;

class ScriptRunnerService
{
    public function executeScript($scriptPath)
    {
        ob_start();
        include $scriptPath;
        $output = ob_get_clean();
        
        // Get the title of the script
        $title = basename($scriptPath, '.php');
        
        return [
            'title' => $title,
            'output' => $output,
        ];
    }
}
