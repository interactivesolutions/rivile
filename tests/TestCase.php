<?php
/**
 * @copyright 2017 interactivesolutions
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * Contact InteractiveSolutions:
 * E-mail: hello@interactivesolutions.lt
 * http://www.interactivesolutions.lt
 */

declare(strict_types = 1);

namespace Tests;


use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use InteractiveSolutions\HoneycombCore\Tests\BuildsMocks;
use InteractiveSolutions\HoneycombCore\Tests\Traits\MemoryDatabaseMigrations;
use InteractiveSolutions\Rivile\Providers\RivileServiceProvider;

/**
 * Class TestCase
 * @package Tests
 */
abstract class TestCase extends \Orchestra\Testbench\BrowserKit\TestCase
{
    use BuildsMocks;
    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        if (DB::connection()->getDatabaseName() == ':memory:') {
            DB::statement('PRAGMA foreign_keys = ON;');
        }
    }

    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            RivileServiceProvider::class,
        ];
    }

    /**
     * @param Application $app
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        config([
            'database.connections.sqlite_test' => [
                'driver' => 'sqlite',
                'database' => ':memory:',
                'prefix' => '',
            ],
        ]);
    }

    /**
     *
     */
    protected function setUpTraits()
    {
        parent::setUpTraits();

        $uses = array_flip(class_uses_recursive(static::class));

        if (isset($uses[MemoryDatabaseMigrations::class])) {
            $this->runDatabaseMigrations();
        }
    }
}
