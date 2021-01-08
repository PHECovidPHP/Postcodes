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
final class NE40
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02001683',
        '3AB' => 'E02001683',
        '3AD' => 'E02001682',
        '3AE' => 'E02001683',
        '3AF' => 'E02001683',
        '3AG' => 'E02001683',
        '3AH' => 'E02001683',
        '3AJ' => 'E02001683',
        '3AL' => 'E02001683',
        '3AN' => 'E02001683',
        '3AP' => 'E02001683',
        '3AQ' => 'E02001683',
        '3AR' => 'E02001683',
        '3AS' => 'E02001682',
        '3AT' => 'E02001683',
        '3AU' => 'E02001683',
        '3AW' => 'E02001683',
        '3AX' => 'E02001683',
        '3AY' => 'E02001683',
        '3AZ' => 'E02001683',
        '3BA' => 'E02001682',
        '3BB' => 'E02001683',
        '3BD' => 'E02001683',
        '3BE' => 'E02001683',
        '3BF' => 'E02001683',
        '3BG' => 'E02001683',
        '3BH' => 'E02001683',
        '3BJ' => 'E02001682',
        '3BL' => 'E02001683',
        '3BN' => 'E02001682',
        '3BP' => 'E02001682',
        '3BQ' => 'E02001683',
        '3BS' => 'E02001683',
        '3BT' => 'E02001682',
        '3BU' => 'E02001682',
        '3BW' => 'E02001682',
        '3DB' => 'E02001682',
        '3DD' => 'E02001682',
        '3DE' => 'E02001682',
        '3DF' => 'E02001682',
        '3DG' => 'E02001682',
        '3DH' => 'E02001682',
        '3DJ' => 'E02001682',
        '3DL' => 'E02001682',
        '3DN' => 'E02001682',
        '3DP' => 'E02001682',
        '3DQ' => 'E02001682',
        '3DR' => 'E02001682',
        '3DS' => 'E02001682',
        '3DT' => 'E02001682',
        '3DU' => 'E02001682',
        '3DW' => 'E02001682',
        '3DX' => 'E02001682',
        '3DY' => 'E02001682',
        '3DZ' => 'E02001682',
        '3EA' => 'E02001682',
        '3EB' => 'E02001682',
        '3ED' => 'E02001682',
        '3EE' => 'E02001682',
        '3EF' => 'E02001682',
        '3EG' => 'E02001682',
        '3EH' => 'E02001682',
        '3EJ' => 'E02001682',
        '3EL' => 'E02001682',
        '3EN' => 'E02001682',
        '3EP' => 'E02001682',
        '3EQ' => 'E02001682',
        '3ER' => 'E02001682',
        '3ES' => 'E02001682',
        '3ET' => 'E02001682',
        '3EU' => 'E02001682',
        '3EW' => 'E02001682',
        '3EX' => 'E02001682',
        '3EY' => 'E02001682',
        '3EZ' => 'E02001682',
        '3GA' => 'E02001683',
        '3HA' => 'E02001682',
        '3HB' => 'E02001682',
        '3HD' => 'E02001682',
        '3HE' => 'E02001682',
        '3HF' => 'E02001682',
        '3HG' => 'E02001682',
        '3HH' => 'E02001682',
        '3HJ' => 'E02001682',
        '3HL' => 'E02001682',
        '3HN' => 'E02001682',
        '3HP' => 'E02001682',
        '3HQ' => 'E02001682',
        '3HR' => 'E02001682',
        '3HS' => 'E02001682',
        '3HT' => 'E02001682',
        '3HU' => 'E02001682',
        '3HW' => 'E02001682',
        '3HX' => 'E02001682',
        '3HY' => 'E02001682',
        '3HZ' => 'E02001682',
        '3JA' => 'E02001682',
        '3JB' => 'E02001682',
        '3JD' => 'E02001682',
        '3JE' => 'E02001682',
        '3JF' => 'E02001682',
        '3JG' => 'E02001682',
        '3JH' => 'E02001682',
        '3JJ' => 'E02001682',
        '3JL' => 'E02001682',
        '3JN' => 'E02001682',
        '3JP' => 'E02001682',
        '3JQ' => 'E02001682',
        '3JR' => 'E02001682',
        '3JS' => 'E02001682',
        '3JT' => 'E02001682',
        '3JW' => 'E02001682',
        '3JX' => 'E02001682',
        '3JY' => 'E02001682',
        '3JZ' => 'E02001682',
        '3LA' => 'E02001682',
        '3LB' => 'E02001682',
        '3LD' => 'E02001682',
        '3LE' => 'E02001682',
        '3LF' => 'E02001682',
        '3LG' => 'E02001682',
        '3LH' => 'E02001682',
        '3LJ' => 'E02001682',
        '3LL' => 'E02001682',
        '3LN' => 'E02001682',
        '3LP' => 'E02001682',
        '3LQ' => 'E02001682',
        '3LR' => 'E02001682',
        '3LS' => 'E02001682',
        '3LT' => 'E02001682',
        '3LU' => 'E02001682',
        '3LW' => 'E02001682',
        '3LX' => 'E02001682',
        '3LY' => 'E02001682',
        '3LZ' => 'E02001682',
        '3NA' => 'E02001682',
        '3NB' => 'E02001682',
        '3ND' => 'E02001682',
        '3NE' => 'E02001682',
        '3NF' => 'E02001682',
        '3NG' => 'E02001682',
        '3NH' => 'E02001682',
        '3NJ' => 'E02001682',
        '3NL' => 'E02001682',
        '3NN' => 'E02001682',
        '3NP' => 'E02001682',
        '3NQ' => 'E02001682',
        '3NR' => 'E02001682',
        '3NS' => 'E02001682',
        '3NT' => 'E02001682',
        '3NU' => 'E02001682',
        '3NW' => 'E02001682',
        '3NX' => 'E02001682',
        '3NY' => 'E02001682',
        '3NZ' => 'E02001682',
        '3PA' => 'E02001682',
        '3PB' => 'E02001682',
        '3PD' => 'E02001682',
        '3PE' => 'E02001682',
        '3PF' => 'E02001682',
        '3PG' => 'E02001682',
        '3PH' => 'E02001682',
        '3PJ' => 'E02001682',
        '3PL' => 'E02001682',
        '3PN' => 'E02001682',
        '3PP' => 'E02001682',
        '3PQ' => 'E02001682',
        '3PR' => 'E02001682',
        '3PS' => 'E02001682',
        '3PT' => 'E02001682',
        '3PU' => 'E02001682',
        '3PW' => 'E02001682',
        '3PX' => 'E02001682',
        '3PY' => 'E02001682',
        '3PZ' => 'E02001682',
        '3QA' => 'E02001682',
        '3QB' => 'E02001682',
        '3QD' => 'E02001682',
        '3QE' => 'E02001683',
        '3QF' => 'E02001683',
        '3QG' => 'E02001683',
        '3QH' => 'E02001682',
        '3QJ' => 'E02001682',
        '3QL' => 'E02001682',
        '3QN' => 'E02001682',
        '3QP' => 'E02001682',
        '3QQ' => 'E02001682',
        '3QR' => 'E02001682',
        '3QS' => 'E02001682',
        '3QW' => 'E02001682',
        '3RA' => 'E02001682',
        '3RB' => 'E02001682',
        '3RD' => 'E02001682',
        '3RE' => 'E02001682',
        '3RF' => 'E02001682',
        '3RG' => 'E02001682',
        '3RH' => 'E02001682',
        '3RJ' => 'E02001682',
        '3RL' => 'E02001682',
        '3RN' => 'E02001682',
        '3RP' => 'E02001682',
        '3RQ' => 'E02001682',
        '3RR' => 'E02001682',
        '3RS' => 'E02001682',
        '3RT' => 'E02001682',
        '3RU' => 'E02001682',
        '3RW' => 'E02001682',
        '3RX' => 'E02001682',
        '3RY' => 'E02001682',
        '3RZ' => 'E02001682',
        '3SA' => 'E02001682',
        '3SB' => 'E02001682',
        '3SN' => 'E02001683',
        '3SP' => 'E02001683',
        '3SR' => 'E02001683',
        '3SS' => 'E02001683',
        '3ST' => 'E02001683',
        '3SU' => 'E02001683',
        '3SW' => 'E02001683',
        '3SX' => 'E02001683',
        '3SY' => 'E02001683',
        '3SZ' => 'E02001683',
        '3TA' => 'E02001683',
        '3TB' => 'E02001683',
        '3TD' => 'E02001683',
        '3TE' => 'E02001683',
        '3TN' => 'E02001683',
        '3TP' => 'E02001683',
        '3TR' => 'E02001683',
        '3TS' => 'E02001683',
        '3TT' => 'E02001683',
        '3TU' => 'E02001683',
        '3TW' => 'E02001683',
        '3TX' => 'E02001683',
        '3TY' => 'E02001683',
        '3TZ' => 'E02001683',
        '3UA' => 'E02001683',
        '3UB' => 'E02001683',
        '3UD' => 'E02001683',
        '3UE' => 'E02001683',
        '3UF' => 'E02001683',
        '3UG' => 'E02001683',
        '3UL' => 'E02001683',
        '3UN' => 'E02001683',
        '3WA' => 'E02001683',
        '3WB' => 'E02001683',
        '3WD' => 'E02001686',
        '3WP' => 'E02001686',
        '3WQ' => 'E02001686',
        '3WR' => 'E02001686',
        '3WS' => 'E02001686',
        '3WT' => 'E02001686',
        '3WU' => 'E02001686',
        '3WW' => 'E02001683',
        '3WX' => 'E02001686',
        '3WY' => 'E02001683',
        '3WZ' => 'E02001686',
        '3XA' => 'E02001682',
        '3XB' => 'E02001682',
        '3XD' => 'E02001682',
        '3XH' => 'E02001682',
        '3XJ' => 'E02001682',
        '3YE' => 'E02001686',
        '3YF' => 'E02001682',
        '3YG' => 'E02001686',
        '3YH' => 'E02001686',
        '3YJ' => 'E02001686',
        '3YL' => 'E02001682',
        '3YN' => 'E02001682',
        '3YP' => 'E02001682',
        '3YQ' => 'E02001686',
        '3YR' => 'E02001682',
        '3YS' => 'E02001682',
        '3YT' => 'E02001682',
        '3YU' => 'E02001683',
        '3YW' => 'E02001683',
        '3YX' => 'E02001683',
        '3YY' => 'E02001683',
        '3YZ' => 'E02001683',
        '4AA' => 'E02001683',
        '4AB' => 'E02001683',
        '4AD' => 'E02001683',
        '4AE' => 'E02001683',
        '4AF' => 'E02001683',
        '4AG' => 'E02001683',
        '4AH' => 'E02001683',
        '4AJ' => 'E02001683',
        '4AL' => 'E02001683',
        '4AN' => 'E02001683',
        '4AP' => 'E02001683',
        '4AQ' => 'E02001683',
        '4AR' => 'E02001683',
        '4AS' => 'E02001683',
        '4AT' => 'E02001683',
        '4AU' => 'E02001683',
        '4AW' => 'E02001683',
        '4AX' => 'E02001683',
        '4AY' => 'E02001683',
        '4AZ' => 'E02001683',
        '4BA' => 'E02001683',
        '4BB' => 'E02001683',
        '4BD' => 'E02001683',
        '4BE' => 'E02001683',
        '4BF' => 'E02001683',
        '4BG' => 'E02001683',
        '4BH' => 'E02001683',
        '4BJ' => 'E02001683',
        '4BL' => 'E02001683',
        '4BN' => 'E02001683',
        '4BP' => 'E02001683',
        '4BQ' => 'E02001683',
        '4BS' => 'E02001683',
        '4BT' => 'E02001683',
        '4BU' => 'E02001683',
        '4BW' => 'E02001683',
        '4DA' => 'E02001683',
        '4DD' => 'E02001683',
        '4DE' => 'E02001683',
        '4DF' => 'E02001683',
        '4DG' => 'E02001683',
        '4DH' => 'E02001683',
        '4DJ' => 'E02001683',
        '4DL' => 'E02001683',
        '4DN' => 'E02001683',
        '4DP' => 'E02001683',
        '4DQ' => 'E02001683',
        '4DR' => 'E02001683',
        '4DS' => 'E02001683',
        '4DT' => 'E02001683',
        '4DU' => 'E02001683',
        '4DW' => 'E02001683',
        '4DX' => 'E02001683',
        '4DY' => 'E02001683',
        '4DZ' => 'E02001683',
        '4EA' => 'E02001683',
        '4EB' => 'E02001683',
        '4ED' => 'E02001683',
        '4EE' => 'E02001683',
        '4EF' => 'E02001683',
        '4EG' => 'E02001683',
        '4EH' => 'E02001683',
        '4EJ' => 'E02001683',
        '4EL' => 'E02001683',
        '4EN' => 'E02001683',
        '4EP' => 'E02001683',
        '4EQ' => 'E02001683',
        '4ER' => 'E02001683',
        '4ES' => 'E02001683',
        '4ET' => 'E02001683',
        '4EU' => 'E02001683',
        '4EW' => 'E02001683',
        '4EX' => 'E02001683',
        '4EY' => 'E02001683',
        '4EZ' => 'E02001683',
        '4FA' => 'E02001683',
        '4FB' => 'E02001683',
        '4FD' => 'E02001683',
        '4FF' => 'E02001683',
        '4FG' => 'E02001683',
        '4HA' => 'E02001683',
        '4HB' => 'E02001683',
        '4HD' => 'E02001683',
        '4HE' => 'E02001683',
        '4HF' => 'E02001683',
        '4HG' => 'E02001683',
        '4HH' => 'E02001683',
        '4HJ' => 'E02001683',
        '4HL' => 'E02001683',
        '4HN' => 'E02001683',
        '4HP' => 'E02001683',
        '4HQ' => 'E02001683',
        '4HR' => 'E02001683',
        '4HS' => 'E02001683',
        '4HT' => 'E02001683',
        '4HU' => 'E02001683',
        '4HW' => 'E02001683',
        '4HZ' => 'E02001683',
        '4JA' => 'E02001683',
        '4JB' => 'E02001683',
        '4JD' => 'E02001683',
        '4JE' => 'E02001683',
        '4JF' => 'E02001683',
        '4JG' => 'E02001705',
        '4JH' => 'E02001683',
        '4JJ' => 'E02001683',
        '4JL' => 'E02001683',
        '4JN' => 'E02001683',
        '4JP' => 'E02001705',
        '4JQ' => 'E02001683',
        '4JR' => 'E02001683',
        '4JS' => 'E02001683',
        '4JT' => 'E02001683',
        '4JU' => 'E02001683',
        '4JW' => 'E02001683',
        '4JX' => 'E02001683',
        '4JY' => 'E02001683',
        '4JZ' => 'E02001683',
        '4LA' => 'E02001683',
        '4LB' => 'E02001683',
        '4LD' => 'E02001683',
        '4LE' => 'E02001683',
        '4LF' => 'E02001683',
        '4LG' => 'E02001683',
        '4LH' => 'E02001683',
        '4LJ' => 'E02001683',
        '4LL' => 'E02001683',
        '4LN' => 'E02001682',
        '4LP' => 'E02001683',
        '4LQ' => 'E02001683',
        '4LR' => 'E02001683',
        '4LS' => 'E02001683',
        '4LY' => 'E02001683',
        '4LZ' => 'E02001683',
        '4NA' => 'E02001683',
        '4NB' => 'E02001683',
        '4ND' => 'E02001683',
        '4NE' => 'E02001683',
        '4NF' => 'E02001683',
        '4NG' => 'E02001683',
        '4NH' => 'E02001683',
        '4NJ' => 'E02001683',
        '4NL' => 'E02001683',
        '4NN' => 'E02001683',
        '4NP' => 'E02001683',
        '4NQ' => 'E02001683',
        '4NR' => 'E02001683',
        '4NS' => 'E02001683',
        '4NU' => 'E02001683',
        '4NW' => 'E02001683',
        '4NX' => 'E02001683',
        '4PA' => 'E02001683',
        '4PB' => 'E02001683',
        '4PD' => 'E02001683',
        '4PE' => 'E02001683',
        '4PF' => 'E02001683',
        '4PG' => 'E02001683',
        '4PH' => 'E02001683',
        '4PJ' => 'E02001683',
        '4PL' => 'E02001683',
        '4PN' => 'E02001683',
        '4PP' => 'E02001683',
        '4PQ' => 'E02001683',
        '4PR' => 'E02001683',
        '4PS' => 'E02001683',
        '4PT' => 'E02001683',
        '4PU' => 'E02001683',
        '4PW' => 'E02001683',
        '4PX' => 'E02001683',
        '4PY' => 'E02001683',
        '4QA' => 'E02001683',
        '4QB' => 'E02001683',
        '4QD' => 'E02001683',
        '4QE' => 'E02001683',
        '4QG' => 'E02001683',
        '4QH' => 'E02001683',
        '4QJ' => 'E02001683',
        '4QL' => 'E02001682',
        '4QN' => 'E02001682',
        '4QP' => 'E02001682',
        '4QQ' => 'E02001683',
        '4QR' => 'E02001682',
        '4QS' => 'E02001682',
        '4QT' => 'E02001682',
        '4QU' => 'E02001683',
        '4QW' => 'E02001682',
        '4QX' => 'E02001683',
        '4QY' => 'E02001683',
        '4QZ' => 'E02001683',
        '4RA' => 'E02001683',
        '4RB' => 'E02001683',
        '4RD' => 'E02001683',
        '4RE' => 'E02001683',
        '4RF' => 'E02001683',
        '4RG' => 'E02001683',
        '4RH' => 'E02001683',
        '4RJ' => 'E02001683',
        '4RL' => 'E02001683',
        '4RN' => 'E02001683',
        '4RP' => 'E02001683',
        '4RQ' => 'E02001683',
        '4RR' => 'E02001683',
        '4RS' => 'E02001683',
        '4RT' => 'E02001683',
        '4RU' => 'E02001683',
        '4RW' => 'E02001683',
        '4RX' => 'E02001683',
        '4RY' => 'E02001683',
        '4RZ' => 'E02001683',
        '4SA' => 'E02001683',
        '4SB' => 'E02001683',
        '4SD' => 'E02001683',
        '4SE' => 'E02001683',
        '4SF' => 'E02001683',
        '4SG' => 'E02001683',
        '4SH' => 'E02001683',
        '4SJ' => 'E02001683',
        '4SL' => 'E02001683',
        '4SN' => 'E02001682',
        '4SP' => 'E02001683',
        '4SQ' => 'E02001683',
        '4SR' => 'E02001683',
        '4SS' => 'E02001683',
        '4ST' => 'E02001683',
        '4SU' => 'E02001683',
        '4SW' => 'E02001683',
        '4SX' => 'E02001682',
        '4SY' => 'E02001682',
        '4SZ' => 'E02001683',
        '4TA' => 'E02001683',
        '4TD' => 'E02001683',
        '4TE' => 'E02001683',
        '4TF' => 'E02001683',
        '4TG' => 'E02001683',
        '4TH' => 'E02001683',
        '4TL' => 'E02001683',
        '4TN' => 'E02001683',
        '4TP' => 'E02001683',
        '4TR' => 'E02001683',
        '4TS' => 'E02001683',
        '4TT' => 'E02001683',
        '4TU' => 'E02001683',
        '4TW' => 'E02001683',
        '4TX' => 'E02001683',
        '4TY' => 'E02001683',
        '4TZ' => 'E02001683',
        '4UA' => 'E02001683',
        '4UB' => 'E02001683',
        '4UD' => 'E02001683',
        '4UE' => 'E02001683',
        '4UF' => 'E02001683',
        '4UG' => 'E02001683',
        '4UH' => 'E02001683',
        '4UJ' => 'E02001683',
        '4UL' => 'E02001683',
        '4UN' => 'E02001683',
        '4UP' => 'E02001683',
        '4UQ' => 'E02001683',
        '4UR' => 'E02001683',
        '4US' => 'E02001683',
        '4UT' => 'E02001683',
        '4UU' => 'E02001683',
        '4UW' => 'E02001683',
        '4UX' => 'E02001683',
        '4UY' => 'E02001683',
        '4UZ' => 'E02001683',
        '4WA' => 'E02001686',
        '4WS' => 'E02001686',
        '4WT' => 'E02001686',
        '4WU' => 'E02001686',
        '4WW' => 'E02001686',
        '4WX' => 'E02001686',
        '4WY' => 'E02001686',
        '4WZ' => 'E02001686',
        '4XA' => 'E02001683',
        '4XB' => 'E02001683',
        '4XD' => 'E02001683',
        '4XE' => 'E02001683',
        '4XF' => 'E02001683',
        '4XG' => 'E02001683',
        '4XH' => 'E02001683',
        '4XJ' => 'E02001683',
        '4XL' => 'E02001683',
        '4XN' => 'E02001683',
        '4XP' => 'E02001683',
        '4XQ' => 'E02001683',
        '4XR' => 'E02001683',
        '4XS' => 'E02001683',
        '4XT' => 'E02001686',
        '4XW' => 'E02001683',
        '4YL' => 'E02001686',
        '4YN' => 'E02001686',
        '4YP' => 'E02001686',
        '4YQ' => 'E02001686',
        '4YR' => 'E02001686',
        '4YS' => 'E02001686',
        '4YT' => 'E02001683',
        '4YU' => 'E02001683',
        '4YW' => 'E02001686',
        '4YX' => 'E02001683',
        '4YY' => 'E02001683',
        '4YZ' => 'E02001683',
        '9AA' => 'E02001686',
        '9AB' => 'E02001682',
        '9AD' => 'E02001686',
        '9AE' => 'E02001686',
        '9AF' => 'E02001686',
        '9AG' => 'E02001686',
        '9AH' => 'E02001686',
        '9AJ' => 'E02001686',
        '9AL' => 'E02001686',
        '9AN' => 'E02001686',
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