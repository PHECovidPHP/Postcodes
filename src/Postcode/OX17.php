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
final class OX17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005921',
        '1AB' => 'E02005921',
        '1AD' => 'E02005921',
        '1AE' => 'E02005921',
        '1AF' => 'E02005921',
        '1AG' => 'E02005686',
        '1AH' => 'E02005686',
        '1AJ' => 'E02005686',
        '1AL' => 'E02005686',
        '1AN' => 'E02005686',
        '1AP' => 'E02005921',
        '1AQ' => 'E02005686',
        '1AR' => 'E02005921',
        '1AS' => 'E02005921',
        '1AT' => 'E02005921',
        '1AU' => 'E02005921',
        '1AW' => 'E02005921',
        '1AX' => 'E02005921',
        '1AY' => 'E02005921',
        '1AZ' => 'E02005921',
        '1BA' => 'E02005921',
        '1BB' => 'E02005921',
        '1BD' => 'E02005921',
        '1BE' => 'E02005921',
        '1BF' => 'E02005921',
        '1BG' => 'E02005921',
        '1BH' => 'E02005921',
        '1BJ' => 'E02005921',
        '1BL' => 'E02005921',
        '1BN' => 'E02005921',
        '1BP' => 'E02005921',
        '1BQ' => 'E02005921',
        '1BS' => 'E02006516',
        '1BT' => 'E02006516',
        '1BU' => 'E02006516',
        '1BW' => 'E02005921',
        '1BX' => 'E02006516',
        '1BY' => 'E02006516',
        '1BZ' => 'E02006516',
        '1DA' => 'E02006516',
        '1DB' => 'E02006516',
        '1DD' => 'E02006516',
        '1DE' => 'E02006516',
        '1DF' => 'E02006516',
        '1DG' => 'E02006516',
        '1DH' => 'E02006516',
        '1DJ' => 'E02005921',
        '1DL' => 'E02006516',
        '1DN' => 'E02005921',
        '1DP' => 'E02005921',
        '1DQ' => 'E02006516',
        '1DR' => 'E02005921',
        '1DS' => 'E02006508',
        '1DT' => 'E02006508',
        '1DU' => 'E02006508',
        '1DW' => 'E02005921',
        '1DX' => 'E02006508',
        '1DY' => 'E02006508',
        '1DZ' => 'E02006508',
        '1EA' => 'E02006508',
        '1EB' => 'E02006508',
        '1ED' => 'E02006508',
        '1EE' => 'E02006508',
        '1EF' => 'E02006508',
        '1EG' => 'E02006516',
        '1EH' => 'E02006508',
        '1EJ' => 'E02006508',
        '1EL' => 'E02006508',
        '1EN' => 'E02005921',
        '1EP' => 'E02005921',
        '1EQ' => 'E02006508',
        '1ER' => 'E02005921',
        '1ES' => 'E02005921',
        '1ET' => 'E02005686',
        '1EU' => 'E02005921',
        '1EW' => 'E02005921',
        '1EX' => 'E02005921',
        '1EY' => 'E02005921',
        '1EZ' => 'E02005921',
        '1FA' => 'E02006508',
        '1FB' => 'E02005921',
        '1FD' => 'E02005921',
        '1FE' => 'E02005921',
        '1FF' => 'E02005921',
        '1FG' => 'E02005921',
        '1FH' => 'E02005921',
        '1GF' => 'E02005922',
        '1GG' => 'E02005922',
        '1GH' => 'E02005922',
        '1GJ' => 'E02005922',
        '1GL' => 'E02005921',
        '1GY' => 'E02005921',
        '1HA' => 'E02005921',
        '1HB' => 'E02005921',
        '1HD' => 'E02005921',
        '1HE' => 'E02005921',
        '1HF' => 'E02005921',
        '1HG' => 'E02005921',
        '1HH' => 'E02005921',
        '1HJ' => 'E02005921',
        '1HL' => 'E02005921',
        '1HN' => 'E02005921',
        '1HP' => 'E02005921',
        '1HQ' => 'E02005921',
        '1HR' => 'E02005921',
        '1HS' => 'E02006516',
        '1HT' => 'E02006516',
        '1HU' => 'E02006516',
        '1HW' => 'E02005921',
        '1HX' => 'E02006516',
        '1HY' => 'E02006516',
        '1HZ' => 'E02006516',
        '1JA' => 'E02006516',
        '1JB' => 'E02006516',
        '1JD' => 'E02006516',
        '1JE' => 'E02006516',
        '1JF' => 'E02006516',
        '1JG' => 'E02006516',
        '1JH' => 'E02006516',
        '1JJ' => 'E02006516',
        '1JL' => 'E02006516',
        '1JN' => 'E02006516',
        '1JP' => 'E02005921',
        '1JQ' => 'E02006516',
        '1JR' => 'E02005686',
        '1JS' => 'E02005922',
        '1JT' => 'E02005921',
        '1JU' => 'E02005686',
        '1JW' => 'E02005921',
        '1JX' => 'E02005686',
        '1JY' => 'E02005686',
        '1JZ' => 'E02005686',
        '1LA' => 'E02005686',
        '1LB' => 'E02005686',
        '1LD' => 'E02005686',
        '1LE' => 'E02005686',
        '1LF' => 'E02005686',
        '1LG' => 'E02005686',
        '1LH' => 'E02005686',
        '1LJ' => 'E02005686',
        '1LL' => 'E02005686',
        '1LN' => 'E02005686',
        '1LP' => 'E02005686',
        '1LQ' => 'E02005686',
        '1LR' => 'E02005686',
        '1LS' => 'E02005686',
        '1LT' => 'E02005686',
        '1LU' => 'E02005686',
        '1LW' => 'E02005686',
        '1LX' => 'E02005686',
        '1LY' => 'E02005686',
        '1LZ' => 'E02005686',
        '1NA' => 'E02005921',
        '1NB' => 'E02005686',
        '1ND' => 'E02005921',
        '1NE' => 'E02005924',
        '1NF' => 'E02005921',
        '1NG' => 'E02005921',
        '1NH' => 'E02005921',
        '1NJ' => 'E02005921',
        '1NL' => 'E02005921',
        '1NN' => 'E02005921',
        '1NP' => 'E02005921',
        '1NQ' => 'E02005921',
        '1NR' => 'E02005921',
        '1NS' => 'E02005921',
        '1NT' => 'E02005921',
        '1NU' => 'E02005921',
        '1NW' => 'E02005921',
        '1NX' => 'E02005921',
        '1NY' => 'E02005921',
        '1NZ' => 'E02005921',
        '1PA' => 'E02005921',
        '1PB' => 'E02005921',
        '1PD' => 'E02005921',
        '1PE' => 'E02005921',
        '1PF' => 'E02005921',
        '1PG' => 'E02005921',
        '1PH' => 'E02005921',
        '1PJ' => 'E02005921',
        '1PL' => 'E02005921',
        '1PN' => 'E02005921',
        '1PP' => 'E02005921',
        '1PQ' => 'E02005921',
        '1PR' => 'E02005921',
        '1PS' => 'E02005921',
        '1PT' => 'E02005921',
        '1PU' => 'E02005921',
        '1PW' => 'E02005921',
        '1PX' => 'E02005921',
        '1PY' => 'E02005921',
        '1PZ' => 'E02005921',
        '1QA' => 'E02005921',
        '1QB' => 'E02005921',
        '1QD' => 'E02005921',
        '1QE' => 'E02005921',
        '1QF' => 'E02005921',
        '1QG' => 'E02005921',
        '1QH' => 'E02005921',
        '1QJ' => 'E02005921',
        '1QL' => 'E02005921',
        '1QN' => 'E02005921',
        '1QP' => 'E02005921',
        '1QQ' => 'E02005921',
        '1QR' => 'E02005921',
        '1QS' => 'E02005921',
        '1QT' => 'E02005921',
        '1QU' => 'E02005921',
        '1QW' => 'E02005921',
        '1QX' => 'E02005921',
        '1QY' => 'E02005921',
        '1QZ' => 'E02005921',
        '1RA' => 'E02005921',
        '1RB' => 'E02005921',
        '1RD' => 'E02005921',
        '1RE' => 'E02005921',
        '1RF' => 'E02005921',
        '1RG' => 'E02005921',
        '1RH' => 'E02005921',
        '1RJ' => 'E02005921',
        '1RL' => 'E02005921',
        '1RN' => 'E02005921',
        '1RP' => 'E02005921',
        '1RQ' => 'E02005921',
        '1RR' => 'E02005921',
        '1RS' => 'E02005921',
        '1RT' => 'E02005921',
        '1RU' => 'E02005921',
        '1RW' => 'E02005921',
        '1RX' => 'E02005921',
        '1RY' => 'E02005921',
        '1RZ' => 'E02005921',
        '1SA' => 'E02005921',
        '1SB' => 'E02005921',
        '1SD' => 'E02005921',
        '1SE' => 'E02005921',
        '1SF' => 'E02005921',
        '1SG' => 'E02005921',
        '1SH' => 'E02005921',
        '1SJ' => 'E02005921',
        '1SL' => 'E02005921',
        '1SN' => 'E02005921',
        '1SP' => 'E02005921',
        '1SQ' => 'E02005921',
        '1SR' => 'E02005921',
        '1SS' => 'E02005921',
        '1ST' => 'E02005921',
        '1SU' => 'E02005921',
        '1SW' => 'E02005921',
        '1SX' => 'E02005921',
        '1SY' => 'E02005921',
        '1TA' => 'E02005921',
        '1TB' => 'E02005921',
        '1TD' => 'E02005921',
        '1TE' => 'E02005921',
        '1TF' => 'E02005924',
        '1TH' => 'E02005921',
        '1TJ' => 'E02005921',
        '1TL' => 'E02005686',
        '1TP' => 'E02005686',
        '1TQ' => 'E02005924',
        '1TS' => 'E02005921',
        '1UA' => 'E02006516',
        '1UX' => 'E02005921',
        '1UY' => 'E02005924',
        '1UZ' => 'E02005924',
        '1WA' => 'E02005924',
        '1WB' => 'E02005924',
        '1WD' => 'E02005924',
        '1WE' => 'E02005924',
        '1WF' => 'E02005924',
        '1WG' => 'E02005924',
        '1WH' => 'E02005924',
        '1WJ' => 'E02005924',
        '1WQ' => 'E02005924',
        '1WZ' => 'E02005924',
        '1XA' => 'E02006516',
        '1XB' => 'E02006516',
        '1XH' => 'E02005924',
        '1XN' => 'E02006516',
        '1YJ' => 'E02005921',
        '1YL' => 'E02005924',
        '1YP' => 'E02005924',
        '1YR' => 'E02005924',
        '1YS' => 'E02005924',
        '1YT' => 'E02005921',
        '1YU' => 'E02005921',
        '1YW' => 'E02005921',
        '1ZG' => 'E02005924',
        '1ZJ' => 'E02005924',
        '1ZL' => 'E02005924',
        '1ZN' => 'E02005924',
        '1ZQ' => 'E02005924',
        '1ZR' => 'E02005924',
        '1ZU' => 'E02005924',
        '1ZW' => 'E02005924',
        '1ZX' => 'E02005924',
        '2AA' => 'E02005686',
        '2AB' => 'E02005686',
        '2AD' => 'E02005686',
        '2AE' => 'E02005686',
        '2AF' => 'E02005686',
        '2AG' => 'E02005686',
        '2AH' => 'E02005686',
        '2AJ' => 'E02005924',
        '2AL' => 'E02005686',
        '2AN' => 'E02005686',
        '2AP' => 'E02005686',
        '2AQ' => 'E02005686',
        '2AR' => 'E02005686',
        '2AS' => 'E02005686',
        '2AT' => 'E02005686',
        '2AU' => 'E02005686',
        '2AW' => 'E02005686',
        '2AX' => 'E02005686',
        '2AY' => 'E02005686',
        '2AZ' => 'E02005686',
        '2BA' => 'E02005686',
        '2BB' => 'E02005686',
        '2BD' => 'E02005686',
        '2BE' => 'E02005686',
        '2BF' => 'E02005686',
        '2BG' => 'E02005686',
        '2BH' => 'E02005686',
        '2BJ' => 'E02005686',
        '2BL' => 'E02005924',
        '2BN' => 'E02005924',
        '2BP' => 'E02005686',
        '2BQ' => 'E02005686',
        '2BS' => 'E02005686',
        '2BT' => 'E02005686',
        '2BU' => 'E02005686',
        '2BW' => 'E02005924',
        '2BX' => 'E02005686',
        '2BY' => 'E02005686',
        '2BZ' => 'E02005686',
        '2DA' => 'E02005686',
        '2DB' => 'E02005686',
        '2DD' => 'E02005686',
        '2DE' => 'E02005686',
        '2DF' => 'E02005686',
        '2DG' => 'E02005686',
        '2DH' => 'E02005691',
        '2DJ' => 'E02005691',
        '2DL' => 'E02005691',
        '2DN' => 'E02005691',
        '2DP' => 'E02005691',
        '2DQ' => 'E02005691',
        '2DR' => 'E02005691',
        '2DS' => 'E02005691',
        '2DT' => 'E02005691',
        '2DU' => 'E02005691',
        '2DW' => 'E02005691',
        '2DX' => 'E02005691',
        '2DY' => 'E02005691',
        '2DZ' => 'E02005691',
        '2EA' => 'E02005691',
        '2EB' => 'E02005691',
        '2ED' => 'E02005691',
        '2EE' => 'E02005691',
        '2EF' => 'E02005924',
        '2EG' => 'E02005691',
        '2EH' => 'E02005691',
        '2EJ' => 'E02005686',
        '2EL' => 'E02005686',
        '2EN' => 'E02005686',
        '2EP' => 'E02005686',
        '2EQ' => 'E02005924',
        '2ER' => 'E02005921',
        '2ES' => 'E02005686',
        '2ET' => 'E02005686',
        '2EU' => 'E02005686',
        '2EW' => 'E02005686',
        '2EX' => 'E02005686',
        '2EY' => 'E02005686',
        '2EZ' => 'E02005686',
        '2FA' => 'E02005691',
        '2FB' => 'E02005686',
        '2FD' => 'E02005686',
        '2FE' => 'E02005691',
        '2FF' => 'E02005686',
        '2FG' => 'E02005686',
        '2FH' => 'E02005691',
        '2FL' => 'E02005686',
        '2GA' => 'E02005686',
        '2GB' => 'E02005686',
        '2GD' => 'E02005686',
        '2GE' => 'E02005686',
        '2GS' => 'E02005686',
        '2HA' => 'E02005686',
        '2HB' => 'E02005691',
        '2HD' => 'E02005686',
        '2HE' => 'E02005686',
        '2HF' => 'E02005686',
        '2HG' => 'E02005686',
        '2HH' => 'E02005687',
        '2HJ' => 'E02005687',
        '2HL' => 'E02005686',
        '2HN' => 'E02005686',
        '2HP' => 'E02005686',
        '2HQ' => 'E02005686',
        '2HR' => 'E02005686',
        '2HS' => 'E02005691',
        '2HT' => 'E02005687',
        '2HU' => 'E02005691',
        '2HW' => 'E02005686',
        '2HX' => 'E02005686',
        '2JA' => 'E02005686',
        '2JB' => 'E02005686',
        '2JD' => 'E02005686',
        '2JE' => 'E02005686',
        '2JF' => 'E02005686',
        '2JG' => 'E02005686',
        '2JH' => 'E02005686',
        '2JJ' => 'E02005686',
        '2JL' => 'E02005686',
        '2JN' => 'E02005686',
        '2JP' => 'E02005686',
        '2JQ' => 'E02005686',
        '2JR' => 'E02005686',
        '2JS' => 'E02005686',
        '2JT' => 'E02005686',
        '2JU' => 'E02005921',
        '2JW' => 'E02005686',
        '2JX' => 'E02005921',
        '2JY' => 'E02005686',
        '2JZ' => 'E02005686',
        '2LA' => 'E02005686',
        '2LB' => 'E02005686',
        '2LD' => 'E02005686',
        '2LE' => 'E02005686',
        '2LF' => 'E02005686',
        '2LG' => 'E02005686',
        '2LH' => 'E02005686',
        '2LJ' => 'E02005686',
        '2LL' => 'E02005686',
        '2LN' => 'E02005686',
        '2LP' => 'E02005686',
        '2LQ' => 'E02005686',
        '2LR' => 'E02005686',
        '2LS' => 'E02005686',
        '2LT' => 'E02005686',
        '2LU' => 'E02005686',
        '2LW' => 'E02005686',
        '2LX' => 'E02005686',
        '2LY' => 'E02005686',
        '2LZ' => 'E02005686',
        '2NA' => 'E02005686',
        '2NB' => 'E02005686',
        '2ND' => 'E02005686',
        '2NE' => 'E02005686',
        '2NF' => 'E02005686',
        '2NG' => 'E02005686',
        '2NH' => 'E02005686',
        '2NJ' => 'E02005686',
        '2NL' => 'E02005686',
        '2NN' => 'E02005686',
        '2NP' => 'E02005686',
        '2NQ' => 'E02005686',
        '2NR' => 'E02005686',
        '2NS' => 'E02005686',
        '2NT' => 'E02005686',
        '2NU' => 'E02005686',
        '2NW' => 'E02005686',
        '2NX' => 'E02005686',
        '2NY' => 'E02005686',
        '2NZ' => 'E02005686',
        '2PA' => 'E02005686',
        '2PB' => 'E02005686',
        '2PD' => 'E02005686',
        '2PE' => 'E02005686',
        '2PF' => 'E02005686',
        '2PG' => 'E02005686',
        '2PH' => 'E02005686',
        '2PJ' => 'E02005686',
        '2PL' => 'E02005686',
        '2PN' => 'E02005686',
        '2PP' => 'E02005686',
        '2PQ' => 'E02005686',
        '2PR' => 'E02005686',
        '2PS' => 'E02005686',
        '2PT' => 'E02005686',
        '2PU' => 'E02005686',
        '2PW' => 'E02005686',
        '2PX' => 'E02005686',
        '2PY' => 'E02005686',
        '2PZ' => 'E02005686',
        '2QA' => 'E02005686',
        '2QB' => 'E02005686',
        '2QD' => 'E02005686',
        '2QE' => 'E02005686',
        '2QF' => 'E02005686',
        '2QG' => 'E02005686',
        '2QH' => 'E02005686',
        '2QJ' => 'E02005686',
        '2QL' => 'E02005686',
        '2QN' => 'E02005686',
        '2QP' => 'E02005686',
        '2QQ' => 'E02005686',
        '2QR' => 'E02005686',
        '2QS' => 'E02005686',
        '2QT' => 'E02005686',
        '2QU' => 'E02005686',
        '2QW' => 'E02005686',
        '2QX' => 'E02005686',
        '2QY' => 'E02005686',
        '2QZ' => 'E02005686',
        '2RA' => 'E02005686',
        '2RB' => 'E02005686',
        '2RD' => 'E02005686',
        '2RE' => 'E02005686',
        '2RF' => 'E02005686',
        '2RG' => 'E02005686',
        '2RH' => 'E02005924',
        '2RP' => 'E02005687',
        '2RQ' => 'E02005686',
        '2RR' => 'E02005687',
        '2RS' => 'E02005687',
        '2RT' => 'E02005687',
        '2RU' => 'E02005687',
        '2RW' => 'E02005686',
        '2RX' => 'E02005687',
        '2RY' => 'E02005687',
        '2RZ' => 'E02005687',
        '2SA' => 'E02005687',
        '2SB' => 'E02005687',
        '2SD' => 'E02005687',
        '2SE' => 'E02005687',
        '2SF' => 'E02005687',
        '2SG' => 'E02005687',
        '2SH' => 'E02005687',
        '2SJ' => 'E02005686',
        '2SL' => 'E02005686',
        '2SN' => 'E02005686',
        '2SP' => 'E02005686',
        '2SQ' => 'E02005687',
        '2SR' => 'E02005686',
        '2SS' => 'E02005686',
        '2ST' => 'E02005686',
        '2SU' => 'E02005686',
        '2SX' => 'E02005687',
        '2TA' => 'E02005686',
        '2TN' => 'E02005686',
        '2WA' => 'E02005924',
        '2WB' => 'E02005924',
        '2WD' => 'E02005924',
        '2WG' => 'E02005686',
        '2WZ' => 'E02005924',
        '2XA' => 'E02005686',
        '2XN' => 'E02005924',
        '2XR' => 'E02005924',
        '2XS' => 'E02005924',
        '2XT' => 'E02005924',
        '2XU' => 'E02005686',
        '2XX' => 'E02005686',
        '2YA' => 'E02005686',
        '2YB' => 'E02005686',
        '2YD' => 'E02005924',
        '2YH' => 'E02005924',
        '2YJ' => 'E02005686',
        '2YL' => 'E02005686',
        '2YP' => 'E02005686',
        '2YR' => 'E02005686',
        '2YS' => 'E02005686',
        '2YT' => 'E02005924',
        '2YU' => 'E02005924',
        '2YX' => 'E02005686',
        '2YY' => 'E02005924',
        '2ZJ' => 'E02005924',
        '2ZL' => 'E02005924',
        '2ZN' => 'E02005686',
        '2ZQ' => 'E02005924',
        '2ZR' => 'E02005924',
        '2ZW' => 'E02005924',
        '2ZX' => 'E02005924',
        '3AA' => 'E02005691',
        '3AB' => 'E02005691',
        '3AD' => 'E02005691',
        '3AE' => 'E02005691',
        '3AF' => 'E02005691',
        '3AG' => 'E02005691',
        '3AH' => 'E02005691',
        '3AJ' => 'E02005691',
        '3AL' => 'E02005691',
        '3AN' => 'E02005691',
        '3AP' => 'E02005691',
        '3AQ' => 'E02005691',
        '3AR' => 'E02005691',
        '3AS' => 'E02005691',
        '3AT' => 'E02005691',
        '3AU' => 'E02005691',
        '3AW' => 'E02005691',
        '3AX' => 'E02005691',
        '3AY' => 'E02005691',
        '3AZ' => 'E02005691',
        '3BA' => 'E02005691',
        '3BB' => 'E02005691',
        '3BD' => 'E02005691',
        '3BE' => 'E02005691',
        '3BF' => 'E02005924',
        '3BG' => 'E02005691',
        '3BH' => 'E02005691',
        '3BJ' => 'E02005691',
        '3BL' => 'E02005691',
        '3BN' => 'E02005691',
        '3BP' => 'E02005691',
        '3BQ' => 'E02005691',
        '3BS' => 'E02005691',
        '3BT' => 'E02005691',
        '3BU' => 'E02005691',
        '3BW' => 'E02005691',
        '3BX' => 'E02005691',
        '3BZ' => 'E02005691',
        '3DA' => 'E02005691',
        '3DB' => 'E02005691',
        '3DD' => 'E02005691',
        '3DE' => 'E02005691',
        '3DF' => 'E02005691',
        '3DG' => 'E02005691',
        '3DH' => 'E02005691',
        '3DJ' => 'E02005691',
        '3DL' => 'E02005691',
        '3DN' => 'E02005691',
        '3DP' => 'E02005691',
        '3DQ' => 'E02005691',
        '3DR' => 'E02005691',
        '3DS' => 'E02005691',
        '3DT' => 'E02005691',
        '3DU' => 'E02005691',
        '3DW' => 'E02005691',
        '3DX' => 'E02005691',
        '3DY' => 'E02005691',
        '3DZ' => 'E02005928',
        '3EA' => 'E02005691',
        '3EB' => 'E02005928',
        '3ED' => 'E02005924',
        '3EE' => 'E02005928',
        '3EF' => 'E02005928',
        '3EG' => 'E02005928',
        '3EH' => 'E02005928',
        '3EJ' => 'E02005928',
        '3EL' => 'E02005928',
        '3EN' => 'E02005928',
        '3EP' => 'E02005928',
        '3EQ' => 'E02005928',
        '3ER' => 'E02005928',
        '3ES' => 'E02005928',
        '3ET' => 'E02005928',
        '3EU' => 'E02005928',
        '3EW' => 'E02005928',
        '3EX' => 'E02005691',
        '3EY' => 'E02005928',
        '3EZ' => 'E02005928',
        '3FA' => 'E02005928',
        '3FB' => 'E02005928',
        '3FD' => 'E02005928',
        '3FE' => 'E02005928',
        '3FF' => 'E02005928',
        '3FG' => 'E02005928',
        '3FH' => 'E02005928',
        '3FJ' => 'E02005928',
        '3FL' => 'E02005928',
        '3FN' => 'E02005928',
        '3FP' => 'E02005928',
        '3FQ' => 'E02005928',
        '3FR' => 'E02005928',
        '3FS' => 'E02005928',
        '3FT' => 'E02005691',
        '3FU' => 'E02005691',
        '3FW' => 'E02005928',
        '3FX' => 'E02005928',
        '3FY' => 'E02005928',
        '3FZ' => 'E02005691',
        '3GA' => 'E02005928',
        '3GB' => 'E02005928',
        '3HA' => 'E02005928',
        '3HB' => 'E02005928',
        '3HD' => 'E02005928',
        '3HE' => 'E02005928',
        '3HF' => 'E02005928',
        '3HG' => 'E02005928',
        '3HH' => 'E02005928',
        '3HJ' => 'E02005928',
        '3HL' => 'E02005928',
        '3HN' => 'E02005928',
        '3HP' => 'E02005928',
        '3HQ' => 'E02005928',
        '3HR' => 'E02005928',
        '3HS' => 'E02005928',
        '3HT' => 'E02005928',
        '3HU' => 'E02005928',
        '3HW' => 'E02005924',
        '3HX' => 'E02005928',
        '3HY' => 'E02005928',
        '3HZ' => 'E02005928',
        '3JA' => 'E02005928',
        '3JB' => 'E02005928',
        '3JD' => 'E02005928',
        '3JE' => 'E02005928',
        '3JF' => 'E02005928',
        '3JG' => 'E02005928',
        '3JH' => 'E02005928',
        '3JJ' => 'E02005928',
        '3JL' => 'E02005928',
        '3JN' => 'E02005928',
        '3JP' => 'E02005928',
        '3JQ' => 'E02005928',
        '3JR' => 'E02005691',
        '3JS' => 'E02005928',
        '3JT' => 'E02005928',
        '3JU' => 'E02005928',
        '3JW' => 'E02005928',
        '3JX' => 'E02005928',
        '3JY' => 'E02005928',
        '3JZ' => 'E02005928',
        '3LA' => 'E02005928',
        '3LB' => 'E02005928',
        '3LD' => 'E02005928',
        '3LE' => 'E02005928',
        '3LH' => 'E02005928',
        '3LJ' => 'E02005928',
        '3LL' => 'E02005928',
        '3LN' => 'E02005928',
        '3LP' => 'E02005928',
        '3LR' => 'E02005928',
        '3LS' => 'E02005928',
        '3LT' => 'E02005928',
        '3LU' => 'E02005928',
        '3LW' => 'E02005928',
        '3LX' => 'E02005928',
        '3LY' => 'E02005928',
        '3LZ' => 'E02005928',
        '3NA' => 'E02005928',
        '3NB' => 'E02005928',
        '3ND' => 'E02005928',
        '3NE' => 'E02005928',
        '3NF' => 'E02005928',
        '3NG' => 'E02005928',
        '3NH' => 'E02005928',
        '3NJ' => 'E02005928',
        '3NL' => 'E02005928',
        '3NN' => 'E02005928',
        '3NP' => 'E02005928',
        '3NQ' => 'E02005928',
        '3NR' => 'E02005928',
        '3NS' => 'E02005928',
        '3NT' => 'E02005928',
        '3NU' => 'E02005928',
        '3NW' => 'E02005928',
        '3NX' => 'E02005691',
        '3NY' => 'E02005691',
        '3NZ' => 'E02005924',
        '3PA' => 'E02005928',
        '3PB' => 'E02005928',
        '3PD' => 'E02005928',
        '3PE' => 'E02005928',
        '3PF' => 'E02005928',
        '3PG' => 'E02005691',
        '3PH' => 'E02005691',
        '3PJ' => 'E02005691',
        '3PL' => 'E02005928',
        '3PN' => 'E02005928',
        '3PP' => 'E02005691',
        '3PQ' => 'E02005691',
        '3PR' => 'E02005691',
        '3PS' => 'E02005691',
        '3PT' => 'E02005691',
        '3PU' => 'E02005691',
        '3PW' => 'E02005928',
        '3PX' => 'E02005691',
        '3PY' => 'E02005691',
        '3PZ' => 'E02005691',
        '3QA' => 'E02005691',
        '3QB' => 'E02005691',
        '3QD' => 'E02005691',
        '3QE' => 'E02005691',
        '3QF' => 'E02005691',
        '3QG' => 'E02005691',
        '3QH' => 'E02005691',
        '3QJ' => 'E02005691',
        '3QL' => 'E02005691',
        '3QN' => 'E02005691',
        '3QP' => 'E02005691',
        '3QQ' => 'E02005691',
        '3QR' => 'E02005691',
        '3QS' => 'E02005691',
        '3QT' => 'E02005691',
        '3QU' => 'E02005691',
        '3QW' => 'E02005691',
        '3QX' => 'E02005691',
        '3QY' => 'E02005691',
        '3QZ' => 'E02005691',
        '3RA' => 'E02005691',
        '3RB' => 'E02005691',
        '3RD' => 'E02005691',
        '3RE' => 'E02005691',
        '3RF' => 'E02005691',
        '3RG' => 'E02005691',
        '3RH' => 'E02005691',
        '3RJ' => 'E02005691',
        '3RL' => 'E02005691',
        '3RN' => 'E02005691',
        '3RP' => 'E02005691',
        '3RQ' => 'E02005691',
        '3RR' => 'E02005691',
        '3RS' => 'E02005691',
        '3RT' => 'E02005691',
        '3RU' => 'E02005691',
        '3RW' => 'E02005691',
        '3RX' => 'E02005691',
        '3RY' => 'E02005691',
        '3RZ' => 'E02005691',
        '3SA' => 'E02005691',
        '3SB' => 'E02005691',
        '3SD' => 'E02005691',
        '3SE' => 'E02005691',
        '3SF' => 'E02005691',
        '3SG' => 'E02005691',
        '3SH' => 'E02005928',
        '3SN' => 'E02005928',
        '3SQ' => 'E02005691',
        '3SX' => 'E02005928',
        '3TA' => 'E02005928',
        '3WA' => 'E02005928',
        '3WB' => 'E02005924',
        '3WD' => 'E02005928',
        '3WE' => 'E02005928',
        '3WF' => 'E02005928',
        '3WG' => 'E02005924',
        '3WH' => 'E02005928',
        '3WJ' => 'E02005924',
        '3WS' => 'E02005691',
        '3XA' => 'E02005691',
        '3XB' => 'E02005691',
        '3XJ' => 'E02005924',
        '3XL' => 'E02005691',
        '3XP' => 'E02005691',
        '3XR' => 'E02005691',
        '3XS' => 'E02005924',
        '3XT' => 'E02005691',
        '3XU' => 'E02005691',
        '3XW' => 'E02005924',
        '3XX' => 'E02005691',
        '3YA' => 'E02005691',
        '3YB' => 'E02005691',
        '3YD' => 'E02005924',
        '3YE' => 'E02005691',
        '3YH' => 'E02005924',
        '3YJ' => 'E02005691',
        '3YL' => 'E02005691',
        '3YP' => 'E02005924',
        '3YR' => 'E02005691',
        '3YS' => 'E02005691',
        '3YT' => 'E02005924',
        '3YU' => 'E02005924',
        '3YX' => 'E02005924',
        '3ZJ' => 'E02005924',
        '3ZN' => 'E02005924',
        '3ZQ' => 'E02005924',
        '3ZR' => 'E02005924',
        '3ZU' => 'E02005924',
        '3ZX' => 'E02005924',
        '3ZY' => 'E02005924',
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
