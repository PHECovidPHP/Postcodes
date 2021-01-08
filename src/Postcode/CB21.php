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
final class CB21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003790',
        '4AB' => 'E02003790',
        '4AD' => 'E02003790',
        '4AE' => 'E02003790',
        '4AF' => 'E02003790',
        '4AG' => 'E02003790',
        '4AH' => 'E02003790',
        '4AL' => 'E02003790',
        '4AN' => 'E02003790',
        '4AP' => 'E02003790',
        '4AQ' => 'E02003790',
        '4DG' => 'E02003790',
        '4DH' => 'E02003790',
        '4DJ' => 'E02003790',
        '4DL' => 'E02003790',
        '4DP' => 'E02003790',
        '4DS' => 'E02003790',
        '4DT' => 'E02003790',
        '4DU' => 'E02003790',
        '4DW' => 'E02003790',
        '4DX' => 'E02003790',
        '4DY' => 'E02003790',
        '4DZ' => 'E02003790',
        '4EA' => 'E02003790',
        '4EB' => 'E02003790',
        '4ED' => 'E02003790',
        '4EE' => 'E02003790',
        '4EF' => 'E02003790',
        '4EG' => 'E02003790',
        '4EH' => 'E02003790',
        '4EJ' => 'E02003790',
        '4EL' => 'E02003790',
        '4EN' => 'E02003790',
        '4EP' => 'E02003790',
        '4EQ' => 'E02003790',
        '4ER' => 'E02003790',
        '4ES' => 'E02003790',
        '4EU' => 'E02003790',
        '4EW' => 'E02003790',
        '4EZ' => 'E02003790',
        '4FD' => 'E02003790',
        '4FL' => 'E02003724',
        '4HA' => 'E02003790',
        '4HB' => 'E02003790',
        '4HD' => 'E02003790',
        '4HE' => 'E02003790',
        '4HF' => 'E02003790',
        '4HG' => 'E02003790',
        '4HH' => 'E02003790',
        '4HJ' => 'E02003790',
        '4HL' => 'E02003790',
        '4HP' => 'E02003790',
        '4HQ' => 'E02003790',
        '4HS' => 'E02003790',
        '4HT' => 'E02003790',
        '4HU' => 'E02003790',
        '4HX' => 'E02003790',
        '4HY' => 'E02003790',
        '4JA' => 'E02003790',
        '4JB' => 'E02003790',
        '4JD' => 'E02003790',
        '4JE' => 'E02003790',
        '4JF' => 'E02003790',
        '4JG' => 'E02003790',
        '4JH' => 'E02003790',
        '4JJ' => 'E02003790',
        '4JL' => 'E02003790',
        '4JN' => 'E02003790',
        '4JP' => 'E02003790',
        '4JQ' => 'E02003790',
        '4JR' => 'E02003790',
        '4JS' => 'E02003790',
        '4JT' => 'E02003790',
        '4JW' => 'E02003790',
        '4JX' => 'E02003790',
        '4JY' => 'E02003790',
        '4JZ' => 'E02003790',
        '4LA' => 'E02003790',
        '4LB' => 'E02003790',
        '4LD' => 'E02003790',
        '4LE' => 'E02003790',
        '4LF' => 'E02003790',
        '4LG' => 'E02003790',
        '4LH' => 'E02003790',
        '4LJ' => 'E02003790',
        '4LL' => 'E02003790',
        '4LN' => 'E02003790',
        '4LP' => 'E02003790',
        '4LQ' => 'E02003790',
        '4LR' => 'E02003790',
        '4LS' => 'E02003790',
        '4LT' => 'E02003790',
        '4LU' => 'E02003790',
        '4LW' => 'E02003790',
        '4LX' => 'E02003790',
        '4LY' => 'E02003790',
        '4LZ' => 'E02003790',
        '4NA' => 'E02003790',
        '4NB' => 'E02003790',
        '4ND' => 'E02003790',
        '4NE' => 'E02003790',
        '4NF' => 'E02003790',
        '4NG' => 'E02003790',
        '4NH' => 'E02003790',
        '4NJ' => 'E02004591',
        '4NL' => 'E02003790',
        '4NN' => 'E02003790',
        '4NP' => 'E02003790',
        '4NQ' => 'E02003790',
        '4NR' => 'E02003790',
        '4NS' => 'E02003790',
        '4NT' => 'E02003790',
        '4NU' => 'E02004591',
        '4NW' => 'E02003790',
        '4NX' => 'E02004591',
        '4NY' => 'E02004591',
        '4NZ' => 'E02004591',
        '4PA' => 'E02004591',
        '4PB' => 'E02004591',
        '4PD' => 'E02004591',
        '4PE' => 'E02004591',
        '4PF' => 'E02004591',
        '4PG' => 'E02004591',
        '4PH' => 'E02004591',
        '4PL' => 'E02003790',
        '4PN' => 'E02003790',
        '4PP' => 'E02003790',
        '4PQ' => 'E02004591',
        '4PR' => 'E02003790',
        '4PS' => 'E02003790',
        '4PT' => 'E02003790',
        '4PW' => 'E02003790',
        '4PY' => 'E02003790',
        '4QA' => 'E02003790',
        '4QB' => 'E02003790',
        '4QD' => 'E02003790',
        '4QE' => 'E02003790',
        '4QF' => 'E02003790',
        '4QG' => 'E02003790',
        '4QH' => 'E02003790',
        '4QN' => 'E02003790',
        '4QP' => 'E02003790',
        '4QQ' => 'E02003790',
        '4QR' => 'E02003790',
        '4QS' => 'E02003790',
        '4QT' => 'E02003790',
        '4QU' => 'E02003790',
        '4QX' => 'E02003790',
        '4QY' => 'E02003790',
        '4QZ' => 'E02003790',
        '4RA' => 'E02003790',
        '4RB' => 'E02003790',
        '4RD' => 'E02003790',
        '4RE' => 'E02003790',
        '4RF' => 'E02003790',
        '4RG' => 'E02003790',
        '4RH' => 'E02003790',
        '4RJ' => 'E02003790',
        '4RL' => 'E02003724',
        '4RN' => 'E02003790',
        '4RP' => 'E02003790',
        '4RQ' => 'E02003790',
        '4RR' => 'E02003790',
        '4RS' => 'E02003790',
        '4RT' => 'E02003790',
        '4RU' => 'E02003790',
        '4RW' => 'E02003790',
        '4RX' => 'E02003790',
        '4RY' => 'E02003790',
        '4RZ' => 'E02003790',
        '4SA' => 'E02003790',
        '4SB' => 'E02003790',
        '4SD' => 'E02003790',
        '4SF' => 'E02003790',
        '4SH' => 'E02003790',
        '4SJ' => 'E02003790',
        '4SN' => 'E02003790',
        '4SP' => 'E02003790',
        '4SR' => 'E02003790',
        '4SS' => 'E02003790',
        '4ST' => 'E02003790',
        '4SU' => 'E02003790',
        '4SW' => 'E02003790',
        '4SX' => 'E02003790',
        '4SY' => 'E02003790',
        '4SZ' => 'E02003790',
        '4TA' => 'E02003790',
        '4TB' => 'E02003790',
        '4TD' => 'E02003790',
        '4TE' => 'E02003790',
        '4TF' => 'E02003790',
        '4TG' => 'E02003790',
        '4TH' => 'E02003790',
        '4TJ' => 'E02003790',
        '4TL' => 'E02003790',
        '4TN' => 'E02003790',
        '4TP' => 'E02003790',
        '4TQ' => 'E02003790',
        '4TR' => 'E02003790',
        '4TT' => 'E02003790',
        '4TW' => 'E02003790',
        '4UA' => 'E02003790',
        '4UB' => 'E02003790',
        '4UD' => 'E02003790',
        '4UE' => 'E02003790',
        '4UF' => 'E02003790',
        '4UG' => 'E02003790',
        '4UH' => 'E02003790',
        '4UJ' => 'E02003790',
        '4UL' => 'E02003790',
        '4UN' => 'E02003790',
        '4UP' => 'E02003790',
        '4UQ' => 'E02003790',
        '4UR' => 'E02003790',
        '4US' => 'E02003790',
        '4UT' => 'E02003790',
        '4UU' => 'E02003790',
        '4UW' => 'E02003790',
        '4UX' => 'E02003790',
        '4UY' => 'E02003790',
        '4UZ' => 'E02003790',
        '4WA' => 'E02003790',
        '4WB' => 'E02003790',
        '4WD' => 'E02003790',
        '4WE' => 'E02003790',
        '4WF' => 'E02003790',
        '4WG' => 'E02003790',
        '4WH' => 'E02003790',
        '4WJ' => 'E02003790',
        '4WL' => 'E02003790',
        '4WN' => 'E02003790',
        '4WP' => 'E02003790',
        '4WQ' => 'E02003790',
        '4WR' => 'E02003790',
        '4WS' => 'E02003790',
        '4WT' => 'E02003724',
        '4WU' => 'E02003790',
        '4WW' => 'E02003724',
        '4WX' => 'E02003790',
        '4WY' => 'E02003790',
        '4WZ' => 'E02003790',
        '4XA' => 'E02003790',
        '4XB' => 'E02003790',
        '4XD' => 'E02003790',
        '4XE' => 'E02003790',
        '4XF' => 'E02003790',
        '4XG' => 'E02003790',
        '4XH' => 'E02003790',
        '4XJ' => 'E02003790',
        '4XL' => 'E02003790',
        '4XN' => 'E02003790',
        '4XP' => 'E02003790',
        '4XQ' => 'E02003790',
        '4XR' => 'E02003790',
        '4XS' => 'E02003790',
        '4XT' => 'E02003790',
        '4XU' => 'E02003790',
        '4XW' => 'E02003790',
        '4XX' => 'E02003790',
        '4YL' => 'E02003790',
        '4YN' => 'E02003790',
        '4YP' => 'E02003790',
        '4YR' => 'E02003790',
        '4YS' => 'E02003790',
        '4YT' => 'E02003790',
        '4YW' => 'E02003790',
        '4YZ' => 'E02003790',
        '4ZE' => 'E02003724',
        '4ZH' => 'E02003724',
        '4ZJ' => 'E02003724',
        '4ZP' => 'E02003790',
        '4ZQ' => 'E02003790',
        '4ZU' => 'E02003724',
        '4ZW' => 'E02003724',
        '5AA' => 'E02003785',
        '5AB' => 'E02003785',
        '5AD' => 'E02003785',
        '5AE' => 'E02003785',
        '5AF' => 'E02003785',
        '5AG' => 'E02003785',
        '5AH' => 'E02003785',
        '5AJ' => 'E02003785',
        '5AL' => 'E02003785',
        '5AN' => 'E02003785',
        '5BE' => 'E02003728',
        '5BF' => 'E02003785',
        '5BG' => 'E02003785',
        '5BH' => 'E02003785',
        '5BJ' => 'E02003785',
        '5BL' => 'E02003785',
        '5BN' => 'E02003785',
        '5BQ' => 'E02003785',
        '5BS' => 'E02003785',
        '5BT' => 'E02003785',
        '5BU' => 'E02003785',
        '5BW' => 'E02003785',
        '5BX' => 'E02003785',
        '5BY' => 'E02003785',
        '5BZ' => 'E02003785',
        '5DA' => 'E02003785',
        '5DB' => 'E02003785',
        '5DD' => 'E02003785',
        '5DF' => 'E02003785',
        '5DG' => 'E02003724',
        '5DH' => 'E02003785',
        '5DJ' => 'E02003785',
        '5DL' => 'E02003785',
        '5DN' => 'E02003785',
        '5DP' => 'E02003785',
        '5DQ' => 'E02003785',
        '5DR' => 'E02003785',
        '5DS' => 'E02003785',
        '5DT' => 'E02003785',
        '5DU' => 'E02003785',
        '5DW' => 'E02003785',
        '5DX' => 'E02003785',
        '5DY' => 'E02003785',
        '5DZ' => 'E02003785',
        '5EA' => 'E02003785',
        '5EB' => 'E02003785',
        '5ED' => 'E02003785',
        '5EE' => 'E02003785',
        '5EF' => 'E02003785',
        '5EG' => 'E02003785',
        '5EH' => 'E02003785',
        '5EJ' => 'E02003785',
        '5EN' => 'E02003790',
        '5EP' => 'E02003785',
        '5EQ' => 'E02003785',
        '5ER' => 'E02003785',
        '5ES' => 'E02003785',
        '5ET' => 'E02003785',
        '5EU' => 'E02003785',
        '5EW' => 'E02003785',
        '5EX' => 'E02003785',
        '5EY' => 'E02003785',
        '5EZ' => 'E02003785',
        '5FJ' => 'E02003785',
        '5GA' => 'E02003785',
        '5GT' => 'E02003785',
        '5HA' => 'E02003785',
        '5HB' => 'E02003785',
        '5HD' => 'E02003785',
        '5HE' => 'E02003785',
        '5HF' => 'E02003785',
        '5HG' => 'E02003785',
        '5HH' => 'E02003785',
        '5HJ' => 'E02003785',
        '5HL' => 'E02003785',
        '5HN' => 'E02003785',
        '5HP' => 'E02003785',
        '5HQ' => 'E02003785',
        '5HR' => 'E02003785',
        '5HS' => 'E02003785',
        '5HT' => 'E02003785',
        '5HU' => 'E02003785',
        '5HW' => 'E02003785',
        '5HX' => 'E02003785',
        '5HY' => 'E02003785',
        '5HZ' => 'E02003785',
        '5JA' => 'E02003785',
        '5JB' => 'E02003785',
        '5JD' => 'E02003785',
        '5JE' => 'E02003785',
        '5JF' => 'E02003785',
        '5JG' => 'E02003785',
        '5JH' => 'E02003785',
        '5JJ' => 'E02003785',
        '5JL' => 'E02003785',
        '5JN' => 'E02003785',
        '5JP' => 'E02003785',
        '5JQ' => 'E02003785',
        '5JS' => 'E02003785',
        '5JT' => 'E02003785',
        '5JU' => 'E02003724',
        '5JW' => 'E02003785',
        '5JX' => 'E02003724',
        '5JY' => 'E02003785',
        '5JZ' => 'E02003785',
        '5LA' => 'E02003785',
        '5LB' => 'E02003785',
        '5LD' => 'E02003785',
        '5LE' => 'E02003785',
        '5LF' => 'E02003785',
        '5LG' => 'E02003785',
        '5LJ' => 'E02003785',
        '5LP' => 'E02003790',
        '5LQ' => 'E02003785',
        '5LR' => 'E02003790',
        '5LS' => 'E02003790',
        '5LT' => 'E02003790',
        '5LU' => 'E02003790',
        '5LY' => 'E02003790',
        '5NA' => 'E02003790',
        '5NB' => 'E02003790',
        '5NE' => 'E02003790',
        '5NF' => 'E02003790',
        '5NH' => 'E02003790',
        '5NJ' => 'E02003790',
        '5NL' => 'E02003790',
        '5NP' => 'E02003790',
        '5NQ' => 'E02003790',
        '5NR' => 'E02003790',
        '5NS' => 'E02003790',
        '5NT' => 'E02003790',
        '5NU' => 'E02003790',
        '5NX' => 'E02003790',
        '5NY' => 'E02003790',
        '5NZ' => 'E02003790',
        '5PA' => 'E02003790',
        '5PB' => 'E02003790',
        '5PE' => 'E02003790',
        '5PF' => 'E02003790',
        '5PH' => 'E02003790',
        '5PP' => 'E02003724',
        '5RB' => 'E02003728',
        '5RG' => 'E02003724',
        '5RH' => 'E02003785',
        '5RJ' => 'E02003785',
        '5RN' => 'E02003790',
        '5RP' => 'E02003724',
        '5RZ' => 'E02003724',
        '5TA' => 'E02003785',
        '5WA' => 'E02003790',
        '5WB' => 'E02003790',
        '5WD' => 'E02003790',
        '5WE' => 'E02003728',
        '5WF' => 'E02003728',
        '5WR' => 'E02003790',
        '5WS' => 'E02003790',
        '5WT' => 'E02003790',
        '5WU' => 'E02003724',
        '5WW' => 'E02003724',
        '5WX' => 'E02003790',
        '5WY' => 'E02003790',
        '5WZ' => 'E02003724',
        '5XA' => 'E02003785',
        '5XB' => 'E02003785',
        '5XE' => 'E02003785',
        '5XG' => 'E02003785',
        '5XH' => 'E02003785',
        '5XN' => 'E02003785',
        '5XY' => 'E02003728',
        '5XZ' => 'E02003790',
        '6AA' => 'E02003791',
        '6AB' => 'E02003791',
        '6AD' => 'E02003791',
        '6AE' => 'E02003791',
        '6AF' => 'E02003791',
        '6AG' => 'E02003791',
        '6AH' => 'E02003791',
        '6AJ' => 'E02003791',
        '6AL' => 'E02003791',
        '6AN' => 'E02003791',
        '6AP' => 'E02003791',
        '6AQ' => 'E02003791',
        '6AR' => 'E02003791',
        '6AS' => 'E02003791',
        '6AT' => 'E02003791',
        '6AU' => 'E02003791',
        '6AW' => 'E02003791',
        '6AX' => 'E02003791',
        '6AY' => 'E02003790',
        '6AZ' => 'E02003791',
        '6BA' => 'E02003791',
        '6BB' => 'E02003791',
        '6BD' => 'E02003791',
        '6BE' => 'E02003791',
        '6BF' => 'E02003728',
        '6BG' => 'E02003791',
        '6BH' => 'E02003791',
        '6BJ' => 'E02003791',
        '6BL' => 'E02003791',
        '6BN' => 'E02003791',
        '6BP' => 'E02003791',
        '6BQ' => 'E02003791',
        '6BS' => 'E02003790',
        '6BT' => 'E02003790',
        '6BU' => 'E02003790',
        '6BW' => 'E02003791',
        '6BX' => 'E02003791',
        '6BY' => 'E02003790',
        '6BZ' => 'E02003790',
        '6DA' => 'E02003790',
        '6DB' => 'E02003790',
        '6DD' => 'E02003790',
        '6DE' => 'E02003790',
        '6DF' => 'E02003791',
        '6DG' => 'E02003791',
        '6DH' => 'E02003791',
        '6DJ' => 'E02003791',
        '6DQ' => 'E02003790',
        '6DR' => 'E02003790',
        '6ET' => 'E02003791',
        '6FJ' => 'E02003791',
        '6GB' => 'E02003791',
        '6GH' => 'E02003791',
        '6GP' => 'E02003791',
        '6GQ' => 'E02003791',
        '6GS' => 'E02003791',
        '6GT' => 'E02003791',
        '6GX' => 'E02003791',
        '6WA' => 'E02003728',
        '6WU' => 'E02003791',
        '6WY' => 'E02003791',
        '6WZ' => 'E02003791',
        '6XR' => 'E02003791',
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
