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
final class WC1R
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000193',
        '4AB' => 'E02000193',
        '4AD' => 'E02000193',
        '4AE' => 'E02000193',
        '4AF' => 'E02000193',
        '4AG' => 'E02000193',
        '4AH' => 'E02000193',
        '4AJ' => 'E02000193',
        '4AL' => 'E02000193',
        '4AN' => 'E02000193',
        '4AP' => 'E02000193',
        '4AQ' => 'E02000193',
        '4AR' => 'E02000193',
        '4AS' => 'E02000193',
        '4AT' => 'E02000193',
        '4AU' => 'E02000193',
        '4AW' => 'E02000972',
        '4AX' => 'E02000193',
        '4AY' => 'E02000193',
        '4AZ' => 'E02000193',
        '4BA' => 'E02000193',
        '4BB' => 'E02000193',
        '4BD' => 'E02000193',
        '4BE' => 'E02000193',
        '4BF' => 'E02000193',
        '4BG' => 'E02000193',
        '4BH' => 'E02000193',
        '4BJ' => 'E02000193',
        '4BL' => 'E02000193',
        '4BN' => 'E02000193',
        '4BP' => 'E02000193',
        '4BQ' => 'E02000193',
        '4BS' => 'E02000193',
        '4BT' => 'E02000193',
        '4BU' => 'E02000193',
        '4BW' => 'E02000193',
        '4BX' => 'E02000193',
        '4BY' => 'E02000193',
        '4BZ' => 'E02000193',
        '4DB' => 'E02000193',
        '4DE' => 'E02000193',
        '4DF' => 'E02000575',
        '4DG' => 'E02000972',
        '4DL' => 'E02000193',
        '4DN' => 'E02000193',
        '4DQ' => 'E02000193',
        '4DR' => 'E02000193',
        '4DS' => 'E02000972',
        '4DT' => 'E02000193',
        '4DU' => 'E02000193',
        '4DW' => 'E02000193',
        '4DX' => 'E02000193',
        '4DY' => 'E02000193',
        '4DZ' => 'E02000193',
        '4EB' => 'E02000193',
        '4ED' => 'E02000193',
        '4EE' => 'E02000193',
        '4EF' => 'E02000193',
        '4EG' => 'E02000193',
        '4EH' => 'E02000193',
        '4EJ' => 'E02000193',
        '4EN' => 'E02000193',
        '4EP' => 'E02000193',
        '4EQ' => 'E02000193',
        '4ER' => 'E02000193',
        '4ET' => 'E02000193',
        '4EU' => 'E02000193',
        '4EW' => 'E02000193',
        '4EX' => 'E02000193',
        '4EY' => 'E02000193',
        '4EZ' => 'E02000193',
        '4FP' => 'E02000193',
        '4FS' => 'E02000193',
        '4GB' => 'E02000193',
        '4HA' => 'E02000193',
        '4HD' => 'E02000193',
        '4HE' => 'E02000193',
        '4HF' => 'E02000193',
        '4HG' => 'E02000193',
        '4HH' => 'E02000193',
        '4HL' => 'E02000193',
        '4HN' => 'E02000193',
        '4HP' => 'E02000193',
        '4HQ' => 'E02000193',
        '4HT' => 'E02000193',
        '4HX' => 'E02000193',
        '4HZ' => 'E02000193',
        '4JB' => 'E02000193',
        '4JD' => 'E02000193',
        '4JH' => 'E02000193',
        '4JJ' => 'E02000193',
        '4JL' => 'E02000193',
        '4JN' => 'E02000193',
        '4JP' => 'E02000193',
        '4JR' => 'E02000972',
        '4JS' => 'E02000193',
        '4JT' => 'E02000193',
        '4JU' => 'E02000193',
        '4JW' => 'E02000972',
        '4JX' => 'E02000193',
        '4JY' => 'E02000193',
        '4JZ' => 'E02000193',
        '4LA' => 'E02000193',
        '4LB' => 'E02000193',
        '4LD' => 'E02000193',
        '4LE' => 'E02000193',
        '4LF' => 'E02000193',
        '4LJ' => 'E02000193',
        '4LL' => 'E02000193',
        '4LN' => 'E02000193',
        '4LP' => 'E02000193',
        '4LR' => 'E02000193',
        '4LS' => 'E02000193',
        '4LT' => 'E02000193',
        '4LU' => 'E02000193',
        '4LX' => 'E02000193',
        '4LY' => 'E02000193',
        '4NA' => 'E02000193',
        '4NB' => 'E02000193',
        '4ND' => 'E02000193',
        '4NF' => 'E02000193',
        '4NG' => 'E02000193',
        '4NH' => 'E02000193',
        '4NJ' => 'E02000193',
        '4NL' => 'E02000193',
        '4NN' => 'E02000193',
        '4NP' => 'E02000193',
        '4NQ' => 'E02000193',
        '4NR' => 'E02000193',
        '4NS' => 'E02000193',
        '4NT' => 'E02000193',
        '4NU' => 'E02000193',
        '4NW' => 'E02000193',
        '4NX' => 'E02000193',
        '4NY' => 'E02000193',
        '4NZ' => 'E02000193',
        '4PA' => 'E02000193',
        '4PB' => 'E02000193',
        '4PD' => 'E02000193',
        '4PF' => 'E02000193',
        '4PG' => 'E02000193',
        '4PJ' => 'E02000193',
        '4PL' => 'E02000193',
        '4PN' => 'E02000193',
        '4PP' => 'E02000193',
        '4PQ' => 'E02000193',
        '4PR' => 'E02000193',
        '4PS' => 'E02000193',
        '4PU' => 'E02000193',
        '4PX' => 'E02000193',
        '4PY' => 'E02000193',
        '4PZ' => 'E02000193',
        '4QA' => 'E02000193',
        '4QB' => 'E02000193',
        '4QD' => 'E02000193',
        '4QF' => 'E02000193',
        '4QG' => 'E02000193',
        '4QH' => 'E02000193',
        '4QJ' => 'E02000193',
        '4QL' => 'E02000193',
        '4QN' => 'E02000193',
        '4QP' => 'E02000193',
        '4QR' => 'E02000193',
        '4QS' => 'E02000193',
        '4QT' => 'E02000193',
        '4QW' => 'E02000193',
        '4QY' => 'E02000193',
        '4QZ' => 'E02000193',
        '4RA' => 'E02000193',
        '4RB' => 'E02000193',
        '4RD' => 'E02000193',
        '4RE' => 'E02000193',
        '4RG' => 'E02000193',
        '4RH' => 'E02000193',
        '4RJ' => 'E02000193',
        '4RL' => 'E02000193',
        '4RS' => 'E02000193',
        '4RT' => 'E02000193',
        '4RU' => 'E02000193',
        '4RX' => 'E02000193',
        '4SA' => 'E02000193',
        '4SB' => 'E02000193',
        '4SD' => 'E02000193',
        '4SE' => 'E02000193',
        '4SF' => 'E02000193',
        '4SG' => 'E02000193',
        '4SJ' => 'E02000193',
        '4SP' => 'E02000193',
        '4SR' => 'E02000193',
        '4SS' => 'E02000193',
        '4ST' => 'E02000193',
        '4SU' => 'E02000193',
        '4SX' => 'E02000193',
        '4TA' => 'E02000193',
        '4TB' => 'E02000193',
        '4TD' => 'E02000193',
        '4TE' => 'E02000193',
        '4TF' => 'E02000193',
        '4TG' => 'E02000193',
        '4TH' => 'E02000193',
        '4TJ' => 'E02000193',
        '4TL' => 'E02000193',
        '4TP' => 'E02000193',
        '4TQ' => 'E02000193',
        '4TU' => 'E02000193',
        '4TW' => 'E02000193',
        '4UD' => 'E02000193',
        '4UF' => 'E02000193',
        '4UH' => 'E02000193',
        '4UJ' => 'E02000193',
        '4UQ' => 'E02000193',
        '4WA' => 'E02000575',
        '4WB' => 'E02000575',
        '4WH' => 'E02000193',
        '4WN' => 'E02000193',
        '4WQ' => 'E02000193',
        '4WR' => 'E02000193',
        '4WS' => 'E02000972',
        '4WT' => 'E02000193',
        '4WU' => 'E02000193',
        '4WW' => 'E02000575',
        '4WX' => 'E02000193',
        '4WY' => 'E02000575',
        '4WZ' => 'E02000972',
        '4XA' => 'E02000193',
        '4XB' => 'E02000193',
        '4XD' => 'E02000193',
        '4XE' => 'E02000193',
        '4XF' => 'E02000193',
        '4XG' => 'E02000193',
        '4XH' => 'E02000193',
        '4XJ' => 'E02000193',
        '4XX' => 'E02000193',
        '4YL' => 'E02000193',
        '5AA' => 'E02000193',
        '5AB' => 'E02000193',
        '5AF' => 'E02000193',
        '5AG' => 'E02000193',
        '5AH' => 'E02000193',
        '5AJ' => 'E02000193',
        '5AN' => 'E02000193',
        '5AP' => 'E02000193',
        '5AS' => 'E02000193',
        '5AT' => 'E02000193',
        '5AU' => 'E02000193',
        '5AX' => 'E02000193',
        '5AY' => 'E02000193',
        '5AZ' => 'E02000193',
        '5BA' => 'E02000193',
        '5BB' => 'E02000193',
        '5BG' => 'E02000193',
        '5BH' => 'E02000193',
        '5BJ' => 'E02000193',
        '5BN' => 'E02000193',
        '5BP' => 'E02000193',
        '5BQ' => 'E02000193',
        '5BS' => 'E02000193',
        '5BX' => 'E02000193',
        '5BZ' => 'E02000193',
        '5DA' => 'E02000193',
        '5DD' => 'E02000193',
        '5DF' => 'E02000193',
        '5DH' => 'E02000193',
        '5DJ' => 'E02000193',
        '5DL' => 'E02000193',
        '5DP' => 'E02000193',
        '5DQ' => 'E02000193',
        '5DR' => 'E02000193',
        '5DU' => 'E02000193',
        '5DW' => 'E02000193',
        '5DX' => 'E02000193',
        '5DY' => 'E02000193',
        '5DZ' => 'E02000193',
        '5EA' => 'E02000193',
        '5EB' => 'E02000193',
        '5EF' => 'E02000193',
        '5EJ' => 'E02000193',
        '5EL' => 'E02000001',
        '5EN' => 'E02000193',
        '5EP' => 'E02000193',
        '5EQ' => 'E02000193',
        '5ES' => 'E02000193',
        '5ET' => 'E02000193',
        '5EU' => 'E02000193',
        '5EY' => 'E02000193',
        '5HD' => 'E02000001',
        '5HE' => 'E02000001',
        '5HG' => 'E02000193',
        '5HH' => 'E02000193',
        '5HJ' => 'E02000001',
        '5HP' => 'E02000193',
        '5HR' => 'E02000001',
        '5HT' => 'E02000193',
        '5HX' => 'E02000001',
        '5HZ' => 'E02000001',
        '5JA' => 'E02000193',
        '5JD' => 'E02000193',
        '5JF' => 'E02000193',
        '5JH' => 'E02000193',
        '5JJ' => 'E02000193',
        '5JL' => 'E02000193',
        '5JN' => 'E02000193',
        '5JP' => 'E02000193',
        '5JQ' => 'E02000193',
        '5JR' => 'E02000192',
        '5JT' => 'E02000193',
        '5JU' => 'E02000001',
        '5JZ' => 'E02000001',
        '5LA' => 'E02000001',
        '5LB' => 'E02000001',
        '5LF' => 'E02000001',
        '5LH' => 'E02000193',
        '5LJ' => 'E02000193',
        '5LL' => 'E02000193',
        '5LN' => 'E02000193',
        '5LP' => 'E02000193',
        '5LQ' => 'E02000193',
        '5LR' => 'E02000193',
        '5LS' => 'E02000193',
        '5LU' => 'E02000193',
        '5LW' => 'E02000193',
        '5LX' => 'E02000193',
        '5LY' => 'E02000193',
        '5NB' => 'E02000001',
        '5ND' => 'E02000001',
        '5NR' => 'E02000193',
        '5NT' => 'E02000193',
        '5PA' => 'E02000193',
        '5PB' => 'E02000972',
        '5WZ' => 'E02000193',
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
