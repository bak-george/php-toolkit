<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ScriptRunnerService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use PhpParser\Error;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ScriptController extends Controller
{
    protected $scriptRunnerService;

    public function __construct(ScriptRunnerService $scriptRunnerService)
    {
        $this->scriptRunnerService = $scriptRunnerService;
    }
    
    public function showScriptResult(string $directoryName, string $title): View
    {
        $scriptPath = public_path("/scripts/{$directoryName}/{$title}.php");

        if (file_exists($scriptPath)) {
            $result = $this->scriptRunnerService->executeScript($scriptPath);
            $parsedCode = $this->parsePHPFile($scriptPath);

            return view('scriptResult', ['result' => $result, 'styledCode' => $parsedCode, 'title' => $title]);
        } else {
            abort(404);
        }
    }

    private function parsePHPFile(string $scriptPath): string
    {
        $code = file_get_contents($scriptPath);

        $parserFactory = new ParserFactory();
        $parser = $parserFactory->createForNewestSupportedVersion();

        try {
            $stmts = $parser->parse($code);
        } catch (Error $error) {
            return "<pre>Error parsing code: {$error->getMessage()}</pre>";
        }

        $prettyPrinter = new Standard();
        $styledCode = $prettyPrinter->prettyPrintFile($stmts);
        
        return $styledCode;
    }
    // currently working on this
    // private function formatPHPCode(string $codeToFormat, string $scriptPath): string
    // {
    //     if (!file_exists($scriptPath) || !is_executable($scriptPath)) {
    //         throw new \RuntimeException('php-cs-fixer not found or is not executable.');
    //     }

    //     $phpCsFixerPath = base_path('vendor/bin/php-cs-fixer');

    //     $command = [
    //         $phpCsFixerPath,
    //         'fix',
    //         $scriptPath,
    //         '--rules=@PSR12',
    //         '--using-cache=no',
    //     ];

    //     $process = new Process($command);

    //     $process->setInput($codeToFormat);

    //     $process->run();

    //     if (!$process->isSuccessful()) {
    //         throw new ProcessFailedException($process);
    //     }

    //     $formattedCode = $process->getOutput();

    //     return $formattedCode;
    // }
}
