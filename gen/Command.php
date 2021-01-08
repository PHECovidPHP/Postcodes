<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Postcode to MSOA.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Gen\Postcodes;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Command
{
    /**
     * @var \PHECovid\Gen\Fetcher
     */
    private $fetcher;

    private function __construct(Fetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    public static function create(): self
    {
        return new self(Fetcher::create());
    }

    public function run(): int
    {
        foreach (Generator::generate($this->fetcher->fetch()) as $class => $content) {
            $filename = \sprintf('%s/../src/Postcode/%s.php', __DIR__, $class);
            \file_put_contents($filename, $content);
            echo \sprintf("Written %s\n", \basename($filename));
        }

        return 0;
    }
}
