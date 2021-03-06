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
final class RG19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02003382',
        '3AB' => 'E02003380',
        '3AD' => 'E02003380',
        '3AL' => 'E02003380',
        '3AP' => 'E02003380',
        '3AZ' => 'E02003380',
        '3BF' => 'E02003380',
        '3BG' => 'E02003382',
        '3BZ' => 'E02003380',
        '3DR' => 'E02003382',
        '3DX' => 'E02003395',
        '3DY' => 'E02003395',
        '3DZ' => 'E02003395',
        '3EA' => 'E02003377',
        '3EB' => 'E02003382',
        '3ED' => 'E02003395',
        '3EE' => 'E02003382',
        '3EF' => 'E02003382',
        '3EG' => 'E02003382',
        '3EH' => 'E02003377',
        '3EJ' => 'E02003395',
        '3EL' => 'E02003395',
        '3EN' => 'E02003377',
        '3EP' => 'E02003382',
        '3EQ' => 'E02003382',
        '3ER' => 'E02003382',
        '3ES' => 'E02003395',
        '3ET' => 'E02003395',
        '3EU' => 'E02003382',
        '3EW' => 'E02003382',
        '3EX' => 'E02003382',
        '3EY' => 'E02003395',
        '3EZ' => 'E02003395',
        '3FE' => 'E02003382',
        '3FL' => 'E02003382',
        '3FR' => 'E02003380',
        '3FS' => 'E02003380',
        '3FT' => 'E02003380',
        '3FU' => 'E02003380',
        '3FY' => 'E02003380',
        '3HD' => 'E02003382',
        '3HE' => 'E02003395',
        '3HN' => 'E02003382',
        '3HP' => 'E02003382',
        '3HQ' => 'E02003382',
        '3HU' => 'E02003382',
        '3HW' => 'E02003382',
        '3HX' => 'E02003382',
        '3HY' => 'E02003382',
        '3JA' => 'E02003382',
        '3JB' => 'E02003382',
        '3JD' => 'E02003382',
        '3JG' => 'E02003382',
        '3JH' => 'E02003382',
        '3JJ' => 'E02003382',
        '3JL' => 'E02003382',
        '3JP' => 'E02003382',
        '3JQ' => 'E02003382',
        '3JY' => 'E02003380',
        '3LA' => 'E02003380',
        '3LB' => 'E02003380',
        '3LD' => 'E02003380',
        '3LE' => 'E02003380',
        '3LF' => 'E02003380',
        '3LG' => 'E02003380',
        '3PE' => 'E02003382',
        '3PF' => 'E02003382',
        '3PH' => 'E02003382',
        '3PJ' => 'E02003382',
        '3PL' => 'E02003382',
        '3PN' => 'E02003382',
        '3PP' => 'E02003382',
        '3PQ' => 'E02003382',
        '3PR' => 'E02003382',
        '3QJ' => 'E02003382',
        '3QZ' => 'E02003382',
        '3RA' => 'E02003380',
        '3RD' => 'E02003380',
        '3RF' => 'E02003380',
        '3RG' => 'E02003382',
        '3RH' => 'E02003382',
        '3RJ' => 'E02003382',
        '3RL' => 'E02003382',
        '3RN' => 'E02003382',
        '3RP' => 'E02003380',
        '3RQ' => 'E02003382',
        '3RR' => 'E02003380',
        '3RS' => 'E02003380',
        '3RT' => 'E02003380',
        '3RU' => 'E02003380',
        '3RW' => 'E02003382',
        '3RX' => 'E02003380',
        '3RY' => 'E02003380',
        '3RZ' => 'E02003380',
        '3SA' => 'E02003380',
        '3SB' => 'E02003380',
        '3SD' => 'E02003380',
        '3SE' => 'E02003380',
        '3SF' => 'E02003382',
        '3SG' => 'E02003380',
        '3SH' => 'E02003380',
        '3SJ' => 'E02003380',
        '3SL' => 'E02003380',
        '3SN' => 'E02003380',
        '3SP' => 'E02003380',
        '3SQ' => 'E02003382',
        '3SR' => 'E02003380',
        '3SS' => 'E02003382',
        '3SU' => 'E02003380',
        '3SW' => 'E02003380',
        '3SY' => 'E02003382',
        '3SZ' => 'E02003382',
        '3TB' => 'E02003380',
        '3TD' => 'E02003380',
        '3TE' => 'E02003380',
        '3TF' => 'E02003380',
        '3TG' => 'E02003380',
        '3TH' => 'E02003380',
        '3TJ' => 'E02003380',
        '3TL' => 'E02003380',
        '3TN' => 'E02003380',
        '3TP' => 'E02003380',
        '3TQ' => 'E02003380',
        '3TR' => 'E02003380',
        '3TS' => 'E02003380',
        '3TT' => 'E02003380',
        '3TU' => 'E02003380',
        '3TW' => 'E02003380',
        '3TX' => 'E02003380',
        '3TY' => 'E02003380',
        '3TZ' => 'E02003380',
        '3UA' => 'E02003380',
        '3UB' => 'E02003380',
        '3UD' => 'E02003380',
        '3UE' => 'E02003380',
        '3UF' => 'E02003380',
        '3UG' => 'E02003380',
        '3UJ' => 'E02003380',
        '3UL' => 'E02003380',
        '3UN' => 'E02003380',
        '3UP' => 'E02003380',
        '3UR' => 'E02003380',
        '3US' => 'E02003382',
        '3UT' => 'E02003380',
        '3UW' => 'E02003380',
        '3UX' => 'E02003380',
        '3UY' => 'E02003382',
        '3WE' => 'E02003395',
        '3WF' => 'E02003395',
        '3WG' => 'E02003395',
        '3WH' => 'E02003377',
        '3WJ' => 'E02003395',
        '3WQ' => 'E02003377',
        '3WS' => 'E02003377',
        '3WT' => 'E02003377',
        '3WU' => 'E02003377',
        '3WW' => 'E02003377',
        '3WX' => 'E02003377',
        '3WY' => 'E02003377',
        '3WZ' => 'E02003395',
        '3XA' => 'E02003382',
        '3XB' => 'E02003382',
        '3XD' => 'E02003382',
        '3XE' => 'E02003380',
        '3XF' => 'E02003380',
        '3XG' => 'E02003382',
        '3XJ' => 'E02003380',
        '3XL' => 'E02003380',
        '3XN' => 'E02003380',
        '3XP' => 'E02003382',
        '3XQ' => 'E02003382',
        '3XR' => 'E02003380',
        '3XS' => 'E02003382',
        '3XT' => 'E02003382',
        '3XU' => 'E02003382',
        '3XW' => 'E02003382',
        '3XX' => 'E02003382',
        '3XY' => 'E02003382',
        '3XZ' => 'E02003382',
        '3YL' => 'E02003380',
        '3YN' => 'E02003382',
        '3YP' => 'E02003380',
        '3YR' => 'E02003382',
        '3YS' => 'E02003382',
        '3YT' => 'E02003382',
        '3YU' => 'E02003380',
        '3YW' => 'E02003380',
        '3YX' => 'E02003380',
        '3YY' => 'E02003382',
        '3YZ' => 'E02003380',
        '3ZD' => 'E02003377',
        '3ZE' => 'E02003380',
        '3ZF' => 'E02003377',
        '3ZG' => 'E02003377',
        '3ZH' => 'E02003382',
        '3ZJ' => 'E02003377',
        '3ZN' => 'E02003380',
        '3ZP' => 'E02003377',
        '3ZQ' => 'E02003377',
        '3ZR' => 'E02003377',
        '3ZS' => 'E02003377',
        '3ZT' => 'E02003380',
        '3ZX' => 'E02003395',
        '3ZY' => 'E02003382',
        '4AA' => 'E02003383',
        '4AB' => 'E02003377',
        '4AD' => 'E02003383',
        '4AE' => 'E02003377',
        '4AF' => 'E02003377',
        '4AG' => 'E02003377',
        '4AH' => 'E02003380',
        '4AJ' => 'E02003377',
        '4AL' => 'E02003377',
        '4AN' => 'E02003377',
        '4AP' => 'E02003380',
        '4AQ' => 'E02003377',
        '4AR' => 'E02003383',
        '4AS' => 'E02003377',
        '4AZ' => 'E02003377',
        '4BA' => 'E02003395',
        '4BJ' => 'E02003383',
        '4BQ' => 'E02003377',
        '4DA' => 'E02003395',
        '4DN' => 'E02003377',
        '4DX' => 'E02003382',
        '4DY' => 'E02003383',
        '4EL' => 'E02003377',
        '4EN' => 'E02003377',
        '4EP' => 'E02003377',
        '4ER' => 'E02003377',
        '4ES' => 'E02003383',
        '4EW' => 'E02003377',
        '4FA' => 'E02003383',
        '4FB' => 'E02003383',
        '4FD' => 'E02003383',
        '4FF' => 'E02003383',
        '4FG' => 'E02003383',
        '4FH' => 'E02003383',
        '4FJ' => 'E02003383',
        '4FN' => 'E02003383',
        '4FP' => 'E02003377',
        '4FQ' => 'E02003383',
        '4FW' => 'E02003377',
        '4FX' => 'E02003383',
        '4FZ' => 'E02003377',
        '4GA' => 'E02003383',
        '4GB' => 'E02003383',
        '4GD' => 'E02003377',
        '4GE' => 'E02003377',
        '4GF' => 'E02003383',
        '4GG' => 'E02003383',
        '4GH' => 'E02003383',
        '4GJ' => 'E02003383',
        '4GL' => 'E02003383',
        '4GN' => 'E02003383',
        '4GP' => 'E02003383',
        '4GQ' => 'E02003383',
        '4GR' => 'E02003377',
        '4GS' => 'E02003377',
        '4GT' => 'E02003383',
        '4GU' => 'E02003377',
        '4GW' => 'E02003383',
        '4GX' => 'E02003383',
        '4GY' => 'E02003383',
        '4GZ' => 'E02003377',
        '4HS' => 'E02003382',
        '4HZ' => 'E02003382',
        '4JD' => 'E02003382',
        '4JE' => 'E02003377',
        '4JF' => 'E02003383',
        '4JR' => 'E02003383',
        '4JT' => 'E02003383',
        '4JZ' => 'E02003377',
        '4LD' => 'E02003383',
        '4LH' => 'E02003383',
        '4LJ' => 'E02003383',
        '4LL' => 'E02003383',
        '4LN' => 'E02003383',
        '4LP' => 'E02003377',
        '4LR' => 'E02003383',
        '4LS' => 'E02003383',
        '4LT' => 'E02003383',
        '4LU' => 'E02003383',
        '4LW' => 'E02003377',
        '4LX' => 'E02003383',
        '4LY' => 'E02003383',
        '4LZ' => 'E02003377',
        '4NA' => 'E02003377',
        '4NB' => 'E02003377',
        '4ND' => 'E02003377',
        '4NF' => 'E02003377',
        '4NG' => 'E02003377',
        '4NH' => 'E02003377',
        '4NJ' => 'E02003377',
        '4NL' => 'E02003377',
        '4NN' => 'E02003377',
        '4NP' => 'E02003377',
        '4NQ' => 'E02003377',
        '4NR' => 'E02003377',
        '4NS' => 'E02003377',
        '4NT' => 'E02003377',
        '4NU' => 'E02003377',
        '4NW' => 'E02003377',
        '4NX' => 'E02003377',
        '4NY' => 'E02003383',
        '4NZ' => 'E02003377',
        '4PA' => 'E02003377',
        '4PB' => 'E02003383',
        '4PD' => 'E02003377',
        '4PE' => 'E02003377',
        '4PF' => 'E02003383',
        '4PG' => 'E02003377',
        '4PH' => 'E02003377',
        '4PJ' => 'E02003383',
        '4PL' => 'E02003377',
        '4PN' => 'E02003383',
        '4PP' => 'E02003377',
        '4PQ' => 'E02003377',
        '4PR' => 'E02003383',
        '4PS' => 'E02003377',
        '4PT' => 'E02003383',
        '4PU' => 'E02003383',
        '4PW' => 'E02003382',
        '4PX' => 'E02003383',
        '4PY' => 'E02003383',
        '4PZ' => 'E02003383',
        '4QA' => 'E02003383',
        '4QB' => 'E02003383',
        '4QD' => 'E02003383',
        '4QE' => 'E02003383',
        '4QF' => 'E02003383',
        '4QG' => 'E02003383',
        '4QH' => 'E02003383',
        '4QJ' => 'E02003383',
        '4QL' => 'E02003377',
        '4QN' => 'E02003383',
        '4QP' => 'E02003383',
        '4QQ' => 'E02003383',
        '4QR' => 'E02003383',
        '4QS' => 'E02003383',
        '4QT' => 'E02003383',
        '4QU' => 'E02003383',
        '4QW' => 'E02003383',
        '4QX' => 'E02003383',
        '4QY' => 'E02003377',
        '4QZ' => 'E02003382',
        '4RA' => 'E02003377',
        '4RB' => 'E02003377',
        '4RD' => 'E02003377',
        '4RE' => 'E02003377',
        '4RF' => 'E02003377',
        '4RG' => 'E02003377',
        '4RH' => 'E02003383',
        '4RJ' => 'E02003377',
        '4RL' => 'E02003377',
        '4RN' => 'E02003377',
        '4RP' => 'E02003377',
        '4RQ' => 'E02003383',
        '4RR' => 'E02003377',
        '4RS' => 'E02003383',
        '4RT' => 'E02003377',
        '4RU' => 'E02003377',
        '4RW' => 'E02003377',
        '4RX' => 'E02003377',
        '4RY' => 'E02003383',
        '4RZ' => 'E02003377',
        '4SA' => 'E02003377',
        '4SD' => 'E02003377',
        '4TR' => 'E02003383',
        '4TS' => 'E02003383',
        '4TT' => 'E02003377',
        '4TU' => 'E02003395',
        '4TX' => 'E02003383',
        '4TY' => 'E02003395',
        '4TZ' => 'E02003383',
        '4UA' => 'E02003383',
        '4UB' => 'E02003383',
        '4UD' => 'E02003377',
        '4UE' => 'E02003395',
        '4UF' => 'E02003395',
        '4UG' => 'E02003383',
        '4UH' => 'E02003383',
        '4UJ' => 'E02003377',
        '4UL' => 'E02003395',
        '4UN' => 'E02003383',
        '4UP' => 'E02003383',
        '4UQ' => 'E02003377',
        '4UR' => 'E02003383',
        '4US' => 'E02003383',
        '4UT' => 'E02003377',
        '4UU' => 'E02003383',
        '4UW' => 'E02003395',
        '4UX' => 'E02003383',
        '4UY' => 'E02003383',
        '4UZ' => 'E02003395',
        '4WA' => 'E02003383',
        '4WB' => 'E02003383',
        '4WD' => 'E02003383',
        '4WE' => 'E02003377',
        '4WF' => 'E02003383',
        '4WG' => 'E02003377',
        '4WH' => 'E02003382',
        '4WL' => 'E02003382',
        '4XZ' => 'E02003377',
        '4YA' => 'E02003383',
        '4YB' => 'E02003383',
        '4YD' => 'E02003377',
        '4YE' => 'E02003383',
        '4YF' => 'E02003377',
        '4YG' => 'E02003377',
        '4YH' => 'E02003377',
        '4YJ' => 'E02003377',
        '4YQ' => 'E02003383',
        '4YR' => 'E02003377',
        '4YU' => 'E02003377',
        '4YX' => 'E02003395',
        '4YY' => 'E02003377',
        '4YZ' => 'E02003377',
        '4ZA' => 'E02003377',
        '4ZB' => 'E02003377',
        '4ZD' => 'E02003377',
        '4ZR' => 'E02003377',
        '4ZS' => 'E02003377',
        '4ZT' => 'E02003377',
        '4ZU' => 'E02003377',
        '4ZZ' => 'E02003377',
        '6AB' => 'E02003385',
        '6AD' => 'E02003385',
        '6GJ' => 'E02003377',
        '6HA' => 'E02003385',
        '6HD' => 'E02003385',
        '6HL' => 'E02003385',
        '6HN' => 'E02003385',
        '6HP' => 'E02003385',
        '6HR' => 'E02003385',
        '6HS' => 'E02003385',
        '6HT' => 'E02003385',
        '6HU' => 'E02003385',
        '6HW' => 'E02003385',
        '6HX' => 'E02003385',
        '6XN' => 'E02003377',
        '6YP' => 'E02003377',
        '6YR' => 'E02003385',
        '6YS' => 'E02003395',
        '6YT' => 'E02003395',
        '6YU' => 'E02003385',
        '6YX' => 'E02003395',
        '6YY' => 'E02003385',
        '6YZ' => 'E02003395',
        '6ZQ' => 'E02003395',
        '8AA' => 'E02004678',
        '8AB' => 'E02004678',
        '8AD' => 'E02004678',
        '8AE' => 'E02004678',
        '8AF' => 'E02004678',
        '8AG' => 'E02004678',
        '8AH' => 'E02004678',
        '8AJ' => 'E02004678',
        '8AL' => 'E02004678',
        '8AN' => 'E02004678',
        '8AP' => 'E02004678',
        '8AQ' => 'E02004678',
        '8AR' => 'E02004678',
        '8AS' => 'E02004678',
        '8AT' => 'E02004678',
        '8AU' => 'E02004678',
        '8AW' => 'E02004678',
        '8AX' => 'E02004678',
        '8AY' => 'E02004678',
        '8AZ' => 'E02004678',
        '8BA' => 'E02004678',
        '8BB' => 'E02004678',
        '8BD' => 'E02004678',
        '8BE' => 'E02004678',
        '8BF' => 'E02004678',
        '8BG' => 'E02004678',
        '8BH' => 'E02004678',
        '8BJ' => 'E02004678',
        '8BL' => 'E02004678',
        '8BN' => 'E02004678',
        '8BP' => 'E02003377',
        '8BQ' => 'E02004678',
        '8BR' => 'E02003377',
        '8BS' => 'E02003377',
        '8BT' => 'E02004678',
        '8BU' => 'E02004678',
        '8BW' => 'E02003377',
        '8BX' => 'E02003385',
        '8BY' => 'E02003385',
        '8BZ' => 'E02003385',
        '8DA' => 'E02003385',
        '8DB' => 'E02003385',
        '8DD' => 'E02003377',
        '8DE' => 'E02003377',
        '8DF' => 'E02003377',
        '8DG' => 'E02003377',
        '8DH' => 'E02003377',
        '8DJ' => 'E02003377',
        '8DL' => 'E02003377',
        '8DN' => 'E02003377',
        '8DP' => 'E02003377',
        '8DQ' => 'E02003377',
        '8DR' => 'E02003377',
        '8DS' => 'E02003377',
        '8DT' => 'E02003377',
        '8DU' => 'E02003377',
        '8DW' => 'E02003377',
        '8DX' => 'E02003377',
        '8DY' => 'E02003377',
        '8DZ' => 'E02003377',
        '8EA' => 'E02003377',
        '8EB' => 'E02003377',
        '8ED' => 'E02003377',
        '8EE' => 'E02003377',
        '8EF' => 'E02003377',
        '8EG' => 'E02003377',
        '8EH' => 'E02003377',
        '8EJ' => 'E02003377',
        '8EL' => 'E02003377',
        '8EN' => 'E02003377',
        '8EP' => 'E02004678',
        '8EQ' => 'E02003377',
        '8ER' => 'E02003385',
        '8ES' => 'E02004678',
        '8ET' => 'E02003377',
        '8EU' => 'E02003377',
        '8EW' => 'E02003377',
        '8EX' => 'E02003386',
        '8EY' => 'E02003385',
        '8EZ' => 'E02003385',
        '8FA' => 'E02003385',
        '8FB' => 'E02003385',
        '8FD' => 'E02004678',
        '8FE' => 'E02004678',
        '8FF' => 'E02003385',
        '8FG' => 'E02004678',
        '8FH' => 'E02004678',
        '8FJ' => 'E02004678',
        '8FL' => 'E02003385',
        '8FN' => 'E02003377',
        '8FP' => 'E02004678',
        '8FQ' => 'E02004678',
        '8FR' => 'E02004678',
        '8FS' => 'E02004678',
        '8HJ' => 'E02003377',
        '8HP' => 'E02003385',
        '8HR' => 'E02003385',
        '8HW' => 'E02003385',
        '8JS' => 'E02004678',
        '8JW' => 'E02004677',
        '8JX' => 'E02004678',
        '8JY' => 'E02004678',
        '8JZ' => 'E02004678',
        '8LA' => 'E02004678',
        '8LB' => 'E02004678',
        '8LD' => 'E02004678',
        '8LE' => 'E02004678',
        '8LF' => 'E02004678',
        '8LG' => 'E02004678',
        '8LH' => 'E02004678',
        '8LJ' => 'E02004678',
        '8LL' => 'E02004678',
        '8LN' => 'E02004678',
        '8LP' => 'E02004678',
        '8LQ' => 'E02004678',
        '8LR' => 'E02004678',
        '8LS' => 'E02004678',
        '8LT' => 'E02004678',
        '8LU' => 'E02004678',
        '8LW' => 'E02004678',
        '8LX' => 'E02004678',
        '8LY' => 'E02004678',
        '8PA' => 'E02004678',
        '8QF' => 'E02003377',
        '8QN' => 'E02003377',
        '8QP' => 'E02003377',
        '8QR' => 'E02003377',
        '8QW' => 'E02003377',
        '8QZ' => 'E02003377',
        '8RZ' => 'E02003385',
        '8SA' => 'E02003385',
        '8SB' => 'E02003385',
        '8SE' => 'E02003385',
        '8SF' => 'E02003385',
        '8SG' => 'E02003385',
        '8SH' => 'E02003385',
        '8SJ' => 'E02003386',
        '8SL' => 'E02003385',
        '8SN' => 'E02003385',
        '8SP' => 'E02003385',
        '8SQ' => 'E02003385',
        '8SR' => 'E02003385',
        '8SS' => 'E02003385',
        '8ST' => 'E02003385',
        '8WA' => 'E02003377',
        '8WJ' => 'E02003377',
        '8WX' => 'E02003377',
        '8WZ' => 'E02003385',
        '8XA' => 'E02003385',
        '8XB' => 'E02003385',
        '8XD' => 'E02003385',
        '8XE' => 'E02003385',
        '8XF' => 'E02003385',
        '8XG' => 'E02003385',
        '8XH' => 'E02003386',
        '8XJ' => 'E02003385',
        '8XL' => 'E02003385',
        '8XN' => 'E02003377',
        '8XP' => 'E02003385',
        '8XQ' => 'E02003385',
        '8XR' => 'E02003385',
        '8XS' => 'E02003385',
        '8XT' => 'E02003385',
        '8XU' => 'E02003385',
        '8XW' => 'E02003385',
        '8XY' => 'E02003377',
        '8XZ' => 'E02003377',
        '8YH' => 'E02003395',
        '8YJ' => 'E02003377',
        '8YL' => 'E02003377',
        '8YN' => 'E02003385',
        '8YP' => 'E02003377',
        '8YQ' => 'E02003377',
        '8YR' => 'E02003377',
        '8YS' => 'E02003395',
        '8YT' => 'E02003395',
        '8YU' => 'E02003377',
        '8YW' => 'E02003377',
        '8YY' => 'E02003377',
        '8YZ' => 'E02004677',
        '8ZQ' => 'E02003377',
        '9AA' => 'E02003377',
        '9AB' => 'E02003377',
        '9AD' => 'E02003377',
        '9AE' => 'E02003377',
        '9AF' => 'E02003377',
        '9AG' => 'E02003405',
        '9AH' => 'E02003377',
        '9AJ' => 'E02003377',
        '9AL' => 'E02003377',
        '9AN' => 'E02003377',
        '9AP' => 'E02003377',
        '9AQ' => 'E02003377',
        '9AR' => 'E02003377',
        '9AS' => 'E02003377',
        '9AT' => 'E02003377',
        '9AU' => 'E02003377',
        '9AW' => 'E02003377',
        '9AX' => 'E02003377',
        '9AY' => 'E02003377',
        '9AZ' => 'E02003377',
        '9BA' => 'E02003377',
        '9BB' => 'E02003377',
        '9BD' => 'E02003405',
        '9BE' => 'E02003377',
        '9BF' => 'E02003377',
        '9BG' => 'E02003377',
        '9BH' => 'E02003377',
        '9BJ' => 'E02003377',
        '9BL' => 'E02003377',
        '9BN' => 'E02003377',
        '9BP' => 'E02003377',
        '9BQ' => 'E02003377',
        '9BR' => 'E02003377',
        '9BS' => 'E02003377',
        '9BT' => 'E02003377',
        '9BU' => 'E02003377',
        '9BW' => 'E02003377',
        '9BX' => 'E02003377',
        '9BY' => 'E02003377',
        '9BZ' => 'E02003377',
        '9DA' => 'E02003377',
        '9DB' => 'E02003405',
        '9DD' => 'E02003377',
        '9DE' => 'E02003377',
        '9DF' => 'E02003377',
        '9DG' => 'E02003377',
        '9DH' => 'E02003377',
        '9DJ' => 'E02003377',
        '9DL' => 'E02003405',
        '9DN' => 'E02003377',
        '9DP' => 'E02003377',
        '9DQ' => 'E02003377',
        '9DR' => 'E02003377',
        '9DS' => 'E02003405',
        '9DT' => 'E02003405',
        '9DU' => 'E02003377',
        '9DW' => 'E02003377',
        '9DX' => 'E02003377',
        '9DY' => 'E02003377',
        '9DZ' => 'E02003377',
        '9EA' => 'E02003377',
        '9EB' => 'E02003377',
        '9ED' => 'E02003405',
        '9EE' => 'E02003377',
        '9EF' => 'E02003377',
        '9EG' => 'E02003377',
        '9EH' => 'E02003377',
        '9EJ' => 'E02003377',
        '9EL' => 'E02003377',
        '9EN' => 'E02003377',
        '9EP' => 'E02003405',
        '9EQ' => 'E02003377',
        '9ER' => 'E02003377',
        '9ES' => 'E02003377',
        '9ET' => 'E02003377',
        '9EU' => 'E02003377',
        '9EW' => 'E02003377',
        '9EX' => 'E02003377',
        '9EY' => 'E02003377',
        '9EZ' => 'E02003377',
        '9FA' => 'E02003377',
        '9FB' => 'E02003377',
        '9FD' => 'E02003377',
        '9FE' => 'E02003377',
        '9FF' => 'E02003377',
        '9FG' => 'E02003377',
        '9FH' => 'E02003377',
        '9FJ' => 'E02003377',
        '9FL' => 'E02003377',
        '9FN' => 'E02003377',
        '9FP' => 'E02003377',
        '9FQ' => 'E02003405',
        '9FR' => 'E02003377',
        '9FS' => 'E02003405',
        '9FT' => 'E02003405',
        '9FU' => 'E02003377',
        '9FW' => 'E02003377',
        '9FX' => 'E02003377',
        '9FY' => 'E02003377',
        '9FZ' => 'E02003377',
        '9GA' => 'E02003377',
        '9GB' => 'E02003377',
        '9GD' => 'E02003377',
        '9GE' => 'E02003377',
        '9GF' => 'E02003377',
        '9GG' => 'E02003377',
        '9GH' => 'E02003377',
        '9GJ' => 'E02003377',
        '9GL' => 'E02003377',
        '9GN' => 'E02003377',
        '9GP' => 'E02003377',
        '9GQ' => 'E02003377',
        '9GR' => 'E02003377',
        '9GS' => 'E02003377',
        '9GT' => 'E02003377',
        '9GU' => 'E02003377',
        '9GW' => 'E02003377',
        '9GX' => 'E02003377',
        '9GY' => 'E02003377',
        '9GZ' => 'E02003377',
        '9HA' => 'E02003377',
        '9HB' => 'E02003377',
        '9HD' => 'E02003377',
        '9HE' => 'E02003377',
        '9HF' => 'E02003377',
        '9HG' => 'E02003377',
        '9HH' => 'E02003405',
        '9HJ' => 'E02003377',
        '9HL' => 'E02003377',
        '9HN' => 'E02003377',
        '9HP' => 'E02003377',
        '9HQ' => 'E02003377',
        '9HR' => 'E02003377',
        '9HS' => 'E02003377',
        '9HT' => 'E02003377',
        '9HU' => 'E02003377',
        '9HW' => 'E02003377',
        '9HX' => 'E02003377',
        '9HY' => 'E02003377',
        '9HZ' => 'E02003405',
        '9JA' => 'E02003377',
        '9JB' => 'E02003377',
        '9JD' => 'E02003377',
        '9JE' => 'E02003405',
        '9JF' => 'E02003405',
        '9JH' => 'E02003377',
        '9JJ' => 'E02003377',
        '9JL' => 'E02003405',
        '9JN' => 'E02003405',
        '9JP' => 'E02003377',
        '9JQ' => 'E02003377',
        '9JR' => 'E02003405',
        '9JS' => 'E02003377',
        '9JT' => 'E02003377',
        '9JU' => 'E02003405',
        '9JW' => 'E02003405',
        '9JX' => 'E02003405',
        '9JY' => 'E02003405',
        '9JZ' => 'E02003405',
        '9LA' => 'E02003405',
        '9LB' => 'E02003405',
        '9LD' => 'E02003405',
        '9LE' => 'E02003405',
        '9LF' => 'E02003405',
        '9LH' => 'E02003405',
        '9LJ' => 'E02003405',
        '9LL' => 'E02003405',
        '9LN' => 'E02003405',
        '9LP' => 'E02003405',
        '9LQ' => 'E02003405',
        '9LR' => 'E02003405',
        '9LS' => 'E02003405',
        '9LT' => 'E02003405',
        '9LU' => 'E02003405',
        '9LW' => 'E02003405',
        '9LX' => 'E02003405',
        '9LY' => 'E02003405',
        '9LZ' => 'E02003405',
        '9NA' => 'E02003405',
        '9NB' => 'E02003405',
        '9ND' => 'E02003405',
        '9NE' => 'E02003405',
        '9NF' => 'E02003405',
        '9NG' => 'E02003405',
        '9NH' => 'E02003405',
        '9NJ' => 'E02003405',
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
