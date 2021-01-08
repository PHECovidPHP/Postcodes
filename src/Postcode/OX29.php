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
final class OX29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006001',
        '0AB' => 'E02005999',
        '0AD' => 'E02005999',
        '0AE' => 'E02005999',
        '0AG' => 'E02005999',
        '0AH' => 'E02005999',
        '0AJ' => 'E02005999',
        '0AP' => 'E02005999',
        '0AQ' => 'E02005999',
        '0AR' => 'E02005999',
        '0BA' => 'E02005999',
        '0DN' => 'E02006002',
        '0NA' => 'E02005999',
        '0NB' => 'E02006001',
        '0ND' => 'E02005999',
        '0NE' => 'E02006004',
        '0PA' => 'E02006002',
        '0QS' => 'E02005999',
        '0RA' => 'E02005999',
        '0RB' => 'E02005999',
        '0RD' => 'E02006001',
        '0RE' => 'E02005999',
        '0RF' => 'E02006001',
        '0RG' => 'E02005999',
        '0RH' => 'E02005999',
        '0RJ' => 'E02005999',
        '0RL' => 'E02006001',
        '0RN' => 'E02005999',
        '0RP' => 'E02005999',
        '0RQ' => 'E02005999',
        '0RR' => 'E02005999',
        '0RS' => 'E02005999',
        '0RT' => 'E02005999',
        '0RU' => 'E02005999',
        '0RW' => 'E02005999',
        '0RX' => 'E02006004',
        '0RY' => 'E02005999',
        '0RZ' => 'E02005999',
        '0SA' => 'E02005999',
        '0SB' => 'E02005999',
        '0SD' => 'E02005999',
        '0SE' => 'E02005999',
        '0SF' => 'E02005999',
        '0SG' => 'E02005999',
        '0SH' => 'E02005999',
        '0SJ' => 'E02006004',
        '0SL' => 'E02005999',
        '0SN' => 'E02005999',
        '0SP' => 'E02005999',
        '0SQ' => 'E02005999',
        '0SR' => 'E02005999',
        '0SS' => 'E02005999',
        '0ST' => 'E02005999',
        '0SU' => 'E02006001',
        '0SW' => 'E02005999',
        '0SX' => 'E02005999',
        '0SY' => 'E02006001',
        '0SZ' => 'E02005999',
        '0TA' => 'E02006004',
        '0TB' => 'E02006001',
        '0WA' => 'E02006002',
        '0WB' => 'E02006002',
        '0WJ' => 'E02006004',
        '0WZ' => 'E02006002',
        '0XJ' => 'E02006002',
        '0XU' => 'E02006002',
        '0XZ' => 'E02006002',
        '0YA' => 'E02006001',
        '0YB' => 'E02006001',
        '0YD' => 'E02006001',
        '0YE' => 'E02006001',
        '0YF' => 'E02006001',
        '0YG' => 'E02006001',
        '0YL' => 'E02006001',
        '0YN' => 'E02006001',
        '0ZJ' => 'E02006002',
        '0ZY' => 'E02006002',
        '4AA' => 'E02006003',
        '4AB' => 'E02006003',
        '4AD' => 'E02005998',
        '4AE' => 'E02006003',
        '4AF' => 'E02006003',
        '4AG' => 'E02006003',
        '4AH' => 'E02006003',
        '4AJ' => 'E02006003',
        '4AL' => 'E02006003',
        '4AN' => 'E02006003',
        '4AP' => 'E02006003',
        '4AQ' => 'E02006003',
        '4AR' => 'E02005998',
        '4AS' => 'E02006003',
        '4AT' => 'E02006003',
        '4AU' => 'E02006003',
        '4AW' => 'E02006003',
        '4AX' => 'E02005998',
        '4AY' => 'E02005998',
        '4AZ' => 'E02005998',
        '4BA' => 'E02005978',
        '4BB' => 'E02005978',
        '4BD' => 'E02006003',
        '4BE' => 'E02006003',
        '4BF' => 'E02006003',
        '4BG' => 'E02006003',
        '4BH' => 'E02006003',
        '4BJ' => 'E02005978',
        '4BL' => 'E02005978',
        '4BN' => 'E02005998',
        '4BP' => 'E02006003',
        '4BQ' => 'E02006003',
        '4BS' => 'E02006003',
        '4BT' => 'E02006003',
        '4BU' => 'E02005998',
        '4BW' => 'E02005998',
        '4BX' => 'E02005978',
        '4BY' => 'E02005978',
        '4BZ' => 'E02005978',
        '4DA' => 'E02005978',
        '4DB' => 'E02005998',
        '4DD' => 'E02005998',
        '4DE' => 'E02005998',
        '4DF' => 'E02005998',
        '4DG' => 'E02005998',
        '4DH' => 'E02005998',
        '4DJ' => 'E02005998',
        '4DL' => 'E02005998',
        '4DN' => 'E02005998',
        '4DP' => 'E02005998',
        '4DQ' => 'E02005998',
        '4DR' => 'E02005998',
        '4DS' => 'E02005998',
        '4DT' => 'E02005998',
        '4DU' => 'E02005978',
        '4DW' => 'E02005998',
        '4DX' => 'E02005998',
        '4DY' => 'E02005998',
        '4DZ' => 'E02005998',
        '4EA' => 'E02005998',
        '4EB' => 'E02005939',
        '4ED' => 'E02005998',
        '4EE' => 'E02006003',
        '4EF' => 'E02006003',
        '4EG' => 'E02005998',
        '4EH' => 'E02005998',
        '4EJ' => 'E02005998',
        '4EL' => 'E02005998',
        '4EN' => 'E02005998',
        '4EP' => 'E02005998',
        '4EQ' => 'E02005998',
        '4ER' => 'E02005998',
        '4ES' => 'E02005998',
        '4ET' => 'E02005998',
        '4EU' => 'E02005998',
        '4EW' => 'E02005998',
        '4EX' => 'E02006003',
        '4EY' => 'E02006003',
        '4EZ' => 'E02005998',
        '4FA' => 'E02005998',
        '4FB' => 'E02006002',
        '4FD' => 'E02005998',
        '4FE' => 'E02006003',
        '4FF' => 'E02006003',
        '4FG' => 'E02006003',
        '4FH' => 'E02006002',
        '4FJ' => 'E02006003',
        '4FL' => 'E02005939',
        '4FN' => 'E02005998',
        '4FP' => 'E02006003',
        '4FQ' => 'E02005998',
        '4FR' => 'E02005998',
        '4FS' => 'E02005998',
        '4FT' => 'E02005998',
        '4FU' => 'E02005998',
        '4FY' => 'E02006003',
        '4FZ' => 'E02006003',
        '4GA' => 'E02006002',
        '4HA' => 'E02005998',
        '4HB' => 'E02005998',
        '4HD' => 'E02005998',
        '4HE' => 'E02005998',
        '4HF' => 'E02005998',
        '4HG' => 'E02005998',
        '4HH' => 'E02005998',
        '4HJ' => 'E02005998',
        '4HL' => 'E02005998',
        '4HN' => 'E02005998',
        '4HP' => 'E02005998',
        '4HQ' => 'E02005998',
        '4HR' => 'E02005998',
        '4HS' => 'E02005998',
        '4HT' => 'E02005998',
        '4HU' => 'E02005998',
        '4HW' => 'E02005998',
        '4HX' => 'E02005998',
        '4HY' => 'E02006003',
        '4HZ' => 'E02005998',
        '4JA' => 'E02006003',
        '4JB' => 'E02006003',
        '4JD' => 'E02005998',
        '4JE' => 'E02006003',
        '4JG' => 'E02006003',
        '4JH' => 'E02005978',
        '4JJ' => 'E02006003',
        '4JL' => 'E02005998',
        '4JN' => 'E02006003',
        '4JP' => 'E02006003',
        '4JQ' => 'E02006003',
        '4JR' => 'E02006003',
        '4JS' => 'E02006003',
        '4JU' => 'E02006003',
        '4JW' => 'E02005998',
        '4JX' => 'E02006003',
        '4JY' => 'E02006003',
        '4JZ' => 'E02006003',
        '4LA' => 'E02005998',
        '4LB' => 'E02006003',
        '4LD' => 'E02006003',
        '4LE' => 'E02005998',
        '4LF' => 'E02005998',
        '4LG' => 'E02006003',
        '4LH' => 'E02005998',
        '4LJ' => 'E02006003',
        '4LL' => 'E02006003',
        '4LN' => 'E02006003',
        '4LP' => 'E02006003',
        '4LR' => 'E02006003',
        '4LS' => 'E02006003',
        '4LT' => 'E02006003',
        '4LU' => 'E02006003',
        '4LW' => 'E02006003',
        '4LX' => 'E02006003',
        '4LY' => 'E02006003',
        '4LZ' => 'E02006003',
        '4NA' => 'E02006003',
        '4NB' => 'E02006003',
        '4ND' => 'E02006003',
        '4NE' => 'E02006003',
        '4NF' => 'E02006003',
        '4NG' => 'E02006003',
        '4NH' => 'E02006003',
        '4NJ' => 'E02006003',
        '4NL' => 'E02006003',
        '4NN' => 'E02006003',
        '4NP' => 'E02006003',
        '4NQ' => 'E02006003',
        '4NR' => 'E02006003',
        '4NS' => 'E02006003',
        '4NT' => 'E02006003',
        '4NU' => 'E02005998',
        '4NW' => 'E02006003',
        '4NX' => 'E02005998',
        '4NY' => 'E02005998',
        '4NZ' => 'E02005998',
        '4PA' => 'E02006003',
        '4PB' => 'E02006003',
        '4PD' => 'E02006003',
        '4PE' => 'E02006003',
        '4PF' => 'E02005998',
        '4PG' => 'E02006003',
        '4PH' => 'E02006003',
        '4PJ' => 'E02005998',
        '4PL' => 'E02006003',
        '4PN' => 'E02006003',
        '4PP' => 'E02006003',
        '4PQ' => 'E02006003',
        '4PR' => 'E02006003',
        '4PS' => 'E02006003',
        '4PT' => 'E02006003',
        '4PU' => 'E02006003',
        '4PW' => 'E02006003',
        '4PX' => 'E02006003',
        '4PY' => 'E02006003',
        '4PZ' => 'E02006003',
        '4QA' => 'E02006003',
        '4QB' => 'E02006003',
        '4QD' => 'E02006003',
        '4QE' => 'E02006003',
        '4QF' => 'E02006003',
        '4QG' => 'E02006003',
        '4QH' => 'E02006003',
        '4QJ' => 'E02006003',
        '4QL' => 'E02006003',
        '4QN' => 'E02006003',
        '4QP' => 'E02006003',
        '4QR' => 'E02006003',
        '4QS' => 'E02006003',
        '4QT' => 'E02006003',
        '4QU' => 'E02006003',
        '4QW' => 'E02006003',
        '4QX' => 'E02006003',
        '4QY' => 'E02006003',
        '4RA' => 'E02006003',
        '4RB' => 'E02006003',
        '4SU' => 'E02005998',
        '4SX' => 'E02005998',
        '4SY' => 'E02005998',
        '4SZ' => 'E02005998',
        '4TA' => 'E02005998',
        '4TB' => 'E02005998',
        '4TD' => 'E02006002',
        '4TH' => 'E02006003',
        '4TJ' => 'E02006003',
        '4TL' => 'E02005998',
        '4TN' => 'E02006003',
        '4TP' => 'E02006003',
        '4TR' => 'E02006003',
        '4TS' => 'E02006003',
        '4TT' => 'E02006003',
        '4TU' => 'E02006003',
        '4TW' => 'E02005998',
        '4TX' => 'E02006003',
        '4UD' => 'E02006003',
        '4UG' => 'E02005998',
        '4UP' => 'E02006002',
        '4US' => 'E02006003',
        '4UW' => 'E02006002',
        '4UY' => 'E02006003',
        '4WA' => 'E02005998',
        '4WB' => 'E02006002',
        '4WJ' => 'E02006002',
        '4WY' => 'E02006002',
        '4WZ' => 'E02006002',
        '4XA' => 'E02006003',
        '4XB' => 'E02006002',
        '4XH' => 'E02005998',
        '4XN' => 'E02005998',
        '4XP' => 'E02005998',
        '4XS' => 'E02006002',
        '4XT' => 'E02006003',
        '4XU' => 'E02006002',
        '4XX' => 'E02006002',
        '4XZ' => 'E02006002',
        '4YA' => 'E02005998',
        '4YB' => 'E02006002',
        '4YR' => 'E02006002',
        '4YT' => 'E02006003',
        '4YU' => 'E02005998',
        '4YX' => 'E02006002',
        '4ZJ' => 'E02005998',
        '4ZN' => 'E02006002',
        '4ZQ' => 'E02006002',
        '4ZW' => 'E02006002',
        '4ZX' => 'E02005998',
        '5AA' => 'E02006003',
        '5AB' => 'E02006003',
        '5AD' => 'E02006003',
        '5AE' => 'E02006003',
        '5AF' => 'E02006003',
        '5AG' => 'E02006003',
        '5AH' => 'E02006003',
        '5AJ' => 'E02006003',
        '5AL' => 'E02006003',
        '5AN' => 'E02006003',
        '5AP' => 'E02006003',
        '5AQ' => 'E02006003',
        '5AR' => 'E02006003',
        '5AS' => 'E02006003',
        '5AT' => 'E02006003',
        '5AU' => 'E02006007',
        '5AW' => 'E02006003',
        '5AX' => 'E02006007',
        '5AY' => 'E02006007',
        '5AZ' => 'E02006007',
        '5BA' => 'E02006007',
        '5BB' => 'E02006003',
        '5BD' => 'E02006003',
        '5BE' => 'E02006003',
        '5BF' => 'E02006007',
        '5BG' => 'E02006003',
        '5BJ' => 'E02006003',
        '5BL' => 'E02006007',
        '5EA' => 'E02006007',
        '5FD' => 'E02005998',
        '5RD' => 'E02006003',
        '5RH' => 'E02006003',
        '5RJ' => 'E02006003',
        '5RL' => 'E02006003',
        '5RN' => 'E02006003',
        '5RP' => 'E02006003',
        '5RR' => 'E02006003',
        '5RS' => 'E02006003',
        '5RT' => 'E02006003',
        '5RU' => 'E02006003',
        '5RW' => 'E02006003',
        '5RY' => 'E02006003',
        '5RZ' => 'E02006003',
        '5SA' => 'E02006003',
        '5SB' => 'E02006003',
        '5SD' => 'E02006003',
        '5SF' => 'E02006003',
        '5SG' => 'E02006003',
        '5SH' => 'E02006003',
        '5SJ' => 'E02006003',
        '5SL' => 'E02006003',
        '5SN' => 'E02006003',
        '5SQ' => 'E02006003',
        '5SR' => 'E02006007',
        '5SS' => 'E02006007',
        '5ST' => 'E02006007',
        '5SU' => 'E02006007',
        '5SW' => 'E02006003',
        '5SX' => 'E02006007',
        '5SY' => 'E02006007',
        '5SZ' => 'E02006007',
        '5TA' => 'E02006007',
        '5TB' => 'E02006007',
        '5TD' => 'E02006003',
        '5TE' => 'E02006003',
        '5TR' => 'E02006003',
        '5UH' => 'E02006007',
        '5UN' => 'E02006003',
        '5UT' => 'E02006003',
        '5UU' => 'E02006003',
        '5UX' => 'E02006003',
        '5WA' => 'E02006003',
        '5XN' => 'E02006003',
        '5YH' => 'E02006003',
        '5YL' => 'E02006003',
        '5YT' => 'E02006003',
        '5YX' => 'E02006003',
        '5ZX' => 'E02006002',
        '6AA' => 'E02005997',
        '6AB' => 'E02005997',
        '6AD' => 'E02005997',
        '6AE' => 'E02005997',
        '6AF' => 'E02005997',
        '6GE' => 'E02006002',
        '6GT' => 'E02006000',
        '6PJ' => 'E02005997',
        '6PL' => 'E02005997',
        '6PN' => 'E02005997',
        '6PP' => 'E02005997',
        '6PQ' => 'E02005997',
        '6PR' => 'E02005997',
        '6PS' => 'E02005997',
        '6PT' => 'E02005997',
        '6PU' => 'E02005997',
        '6PW' => 'E02005997',
        '6PX' => 'E02005997',
        '6PY' => 'E02005997',
        '6PZ' => 'E02005997',
        '6QA' => 'E02005997',
        '6QB' => 'E02005997',
        '6QD' => 'E02005997',
        '6QE' => 'E02005997',
        '6QF' => 'E02005997',
        '6QG' => 'E02005997',
        '6QH' => 'E02005997',
        '6QJ' => 'E02005997',
        '6QN' => 'E02005997',
        '6QP' => 'E02006002',
        '6QQ' => 'E02005997',
        '6RA' => 'E02005997',
        '6RB' => 'E02005997',
        '6RD' => 'E02005997',
        '6RE' => 'E02005997',
        '6RF' => 'E02005997',
        '6RG' => 'E02005997',
        '6RH' => 'E02005997',
        '6RJ' => 'E02005997',
        '6RL' => 'E02005997',
        '6RN' => 'E02005997',
        '6RP' => 'E02005997',
        '6RQ' => 'E02005997',
        '6RR' => 'E02005997',
        '6RS' => 'E02005997',
        '6RT' => 'E02005997',
        '6RU' => 'E02005997',
        '6RW' => 'E02005997',
        '6RX' => 'E02005997',
        '6RY' => 'E02005997',
        '6RZ' => 'E02005997',
        '6SA' => 'E02005997',
        '6SB' => 'E02005997',
        '6SD' => 'E02005997',
        '6SE' => 'E02005997',
        '6SF' => 'E02005997',
        '6SG' => 'E02005997',
        '6SH' => 'E02005997',
        '6SJ' => 'E02005997',
        '6SL' => 'E02005997',
        '6SN' => 'E02005997',
        '6SP' => 'E02005997',
        '6SQ' => 'E02005997',
        '6SR' => 'E02005997',
        '6SS' => 'E02005997',
        '6ST' => 'E02005997',
        '6SW' => 'E02005997',
        '6SY' => 'E02005997',
        '6SZ' => 'E02005997',
        '6TA' => 'E02005999',
        '6TD' => 'E02005999',
        '6TE' => 'E02005999',
        '6TF' => 'E02005999',
        '6TG' => 'E02005999',
        '6TH' => 'E02005997',
        '6TJ' => 'E02005997',
        '6TL' => 'E02005997',
        '6TN' => 'E02005997',
        '6TQ' => 'E02005997',
        '6TR' => 'E02005997',
        '6TS' => 'E02005997',
        '6TT' => 'E02005997',
        '6TU' => 'E02005997',
        '6TW' => 'E02005997',
        '6TX' => 'E02005997',
        '6UA' => 'E02006002',
        '6UJ' => 'E02006003',
        '6UL' => 'E02006003',
        '6UN' => 'E02006003',
        '6UP' => 'E02006003',
        '6UR' => 'E02006003',
        '6US' => 'E02006003',
        '6UT' => 'E02006003',
        '6UU' => 'E02006003',
        '6UW' => 'E02006003',
        '6UX' => 'E02006003',
        '6UY' => 'E02006003',
        '6UZ' => 'E02006003',
        '6WF' => 'E02006002',
        '6WG' => 'E02006002',
        '6WH' => 'E02006002',
        '6WJ' => 'E02006002',
        '6WN' => 'E02006002',
        '6WT' => 'E02005997',
        '6XA' => 'E02006002',
        '6XB' => 'E02006003',
        '6XD' => 'E02006003',
        '6XE' => 'E02006003',
        '6XF' => 'E02006003',
        '6XG' => 'E02006003',
        '6XH' => 'E02006003',
        '6XJ' => 'E02006003',
        '6XL' => 'E02006003',
        '6XN' => 'E02006003',
        '6XQ' => 'E02006003',
        '6YB' => 'E02005997',
        '6YX' => 'E02005997',
        '6ZD' => 'E02005997',
        '6ZH' => 'E02006000',
        '6ZJ' => 'E02006002',
        '6ZN' => 'E02005997',
        '6ZQ' => 'E02006002',
        '6ZR' => 'E02006002',
        '6ZX' => 'E02006002',
        '7AA' => 'E02006001',
        '7AB' => 'E02005999',
        '7AD' => 'E02006007',
        '7AE' => 'E02006007',
        '7AF' => 'E02005999',
        '7AG' => 'E02006001',
        '7AH' => 'E02006001',
        '7AJ' => 'E02006001',
        '7AL' => 'E02006001',
        '7AN' => 'E02006001',
        '7AP' => 'E02006001',
        '7AQ' => 'E02006001',
        '7AR' => 'E02006001',
        '7AS' => 'E02006001',
        '7AT' => 'E02006001',
        '7AU' => 'E02006001',
        '7AW' => 'E02006001',
        '7AX' => 'E02005999',
        '7AY' => 'E02005999',
        '7AZ' => 'E02006001',
        '7BB' => 'E02006001',
        '7BD' => 'E02006001',
        '7BE' => 'E02006001',
        '7BF' => 'E02006001',
        '7BH' => 'E02006001',
        '7BL' => 'E02006001',
        '7BN' => 'E02006001',
        '7BP' => 'E02006001',
        '7BS' => 'E02006001',
        '7BT' => 'E02006001',
        '7BU' => 'E02006001',
        '7BW' => 'E02006001',
        '7BX' => 'E02006001',
        '7DF' => 'E02006001',
        '7DH' => 'E02006001',
        '7DU' => 'E02006001',
        '7DW' => 'E02006001',
        '7DX' => 'E02006001',
        '7DY' => 'E02006001',
        '7DZ' => 'E02006001',
        '7EE' => 'E02006001',
        '7EW' => 'E02006001',
        '7EX' => 'E02006001',
        '7EY' => 'E02006001',
        '7EZ' => 'E02006001',
        '7FJ' => 'E02005999',
        '7FR' => 'E02006002',
        '7FS' => 'E02005999',
        '7GX' => 'E02005999',
        '7HA' => 'E02006001',
        '7HB' => 'E02006001',
        '7HD' => 'E02006002',
        '7LY' => 'E02006001',
        '7NN' => 'E02005999',
        '7NP' => 'E02006001',
        '7NR' => 'E02006001',
        '7NS' => 'E02005999',
        '7NT' => 'E02005999',
        '7NU' => 'E02005999',
        '7NW' => 'E02005999',
        '7NX' => 'E02005999',
        '7NY' => 'E02005999',
        '7NZ' => 'E02005999',
        '7PA' => 'E02005999',
        '7PB' => 'E02005999',
        '7PD' => 'E02005999',
        '7PE' => 'E02005999',
        '7PF' => 'E02005999',
        '7PJ' => 'E02006003',
        '7PL' => 'E02006003',
        '7PP' => 'E02006003',
        '7PR' => 'E02006003',
        '7PS' => 'E02005999',
        '7PT' => 'E02006007',
        '7PU' => 'E02006007',
        '7PX' => 'E02006007',
        '7PZ' => 'E02006003',
        '7QA' => 'E02006007',
        '7QB' => 'E02006007',
        '7QD' => 'E02006007',
        '7QE' => 'E02006007',
        '7QF' => 'E02006007',
        '7QG' => 'E02006003',
        '7QH' => 'E02006007',
        '7QJ' => 'E02006007',
        '7QL' => 'E02006007',
        '7QN' => 'E02006007',
        '7QP' => 'E02006007',
        '7QQ' => 'E02006007',
        '7QS' => 'E02006007',
        '7QT' => 'E02006007',
        '7QU' => 'E02006007',
        '7QW' => 'E02006007',
        '7QX' => 'E02006007',
        '7QY' => 'E02006007',
        '7QZ' => 'E02005999',
        '7RA' => 'E02006007',
        '7RB' => 'E02006003',
        '7RD' => 'E02006003',
        '7RE' => 'E02006007',
        '7RH' => 'E02006007',
        '7RJ' => 'E02006003',
        '7RL' => 'E02006007',
        '7RN' => 'E02006007',
        '7RP' => 'E02006007',
        '7RQ' => 'E02006007',
        '7RR' => 'E02006007',
        '7RS' => 'E02006007',
        '7RT' => 'E02006007',
        '7RU' => 'E02006007',
        '7RW' => 'E02006007',
        '7RX' => 'E02006007',
        '7RY' => 'E02006007',
        '7RZ' => 'E02006007',
        '7SA' => 'E02006007',
        '7SB' => 'E02006007',
        '7SD' => 'E02006007',
        '7SE' => 'E02006007',
        '7SF' => 'E02006007',
        '7SG' => 'E02006007',
        '7SH' => 'E02006003',
        '7SJ' => 'E02006007',
        '7SL' => 'E02006003',
        '7SN' => 'E02006007',
        '7SP' => 'E02005999',
        '7SQ' => 'E02006007',
        '7SR' => 'E02006007',
        '7SS' => 'E02006003',
        '7ST' => 'E02006003',
        '7SU' => 'E02006003',
        '7SW' => 'E02005999',
        '7SX' => 'E02006003',
        '7SY' => 'E02006003',
        '7SZ' => 'E02006003',
        '7TA' => 'E02006003',
        '7TB' => 'E02006003',
        '7TD' => 'E02006002',
        '7TH' => 'E02005999',
        '7TJ' => 'E02006007',
        '7TL' => 'E02005999',
        '7TN' => 'E02005999',
        '7TP' => 'E02005999',
        '7TR' => 'E02005999',
        '7TS' => 'E02005999',
        '7TU' => 'E02005999',
        '7TW' => 'E02005999',
        '7TX' => 'E02005999',
        '7TY' => 'E02005999',
        '7TZ' => 'E02005999',
        '7UA' => 'E02005999',
        '7UB' => 'E02005999',
        '7UD' => 'E02005999',
        '7UE' => 'E02005999',
        '7UF' => 'E02005999',
        '7UG' => 'E02005999',
        '7UH' => 'E02006003',
        '7UJ' => 'E02005999',
        '7UP' => 'E02005999',
        '7UQ' => 'E02005999',
        '7UR' => 'E02005999',
        '7US' => 'E02005999',
        '7UT' => 'E02005999',
        '7UU' => 'E02005999',
        '7UX' => 'E02005999',
        '7UY' => 'E02005999',
        '7UZ' => 'E02005999',
        '7WA' => 'E02006001',
        '7WB' => 'E02006001',
        '7WD' => 'E02006002',
        '7WH' => 'E02005999',
        '7WJ' => 'E02005999',
        '7WN' => 'E02006002',
        '7WP' => 'E02006002',
        '7WQ' => 'E02006002',
        '7WR' => 'E02006002',
        '7WS' => 'E02006003',
        '7WT' => 'E02005999',
        '7WU' => 'E02006002',
        '7WW' => 'E02006002',
        '7WX' => 'E02006002',
        '7WY' => 'E02006002',
        '7WZ' => 'E02005999',
        '7XA' => 'E02005999',
        '7XB' => 'E02005999',
        '7XD' => 'E02005999',
        '7XE' => 'E02005999',
        '7XF' => 'E02005999',
        '7XG' => 'E02005999',
        '7XH' => 'E02005999',
        '7XJ' => 'E02005999',
        '7XL' => 'E02005999',
        '7XN' => 'E02005999',
        '7XP' => 'E02005999',
        '7XQ' => 'E02006002',
        '7XR' => 'E02005999',
        '7XS' => 'E02005999',
        '7XT' => 'E02005999',
        '7XU' => 'E02005999',
        '7XW' => 'E02005999',
        '7XX' => 'E02005999',
        '7XY' => 'E02005999',
        '7XZ' => 'E02005999',
        '7YA' => 'E02005999',
        '7YB' => 'E02005999',
        '7YD' => 'E02005999',
        '7YE' => 'E02005999',
        '7YF' => 'E02005999',
        '7YH' => 'E02005999',
        '7YJ' => 'E02005999',
        '7YL' => 'E02005999',
        '7YP' => 'E02006003',
        '7YQ' => 'E02005999',
        '7YR' => 'E02005999',
        '7ZA' => 'E02006002',
        '7ZB' => 'E02006002',
        '7ZD' => 'E02006002',
        '7ZF' => 'E02006002',
        '7ZG' => 'E02006002',
        '7ZH' => 'E02006002',
        '7ZJ' => 'E02006002',
        '7ZL' => 'E02005999',
        '7ZN' => 'E02006002',
        '7ZQ' => 'E02006002',
        '7ZR' => 'E02006002',
        '7ZS' => 'E02006002',
        '7ZU' => 'E02006002',
        '7ZY' => 'E02006002',
        '8AA' => 'E02005998',
        '8AB' => 'E02005998',
        '8AD' => 'E02006003',
        '8AE' => 'E02005998',
        '8AF' => 'E02005998',
        '8AG' => 'E02005998',
        '8AH' => 'E02005998',
        '8AJ' => 'E02005998',
        '8AL' => 'E02005998',
        '8AN' => 'E02005998',
        '8AP' => 'E02005998',
        '8AQ' => 'E02005998',
        '8AR' => 'E02005998',
        '8AS' => 'E02005998',
        '8AT' => 'E02005998',
        '8AU' => 'E02005998',
        '8AW' => 'E02005998',
        '8AX' => 'E02005998',
        '8AY' => 'E02005998',
        '8AZ' => 'E02005998',
        '8BA' => 'E02005998',
        '8BB' => 'E02005998',
        '8BD' => 'E02005998',
        '8BE' => 'E02005998',
        '8BF' => 'E02005996',
        '8BG' => 'E02005998',
        '8BH' => 'E02005998',
        '8BJ' => 'E02005998',
        '8BL' => 'E02005998',
        '8BN' => 'E02005998',
        '8BP' => 'E02005998',
        '8BQ' => 'E02005998',
        '8BS' => 'E02005998',
        '8BT' => 'E02005998',
        '8BU' => 'E02006002',
        '8BW' => 'E02005998',
        '8BX' => 'E02005998',
        '8BY' => 'E02005998',
        '8BZ' => 'E02005996',
        '8DA' => 'E02005998',
        '8DB' => 'E02005998',
        '8DD' => 'E02005998',
        '8DE' => 'E02005998',
        '8DF' => 'E02005998',
        '8DG' => 'E02005998',
        '8DH' => 'E02005998',
        '8DJ' => 'E02005998',
        '8DL' => 'E02005998',
        '8DN' => 'E02005996',
        '8DP' => 'E02005996',
        '8DQ' => 'E02005998',
        '8DR' => 'E02005997',
        '8DS' => 'E02005997',
        '8DT' => 'E02005996',
        '8DU' => 'E02005997',
        '8DW' => 'E02005997',
        '8DX' => 'E02005996',
        '8DY' => 'E02005996',
        '8DZ' => 'E02005996',
        '8EA' => 'E02005996',
        '8EB' => 'E02005996',
        '8ED' => 'E02005996',
        '8EE' => 'E02005996',
        '8EF' => 'E02005996',
        '8EG' => 'E02005996',
        '8EH' => 'E02005996',
        '8EJ' => 'E02005996',
        '8EL' => 'E02005996',
        '8EN' => 'E02005996',
        '8EP' => 'E02005996',
        '8EQ' => 'E02005996',
        '8ER' => 'E02005996',
        '8ES' => 'E02005996',
        '8ET' => 'E02005996',
        '8EU' => 'E02005996',
        '8EW' => 'E02005996',
        '8EX' => 'E02005996',
        '8EY' => 'E02005996',
        '8EZ' => 'E02005996',
        '8FA' => 'E02005996',
        '8FB' => 'E02005996',
        '8FD' => 'E02005998',
        '8FE' => 'E02005998',
        '8FF' => 'E02005996',
        '8FG' => 'E02005996',
        '8FH' => 'E02005996',
        '8FJ' => 'E02005996',
        '8FL' => 'E02005998',
        '8FN' => 'E02005998',
        '8FP' => 'E02005998',
        '8FQ' => 'E02005998',
        '8FR' => 'E02005998',
        '8FS' => 'E02005998',
        '8FT' => 'E02005998',
        '8FX' => 'E02005998',
        '8FZ' => 'E02005998',
        '8GA' => 'E02005998',
        '8GB' => 'E02005998',
        '8GD' => 'E02005998',
        '8HA' => 'E02005996',
        '8HB' => 'E02005996',
        '8HD' => 'E02005998',
        '8HE' => 'E02005998',
        '8HF' => 'E02005998',
        '8HG' => 'E02005998',
        '8HH' => 'E02005998',
        '8HJ' => 'E02005998',
        '8HL' => 'E02005998',
        '8HN' => 'E02006002',
        '8HP' => 'E02005998',
        '8HQ' => 'E02005998',
        '8HR' => 'E02005998',
        '8HS' => 'E02005998',
        '8HT' => 'E02005998',
        '8HU' => 'E02005998',
        '8HW' => 'E02005998',
        '8HX' => 'E02005998',
        '8HY' => 'E02005998',
        '8HZ' => 'E02005998',
        '8JA' => 'E02005998',
        '8JB' => 'E02005998',
        '8JD' => 'E02005998',
        '8JE' => 'E02005998',
        '8JF' => 'E02005998',
        '8JG' => 'E02005998',
        '8JH' => 'E02005998',
        '8JJ' => 'E02005998',
        '8JL' => 'E02005998',
        '8JN' => 'E02005998',
        '8JP' => 'E02005998',
        '8JQ' => 'E02005998',
        '8JR' => 'E02005998',
        '8JS' => 'E02005998',
        '8JT' => 'E02005998',
        '8JU' => 'E02005998',
        '8JW' => 'E02005998',
        '8JX' => 'E02005998',
        '8JY' => 'E02005998',
        '8JZ' => 'E02005998',
        '8LA' => 'E02005998',
        '8LB' => 'E02005998',
        '8LD' => 'E02005998',
        '8LH' => 'E02005998',
        '8LJ' => 'E02005998',
        '8LL' => 'E02005998',
        '8LN' => 'E02005998',
        '8LP' => 'E02005998',
        '8LQ' => 'E02005998',
        '8LR' => 'E02005998',
        '8LS' => 'E02005996',
        '8LT' => 'E02005998',
        '8LW' => 'E02005998',
        '8NA' => 'E02005996',
        '8NB' => 'E02005996',
        '8ND' => 'E02005996',
        '8NE' => 'E02005996',
        '8NF' => 'E02005996',
        '8NG' => 'E02005996',
        '8NH' => 'E02005996',
        '8NJ' => 'E02005996',
        '8NL' => 'E02005996',
        '8NN' => 'E02005996',
        '8NP' => 'E02005996',
        '8NQ' => 'E02005996',
        '8NR' => 'E02005996',
        '8NS' => 'E02005996',
        '8NT' => 'E02005996',
        '8NU' => 'E02005996',
        '8NW' => 'E02005996',
        '8NX' => 'E02005996',
        '8NY' => 'E02005996',
        '8NZ' => 'E02005996',
        '8PA' => 'E02005996',
        '8PB' => 'E02005996',
        '8PD' => 'E02005996',
        '8PE' => 'E02005996',
        '8PF' => 'E02005996',
        '8PG' => 'E02005996',
        '8PH' => 'E02005996',
        '8PJ' => 'E02005996',
        '8PL' => 'E02005996',
        '8PN' => 'E02005996',
        '8PP' => 'E02005996',
        '8PQ' => 'E02005996',
        '8PR' => 'E02005996',
        '8PS' => 'E02005996',
        '8PT' => 'E02005996',
        '8PU' => 'E02005996',
        '8PW' => 'E02005996',
        '8PX' => 'E02005996',
        '8PY' => 'E02005996',
        '8PZ' => 'E02005996',
        '8QA' => 'E02005996',
        '8QB' => 'E02005996',
        '8QD' => 'E02005996',
        '8QE' => 'E02005996',
        '8QF' => 'E02005996',
        '8QG' => 'E02005996',
        '8QH' => 'E02005996',
        '8QJ' => 'E02005996',
        '8QL' => 'E02005998',
        '8QN' => 'E02005996',
        '8QP' => 'E02005998',
        '8QQ' => 'E02005996',
        '8QR' => 'E02005998',
        '8QS' => 'E02006002',
        '8QT' => 'E02005996',
        '8QU' => 'E02005996',
        '8QW' => 'E02005996',
        '8QX' => 'E02005996',
        '8QY' => 'E02005996',
        '8QZ' => 'E02005996',
        '8RA' => 'E02005998',
        '8RB' => 'E02005998',
        '8RD' => 'E02005998',
        '8RH' => 'E02005996',
        '8RU' => 'E02005998',
        '8RX' => 'E02005998',
        '8RY' => 'E02005998',
        '8RZ' => 'E02005998',
        '8SA' => 'E02005998',
        '8SB' => 'E02005998',
        '8SD' => 'E02005998',
        '8SE' => 'E02005998',
        '8SF' => 'E02005998',
        '8SG' => 'E02005998',
        '8SH' => 'E02005998',
        '8SJ' => 'E02005998',
        '8SL' => 'E02005998',
        '8SN' => 'E02005998',
        '8SP' => 'E02005998',
        '8SQ' => 'E02005998',
        '8SR' => 'E02005998',
        '8SS' => 'E02005998',
        '8ST' => 'E02005996',
        '8SU' => 'E02005996',
        '8SW' => 'E02005998',
        '8SX' => 'E02005998',
        '8SY' => 'E02005998',
        '8SZ' => 'E02005998',
        '8TA' => 'E02005998',
        '8WA' => 'E02006002',
        '8WB' => 'E02005998',
        '8WD' => 'E02006002',
        '8WE' => 'E02005998',
        '8WX' => 'E02006002',
        '8WY' => 'E02006002',
        '8WZ' => 'E02006002',
        '8XA' => 'E02005998',
        '8XJ' => 'E02005998',
        '8XL' => 'E02006002',
        '8XP' => 'E02005998',
        '8XR' => 'E02005998',
        '8XS' => 'E02005998',
        '8XZ' => 'E02006002',
        '8YB' => 'E02005998',
        '8YD' => 'E02006002',
        '8YH' => 'E02006002',
        '8YS' => 'E02005998',
        '8YT' => 'E02006002',
        '8YU' => 'E02005998',
        '8ZU' => 'E02006002',
        '8ZW' => 'E02006002',
        '8ZX' => 'E02006002',
        '9AN' => 'E02006004',
        '9EF' => 'E02005999',
        '9GU' => 'E02005999',
        '9NE' => 'E02005999',
        '9NF' => 'E02006004',
        '9NG' => 'E02006004',
        '9NH' => 'E02005999',
        '9NJ' => 'E02005999',
        '9NL' => 'E02005999',
        '9NN' => 'E02005999',
        '9NP' => 'E02005999',
        '9NQ' => 'E02006004',
        '9NR' => 'E02005999',
        '9NS' => 'E02005999',
        '9NT' => 'E02005999',
        '9NU' => 'E02005999',
        '9NW' => 'E02005999',
        '9NX' => 'E02005999',
        '9NY' => 'E02005999',
        '9NZ' => 'E02005999',
        '9PD' => 'E02006000',
        '9PE' => 'E02005999',
        '9PF' => 'E02005999',
        '9PG' => 'E02005999',
        '9PH' => 'E02005999',
        '9PJ' => 'E02005999',
        '9PL' => 'E02005999',
        '9PN' => 'E02005999',
        '9PP' => 'E02006004',
        '9PQ' => 'E02005999',
        '9PR' => 'E02005999',
        '9PS' => 'E02006004',
        '9PT' => 'E02006004',
        '9PU' => 'E02005999',
        '9PW' => 'E02006004',
        '9PX' => 'E02006004',
        '9PY' => 'E02006004',
        '9PZ' => 'E02006004',
        '9QA' => 'E02006004',
        '9QB' => 'E02005999',
        '9QD' => 'E02005999',
        '9QE' => 'E02005999',
        '9QG' => 'E02005999',
        '9QH' => 'E02005999',
        '9QJ' => 'E02005999',
        '9QL' => 'E02005999',
        '9QN' => 'E02005999',
        '9QP' => 'E02005999',
        '9QQ' => 'E02005999',
        '9QR' => 'E02005999',
        '9QU' => 'E02005999',
        '9QW' => 'E02005999',
        '9SN' => 'E02005999',
        '9SP' => 'E02005999',
        '9SS' => 'E02006004',
        '9ST' => 'E02005999',
        '9SU' => 'E02005999',
        '9SW' => 'E02005999',
        '9SX' => 'E02005999',
        '9TA' => 'E02005999',
        '9TB' => 'E02005999',
        '9TD' => 'E02005999',
        '9TE' => 'E02005999',
        '9TF' => 'E02005999',
        '9TG' => 'E02005999',
        '9TH' => 'E02005999',
        '9TJ' => 'E02005999',
        '9TL' => 'E02005999',
        '9TN' => 'E02005999',
        '9TP' => 'E02005999',
        '9TQ' => 'E02005999',
        '9TR' => 'E02005999',
        '9TS' => 'E02005999',
        '9TT' => 'E02005999',
        '9TU' => 'E02005999',
        '9TW' => 'E02005999',
        '9TX' => 'E02005999',
        '9TY' => 'E02005999',
        '9TZ' => 'E02005999',
        '9UA' => 'E02005999',
        '9UB' => 'E02005999',
        '9UD' => 'E02005999',
        '9UE' => 'E02005999',
        '9UF' => 'E02005999',
        '9UG' => 'E02005999',
        '9UH' => 'E02005999',
        '9UJ' => 'E02005999',
        '9UL' => 'E02005999',
        '9UN' => 'E02005999',
        '9UP' => 'E02005999',
        '9UR' => 'E02005999',
        '9US' => 'E02005999',
        '9UT' => 'E02005999',
        '9UU' => 'E02005999',
        '9UW' => 'E02005999',
        '9UX' => 'E02005999',
        '9UY' => 'E02005999',
        '9UZ' => 'E02005999',
        '9WG' => 'E02006002',
        '9WL' => 'E02006002',
        '9XA' => 'E02005999',
        '9XB' => 'E02005999',
        '9XD' => 'E02005999',
        '9XF' => 'E02005999',
        '9XG' => 'E02005999',
        '9XH' => 'E02005999',
        '9XJ' => 'E02005999',
        '9XL' => 'E02005999',
        '9XP' => 'E02005999',
        '9XQ' => 'E02005999',
        '9XR' => 'E02005999',
        '9XS' => 'E02005999',
        '9XY' => 'E02005999',
        '9YR' => 'E02006002',
        '9YX' => 'E02006002',
        '9ZJ' => 'E02006002',
        '9ZN' => 'E02006002',
        '9ZX' => 'E02005999',
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