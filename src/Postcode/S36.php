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
final class S36
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02001611',
        '0AD' => 'E02001611',
        '0AF' => 'E02001611',
        '0AG' => 'E02001611',
        '0AH' => 'E02001611',
        '0AJ' => 'E02001611',
        '0AL' => 'E02001611',
        '0AN' => 'E02001611',
        '0AP' => 'E02001611',
        '0AQ' => 'E02001611',
        '0AR' => 'E02001611',
        '0AS' => 'E02001611',
        '0AT' => 'E02001611',
        '0AU' => 'E02001611',
        '0AW' => 'E02001611',
        '0AX' => 'E02001611',
        '0AY' => 'E02001611',
        '0AZ' => 'E02001611',
        '0BA' => 'E02001611',
        '0BB' => 'E02001611',
        '0BD' => 'E02001611',
        '0BE' => 'E02001611',
        '0BF' => 'E02001611',
        '0BG' => 'E02001611',
        '0BH' => 'E02001611',
        '0BJ' => 'E02001611',
        '0BL' => 'E02001611',
        '0BN' => 'E02001611',
        '0BP' => 'E02001611',
        '0WA' => 'E02001611',
        '1AA' => 'E02001611',
        '1AB' => 'E02001611',
        '1AD' => 'E02001611',
        '1AE' => 'E02001611',
        '1AF' => 'E02001611',
        '1AG' => 'E02001611',
        '1AH' => 'E02001611',
        '1AJ' => 'E02001611',
        '1AL' => 'E02001611',
        '1AN' => 'E02001611',
        '1AQ' => 'E02001611',
        '1AR' => 'E02001611',
        '1AS' => 'E02001611',
        '1AT' => 'E02001611',
        '1AU' => 'E02001611',
        '1AW' => 'E02001611',
        '1AX' => 'E02001611',
        '1AY' => 'E02001611',
        '1AZ' => 'E02001611',
        '1BA' => 'E02001611',
        '1BB' => 'E02001611',
        '1BD' => 'E02001611',
        '1BE' => 'E02001611',
        '1BF' => 'E02001611',
        '1BG' => 'E02001611',
        '1BH' => 'E02001611',
        '1BJ' => 'E02001611',
        '1BL' => 'E02001611',
        '1BN' => 'E02001611',
        '1BP' => 'E02001611',
        '1BR' => 'E02001611',
        '1BS' => 'E02001611',
        '1BT' => 'E02001611',
        '1BW' => 'E02001611',
        '1BX' => 'E02001611',
        '1BY' => 'E02001611',
        '1BZ' => 'E02001611',
        '1DA' => 'E02001611',
        '1DB' => 'E02001611',
        '1DD' => 'E02001611',
        '1DE' => 'E02001611',
        '1DF' => 'E02001611',
        '1DG' => 'E02001611',
        '1DH' => 'E02001611',
        '1DJ' => 'E02001611',
        '1DL' => 'E02001611',
        '1DP' => 'E02001611',
        '1DQ' => 'E02001611',
        '1DR' => 'E02001611',
        '1DY' => 'E02001611',
        '1DZ' => 'E02001611',
        '1EA' => 'E02001611',
        '1EB' => 'E02001611',
        '1ED' => 'E02001611',
        '1EE' => 'E02001611',
        '1EF' => 'E02001611',
        '1EG' => 'E02001611',
        '1EH' => 'E02001611',
        '1EJ' => 'E02001611',
        '1EL' => 'E02001611',
        '1EN' => 'E02001611',
        '1EP' => 'E02001611',
        '1EQ' => 'E02001611',
        '1ER' => 'E02001611',
        '1ES' => 'E02001611',
        '1ET' => 'E02001611',
        '1EU' => 'E02001611',
        '1EW' => 'E02001611',
        '1EX' => 'E02001611',
        '1EY' => 'E02001611',
        '1EZ' => 'E02001611',
        '1FA' => 'E02001611',
        '1FB' => 'E02001611',
        '1FD' => 'E02001611',
        '1FE' => 'E02001611',
        '1FF' => 'E02001611',
        '1FG' => 'E02001611',
        '1FH' => 'E02001611',
        '1FJ' => 'E02001611',
        '1FL' => 'E02001611',
        '1FN' => 'E02001611',
        '1FP' => 'E02001611',
        '1FQ' => 'E02001611',
        '1FR' => 'E02001611',
        '1FS' => 'E02001611',
        '1FT' => 'E02001611',
        '1FU' => 'E02001611',
        '1FW' => 'E02001611',
        '1FX' => 'E02001611',
        '1FY' => 'E02001611',
        '1FZ' => 'E02001611',
        '1GA' => 'E02001611',
        '1GB' => 'E02001611',
        '1GD' => 'E02001611',
        '1GE' => 'E02001611',
        '1GF' => 'E02001611',
        '1GG' => 'E02001611',
        '1GH' => 'E02001611',
        '1GJ' => 'E02001611',
        '1GL' => 'E02001611',
        '1GN' => 'E02001611',
        '1GP' => 'E02001611',
        '1GR' => 'E02001611',
        '1GY' => 'E02001611',
        '1JB' => 'E02001611',
        '1JD' => 'E02001611',
        '1JF' => 'E02001611',
        '1JG' => 'E02001611',
        '1JJ' => 'E02001611',
        '1JN' => 'E02001611',
        '1JP' => 'E02001611',
        '1JQ' => 'E02001611',
        '1JR' => 'E02001611',
        '1LA' => 'E02001611',
        '1LB' => 'E02001611',
        '1LD' => 'E02001611',
        '1LE' => 'E02001611',
        '1LF' => 'E02001611',
        '1LG' => 'E02001611',
        '1LH' => 'E02001611',
        '1LJ' => 'E02001611',
        '1LL' => 'E02001611',
        '1LN' => 'E02001611',
        '1LP' => 'E02001611',
        '1LQ' => 'E02001611',
        '1LR' => 'E02001611',
        '1LS' => 'E02001611',
        '1QN' => 'E02001611',
        '1QP' => 'E02001611',
        '1QQ' => 'E02001611',
        '1RW' => 'E02001611',
        '1WA' => 'E02001611',
        '1WZ' => 'E02001611',
        '1XT' => 'E02001611',
        '1XU' => 'E02001611',
        '1XW' => 'E02001611',
        '1XX' => 'E02001611',
        '1XY' => 'E02001611',
        '1XZ' => 'E02001611',
        '1YA' => 'E02001611',
        '1YB' => 'E02001611',
        '1YD' => 'E02001611',
        '1YE' => 'E02001611',
        '1YF' => 'E02001611',
        '2AA' => 'E02001611',
        '2AB' => 'E02001611',
        '2AD' => 'E02001611',
        '2AE' => 'E02001611',
        '2AF' => 'E02001611',
        '2AG' => 'E02001611',
        '2AH' => 'E02001611',
        '2AJ' => 'E02001611',
        '2AL' => 'E02001611',
        '2AN' => 'E02001612',
        '2AP' => 'E02001611',
        '2AQ' => 'E02001612',
        '2AR' => 'E02001612',
        '2AS' => 'E02001611',
        '2AT' => 'E02001611',
        '2AU' => 'E02001612',
        '2AW' => 'E02001611',
        '2BA' => 'E02001611',
        '2BB' => 'E02001611',
        '2BD' => 'E02001611',
        '2BE' => 'E02001611',
        '2BJ' => 'E02001611',
        '2BL' => 'E02001535',
        '2BN' => 'E02001611',
        '2BQ' => 'E02001612',
        '2BS' => 'E02001611',
        '2BT' => 'E02001611',
        '2BU' => 'E02001611',
        '2DL' => 'E02001611',
        '2DS' => 'E02001611',
        '2DT' => 'E02001611',
        '2DU' => 'E02001611',
        '2DW' => 'E02001611',
        '2DX' => 'E02001611',
        '2EJ' => 'E02001611',
        '2FQ' => 'E02001611',
        '2FX' => 'E02001611',
        '2FY' => 'E02001611',
        '2GB' => 'E02001611',
        '2GQ' => 'E02001611',
        '2HA' => 'E02001611',
        '2JA' => 'E02001611',
        '2JE' => 'E02001611',
        '2JH' => 'E02001611',
        '2JJ' => 'E02001611',
        '2JL' => 'E02001612',
        '2JY' => 'E02001611',
        '2NA' => 'E02001612',
        '2NB' => 'E02001612',
        '2ND' => 'E02001612',
        '2NE' => 'E02001612',
        '2NF' => 'E02001612',
        '2NG' => 'E02001612',
        '2NH' => 'E02001612',
        '2NP' => 'E02001612',
        '2NQ' => 'E02001612',
        '2NR' => 'E02001612',
        '2PA' => 'E02001612',
        '2PB' => 'E02001611',
        '2PD' => 'E02001612',
        '2PE' => 'E02001611',
        '2PF' => 'E02001612',
        '2PG' => 'E02001612',
        '2PH' => 'E02001612',
        '2PJ' => 'E02001612',
        '2PL' => 'E02001612',
        '2PN' => 'E02001612',
        '2PP' => 'E02001612',
        '2PQ' => 'E02001612',
        '2PR' => 'E02001612',
        '2PS' => 'E02001612',
        '2PT' => 'E02001612',
        '2PU' => 'E02001612',
        '2PW' => 'E02001612',
        '2PX' => 'E02001612',
        '2PY' => 'E02001612',
        '2PZ' => 'E02001612',
        '2QA' => 'E02001612',
        '2QB' => 'E02001612',
        '2QD' => 'E02001612',
        '2QE' => 'E02001611',
        '2QF' => 'E02001612',
        '2QG' => 'E02001612',
        '2QH' => 'E02001612',
        '2QJ' => 'E02001612',
        '2QL' => 'E02001612',
        '2QN' => 'E02001612',
        '2QQ' => 'E02001612',
        '2QR' => 'E02001612',
        '2QS' => 'E02001612',
        '2QT' => 'E02001612',
        '2QU' => 'E02001612',
        '2QW' => 'E02001612',
        '2QX' => 'E02001612',
        '2QY' => 'E02001612',
        '2QZ' => 'E02001612',
        '2RA' => 'E02001611',
        '2RB' => 'E02001611',
        '2RD' => 'E02001612',
        '2RE' => 'E02001612',
        '2RF' => 'E02001612',
        '2RG' => 'E02001611',
        '2RH' => 'E02001611',
        '2RJ' => 'E02001612',
        '2RL' => 'E02001612',
        '2RN' => 'E02001612',
        '2RP' => 'E02001612',
        '2RQ' => 'E02001612',
        '2RR' => 'E02001612',
        '2RS' => 'E02001611',
        '2RT' => 'E02001612',
        '2RU' => 'E02001612',
        '2RW' => 'E02001612',
        '2RX' => 'E02001612',
        '2RY' => 'E02001612',
        '2RZ' => 'E02001612',
        '2SA' => 'E02001612',
        '2SB' => 'E02001612',
        '2SD' => 'E02001612',
        '2SE' => 'E02001612',
        '2SF' => 'E02001612',
        '2SG' => 'E02001612',
        '2SH' => 'E02001612',
        '2SJ' => 'E02001612',
        '2SL' => 'E02001612',
        '2SN' => 'E02001612',
        '2SP' => 'E02001612',
        '2SQ' => 'E02001612',
        '2SR' => 'E02001612',
        '2SS' => 'E02001612',
        '2ST' => 'E02001612',
        '2SU' => 'E02001612',
        '2SW' => 'E02001612',
        '2SX' => 'E02001612',
        '2SY' => 'E02001612',
        '2SZ' => 'E02001612',
        '2TA' => 'E02001612',
        '2TB' => 'E02001611',
        '2TD' => 'E02001611',
        '2TE' => 'E02001612',
        '2TF' => 'E02001612',
        '2TG' => 'E02001612',
        '2TH' => 'E02001612',
        '2TJ' => 'E02001612',
        '2TL' => 'E02001612',
        '2TN' => 'E02001612',
        '2TP' => 'E02001612',
        '2TQ' => 'E02001612',
        '2TR' => 'E02001612',
        '2TS' => 'E02001612',
        '2TT' => 'E02001612',
        '2TU' => 'E02001612',
        '2TW' => 'E02001612',
        '2TX' => 'E02001612',
        '2TY' => 'E02001612',
        '2TZ' => 'E02001612',
        '2UA' => 'E02001612',
        '2UB' => 'E02001612',
        '2UD' => 'E02001612',
        '2UH' => 'E02001612',
        '2UQ' => 'E02001612',
        '2US' => 'E02001612',
        '2UT' => 'E02001612',
        '2UU' => 'E02001612',
        '2UZ' => 'E02001612',
        '2WA' => 'E02001612',
        '2WW' => 'E02001611',
        '2WX' => 'E02001611',
        '2WY' => 'E02001612',
        '2WZ' => 'E02001611',
        '2XL' => 'E02001611',
        '2XN' => 'E02001611',
        '2XP' => 'E02001611',
        '2XQ' => 'E02001612',
        '2XR' => 'E02001612',
        '2XS' => 'E02001611',
        '2XT' => 'E02001612',
        '2XU' => 'E02001612',
        '2XW' => 'E02001612',
        '2XX' => 'E02001611',
        '2XY' => 'E02001611',
        '2XZ' => 'E02001612',
        '2YL' => 'E02001611',
        '2YZ' => 'E02001611',
        '3SS' => 'E02001612',
        '3ST' => 'E02001612',
        '3XA' => 'E02001611',
        '3ZA' => 'E02001618',
        '3ZB' => 'E02001612',
        '3ZD' => 'E02001612',
        '3ZE' => 'E02001612',
        '3ZF' => 'E02001612',
        '3ZG' => 'E02001612',
        '3ZH' => 'E02001612',
        '3ZJ' => 'E02001612',
        '3ZL' => 'E02001612',
        '3ZN' => 'E02001612',
        '3ZP' => 'E02001618',
        '4AA' => 'E02001535',
        '4AB' => 'E02001618',
        '4AD' => 'E02001535',
        '4AE' => 'E02001612',
        '4AF' => 'E02001535',
        '4BW' => 'E02001611',
        '4BX' => 'E02001535',
        '4BY' => 'E02001611',
        '4BZ' => 'E02001535',
        '4GG' => 'E02001612',
        '4GH' => 'E02001612',
        '4GP' => 'E02001618',
        '4GQ' => 'E02001618',
        '4GR' => 'E02001618',
        '4GS' => 'E02001535',
        '4GT' => 'E02001612',
        '4GU' => 'E02001618',
        '4GW' => 'E02001618',
        '4GX' => 'E02001618',
        '4GY' => 'E02001535',
        '4GZ' => 'E02001618',
        '4HB' => 'E02001535',
        '4HD' => 'E02001535',
        '4HE' => 'E02001535',
        '4HF' => 'E02001535',
        '4HG' => 'E02001535',
        '4HH' => 'E02001535',
        '4HJ' => 'E02001535',
        '4HN' => 'E02001535',
        '4TB' => 'E02001535',
        '4TD' => 'E02001535',
        '4TE' => 'E02001535',
        '4TF' => 'E02001535',
        '4TG' => 'E02001535',
        '4YA' => 'E02001535',
        '4YG' => 'E02001611',
        '4ZA' => 'E02001618',
        '4ZD' => 'E02001612',
        '4ZE' => 'E02001612',
        '6AA' => 'E02001532',
        '6AB' => 'E02001532',
        '6AD' => 'E02001532',
        '6AE' => 'E02001532',
        '6AF' => 'E02001532',
        '6AG' => 'E02001532',
        '6AH' => 'E02001532',
        '6AJ' => 'E02001532',
        '6AL' => 'E02001532',
        '6AN' => 'E02001532',
        '6AP' => 'E02001532',
        '6AQ' => 'E02001532',
        '6AR' => 'E02001532',
        '6AS' => 'E02001532',
        '6AT' => 'E02001532',
        '6AU' => 'E02001532',
        '6AW' => 'E02001532',
        '6AY' => 'E02001532',
        '6AZ' => 'E02001532',
        '6BA' => 'E02001532',
        '6BB' => 'E02001532',
        '6BD' => 'E02001532',
        '6BE' => 'E02001532',
        '6BF' => 'E02001532',
        '6BG' => 'E02001532',
        '6BH' => 'E02001532',
        '6BJ' => 'E02001532',
        '6BL' => 'E02001532',
        '6BN' => 'E02001532',
        '6BP' => 'E02001532',
        '6BQ' => 'E02001532',
        '6BR' => 'E02001532',
        '6BS' => 'E02001532',
        '6BT' => 'E02001532',
        '6BU' => 'E02001532',
        '6BW' => 'E02001532',
        '6BX' => 'E02001532',
        '6BY' => 'E02001532',
        '6BZ' => 'E02001532',
        '6DA' => 'E02001532',
        '6DB' => 'E02001532',
        '6DD' => 'E02001532',
        '6DE' => 'E02001532',
        '6DF' => 'E02001532',
        '6DG' => 'E02001532',
        '6DH' => 'E02001532',
        '6DJ' => 'E02001532',
        '6DL' => 'E02001532',
        '6DN' => 'E02001532',
        '6DP' => 'E02001532',
        '6DQ' => 'E02001532',
        '6DR' => 'E02001532',
        '6DS' => 'E02001532',
        '6DT' => 'E02001532',
        '6DU' => 'E02001532',
        '6DW' => 'E02001532',
        '6DX' => 'E02001532',
        '6DY' => 'E02001532',
        '6DZ' => 'E02001532',
        '6EA' => 'E02001532',
        '6EB' => 'E02001532',
        '6ED' => 'E02001532',
        '6EE' => 'E02001532',
        '6EF' => 'E02001532',
        '6EG' => 'E02001532',
        '6EH' => 'E02001532',
        '6EJ' => 'E02001532',
        '6EL' => 'E02001532',
        '6EN' => 'E02001532',
        '6EP' => 'E02001532',
        '6EQ' => 'E02001532',
        '6ER' => 'E02001532',
        '6ES' => 'E02001532',
        '6ET' => 'E02001532',
        '6EU' => 'E02001532',
        '6EW' => 'E02001532',
        '6EX' => 'E02001532',
        '6EY' => 'E02001532',
        '6EZ' => 'E02001532',
        '6FA' => 'E02001532',
        '6FB' => 'E02001532',
        '6FD' => 'E02001532',
        '6FE' => 'E02001532',
        '6FF' => 'E02001532',
        '6FG' => 'E02001532',
        '6FH' => 'E02001532',
        '6FL' => 'E02001532',
        '6FN' => 'E02001532',
        '6FP' => 'E02001532',
        '6FR' => 'E02001532',
        '6FS' => 'E02001532',
        '6FT' => 'E02001532',
        '6FU' => 'E02001532',
        '6FW' => 'E02001532',
        '6FX' => 'E02001532',
        '6FY' => 'E02001532',
        '6FZ' => 'E02001532',
        '6GA' => 'E02001532',
        '6GB' => 'E02001532',
        '6GD' => 'E02001532',
        '6GE' => 'E02001532',
        '6GF' => 'E02001532',
        '6GG' => 'E02001532',
        '6GH' => 'E02001532',
        '6GJ' => 'E02001532',
        '6GL' => 'E02001532',
        '6GN' => 'E02001532',
        '6GP' => 'E02001532',
        '6GQ' => 'E02001532',
        '6GR' => 'E02001532',
        '6GS' => 'E02001535',
        '6GT' => 'E02001532',
        '6GU' => 'E02001532',
        '6GW' => 'E02001532',
        '6GX' => 'E02001532',
        '6GY' => 'E02001532',
        '6GZ' => 'E02001532',
        '6HA' => 'E02001532',
        '6HB' => 'E02001532',
        '6HD' => 'E02001532',
        '6HE' => 'E02001532',
        '6HF' => 'E02001532',
        '6HG' => 'E02001532',
        '6HH' => 'E02001532',
        '6HJ' => 'E02001532',
        '6HL' => 'E02001532',
        '6HN' => 'E02001532',
        '6HP' => 'E02001532',
        '6HQ' => 'E02001535',
        '6HR' => 'E02001532',
        '6HS' => 'E02001532',
        '6HT' => 'E02001532',
        '6HU' => 'E02001535',
        '6HW' => 'E02001532',
        '6HX' => 'E02001532',
        '6HY' => 'E02001532',
        '6HZ' => 'E02001532',
        '6JB' => 'E02001532',
        '6LQ' => 'E02001532',
        '6LR' => 'E02001532',
        '6LX' => 'E02001532',
        '6NA' => 'E02001532',
        '6PH' => 'E02001532',
        '6PS' => 'E02001532',
        '6PU' => 'E02001532',
        '6PW' => 'E02001532',
        '6SW' => 'E02001532',
        '6SX' => 'E02001532',
        '6SZ' => 'E02001535',
        '6TS' => 'E02001532',
        '6UA' => 'E02001532',
        '6UB' => 'E02001532',
        '6UD' => 'E02001532',
        '6UE' => 'E02001532',
        '6UF' => 'E02001532',
        '6UG' => 'E02001532',
        '6UH' => 'E02001532',
        '6UJ' => 'E02001532',
        '6WA' => 'E02001532',
        '6WB' => 'E02001532',
        '6WJ' => 'E02001532',
        '6WL' => 'E02001532',
        '6WN' => 'E02001532',
        '6WP' => 'E02001532',
        '6WQ' => 'E02001532',
        '6WR' => 'E02001532',
        '6WS' => 'E02001532',
        '6WT' => 'E02001532',
        '6WU' => 'E02001532',
        '6WW' => 'E02001532',
        '6WX' => 'E02001532',
        '6WY' => 'E02001532',
        '6WZ' => 'E02001532',
        '6XP' => 'E02001532',
        '6XQ' => 'E02001532',
        '6XR' => 'E02001532',
        '6XS' => 'E02001532',
        '6XT' => 'E02001532',
        '6XU' => 'E02001532',
        '6XW' => 'E02001532',
        '6XX' => 'E02001532',
        '6XY' => 'E02001532',
        '6XZ' => 'E02001532',
        '6YT' => 'E02001532',
        '6ZT' => 'E02001532',
        '7AA' => 'E02001524',
        '7AB' => 'E02001524',
        '7AD' => 'E02001524',
        '7AE' => 'E02001524',
        '7AF' => 'E02001524',
        '7AG' => 'E02001535',
        '7AH' => 'E02001532',
        '7BU' => 'E02001524',
        '7BW' => 'E02001524',
        '7BX' => 'E02001524',
        '7EX' => 'E02001524',
        '7EY' => 'E02001524',
        '7EZ' => 'E02001524',
        '7GA' => 'E02001524',
        '7GB' => 'E02001535',
        '7GD' => 'E02001524',
        '7GE' => 'E02001535',
        '7GF' => 'E02001535',
        '7GG' => 'E02001535',
        '7GH' => 'E02001535',
        '7GJ' => 'E02001535',
        '7GL' => 'E02001535',
        '7GN' => 'E02001535',
        '7GP' => 'E02001535',
        '7GQ' => 'E02001535',
        '7GR' => 'E02001535',
        '7GS' => 'E02001535',
        '7GT' => 'E02001535',
        '7GU' => 'E02001535',
        '7HA' => 'E02001524',
        '7HB' => 'E02001524',
        '7HD' => 'E02001524',
        '7HE' => 'E02001524',
        '7JA' => 'E02001524',
        '7JB' => 'E02001524',
        '7JD' => 'E02001524',
        '7JE' => 'E02001524',
        '7JF' => 'E02001524',
        '7JG' => 'E02001524',
        '7JH' => 'E02001524',
        '7JJ' => 'E02001524',
        '7JL' => 'E02001524',
        '7JN' => 'E02001524',
        '7JP' => 'E02001524',
        '7JQ' => 'E02001524',
        '7JR' => 'E02001524',
        '7JS' => 'E02001524',
        '7JT' => 'E02001524',
        '7JU' => 'E02001524',
        '7JW' => 'E02001524',
        '7JX' => 'E02001524',
        '7JY' => 'E02001524',
        '7JZ' => 'E02001524',
        '7LA' => 'E02001524',
        '7LB' => 'E02001524',
        '7LD' => 'E02001524',
        '7LE' => 'E02001524',
        '7LF' => 'E02001524',
        '7LG' => 'E02001524',
        '7LH' => 'E02001524',
        '7LJ' => 'E02001524',
        '7LL' => 'E02001524',
        '7LN' => 'E02001524',
        '7LP' => 'E02001524',
        '7LT' => 'E02001524',
        '7LW' => 'E02001524',
        '7LX' => 'E02001524',
        '7LY' => 'E02001524',
        '7LZ' => 'E02001524',
        '7QF' => 'E02001524',
        '7RD' => 'E02001524',
        '7WS' => 'E02001532',
        '7WT' => 'E02001532',
        '7WU' => 'E02001532',
        '7WW' => 'E02001532',
        '7WX' => 'E02001532',
        '7WY' => 'E02001532',
        '7WZ' => 'E02001532',
        '7XY' => 'E02001532',
        '7YE' => 'E02001535',
        '7YX' => 'E02001532',
        '7YY' => 'E02001532',
        '7YZ' => 'E02001524',
        '8AA' => 'E02001524',
        '8AB' => 'E02001524',
        '8AD' => 'E02001524',
        '8AE' => 'E02001524',
        '8AF' => 'E02001532',
        '8AG' => 'E02001535',
        '8AH' => 'E02001524',
        '8AJ' => 'E02001524',
        '8AL' => 'E02001524',
        '8AN' => 'E02001532',
        '8AP' => 'E02001535',
        '8BY' => 'E02001532',
        '8BZ' => 'E02001532',
        '8DH' => 'E02001532',
        '8EE' => 'E02001532',
        '8EQ' => 'E02001532',
        '8ER' => 'E02001524',
        '8FB' => 'E02001535',
        '8FN' => 'E02001532',
        '8GP' => 'E02001524',
        '8HL' => 'E02001532',
        '8HN' => 'E02001532',
        '8HP' => 'E02001532',
        '8HQ' => 'E02001532',
        '8HU' => 'E02001524',
        '8HW' => 'E02001524',
        '8JQ' => 'E02001524',
        '8JS' => 'E02001524',
        '8LU' => 'E02001524',
        '8PR' => 'E02001535',
        '8PT' => 'E02001535',
        '8WD' => 'E02001535',
        '8WE' => 'E02001535',
        '8WF' => 'E02001535',
        '8WG' => 'E02001535',
        '8WH' => 'E02001535',
        '8WJ' => 'E02001535',
        '8WP' => 'E02001532',
        '8WQ' => 'E02001532',
        '8WR' => 'E02001535',
        '8WS' => 'E02001532',
        '8WT' => 'E02001532',
        '8WU' => 'E02001532',
        '8WW' => 'E02001535',
        '8WX' => 'E02001532',
        '8WY' => 'E02001535',
        '8WZ' => 'E02001535',
        '8XA' => 'E02001532',
        '8XB' => 'E02001532',
        '8XZ' => 'E02001532',
        '8YA' => 'E02001535',
        '8YB' => 'E02001535',
        '8YD' => 'E02001535',
        '8YE' => 'E02001535',
        '8YF' => 'E02001535',
        '8YG' => 'E02001535',
        '8YH' => 'E02001535',
        '8YJ' => 'E02001535',
        '8YL' => 'E02001535',
        '8YN' => 'E02001535',
        '8YP' => 'E02001535',
        '8YQ' => 'E02001535',
        '8YR' => 'E02001535',
        '8YS' => 'E02001535',
        '8YT' => 'E02001535',
        '8YU' => 'E02001535',
        '8YW' => 'E02001535',
        '8YX' => 'E02001535',
        '8YY' => 'E02001535',
        '8YZ' => 'E02001535',
        '8ZP' => 'E02001535',
        '8ZR' => 'E02001535',
        '8ZS' => 'E02001535',
        '8ZU' => 'E02001535',
        '8ZW' => 'E02001535',
        '8ZX' => 'E02001535',
        '8ZY' => 'E02001535',
        '8ZZ' => 'E02001535',
        '9AB' => 'E02001532',
        '9AD' => 'E02001532',
        '9AE' => 'E02001532',
        '9AF' => 'E02001532',
        '9AG' => 'E02001532',
        '9AH' => 'E02001532',
        '9AJ' => 'E02001532',
        '9AL' => 'E02001532',
        '9AN' => 'E02001532',
        '9AP' => 'E02001532',
        '9AQ' => 'E02001532',
        '9AR' => 'E02001532',
        '9AS' => 'E02001532',
        '9AW' => 'E02001532',
        '9AX' => 'E02001532',
        '9BS' => 'E02001532',
        '9BT' => 'E02001532',
        '9BU' => 'E02001532',
        '9BW' => 'E02001532',
        '9BX' => 'E02001532',
        '9BY' => 'E02001532',
        '9BZ' => 'E02001532',
        '9DA' => 'E02001532',
        '9DB' => 'E02001532',
        '9DF' => 'E02001532',
        '9DU' => 'E02001532',
        '9ED' => 'E02001532',
        '9EF' => 'E02001532',
        '9FA' => 'E02001535',
        '9FB' => 'E02001532',
        '9FD' => 'E02001535',
        '9FE' => 'E02001535',
        '9FF' => 'E02001535',
        '9FG' => 'E02001532',
        '9FH' => 'E02001535',
        '9FJ' => 'E02001535',
        '9FL' => 'E02001535',
        '9FN' => 'E02001532',
        '9FP' => 'E02001535',
        '9FQ' => 'E02001532',
        '9FR' => 'E02001532',
        '9FS' => 'E02001535',
        '9HG' => 'E02001532',
        '9LL' => 'E02001535',
        '9LN' => 'E02001535',
        '9LQ' => 'E02001532',
        '9LS' => 'E02001532',
        '9LY' => 'E02001532',
        '9LZ' => 'E02001532',
        '9NA' => 'E02001532',
        '9NB' => 'E02001532',
        '9ND' => 'E02001535',
        '9NE' => 'E02001532',
        '9NF' => 'E02001532',
        '9NG' => 'E02001532',
        '9NH' => 'E02001535',
        '9NJ' => 'E02001532',
        '9NL' => 'E02001532',
        '9NN' => 'E02001535',
        '9NP' => 'E02001532',
        '9NQ' => 'E02001532',
        '9NR' => 'E02001532',
        '9NS' => 'E02001532',
        '9NT' => 'E02001535',
        '9NU' => 'E02001532',
        '9NW' => 'E02001535',
        '9NX' => 'E02001532',
        '9NY' => 'E02001535',
        '9NZ' => 'E02001532',
        '9PA' => 'E02001535',
        '9PH' => 'E02001532',
        '9PP' => 'E02001532',
        '9PR' => 'E02001532',
        '9PS' => 'E02001532',
        '9PT' => 'E02001532',
        '9PZ' => 'E02001532',
        '9QA' => 'E02001532',
        '9QB' => 'E02001532',
        '9QD' => 'E02001532',
        '9QE' => 'E02001532',
        '9QF' => 'E02001532',
        '9QG' => 'E02001532',
        '9QH' => 'E02001532',
        '9QJ' => 'E02001532',
        '9QL' => 'E02001532',
        '9QN' => 'E02001532',
        '9QP' => 'E02001532',
        '9QQ' => 'E02001532',
        '9QR' => 'E02001532',
        '9QS' => 'E02001532',
        '9QT' => 'E02001532',
        '9QU' => 'E02001532',
        '9QW' => 'E02001532',
        '9QX' => 'E02001532',
        '9QY' => 'E02001532',
        '9QZ' => 'E02001532',
        '9RA' => 'E02001532',
        '9RB' => 'E02001532',
        '9RD' => 'E02001532',
        '9RE' => 'E02001532',
        '9RF' => 'E02001532',
        '9RG' => 'E02001532',
        '9RH' => 'E02001532',
        '9RJ' => 'E02001532',
        '9RL' => 'E02001532',
        '9RN' => 'E02001532',
        '9RP' => 'E02001532',
        '9RQ' => 'E02001532',
        '9RR' => 'E02001532',
        '9RS' => 'E02001532',
        '9RT' => 'E02001532',
        '9RU' => 'E02001532',
        '9RW' => 'E02001532',
        '9RX' => 'E02001532',
        '9RY' => 'E02001532',
        '9RZ' => 'E02001532',
        '9SA' => 'E02001535',
        '9UX' => 'E02001532',
        '9UY' => 'E02001532',
        '9UZ' => 'E02001532',
        '9WA' => 'E02001532',
        '9WB' => 'E02001532',
        '9WD' => 'E02001532',
        '9WN' => 'E02001532',
        '9WP' => 'E02001532',
        '9WQ' => 'E02001532',
        '9WR' => 'E02001532',
        '9WS' => 'E02001532',
        '9WT' => 'E02001532',
        '9WU' => 'E02001532',
        '9WW' => 'E02001532',
        '9WX' => 'E02001532',
        '9WY' => 'E02001532',
        '9WZ' => 'E02001532',
        '9XA' => 'E02001532',
        '9XB' => 'E02001532',
        '9XD' => 'E02001532',
        '9XE' => 'E02001532',
        '9XY' => 'E02001535',
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
