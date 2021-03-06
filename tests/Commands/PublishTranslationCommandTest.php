<?php

namespace Laravel\Modules\Tests\Commands;

use Laravel\Modules\Tests\BaseTestCase;

class PublishTranslationCommandTest extends BaseTestCase
{
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $finder;
    /**
     * @var string
     */
    private $modulePath;

    public function setUp(): void
    {
        parent::setUp();
        $this->modulePath = base_path('modules/Blog');
        $this->finder = $this->app['files'];
        $this->artisan('module:make', ['name' => ['Blog']]);
    }

    public function tearDown(): void
    {
        $this->finder->deleteDirectory($this->modulePath);
        parent::tearDown();
    }

    /** @test */
    public function it_published_module_translations()
    {
        $this->artisan('module:publish-translation', ['module' => 'Blog']);

        $this->assertTrue(is_dir(base_path('resources/lang/blog')));
    }
}
