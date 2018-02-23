<?php
namespace Middleware\Verify;

class SecretClassTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testFilePath()
    {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . 'lib/Middleware/Verify/Secret.php';
        $this->assertFileExists($filePath);
    }
}