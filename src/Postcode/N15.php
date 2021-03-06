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
final class N15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02000422',
        '3AB' => 'E02000422',
        '3AD' => 'E02000422',
        '3AE' => 'E02000423',
        '3AF' => 'E02000415',
        '3AG' => 'E02000427',
        '3AH' => 'E02000422',
        '3AJ' => 'E02000422',
        '3AL' => 'E02000422',
        '3AN' => 'E02000415',
        '3AP' => 'E02000422',
        '3AQ' => 'E02000422',
        '3AR' => 'E02000422',
        '3AS' => 'E02000422',
        '3AT' => 'E02000422',
        '3AU' => 'E02000422',
        '3AW' => 'E02000422',
        '3AX' => 'E02000422',
        '3AY' => 'E02000423',
        '3AZ' => 'E02000423',
        '3BA' => 'E02000422',
        '3BB' => 'E02000422',
        '3BD' => 'E02000423',
        '3BE' => 'E02000423',
        '3BF' => 'E02000422',
        '3BG' => 'E02000422',
        '3BH' => 'E02000422',
        '3BJ' => 'E02000422',
        '3BL' => 'E02000422',
        '3BN' => 'E02000422',
        '3BP' => 'E02000422',
        '3BS' => 'E02000422',
        '3BT' => 'E02000422',
        '3BU' => 'E02000422',
        '3BW' => 'E02000422',
        '3DA' => 'E02000415',
        '3DB' => 'E02000419',
        '3DD' => 'E02000419',
        '3DE' => 'E02000423',
        '3DF' => 'E02000423',
        '3DH' => 'E02000419',
        '3DJ' => 'E02000415',
        '3DL' => 'E02000415',
        '3DP' => 'E02000415',
        '3DQ' => 'E02000415',
        '3DR' => 'E02000415',
        '3DS' => 'E02000415',
        '3DT' => 'E02000415',
        '3DU' => 'E02000415',
        '3DW' => 'E02000415',
        '3DX' => 'E02000415',
        '3DY' => 'E02000415',
        '3DZ' => 'E02000415',
        '3EA' => 'E02000415',
        '3EB' => 'E02000419',
        '3ED' => 'E02000415',
        '3EE' => 'E02000415',
        '3EG' => 'E02000415',
        '3EH' => 'E02000415',
        '3EJ' => 'E02000415',
        '3EL' => 'E02000415',
        '3EN' => 'E02000415',
        '3EP' => 'E02000415',
        '3ER' => 'E02000415',
        '3ES' => 'E02000415',
        '3ET' => 'E02000415',
        '3EU' => 'E02000415',
        '3EX' => 'E02000415',
        '3EZ' => 'E02000423',
        '3HB' => 'E02000423',
        '3HD' => 'E02000423',
        '3HJ' => 'E02000423',
        '3HL' => 'E02000423',
        '3HP' => 'E02000423',
        '3HR' => 'E02000419',
        '3HS' => 'E02000419',
        '3HT' => 'E02000419',
        '3HU' => 'E02000423',
        '3HX' => 'E02000423',
        '3HY' => 'E02000423',
        '3HZ' => 'E02000419',
        '3JA' => 'E02000419',
        '3JB' => 'E02000423',
        '3JD' => 'E02000423',
        '3JE' => 'E02000423',
        '3JF' => 'E02000419',
        '3JG' => 'E02000427',
        '3JH' => 'E02000423',
        '3JJ' => 'E02000423',
        '3JL' => 'E02000423',
        '3JP' => 'E02000423',
        '3JR' => 'E02000423',
        '3JS' => 'E02000423',
        '3JT' => 'E02000423',
        '3JU' => 'E02000423',
        '3JW' => 'E02000423',
        '3JX' => 'E02000423',
        '3JY' => 'E02000423',
        '3JZ' => 'E02000423',
        '3LA' => 'E02000415',
        '3LB' => 'E02000427',
        '3LD' => 'E02000415',
        '3LF' => 'E02000419',
        '3LG' => 'E02000415',
        '3LH' => 'E02000415',
        '3LJ' => 'E02000415',
        '3LL' => 'E02000415',
        '3LP' => 'E02000415',
        '3LQ' => 'E02000415',
        '3LR' => 'E02000415',
        '3LS' => 'E02000415',
        '3LT' => 'E02000415',
        '3LU' => 'E02000415',
        '3LW' => 'E02000423',
        '3LX' => 'E02000415',
        '3LY' => 'E02000427',
        '3LZ' => 'E02000415',
        '3NA' => 'E02000415',
        '3NB' => 'E02000415',
        '3ND' => 'E02000415',
        '3NE' => 'E02000415',
        '3NH' => 'E02000415',
        '3NJ' => 'E02000415',
        '3NL' => 'E02000415',
        '3NP' => 'E02000415',
        '3NU' => 'E02000419',
        '3NX' => 'E02000415',
        '3PA' => 'E02000422',
        '3PB' => 'E02000422',
        '3PJ' => 'E02000423',
        '3PL' => 'E02000423',
        '3PN' => 'E02000427',
        '3PR' => 'E02000415',
        '3PS' => 'E02000415',
        '3PT' => 'E02000415',
        '3PU' => 'E02000415',
        '3PW' => 'E02000419',
        '3PX' => 'E02000415',
        '3PY' => 'E02000415',
        '3PZ' => 'E02000423',
        '3QA' => 'E02000415',
        '3QB' => 'E02000415',
        '3QD' => 'E02000415',
        '3QE' => 'E02000415',
        '3QF' => 'E02000427',
        '3QH' => 'E02000415',
        '3QJ' => 'E02000415',
        '3QL' => 'E02000415',
        '3QP' => 'E02000415',
        '3QQ' => 'E02000415',
        '3QR' => 'E02000415',
        '3QT' => 'E02000422',
        '3QU' => 'E02000422',
        '3QW' => 'E02000415',
        '3QX' => 'E02000415',
        '3RA' => 'E02000415',
        '3RB' => 'E02000415',
        '3RE' => 'E02000423',
        '3RF' => 'E02000423',
        '3RG' => 'E02000423',
        '3RH' => 'E02000423',
        '3RL' => 'E02000423',
        '3RP' => 'E02000423',
        '3RQ' => 'E02000423',
        '3RR' => 'E02000423',
        '3RS' => 'E02000423',
        '3RT' => 'E02000423',
        '3RU' => 'E02000423',
        '3RX' => 'E02000423',
        '3RZ' => 'E02000423',
        '3SA' => 'E02000423',
        '3SB' => 'E02000423',
        '3SD' => 'E02000423',
        '3SE' => 'E02000423',
        '3SF' => 'E02000423',
        '3SH' => 'E02000423',
        '3SJ' => 'E02000423',
        '3SL' => 'E02000423',
        '3SR' => 'E02000423',
        '3SS' => 'E02000423',
        '3ST' => 'E02000423',
        '3SU' => 'E02000423',
        '3SX' => 'E02000423',
        '3SY' => 'E02000427',
        '3SZ' => 'E02000423',
        '3TA' => 'E02000423',
        '3TB' => 'E02000423',
        '3TD' => 'E02000422',
        '3TH' => 'E02000423',
        '3TJ' => 'E02000423',
        '3TL' => 'E02000423',
        '3TP' => 'E02000423',
        '3TR' => 'E02000423',
        '3TW' => 'E02000427',
        '3UZ' => 'E02000427',
        '3WA' => 'E02000427',
        '3WB' => 'E02000427',
        '3WD' => 'E02000427',
        '3WE' => 'E02000423',
        '3WF' => 'E02000427',
        '3WG' => 'E02000427',
        '3WH' => 'E02000423',
        '3WJ' => 'E02000427',
        '3WL' => 'E02000427',
        '3WN' => 'E02000427',
        '3WP' => 'E02000427',
        '3WQ' => 'E02000427',
        '3WR' => 'E02000427',
        '3WS' => 'E02000427',
        '3WT' => 'E02000427',
        '3WU' => 'E02000423',
        '3WW' => 'E02000423',
        '3WX' => 'E02000423',
        '3WY' => 'E02000427',
        '3WZ' => 'E02000427',
        '3XA' => 'E02000427',
        '3XB' => 'E02000427',
        '3XD' => 'E02000427',
        '3XE' => 'E02000427',
        '3XF' => 'E02000561',
        '3XG' => 'E02000427',
        '3XH' => 'E02000427',
        '3XJ' => 'E02000427',
        '3XL' => 'E02000561',
        '3XN' => 'E02000427',
        '3XP' => 'E02000561',
        '3XQ' => 'E02000427',
        '3XR' => 'E02000427',
        '3XS' => 'E02000427',
        '3XT' => 'E02000427',
        '3XU' => 'E02000427',
        '3XW' => 'E02000427',
        '3XX' => 'E02000427',
        '3XY' => 'E02000427',
        '3YA' => 'E02000427',
        '3YF' => 'E02000427',
        '3YQ' => 'E02000427',
        '3YY' => 'E02000561',
        '3YZ' => 'E02000427',
        '3ZA' => 'E02000423',
        '3ZB' => 'E02000423',
        '3ZD' => 'E02000423',
        '3ZE' => 'E02000423',
        '3ZF' => 'E02000427',
        '3ZG' => 'E02000427',
        '3ZH' => 'E02000423',
        '3ZJ' => 'E02000423',
        '3ZL' => 'E02000427',
        '3ZN' => 'E02000427',
        '3ZP' => 'E02000427',
        '3ZQ' => 'E02000427',
        '3ZR' => 'E02000427',
        '3ZS' => 'E02000423',
        '3ZT' => 'E02000427',
        '3ZU' => 'E02000427',
        '3ZW' => 'E02000423',
        '4AA' => 'E02000420',
        '4AB' => 'E02000409',
        '4AD' => 'E02000414',
        '4AE' => 'E02000420',
        '4AF' => 'E02000415',
        '4AG' => 'E02000421',
        '4AH' => 'E02000420',
        '4AJ' => 'E02000421',
        '4AL' => 'E02000421',
        '4AN' => 'E02000421',
        '4AP' => 'E02000421',
        '4AQ' => 'E02000421',
        '4AR' => 'E02000421',
        '4AS' => 'E02000421',
        '4AT' => 'E02000421',
        '4AU' => 'E02000421',
        '4AW' => 'E02000421',
        '4AX' => 'E02000421',
        '4AY' => 'E02000421',
        '4AZ' => 'E02000421',
        '4BA' => 'E02000421',
        '4BB' => 'E02000421',
        '4BD' => 'E02000421',
        '4BE' => 'E02000421',
        '4BF' => 'E02000420',
        '4BG' => 'E02000421',
        '4BH' => 'E02000421',
        '4BJ' => 'E02000421',
        '4BL' => 'E02000421',
        '4BN' => 'E02000421',
        '4BP' => 'E02000421',
        '4BQ' => 'E02000421',
        '4BS' => 'E02000421',
        '4BT' => 'E02000421',
        '4BU' => 'E02000420',
        '4BW' => 'E02000427',
        '4BX' => 'E02000421',
        '4BY' => 'E02000421',
        '4BZ' => 'E02000421',
        '4DA' => 'E02000421',
        '4DB' => 'E02000427',
        '4DD' => 'E02000421',
        '4DE' => 'E02000421',
        '4DF' => 'E02000421',
        '4DG' => 'E02000421',
        '4DH' => 'E02000421',
        '4DJ' => 'E02000421',
        '4DL' => 'E02000421',
        '4DN' => 'E02000421',
        '4DP' => 'E02000421',
        '4DQ' => 'E02000421',
        '4DR' => 'E02000421',
        '4DS' => 'E02000421',
        '4DT' => 'E02000421',
        '4DU' => 'E02000421',
        '4DW' => 'E02000421',
        '4DX' => 'E02000421',
        '4DY' => 'E02000421',
        '4DZ' => 'E02000421',
        '4EA' => 'E02000421',
        '4EB' => 'E02000420',
        '4ED' => 'E02000420',
        '4EE' => 'E02000420',
        '4EF' => 'E02000420',
        '4EG' => 'E02000420',
        '4EH' => 'E02000420',
        '4EJ' => 'E02000420',
        '4EL' => 'E02000420',
        '4EN' => 'E02000420',
        '4EP' => 'E02000420',
        '4EQ' => 'E02000421',
        '4ER' => 'E02000420',
        '4ES' => 'E02000420',
        '4ET' => 'E02000421',
        '4EU' => 'E02000427',
        '4EW' => 'E02000420',
        '4EX' => 'E02000420',
        '4EY' => 'E02000420',
        '4EZ' => 'E02000427',
        '4FA' => 'E02000420',
        '4FB' => 'E02000421',
        '4FD' => 'E02000421',
        '4FE' => 'E02000427',
        '4FF' => 'E02000420',
        '4FG' => 'E02000421',
        '4FH' => 'E02000420',
        '4FJ' => 'E02000421',
        '4FL' => 'E02000421',
        '4FN' => 'E02000421',
        '4FP' => 'E02000421',
        '4FQ' => 'E02000427',
        '4FR' => 'E02000421',
        '4FS' => 'E02000420',
        '4FT' => 'E02000421',
        '4FU' => 'E02000420',
        '4FW' => 'E02000420',
        '4FX' => 'E02000420',
        '4FY' => 'E02000421',
        '4FZ' => 'E02000420',
        '4GA' => 'E02000421',
        '4GB' => 'E02000420',
        '4GD' => 'E02000420',
        '4GF' => 'E02000421',
        '4GQ' => 'E02000427',
        '4GW' => 'E02000421',
        '4GX' => 'E02000427',
        '4GY' => 'E02000427',
        '4GZ' => 'E02000421',
        '4HA' => 'E02000420',
        '4HB' => 'E02000427',
        '4HD' => 'E02000420',
        '4HE' => 'E02000420',
        '4HF' => 'E02000420',
        '4HG' => 'E02000420',
        '4HH' => 'E02000414',
        '4HJ' => 'E02000414',
        '4HL' => 'E02000420',
        '4HN' => 'E02000420',
        '4HP' => 'E02000420',
        '4HQ' => 'E02000420',
        '4HR' => 'E02000420',
        '4HS' => 'E02000420',
        '4HT' => 'E02000420',
        '4HU' => 'E02000407',
        '4HW' => 'E02000420',
        '4HX' => 'E02000407',
        '4HY' => 'E02000420',
        '4HZ' => 'E02000407',
        '4JA' => 'E02000421',
        '4JB' => 'E02000414',
        '4JD' => 'E02000421',
        '4JE' => 'E02000414',
        '4JF' => 'E02000414',
        '4JG' => 'E02000414',
        '4JH' => 'E02000414',
        '4JJ' => 'E02000414',
        '4JL' => 'E02000414',
        '4JN' => 'E02000414',
        '4JP' => 'E02000420',
        '4JQ' => 'E02000414',
        '4JR' => 'E02000420',
        '4JS' => 'E02000420',
        '4JT' => 'E02000420',
        '4JU' => 'E02000420',
        '4JW' => 'E02000414',
        '4JX' => 'E02000420',
        '4JY' => 'E02000414',
        '4JZ' => 'E02000420',
        '4LA' => 'E02000420',
        '4LB' => 'E02000420',
        '4LD' => 'E02000420',
        '4LE' => 'E02000420',
        '4LF' => 'E02000420',
        '4LG' => 'E02000420',
        '4LH' => 'E02000420',
        '4LJ' => 'E02000420',
        '4LL' => 'E02000420',
        '4LN' => 'E02000421',
        '4LP' => 'E02000421',
        '4LQ' => 'E02000420',
        '4LS' => 'E02000420',
        '4LT' => 'E02000421',
        '4LU' => 'E02000421',
        '4LW' => 'E02000561',
        '4LX' => 'E02000421',
        '4LY' => 'E02000421',
        '4LZ' => 'E02000421',
        '4NA' => 'E02000421',
        '4NB' => 'E02000421',
        '4ND' => 'E02000421',
        '4NE' => 'E02000421',
        '4NF' => 'E02000421',
        '4NG' => 'E02000421',
        '4NH' => 'E02000421',
        '4NJ' => 'E02000421',
        '4NL' => 'E02000421',
        '4NN' => 'E02000421',
        '4NP' => 'E02000421',
        '4NQ' => 'E02000421',
        '4NR' => 'E02000421',
        '4NS' => 'E02000421',
        '4NT' => 'E02000421',
        '4NU' => 'E02000421',
        '4NW' => 'E02000421',
        '4NX' => 'E02000421',
        '4NY' => 'E02000421',
        '4NZ' => 'E02000421',
        '4PA' => 'E02000421',
        '4PB' => 'E02000421',
        '4PD' => 'E02000427',
        '4PE' => 'E02000421',
        '4PF' => 'E02000421',
        '4PG' => 'E02000421',
        '4PH' => 'E02000421',
        '4PJ' => 'E02000421',
        '4PL' => 'E02000421',
        '4PN' => 'E02000421',
        '4PP' => 'E02000421',
        '4PQ' => 'E02000421',
        '4PR' => 'E02000421',
        '4PS' => 'E02000421',
        '4PT' => 'E02000421',
        '4PU' => 'E02000421',
        '4PW' => 'E02000421',
        '4PX' => 'E02000421',
        '4PY' => 'E02000421',
        '4PZ' => 'E02000421',
        '4QA' => 'E02000421',
        '4QB' => 'E02000421',
        '4QD' => 'E02000421',
        '4QE' => 'E02000421',
        '4QF' => 'E02000421',
        '4QG' => 'E02000421',
        '4QH' => 'E02000421',
        '4QJ' => 'E02000421',
        '4QL' => 'E02000421',
        '4QN' => 'E02000421',
        '4QQ' => 'E02000421',
        '4QR' => 'E02000421',
        '4QS' => 'E02000421',
        '4QT' => 'E02000421',
        '4QU' => 'E02000421',
        '4QW' => 'E02000421',
        '4QX' => 'E02000421',
        '4QZ' => 'E02000421',
        '4RA' => 'E02000421',
        '4RB' => 'E02000425',
        '4RD' => 'E02000421',
        '4RE' => 'E02000421',
        '4RG' => 'E02000421',
        '4RH' => 'E02000421',
        '4RJ' => 'E02000420',
        '4RN' => 'E02000420',
        '4RP' => 'E02000420',
        '4RQ' => 'E02000421',
        '4RR' => 'E02000420',
        '4RS' => 'E02000420',
        '4RT' => 'E02000420',
        '4RU' => 'E02000421',
        '4RW' => 'E02000420',
        '4RX' => 'E02000421',
        '4RY' => 'E02000421',
        '4RZ' => 'E02000421',
        '4SA' => 'E02000421',
        '4SB' => 'E02000421',
        '4SD' => 'E02000420',
        '4SE' => 'E02000420',
        '4SF' => 'E02000420',
        '4SG' => 'E02000420',
        '4SH' => 'E02000420',
        '4SJ' => 'E02000420',
        '4SL' => 'E02000420',
        '4SN' => 'E02000420',
        '4SP' => 'E02000420',
        '4SQ' => 'E02000420',
        '4SR' => 'E02000420',
        '4SS' => 'E02000420',
        '4ST' => 'E02000420',
        '4SU' => 'E02000421',
        '4SW' => 'E02000420',
        '4SX' => 'E02000420',
        '4SY' => 'E02000420',
        '4SZ' => 'E02000421',
        '4TA' => 'E02000421',
        '4TB' => 'E02000421',
        '4TD' => 'E02000421',
        '4TG' => 'E02000420',
        '4TH' => 'E02000420',
        '4TJ' => 'E02000420',
        '4TN' => 'E02000561',
        '4TP' => 'E02000428',
        '4TQ' => 'E02000421',
        '4TR' => 'E02000420',
        '4TS' => 'E02000420',
        '4TT' => 'E02000427',
        '4TU' => 'E02000421',
        '4TW' => 'E02000427',
        '4TX' => 'E02000421',
        '4TY' => 'E02000421',
        '4TZ' => 'E02000421',
        '4UA' => 'E02000421',
        '4UB' => 'E02000421',
        '4UD' => 'E02000421',
        '4UE' => 'E02000421',
        '4UF' => 'E02000421',
        '4UG' => 'E02000421',
        '4UH' => 'E02000421',
        '4UJ' => 'E02000421',
        '4UL' => 'E02000421',
        '4UN' => 'E02000427',
        '4UP' => 'E02000421',
        '4UR' => 'E02000421',
        '4UT' => 'E02000427',
        '4UU' => 'E02000421',
        '4UW' => 'E02000427',
        '4UY' => 'E02000427',
        '4UZ' => 'E02000427',
        '4WA' => 'E02000427',
        '4WB' => 'E02000427',
        '4WD' => 'E02000427',
        '4WE' => 'E02000427',
        '4WF' => 'E02000427',
        '4WG' => 'E02000427',
        '4WH' => 'E02000427',
        '4WJ' => 'E02000427',
        '4WL' => 'E02000427',
        '4WN' => 'E02000427',
        '4WP' => 'E02000427',
        '4WQ' => 'E02000427',
        '4WR' => 'E02000427',
        '4WS' => 'E02000427',
        '4WT' => 'E02000427',
        '4WU' => 'E02000427',
        '4WW' => 'E02000427',
        '4WX' => 'E02000561',
        '4WY' => 'E02000427',
        '4WZ' => 'E02000427',
        '4XA' => 'E02000427',
        '4XB' => 'E02000561',
        '4XD' => 'E02000427',
        '4XE' => 'E02000427',
        '4XF' => 'E02000561',
        '4XG' => 'E02000427',
        '4XH' => 'E02000427',
        '4XJ' => 'E02000427',
        '4XL' => 'E02000427',
        '4XN' => 'E02000427',
        '4XP' => 'E02000427',
        '4XQ' => 'E02000427',
        '4XR' => 'E02000421',
        '4XS' => 'E02000427',
        '4XT' => 'E02000427',
        '4XU' => 'E02000427',
        '4XW' => 'E02000427',
        '4XX' => 'E02000427',
        '4XY' => 'E02000427',
        '4XZ' => 'E02000427',
        '4YA' => 'E02000427',
        '4YB' => 'E02000427',
        '4YD' => 'E02000427',
        '4YE' => 'E02000427',
        '4YF' => 'E02000427',
        '4YG' => 'E02000427',
        '4YH' => 'E02000427',
        '4YJ' => 'E02000427',
        '4YL' => 'E02000427',
        '4YX' => 'E02000427',
        '4YY' => 'E02000427',
        '4YZ' => 'E02000427',
        '4ZA' => 'E02000421',
        '4ZB' => 'E02000427',
        '4ZD' => 'E02000421',
        '4ZE' => 'E02000421',
        '4ZF' => 'E02000421',
        '4ZG' => 'E02000427',
        '4ZH' => 'E02000427',
        '4ZJ' => 'E02000427',
        '4ZL' => 'E02000427',
        '4ZN' => 'E02000421',
        '4ZP' => 'E02000421',
        '4ZQ' => 'E02000427',
        '4ZR' => 'E02000427',
        '4ZS' => 'E02000427',
        '4ZT' => 'E02000427',
        '4ZU' => 'E02000427',
        '4ZW' => 'E02000427',
        '5AA' => 'E02000420',
        '5AB' => 'E02000420',
        '5AD' => 'E02000420',
        '5AE' => 'E02000420',
        '5AF' => 'E02000420',
        '5AG' => 'E02000420',
        '5AH' => 'E02000422',
        '5AJ' => 'E02000420',
        '5AL' => 'E02000420',
        '5AN' => 'E02000420',
        '5AP' => 'E02000420',
        '5AQ' => 'E02000422',
        '5AR' => 'E02000422',
        '5AS' => 'E02000422',
        '5AT' => 'E02000422',
        '5AU' => 'E02000422',
        '5AW' => 'E02000420',
        '5AX' => 'E02000422',
        '5AY' => 'E02000422',
        '5AZ' => 'E02000422',
        '5BA' => 'E02000422',
        '5BB' => 'E02000422',
        '5BD' => 'E02000422',
        '5BE' => 'E02000422',
        '5BF' => 'E02000422',
        '5BG' => 'E02000422',
        '5BH' => 'E02000422',
        '5BJ' => 'E02000422',
        '5BL' => 'E02000423',
        '5BN' => 'E02000422',
        '5BP' => 'E02000422',
        '5BQ' => 'E02000422',
        '5BS' => 'E02000420',
        '5BT' => 'E02000420',
        '5BU' => 'E02000420',
        '5BW' => 'E02000422',
        '5BX' => 'E02000420',
        '5BY' => 'E02000420',
        '5BZ' => 'E02000427',
        '5DA' => 'E02000420',
        '5DB' => 'E02000420',
        '5DD' => 'E02000421',
        '5DE' => 'E02000420',
        '5DF' => 'E02000420',
        '5DG' => 'E02000420',
        '5DH' => 'E02000420',
        '5DJ' => 'E02000420',
        '5DL' => 'E02000420',
        '5DN' => 'E02000420',
        '5DP' => 'E02000427',
        '5DQ' => 'E02000422',
        '5DR' => 'E02000421',
        '5DS' => 'E02000420',
        '5DT' => 'E02000420',
        '5DU' => 'E02000420',
        '5DW' => 'E02000420',
        '5DX' => 'E02000420',
        '5DY' => 'E02000420',
        '5DZ' => 'E02000422',
        '5EA' => 'E02000420',
        '5EB' => 'E02000422',
        '5ED' => 'E02000422',
        '5EE' => 'E02000427',
        '5EF' => 'E02000423',
        '5EG' => 'E02000422',
        '5EH' => 'E02000422',
        '5EJ' => 'E02000420',
        '5EL' => 'E02000422',
        '5EN' => 'E02000420',
        '5EP' => 'E02000420',
        '5EQ' => 'E02000422',
        '5ER' => 'E02000420',
        '5ES' => 'E02000420',
        '5ET' => 'E02000420',
        '5EU' => 'E02000420',
        '5EW' => 'E02000427',
        '5EY' => 'E02000420',
        '5FB' => 'E02000427',
        '5HA' => 'E02000420',
        '5HB' => 'E02000422',
        '5HD' => 'E02000422',
        '5HE' => 'E02000422',
        '5HF' => 'E02000422',
        '5HG' => 'E02000422',
        '5HH' => 'E02000422',
        '5HJ' => 'E02000422',
        '5HL' => 'E02000420',
        '5HN' => 'E02000420',
        '5HP' => 'E02000422',
        '5HQ' => 'E02000420',
        '5HR' => 'E02000422',
        '5HS' => 'E02000422',
        '5HT' => 'E02000422',
        '5HU' => 'E02000420',
        '5HX' => 'E02000420',
        '5HY' => 'E02000420',
        '5HZ' => 'E02000422',
        '5JA' => 'E02000422',
        '5JB' => 'E02000420',
        '5JD' => 'E02000422',
        '5JE' => 'E02000422',
        '5JF' => 'E02000422',
        '5JG' => 'E02000422',
        '5JH' => 'E02000422',
        '5JJ' => 'E02000422',
        '5JL' => 'E02000422',
        '5JN' => 'E02000422',
        '5JP' => 'E02000420',
        '5JQ' => 'E02000422',
        '5JR' => 'E02000420',
        '5JS' => 'E02000420',
        '5JT' => 'E02000421',
        '5JU' => 'E02000427',
        '5JW' => 'E02000427',
        '5JX' => 'E02000421',
        '5JY' => 'E02000421',
        '5JZ' => 'E02000421',
        '5LA' => 'E02000420',
        '5LB' => 'E02000422',
        '5LD' => 'E02000421',
        '5LE' => 'E02000420',
        '5LF' => 'E02000420',
        '5LG' => 'E02000420',
        '5LH' => 'E02000420',
        '5LJ' => 'E02000420',
        '5LL' => 'E02000420',
        '5LN' => 'E02000420',
        '5LP' => 'E02000422',
        '5LQ' => 'E02000420',
        '5LR' => 'E02000422',
        '5LS' => 'E02000420',
        '5LT' => 'E02000420',
        '5LU' => 'E02000422',
        '5LW' => 'E02000422',
        '5LX' => 'E02000422',
        '5LY' => 'E02000420',
        '5LZ' => 'E02000422',
        '5NA' => 'E02000422',
        '5NB' => 'E02000422',
        '5ND' => 'E02000422',
        '5NE' => 'E02000422',
        '5NF' => 'E02000422',
        '5NG' => 'E02000422',
        '5NH' => 'E02000422',
        '5NJ' => 'E02000422',
        '5NL' => 'E02000422',
        '5NN' => 'E02000420',
        '5NP' => 'E02000420',
        '5NQ' => 'E02000422',
        '5NR' => 'E02000420',
        '5NS' => 'E02000420',
        '5NT' => 'E02000422',
        '5NU' => 'E02000421',
        '5NW' => 'E02000422',
        '5NY' => 'E02000421',
        '5PA' => 'E02000421',
        '5PB' => 'E02000421',
        '5PD' => 'E02000420',
        '5PF' => 'E02000421',
        '5PJ' => 'E02000421',
        '5PP' => 'E02000422',
        '5PQ' => 'E02000421',
        '5PU' => 'E02000422',
        '5PW' => 'E02000420',
        '5PX' => 'E02000422',
        '5PY' => 'E02000422',
        '5PZ' => 'E02000422',
        '5QA' => 'E02000422',
        '5QB' => 'E02000422',
        '5QD' => 'E02000422',
        '5QE' => 'E02000422',
        '5QF' => 'E02000422',
        '5QG' => 'E02000422',
        '5QH' => 'E02000422',
        '5QJ' => 'E02000422',
        '5QL' => 'E02000422',
        '5QN' => 'E02000422',
        '5QP' => 'E02000422',
        '5QQ' => 'E02000422',
        '5QR' => 'E02000422',
        '5QS' => 'E02000422',
        '5QT' => 'E02000422',
        '5QU' => 'E02000422',
        '5QX' => 'E02000422',
        '5QY' => 'E02000422',
        '5QZ' => 'E02000422',
        '5RA' => 'E02000422',
        '5RD' => 'E02000423',
        '5RE' => 'E02000422',
        '5RG' => 'E02000422',
        '5RH' => 'E02000422',
        '5RL' => 'E02000422',
        '5RN' => 'E02000422',
        '5RP' => 'E02000422',
        '5RT' => 'E02000422',
        '5RU' => 'E02000422',
        '5RX' => 'E02000422',
        '5RY' => 'E02000422',
        '5RZ' => 'E02000422',
        '5SA' => 'E02000427',
        '5SB' => 'E02000427',
        '5UZ' => 'E02000427',
        '5WA' => 'E02000427',
        '5WB' => 'E02000422',
        '5WD' => 'E02000427',
        '5WE' => 'E02000427',
        '5WF' => 'E02000427',
        '5WG' => 'E02000427',
        '5WH' => 'E02000427',
        '5WJ' => 'E02000427',
        '5WL' => 'E02000427',
        '5WN' => 'E02000427',
        '5WP' => 'E02000427',
        '5WQ' => 'E02000427',
        '5WR' => 'E02000427',
        '5WS' => 'E02000427',
        '5WT' => 'E02000427',
        '5WU' => 'E02000427',
        '5WW' => 'E02000427',
        '5WX' => 'E02000427',
        '5WY' => 'E02000427',
        '5WZ' => 'E02000427',
        '5XA' => 'E02000427',
        '5XB' => 'E02000427',
        '5XD' => 'E02000427',
        '5XE' => 'E02000561',
        '5XF' => 'E02000427',
        '5XG' => 'E02000427',
        '5XH' => 'E02000427',
        '5XJ' => 'E02000427',
        '5XQ' => 'E02000427',
        '5XT' => 'E02000427',
        '5XU' => 'E02000427',
        '5XW' => 'E02000427',
        '5XY' => 'E02000427',
        '5XZ' => 'E02000427',
        '5ZA' => 'E02000427',
        '5ZB' => 'E02000427',
        '5ZD' => 'E02000427',
        '5ZE' => 'E02000427',
        '5ZF' => 'E02000427',
        '6AA' => 'E02000425',
        '6AB' => 'E02000425',
        '6AD' => 'E02000425',
        '6AE' => 'E02000345',
        '6AF' => 'E02000425',
        '6AG' => 'E02000345',
        '6AH' => 'E02000425',
        '6AJ' => 'E02000425',
        '6AL' => 'E02000425',
        '6AN' => 'E02000345',
        '6AP' => 'E02000425',
        '6AQ' => 'E02000428',
        '6AR' => 'E02000425',
        '6AS' => 'E02000425',
        '6AT' => 'E02000425',
        '6AU' => 'E02000425',
        '6AW' => 'E02000425',
        '6AX' => 'E02000425',
        '6AY' => 'E02000425',
        '6AZ' => 'E02000425',
        '6BA' => 'E02000425',
        '6BB' => 'E02000425',
        '6BD' => 'E02000425',
        '6BE' => 'E02000425',
        '6BF' => 'E02000425',
        '6BG' => 'E02000425',
        '6BH' => 'E02000425',
        '6BJ' => 'E02000425',
        '6BL' => 'E02000425',
        '6BN' => 'E02000428',
        '6BP' => 'E02000425',
        '6BQ' => 'E02000425',
        '6BS' => 'E02000425',
        '6BT' => 'E02000425',
        '6BU' => 'E02000425',
        '6BW' => 'E02000425',
        '6BX' => 'E02000425',
        '6BY' => 'E02000425',
        '6BZ' => 'E02000425',
        '6DA' => 'E02000425',
        '6DB' => 'E02000425',
        '6DD' => 'E02000425',
        '6DE' => 'E02000425',
        '6DF' => 'E02000425',
        '6DG' => 'E02000425',
        '6DH' => 'E02000425',
        '6DL' => 'E02000425',
        '6DN' => 'E02000428',
        '6DP' => 'E02000425',
        '6DQ' => 'E02000425',
        '6DR' => 'E02000425',
        '6DS' => 'E02000425',
        '6DT' => 'E02000425',
        '6DU' => 'E02000428',
        '6DW' => 'E02000428',
        '6DX' => 'E02000428',
        '6DY' => 'E02000428',
        '6DZ' => 'E02000428',
        '6EA' => 'E02000428',
        '6EB' => 'E02000425',
        '6ED' => 'E02000428',
        '6EE' => 'E02000428',
        '6EF' => 'E02000428',
        '6EG' => 'E02000427',
        '6EH' => 'E02000428',
        '6EJ' => 'E02000425',
        '6EL' => 'E02000427',
        '6EN' => 'E02000427',
        '6EP' => 'E02000428',
        '6EQ' => 'E02000428',
        '6ER' => 'E02000428',
        '6ES' => 'E02000428',
        '6ET' => 'E02000428',
        '6EW' => 'E02000427',
        '6FN' => 'E02000428',
        '6GA' => 'E02000425',
        '6GD' => 'E02000425',
        '6HA' => 'E02000428',
        '6HB' => 'E02000428',
        '6HD' => 'E02000428',
        '6HH' => 'E02000428',
        '6HL' => 'E02000428',
        '6HP' => 'E02000428',
        '6HR' => 'E02000428',
        '6HS' => 'E02000428',
        '6HT' => 'E02000428',
        '6HU' => 'E02000428',
        '6HX' => 'E02000428',
        '6HZ' => 'E02000427',
        '6JA' => 'E02000428',
        '6JB' => 'E02000428',
        '6JD' => 'E02000428',
        '6JF' => 'E02000428',
        '6JH' => 'E02000428',
        '6JJ' => 'E02000425',
        '6JL' => 'E02000425',
        '6JN' => 'E02000425',
        '6JP' => 'E02000425',
        '6JR' => 'E02000425',
        '6JS' => 'E02000425',
        '6JT' => 'E02000425',
        '6JU' => 'E02000425',
        '6JX' => 'E02000425',
        '6JY' => 'E02000425',
        '6LA' => 'E02000425',
        '6LB' => 'E02000425',
        '6LD' => 'E02000425',
        '6LF' => 'E02000428',
        '6LG' => 'E02000425',
        '6LH' => 'E02000425',
        '6LJ' => 'E02000425',
        '6LL' => 'E02000425',
        '6LN' => 'E02000425',
        '6LP' => 'E02000425',
        '6LQ' => 'E02000425',
        '6LR' => 'E02000425',
        '6LS' => 'E02000425',
        '6LT' => 'E02000425',
        '6LU' => 'E02000425',
        '6LW' => 'E02000425',
        '6LX' => 'E02000345',
        '6LY' => 'E02000425',
        '6LZ' => 'E02000425',
        '6NA' => 'E02000345',
        '6NB' => 'E02000425',
        '6ND' => 'E02000425',
        '6NE' => 'E02000428',
        '6NF' => 'E02000425',
        '6NG' => 'E02000425',
        '6NH' => 'E02000428',
        '6NJ' => 'E02000428',
        '6NL' => 'E02000428',
        '6NP' => 'E02000428',
        '6NQ' => 'E02000428',
        '6NR' => 'E02000428',
        '6NS' => 'E02000428',
        '6NT' => 'E02000428',
        '6NU' => 'E02000428',
        '6NW' => 'E02000428',
        '6NZ' => 'E02000428',
        '6PA' => 'E02000428',
        '6PB' => 'E02000428',
        '6PD' => 'E02000428',
        '6PE' => 'E02000427',
        '6PH' => 'E02000428',
        '6PJ' => 'E02000428',
        '6PL' => 'E02000428',
        '6PP' => 'E02000428',
        '6PQ' => 'E02000428',
        '6PR' => 'E02000428',
        '6PS' => 'E02000428',
        '6PT' => 'E02000428',
        '6PU' => 'E02000428',
        '6PX' => 'E02000428',
        '6PY' => 'E02000428',
        '6PZ' => 'E02000347',
        '6QA' => 'E02000428',
        '6QB' => 'E02000428',
        '6QD' => 'E02000428',
        '6QE' => 'E02000428',
        '6QH' => 'E02000428',
        '6QJ' => 'E02000428',
        '6QL' => 'E02000428',
        '6QN' => 'E02000428',
        '6QP' => 'E02000428',
        '6QR' => 'E02000428',
        '6QS' => 'E02000428',
        '6RA' => 'E02000428',
        '6RB' => 'E02000346',
        '6RD' => 'E02000428',
        '6RH' => 'E02000428',
        '6RJ' => 'E02000428',
        '6RL' => 'E02000428',
        '6RN' => 'E02000428',
        '6RP' => 'E02000428',
        '6RQ' => 'E02000428',
        '6RR' => 'E02000428',
        '6RS' => 'E02000428',
        '6RT' => 'E02000428',
        '6RU' => 'E02000428',
        '6RW' => 'E02000428',
        '6RX' => 'E02000428',
        '6RY' => 'E02000428',
        '6RZ' => 'E02000428',
        '6SA' => 'E02000428',
        '6SB' => 'E02000428',
        '6SD' => 'E02000428',
        '6SE' => 'E02000428',
        '6SF' => 'E02000427',
        '6SG' => 'E02000428',
        '6SH' => 'E02000428',
        '6SJ' => 'E02000428',
        '6SL' => 'E02000428',
        '6SN' => 'E02000428',
        '6SP' => 'E02000428',
        '6SQ' => 'E02000428',
        '6SR' => 'E02000428',
        '6SS' => 'E02000428',
        '6ST' => 'E02000428',
        '6SU' => 'E02000428',
        '6SW' => 'E02000428',
        '6SX' => 'E02000428',
        '6SY' => 'E02000428',
        '6SZ' => 'E02000428',
        '6TA' => 'E02000425',
        '6TB' => 'E02000425',
        '6TD' => 'E02000425',
        '6TE' => 'E02000428',
        '6TH' => 'E02000425',
        '6TJ' => 'E02000425',
        '6TL' => 'E02000425',
        '6TP' => 'E02000425',
        '6TR' => 'E02000425',
        '6TS' => 'E02000425',
        '6TT' => 'E02000425',
        '6TU' => 'E02000425',
        '6TW' => 'E02000428',
        '6TX' => 'E02000425',
        '6TY' => 'E02000427',
        '6UA' => 'E02000425',
        '6UB' => 'E02000425',
        '6UD' => 'E02000425',
        '6UE' => 'E02000425',
        '6UF' => 'E02000425',
        '6UG' => 'E02000425',
        '6UH' => 'E02000425',
        '6UJ' => 'E02000425',
        '6UL' => 'E02000425',
        '6UN' => 'E02000425',
        '6UP' => 'E02000425',
        '6UQ' => 'E02000425',
        '6UR' => 'E02000425',
        '6US' => 'E02000425',
        '6UT' => 'E02000425',
        '6UU' => 'E02000425',
        '6UW' => 'E02000425',
        '6UX' => 'E02000425',
        '6UY' => 'E02000425',
        '6UZ' => 'E02000425',
        '6WA' => 'E02000427',
        '6WB' => 'E02000427',
        '6WD' => 'E02000428',
        '6WE' => 'E02000427',
        '6WF' => 'E02000427',
        '6WG' => 'E02000428',
        '6WH' => 'E02000428',
        '6WJ' => 'E02000427',
        '6WL' => 'E02000427',
        '6WN' => 'E02000428',
        '6WP' => 'E02000561',
        '6WQ' => 'E02000427',
        '6WR' => 'E02000427',
        '6WS' => 'E02000427',
        '6WT' => 'E02000427',
        '6WU' => 'E02000427',
        '6WW' => 'E02000561',
        '6WX' => 'E02000427',
        '6WY' => 'E02000561',
        '6WZ' => 'E02000427',
        '6XA' => 'E02000561',
        '6XB' => 'E02000427',
        '6XD' => 'E02000427',
        '6XE' => 'E02000428',
        '6XF' => 'E02000427',
        '6XG' => 'E02000427',
        '6XH' => 'E02000427',
        '6XJ' => 'E02000427',
        '6XL' => 'E02000427',
        '6XN' => 'E02000427',
        '6XP' => 'E02000561',
        '6XQ' => 'E02000427',
        '6XR' => 'E02000427',
        '6XS' => 'E02000427',
        '6XT' => 'E02000561',
        '6XU' => 'E02000561',
        '6XW' => 'E02000427',
        '6XX' => 'E02000427',
        '6XY' => 'E02000427',
        '6XZ' => 'E02000427',
        '6YA' => 'E02000427',
        '6YB' => 'E02000427',
        '6YD' => 'E02000427',
        '6YE' => 'E02000427',
        '6ZA' => 'E02000427',
        '6ZF' => 'E02000427',
        '6ZT' => 'E02000427',
        '9AE' => 'E02000561',
        '9AG' => 'E02000427',
        '9AH' => 'E02000561',
        '9AJ' => 'E02000561',
        '9AP' => 'E02000561',
        '9AR' => 'E02000561',
        '9AT' => 'E02000427',
        '9AY' => 'E02000427',
        '9BF' => 'E02000561',
        '9BG' => 'E02000427',
        '9BL' => 'E02000427',
        '9BN' => 'E02000561',
        '9BP' => 'E02000427',
        '9BQ' => 'E02000561',
        '9BR' => 'E02000554',
        '9BS' => 'E02000427',
        '9BT' => 'E02000427',
        '9BU' => 'E02000561',
        '9BW' => 'E02000427',
        '9BX' => 'E02000427',
        '9BY' => 'E02000554',
        '9BZ' => 'E02000561',
        '9DA' => 'E02000561',
        '9DB' => 'E02000561',
        '9DD' => 'E02000561',
        '9DE' => 'E02000561',
        '9DF' => 'E02000561',
        '9DG' => 'E02000561',
        '9DH' => 'E02000561',
        '9DJ' => 'E02000561',
        '9DL' => 'E02000561',
        '9DN' => 'E02000561',
        '9DP' => 'E02000561',
        '9DQ' => 'E02000561',
        '9DR' => 'E02000561',
        '9DS' => 'E02000561',
        '9DT' => 'E02000561',
        '9DU' => 'E02000561',
        '9DW' => 'E02000561',
        '9DX' => 'E02000561',
        '9DY' => 'E02000561',
        '9DZ' => 'E02000561',
        '9EB' => 'E02000561',
        '9ED' => 'E02000561',
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
