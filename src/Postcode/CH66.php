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
final class CH66
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0BR' => 'E02003795',
        '0NA' => 'E02003795',
        '0NB' => 'E02003795',
        '0ND' => 'E02003795',
        '0NE' => 'E02003795',
        '0NF' => 'E02003795',
        '0NG' => 'E02003795',
        '0YY' => 'E02003795',
        '1AA' => 'E02003843',
        '1AB' => 'E02003843',
        '1AD' => 'E02003843',
        '1AE' => 'E02003843',
        '1AF' => 'E02003843',
        '1BR' => 'E02003843',
        '1GY' => 'E02003843',
        '1HA' => 'E02003843',
        '1HB' => 'E02003843',
        '1HD' => 'E02003843',
        '1HE' => 'E02003843',
        '1HF' => 'E02003843',
        '1HG' => 'E02003843',
        '1HH' => 'E02003843',
        '1HJ' => 'E02003843',
        '1HL' => 'E02003843',
        '1HN' => 'E02003843',
        '1HP' => 'E02003843',
        '1HQ' => 'E02003843',
        '1HR' => 'E02003843',
        '1HS' => 'E02003843',
        '1HT' => 'E02003843',
        '1HU' => 'E02003843',
        '1HW' => 'E02003843',
        '1HX' => 'E02003843',
        '1HY' => 'E02003843',
        '1HZ' => 'E02003843',
        '1JA' => 'E02003843',
        '1JB' => 'E02003843',
        '1JD' => 'E02003843',
        '1JE' => 'E02003843',
        '1JF' => 'E02003843',
        '1JG' => 'E02003843',
        '1JH' => 'E02003843',
        '1JJ' => 'E02003843',
        '1JL' => 'E02003843',
        '1JN' => 'E02003843',
        '1JP' => 'E02003843',
        '1JQ' => 'E02003843',
        '1JR' => 'E02003843',
        '1JS' => 'E02003843',
        '1JT' => 'E02003843',
        '1JU' => 'E02003843',
        '1JW' => 'E02003843',
        '1JX' => 'E02003843',
        '1JY' => 'E02003843',
        '1JZ' => 'E02003843',
        '1LA' => 'E02003843',
        '1LB' => 'E02003843',
        '1LD' => 'E02003843',
        '1LE' => 'E02003843',
        '1LF' => 'E02003843',
        '1LG' => 'E02003843',
        '1LH' => 'E02003843',
        '1LJ' => 'E02003843',
        '1LL' => 'E02003843',
        '1LN' => 'E02003843',
        '1LP' => 'E02003843',
        '1LQ' => 'E02003843',
        '1LR' => 'E02003843',
        '1LS' => 'E02003843',
        '1LT' => 'E02003843',
        '1LU' => 'E02003843',
        '1LW' => 'E02003843',
        '1LX' => 'E02003843',
        '1LY' => 'E02003843',
        '1LZ' => 'E02003843',
        '1NA' => 'E02003843',
        '1NB' => 'E02003843',
        '1ND' => 'E02003843',
        '1NE' => 'E02003843',
        '1NF' => 'E02003843',
        '1NG' => 'E02003842',
        '1NH' => 'E02003842',
        '1NJ' => 'E02003843',
        '1NL' => 'E02003847',
        '1NN' => 'E02003843',
        '1NP' => 'E02003843',
        '1NQ' => 'E02003842',
        '1NR' => 'E02003843',
        '1NS' => 'E02003843',
        '1NT' => 'E02003843',
        '1NU' => 'E02003843',
        '1NW' => 'E02003843',
        '1NX' => 'E02003843',
        '1NY' => 'E02003843',
        '1NZ' => 'E02003843',
        '1PA' => 'E02003843',
        '1PB' => 'E02003843',
        '1PD' => 'E02003843',
        '1PE' => 'E02003843',
        '1PF' => 'E02003843',
        '1PG' => 'E02003843',
        '1PH' => 'E02003843',
        '1PJ' => 'E02003843',
        '1PL' => 'E02003843',
        '1PN' => 'E02003846',
        '1PP' => 'E02003846',
        '1PQ' => 'E02003843',
        '1PR' => 'E02003846',
        '1PS' => 'E02003846',
        '1PT' => 'E02003846',
        '1PU' => 'E02003846',
        '1PW' => 'E02003846',
        '1PX' => 'E02003846',
        '1PY' => 'E02003846',
        '1PZ' => 'E02003846',
        '1QA' => 'E02003846',
        '1QB' => 'E02003846',
        '1QD' => 'E02003843',
        '1QE' => 'E02003842',
        '1QF' => 'E02003842',
        '1QG' => 'E02003843',
        '1QH' => 'E02003842',
        '1QJ' => 'E02003842',
        '1QL' => 'E02003842',
        '1QN' => 'E02003842',
        '1QP' => 'E02003843',
        '1QQ' => 'E02003843',
        '1QR' => 'E02003843',
        '1QS' => 'E02003843',
        '1QT' => 'E02003843',
        '1QU' => 'E02003842',
        '1QW' => 'E02003842',
        '1QX' => 'E02003842',
        '1QY' => 'E02003842',
        '1QZ' => 'E02003842',
        '1RA' => 'E02003843',
        '1RB' => 'E02003843',
        '1RD' => 'E02003843',
        '1RE' => 'E02003843',
        '1RF' => 'E02003843',
        '1RG' => 'E02003843',
        '1RH' => 'E02003843',
        '1RJ' => 'E02003843',
        '1RL' => 'E02003843',
        '1RN' => 'E02003843',
        '1RP' => 'E02003843',
        '1RQ' => 'E02003843',
        '1RR' => 'E02003843',
        '1RS' => 'E02003843',
        '1RT' => 'E02003847',
        '1RU' => 'E02003843',
        '1RW' => 'E02003843',
        '1RX' => 'E02003843',
        '1RY' => 'E02003843',
        '1RZ' => 'E02003843',
        '1SA' => 'E02003843',
        '1SB' => 'E02003843',
        '1SD' => 'E02003845',
        '1SE' => 'E02003843',
        '1SF' => 'E02003843',
        '1SG' => 'E02003843',
        '1SH' => 'E02003843',
        '1SJ' => 'E02003843',
        '1SL' => 'E02003843',
        '1SN' => 'E02003843',
        '1SP' => 'E02003845',
        '1SQ' => 'E02003843',
        '1SR' => 'E02003845',
        '1SS' => 'E02003843',
        '1ST' => 'E02003845',
        '1SU' => 'E02003843',
        '1SW' => 'E02003843',
        '1SX' => 'E02003843',
        '1SY' => 'E02003843',
        '1SZ' => 'E02003843',
        '1TA' => 'E02003843',
        '1TB' => 'E02003843',
        '1TD' => 'E02003843',
        '1TE' => 'E02003843',
        '1TF' => 'E02003843',
        '1TG' => 'E02003843',
        '1TH' => 'E02003845',
        '1TJ' => 'E02003845',
        '1TL' => 'E02003845',
        '1TN' => 'E02003843',
        '1TP' => 'E02003845',
        '1TQ' => 'E02003845',
        '1TR' => 'E02003843',
        '1TS' => 'E02003845',
        '1TT' => 'E02003843',
        '1TU' => 'E02003845',
        '1TW' => 'E02003843',
        '1TX' => 'E02003843',
        '1TY' => 'E02003843',
        '1TZ' => 'E02003843',
        '1UA' => 'E02003845',
        '1UB' => 'E02003845',
        '1UD' => 'E02003845',
        '1UE' => 'E02003845',
        '1UF' => 'E02003845',
        '1UG' => 'E02003845',
        '1UH' => 'E02003845',
        '1UJ' => 'E02003845',
        '1UL' => 'E02003845',
        '1UN' => 'E02003845',
        '1UP' => 'E02003845',
        '1UQ' => 'E02003845',
        '1WA' => 'E02003845',
        '1WB' => 'E02003845',
        '1WD' => 'E02003845',
        '1WE' => 'E02003845',
        '1YF' => 'E02003845',
        '1YY' => 'E02003845',
        '1YZ' => 'E02003845',
        '1ZX' => 'E02003843',
        '2BA' => 'E02003850',
        '2BB' => 'E02003850',
        '2BD' => 'E02003850',
        '2BE' => 'E02003850',
        '2BG' => 'E02003852',
        '2BH' => 'E02003852',
        '2BJ' => 'E02003850',
        '2BL' => 'E02003852',
        '2BR' => 'E02003852',
        '2BY' => 'E02003847',
        '2EE' => 'E02003850',
        '2EF' => 'E02003845',
        '2EG' => 'E02003845',
        '2EH' => 'E02003852',
        '2EJ' => 'E02003847',
        '2EL' => 'E02003847',
        '2EN' => 'E02003847',
        '2EP' => 'E02003847',
        '2EQ' => 'E02003845',
        '2ER' => 'E02003847',
        '2ES' => 'E02003847',
        '2ET' => 'E02003847',
        '2EU' => 'E02003847',
        '2EW' => 'E02003847',
        '2EX' => 'E02003847',
        '2EY' => 'E02003847',
        '2EZ' => 'E02003847',
        '2GA' => 'E02003852',
        '2GD' => 'E02003852',
        '2GE' => 'E02003852',
        '2GF' => 'E02003852',
        '2GH' => 'E02003847',
        '2GJ' => 'E02003847',
        '2GL' => 'E02003847',
        '2GN' => 'E02003847',
        '2GP' => 'E02003847',
        '2GQ' => 'E02003847',
        '2GR' => 'E02003847',
        '2GT' => 'E02003847',
        '2GU' => 'E02003847',
        '2GW' => 'E02003847',
        '2GX' => 'E02003847',
        '2GY' => 'E02003847',
        '2GZ' => 'E02003847',
        '2HA' => 'E02003845',
        '2HB' => 'E02003847',
        '2HD' => 'E02003847',
        '2HE' => 'E02003847',
        '2HF' => 'E02003847',
        '2HG' => 'E02003847',
        '2HH' => 'E02003847',
        '2HJ' => 'E02003847',
        '2HL' => 'E02003847',
        '2HN' => 'E02003847',
        '2HP' => 'E02003847',
        '2HQ' => 'E02003847',
        '2HR' => 'E02003847',
        '2HS' => 'E02003847',
        '2HT' => 'E02003847',
        '2HU' => 'E02003847',
        '2HW' => 'E02003847',
        '2HX' => 'E02003847',
        '2HY' => 'E02003847',
        '2HZ' => 'E02003847',
        '2JA' => 'E02003848',
        '2JB' => 'E02003848',
        '2JD' => 'E02003848',
        '2JE' => 'E02003848',
        '2JF' => 'E02003848',
        '2JG' => 'E02003850',
        '2JH' => 'E02003852',
        '2JJ' => 'E02003852',
        '2JL' => 'E02003852',
        '2JN' => 'E02003852',
        '2JP' => 'E02003852',
        '2JQ' => 'E02003850',
        '2JR' => 'E02003852',
        '2JS' => 'E02003852',
        '2JT' => 'E02003852',
        '2JU' => 'E02003852',
        '2JW' => 'E02003852',
        '2JX' => 'E02003852',
        '2JY' => 'E02003852',
        '2JZ' => 'E02003852',
        '2LA' => 'E02003852',
        '2LB' => 'E02003852',
        '2LD' => 'E02003852',
        '2LE' => 'E02003852',
        '2LF' => 'E02003852',
        '2LG' => 'E02003852',
        '2LH' => 'E02003852',
        '2LJ' => 'E02003851',
        '2LL' => 'E02003850',
        '2LN' => 'E02003850',
        '2LP' => 'E02003850',
        '2LQ' => 'E02003852',
        '2LR' => 'E02003852',
        '2LS' => 'E02003847',
        '2LT' => 'E02003847',
        '2LU' => 'E02003847',
        '2LW' => 'E02003850',
        '2LX' => 'E02003847',
        '2LY' => 'E02003847',
        '2LZ' => 'E02003850',
        '2NA' => 'E02003850',
        '2NB' => 'E02003850',
        '2ND' => 'E02003850',
        '2NE' => 'E02003850',
        '2NF' => 'E02003850',
        '2NG' => 'E02003850',
        '2NH' => 'E02003850',
        '2NJ' => 'E02003850',
        '2NL' => 'E02003850',
        '2NN' => 'E02003850',
        '2NP' => 'E02003852',
        '2NQ' => 'E02003850',
        '2NR' => 'E02003852',
        '2NS' => 'E02003847',
        '2NT' => 'E02003847',
        '2NU' => 'E02003852',
        '2NW' => 'E02003850',
        '2NX' => 'E02003852',
        '2NY' => 'E02003852',
        '2NZ' => 'E02003851',
        '2PA' => 'E02003852',
        '2PB' => 'E02003852',
        '2PD' => 'E02003852',
        '2PE' => 'E02003852',
        '2PF' => 'E02003852',
        '2PG' => 'E02003852',
        '2PH' => 'E02003852',
        '2PJ' => 'E02003852',
        '2PL' => 'E02003852',
        '2PN' => 'E02003852',
        '2PP' => 'E02003852',
        '2PQ' => 'E02003852',
        '2PR' => 'E02003852',
        '2PS' => 'E02003852',
        '2PT' => 'E02003852',
        '2PU' => 'E02003852',
        '2PW' => 'E02003852',
        '2PX' => 'E02003852',
        '2PY' => 'E02003794',
        '2PZ' => 'E02003850',
        '2QA' => 'E02003850',
        '2QB' => 'E02003850',
        '2QD' => 'E02003850',
        '2QE' => 'E02003850',
        '2QF' => 'E02003850',
        '2QG' => 'E02003850',
        '2QH' => 'E02003850',
        '2QJ' => 'E02003850',
        '2QL' => 'E02003850',
        '2QN' => 'E02003850',
        '2QP' => 'E02003850',
        '2QQ' => 'E02003850',
        '2QR' => 'E02003850',
        '2QS' => 'E02003850',
        '2QT' => 'E02003852',
        '2QU' => 'E02003852',
        '2QW' => 'E02003850',
        '2QX' => 'E02003852',
        '2QY' => 'E02003852',
        '2QZ' => 'E02003852',
        '2RA' => 'E02003850',
        '2RB' => 'E02003850',
        '2RD' => 'E02003850',
        '2RE' => 'E02003850',
        '2RF' => 'E02003850',
        '2RG' => 'E02003852',
        '2RH' => 'E02003850',
        '2RJ' => 'E02003850',
        '2RL' => 'E02003850',
        '2RN' => 'E02003850',
        '2RP' => 'E02003850',
        '2RQ' => 'E02003852',
        '2RR' => 'E02003850',
        '2RS' => 'E02003852',
        '2RT' => 'E02003852',
        '2RU' => 'E02003852',
        '2RW' => 'E02003847',
        '2RX' => 'E02003852',
        '2RY' => 'E02003852',
        '2RZ' => 'E02003852',
        '2SA' => 'E02003852',
        '2SB' => 'E02003852',
        '2SD' => 'E02003852',
        '2SE' => 'E02003852',
        '2SF' => 'E02003850',
        '2SG' => 'E02003850',
        '2SH' => 'E02003850',
        '2SJ' => 'E02003850',
        '2SL' => 'E02003850',
        '2SN' => 'E02003850',
        '2SP' => 'E02003847',
        '2SQ' => 'E02003850',
        '2SR' => 'E02003850',
        '2SS' => 'E02003847',
        '2ST' => 'E02003847',
        '2SU' => 'E02003847',
        '2SW' => 'E02003850',
        '2SX' => 'E02003847',
        '2SY' => 'E02003847',
        '2SZ' => 'E02003847',
        '2TA' => 'E02003847',
        '2TB' => 'E02003847',
        '2TD' => 'E02003852',
        '2TE' => 'E02003852',
        '2TF' => 'E02003852',
        '2TG' => 'E02003852',
        '2TH' => 'E02003852',
        '2TJ' => 'E02003852',
        '2TL' => 'E02003852',
        '2TN' => 'E02003852',
        '2TP' => 'E02003852',
        '2TQ' => 'E02003852',
        '2TR' => 'E02003848',
        '2TS' => 'E02003848',
        '2TT' => 'E02003848',
        '2TU' => 'E02003851',
        '2TW' => 'E02003852',
        '2TX' => 'E02003851',
        '2UA' => 'E02003852',
        '2UB' => 'E02003848',
        '2UD' => 'E02003848',
        '2UE' => 'E02003852',
        '2UF' => 'E02003852',
        '2UG' => 'E02003852',
        '2UH' => 'E02003852',
        '2UJ' => 'E02003852',
        '2UL' => 'E02003852',
        '2UN' => 'E02003852',
        '2UP' => 'E02003852',
        '2UQ' => 'E02003852',
        '2UR' => 'E02003852',
        '2US' => 'E02003852',
        '2UT' => 'E02003852',
        '2UU' => 'E02003852',
        '2UW' => 'E02003852',
        '2UX' => 'E02003852',
        '2UY' => 'E02003852',
        '2UZ' => 'E02003852',
        '2WA' => 'E02003847',
        '2WB' => 'E02003847',
        '2WD' => 'E02003847',
        '2WE' => 'E02003847',
        '2WF' => 'E02003847',
        '2WG' => 'E02003847',
        '2WH' => 'E02003847',
        '2WJ' => 'E02003847',
        '2WL' => 'E02003847',
        '2WN' => 'E02003847',
        '2WP' => 'E02003847',
        '2WQ' => 'E02003847',
        '2WR' => 'E02003847',
        '2WS' => 'E02003847',
        '2WT' => 'E02003848',
        '2WU' => 'E02003845',
        '2WW' => 'E02003852',
        '2WX' => 'E02003845',
        '2WY' => 'E02003845',
        '2WZ' => 'E02003845',
        '2XA' => 'E02003852',
        '2XB' => 'E02003852',
        '2XD' => 'E02003852',
        '2XE' => 'E02003852',
        '2XF' => 'E02003852',
        '2XG' => 'E02003852',
        '2XH' => 'E02003852',
        '2XJ' => 'E02003852',
        '2XL' => 'E02003852',
        '2XN' => 'E02003852',
        '2XP' => 'E02003852',
        '2XQ' => 'E02003852',
        '2XR' => 'E02003852',
        '2XS' => 'E02003852',
        '2XT' => 'E02003852',
        '2XU' => 'E02003852',
        '2XW' => 'E02003852',
        '2XX' => 'E02003852',
        '2XY' => 'E02003852',
        '2XZ' => 'E02003852',
        '2YA' => 'E02003852',
        '2YB' => 'E02003852',
        '2YD' => 'E02003852',
        '2YE' => 'E02003852',
        '2YF' => 'E02003852',
        '2YG' => 'E02003852',
        '2YH' => 'E02003852',
        '2YJ' => 'E02003852',
        '2YL' => 'E02003852',
        '2YN' => 'E02003852',
        '2YP' => 'E02003852',
        '2YQ' => 'E02003852',
        '2YR' => 'E02003852',
        '2YS' => 'E02003852',
        '2YT' => 'E02003845',
        '2YU' => 'E02003852',
        '2YW' => 'E02003852',
        '2YX' => 'E02003852',
        '2YY' => 'E02003852',
        '2YZ' => 'E02003852',
        '2ZA' => 'E02003845',
        '2ZB' => 'E02003845',
        '2ZD' => 'E02003845',
        '2ZE' => 'E02003845',
        '2ZF' => 'E02003845',
        '2ZG' => 'E02003845',
        '2ZH' => 'E02003845',
        '2ZJ' => 'E02003845',
        '2ZL' => 'E02003845',
        '2ZP' => 'E02003852',
        '2ZR' => 'E02003845',
        '2ZS' => 'E02003845',
        '2ZT' => 'E02003845',
        '2ZU' => 'E02003845',
        '2ZX' => 'E02003845',
        '3BR' => 'E02003846',
        '3JA' => 'E02003846',
        '3JB' => 'E02003846',
        '3JD' => 'E02003846',
        '3JE' => 'E02003846',
        '3JF' => 'E02003846',
        '3JG' => 'E02003846',
        '3JH' => 'E02003846',
        '3JJ' => 'E02003850',
        '3JL' => 'E02003846',
        '3JN' => 'E02003846',
        '3JP' => 'E02003846',
        '3JQ' => 'E02003846',
        '3JR' => 'E02003846',
        '3JS' => 'E02003846',
        '3JT' => 'E02003846',
        '3JU' => 'E02003846',
        '3JW' => 'E02003846',
        '3JX' => 'E02003846',
        '3JY' => 'E02003846',
        '3JZ' => 'E02003846',
        '3LA' => 'E02003846',
        '3LB' => 'E02003850',
        '3LD' => 'E02003850',
        '3LE' => 'E02003850',
        '3LF' => 'E02003850',
        '3LG' => 'E02003850',
        '3LH' => 'E02003850',
        '3LJ' => 'E02003846',
        '3LL' => 'E02003846',
        '3LN' => 'E02003846',
        '3LP' => 'E02003846',
        '3LQ' => 'E02003850',
        '3LR' => 'E02003848',
        '3LS' => 'E02003848',
        '3LT' => 'E02003846',
        '3LU' => 'E02003846',
        '3LW' => 'E02003846',
        '3LX' => 'E02003848',
        '3LY' => 'E02003848',
        '3LZ' => 'E02003848',
        '3NA' => 'E02003846',
        '3NB' => 'E02003846',
        '3ND' => 'E02003846',
        '3NE' => 'E02003846',
        '3NF' => 'E02003846',
        '3NG' => 'E02003846',
        '3NH' => 'E02003846',
        '3NJ' => 'E02003846',
        '3NL' => 'E02003846',
        '3NN' => 'E02003846',
        '3NP' => 'E02003846',
        '3NQ' => 'E02003846',
        '3NR' => 'E02003846',
        '3NS' => 'E02003846',
        '3NT' => 'E02003846',
        '3NU' => 'E02003846',
        '3NW' => 'E02003846',
        '3NX' => 'E02003846',
        '3NY' => 'E02003846',
        '3NZ' => 'E02003846',
        '3PA' => 'E02003846',
        '3PB' => 'E02003846',
        '3PD' => 'E02003850',
        '3PE' => 'E02003846',
        '3PF' => 'E02003846',
        '3PG' => 'E02003846',
        '3PH' => 'E02003846',
        '3PJ' => 'E02003846',
        '3PL' => 'E02003846',
        '3PN' => 'E02003846',
        '3PP' => 'E02003846',
        '3PQ' => 'E02003846',
        '3PR' => 'E02003846',
        '3PS' => 'E02003846',
        '3PT' => 'E02003846',
        '3PU' => 'E02003846',
        '3PW' => 'E02003846',
        '3PX' => 'E02003846',
        '3PY' => 'E02003846',
        '3PZ' => 'E02003846',
        '3QA' => 'E02003846',
        '3QB' => 'E02003846',
        '3QD' => 'E02003846',
        '3QE' => 'E02003846',
        '3QF' => 'E02003846',
        '3QG' => 'E02003846',
        '3QH' => 'E02003846',
        '3QJ' => 'E02003846',
        '3QL' => 'E02003846',
        '3QN' => 'E02003846',
        '3QP' => 'E02003846',
        '3QQ' => 'E02003846',
        '3QR' => 'E02003846',
        '3QS' => 'E02003846',
        '3QT' => 'E02003846',
        '3QU' => 'E02003846',
        '3QW' => 'E02003846',
        '3QX' => 'E02003846',
        '3QY' => 'E02003846',
        '3QZ' => 'E02003846',
        '3RA' => 'E02003847',
        '3RB' => 'E02003847',
        '3RD' => 'E02003847',
        '3RE' => 'E02003847',
        '3RF' => 'E02003846',
        '3RG' => 'E02003846',
        '3RH' => 'E02003846',
        '3RJ' => 'E02003846',
        '3RL' => 'E02003846',
        '3RN' => 'E02003846',
        '3RP' => 'E02003846',
        '3RQ' => 'E02003846',
        '3RR' => 'E02003846',
        '3RS' => 'E02003846',
        '3RT' => 'E02003846',
        '3RU' => 'E02003846',
        '3RW' => 'E02003846',
        '3RX' => 'E02003846',
        '3RY' => 'E02003846',
        '3RZ' => 'E02003846',
        '3SA' => 'E02003846',
        '3SB' => 'E02003846',
        '3SD' => 'E02003846',
        '3SE' => 'E02003846',
        '3SF' => 'E02003846',
        '3SG' => 'E02003846',
        '3SH' => 'E02003846',
        '3SJ' => 'E02003846',
        '3SL' => 'E02003848',
        '3SN' => 'E02003846',
        '3SP' => 'E02003846',
        '3SQ' => 'E02003846',
        '3SR' => 'E02003847',
        '3SS' => 'E02003846',
        '3ST' => 'E02003846',
        '3SU' => 'E02003846',
        '3SW' => 'E02003846',
        '3SX' => 'E02003846',
        '3SY' => 'E02003846',
        '3SZ' => 'E02003846',
        '3TA' => 'E02003846',
        '3TB' => 'E02003846',
        '3TD' => 'E02003846',
        '3TE' => 'E02003846',
        '3TF' => 'E02003846',
        '3TG' => 'E02003845',
        '3TH' => 'E02003846',
        '3TL' => 'E02003846',
        '3TN' => 'E02003850',
        '3TQ' => 'E02003846',
        '3TR' => 'E02003850',
        '3TT' => 'E02003846',
        '3TW' => 'E02003846',
        '3TX' => 'E02003845',
        '3TZ' => 'E02003846',
        '3WA' => 'E02003845',
        '3WB' => 'E02003845',
        '3WP' => 'E02003845',
        '3YY' => 'E02003845',
        '3YZ' => 'E02003845',
        '4AA' => 'E02003847',
        '4AB' => 'E02003842',
        '4AD' => 'E02003847',
        '4AE' => 'E02003847',
        '4AF' => 'E02003847',
        '4AG' => 'E02003847',
        '4AH' => 'E02003847',
        '4AJ' => 'E02003847',
        '4AL' => 'E02003847',
        '4AN' => 'E02003847',
        '4AP' => 'E02003847',
        '4AT' => 'E02003847',
        '4BD' => 'E02003847',
        '4BE' => 'E02003847',
        '4BR' => 'E02003845',
        '4GA' => 'E02003845',
        '4GH' => 'E02003847',
        '4GJ' => 'E02003847',
        '4HX' => 'E02003847',
        '4HY' => 'E02003845',
        '4HZ' => 'E02003845',
        '4JA' => 'E02003846',
        '4JB' => 'E02003847',
        '4JD' => 'E02003847',
        '4JE' => 'E02003847',
        '4JF' => 'E02003847',
        '4JG' => 'E02003847',
        '4JH' => 'E02003847',
        '4JJ' => 'E02003847',
        '4JL' => 'E02003847',
        '4JN' => 'E02003847',
        '4JP' => 'E02003847',
        '4JQ' => 'E02003845',
        '4JR' => 'E02003845',
        '4JS' => 'E02003850',
        '4JT' => 'E02003847',
        '4JU' => 'E02003847',
        '4JW' => 'E02003847',
        '4JX' => 'E02003847',
        '4JY' => 'E02003847',
        '4JZ' => 'E02003847',
        '4LA' => 'E02003847',
        '4LB' => 'E02003846',
        '4LD' => 'E02003847',
        '4LE' => 'E02003847',
        '4LF' => 'E02003847',
        '4LG' => 'E02003847',
        '4LH' => 'E02003847',
        '4LJ' => 'E02003847',
        '4LL' => 'E02003847',
        '4LN' => 'E02003847',
        '4LP' => 'E02003847',
        '4LQ' => 'E02003847',
        '4LR' => 'E02003847',
        '4LS' => 'E02003847',
        '4LT' => 'E02003847',
        '4LU' => 'E02003847',
        '4LW' => 'E02003847',
        '4LX' => 'E02003847',
        '4LY' => 'E02003847',
        '4LZ' => 'E02003847',
        '4NA' => 'E02003847',
        '4NB' => 'E02003847',
        '4ND' => 'E02003847',
        '4NE' => 'E02003847',
        '4NF' => 'E02003847',
        '4NG' => 'E02003847',
        '4NH' => 'E02003847',
        '4NJ' => 'E02003847',
        '4NL' => 'E02003847',
        '4NN' => 'E02003847',
        '4NP' => 'E02003847',
        '4NQ' => 'E02003847',
        '4NR' => 'E02003847',
        '4NS' => 'E02003847',
        '4NT' => 'E02003847',
        '4NU' => 'E02003847',
        '4NW' => 'E02003847',
        '4NX' => 'E02003847',
        '4NY' => 'E02003847',
        '4NZ' => 'E02003847',
        '4PA' => 'E02003847',
        '4PB' => 'E02003847',
        '4PD' => 'E02003847',
        '4PE' => 'E02003847',
        '4PF' => 'E02003847',
        '4PG' => 'E02003847',
        '4PH' => 'E02003847',
        '4PJ' => 'E02003847',
        '4PL' => 'E02003847',
        '4PN' => 'E02003847',
        '4PP' => 'E02003847',
        '4PQ' => 'E02003847',
        '4PR' => 'E02003847',
        '4PS' => 'E02003847',
        '4PT' => 'E02003847',
        '4PU' => 'E02003847',
        '4PW' => 'E02003847',
        '4PX' => 'E02003847',
        '4PY' => 'E02003847',
        '4PZ' => 'E02003847',
        '4QA' => 'E02003847',
        '4QB' => 'E02003847',
        '4QD' => 'E02003847',
        '4QE' => 'E02003847',
        '4QF' => 'E02003847',
        '4QG' => 'E02003847',
        '4QH' => 'E02003847',
        '4QJ' => 'E02003847',
        '4QL' => 'E02003847',
        '4QN' => 'E02003847',
        '4QP' => 'E02003842',
        '4QQ' => 'E02003847',
        '4QR' => 'E02003847',
        '4QS' => 'E02003850',
        '4QT' => 'E02003850',
        '4QU' => 'E02003850',
        '4QW' => 'E02003847',
        '4QX' => 'E02003850',
        '4QY' => 'E02003850',
        '4QZ' => 'E02003850',
        '4RA' => 'E02003850',
        '4RB' => 'E02003850',
        '4RD' => 'E02003850',
        '4RE' => 'E02003850',
        '4RF' => 'E02003850',
        '4RG' => 'E02003850',
        '4RH' => 'E02003850',
        '4RJ' => 'E02003846',
        '4RL' => 'E02003846',
        '4RN' => 'E02003850',
        '4RP' => 'E02003850',
        '4RQ' => 'E02003850',
        '4RR' => 'E02003850',
        '4RS' => 'E02003850',
        '4RT' => 'E02003850',
        '4RU' => 'E02003850',
        '4RW' => 'E02003850',
        '4RX' => 'E02003850',
        '4RY' => 'E02003850',
        '4RZ' => 'E02003846',
        '4SA' => 'E02003846',
        '4SB' => 'E02003846',
        '4SD' => 'E02003846',
        '4SE' => 'E02003850',
        '4SF' => 'E02003847',
        '4SG' => 'E02003847',
        '4SH' => 'E02003847',
        '4SJ' => 'E02003850',
        '4SL' => 'E02003850',
        '4SN' => 'E02003850',
        '4SP' => 'E02003847',
        '4SQ' => 'E02003850',
        '4SR' => 'E02003847',
        '4SS' => 'E02003847',
        '4ST' => 'E02003847',
        '4SU' => 'E02003850',
        '4SW' => 'E02003850',
        '4SX' => 'E02003850',
        '4SY' => 'E02003850',
        '4SZ' => 'E02003850',
        '4TA' => 'E02003847',
        '4TB' => 'E02003847',
        '4TD' => 'E02003847',
        '4TE' => 'E02003847',
        '4TF' => 'E02003847',
        '4TG' => 'E02003847',
        '4TH' => 'E02003847',
        '4TJ' => 'E02003847',
        '4TL' => 'E02003847',
        '4TN' => 'E02003847',
        '4TP' => 'E02003847',
        '4TQ' => 'E02003847',
        '4TR' => 'E02003847',
        '4TS' => 'E02003847',
        '4TT' => 'E02003847',
        '4TU' => 'E02003850',
        '4TW' => 'E02003847',
        '4TX' => 'E02003850',
        '4TY' => 'E02003850',
        '4TZ' => 'E02003850',
        '4UA' => 'E02003850',
        '4UB' => 'E02003847',
        '4UD' => 'E02003847',
        '4UE' => 'E02003850',
        '4UF' => 'E02003850',
        '4UG' => 'E02003850',
        '4UH' => 'E02003850',
        '4UJ' => 'E02003850',
        '4UL' => 'E02003850',
        '4UN' => 'E02003847',
        '4UP' => 'E02003847',
        '4UQ' => 'E02003847',
        '4UR' => 'E02003847',
        '4US' => 'E02003847',
        '4UT' => 'E02003847',
        '4UU' => 'E02003847',
        '4UW' => 'E02003847',
        '4UX' => 'E02003847',
        '4UY' => 'E02003847',
        '4UZ' => 'E02003847',
        '4WA' => 'E02003845',
        '4WB' => 'E02003845',
        '4WD' => 'E02003845',
        '4WE' => 'E02003845',
        '4WF' => 'E02003845',
        '4WG' => 'E02003845',
        '4WH' => 'E02003845',
        '4WJ' => 'E02003845',
        '4WL' => 'E02003845',
        '4WN' => 'E02003845',
        '4WP' => 'E02003845',
        '4WR' => 'E02003845',
        '4XA' => 'E02003847',
        '4XB' => 'E02003847',
        '4XD' => 'E02003847',
        '4XE' => 'E02003847',
        '4XF' => 'E02003847',
        '4XG' => 'E02003847',
        '4XH' => 'E02003847',
        '4XJ' => 'E02003847',
        '4XL' => 'E02003847',
        '4XN' => 'E02003847',
        '4XQ' => 'E02003847',
        '4XR' => 'E02003845',
        '4XU' => 'E02003850',
        '4XW' => 'E02003847',
        '4XX' => 'E02003846',
        '4XY' => 'E02003847',
        '4XZ' => 'E02003847',
        '4YA' => 'E02003847',
        '4YB' => 'E02003847',
        '4YD' => 'E02003847',
        '4YE' => 'E02003847',
        '4YF' => 'E02003847',
        '4YG' => 'E02003847',
        '4YJ' => 'E02003847',
        '4YL' => 'E02003847',
        '4YN' => 'E02003847',
        '4YQ' => 'E02003847',
        '4YR' => 'E02003847',
        '4YS' => 'E02003847',
        '4YT' => 'E02003847',
        '4YU' => 'E02003847',
        '4YW' => 'E02003847',
        '4YX' => 'E02003847',
        '4YY' => 'E02003847',
        '4YZ' => 'E02003847',
        '4ZW' => 'E02003845',
        '5BR' => 'E02003842',
        '5LY' => 'E02003842',
        '5NA' => 'E02003842',
        '5NB' => 'E02003842',
        '5ND' => 'E02003842',
        '5NE' => 'E02003842',
        '5NF' => 'E02003842',
        '5NG' => 'E02003842',
        '5NH' => 'E02003842',
        '5NJ' => 'E02003847',
        '5NL' => 'E02003847',
        '5NN' => 'E02003847',
        '5NP' => 'E02003847',
        '5NQ' => 'E02003842',
        '5NR' => 'E02003847',
        '5NS' => 'E02003847',
        '5NT' => 'E02003847',
        '5NU' => 'E02003842',
        '5NW' => 'E02003847',
        '5NX' => 'E02003847',
        '5NY' => 'E02003842',
        '5NZ' => 'E02003842',
        '5PA' => 'E02003847',
        '5PB' => 'E02003847',
        '5PD' => 'E02003847',
        '5PE' => 'E02003847',
        '5PF' => 'E02003842',
        '5PG' => 'E02003842',
        '5PH' => 'E02003842',
        '5PJ' => 'E02003842',
        '5PL' => 'E02003842',
        '5PN' => 'E02003842',
        '5PP' => 'E02003842',
        '5PQ' => 'E02003842',
        '5PR' => 'E02003842',
        '5PS' => 'E02003842',
        '5PT' => 'E02003842',
        '5PU' => 'E02003842',
        '5PW' => 'E02003842',
        '5PX' => 'E02003842',
        '5PY' => 'E02003842',
        '5PZ' => 'E02003842',
        '5QE' => 'E02003842',
        '5QF' => 'E02003842',
        '5QG' => 'E02003842',
        '5QQ' => 'E02003842',
        '5YY' => 'E02003842',
        '6AB' => 'E02003842',
        '6AD' => 'E02003842',
        '6AE' => 'E02003842',
        '6AF' => 'E02003842',
        '6AG' => 'E02003842',
        '6AH' => 'E02003842',
        '6AJ' => 'E02003842',
        '6AL' => 'E02003842',
        '6AN' => 'E02003842',
        '6AP' => 'E02003842',
        '6AQ' => 'E02003842',
        '6AR' => 'E02003842',
        '6BR' => 'E02003842',
        '6WZ' => 'E02003845',
        '6YY' => 'E02003842',
        '7BR' => 'E02003842',
        '7NA' => 'E02003842',
        '7NB' => 'E02003842',
        '7ND' => 'E02003842',
        '7NE' => 'E02003842',
        '7NF' => 'E02003842',
        '7NG' => 'E02003842',
        '7NH' => 'E02003842',
        '7NJ' => 'E02003842',
        '7NL' => 'E02003842',
        '7NN' => 'E02003842',
        '7NP' => 'E02003842',
        '7NQ' => 'E02003842',
        '7NR' => 'E02003842',
        '7NS' => 'E02003842',
        '7NT' => 'E02003842',
        '7NU' => 'E02003842',
        '7NW' => 'E02003842',
        '7NX' => 'E02003842',
        '7NY' => 'E02003842',
        '7NZ' => 'E02003842',
        '7PA' => 'E02003842',
        '7PF' => 'E02003845',
        '7PH' => 'E02003842',
        '7PL' => 'E02003842',
        '7YY' => 'E02003842',
        '8BR' => 'E02003795',
        '8PA' => 'E02003795',
        '8PB' => 'E02003842',
        '8PD' => 'E02003795',
        '8PE' => 'E02003842',
        '8PF' => 'E02003795',
        '8PG' => 'E02003842',
        '8PH' => 'E02003795',
        '8PQ' => 'E02003795',
        '8YY' => 'E02003795',
        '9BR' => 'E02003795',
        '9PA' => 'E02003795',
        '9PB' => 'E02003795',
        '9PD' => 'E02003795',
        '9PE' => 'E02003842',
        '9WA' => 'E02003795',
        '9YY' => 'E02003795',
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
