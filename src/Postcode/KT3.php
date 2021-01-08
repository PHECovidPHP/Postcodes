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
final class KT3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02000604',
        '3AB' => 'E02000604',
        '3AD' => 'E02000604',
        '3AE' => 'E02000604',
        '3AF' => 'E02000604',
        '3AG' => 'E02000604',
        '3AH' => 'E02000605',
        '3AJ' => 'E02000605',
        '3AL' => 'E02000605',
        '3AN' => 'E02000605',
        '3AP' => 'E02000605',
        '3AQ' => 'E02000605',
        '3AR' => 'E02000605',
        '3AS' => 'E02000605',
        '3AT' => 'E02000599',
        '3AU' => 'E02000599',
        '3AW' => 'E02000605',
        '3AX' => 'E02000599',
        '3AY' => 'E02000599',
        '3AZ' => 'E02000599',
        '3BA' => 'E02000599',
        '3BB' => 'E02000599',
        '3BD' => 'E02000604',
        '3BE' => 'E02000604',
        '3BF' => 'E02000605',
        '3BG' => 'E02000604',
        '3BJ' => 'E02000604',
        '3BL' => 'E02000604',
        '3BN' => 'E02000604',
        '3BP' => 'E02000604',
        '3BS' => 'E02000604',
        '3BT' => 'E02000604',
        '3BU' => 'E02000604',
        '3BW' => 'E02000604',
        '3BX' => 'E02000604',
        '3BY' => 'E02000605',
        '3BZ' => 'E02000605',
        '3DA' => 'E02000604',
        '3DB' => 'E02000604',
        '3DD' => 'E02000604',
        '3DE' => 'E02000605',
        '3DF' => 'E02000605',
        '3DG' => 'E02000604',
        '3DH' => 'E02000604',
        '3DJ' => 'E02000605',
        '3DL' => 'E02000604',
        '3DN' => 'E02000605',
        '3DP' => 'E02000604',
        '3DQ' => 'E02000604',
        '3DR' => 'E02000604',
        '3DT' => 'E02000605',
        '3DW' => 'E02000605',
        '3DX' => 'E02000605',
        '3DY' => 'E02000605',
        '3DZ' => 'E02000605',
        '3EA' => 'E02000605',
        '3EB' => 'E02000605',
        '3ED' => 'E02000603',
        '3EE' => 'E02000603',
        '3EF' => 'E02000599',
        '3EG' => 'E02000599',
        '3EH' => 'E02000603',
        '3EJ' => 'E02000603',
        '3EL' => 'E02000603',
        '3EN' => 'E02000603',
        '3EP' => 'E02000603',
        '3EQ' => 'E02000603',
        '3ER' => 'E02000603',
        '3ES' => 'E02000603',
        '3ET' => 'E02000603',
        '3EU' => 'E02000604',
        '3EW' => 'E02000603',
        '3EX' => 'E02000604',
        '3EY' => 'E02000603',
        '3GA' => 'E02000605',
        '3GR' => 'E02000604',
        '3HA' => 'E02000605',
        '3HB' => 'E02000605',
        '3HD' => 'E02000605',
        '3HE' => 'E02000605',
        '3HF' => 'E02000605',
        '3HG' => 'E02000605',
        '3HH' => 'E02000605',
        '3HJ' => 'E02000605',
        '3HL' => 'E02000605',
        '3HN' => 'E02000605',
        '3HP' => 'E02000605',
        '3HQ' => 'E02000605',
        '3HR' => 'E02000605',
        '3HS' => 'E02000605',
        '3HT' => 'E02000605',
        '3HU' => 'E02000605',
        '3HW' => 'E02000605',
        '3HX' => 'E02000605',
        '3HY' => 'E02000605',
        '3HZ' => 'E02000605',
        '3JA' => 'E02000605',
        '3JB' => 'E02000605',
        '3JD' => 'E02000605',
        '3JE' => 'E02000605',
        '3JF' => 'E02000605',
        '3JG' => 'E02000605',
        '3JH' => 'E02000604',
        '3JJ' => 'E02000604',
        '3JL' => 'E02000604',
        '3JN' => 'E02000604',
        '3JP' => 'E02000604',
        '3JQ' => 'E02000604',
        '3JR' => 'E02000604',
        '3JS' => 'E02000604',
        '3JT' => 'E02000605',
        '3JU' => 'E02000605',
        '3JW' => 'E02000604',
        '3JX' => 'E02000605',
        '3JY' => 'E02000605',
        '3JZ' => 'E02000605',
        '3LA' => 'E02000603',
        '3LB' => 'E02000603',
        '3LD' => 'E02000603',
        '3LE' => 'E02000603',
        '3LF' => 'E02000603',
        '3LG' => 'E02000605',
        '3LH' => 'E02000603',
        '3LJ' => 'E02000603',
        '3LL' => 'E02000609',
        '3LP' => 'E02000603',
        '3LQ' => 'E02000605',
        '3LR' => 'E02000609',
        '3LS' => 'E02000609',
        '3LT' => 'E02000609',
        '3LU' => 'E02000609',
        '3LW' => 'E02000609',
        '3LX' => 'E02000609',
        '3LY' => 'E02000605',
        '3LZ' => 'E02000605',
        '3NA' => 'E02000603',
        '3NB' => 'E02000605',
        '3ND' => 'E02000605',
        '3NE' => 'E02000603',
        '3NF' => 'E02000605',
        '3NG' => 'E02000605',
        '3NH' => 'E02000603',
        '3NJ' => 'E02000603',
        '3NL' => 'E02000605',
        '3NN' => 'E02000605',
        '3NP' => 'E02000605',
        '3NQ' => 'E02000603',
        '3NR' => 'E02000605',
        '3NS' => 'E02000605',
        '3NT' => 'E02000605',
        '3NU' => 'E02000605',
        '3NW' => 'E02000605',
        '3NX' => 'E02000605',
        '3NY' => 'E02000605',
        '3PA' => 'E02000605',
        '3PB' => 'E02000605',
        '3PD' => 'E02000605',
        '3PE' => 'E02000605',
        '3PF' => 'E02000603',
        '3PG' => 'E02000603',
        '3PH' => 'E02000605',
        '3PJ' => 'E02000605',
        '3PN' => 'E02000605',
        '3PP' => 'E02000604',
        '3PQ' => 'E02000605',
        '3PR' => 'E02000604',
        '3PS' => 'E02000604',
        '3PT' => 'E02000604',
        '3PU' => 'E02000604',
        '3PW' => 'E02000605',
        '3PX' => 'E02000604',
        '3PY' => 'E02000604',
        '3PZ' => 'E02000604',
        '3QA' => 'E02000605',
        '3QB' => 'E02000604',
        '3QD' => 'E02000605',
        '3QE' => 'E02000604',
        '3QF' => 'E02000604',
        '3QG' => 'E02000604',
        '3QH' => 'E02000605',
        '3QJ' => 'E02000604',
        '3QL' => 'E02000604',
        '3QN' => 'E02000604',
        '3QP' => 'E02000604',
        '3QQ' => 'E02000604',
        '3QR' => 'E02000604',
        '3QS' => 'E02000604',
        '3QT' => 'E02000604',
        '3QU' => 'E02000604',
        '3QW' => 'E02000604',
        '3QX' => 'E02000603',
        '3QY' => 'E02000603',
        '3RA' => 'E02000603',
        '3RB' => 'E02000603',
        '3RD' => 'E02000605',
        '3RE' => 'E02000604',
        '3RF' => 'E02000605',
        '3RG' => 'E02000603',
        '3RH' => 'E02000605',
        '3RJ' => 'E02000603',
        '3RL' => 'E02000603',
        '3RN' => 'E02000603',
        '3RP' => 'E02000603',
        '3RQ' => 'E02000605',
        '3RR' => 'E02000603',
        '3RS' => 'E02000603',
        '3RT' => 'E02000603',
        '3RU' => 'E02000603',
        '3RW' => 'E02000603',
        '3RX' => 'E02000603',
        '3RY' => 'E02000603',
        '3RZ' => 'E02000603',
        '3SA' => 'E02000603',
        '3SB' => 'E02000603',
        '3SD' => 'E02000603',
        '3SE' => 'E02000603',
        '3SF' => 'E02000603',
        '3SG' => 'E02000603',
        '3SH' => 'E02000603',
        '3SJ' => 'E02000603',
        '3SL' => 'E02000603',
        '3SN' => 'E02000603',
        '3SP' => 'E02000603',
        '3SQ' => 'E02000603',
        '3SR' => 'E02000603',
        '3SS' => 'E02000603',
        '3ST' => 'E02000605',
        '3SU' => 'E02000603',
        '3SW' => 'E02000603',
        '3SX' => 'E02000603',
        '3SY' => 'E02000603',
        '3SZ' => 'E02000603',
        '3TA' => 'E02000603',
        '3TB' => 'E02000603',
        '3TD' => 'E02000603',
        '3TE' => 'E02000603',
        '3TF' => 'E02000603',
        '3TG' => 'E02000603',
        '3TH' => 'E02000603',
        '3TJ' => 'E02000604',
        '3TL' => 'E02000604',
        '3TN' => 'E02000604',
        '3TP' => 'E02000604',
        '3TQ' => 'E02000603',
        '3TR' => 'E02000605',
        '3TS' => 'E02000605',
        '3TT' => 'E02000605',
        '3TU' => 'E02000605',
        '3TW' => 'E02000604',
        '3TX' => 'E02000605',
        '3TY' => 'E02000605',
        '3TZ' => 'E02000603',
        '3UA' => 'E02000603',
        '3UB' => 'E02000603',
        '3UD' => 'E02000599',
        '3UE' => 'E02000605',
        '3UF' => 'E02000605',
        '3UG' => 'E02000599',
        '3UH' => 'E02000599',
        '3UJ' => 'E02000599',
        '3UL' => 'E02000599',
        '3UN' => 'E02000599',
        '3UP' => 'E02000599',
        '3UQ' => 'E02000599',
        '3UR' => 'E02000599',
        '3UW' => 'E02000599',
        '3UX' => 'E02000605',
        '3UY' => 'E02000605',
        '3UZ' => 'E02000605',
        '3WA' => 'E02000604',
        '3WB' => 'E02000604',
        '3WD' => 'E02000604',
        '3WE' => 'E02000605',
        '3WF' => 'E02000604',
        '3WG' => 'E02000604',
        '3WH' => 'E02000605',
        '3WJ' => 'E02000604',
        '3WL' => 'E02000604',
        '3WN' => 'E02000604',
        '3WP' => 'E02000604',
        '3WQ' => 'E02000604',
        '3WR' => 'E02000604',
        '3WS' => 'E02000604',
        '3WT' => 'E02000604',
        '3WU' => 'E02000604',
        '3WW' => 'E02000604',
        '3WX' => 'E02000604',
        '3WY' => 'E02000604',
        '3WZ' => 'E02000604',
        '3XA' => 'E02000604',
        '3XB' => 'E02000604',
        '3XD' => 'E02000604',
        '3XE' => 'E02000604',
        '3XF' => 'E02000604',
        '3XG' => 'E02000604',
        '3XH' => 'E02000604',
        '3XJ' => 'E02000604',
        '3XL' => 'E02000604',
        '3XN' => 'E02000604',
        '3XP' => 'E02000604',
        '3XQ' => 'E02000604',
        '3XR' => 'E02000604',
        '3XS' => 'E02000604',
        '3XY' => 'E02000604',
        '3XZ' => 'E02000604',
        '3YA' => 'E02000605',
        '3YB' => 'E02000604',
        '3YD' => 'E02000604',
        '3YE' => 'E02000605',
        '3YF' => 'E02000604',
        '3YG' => 'E02000604',
        '3YH' => 'E02000604',
        '3YJ' => 'E02000604',
        '3YL' => 'E02000605',
        '3YN' => 'E02000605',
        '3YP' => 'E02000604',
        '3YQ' => 'E02000605',
        '3YR' => 'E02000604',
        '3YS' => 'E02000605',
        '3YT' => 'E02000604',
        '3YU' => 'E02000604',
        '3YW' => 'E02000604',
        '3YX' => 'E02000604',
        '3YY' => 'E02000604',
        '3YZ' => 'E02000604',
        '3ZA' => 'E02000604',
        '3ZF' => 'E02000604',
        '3ZZ' => 'E02000604',
        '4AA' => 'E02000604',
        '4AB' => 'E02000604',
        '4AD' => 'E02000604',
        '4AE' => 'E02000604',
        '4AF' => 'E02000604',
        '4AG' => 'E02000604',
        '4AH' => 'E02000604',
        '4AJ' => 'E02000604',
        '4AL' => 'E02000604',
        '4AN' => 'E02000604',
        '4AP' => 'E02000604',
        '4AQ' => 'E02000604',
        '4AR' => 'E02000604',
        '4AS' => 'E02000604',
        '4AT' => 'E02000604',
        '4AU' => 'E02000604',
        '4AW' => 'E02000604',
        '4AX' => 'E02000604',
        '4AY' => 'E02000604',
        '4AZ' => 'E02000604',
        '4BA' => 'E02000604',
        '4BB' => 'E02000604',
        '4BD' => 'E02000604',
        '4BE' => 'E02000604',
        '4BF' => 'E02000708',
        '4BG' => 'E02000604',
        '4BH' => 'E02000604',
        '4BJ' => 'E02000604',
        '4BL' => 'E02000604',
        '4BN' => 'E02000604',
        '4BP' => 'E02000604',
        '4BQ' => 'E02000604',
        '4BS' => 'E02000604',
        '4BT' => 'E02000604',
        '4BU' => 'E02000604',
        '4BW' => 'E02000604',
        '4BX' => 'E02000604',
        '4BY' => 'E02000604',
        '4BZ' => 'E02000604',
        '4DA' => 'E02000604',
        '4DB' => 'E02000604',
        '4DD' => 'E02000604',
        '4DE' => 'E02000604',
        '4DF' => 'E02000604',
        '4DG' => 'E02000604',
        '4DH' => 'E02000604',
        '4DJ' => 'E02000604',
        '4DL' => 'E02000604',
        '4DN' => 'E02000604',
        '4DP' => 'E02000604',
        '4DQ' => 'E02000604',
        '4DR' => 'E02000604',
        '4DS' => 'E02000604',
        '4DT' => 'E02000604',
        '4DU' => 'E02000604',
        '4DW' => 'E02000604',
        '4DX' => 'E02000604',
        '4DY' => 'E02000604',
        '4DZ' => 'E02000604',
        '4EA' => 'E02000604',
        '4EB' => 'E02000604',
        '4ED' => 'E02000604',
        '4EE' => 'E02000604',
        '4EF' => 'E02000604',
        '4EG' => 'E02000604',
        '4EH' => 'E02000604',
        '4EJ' => 'E02000604',
        '4EL' => 'E02000604',
        '4EN' => 'E02000604',
        '4EP' => 'E02000604',
        '4EQ' => 'E02000604',
        '4ER' => 'E02000604',
        '4ES' => 'E02000604',
        '4ET' => 'E02000604',
        '4EU' => 'E02000604',
        '4EW' => 'E02000604',
        '4EX' => 'E02000604',
        '4EY' => 'E02000604',
        '4EZ' => 'E02000604',
        '4FA' => 'E02000604',
        '4FB' => 'E02000708',
        '4GX' => 'E02000604',
        '4HA' => 'E02000604',
        '4HB' => 'E02000604',
        '4HD' => 'E02000604',
        '4HE' => 'E02000604',
        '4HF' => 'E02000604',
        '4HG' => 'E02000604',
        '4HH' => 'E02000604',
        '4HJ' => 'E02000604',
        '4HL' => 'E02000604',
        '4HN' => 'E02000604',
        '4HP' => 'E02000604',
        '4HQ' => 'E02000604',
        '4HR' => 'E02000604',
        '4HS' => 'E02000604',
        '4HT' => 'E02000604',
        '4HU' => 'E02000604',
        '4HW' => 'E02000604',
        '4HX' => 'E02000604',
        '4HY' => 'E02000604',
        '4HZ' => 'E02000604',
        '4JA' => 'E02000604',
        '4JB' => 'E02000604',
        '4JD' => 'E02000604',
        '4JE' => 'E02000604',
        '4JF' => 'E02000604',
        '4JG' => 'E02000604',
        '4JH' => 'E02000604',
        '4JJ' => 'E02000604',
        '4JL' => 'E02000604',
        '4JN' => 'E02000604',
        '4JP' => 'E02000604',
        '4JQ' => 'E02000604',
        '4JR' => 'E02000604',
        '4JS' => 'E02000604',
        '4JT' => 'E02000604',
        '4JU' => 'E02000604',
        '4JW' => 'E02000604',
        '4JX' => 'E02000604',
        '4JY' => 'E02000604',
        '4JZ' => 'E02000604',
        '4LA' => 'E02000604',
        '4LB' => 'E02000604',
        '4LD' => 'E02000604',
        '4LE' => 'E02000604',
        '4LF' => 'E02000599',
        '4LG' => 'E02000599',
        '4LH' => 'E02000604',
        '4LL' => 'E02000604',
        '4LP' => 'E02000604',
        '4LQ' => 'E02000708',
        '4LR' => 'E02000604',
        '4LS' => 'E02000604',
        '4LT' => 'E02000604',
        '4LU' => 'E02000708',
        '4LW' => 'E02000604',
        '4LX' => 'E02000708',
        '4LY' => 'E02000708',
        '4NA' => 'E02000708',
        '4NB' => 'E02000708',
        '4ND' => 'E02000708',
        '4NE' => 'E02000708',
        '4NF' => 'E02000708',
        '4NG' => 'E02000708',
        '4NH' => 'E02000708',
        '4NJ' => 'E02000708',
        '4NL' => 'E02000708',
        '4NN' => 'E02000708',
        '4NP' => 'E02000708',
        '4NQ' => 'E02000708',
        '4NR' => 'E02000604',
        '4NS' => 'E02000604',
        '4NT' => 'E02000604',
        '4NU' => 'E02000604',
        '4NW' => 'E02000708',
        '4NX' => 'E02000604',
        '4NY' => 'E02000604',
        '4PA' => 'E02000604',
        '4PB' => 'E02000708',
        '4PD' => 'E02000604',
        '4PE' => 'E02000604',
        '4PF' => 'E02000708',
        '4PG' => 'E02000708',
        '4PH' => 'E02000708',
        '4PJ' => 'E02000704',
        '4PL' => 'E02000604',
        '4PN' => 'E02000704',
        '4PP' => 'E02000704',
        '4PQ' => 'E02000708',
        '4PR' => 'E02000704',
        '4PS' => 'E02000704',
        '4PT' => 'E02000708',
        '4PU' => 'E02000708',
        '4PW' => 'E02000704',
        '4PX' => 'E02000604',
        '4PY' => 'E02000604',
        '4PZ' => 'E02000604',
        '4QA' => 'E02000604',
        '4QB' => 'E02000604',
        '4QD' => 'E02000604',
        '4QE' => 'E02000604',
        '4QF' => 'E02000604',
        '4QG' => 'E02000604',
        '4QH' => 'E02000604',
        '4QJ' => 'E02000604',
        '4QL' => 'E02000604',
        '4QN' => 'E02000604',
        '4QP' => 'E02000604',
        '4QR' => 'E02000604',
        '4QS' => 'E02000604',
        '4QT' => 'E02000604',
        '4QU' => 'E02000604',
        '4QW' => 'E02000604',
        '4QX' => 'E02000604',
        '4QZ' => 'E02000604',
        '4RA' => 'E02000604',
        '4RB' => 'E02000604',
        '4RD' => 'E02000605',
        '4RE' => 'E02000604',
        '4RF' => 'E02000604',
        '4RH' => 'E02000604',
        '4RJ' => 'E02000604',
        '4RL' => 'E02000604',
        '4RN' => 'E02000605',
        '4RP' => 'E02000708',
        '4RR' => 'E02000605',
        '4RS' => 'E02000599',
        '4RT' => 'E02000605',
        '4RU' => 'E02000599',
        '4RW' => 'E02000708',
        '4RX' => 'E02000599',
        '4RY' => 'E02000599',
        '4RZ' => 'E02000599',
        '4SA' => 'E02000605',
        '4SB' => 'E02000599',
        '4SD' => 'E02000599',
        '4SE' => 'E02000599',
        '4SF' => 'E02000599',
        '4SG' => 'E02000599',
        '4SH' => 'E02000599',
        '4SJ' => 'E02000599',
        '4SL' => 'E02000599',
        '4SN' => 'E02000599',
        '4SP' => 'E02000599',
        '4SQ' => 'E02000599',
        '4SR' => 'E02000599',
        '4SS' => 'E02000708',
        '4ST' => 'E02000599',
        '4SW' => 'E02000599',
        '4TA' => 'E02000604',
        '4TB' => 'E02000604',
        '4TD' => 'E02000604',
        '4TE' => 'E02000604',
        '4TF' => 'E02000604',
        '4TG' => 'E02000604',
        '4TH' => 'E02000604',
        '4TJ' => 'E02000604',
        '4TL' => 'E02000604',
        '4TN' => 'E02000604',
        '4TP' => 'E02000604',
        '4TQ' => 'E02000604',
        '4TR' => 'E02000604',
        '4TS' => 'E02000604',
        '4TT' => 'E02000604',
        '4TW' => 'E02000604',
        '4WA' => 'E02000604',
        '4WB' => 'E02000604',
        '4WD' => 'E02000604',
        '4WE' => 'E02000604',
        '4WF' => 'E02000604',
        '4WG' => 'E02000604',
        '4WH' => 'E02000604',
        '4WJ' => 'E02000604',
        '4WL' => 'E02000604',
        '4WN' => 'E02000604',
        '4WP' => 'E02000604',
        '4WQ' => 'E02000604',
        '4WR' => 'E02000604',
        '4WS' => 'E02000604',
        '4WT' => 'E02000604',
        '4WU' => 'E02000604',
        '4WW' => 'E02000604',
        '4WX' => 'E02000604',
        '4WY' => 'E02000604',
        '4WZ' => 'E02000604',
        '4XA' => 'E02000604',
        '4XB' => 'E02000604',
        '4XD' => 'E02000604',
        '4XE' => 'E02000604',
        '4XF' => 'E02000604',
        '4XG' => 'E02000604',
        '4XH' => 'E02000604',
        '4XJ' => 'E02000604',
        '4XL' => 'E02000604',
        '4XP' => 'E02000604',
        '4XQ' => 'E02000604',
        '4XT' => 'E02000604',
        '4XY' => 'E02000604',
        '4XZ' => 'E02000604',
        '4YA' => 'E02000604',
        '4YB' => 'E02000604',
        '4YD' => 'E02000604',
        '4YE' => 'E02000604',
        '4YF' => 'E02000604',
        '4YG' => 'E02000604',
        '4YH' => 'E02000604',
        '4YJ' => 'E02000604',
        '4YL' => 'E02000604',
        '4YN' => 'E02000604',
        '4YP' => 'E02000604',
        '4YQ' => 'E02000604',
        '4YR' => 'E02000604',
        '4YS' => 'E02000604',
        '4YT' => 'E02000604',
        '4YU' => 'E02000604',
        '4YW' => 'E02000604',
        '4YY' => 'E02000604',
        '4YZ' => 'E02000604',
        '4ZB' => 'E02000604',
        '5AA' => 'E02000609',
        '5AB' => 'E02000609',
        '5AD' => 'E02000609',
        '5AE' => 'E02000605',
        '5AF' => 'E02000605',
        '5AG' => 'E02000609',
        '5AH' => 'E02000609',
        '5AJ' => 'E02000609',
        '5AL' => 'E02000609',
        '5AN' => 'E02000609',
        '5AP' => 'E02000605',
        '5AQ' => 'E02000605',
        '5AR' => 'E02000609',
        '5AS' => 'E02000605',
        '5AT' => 'E02000605',
        '5AU' => 'E02000605',
        '5AW' => 'E02000605',
        '5AX' => 'E02000605',
        '5AY' => 'E02000605',
        '5AZ' => 'E02000605',
        '5BA' => 'E02000605',
        '5BB' => 'E02000605',
        '5BD' => 'E02000605',
        '5BE' => 'E02000605',
        '5BF' => 'E02000609',
        '5BG' => 'E02000609',
        '5BH' => 'E02000609',
        '5BJ' => 'E02000609',
        '5BL' => 'E02000609',
        '5BN' => 'E02000605',
        '5BP' => 'E02000605',
        '5BQ' => 'E02000609',
        '5BS' => 'E02000605',
        '5BT' => 'E02000605',
        '5BU' => 'E02000605',
        '5BW' => 'E02000605',
        '5BX' => 'E02000605',
        '5BY' => 'E02000605',
        '5BZ' => 'E02000605',
        '5DA' => 'E02000603',
        '5DB' => 'E02000605',
        '5DD' => 'E02000605',
        '5DE' => 'E02000603',
        '5DF' => 'E02000603',
        '5DG' => 'E02000609',
        '5DH' => 'E02000605',
        '5DL' => 'E02000609',
        '5DN' => 'E02000609',
        '5DP' => 'E02000609',
        '5DQ' => 'E02000605',
        '5DR' => 'E02000609',
        '5DS' => 'E02000609',
        '5DT' => 'E02000609',
        '5DU' => 'E02000605',
        '5DW' => 'E02000609',
        '5DX' => 'E02000605',
        '5DY' => 'E02000605',
        '5DZ' => 'E02000605',
        '5EA' => 'E02000605',
        '5EB' => 'E02000605',
        '5ED' => 'E02000605',
        '5EE' => 'E02000605',
        '5EF' => 'E02000605',
        '5EG' => 'E02000605',
        '5EH' => 'E02000605',
        '5EJ' => 'E02000609',
        '5EL' => 'E02000609',
        '5EN' => 'E02000609',
        '5EP' => 'E02000609',
        '5EQ' => 'E02000605',
        '5ER' => 'E02000609',
        '5ES' => 'E02000605',
        '5ET' => 'E02000605',
        '5EU' => 'E02000605',
        '5EW' => 'E02000609',
        '5EX' => 'E02000604',
        '5EY' => 'E02000605',
        '5EZ' => 'E02000605',
        '5FA' => 'E02000604',
        '5FB' => 'E02000604',
        '5HA' => 'E02000605',
        '5HB' => 'E02000605',
        '5HD' => 'E02000605',
        '5HE' => 'E02000605',
        '5HF' => 'E02000605',
        '5HG' => 'E02000605',
        '5HH' => 'E02000605',
        '5HJ' => 'E02000605',
        '5HL' => 'E02000605',
        '5HN' => 'E02000605',
        '5HP' => 'E02000605',
        '5HQ' => 'E02000605',
        '5HR' => 'E02000605',
        '5HS' => 'E02000605',
        '5HT' => 'E02000605',
        '5HU' => 'E02000605',
        '5HW' => 'E02000605',
        '5HX' => 'E02000605',
        '5HY' => 'E02000605',
        '5HZ' => 'E02000604',
        '5JA' => 'E02000604',
        '5JB' => 'E02000609',
        '5JE' => 'E02000612',
        '5JF' => 'E02000612',
        '5JG' => 'E02000609',
        '5JH' => 'E02000609',
        '5JJ' => 'E02000609',
        '5JL' => 'E02000609',
        '5JN' => 'E02000609',
        '5JP' => 'E02000609',
        '5JQ' => 'E02000609',
        '5JR' => 'E02000612',
        '5JS' => 'E02000612',
        '5JT' => 'E02000612',
        '5JU' => 'E02000612',
        '5JW' => 'E02000609',
        '5JX' => 'E02000612',
        '5JY' => 'E02000612',
        '5LB' => 'E02000609',
        '5LD' => 'E02000609',
        '5LE' => 'E02000609',
        '5LF' => 'E02000609',
        '5LG' => 'E02000609',
        '5LH' => 'E02000609',
        '5LJ' => 'E02000609',
        '5LL' => 'E02000609',
        '5LN' => 'E02000609',
        '5LP' => 'E02000609',
        '5LQ' => 'E02000609',
        '5LT' => 'E02000609',
        '5LW' => 'E02000609',
        '5LX' => 'E02000609',
        '5LY' => 'E02000609',
        '5LZ' => 'E02000609',
        '5NA' => 'E02000609',
        '5NB' => 'E02000609',
        '5ND' => 'E02000609',
        '5NE' => 'E02000609',
        '5NF' => 'E02000609',
        '5NG' => 'E02000609',
        '5NH' => 'E02000609',
        '5NJ' => 'E02000609',
        '5NL' => 'E02000609',
        '5NN' => 'E02000609',
        '5NP' => 'E02000609',
        '5NQ' => 'E02000609',
        '5NT' => 'E02000609',
        '5NU' => 'E02000609',
        '5NW' => 'E02000609',
        '5NX' => 'E02000609',
        '5NY' => 'E02000609',
        '5PA' => 'E02000609',
        '5PB' => 'E02000609',
        '5PD' => 'E02000609',
        '5PE' => 'E02000609',
        '5PF' => 'E02000609',
        '5PG' => 'E02000609',
        '5PH' => 'E02000609',
        '5PJ' => 'E02000609',
        '5PL' => 'E02000609',
        '5PN' => 'E02000609',
        '5PP' => 'E02000609',
        '5PQ' => 'E02000609',
        '5PR' => 'E02000612',
        '5PS' => 'E02000609',
        '5PT' => 'E02000609',
        '5PU' => 'E02000609',
        '5PW' => 'E02000609',
        '5QA' => 'E02000609',
        '5QB' => 'E02000609',
        '5QD' => 'E02000609',
        '5QE' => 'E02000609',
        '5QF' => 'E02000609',
        '5QG' => 'E02000609',
        '5QH' => 'E02000609',
        '5QJ' => 'E02000609',
        '5QL' => 'E02000609',
        '5QN' => 'E02000609',
        '5QP' => 'E02000609',
        '5QQ' => 'E02000609',
        '5QR' => 'E02000609',
        '5QS' => 'E02000609',
        '5QT' => 'E02000609',
        '5QU' => 'E02000609',
        '5QW' => 'E02000609',
        '5QX' => 'E02000609',
        '5RE' => 'E02000609',
        '5RF' => 'E02000609',
        '5RG' => 'E02000609',
        '5RH' => 'E02000609',
        '5RJ' => 'E02000609',
        '5RL' => 'E02000609',
        '5RN' => 'E02000609',
        '5RP' => 'E02000609',
        '5RQ' => 'E02000609',
        '5RR' => 'E02000609',
        '5RS' => 'E02000609',
        '5RT' => 'E02000609',
        '5RU' => 'E02000609',
        '5RW' => 'E02000609',
        '5RX' => 'E02000609',
        '5RY' => 'E02000609',
        '5RZ' => 'E02000609',
        '5SA' => 'E02000609',
        '5TA' => 'E02000609',
        '5TB' => 'E02000609',
        '5TD' => 'E02000609',
        '5UE' => 'E02000604',
        '5WA' => 'E02000604',
        '5WB' => 'E02000604',
        '5WD' => 'E02000609',
        '5WE' => 'E02000604',
        '5WF' => 'E02000604',
        '5WG' => 'E02000604',
        '5WH' => 'E02000604',
        '5WJ' => 'E02000604',
        '5WL' => 'E02000604',
        '5WN' => 'E02000604',
        '5WP' => 'E02000604',
        '5WQ' => 'E02000604',
        '5WR' => 'E02000604',
        '5WS' => 'E02000604',
        '5WT' => 'E02000604',
        '5WU' => 'E02000604',
        '5WW' => 'E02000604',
        '5WX' => 'E02000604',
        '5WY' => 'E02000604',
        '5WZ' => 'E02000604',
        '5XA' => 'E02000604',
        '5XP' => 'E02000604',
        '5XQ' => 'E02000604',
        '5XZ' => 'E02000604',
        '5YA' => 'E02000609',
        '5YB' => 'E02000604',
        '5YD' => 'E02000609',
        '5YE' => 'E02000609',
        '5YF' => 'E02000609',
        '5YG' => 'E02000609',
        '5YH' => 'E02000609',
        '5YJ' => 'E02000609',
        '5YL' => 'E02000609',
        '5YN' => 'E02000604',
        '5YP' => 'E02000604',
        '5YQ' => 'E02000609',
        '5YR' => 'E02000604',
        '5YS' => 'E02000604',
        '5YT' => 'E02000604',
        '5YU' => 'E02000609',
        '5YW' => 'E02000604',
        '5YX' => 'E02000609',
        '5YY' => 'E02000609',
        '5YZ' => 'E02000604',
        '5ZB' => 'E02000604',
        '5ZF' => 'E02000604',
        '5ZT' => 'E02000604',
        '5ZY' => 'E02000609',
        '6AA' => 'E02000609',
        '6AB' => 'E02000609',
        '6AD' => 'E02000609',
        '6AE' => 'E02000609',
        '6AF' => 'E02000609',
        '6AG' => 'E02000612',
        '6AH' => 'E02000609',
        '6AJ' => 'E02000609',
        '6AL' => 'E02000609',
        '6AN' => 'E02000612',
        '6AP' => 'E02000708',
        '6AQ' => 'E02000612',
        '6AR' => 'E02000612',
        '6AS' => 'E02000612',
        '6AT' => 'E02000612',
        '6AU' => 'E02000612',
        '6AW' => 'E02000604',
        '6AX' => 'E02000612',
        '6AY' => 'E02000612',
        '6AZ' => 'E02000612',
        '6BA' => 'E02000612',
        '6BB' => 'E02000612',
        '6BD' => 'E02000612',
        '6BE' => 'E02000612',
        '6BF' => 'E02000609',
        '6BG' => 'E02000612',
        '6BH' => 'E02000708',
        '6BJ' => 'E02000604',
        '6BL' => 'E02000604',
        '6BQ' => 'E02000612',
        '6BS' => 'E02000604',
        '6BT' => 'E02000604',
        '6BU' => 'E02000604',
        '6BX' => 'E02000604',
        '6BY' => 'E02000604',
        '6BZ' => 'E02000604',
        '6DA' => 'E02000609',
        '6DB' => 'E02000604',
        '6DD' => 'E02000609',
        '6DE' => 'E02000604',
        '6DF' => 'E02000604',
        '6DG' => 'E02000604',
        '6DH' => 'E02000604',
        '6DJ' => 'E02000604',
        '6DL' => 'E02000604',
        '6DN' => 'E02000604',
        '6DP' => 'E02000609',
        '6DQ' => 'E02000604',
        '6DR' => 'E02000609',
        '6DS' => 'E02000609',
        '6DT' => 'E02000609',
        '6DU' => 'E02000604',
        '6DW' => 'E02000609',
        '6DX' => 'E02000604',
        '6DY' => 'E02000604',
        '6DZ' => 'E02000604',
        '6EA' => 'E02000604',
        '6EB' => 'E02000604',
        '6ED' => 'E02000604',
        '6EF' => 'E02000604',
        '6EG' => 'E02000604',
        '6EJ' => 'E02000612',
        '6EL' => 'E02000708',
        '6EN' => 'E02000708',
        '6EP' => 'E02000708',
        '6EQ' => 'E02000604',
        '6ER' => 'E02000708',
        '6ES' => 'E02000708',
        '6ET' => 'E02000708',
        '6EU' => 'E02000708',
        '6EW' => 'E02000708',
        '6EX' => 'E02000708',
        '6EY' => 'E02000708',
        '6EZ' => 'E02000708',
        '6FF' => 'E02000604',
        '6GX' => 'E02000604',
        '6HA' => 'E02000708',
        '6HB' => 'E02000708',
        '6HD' => 'E02000708',
        '6HE' => 'E02000708',
        '6HF' => 'E02000708',
        '6HG' => 'E02000708',
        '6HP' => 'E02000704',
        '6HQ' => 'E02000708',
        '6HR' => 'E02000704',
        '6HS' => 'E02000704',
        '6HT' => 'E02000708',
        '6HU' => 'E02000708',
        '6HW' => 'E02000708',
        '6HX' => 'E02000708',
        '6HY' => 'E02000708',
        '6HZ' => 'E02000708',
        '6JA' => 'E02000708',
        '6JB' => 'E02000708',
        '6JD' => 'E02000708',
        '6JE' => 'E02000708',
        '6JF' => 'E02000708',
        '6JH' => 'E02000708',
        '6JJ' => 'E02000708',
        '6JL' => 'E02000708',
        '6JN' => 'E02000708',
        '6JP' => 'E02000704',
        '6JR' => 'E02000704',
        '6JS' => 'E02000704',
        '6JT' => 'E02000708',
        '6JU' => 'E02000708',
        '6JW' => 'E02000708',
        '6JX' => 'E02000708',
        '6JY' => 'E02000708',
        '6JZ' => 'E02000708',
        '6LA' => 'E02000708',
        '6LB' => 'E02000708',
        '6LD' => 'E02000708',
        '6LE' => 'E02000708',
        '6LF' => 'E02000708',
        '6LG' => 'E02000708',
        '6LH' => 'E02000704',
        '6LJ' => 'E02000604',
        '6LP' => 'E02000704',
        '6LQ' => 'E02000708',
        '6LR' => 'E02000708',
        '6LS' => 'E02000708',
        '6LT' => 'E02000708',
        '6LU' => 'E02000708',
        '6LW' => 'E02000704',
        '6LX' => 'E02000708',
        '6LY' => 'E02000708',
        '6LZ' => 'E02000708',
        '6NA' => 'E02000708',
        '6NB' => 'E02000708',
        '6ND' => 'E02000708',
        '6NE' => 'E02000708',
        '6NF' => 'E02000708',
        '6NG' => 'E02000708',
        '6NH' => 'E02000708',
        '6NP' => 'E02000612',
        '6NQ' => 'E02000708',
        '6NR' => 'E02000612',
        '6NS' => 'E02000612',
        '6NT' => 'E02000612',
        '6NU' => 'E02000612',
        '6NX' => 'E02000612',
        '6NY' => 'E02000612',
        '6PA' => 'E02000708',
        '6PB' => 'E02000708',
        '6PD' => 'E02000708',
        '6PE' => 'E02000708',
        '6PF' => 'E02000612',
        '6PG' => 'E02000612',
        '6PH' => 'E02000612',
        '6PJ' => 'E02000612',
        '6PL' => 'E02000612',
        '6PN' => 'E02000612',
        '6PP' => 'E02000612',
        '6PQ' => 'E02000612',
        '6PR' => 'E02000612',
        '6PS' => 'E02000612',
        '6PT' => 'E02000612',
        '6PU' => 'E02000612',
        '6PW' => 'E02000612',
        '6PX' => 'E02000612',
        '6PY' => 'E02000612',
        '6QD' => 'E02000708',
        '6QE' => 'E02000708',
        '6QF' => 'E02000708',
        '6QG' => 'E02000708',
        '6QH' => 'E02000708',
        '6QJ' => 'E02000708',
        '6QL' => 'E02000708',
        '6QN' => 'E02000708',
        '6QP' => 'E02000708',
        '6QQ' => 'E02000708',
        '6QR' => 'E02000708',
        '6QS' => 'E02000708',
        '6QW' => 'E02000708',
        '6RA' => 'E02000612',
        '6RB' => 'E02000612',
        '6RD' => 'E02000612',
        '6RE' => 'E02000612',
        '6RF' => 'E02000612',
        '6RG' => 'E02000612',
        '6RH' => 'E02000612',
        '6RJ' => 'E02000612',
        '6RL' => 'E02000612',
        '6RN' => 'E02000612',
        '6RP' => 'E02000612',
        '6RQ' => 'E02000612',
        '6RR' => 'E02000612',
        '6RS' => 'E02000612',
        '6RT' => 'E02000612',
        '6RW' => 'E02000612',
        '6RX' => 'E02000612',
        '6RY' => 'E02000612',
        '6RZ' => 'E02000612',
        '6SA' => 'E02000612',
        '6UG' => 'E02000604',
        '6UN' => 'E02000604',
        '6WA' => 'E02000604',
        '6WB' => 'E02000604',
        '6WD' => 'E02000604',
        '6WE' => 'E02000604',
        '6WF' => 'E02000604',
        '6WG' => 'E02000604',
        '6WH' => 'E02000604',
        '6WJ' => 'E02000604',
        '6WL' => 'E02000604',
        '6WN' => 'E02000604',
        '6WP' => 'E02000604',
        '6WQ' => 'E02000604',
        '6WR' => 'E02000604',
        '6WS' => 'E02000604',
        '6WT' => 'E02000604',
        '6WU' => 'E02000604',
        '6WW' => 'E02000604',
        '6WX' => 'E02000604',
        '6WY' => 'E02000604',
        '6WZ' => 'E02000604',
        '6XA' => 'E02000604',
        '6XQ' => 'E02000604',
        '6XT' => 'E02000604',
        '6XY' => 'E02000604',
        '6XZ' => 'E02000604',
        '6YA' => 'E02000604',
        '6YB' => 'E02000612',
        '6YD' => 'E02000708',
        '6YE' => 'E02000604',
        '6YF' => 'E02000708',
        '6YG' => 'E02000604',
        '6YH' => 'E02000604',
        '6YJ' => 'E02000604',
        '6YL' => 'E02000708',
        '6YN' => 'E02000708',
        '6YP' => 'E02000708',
        '6YQ' => 'E02000604',
        '6YR' => 'E02000604',
        '6YS' => 'E02000604',
        '6YT' => 'E02000708',
        '6YU' => 'E02000708',
        '6YW' => 'E02000604',
        '6YX' => 'E02000604',
        '6YY' => 'E02000604',
        '6YZ' => 'E02000604',
        '9AA' => 'E02000604',
        '9AB' => 'E02000604',
        '9AD' => 'E02000604',
        '9AE' => 'E02000604',
        '9AF' => 'E02000604',
        '9AG' => 'E02000604',
        '9AH' => 'E02000604',
        '9AJ' => 'E02000604',
        '9AN' => 'E02000604',
        '9AP' => 'E02000604',
        '9AQ' => 'E02000604',
        '9AR' => 'E02000604',
        '9AS' => 'E02000604',
        '9AT' => 'E02000604',
        '9AU' => 'E02000604',
        '9AW' => 'E02000604',
        '9AX' => 'E02000604',
        '9AY' => 'E02000604',
        '9AZ' => 'E02000604',
        '9BA' => 'E02000604',
        '9BB' => 'E02000604',
        '9BD' => 'E02000604',
        '9BE' => 'E02000604',
        '9BF' => 'E02000604',
        '9BG' => 'E02000604',
        '9BH' => 'E02000604',
        '9BJ' => 'E02000604',
        '9BL' => 'E02000604',
        '9BN' => 'E02000604',
        '9BP' => 'E02000604',
        '9BQ' => 'E02000604',
        '9BR' => 'E02000604',
        '9BS' => 'E02000604',
        '9BT' => 'E02000604',
        '9BU' => 'E02000604',
        '9BW' => 'E02000604',
        '9BX' => 'E02000604',
        '9BY' => 'E02000604',
        '9BZ' => 'E02000604',
        '9DA' => 'E02000604',
        '9DB' => 'E02000604',
        '9DD' => 'E02000604',
        '9DE' => 'E02000604',
        '9DF' => 'E02000604',
        '9DG' => 'E02000604',
        '9DH' => 'E02000604',
        '9DJ' => 'E02000604',
        '9DL' => 'E02000604',
        '9DN' => 'E02000604',
        '9DP' => 'E02000604',
        '9DQ' => 'E02000604',
        '9DR' => 'E02000604',
        '9DS' => 'E02000604',
        '9DT' => 'E02000604',
        '9DU' => 'E02000604',
        '9DW' => 'E02000604',
        '9DX' => 'E02000604',
        '9DY' => 'E02000604',
        '9DZ' => 'E02000604',
        '9EA' => 'E02000604',
        '9EB' => 'E02000604',
        '9ED' => 'E02000604',
        '9EE' => 'E02000604',
        '9EF' => 'E02000604',
        '9EG' => 'E02000604',
        '9EH' => 'E02000604',
        '9EJ' => 'E02000604',
        '9EL' => 'E02000604',
        '9EP' => 'E02000604',
        '9EQ' => 'E02000604',
        '9ER' => 'E02000604',
        '9ES' => 'E02000604',
        '9ET' => 'E02000604',
        '9EU' => 'E02000604',
        '9EW' => 'E02000604',
        '9EX' => 'E02000604',
        '9EY' => 'E02000604',
        '9EZ' => 'E02000604',
        '9FA' => 'E02000604',
        '9FB' => 'E02000604',
        '9FD' => 'E02000604',
        '9FE' => 'E02000604',
        '9FF' => 'E02000604',
        '9FG' => 'E02000604',
        '9FH' => 'E02000604',
        '9FJ' => 'E02000604',
        '9FL' => 'E02000604',
        '9FN' => 'E02000604',
        '9FP' => 'E02000604',
        '9FQ' => 'E02000604',
        '9FR' => 'E02000604',
        '9FT' => 'E02000604',
        '9FU' => 'E02000604',
        '9FW' => 'E02000604',
        '9FX' => 'E02000604',
        '9FY' => 'E02000604',
        '9FZ' => 'E02000604',
        '9GA' => 'E02000604',
        '9GB' => 'E02000604',
        '9GD' => 'E02000604',
        '9GE' => 'E02000604',
        '9GF' => 'E02000604',
        '9GG' => 'E02000604',
        '9GH' => 'E02000604',
        '9GJ' => 'E02000604',
        '9GL' => 'E02000604',
        '9GN' => 'E02000604',
        '9GP' => 'E02000604',
        '9GQ' => 'E02000604',
        '9GR' => 'E02000604',
        '9GS' => 'E02000604',
        '9GT' => 'E02000604',
        '9GU' => 'E02000604',
        '9GW' => 'E02000604',
        '9GX' => 'E02000604',
        '9GY' => 'E02000604',
        '9GZ' => 'E02000604',
        '9HA' => 'E02000604',
        '9HB' => 'E02000604',
        '9HD' => 'E02000604',
        '9HE' => 'E02000604',
        '9HF' => 'E02000604',
        '9HG' => 'E02000604',
        '9HH' => 'E02000604',
        '9HJ' => 'E02000604',
        '9HL' => 'E02000604',
        '9HN' => 'E02000604',
        '9HP' => 'E02000604',
        '9HQ' => 'E02000604',
        '9HR' => 'E02000604',
        '9HS' => 'E02000604',
        '9HT' => 'E02000604',
        '9HU' => 'E02000604',
        '9HW' => 'E02000604',
        '9HX' => 'E02000604',
        '9HY' => 'E02000604',
        '9HZ' => 'E02000604',
        '9JA' => 'E02000604',
        '9JB' => 'E02000604',
        '9JD' => 'E02000604',
        '9JE' => 'E02000604',
        '9JF' => 'E02000604',
        '9JG' => 'E02000604',
        '9JH' => 'E02000604',
        '9JJ' => 'E02000604',
        '9JL' => 'E02000604',
        '9JN' => 'E02000604',
        '9JP' => 'E02000604',
        '9JQ' => 'E02000604',
        '9JR' => 'E02000604',
        '9TN' => 'E02000604',
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
