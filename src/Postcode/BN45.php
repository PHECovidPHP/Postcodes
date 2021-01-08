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

namespace PHECovid\Postcodes\Postcode;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class BN45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02006619',
        '7AB' => 'E02006619',
        '7AD' => 'E02006619',
        '7AE' => 'E02006619',
        '7AF' => 'E02006619',
        '7AG' => 'E02006619',
        '7AH' => 'E02006619',
        '7AJ' => 'E02006619',
        '7AL' => 'E02006619',
        '7AN' => 'E02006619',
        '7AP' => 'E02006619',
        '7AQ' => 'E02006619',
        '7AR' => 'E02006619',
        '7AS' => 'E02006619',
        '7AT' => 'E02006619',
        '7AU' => 'E02006619',
        '7AW' => 'E02006619',
        '7AX' => 'E02006619',
        '7AY' => 'E02006619',
        '7AZ' => 'E02006619',
        '7BA' => 'E02006619',
        '7BB' => 'E02006619',
        '7BD' => 'E02003493',
        '7BE' => 'E02003517',
        '7BF' => 'E02003517',
        '7BG' => 'E02006619',
        '7BH' => 'E02006619',
        '7BJ' => 'E02006619',
        '7BL' => 'E02003517',
        '7BQ' => 'E02003517',
        '7DA' => 'E02006619',
        '7DB' => 'E02006619',
        '7DD' => 'E02006619',
        '7DE' => 'E02006619',
        '7EA' => 'E02006619',
        '7EB' => 'E02006619',
        '7ED' => 'E02006619',
        '7EE' => 'E02006619',
        '7EF' => 'E02006619',
        '7EG' => 'E02006619',
        '7FA' => 'E02006619',
        '7FB' => 'E02006619',
        '7FD' => 'E02006619',
        '7FE' => 'E02006619',
        '7FF' => 'E02006619',
        '7FG' => 'E02006619',
        '7FH' => 'E02006619',
        '7FJ' => 'E02006619',
        '7FL' => 'E02006619',
        '7FN' => 'E02006619',
        '7FP' => 'E02006619',
        '7FQ' => 'E02006619',
        '7FR' => 'E02006619',
        '7WA' => 'E02003517',
        '7WB' => 'E02003517',
        '7ZA' => 'E02006619',
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
            throw new \InvalidArgumentException('Unknown inward code.');
        }

        return $msoaCode;
    }
}
