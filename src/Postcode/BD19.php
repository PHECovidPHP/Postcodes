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
final class BD19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02002275',
        '3AB' => 'E02002275',
        '3AD' => 'E02002275',
        '3AE' => 'E02002275',
        '3AF' => 'E02002275',
        '3AG' => 'E02002275',
        '3AH' => 'E02002275',
        '3AJ' => 'E02002275',
        '3AL' => 'E02002275',
        '3AN' => 'E02002275',
        '3AP' => 'E02002275',
        '3AQ' => 'E02002275',
        '3AR' => 'E02002275',
        '3AS' => 'E02002275',
        '3AT' => 'E02002275',
        '3AU' => 'E02002275',
        '3AW' => 'E02002275',
        '3AY' => 'E02002275',
        '3AZ' => 'E02002275',
        '3BA' => 'E02002275',
        '3BB' => 'E02002275',
        '3BD' => 'E02002275',
        '3BE' => 'E02002275',
        '3BG' => 'E02002275',
        '3BH' => 'E02002275',
        '3BJ' => 'E02002275',
        '3BL' => 'E02002275',
        '3BN' => 'E02002275',
        '3BP' => 'E02002275',
        '3BQ' => 'E02002275',
        '3BS' => 'E02002275',
        '3BT' => 'E02002275',
        '3BU' => 'E02002275',
        '3BW' => 'E02002275',
        '3BX' => 'E02002275',
        '3BY' => 'E02002275',
        '3BZ' => 'E02002275',
        '3DA' => 'E02002275',
        '3DB' => 'E02002275',
        '3DD' => 'E02002275',
        '3DE' => 'E02002275',
        '3DF' => 'E02002275',
        '3DG' => 'E02002275',
        '3DH' => 'E02002275',
        '3DJ' => 'E02002275',
        '3DL' => 'E02002275',
        '3DN' => 'E02002275',
        '3DP' => 'E02002275',
        '3DQ' => 'E02002275',
        '3DR' => 'E02002275',
        '3DS' => 'E02002275',
        '3DT' => 'E02002275',
        '3DU' => 'E02002275',
        '3DW' => 'E02002275',
        '3DX' => 'E02002275',
        '3DY' => 'E02002275',
        '3DZ' => 'E02002275',
        '3EA' => 'E02002275',
        '3EB' => 'E02002275',
        '3ED' => 'E02002275',
        '3EE' => 'E02002275',
        '3EF' => 'E02002275',
        '3EG' => 'E02002275',
        '3EH' => 'E02002275',
        '3EJ' => 'E02002275',
        '3EL' => 'E02002275',
        '3EN' => 'E02002275',
        '3EP' => 'E02002275',
        '3EQ' => 'E02002275',
        '3ER' => 'E02002275',
        '3ES' => 'E02002275',
        '3ET' => 'E02002275',
        '3EU' => 'E02002275',
        '3EW' => 'E02002275',
        '3EX' => 'E02002275',
        '3EY' => 'E02002275',
        '3EZ' => 'E02002275',
        '3FA' => 'E02002275',
        '3HA' => 'E02002275',
        '3HB' => 'E02002275',
        '3HD' => 'E02002275',
        '3HE' => 'E02002275',
        '3HH' => 'E02002275',
        '3HJ' => 'E02002275',
        '3HP' => 'E02002275',
        '3HQ' => 'E02002275',
        '3HR' => 'E02002275',
        '3HS' => 'E02002275',
        '3HU' => 'E02002275',
        '3HW' => 'E02002275',
        '3HX' => 'E02002275',
        '3HY' => 'E02002275',
        '3HZ' => 'E02002275',
        '3JA' => 'E02002275',
        '3JB' => 'E02002275',
        '3JD' => 'E02002275',
        '3JE' => 'E02002275',
        '3JF' => 'E02002275',
        '3JG' => 'E02002275',
        '3JH' => 'E02002275',
        '3JJ' => 'E02002275',
        '3JL' => 'E02002275',
        '3JN' => 'E02002275',
        '3JP' => 'E02002275',
        '3JQ' => 'E02002275',
        '3JR' => 'E02002275',
        '3JS' => 'E02002275',
        '3JT' => 'E02002275',
        '3JU' => 'E02002275',
        '3JW' => 'E02002275',
        '3JX' => 'E02002275',
        '3JY' => 'E02002275',
        '3JZ' => 'E02002275',
        '3LA' => 'E02002275',
        '3LB' => 'E02002275',
        '3LD' => 'E02002275',
        '3LE' => 'E02002275',
        '3LH' => 'E02002275',
        '3LJ' => 'E02002275',
        '3LL' => 'E02002275',
        '3LN' => 'E02002275',
        '3LP' => 'E02002275',
        '3LQ' => 'E02002275',
        '3LS' => 'E02002275',
        '3LT' => 'E02002275',
        '3LU' => 'E02002275',
        '3LW' => 'E02002275',
        '3LX' => 'E02002275',
        '3LZ' => 'E02002275',
        '3NA' => 'E02002275',
        '3NB' => 'E02002275',
        '3NE' => 'E02002275',
        '3NF' => 'E02002275',
        '3NG' => 'E02002275',
        '3NH' => 'E02002275',
        '3NJ' => 'E02002275',
        '3NL' => 'E02002275',
        '3NN' => 'E02002275',
        '3NP' => 'E02002275',
        '3NT' => 'E02002275',
        '3NU' => 'E02002275',
        '3NW' => 'E02002275',
        '3NX' => 'E02002275',
        '3PA' => 'E02002275',
        '3PB' => 'E02002275',
        '3PD' => 'E02002275',
        '3PG' => 'E02002275',
        '3PH' => 'E02002275',
        '3PJ' => 'E02002275',
        '3PL' => 'E02002275',
        '3PN' => 'E02002275',
        '3PP' => 'E02002275',
        '3PR' => 'E02002275',
        '3PS' => 'E02002275',
        '3PT' => 'E02002275',
        '3PU' => 'E02002275',
        '3PW' => 'E02002275',
        '3PX' => 'E02002275',
        '3PY' => 'E02002275',
        '3PZ' => 'E02002275',
        '3QA' => 'E02002275',
        '3QB' => 'E02002273',
        '3QD' => 'E02002275',
        '3QE' => 'E02002273',
        '3QF' => 'E02002273',
        '3QG' => 'E02002275',
        '3QH' => 'E02002275',
        '3QJ' => 'E02002275',
        '3QL' => 'E02002275',
        '3QN' => 'E02002275',
        '3QP' => 'E02002275',
        '3QR' => 'E02002275',
        '3QS' => 'E02002275',
        '3QT' => 'E02002275',
        '3QU' => 'E02002275',
        '3QW' => 'E02002273',
        '3QX' => 'E02002275',
        '3QY' => 'E02002275',
        '3RA' => 'E02002275',
        '3RB' => 'E02002275',
        '3RE' => 'E02002275',
        '3RF' => 'E02002275',
        '3RG' => 'E02002275',
        '3RH' => 'E02002275',
        '3RJ' => 'E02002275',
        '3RN' => 'E02002275',
        '3RP' => 'E02002275',
        '3RQ' => 'E02002275',
        '3RR' => 'E02002275',
        '3RS' => 'E02002275',
        '3RT' => 'E02002275',
        '3RU' => 'E02002275',
        '3RW' => 'E02002275',
        '3RX' => 'E02002275',
        '3RY' => 'E02002275',
        '3RZ' => 'E02002275',
        '3SA' => 'E02002275',
        '3SB' => 'E02002275',
        '3SD' => 'E02002275',
        '3SE' => 'E02002275',
        '3SF' => 'E02002275',
        '3SG' => 'E02002275',
        '3SH' => 'E02002275',
        '3SJ' => 'E02002275',
        '3SL' => 'E02002275',
        '3SP' => 'E02002274',
        '3SQ' => 'E02002275',
        '3SS' => 'E02002275',
        '3ST' => 'E02002275',
        '3SU' => 'E02002275',
        '3SX' => 'E02002275',
        '3SY' => 'E02002275',
        '3SZ' => 'E02002275',
        '3TA' => 'E02002275',
        '3TB' => 'E02002275',
        '3TD' => 'E02002275',
        '3TE' => 'E02002275',
        '3TF' => 'E02002275',
        '3TG' => 'E02002275',
        '3TH' => 'E02002275',
        '3TJ' => 'E02002275',
        '3TL' => 'E02002275',
        '3TN' => 'E02002273',
        '3TP' => 'E02002275',
        '3TQ' => 'E02002275',
        '3TR' => 'E02002275',
        '3TS' => 'E02002275',
        '3TT' => 'E02002273',
        '3TU' => 'E02002275',
        '3TW' => 'E02002275',
        '3TX' => 'E02002275',
        '3TY' => 'E02002273',
        '3TZ' => 'E02002273',
        '3UA' => 'E02002273',
        '3UB' => 'E02002273',
        '3UD' => 'E02002273',
        '3UE' => 'E02002273',
        '3UF' => 'E02002273',
        '3UG' => 'E02002273',
        '3UH' => 'E02002273',
        '3UJ' => 'E02002275',
        '3UN' => 'E02002275',
        '3UP' => 'E02002275',
        '3UQ' => 'E02002273',
        '3UR' => 'E02002275',
        '3UT' => 'E02002275',
        '3UU' => 'E02002275',
        '3UW' => 'E02002275',
        '3UX' => 'E02002275',
        '3UY' => 'E02002275',
        '3UZ' => 'E02002275',
        '3WU' => 'E02002275',
        '3WW' => 'E02002275',
        '3WX' => 'E02002275',
        '3WY' => 'E02002275',
        '3WZ' => 'E02002275',
        '3XP' => 'E02002275',
        '3XS' => 'E02002275',
        '3XU' => 'E02002275',
        '3XX' => 'E02002275',
        '3XY' => 'E02002275',
        '3XZ' => 'E02002275',
        '3YA' => 'E02002275',
        '3YB' => 'E02002275',
        '3YD' => 'E02002275',
        '3YF' => 'E02002275',
        '3YG' => 'E02002275',
        '3YH' => 'E02002275',
        '3YJ' => 'E02002275',
        '3YL' => 'E02002275',
        '3YN' => 'E02002275',
        '3YP' => 'E02002275',
        '3YQ' => 'E02002275',
        '3YR' => 'E02002275',
        '3YS' => 'E02002275',
        '3YT' => 'E02002275',
        '3YU' => 'E02002275',
        '3YW' => 'E02002275',
        '3YX' => 'E02002275',
        '3YY' => 'E02002275',
        '3YZ' => 'E02002275',
        '3ZY' => 'E02002275',
        '4AA' => 'E02002275',
        '4AB' => 'E02002274',
        '4AD' => 'E02002274',
        '4AE' => 'E02002274',
        '4AF' => 'E02002275',
        '4AG' => 'E02002274',
        '4AH' => 'E02002274',
        '4AJ' => 'E02002274',
        '4AL' => 'E02002274',
        '4AN' => 'E02002274',
        '4AP' => 'E02002271',
        '4AQ' => 'E02002274',
        '4AR' => 'E02002271',
        '4AS' => 'E02002274',
        '4AT' => 'E02002274',
        '4AU' => 'E02002274',
        '4AW' => 'E02002274',
        '4AX' => 'E02002271',
        '4AY' => 'E02002271',
        '4AZ' => 'E02002271',
        '4BA' => 'E02002271',
        '4BB' => 'E02002271',
        '4BD' => 'E02002271',
        '4BE' => 'E02002271',
        '4BG' => 'E02002271',
        '4BH' => 'E02002273',
        '4BJ' => 'E02002273',
        '4BL' => 'E02002273',
        '4BN' => 'E02002273',
        '4BP' => 'E02002273',
        '4BQ' => 'E02002271',
        '4BR' => 'E02002271',
        '4BS' => 'E02002273',
        '4BT' => 'E02002274',
        '4BU' => 'E02002273',
        '4BW' => 'E02002273',
        '4BX' => 'E02002273',
        '4BY' => 'E02002273',
        '4BZ' => 'E02002273',
        '4DA' => 'E02002274',
        '4DB' => 'E02002273',
        '4DD' => 'E02002273',
        '4DE' => 'E02002274',
        '4DF' => 'E02002274',
        '4DG' => 'E02002274',
        '4DH' => 'E02002273',
        '4DJ' => 'E02002275',
        '4DL' => 'E02002274',
        '4DN' => 'E02002273',
        '4DP' => 'E02002273',
        '4DQ' => 'E02002273',
        '4DR' => 'E02002273',
        '4DS' => 'E02002273',
        '4DT' => 'E02002273',
        '4DU' => 'E02002273',
        '4DW' => 'E02002273',
        '4DX' => 'E02002273',
        '4DY' => 'E02002273',
        '4DZ' => 'E02002273',
        '4EA' => 'E02002273',
        '4EB' => 'E02002273',
        '4ED' => 'E02002273',
        '4EE' => 'E02002273',
        '4EF' => 'E02002273',
        '4EG' => 'E02002273',
        '4EH' => 'E02002273',
        '4EJ' => 'E02002273',
        '4EL' => 'E02002273',
        '4EN' => 'E02002273',
        '4EP' => 'E02002273',
        '4EQ' => 'E02002273',
        '4ER' => 'E02002273',
        '4ES' => 'E02002273',
        '4ET' => 'E02002274',
        '4EU' => 'E02002274',
        '4EW' => 'E02002273',
        '4EX' => 'E02002274',
        '4EY' => 'E02002273',
        '4EZ' => 'E02002275',
        '4FA' => 'E02002274',
        '4GF' => 'E02002274',
        '4HA' => 'E02002274',
        '4HD' => 'E02002274',
        '4HE' => 'E02002279',
        '4HF' => 'E02002279',
        '4HG' => 'E02002274',
        '4HH' => 'E02002279',
        '4HJ' => 'E02002279',
        '4HL' => 'E02002279',
        '4HN' => 'E02002279',
        '4HP' => 'E02002279',
        '4HQ' => 'E02002279',
        '4HR' => 'E02002279',
        '4HS' => 'E02002279',
        '4HT' => 'E02002279',
        '4HU' => 'E02002279',
        '4HW' => 'E02002279',
        '4HX' => 'E02002279',
        '4HY' => 'E02002279',
        '4HZ' => 'E02002279',
        '4JA' => 'E02002279',
        '4JB' => 'E02002279',
        '4JD' => 'E02002279',
        '4JE' => 'E02002279',
        '4JF' => 'E02002279',
        '4JG' => 'E02002279',
        '4JH' => 'E02002279',
        '4JJ' => 'E02002279',
        '4JL' => 'E02002279',
        '4JN' => 'E02002274',
        '4JP' => 'E02002274',
        '4JQ' => 'E02002279',
        '4JR' => 'E02002274',
        '4JS' => 'E02002274',
        '4JT' => 'E02002274',
        '4JU' => 'E02002274',
        '4JW' => 'E02002279',
        '4JX' => 'E02002274',
        '4JY' => 'E02002274',
        '4JZ' => 'E02002274',
        '4LA' => 'E02002274',
        '4LB' => 'E02002274',
        '4LD' => 'E02002274',
        '4LE' => 'E02002274',
        '4LF' => 'E02002274',
        '4LG' => 'E02002274',
        '4LH' => 'E02002271',
        '4LJ' => 'E02002271',
        '4LL' => 'E02002274',
        '4LN' => 'E02002273',
        '4LP' => 'E02002274',
        '4LQ' => 'E02002274',
        '4LR' => 'E02002274',
        '4LS' => 'E02002274',
        '4LT' => 'E02002274',
        '4LU' => 'E02002274',
        '4LW' => 'E02002274',
        '4LX' => 'E02002274',
        '4LY' => 'E02002274',
        '4LZ' => 'E02002274',
        '4NA' => 'E02002274',
        '4NB' => 'E02002274',
        '4ND' => 'E02002274',
        '4NE' => 'E02002274',
        '4NF' => 'E02002279',
        '4NG' => 'E02002274',
        '4NH' => 'E02002279',
        '4NJ' => 'E02002274',
        '4NL' => 'E02002274',
        '4NN' => 'E02002274',
        '4NP' => 'E02002274',
        '4NQ' => 'E02002274',
        '4NR' => 'E02002274',
        '4NS' => 'E02002274',
        '4NT' => 'E02002274',
        '4NU' => 'E02002274',
        '4NW' => 'E02002274',
        '4NX' => 'E02002274',
        '4NY' => 'E02002274',
        '4NZ' => 'E02002274',
        '4PA' => 'E02002274',
        '4PB' => 'E02002274',
        '4PD' => 'E02002274',
        '4PE' => 'E02002274',
        '4PF' => 'E02002274',
        '4PG' => 'E02002274',
        '4PH' => 'E02002274',
        '4PJ' => 'E02002274',
        '4PL' => 'E02002274',
        '4PN' => 'E02002274',
        '4PP' => 'E02002274',
        '4PQ' => 'E02002274',
        '4PR' => 'E02002274',
        '4PS' => 'E02002274',
        '4PU' => 'E02002274',
        '4PW' => 'E02002274',
        '4PX' => 'E02002274',
        '4PY' => 'E02002274',
        '4PZ' => 'E02002274',
        '4QA' => 'E02002274',
        '4QF' => 'E02002274',
        '4QG' => 'E02002274',
        '4QH' => 'E02002274',
        '4QJ' => 'E02002274',
        '4QL' => 'E02002274',
        '4QN' => 'E02002274',
        '4QP' => 'E02002274',
        '4QQ' => 'E02002274',
        '4QR' => 'E02002274',
        '4QS' => 'E02002274',
        '4QT' => 'E02002274',
        '4QU' => 'E02002274',
        '4QW' => 'E02002274',
        '4QX' => 'E02002274',
        '4QY' => 'E02002274',
        '4QZ' => 'E02002274',
        '4RA' => 'E02002274',
        '4RB' => 'E02002274',
        '4RD' => 'E02002274',
        '4RE' => 'E02002274',
        '4RF' => 'E02002274',
        '4RG' => 'E02002274',
        '4RH' => 'E02002274',
        '4RJ' => 'E02002274',
        '4RL' => 'E02002274',
        '4RN' => 'E02002274',
        '4RP' => 'E02002274',
        '4RQ' => 'E02002274',
        '4RR' => 'E02002274',
        '4RS' => 'E02002279',
        '4RT' => 'E02002274',
        '4RU' => 'E02002274',
        '4RW' => 'E02002274',
        '4RX' => 'E02002274',
        '4RY' => 'E02002274',
        '4RZ' => 'E02002274',
        '4SA' => 'E02002274',
        '4SB' => 'E02002274',
        '4SD' => 'E02002274',
        '4SE' => 'E02002274',
        '4SF' => 'E02002274',
        '4SG' => 'E02002274',
        '4SH' => 'E02002274',
        '4SJ' => 'E02002274',
        '4SL' => 'E02002274',
        '4SN' => 'E02002274',
        '4SP' => 'E02002274',
        '4SQ' => 'E02002274',
        '4SR' => 'E02002274',
        '4SS' => 'E02002274',
        '4ST' => 'E02002274',
        '4SU' => 'E02002274',
        '4SW' => 'E02002274',
        '4SX' => 'E02002274',
        '4SY' => 'E02002274',
        '4SZ' => 'E02002274',
        '4TA' => 'E02002274',
        '4TB' => 'E02002274',
        '4TD' => 'E02002274',
        '4TE' => 'E02002273',
        '4TF' => 'E02002275',
        '4TG' => 'E02002274',
        '4TH' => 'E02002274',
        '4TJ' => 'E02002275',
        '4TL' => 'E02002275',
        '4TN' => 'E02002275',
        '4TP' => 'E02002275',
        '4TQ' => 'E02002273',
        '4TR' => 'E02002275',
        '4TS' => 'E02002273',
        '4TT' => 'E02002273',
        '4TU' => 'E02002274',
        '4TW' => 'E02002275',
        '4TX' => 'E02002274',
        '4TY' => 'E02002273',
        '4TZ' => 'E02002273',
        '4UA' => 'E02002274',
        '4UB' => 'E02002274',
        '4UD' => 'E02002275',
        '4UE' => 'E02002279',
        '4UW' => 'E02002279',
        '4UZ' => 'E02002275',
        '4WA' => 'E02002275',
        '4WG' => 'E02002275',
        '4WH' => 'E02002275',
        '4WJ' => 'E02002275',
        '4WL' => 'E02002275',
        '4WN' => 'E02002275',
        '4WP' => 'E02002275',
        '4WQ' => 'E02002275',
        '4WR' => 'E02002275',
        '4WS' => 'E02002275',
        '4WT' => 'E02002275',
        '4WU' => 'E02002275',
        '4WW' => 'E02002275',
        '4WX' => 'E02002275',
        '4WY' => 'E02002275',
        '4WZ' => 'E02002275',
        '4XG' => 'E02002274',
        '4XN' => 'E02002275',
        '4XP' => 'E02002275',
        '4XQ' => 'E02002275',
        '4XR' => 'E02002275',
        '4XS' => 'E02002275',
        '4XT' => 'E02002275',
        '4XU' => 'E02002275',
        '4XW' => 'E02002275',
        '4XX' => 'E02002275',
        '4XY' => 'E02002275',
        '4XZ' => 'E02002275',
        '4YA' => 'E02002274',
        '4YB' => 'E02002274',
        '4YE' => 'E02002274',
        '4YF' => 'E02002275',
        '4YG' => 'E02002274',
        '4YH' => 'E02002274',
        '4YJ' => 'E02002274',
        '4YL' => 'E02002274',
        '4YN' => 'E02002275',
        '4YP' => 'E02002275',
        '4YQ' => 'E02002274',
        '4YR' => 'E02002275',
        '4YS' => 'E02002275',
        '4YT' => 'E02002279',
        '4YU' => 'E02002274',
        '4YW' => 'E02002274',
        '4YX' => 'E02002275',
        '4YY' => 'E02002274',
        '4YZ' => 'E02002275',
        '4ZA' => 'E02002275',
        '4ZX' => 'E02002275',
        '4ZY' => 'E02002275',
        '5AA' => 'E02002275',
        '5AB' => 'E02002275',
        '5AD' => 'E02002275',
        '5AE' => 'E02002275',
        '5AF' => 'E02002275',
        '5AG' => 'E02002275',
        '5AH' => 'E02002275',
        '5AJ' => 'E02002275',
        '5AL' => 'E02002275',
        '5AN' => 'E02002275',
        '5AP' => 'E02002275',
        '5AQ' => 'E02002275',
        '5AR' => 'E02002275',
        '5AS' => 'E02002275',
        '5AT' => 'E02002275',
        '5AU' => 'E02002275',
        '5AW' => 'E02002275',
        '5AX' => 'E02002275',
        '5AY' => 'E02002275',
        '5AZ' => 'E02002275',
        '5BA' => 'E02002275',
        '5BB' => 'E02002275',
        '5BD' => 'E02002275',
        '5BE' => 'E02002275',
        '5BG' => 'E02002275',
        '5BH' => 'E02002275',
        '5BJ' => 'E02002275',
        '5BL' => 'E02002275',
        '5BN' => 'E02002275',
        '5BP' => 'E02002275',
        '5BQ' => 'E02002275',
        '5BS' => 'E02002275',
        '5BT' => 'E02002275',
        '5BU' => 'E02002275',
        '5BW' => 'E02002275',
        '5BX' => 'E02002275',
        '5BY' => 'E02002275',
        '5BZ' => 'E02002275',
        '5DA' => 'E02002275',
        '5DB' => 'E02002275',
        '5DD' => 'E02002275',
        '5DE' => 'E02002275',
        '5DF' => 'E02002275',
        '5DG' => 'E02002275',
        '5DH' => 'E02002275',
        '5DJ' => 'E02002275',
        '5DL' => 'E02002275',
        '5DN' => 'E02002275',
        '5DP' => 'E02002275',
        '5DQ' => 'E02002275',
        '5DR' => 'E02002275',
        '5DS' => 'E02002275',
        '5DT' => 'E02002275',
        '5DU' => 'E02002275',
        '5DW' => 'E02002275',
        '5DX' => 'E02002275',
        '5DY' => 'E02002275',
        '5DZ' => 'E02002275',
        '5EA' => 'E02002275',
        '5EB' => 'E02002275',
        '5ED' => 'E02002278',
        '5EE' => 'E02002275',
        '5EH' => 'E02002278',
        '5EJ' => 'E02002275',
        '5EL' => 'E02002275',
        '5EN' => 'E02002275',
        '5EP' => 'E02002275',
        '5ET' => 'E02002275',
        '5EU' => 'E02002275',
        '5EX' => 'E02002275',
        '5EY' => 'E02002275',
        '5EZ' => 'E02002275',
        '5HA' => 'E02002275',
        '5HB' => 'E02002275',
        '5HD' => 'E02002275',
        '5HE' => 'E02002275',
        '5HF' => 'E02002275',
        '5HG' => 'E02002275',
        '5HH' => 'E02002275',
        '5HJ' => 'E02002275',
        '5HL' => 'E02002275',
        '5HN' => 'E02002275',
        '5HP' => 'E02002275',
        '5HQ' => 'E02002275',
        '5HR' => 'E02002275',
        '5HS' => 'E02002275',
        '5HT' => 'E02002275',
        '5HU' => 'E02002275',
        '5HW' => 'E02002275',
        '5HX' => 'E02002275',
        '5HY' => 'E02002275',
        '5HZ' => 'E02002275',
        '5JA' => 'E02002275',
        '5JB' => 'E02002275',
        '5JD' => 'E02002275',
        '5JE' => 'E02002275',
        '5JF' => 'E02002275',
        '5JG' => 'E02002275',
        '5JH' => 'E02002275',
        '5JJ' => 'E02002275',
        '5JL' => 'E02002275',
        '5JN' => 'E02002278',
        '5JP' => 'E02002275',
        '5JQ' => 'E02002275',
        '5JR' => 'E02002278',
        '5JS' => 'E02002275',
        '5JT' => 'E02002275',
        '5JU' => 'E02002275',
        '5JW' => 'E02002278',
        '5JX' => 'E02002275',
        '5JY' => 'E02002275',
        '5JZ' => 'E02002275',
        '5LA' => 'E02002275',
        '5LB' => 'E02002275',
        '5LD' => 'E02002278',
        '5LE' => 'E02002275',
        '5LF' => 'E02002275',
        '5LH' => 'E02002275',
        '5LJ' => 'E02002275',
        '5LL' => 'E02002275',
        '5LP' => 'E02002275',
        '5LQ' => 'E02002275',
        '5LR' => 'E02002275',
        '5LT' => 'E02002275',
        '5LU' => 'E02002275',
        '5LW' => 'E02002275',
        '5LX' => 'E02002275',
        '5LY' => 'E02002275',
        '5LZ' => 'E02002275',
        '5NA' => 'E02002275',
        '5NB' => 'E02002275',
        '5ND' => 'E02002275',
        '5NE' => 'E02002275',
        '5NP' => 'E02002278',
        '5WU' => 'E02002275',
        '5WW' => 'E02002275',
        '5WX' => 'E02002275',
        '5WY' => 'E02002275',
        '5WZ' => 'E02002278',
        '5YL' => 'E02002275',
        '5YN' => 'E02002278',
        '5YP' => 'E02002275',
        '5YQ' => 'E02002275',
        '5YR' => 'E02002275',
        '5YS' => 'E02002275',
        '5YT' => 'E02002275',
        '5YU' => 'E02002275',
        '5YW' => 'E02002275',
        '5YX' => 'E02002278',
        '5YY' => 'E02002278',
        '5YZ' => 'E02002278',
        '6AA' => 'E02002275',
        '6AB' => 'E02002278',
        '6AD' => 'E02002278',
        '6AE' => 'E02002278',
        '6AF' => 'E02002278',
        '6AG' => 'E02002278',
        '6AH' => 'E02002278',
        '6AJ' => 'E02002278',
        '6AL' => 'E02002278',
        '6AN' => 'E02002273',
        '6AP' => 'E02002278',
        '6AQ' => 'E02002278',
        '6AR' => 'E02002273',
        '6AS' => 'E02002273',
        '6AT' => 'E02002273',
        '6AU' => 'E02002278',
        '6AW' => 'E02002278',
        '6AX' => 'E02002273',
        '6AY' => 'E02002278',
        '6BS' => 'E02002273',
        '6BU' => 'E02002273',
        '6BW' => 'E02002273',
        '6DA' => 'E02002273',
        '6DB' => 'E02002273',
        '6DD' => 'E02002273',
        '6DE' => 'E02002273',
        '6DF' => 'E02002273',
        '6DG' => 'E02002273',
        '6DH' => 'E02002273',
        '6DJ' => 'E02002273',
        '6DL' => 'E02002273',
        '6DN' => 'E02002273',
        '6DP' => 'E02002273',
        '6DQ' => 'E02002273',
        '6DR' => 'E02002273',
        '6DS' => 'E02002273',
        '6DT' => 'E02002273',
        '6DU' => 'E02002273',
        '6DW' => 'E02002273',
        '6DX' => 'E02002273',
        '6DY' => 'E02002273',
        '6DZ' => 'E02002273',
        '6EA' => 'E02002273',
        '6EB' => 'E02002273',
        '6ED' => 'E02002273',
        '6EE' => 'E02002273',
        '6EF' => 'E02002273',
        '6EG' => 'E02002273',
        '6EH' => 'E02002273',
        '6EJ' => 'E02002273',
        '6EL' => 'E02002273',
        '6EN' => 'E02002273',
        '6EP' => 'E02002273',
        '6EQ' => 'E02002273',
        '6ER' => 'E02002273',
        '6ES' => 'E02002273',
        '6ET' => 'E02002273',
        '6EU' => 'E02002273',
        '6EW' => 'E02002273',
        '6EX' => 'E02002273',
        '6EY' => 'E02002273',
        '6EZ' => 'E02002273',
        '6HA' => 'E02002273',
        '6HB' => 'E02002273',
        '6HD' => 'E02002273',
        '6HE' => 'E02002273',
        '6HF' => 'E02002273',
        '6HG' => 'E02002273',
        '6HH' => 'E02002273',
        '6HJ' => 'E02002273',
        '6HL' => 'E02002273',
        '6HN' => 'E02002273',
        '6HP' => 'E02002275',
        '6HQ' => 'E02002273',
        '6HR' => 'E02002273',
        '6HS' => 'E02002275',
        '6HT' => 'E02002275',
        '6HU' => 'E02002275',
        '6HW' => 'E02002273',
        '6HY' => 'E02002273',
        '6HZ' => 'E02002273',
        '6JA' => 'E02002273',
        '6JB' => 'E02002273',
        '6JD' => 'E02002278',
        '6JE' => 'E02002278',
        '6JF' => 'E02002278',
        '6JG' => 'E02002278',
        '6JH' => 'E02002278',
        '6JJ' => 'E02002278',
        '6JL' => 'E02002278',
        '6JN' => 'E02002278',
        '6JP' => 'E02002278',
        '6JQ' => 'E02002273',
        '6JR' => 'E02002278',
        '6JS' => 'E02002278',
        '6JT' => 'E02002278',
        '6JU' => 'E02002278',
        '6JW' => 'E02002278',
        '6JX' => 'E02002278',
        '6JY' => 'E02002278',
        '6JZ' => 'E02002278',
        '6LA' => 'E02002278',
        '6LB' => 'E02002278',
        '6LD' => 'E02002278',
        '6LE' => 'E02002278',
        '6LF' => 'E02002278',
        '6LG' => 'E02002278',
        '6LH' => 'E02002278',
        '6LJ' => 'E02002278',
        '6LL' => 'E02002278',
        '6LN' => 'E02002278',
        '6LP' => 'E02002273',
        '6LQ' => 'E02002278',
        '6LR' => 'E02002278',
        '6LS' => 'E02002273',
        '6LT' => 'E02002273',
        '6LU' => 'E02002273',
        '6LW' => 'E02002278',
        '6LX' => 'E02002273',
        '6LY' => 'E02002273',
        '6LZ' => 'E02002273',
        '6NA' => 'E02002273',
        '6NB' => 'E02002273',
        '6ND' => 'E02002278',
        '6NE' => 'E02002273',
        '6NG' => 'E02002273',
        '6NH' => 'E02002273',
        '6NJ' => 'E02002273',
        '6NL' => 'E02002273',
        '6NN' => 'E02002273',
        '6NP' => 'E02002273',
        '6NR' => 'E02002273',
        '6NS' => 'E02002273',
        '6NU' => 'E02002273',
        '6NW' => 'E02002273',
        '6NX' => 'E02002273',
        '6PA' => 'E02002273',
        '6PB' => 'E02002273',
        '6PD' => 'E02002273',
        '6PE' => 'E02002273',
        '6PF' => 'E02002273',
        '6PG' => 'E02002273',
        '6PH' => 'E02002273',
        '6PJ' => 'E02002258',
        '6PL' => 'E02002273',
        '6PP' => 'E02002273',
        '6PQ' => 'E02002258',
        '6PW' => 'E02002273',
        '6UA' => 'E02002273',
        '6UB' => 'E02002273',
        '6WA' => 'E02002258',
        '6WB' => 'E02002258',
        '6WD' => 'E02002258',
        '6WP' => 'E02002275',
        '6WQ' => 'E02002275',
        '6WR' => 'E02002275',
        '6WS' => 'E02002275',
        '6WT' => 'E02002275',
        '6WU' => 'E02002275',
        '6WW' => 'E02002275',
        '6WX' => 'E02002275',
        '6WY' => 'E02002275',
        '6WZ' => 'E02002275',
        '6YF' => 'E02002275',
        '6YG' => 'E02002275',
        '6YH' => 'E02002273',
        '6YJ' => 'E02002258',
        '6YL' => 'E02002275',
        '6YN' => 'E02002275',
        '6YP' => 'E02002273',
        '6YQ' => 'E02002275',
        '6YR' => 'E02002275',
        '6YS' => 'E02002273',
        '6YT' => 'E02002273',
        '6YU' => 'E02002275',
        '6YW' => 'E02002273',
        '6YX' => 'E02002258',
        '6YY' => 'E02002258',
        '6YZ' => 'E02002275',
        '9AA' => 'E02002275',
        '9AF' => 'E02002275',
        '9AG' => 'E02002275',
        '9AL' => 'E02002275',
        '9AS' => 'E02002275',
        '9AT' => 'E02002275',
        '9AU' => 'E02002275',
        '9AW' => 'E02002275',
        '9AY' => 'E02002275',
        '9AZ' => 'E02002275',
        '9BA' => 'E02002275',
        '9BE' => 'E02002275',
        '9BG' => 'E02002275',
        '9BH' => 'E02002275',
        '9BJ' => 'E02002275',
        '9BL' => 'E02002275',
        '9BN' => 'E02002275',
        '9BP' => 'E02002275',
        '9BQ' => 'E02002275',
        '9BR' => 'E02002275',
        '9BT' => 'E02002275',
        '9BU' => 'E02002275',
        '9BW' => 'E02002275',
        '9BX' => 'E02002275',
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