<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\Generator\Resolver;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\Generator\Resolver\RecursionLimitReachedExceptionFactory
 */
class RecursionLimitReachedExceptionFactoryTest extends TestCase
{
    public function testTestCreateNewExceptionWithFactory()
    {
        $exception = RecursionLimitReachedExceptionFactory::create(10, 'foo');

        $this->assertEquals(
            'Recursion limit (10 tries) reached while resolving the parameter "foo"',
            $exception->getMessage()
        );
        $this->assertEquals(0, $exception->getCode());
        $this->assertNull($exception->getPrevious());
    }
}

