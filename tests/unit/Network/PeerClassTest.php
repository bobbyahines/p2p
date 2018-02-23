<?php
namespace Network;

class PeerClassTest extends \Codeception\Test\Unit
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
        $filePath = $_SERVER['DOCUMENT_ROOT'] . 'lib/Network/Peer.php';
        $this->assertFileExists($filePath);
    }
}