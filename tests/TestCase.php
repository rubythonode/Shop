<?php

/*
 * This file is part of the Antvel Shop package.
 *
 * (c) Gustavo Ocanto <gustavoocanto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antvel\Tests;

use Antvel\Antvel;
use Antvel\Tests\Traits\Environment;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    use Environment;

    /**
     * Contains the database schema information.
     *
     * @var array
     */
    protected $schema = null;

    /**
     * Create a new Invitations instance.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->schema = require(__DIR__ . '/config/database.php');
    }

    /**
     * Setup the test environment
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        Antvel::beginsTests();
        $this->loadFactories();
        $this->loadMigrations();
    }


}