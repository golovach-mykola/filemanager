<?php

class FileTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp()
    {
        $_FILES = array(
            'file' => array(
                'name' => 'test3.png',
                'type' => 'image/jpeg',
                'size' => 542,
                'tmp_name' => __DIR__ . '/_files/test.png',
                'error' => 0
            )
        );

    }


    /**
     * Test fileList success.
     *
     * @covers \App\Engine\File::fileList
     */
    public function testFileListSuccess()
    {
        $class = $this->getMockClass('App\Engine\File', ['fileList']);

        $this->assertTrue(is_array($class::fileList()));
    }

    /**
     * Test fileList success.
     *
     * @covers \App\Engine\File::fileList
     */
    public function testFilePutSuccess()
    {
        $class = $this->getMockClass('App\Engine\File', ['put']);

        $this->assertTrue($class::put($_FILES['file']));
    }
}