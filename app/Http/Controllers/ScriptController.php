<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ScriptRunnerService;
use PhpParser\Error;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard;

class ScriptController extends Controller
{
    protected $scriptRunnerService;

    public function __construct(ScriptRunnerService $scriptRunnerService)
    {
        $this->scriptRunnerService = $scriptRunnerService;
    }
    
    public function showScriptResult(Request $request, $directoryName, $title)
    {
        $scriptPath = public_path("/scripts/{$directoryName}/{$title}.php");

        if (file_exists($scriptPath)) {
            $result = $this->scriptRunnerService->executeScript($scriptPath);
            $styledCode = $this->styleCode($scriptPath);

            return view('scriptResult', ['result' => $result, 'styledCode' => $styledCode]);
        } else {
            abort(404);
        }
    }

    private function styleCode($scriptPath)
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
}
