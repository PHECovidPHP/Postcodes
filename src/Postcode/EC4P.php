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
final class EC4P
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000575',
        '4AB' => 'E02000575',
        '4AD' => 'E02000575',
        '4AE' => 'E02000575',
        '4AF' => 'E02000575',
        '4AG' => 'E02000575',
        '4AH' => 'E02000575',
        '4AJ' => 'E02000001',
        '4AL' => 'E02000575',
        '4AN' => 'E02000575',
        '4AP' => 'E02000575',
        '4AQ' => 'E02000575',
        '4AS' => 'E02000575',
        '4AT' => 'E02000001',
        '4AU' => 'E02000575',
        '4AX' => 'E02000575',
        '4AY' => 'E02000575',
        '4AZ' => 'E02000575',
        '4BA' => 'E02000575',
        '4BB' => 'E02000575',
        '4BD' => 'E02000575',
        '4BE' => 'E02000001',
        '4BF' => 'E02000575',
        '4BG' => 'E02000575',
        '4BH' => 'E02000575',
        '4BJ' => 'E02000575',
        '4BL' => 'E02000575',
        '4BN' => 'E02000575',
        '4BP' => 'E02000575',
        '4BQ' => 'E02000575',
        '4BR' => 'E02000575',
        '4BS' => 'E02000575',
        '4BT' => 'E02000575',
        '4BU' => 'E02000575',
        '4BW' => 'E02000575',
        '4BX' => 'E02000575',
        '4BY' => 'E02000575',
        '4BZ' => 'E02000575',
        '4DA' => 'E02000575',
        '4DB' => 'E02000575',
        '4DD' => 'E02000575',
        '4DE' => 'E02000575',
        '4DF' => 'E02000575',
        '4DG' => 'E02000575',
        '4DH' => 'E02000575',
        '4DJ' => 'E02000575',
        '4DL' => 'E02000575',
        '4DN' => 'E02000575',
        '4DP' => 'E02000001',
        '4DQ' => 'E02000575',
        '4DR' => 'E02000575',
        '4DS' => 'E02000001',
        '4DT' => 'E02000575',
        '4DU' => 'E02000575',
        '4DW' => 'E02000575',
        '4DX' => 'E02000575',
        '4DY' => 'E02000575',
        '4DZ' => 'E02000575',
        '4EB' => 'E02000001',
        '4ED' => 'E02000001',
        '4EE' => 'E02000575',
        '4EH' => 'E02000977',
        '4EL' => 'E02000001',
        '4EN' => 'E02000001',
        '4EP' => 'E02000575',
        '4ER' => 'E02000001',
        '4ET' => 'E02000001',
        '4EU' => 'E02000001',
        '4EY' => 'E02000001',
        '4FA' => 'E02000575',
        '4FB' => 'E02000575',
        '4FD' => 'E02000575',
        '4FE' => 'E02000575',
        '4FF' => 'E02000575',
        '4FG' => 'E02000575',
        '4FH' => 'E02000575',
        '4FJ' => 'E02000575',
        '4FL' => 'E02000575',
        '4FN' => 'E02000575',
        '4FP' => 'E02000575',
        '4FQ' => 'E02000575',
        '4FR' => 'E02000575',
        '4FS' => 'E02000575',
        '4FT' => 'E02000575',
        '4FU' => 'E02000575',
        '4FW' => 'E02000575',
        '4FX' => 'E02000575',
        '4FY' => 'E02000575',
        '4FZ' => 'E02000575',
        '4GA' => 'E02000575',
        '4GB' => 'E02000575',
        '4GD' => 'E02000575',
        '4GE' => 'E02000575',
        '4GF' => 'E02000575',
        '4GG' => 'E02000575',
        '4GH' => 'E02000575',
        '4GJ' => 'E02000575',
        '4GL' => 'E02000575',
        '4GN' => 'E02000575',
        '4GP' => 'E02000575',
        '4GQ' => 'E02000575',
        '4GR' => 'E02000575',
        '4GS' => 'E02000575',
        '4GT' => 'E02000575',
        '4GU' => 'E02000575',
        '4GW' => 'E02000575',
        '4GX' => 'E02000575',
        '4GY' => 'E02000575',
        '4GZ' => 'E02000575',
        '4HA' => 'E02000575',
        '4HB' => 'E02000575',
        '4HD' => 'E02000575',
        '4HE' => 'E02000575',
        '4HF' => 'E02000575',
        '4HG' => 'E02000575',
        '4HH' => 'E02000575',
        '4HJ' => 'E02000575',
        '4HL' => 'E02000575',
        '4HN' => 'E02000575',
        '4HP' => 'E02000001',
        '4HR' => 'E02000575',
        '4HS' => 'E02000575',
        '4HT' => 'E02000575',
        '4HU' => 'E02000001',
        '4HW' => 'E02000575',
        '4HX' => 'E02000575',
        '4HY' => 'E02000575',
        '4HZ' => 'E02000575',
        '4JA' => 'E02000575',
        '4JB' => 'E02000575',
        '4JD' => 'E02000575',
        '4JE' => 'E02000575',
        '4JG' => 'E02000575',
        '4JH' => 'E02000001',
        '4JJ' => 'E02000575',
        '4JN' => 'E02000575',
        '4JP' => 'E02000575',
        '4JQ' => 'E02000575',
        '4JR' => 'E02000575',
        '4JS' => 'E02000001',
        '4JT' => 'E02000575',
        '4JU' => 'E02000575',
        '4JW' => 'E02000575',
        '4JX' => 'E02000575',
        '4JY' => 'E02000575',
        '4JZ' => 'E02000575',
        '4LA' => 'E02000575',
        '4LB' => 'E02000001',
        '4LD' => 'E02000575',
        '4LE' => 'E02000575',
        '4LF' => 'E02000575',
        '4LG' => 'E02000575',
        '4LH' => 'E02000575',
        '4LJ' => 'E02000575',
        '4LL' => 'E02000001',
        '4LN' => 'E02000001',
        '4LP' => 'E02000001',
        '4LQ' => 'E02000575',
        '4LS' => 'E02000001',
        '4LX' => 'E02000001',
        '4NA' => 'E02000001',
        '4PY' => 'E02000001',
        '4UW' => 'E02000575',
        '4UX' => 'E02000575',
        '4UY' => 'E02000575',
        '4UZ' => 'E02000575',
        '4WA' => 'E02000575',
        '4WB' => 'E02000575',
        '4WD' => 'E02000575',
        '4WE' => 'E02000575',
        '4WF' => 'E02000575',
        '4WG' => 'E02000575',
        '4WH' => 'E02000575',
        '4WJ' => 'E02000575',
        '4WL' => 'E02000575',
        '4WN' => 'E02000575',
        '4WP' => 'E02000575',
        '4WQ' => 'E02000575',
        '4WR' => 'E02000575',
        '4WS' => 'E02000575',
        '4WT' => 'E02000575',
        '4WU' => 'E02000575',
        '4WW' => 'E02000575',
        '4WX' => 'E02000575',
        '4WY' => 'E02000575',
        '4WZ' => 'E02000575',
        '4XA' => 'E02000575',
        '4XB' => 'E02000575',
        '4XD' => 'E02000575',
        '4XE' => 'E02000575',
        '4XF' => 'E02000575',
        '4XG' => 'E02000575',
        '4XP' => 'E02000575',
        '4XQ' => 'E02000575',
        '4XR' => 'E02000575',
        '4XS' => 'E02000575',
        '4XT' => 'E02000575',
        '4XU' => 'E02000575',
        '4XW' => 'E02000575',
        '4XX' => 'E02000575',
        '4XY' => 'E02000575',
        '4XZ' => 'E02000575',
        '4YA' => 'E02000575',
        '4ZZ' => 'E02000575',
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
