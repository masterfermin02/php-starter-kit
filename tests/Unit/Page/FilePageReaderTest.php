<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Page\FilePageReader;
use App\Page\PageReader;
use App\File\FileReader;
use App\Page\InvalidPageException;

class FilePageReaderTest extends TestCase
{
    protected $path = 'pages';
    protected $file_name = 'page-test';
    protected $content = 'page-test';

    public function setUp(): void
    {
        // setup and cache the virtual file system
        file_put_contents($this->path . DIRECTORY_SEPARATOR . $this->file_name .'.md', $this->content);
    }

    public function testInvalidPageExceptionIsThrownWhenNoPage(): void
    {
        $this->expectException(InvalidPageException::class);
        $file = new FilePageReader(new FileReader(''));
        $file->readBySlug('page-no-found.md');
    }

    public function testCanReadBySlug(): void
    {

        $file = new FilePageReader(new FileReader( __DIR__ . '/../../../'));
        $contentExperted = $file->readBySlug('page-test');

        $this->assertSame($contentExperted, $this->content);
    }

    public function testImplementPageReader(): void
    {
        $this->assertInstanceOf(PageReader::class, new FilePageReader(new FileReader('')));
    }

    public function tearDown(): void
    {
        unlink($this->path . DIRECTORY_SEPARATOR . $this->file_name .'.md');
        parent::tearDown();
    }

}
