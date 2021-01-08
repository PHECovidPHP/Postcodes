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
final class CA8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AF' => 'E02003988',
        '0AJ' => 'E02003988',
        '0AL' => 'E02003988',
        '0AP' => 'E02003988',
        '0AQ' => 'E02003988',
        '0AR' => 'E02003988',
        '0AS' => 'E02003988',
        '1AB' => 'E02003988',
        '1AD' => 'E02003988',
        '1AE' => 'E02003988',
        '1AH' => 'E02003988',
        '1AL' => 'E02003988',
        '1AN' => 'E02003988',
        '1AP' => 'E02003988',
        '1AQ' => 'E02003993',
        '1AR' => 'E02003988',
        '1AS' => 'E02003988',
        '1AT' => 'E02003988',
        '1AU' => 'E02003988',
        '1AW' => 'E02003988',
        '1AX' => 'E02003988',
        '1AY' => 'E02003988',
        '1AZ' => 'E02003988',
        '1BB' => 'E02003988',
        '1BD' => 'E02003988',
        '1BG' => 'E02003988',
        '1BH' => 'E02003988',
        '1BJ' => 'E02003988',
        '1BL' => 'E02003988',
        '1BN' => 'E02003988',
        '1BP' => 'E02003988',
        '1BQ' => 'E02003988',
        '1BR' => 'E02003988',
        '1BS' => 'E02003988',
        '1BT' => 'E02003988',
        '1BU' => 'E02003988',
        '1BW' => 'E02003988',
        '1BX' => 'E02003988',
        '1BY' => 'E02003988',
        '1BZ' => 'E02003988',
        '1DA' => 'E02003988',
        '1DB' => 'E02003988',
        '1DD' => 'E02003988',
        '1DE' => 'E02003988',
        '1DF' => 'E02003988',
        '1DG' => 'E02003988',
        '1DH' => 'E02003988',
        '1DJ' => 'E02003988',
        '1DL' => 'E02003988',
        '1DN' => 'E02003988',
        '1DP' => 'E02003988',
        '1DQ' => 'E02003988',
        '1DR' => 'E02003988',
        '1DS' => 'E02003988',
        '1DT' => 'E02003988',
        '1DU' => 'E02003988',
        '1DW' => 'E02003988',
        '1DX' => 'E02003988',
        '1DY' => 'E02003988',
        '1DZ' => 'E02003988',
        '1EA' => 'E02003988',
        '1EB' => 'E02003988',
        '1ED' => 'E02003988',
        '1EH' => 'E02003988',
        '1EJ' => 'E02003988',
        '1EL' => 'E02003988',
        '1EN' => 'E02003988',
        '1ES' => 'E02003988',
        '1ET' => 'E02003988',
        '1EU' => 'E02003988',
        '1EW' => 'E02003988',
        '1EX' => 'E02003988',
        '1EY' => 'E02003988',
        '1EZ' => 'E02003988',
        '1GA' => 'E02003988',
        '1GB' => 'E02003988',
        '1GD' => 'E02003988',
        '1GH' => 'E02003988',
        '1HA' => 'E02003988',
        '1HG' => 'E02003988',
        '1HN' => 'E02003988',
        '1HP' => 'E02003988',
        '1HR' => 'E02003988',
        '1HS' => 'E02003988',
        '1HT' => 'E02003988',
        '1HU' => 'E02003988',
        '1HW' => 'E02003988',
        '1HX' => 'E02003988',
        '1HY' => 'E02003988',
        '1JA' => 'E02003988',
        '1JD' => 'E02003988',
        '1JE' => 'E02003988',
        '1JF' => 'E02003988',
        '1JH' => 'E02003988',
        '1JJ' => 'E02003988',
        '1JL' => 'E02003988',
        '1JP' => 'E02003988',
        '1JR' => 'E02003988',
        '1JS' => 'E02003988',
        '1JT' => 'E02003988',
        '1JX' => 'E02003988',
        '1JY' => 'E02003988',
        '1JZ' => 'E02003988',
        '1LA' => 'E02003988',
        '1LB' => 'E02003993',
        '1LD' => 'E02003993',
        '1LE' => 'E02003993',
        '1LF' => 'E02003993',
        '1LL' => 'E02003993',
        '1LN' => 'E02003993',
        '1LP' => 'E02003993',
        '1LR' => 'E02003993',
        '1LS' => 'E02003988',
        '1LT' => 'E02003993',
        '1LU' => 'E02003993',
        '1LW' => 'E02003993',
        '1LX' => 'E02003988',
        '1LY' => 'E02003988',
        '1LZ' => 'E02003988',
        '1ND' => 'E02003988',
        '1NE' => 'E02003988',
        '1NF' => 'E02003988',
        '1NG' => 'E02003988',
        '1NH' => 'E02003988',
        '1NJ' => 'E02003988',
        '1NL' => 'E02003988',
        '1NN' => 'E02003988',
        '1NP' => 'E02003988',
        '1NQ' => 'E02003988',
        '1NR' => 'E02003988',
        '1NS' => 'E02003988',
        '1NT' => 'E02003988',
        '1NU' => 'E02003988',
        '1NW' => 'E02003988',
        '1NX' => 'E02003988',
        '1NY' => 'E02003988',
        '1NZ' => 'E02003988',
        '1PA' => 'E02003988',
        '1PB' => 'E02003988',
        '1PD' => 'E02003988',
        '1PE' => 'E02003988',
        '1PF' => 'E02003988',
        '1PG' => 'E02003988',
        '1PH' => 'E02003988',
        '1PJ' => 'E02003988',
        '1PL' => 'E02003988',
        '1PN' => 'E02003988',
        '1PQ' => 'E02003988',
        '1PS' => 'E02003988',
        '1QA' => 'E02003988',
        '1QB' => 'E02003988',
        '1QD' => 'E02003988',
        '1QE' => 'E02003988',
        '1QF' => 'E02003988',
        '1QG' => 'E02003988',
        '1QH' => 'E02003988',
        '1QJ' => 'E02003988',
        '1QL' => 'E02003988',
        '1QN' => 'E02003988',
        '1QP' => 'E02003988',
        '1QQ' => 'E02003988',
        '1QR' => 'E02003988',
        '1QS' => 'E02003988',
        '1QT' => 'E02003988',
        '1QU' => 'E02003988',
        '1QW' => 'E02003988',
        '1QX' => 'E02003988',
        '1QY' => 'E02003988',
        '1QZ' => 'E02003988',
        '1RA' => 'E02003988',
        '1RB' => 'E02003988',
        '1RL' => 'E02003988',
        '1RN' => 'E02003988',
        '1RP' => 'E02003988',
        '1RR' => 'E02003988',
        '1RS' => 'E02003988',
        '1RT' => 'E02003988',
        '1RU' => 'E02003988',
        '1RW' => 'E02003988',
        '1RX' => 'E02003988',
        '1RY' => 'E02003988',
        '1RZ' => 'E02003988',
        '1SA' => 'E02003988',
        '1SB' => 'E02003988',
        '1SD' => 'E02003988',
        '1SE' => 'E02003988',
        '1SF' => 'E02003988',
        '1SG' => 'E02003988',
        '1SH' => 'E02003988',
        '1SJ' => 'E02003988',
        '1SL' => 'E02003988',
        '1SN' => 'E02003988',
        '1SP' => 'E02003988',
        '1SQ' => 'E02003988',
        '1SR' => 'E02003988',
        '1SS' => 'E02003988',
        '1ST' => 'E02003988',
        '1SU' => 'E02003988',
        '1SW' => 'E02003988',
        '1SX' => 'E02003988',
        '1SY' => 'E02003993',
        '1SZ' => 'E02003993',
        '1TA' => 'E02003993',
        '1TB' => 'E02003988',
        '1TD' => 'E02003988',
        '1TE' => 'E02003988',
        '1TF' => 'E02003988',
        '1TG' => 'E02003988',
        '1TH' => 'E02003988',
        '1TJ' => 'E02003988',
        '1TL' => 'E02003988',
        '1TN' => 'E02003988',
        '1TP' => 'E02003988',
        '1TQ' => 'E02003988',
        '1TR' => 'E02003988',
        '1TS' => 'E02003988',
        '1TT' => 'E02003988',
        '1TU' => 'E02003988',
        '1TW' => 'E02003988',
        '1TX' => 'E02003988',
        '1TY' => 'E02003988',
        '1TZ' => 'E02003988',
        '1UA' => 'E02003988',
        '1UB' => 'E02003988',
        '1UD' => 'E02003988',
        '1UE' => 'E02003988',
        '1UF' => 'E02003988',
        '1UG' => 'E02003988',
        '1UH' => 'E02003988',
        '1UJ' => 'E02003988',
        '1UL' => 'E02003988',
        '1UN' => 'E02003988',
        '1UP' => 'E02003988',
        '1UQ' => 'E02003988',
        '1UR' => 'E02003988',
        '1US' => 'E02003988',
        '1UT' => 'E02003988',
        '1UU' => 'E02003988',
        '1UW' => 'E02003988',
        '1UY' => 'E02003988',
        '1UZ' => 'E02003988',
        '1WA' => 'E02003988',
        '1WB' => 'E02003988',
        '1WD' => 'E02003988',
        '1WY' => 'E02003988',
        '1WZ' => 'E02003988',
        '1YA' => 'E02003988',
        '1YB' => 'E02003988',
        '1YD' => 'E02003988',
        '1YE' => 'E02003988',
        '2AA' => 'E02003988',
        '2AB' => 'E02003988',
        '2AD' => 'E02003988',
        '2AP' => 'E02003988',
        '2AR' => 'E02003988',
        '2AS' => 'E02003988',
        '2AT' => 'E02003988',
        '2AU' => 'E02003988',
        '2AX' => 'E02003988',
        '2AY' => 'E02003988',
        '2AZ' => 'E02003988',
        '2BA' => 'E02003988',
        '2BB' => 'E02003988',
        '2BD' => 'E02003988',
        '2BE' => 'E02003988',
        '2BG' => 'E02003988',
        '2BL' => 'E02003987',
        '2BN' => 'E02003988',
        '2BP' => 'E02003988',
        '2BQ' => 'E02003988',
        '2BR' => 'E02003988',
        '2BS' => 'E02003988',
        '2BT' => 'E02003988',
        '2BU' => 'E02003988',
        '2BW' => 'E02003987',
        '2BX' => 'E02003988',
        '2BY' => 'E02003988',
        '2DH' => 'E02003988',
        '2DJ' => 'E02003988',
        '2DN' => 'E02003988',
        '2DP' => 'E02003988',
        '2DR' => 'E02003988',
        '2DS' => 'E02003988',
        '2DU' => 'E02003988',
        '2DW' => 'E02003988',
        '2DX' => 'E02003988',
        '2DY' => 'E02003988',
        '2DZ' => 'E02003988',
        '2EA' => 'E02003988',
        '2EB' => 'E02003988',
        '2EH' => 'E02003988',
        '2EJ' => 'E02003988',
        '2EL' => 'E02003988',
        '2EN' => 'E02003988',
        '2EP' => 'E02003988',
        '2ER' => 'E02003988',
        '2ES' => 'E02003988',
        '2ET' => 'E02003988',
        '2EW' => 'E02003988',
        '2EY' => 'E02003988',
        '2EZ' => 'E02003988',
        '2GA' => 'E02003988',
        '2GB' => 'E02003988',
        '2GD' => 'E02003988',
        '2GE' => 'E02003988',
        '2GF' => 'E02003988',
        '2GG' => 'E02003988',
        '2HA' => 'E02003988',
        '2HB' => 'E02003988',
        '2HD' => 'E02003988',
        '2HE' => 'E02003988',
        '2HF' => 'E02003988',
        '2HG' => 'E02003988',
        '2HH' => 'E02003988',
        '2HJ' => 'E02003988',
        '2HL' => 'E02003988',
        '2HN' => 'E02003988',
        '2HQ' => 'E02003988',
        '2HX' => 'E02003988',
        '2HY' => 'E02003988',
        '2HZ' => 'E02003988',
        '2JA' => 'E02003988',
        '2JB' => 'E02003988',
        '2JD' => 'E02003988',
        '2JE' => 'E02003988',
        '2JF' => 'E02005728',
        '2JG' => 'E02003988',
        '2JH' => 'E02003988',
        '2JJ' => 'E02003988',
        '2JL' => 'E02003988',
        '2JN' => 'E02003988',
        '2JP' => 'E02003988',
        '2JQ' => 'E02003988',
        '2JR' => 'E02003988',
        '2JS' => 'E02003988',
        '2JT' => 'E02003988',
        '2JW' => 'E02003988',
        '2LD' => 'E02003988',
        '2LE' => 'E02003988',
        '2LF' => 'E02003988',
        '2LG' => 'E02003988',
        '2LH' => 'E02003988',
        '2LJ' => 'E02003988',
        '2LL' => 'E02003988',
        '2LN' => 'E02003988',
        '2LP' => 'E02003988',
        '2LQ' => 'E02003988',
        '2LR' => 'E02003988',
        '2LS' => 'E02003988',
        '2LT' => 'E02003988',
        '2LU' => 'E02003988',
        '2LW' => 'E02003988',
        '2LX' => 'E02003988',
        '2LY' => 'E02003988',
        '2LZ' => 'E02003988',
        '2NA' => 'E02003988',
        '2NB' => 'E02003988',
        '2ND' => 'E02003988',
        '2NE' => 'E02003988',
        '2NF' => 'E02003988',
        '2NG' => 'E02003988',
        '2NH' => 'E02003988',
        '2NJ' => 'E02003988',
        '2NL' => 'E02003988',
        '2NN' => 'E02003988',
        '2NP' => 'E02003988',
        '2NQ' => 'E02003988',
        '2NW' => 'E02003988',
        '2NX' => 'E02003988',
        '2PA' => 'E02003988',
        '2PE' => 'E02003988',
        '2PF' => 'E02003988',
        '2PG' => 'E02003988',
        '2PH' => 'E02003988',
        '2PJ' => 'E02003988',
        '2PL' => 'E02003988',
        '2PN' => 'E02003988',
        '2PP' => 'E02003988',
        '2PQ' => 'E02003988',
        '2PR' => 'E02003988',
        '2PS' => 'E02003988',
        '2PT' => 'E02003988',
        '2PU' => 'E02003988',
        '2PW' => 'E02003988',
        '2PX' => 'E02003988',
        '2PY' => 'E02003988',
        '2PZ' => 'E02003988',
        '2QA' => 'E02003988',
        '2QB' => 'E02003988',
        '2QD' => 'E02003988',
        '2QE' => 'E02003988',
        '2QF' => 'E02003988',
        '2QG' => 'E02003988',
        '2QH' => 'E02003988',
        '2QJ' => 'E02003988',
        '2QL' => 'E02003988',
        '2QN' => 'E02003988',
        '2QP' => 'E02003988',
        '2QQ' => 'E02003988',
        '2QR' => 'E02003988',
        '2QS' => 'E02003988',
        '2QT' => 'E02003988',
        '2QU' => 'E02003988',
        '2QW' => 'E02003988',
        '2QX' => 'E02003988',
        '2QZ' => 'E02003988',
        '2WA' => 'E02003988',
        '2WW' => 'E02003988',
        '2WX' => 'E02003988',
        '2WY' => 'E02003988',
        '2WZ' => 'E02003988',
        '2YA' => 'E02003988',
        '2YB' => 'E02003988',
        '7AA' => 'E02003988',
        '7AE' => 'E02003988',
        '7AF' => 'E02003988',
        '7AG' => 'E02003988',
        '7AJ' => 'E02003988',
        '7AL' => 'E02003988',
        '7AN' => 'E02003988',
        '7AP' => 'E02003988',
        '7AR' => 'E02003988',
        '7AS' => 'E02003988',
        '7AT' => 'E02003988',
        '7AU' => 'E02003988',
        '7AW' => 'E02003988',
        '7AZ' => 'E02003988',
        '7BA' => 'E02003988',
        '7BB' => 'E02005727',
        '7BD' => 'E02005728',
        '7BE' => 'E02005728',
        '7BG' => 'E02005728',
        '7BH' => 'E02005728',
        '7BJ' => 'E02005728',
        '7BL' => 'E02005728',
        '7BN' => 'E02005728',
        '7BP' => 'E02003988',
        '7BQ' => 'E02005728',
        '7BR' => 'E02003988',
        '7BS' => 'E02003988',
        '7BT' => 'E02003988',
        '7BU' => 'E02005728',
        '7BW' => 'E02003988',
        '7DA' => 'E02003988',
        '7DB' => 'E02003988',
        '7DD' => 'E02003988',
        '7DE' => 'E02003988',
        '7DF' => 'E02003988',
        '7DG' => 'E02003988',
        '7DH' => 'E02005728',
        '7DL' => 'E02005728',
        '7DN' => 'E02005728',
        '7DP' => 'E02005728',
        '7DQ' => 'E02003988',
        '7DR' => 'E02005728',
        '7DS' => 'E02005728',
        '7DW' => 'E02005728',
        '7DX' => 'E02005728',
        '7EA' => 'E02005728',
        '7EB' => 'E02005728',
        '7ED' => 'E02005728',
        '7EH' => 'E02005728',
        '7EJ' => 'E02005728',
        '7EL' => 'E02005728',
        '7EN' => 'E02005728',
        '7EP' => 'E02005728',
        '7EW' => 'E02005728',
        '7GA' => 'E02003988',
        '7GB' => 'E02003988',
        '7GD' => 'E02005728',
        '7GF' => 'E02005728',
        '7HA' => 'E02005728',
        '7HB' => 'E02005728',
        '7HD' => 'E02005728',
        '7HE' => 'E02005728',
        '7HF' => 'E02005728',
        '7HG' => 'E02005728',
        '7HH' => 'E02005728',
        '7HJ' => 'E02005728',
        '7HL' => 'E02005728',
        '7HN' => 'E02005728',
        '7HP' => 'E02005728',
        '7HR' => 'E02005728',
        '7HS' => 'E02005728',
        '7HT' => 'E02005728',
        '7HU' => 'E02005728',
        '7HX' => 'E02005728',
        '7HY' => 'E02005728',
        '7HZ' => 'E02005728',
        '7JA' => 'E02005728',
        '7JB' => 'E02005728',
        '7JD' => 'E02005728',
        '7JF' => 'E02005728',
        '7JG' => 'E02005728',
        '7JH' => 'E02005728',
        '7JJ' => 'E02005728',
        '7JL' => 'E02005728',
        '7JN' => 'E02005728',
        '7JQ' => 'E02005728',
        '7JR' => 'E02005728',
        '7JS' => 'E02005728',
        '7JT' => 'E02005728',
        '7JU' => 'E02005728',
        '7LA' => 'E02005728',
        '7LB' => 'E02005728',
        '7LD' => 'E02005728',
        '7LE' => 'E02005728',
        '7LF' => 'E02005728',
        '7LG' => 'E02005728',
        '7LH' => 'E02005728',
        '7LJ' => 'E02005728',
        '7LL' => 'E02005728',
        '7LN' => 'E02005728',
        '7LQ' => 'E02005728',
        '7LS' => 'E02005728',
        '7LT' => 'E02003988',
        '7LX' => 'E02003988',
        '7LY' => 'E02003988',
        '7NB' => 'E02003988',
        '7ND' => 'E02003988',
        '7NE' => 'E02005728',
        '7NF' => 'E02005728',
        '7NH' => 'E02005728',
        '7NJ' => 'E02005728',
        '7NL' => 'E02005728',
        '7NN' => 'E02005728',
        '7NP' => 'E02005728',
        '7NR' => 'E02005728',
        '7NS' => 'E02005728',
        '7NW' => 'E02005728',
        '7PA' => 'E02005728',
        '7PB' => 'E02005728',
        '7PD' => 'E02005728',
        '7PE' => 'E02005728',
        '7PF' => 'E02005728',
        '7PG' => 'E02005728',
        '7PH' => 'E02005728',
        '7PJ' => 'E02005728',
        '7PL' => 'E02005728',
        '7PQ' => 'E02005728',
        '7TF' => 'E02005728',
        '7WA' => 'E02005728',
        '7WZ' => 'E02005728',
        '7YA' => 'E02003988',
        '9AA' => 'E02003993',
        '9AB' => 'E02003993',
        '9AD' => 'E02003993',
        '9AE' => 'E02003993',
        '9AF' => 'E02003993',
        '9AG' => 'E02003993',
        '9AH' => 'E02003993',
        '9AJ' => 'E02003993',
        '9AL' => 'E02003993',
        '9AN' => 'E02003993',
        '9AP' => 'E02003993',
        '9AQ' => 'E02003993',
        '9AR' => 'E02003993',
        '9AS' => 'E02003993',
        '9AT' => 'E02003993',
        '9AU' => 'E02003993',
        '9AW' => 'E02003993',
        '9AX' => 'E02003993',
        '9AY' => 'E02003993',
        '9AZ' => 'E02003993',
        '9BA' => 'E02003993',
        '9BB' => 'E02003993',
        '9BD' => 'E02003993',
        '9BE' => 'E02003993',
        '9BG' => 'E02003993',
        '9BH' => 'E02003993',
        '9BJ' => 'E02003993',
        '9BL' => 'E02003993',
        '9BP' => 'E02003993',
        '9BQ' => 'E02003993',
        '9BS' => 'E02003993',
        '9BT' => 'E02003993',
        '9BU' => 'E02003993',
        '9BW' => 'E02003993',
        '9BX' => 'E02003993',
        '9BY' => 'E02003993',
        '9BZ' => 'E02003993',
        '9DA' => 'E02003993',
        '9DB' => 'E02003993',
        '9DD' => 'E02003993',
        '9DG' => 'E02003993',
        '9DH' => 'E02004008',
        '9DN' => 'E02003993',
        '9DP' => 'E02003993',
        '9DU' => 'E02003993',
        '9DW' => 'E02003993',
        '9DX' => 'E02003993',
        '9EA' => 'E02003993',
        '9EB' => 'E02003993',
        '9EE' => 'E02003993',
        '9EG' => 'E02003993',
        '9EH' => 'E02003993',
        '9EJ' => 'E02003993',
        '9EL' => 'E02003993',
        '9EN' => 'E02003993',
        '9EP' => 'E02003993',
        '9EQ' => 'E02003993',
        '9ER' => 'E02003993',
        '9ES' => 'E02003993',
        '9EU' => 'E02003993',
        '9EW' => 'E02003993',
        '9EX' => 'E02003993',
        '9EY' => 'E02003993',
        '9GA' => 'E02003988',
        '9GD' => 'E02003994',
        '9HA' => 'E02003993',
        '9HB' => 'E02003993',
        '9HD' => 'E02003993',
        '9HE' => 'E02003993',
        '9HF' => 'E02003993',
        '9HG' => 'E02003993',
        '9HH' => 'E02003993',
        '9HJ' => 'E02003993',
        '9HL' => 'E02003993',
        '9HN' => 'E02003993',
        '9HP' => 'E02003993',
        '9HQ' => 'E02003993',
        '9HR' => 'E02003993',
        '9HS' => 'E02003993',
        '9HT' => 'E02003993',
        '9HU' => 'E02003993',
        '9HW' => 'E02003993',
        '9HX' => 'E02003993',
        '9HZ' => 'E02003993',
        '9JA' => 'E02003993',
        '9JB' => 'E02003993',
        '9JD' => 'E02003993',
        '9JE' => 'E02003993',
        '9JF' => 'E02003993',
        '9JG' => 'E02003993',
        '9JH' => 'E02003993',
        '9JJ' => 'E02003993',
        '9JL' => 'E02003993',
        '9JN' => 'E02003993',
        '9JQ' => 'E02003993',
        '9JT' => 'E02003993',
        '9JU' => 'E02003993',
        '9JX' => 'E02003993',
        '9JY' => 'E02003993',
        '9JZ' => 'E02003993',
        '9LA' => 'E02003993',
        '9LE' => 'E02003993',
        '9LF' => 'E02003993',
        '9LG' => 'E02003993',
        '9LH' => 'E02003993',
        '9LJ' => 'E02003993',
        '9LL' => 'E02003993',
        '9LN' => 'E02003993',
        '9LP' => 'E02003993',
        '9LQ' => 'E02003993',
        '9LR' => 'E02003993',
        '9LS' => 'E02003993',
        '9LT' => 'E02003993',
        '9LU' => 'E02003993',
        '9LW' => 'E02003993',
        '9LX' => 'E02003993',
        '9LY' => 'E02003993',
        '9LZ' => 'E02003993',
        '9NA' => 'E02003993',
        '9NB' => 'E02003993',
        '9ND' => 'E02003993',
        '9NE' => 'E02003993',
        '9NF' => 'E02003993',
        '9NG' => 'E02003993',
        '9NH' => 'E02003993',
        '9NJ' => 'E02003993',
        '9NL' => 'E02003993',
        '9NQ' => 'E02003993',
        '9WA' => 'E02003993',
        '9WZ' => 'E02003988',
        '9YA' => 'E02003993',
        '9YB' => 'E02003988',
        '9ZZ' => 'E02003988',
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
