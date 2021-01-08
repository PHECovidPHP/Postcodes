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
final class PE5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02003254',
        '7AB' => 'E02003254',
        '7AD' => 'E02003254',
        '7AE' => 'E02003254',
        '7AF' => 'E02003254',
        '7AG' => 'E02003254',
        '7AH' => 'E02003254',
        '7AJ' => 'E02003254',
        '7AL' => 'E02003254',
        '7AN' => 'E02003254',
        '7AP' => 'E02003254',
        '7AQ' => 'E02003254',
        '7AR' => 'E02003254',
        '7AS' => 'E02003254',
        '7AT' => 'E02003254',
        '7AU' => 'E02003254',
        '7AW' => 'E02003254',
        '7AX' => 'E02003254',
        '7AY' => 'E02003254',
        '7AZ' => 'E02003254',
        '7BA' => 'E02003254',
        '7BB' => 'E02003254',
        '7BD' => 'E02003254',
        '7BE' => 'E02003254',
        '7BF' => 'E02003254',
        '7BG' => 'E02003254',
        '7BH' => 'E02003254',
        '7BJ' => 'E02003254',
        '7BL' => 'E02003254',
        '7BN' => 'E02003242',
        '7BP' => 'E02003242',
        '7BQ' => 'E02003254',
        '7BS' => 'E02003254',
        '7BT' => 'E02003254',
        '7BU' => 'E02003254',
        '7BW' => 'E02003254',
        '7BX' => 'E02003254',
        '7BY' => 'E02003254',
        '7BZ' => 'E02003254',
        '7DA' => 'E02003254',
        '7DB' => 'E02003254',
        '7DD' => 'E02003242',
        '7DE' => 'E02003254',
        '7DF' => 'E02003254',
        '7DG' => 'E02003254',
        '7DH' => 'E02003254',
        '7DJ' => 'E02003254',
        '7DL' => 'E02003254',
        '7DQ' => 'E02003242',
        '7EA' => 'E02003254',
        '7EB' => 'E02003254',
        '7ED' => 'E02003254',
        '7EE' => 'E02003254',
        '7EF' => 'E02003242',
        '7SD' => 'E02003254',
        '7WB' => 'E02003242',
        '7XA' => 'E02003254',
        '7XB' => 'E02003254',
        '7XD' => 'E02003254',
        '7XE' => 'E02003254',
        '7XF' => 'E02003254',
        '7XG' => 'E02003254',
        '7XH' => 'E02003254',
        '7XP' => 'E02003254',
        '7XQ' => 'E02003254',
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
