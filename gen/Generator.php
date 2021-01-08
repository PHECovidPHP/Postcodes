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
final class Generator
{
    private const FILE_TEMPLATE = '<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Postcode to MSOA.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\\Postcodes\\Postcode;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class %s
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
%s
    ];

    /**
     * @param string $inwardCode
     *
     * @return string
     */
    public static function lookup(string $inwardCode): string
    {
        $msoaCode = self::MAP[$inwardCode] ?? null;

        if (null === $msoaCode) {
            throw new \\InvalidArgumentException(\'Unknown inward code.\');
        }

        return $msoaCode;
    }
}
';

    public static function generate(array $maps): array
    {
        $output = [];

        foreach ($maps as $class => $map) {
            $output[$class] = \sprintf(
                self::FILE_TEMPLATE,
                $class,
                self::generateMap($map)
            );
        }

        return $output;
    }

    private static function generateMap(array $map): string
    {
        $output = '';

        foreach ($map as $inwardCode => $msoaCode) {
            $output .= \sprintf("        '%s' => '%s',\n", $inwardCode, $msoaCode);
        }

        return rtrim($output);
    }
}
