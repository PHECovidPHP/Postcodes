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
final class TW19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003436',
        '5AB' => 'E02003436',
        '5AD' => 'E02003436',
        '5AE' => 'E02003436',
        '5AF' => 'E02003436',
        '5AG' => 'E02003436',
        '5AH' => 'E02003436',
        '5AJ' => 'E02003436',
        '5AL' => 'E02003436',
        '5AN' => 'E02003436',
        '5AP' => 'E02003436',
        '5AQ' => 'E02003436',
        '5AR' => 'E02003436',
        '5AS' => 'E02003436',
        '5AT' => 'E02003436',
        '5AU' => 'E02006395',
        '5AW' => 'E02003436',
        '5AX' => 'E02003436',
        '5AY' => 'E02003436',
        '5AZ' => 'E02006394',
        '5BA' => 'E02003436',
        '5BB' => 'E02003431',
        '5BP' => 'E02003436',
        '5BS' => 'E02003436',
        '5BT' => 'E02003431',
        '5BU' => 'E02003436',
        '5BX' => 'E02003436',
        '5BY' => 'E02003436',
        '5BZ' => 'E02003436',
        '5DA' => 'E02003436',
        '5DB' => 'E02003436',
        '5DD' => 'E02003436',
        '5DE' => 'E02003436',
        '5DF' => 'E02003436',
        '5DG' => 'E02003436',
        '5DH' => 'E02003436',
        '5DJ' => 'E02003431',
        '5DL' => 'E02003436',
        '5DN' => 'E02003431',
        '5DP' => 'E02003436',
        '5DQ' => 'E02006395',
        '5DR' => 'E02003436',
        '5DS' => 'E02003436',
        '5DT' => 'E02003436',
        '5DU' => 'E02003436',
        '5DW' => 'E02003436',
        '5DX' => 'E02003436',
        '5DY' => 'E02003436',
        '5DZ' => 'E02003431',
        '5EE' => 'E02003436',
        '5EF' => 'E02006395',
        '5EG' => 'E02003436',
        '5EH' => 'E02003436',
        '5EJ' => 'E02003436',
        '5EL' => 'E02003436',
        '5EN' => 'E02003436',
        '5EP' => 'E02003436',
        '5EQ' => 'E02003436',
        '5ER' => 'E02003436',
        '5ES' => 'E02003436',
        '5ET' => 'E02003436',
        '5EU' => 'E02003436',
        '5EW' => 'E02003436',
        '5EX' => 'E02003436',
        '5EY' => 'E02003436',
        '5EZ' => 'E02003436',
        '5HA' => 'E02003436',
        '5HB' => 'E02003436',
        '5HD' => 'E02003436',
        '5HE' => 'E02003436',
        '5HF' => 'E02003436',
        '5HG' => 'E02003436',
        '5HQ' => 'E02003436',
        '5HY' => 'E02003436',
        '5HZ' => 'E02003436',
        '5JA' => 'E02003436',
        '5JB' => 'E02003436',
        '5JD' => 'E02003436',
        '5JE' => 'E02003436',
        '5JF' => 'E02003436',
        '5JG' => 'E02003436',
        '5JH' => 'E02003436',
        '5JJ' => 'E02003436',
        '5JL' => 'E02003436',
        '5JN' => 'E02003436',
        '5JP' => 'E02003436',
        '5JQ' => 'E02003436',
        '5JR' => 'E02003436',
        '5JS' => 'E02003436',
        '5JT' => 'E02003436',
        '5JU' => 'E02003436',
        '5JW' => 'E02003436',
        '5JX' => 'E02003436',
        '5JY' => 'E02003436',
        '5LP' => 'E02006395',
        '5LR' => 'E02003431',
        '5LS' => 'E02003431',
        '5LT' => 'E02003431',
        '5LU' => 'E02003431',
        '5LX' => 'E02003431',
        '5LY' => 'E02003431',
        '5LZ' => 'E02003431',
        '5NA' => 'E02003431',
        '5NB' => 'E02003431',
        '5ND' => 'E02003431',
        '5NE' => 'E02003431',
        '5NF' => 'E02003431',
        '5NG' => 'E02003431',
        '5NH' => 'E02003431',
        '5NJ' => 'E02003431',
        '5NL' => 'E02003436',
        '5NN' => 'E02003431',
        '5NP' => 'E02003431',
        '5NQ' => 'E02003431',
        '5NR' => 'E02003431',
        '5NS' => 'E02003431',
        '5NT' => 'E02003431',
        '5NU' => 'E02003431',
        '5NW' => 'E02003431',
        '5NX' => 'E02003431',
        '5NY' => 'E02003436',
        '5NZ' => 'E02003431',
        '5PA' => 'E02003431',
        '5PB' => 'E02003431',
        '5PD' => 'E02003431',
        '5PE' => 'E02006395',
        '5PF' => 'E02006395',
        '5PG' => 'E02003431',
        '5PH' => 'E02003431',
        '5PJ' => 'E02006395',
        '5PL' => 'E02003431',
        '5PN' => 'E02003431',
        '5PP' => 'E02003431',
        '5PQ' => 'E02003431',
        '5PR' => 'E02006395',
        '5PS' => 'E02006395',
        '5PT' => 'E02006395',
        '5PU' => 'E02006395',
        '5PW' => 'E02006395',
        '5PX' => 'E02006395',
        '5PY' => 'E02006395',
        '5PZ' => 'E02006395',
        '5QA' => 'E02006395',
        '5UE' => 'E02006395',
        '5WA' => 'E02006395',
        '5WB' => 'E02006395',
        '5WD' => 'E02006395',
        '5WE' => 'E02003431',
        '5WF' => 'E02006395',
        '5WG' => 'E02006395',
        '5WH' => 'E02006395',
        '5WN' => 'E02006395',
        '5WQ' => 'E02006395',
        '5WR' => 'E02006395',
        '5WT' => 'E02006395',
        '5WU' => 'E02006395',
        '5WW' => 'E02006395',
        '5WX' => 'E02006395',
        '5WY' => 'E02006395',
        '5WZ' => 'E02006395',
        '5XA' => 'E02006395',
        '5XB' => 'E02006395',
        '6AB' => 'E02006403',
        '6AD' => 'E02006403',
        '6AE' => 'E02006403',
        '6AF' => 'E02006403',
        '6AG' => 'E02006403',
        '6AH' => 'E02006403',
        '6AJ' => 'E02006403',
        '6AL' => 'E02006403',
        '6AN' => 'E02006403',
        '6AP' => 'E02006403',
        '6AQ' => 'E02006403',
        '6AR' => 'E02006403',
        '6AS' => 'E02006403',
        '6AT' => 'E02006403',
        '6AU' => 'E02006403',
        '6AW' => 'E02006403',
        '6AX' => 'E02006403',
        '6AY' => 'E02006403',
        '6AZ' => 'E02006403',
        '6BA' => 'E02006403',
        '6BB' => 'E02006403',
        '6BD' => 'E02006403',
        '6BE' => 'E02006403',
        '6BF' => 'E02006403',
        '6BG' => 'E02006403',
        '6BH' => 'E02006403',
        '6BJ' => 'E02006403',
        '6BL' => 'E02006403',
        '6BN' => 'E02006403',
        '6BP' => 'E02000524',
        '6BQ' => 'E02006403',
        '6BS' => 'E02006403',
        '6BT' => 'E02006403',
        '6BU' => 'E02006403',
        '6BW' => 'E02000524',
        '6BX' => 'E02006403',
        '6BY' => 'E02006403',
        '6BZ' => 'E02006403',
        '6DA' => 'E02006403',
        '6DB' => 'E02006403',
        '6DD' => 'E02006403',
        '6DW' => 'E02006403',
        '6EA' => 'E02006406',
        '6EB' => 'E02006406',
        '6ED' => 'E02006406',
        '6EE' => 'E02006406',
        '6EF' => 'E02006406',
        '6EG' => 'E02006406',
        '6EH' => 'E02006403',
        '6EJ' => 'E02006406',
        '6EL' => 'E02006403',
        '6EN' => 'E02006403',
        '6EP' => 'E02006395',
        '6EQ' => 'E02006406',
        '6EW' => 'E02006403',
        '6HA' => 'E02003436',
        '6HB' => 'E02003436',
        '6HD' => 'E02003436',
        '6HE' => 'E02003436',
        '6HF' => 'E02003436',
        '6HG' => 'E02003436',
        '6HH' => 'E02003436',
        '6HL' => 'E02003436',
        '6HN' => 'E02003436',
        '6HP' => 'E02003436',
        '6HQ' => 'E02006403',
        '6HW' => 'E02003436',
        '6WE' => 'E02006395',
        '6WQ' => 'E02003436',
        '6WT' => 'E02003436',
        '7AA' => 'E02006404',
        '7AB' => 'E02006404',
        '7AD' => 'E02006404',
        '7AE' => 'E02006404',
        '7AF' => 'E02006404',
        '7AG' => 'E02006404',
        '7AH' => 'E02006404',
        '7AJ' => 'E02006404',
        '7AL' => 'E02006404',
        '7AN' => 'E02006404',
        '7AP' => 'E02006404',
        '7AQ' => 'E02006404',
        '7AR' => 'E02006404',
        '7AS' => 'E02006404',
        '7AT' => 'E02006404',
        '7AU' => 'E02006404',
        '7AW' => 'E02006404',
        '7AX' => 'E02006404',
        '7AY' => 'E02006404',
        '7AZ' => 'E02006404',
        '7BA' => 'E02006404',
        '7BB' => 'E02006404',
        '7BD' => 'E02006404',
        '7BE' => 'E02006404',
        '7BF' => 'E02006404',
        '7BG' => 'E02006404',
        '7BH' => 'E02006404',
        '7BJ' => 'E02006404',
        '7BL' => 'E02006404',
        '7BN' => 'E02006404',
        '7BP' => 'E02006404',
        '7BQ' => 'E02006404',
        '7BS' => 'E02006404',
        '7BT' => 'E02006404',
        '7BU' => 'E02006404',
        '7BW' => 'E02006404',
        '7BX' => 'E02006403',
        '7BY' => 'E02006403',
        '7BZ' => 'E02006405',
        '7DA' => 'E02006403',
        '7DB' => 'E02006403',
        '7DD' => 'E02006404',
        '7DE' => 'E02006403',
        '7DF' => 'E02006403',
        '7DG' => 'E02006403',
        '7DH' => 'E02006403',
        '7DJ' => 'E02006404',
        '7DL' => 'E02006404',
        '7DN' => 'E02006404',
        '7DP' => 'E02006404',
        '7DQ' => 'E02006404',
        '7DR' => 'E02006404',
        '7DS' => 'E02006404',
        '7DT' => 'E02006404',
        '7DU' => 'E02006404',
        '7DW' => 'E02006404',
        '7DX' => 'E02006404',
        '7DY' => 'E02006404',
        '7DZ' => 'E02006403',
        '7EA' => 'E02006404',
        '7EB' => 'E02006404',
        '7ED' => 'E02006404',
        '7EE' => 'E02006403',
        '7EF' => 'E02006403',
        '7EG' => 'E02006403',
        '7EH' => 'E02006403',
        '7EJ' => 'E02006404',
        '7EL' => 'E02006404',
        '7EN' => 'E02006404',
        '7EP' => 'E02006404',
        '7EQ' => 'E02006403',
        '7ER' => 'E02006404',
        '7ES' => 'E02006404',
        '7ET' => 'E02006404',
        '7EU' => 'E02006403',
        '7EW' => 'E02006403',
        '7EX' => 'E02006403',
        '7EY' => 'E02006403',
        '7EZ' => 'E02006403',
        '7FA' => 'E02006403',
        '7FB' => 'E02006404',
        '7FE' => 'E02006404',
        '7FF' => 'E02006404',
        '7FG' => 'E02006405',
        '7FH' => 'E02006405',
        '7FJ' => 'E02006404',
        '7FL' => 'E02006404',
        '7FN' => 'E02006404',
        '7GS' => 'E02006403',
        '7HA' => 'E02006403',
        '7HB' => 'E02006403',
        '7HD' => 'E02006403',
        '7HE' => 'E02006404',
        '7HF' => 'E02006404',
        '7HG' => 'E02006404',
        '7HH' => 'E02006404',
        '7HJ' => 'E02006404',
        '7HL' => 'E02006403',
        '7HN' => 'E02006404',
        '7HP' => 'E02006404',
        '7HQ' => 'E02006404',
        '7HR' => 'E02006404',
        '7HS' => 'E02006404',
        '7HT' => 'E02006404',
        '7HU' => 'E02006404',
        '7HW' => 'E02006404',
        '7HX' => 'E02006404',
        '7HY' => 'E02006403',
        '7HZ' => 'E02006404',
        '7JA' => 'E02006403',
        '7JB' => 'E02006403',
        '7JD' => 'E02006403',
        '7JE' => 'E02006403',
        '7JF' => 'E02006403',
        '7JG' => 'E02006403',
        '7JH' => 'E02006403',
        '7JJ' => 'E02006403',
        '7JL' => 'E02006403',
        '7JN' => 'E02006403',
        '7JP' => 'E02006405',
        '7JQ' => 'E02006403',
        '7JR' => 'E02006403',
        '7JS' => 'E02006403',
        '7JT' => 'E02006403',
        '7JU' => 'E02006403',
        '7JW' => 'E02006403',
        '7JX' => 'E02006403',
        '7JY' => 'E02006403',
        '7JZ' => 'E02006403',
        '7LA' => 'E02006403',
        '7LB' => 'E02006403',
        '7LD' => 'E02006403',
        '7LE' => 'E02000548',
        '7LF' => 'E02006403',
        '7LG' => 'E02006403',
        '7LH' => 'E02006403',
        '7LJ' => 'E02006403',
        '7LL' => 'E02006403',
        '7LN' => 'E02006403',
        '7LP' => 'E02006403',
        '7LQ' => 'E02000548',
        '7LR' => 'E02006403',
        '7LS' => 'E02006403',
        '7LT' => 'E02006403',
        '7LU' => 'E02006403',
        '7LW' => 'E02006403',
        '7LX' => 'E02006403',
        '7LY' => 'E02006404',
        '7LZ' => 'E02000548',
        '7NA' => 'E02006403',
        '7NB' => 'E02006403',
        '7ND' => 'E02006395',
        '7NE' => 'E02006403',
        '7NF' => 'E02006403',
        '7NG' => 'E02006403',
        '7NH' => 'E02000548',
        '7NJ' => 'E02006403',
        '7NL' => 'E02000548',
        '7NN' => 'E02006403',
        '7NP' => 'E02006403',
        '7NQ' => 'E02006403',
        '7NR' => 'E02006403',
        '7NS' => 'E02006403',
        '7NT' => 'E02006403',
        '7NU' => 'E02006403',
        '7NW' => 'E02006403',
        '7NX' => 'E02006403',
        '7NY' => 'E02006403',
        '7NZ' => 'E02006404',
        '7PA' => 'E02006403',
        '7PB' => 'E02006403',
        '7PD' => 'E02006403',
        '7PE' => 'E02006403',
        '7PF' => 'E02006403',
        '7PG' => 'E02006403',
        '7PH' => 'E02006403',
        '7PJ' => 'E02006403',
        '7PL' => 'E02006403',
        '7PN' => 'E02006403',
        '7PP' => 'E02006403',
        '7PQ' => 'E02006403',
        '7PR' => 'E02006403',
        '7PS' => 'E02006403',
        '7PT' => 'E02006403',
        '7PU' => 'E02006403',
        '7PW' => 'E02006403',
        '7PX' => 'E02006403',
        '7PY' => 'E02006403',
        '7PZ' => 'E02006404',
        '7QA' => 'E02006395',
        '7QB' => 'E02006403',
        '7QD' => 'E02006403',
        '7QE' => 'E02006404',
        '7QF' => 'E02006404',
        '7QG' => 'E02006404',
        '7QH' => 'E02006404',
        '7QJ' => 'E02006403',
        '7QL' => 'E02006403',
        '7QN' => 'E02006403',
        '7QP' => 'E02006403',
        '7QQ' => 'E02006403',
        '7QR' => 'E02006404',
        '7QS' => 'E02006403',
        '7QT' => 'E02006404',
        '7QU' => 'E02006404',
        '7QW' => 'E02006403',
        '7QX' => 'E02006404',
        '7QY' => 'E02006395',
        '7QZ' => 'E02006404',
        '7RA' => 'E02006404',
        '7RB' => 'E02006404',
        '7RD' => 'E02006404',
        '7RE' => 'E02006404',
        '7RF' => 'E02006404',
        '7RG' => 'E02006404',
        '7RH' => 'E02006404',
        '7RJ' => 'E02006404',
        '7RL' => 'E02006403',
        '7RN' => 'E02006403',
        '7RP' => 'E02006404',
        '7RQ' => 'E02006404',
        '7RT' => 'E02006404',
        '7RU' => 'E02006404',
        '7RW' => 'E02006404',
        '7RX' => 'E02006404',
        '7RY' => 'E02006404',
        '7RZ' => 'E02006404',
        '7SA' => 'E02006404',
        '7SB' => 'E02006404',
        '7SD' => 'E02006404',
        '7SE' => 'E02006404',
        '7SF' => 'E02006404',
        '7SG' => 'E02006404',
        '7SH' => 'E02006404',
        '7SJ' => 'E02006404',
        '7SL' => 'E02006404',
        '7SN' => 'E02006404',
        '7SP' => 'E02006404',
        '7SQ' => 'E02006404',
        '7SR' => 'E02006404',
        '7SS' => 'E02006404',
        '7ST' => 'E02006404',
        '7SU' => 'E02006404',
        '7SW' => 'E02006404',
        '7SX' => 'E02006404',
        '7SY' => 'E02006404',
        '7SZ' => 'E02006404',
        '7TA' => 'E02006404',
        '7TB' => 'E02006404',
        '7TD' => 'E02006404',
        '7TE' => 'E02006404',
        '7TF' => 'E02006404',
        '7TG' => 'E02006404',
        '7TH' => 'E02006404',
        '7TJ' => 'E02006404',
        '7TL' => 'E02006404',
        '7TN' => 'E02006395',
        '7TP' => 'E02006404',
        '7TQ' => 'E02006395',
        '7TR' => 'E02006404',
        '7TS' => 'E02006404',
        '7TT' => 'E02006404',
        '7TU' => 'E02006404',
        '7TW' => 'E02006404',
        '7TX' => 'E02006404',
        '7TY' => 'E02006395',
        '7TZ' => 'E02006404',
        '7UA' => 'E02006404',
        '7UB' => 'E02006404',
        '7UD' => 'E02006403',
        '7UE' => 'E02006403',
        '7UF' => 'E02006403',
        '7UG' => 'E02006403',
        '7UH' => 'E02006403',
        '7UJ' => 'E02006403',
        '7UL' => 'E02006403',
        '7UN' => 'E02006404',
        '7UP' => 'E02006395',
        '7UQ' => 'E02006403',
        '7UR' => 'E02006404',
        '7US' => 'E02006403',
        '7UT' => 'E02006403',
        '7UU' => 'E02006395',
        '7UW' => 'E02006404',
        '7UX' => 'E02006404',
        '7UY' => 'E02006395',
        '7UZ' => 'E02006395',
        '7WA' => 'E02006395',
        '7WB' => 'E02006395',
        '7WD' => 'E02006395',
        '7WF' => 'E02006395',
        '7WP' => 'E02006395',
        '7WQ' => 'E02006395',
        '7WT' => 'E02006395',
        '7WZ' => 'E02006395',
        '7XA' => 'E02006395',
        '7XB' => 'E02006395',
        '7XD' => 'E02006395',
        '7XE' => 'E02006395',
        '7XF' => 'E02006395',
        '7XQ' => 'E02006395',
        '7XT' => 'E02006395',
        '7XZ' => 'E02006395',
        '7YA' => 'E02006395',
        '7YZ' => 'E02006395',
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