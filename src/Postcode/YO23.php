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
final class YO23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002784',
        '1AB' => 'E02002784',
        '1AD' => 'E02002784',
        '1AE' => 'E02002784',
        '1AF' => 'E02002784',
        '1AG' => 'E02002784',
        '1AH' => 'E02002784',
        '1AJ' => 'E02002784',
        '1AL' => 'E02002790',
        '1AN' => 'E02002790',
        '1AP' => 'E02002790',
        '1AQ' => 'E02002784',
        '1AR' => 'E02002790',
        '1AS' => 'E02002790',
        '1AT' => 'E02002790',
        '1AU' => 'E02002790',
        '1AW' => 'E02002790',
        '1AX' => 'E02002790',
        '1AY' => 'E02002790',
        '1AZ' => 'E02002790',
        '1BA' => 'E02002790',
        '1BB' => 'E02002790',
        '1BD' => 'E02002790',
        '1BE' => 'E02002790',
        '1BF' => 'E02002784',
        '1BG' => 'E02002784',
        '1BH' => 'E02002784',
        '1BJ' => 'E02002784',
        '1BL' => 'E02002784',
        '1BN' => 'E02002784',
        '1BP' => 'E02002784',
        '1BQ' => 'E02002784',
        '1BR' => 'E02002784',
        '1BS' => 'E02002784',
        '1BT' => 'E02002784',
        '1BU' => 'E02002784',
        '1BW' => 'E02002784',
        '1BX' => 'E02002784',
        '1BY' => 'E02002784',
        '1BZ' => 'E02002784',
        '1DA' => 'E02002790',
        '1DB' => 'E02002790',
        '1DD' => 'E02002784',
        '1DE' => 'E02002792',
        '1DF' => 'E02002784',
        '1DG' => 'E02002784',
        '1DH' => 'E02002792',
        '1DJ' => 'E02002788',
        '1DL' => 'E02002792',
        '1DN' => 'E02002792',
        '1DP' => 'E02002792',
        '1DQ' => 'E02002792',
        '1DR' => 'E02002788',
        '1DS' => 'E02002788',
        '1DT' => 'E02002788',
        '1DU' => 'E02002788',
        '1DW' => 'E02002792',
        '1DX' => 'E02002788',
        '1DY' => 'E02002788',
        '1DZ' => 'E02002792',
        '1EA' => 'E02002788',
        '1EB' => 'E02002792',
        '1ED' => 'E02002792',
        '1EE' => 'E02002792',
        '1EF' => 'E02002792',
        '1EG' => 'E02002792',
        '1EH' => 'E02002792',
        '1EJ' => 'E02002792',
        '1EL' => 'E02002788',
        '1EN' => 'E02002788',
        '1EP' => 'E02002792',
        '1EQ' => 'E02002784',
        '1ER' => 'E02002792',
        '1ES' => 'E02002792',
        '1ET' => 'E02002792',
        '1EU' => 'E02002792',
        '1EW' => 'E02002792',
        '1EX' => 'E02002792',
        '1EY' => 'E02002792',
        '1EZ' => 'E02002792',
        '1FA' => 'E02002792',
        '1FB' => 'E02002788',
        '1FD' => 'E02002792',
        '1FE' => 'E02002784',
        '1FF' => 'E02002792',
        '1FG' => 'E02002790',
        '1FH' => 'E02002792',
        '1FJ' => 'E02002792',
        '1FL' => 'E02002792',
        '1FN' => 'E02002792',
        '1FQ' => 'E02002792',
        '1FR' => 'E02002784',
        '1FS' => 'E02002784',
        '1HA' => 'E02002792',
        '1HB' => 'E02002792',
        '1HD' => 'E02002792',
        '1HE' => 'E02002792',
        '1HF' => 'E02002792',
        '1HG' => 'E02002792',
        '1HH' => 'E02002792',
        '1HJ' => 'E02002792',
        '1HL' => 'E02002792',
        '1HN' => 'E02002792',
        '1HP' => 'E02002792',
        '1HQ' => 'E02002792',
        '1HR' => 'E02002792',
        '1HS' => 'E02002792',
        '1HT' => 'E02002792',
        '1HU' => 'E02002792',
        '1HW' => 'E02002792',
        '1HX' => 'E02002792',
        '1HY' => 'E02002792',
        '1HZ' => 'E02002792',
        '1JA' => 'E02002792',
        '1JB' => 'E02002792',
        '1JD' => 'E02002784',
        '1JE' => 'E02002790',
        '1JF' => 'E02002784',
        '1JG' => 'E02002784',
        '1JH' => 'E02002790',
        '1JJ' => 'E02002790',
        '1JL' => 'E02002790',
        '1JN' => 'E02002790',
        '1JP' => 'E02002790',
        '1JQ' => 'E02002790',
        '1JR' => 'E02002790',
        '1JS' => 'E02002790',
        '1JT' => 'E02002790',
        '1JU' => 'E02002790',
        '1JW' => 'E02002790',
        '1JX' => 'E02002788',
        '1JY' => 'E02002788',
        '1JZ' => 'E02002792',
        '1LA' => 'E02002788',
        '1LB' => 'E02002788',
        '1LD' => 'E02002792',
        '1LE' => 'E02002792',
        '1LF' => 'E02002792',
        '1LG' => 'E02002792',
        '1LH' => 'E02002792',
        '1LJ' => 'E02002792',
        '1LL' => 'E02002792',
        '1LN' => 'E02002792',
        '1LP' => 'E02002792',
        '1LQ' => 'E02002792',
        '1LR' => 'E02002792',
        '1LS' => 'E02002792',
        '1LT' => 'E02002792',
        '1LU' => 'E02002792',
        '1LW' => 'E02002792',
        '1LX' => 'E02002792',
        '1LY' => 'E02002790',
        '1LZ' => 'E02002784',
        '1NA' => 'E02002790',
        '1NB' => 'E02002790',
        '1ND' => 'E02002790',
        '1NE' => 'E02002784',
        '1NF' => 'E02002784',
        '1NG' => 'E02002788',
        '1NH' => 'E02002788',
        '1NJ' => 'E02002788',
        '1NL' => 'E02002788',
        '1NN' => 'E02002788',
        '1NP' => 'E02002788',
        '1NQ' => 'E02002788',
        '1NR' => 'E02002788',
        '1NS' => 'E02002788',
        '1NT' => 'E02002790',
        '1NU' => 'E02002790',
        '1NW' => 'E02002788',
        '1NX' => 'E02002790',
        '1NY' => 'E02002788',
        '1NZ' => 'E02002792',
        '1PA' => 'E02002788',
        '1PB' => 'E02002788',
        '1PD' => 'E02002792',
        '1PE' => 'E02002792',
        '1PF' => 'E02002788',
        '1PG' => 'E02002792',
        '1PH' => 'E02002790',
        '1PJ' => 'E02002784',
        '1PL' => 'E02002784',
        '1PN' => 'E02002790',
        '1PP' => 'E02002792',
        '1PQ' => 'E02002792',
        '1PR' => 'E02002792',
        '1PS' => 'E02002792',
        '1PT' => 'E02002792',
        '1PU' => 'E02002792',
        '1PW' => 'E02002790',
        '1PX' => 'E02002792',
        '1PY' => 'E02002792',
        '1PZ' => 'E02002792',
        '1QA' => 'E02002790',
        '1WA' => 'E02002784',
        '1WE' => 'E02002788',
        '1WF' => 'E02002788',
        '1WG' => 'E02002784',
        '1WH' => 'E02002784',
        '1WJ' => 'E02002784',
        '1WL' => 'E02002784',
        '1WN' => 'E02002784',
        '1WP' => 'E02002784',
        '1WQ' => 'E02002784',
        '1WR' => 'E02002792',
        '1WS' => 'E02002792',
        '1WT' => 'E02002784',
        '1WU' => 'E02002784',
        '1WW' => 'E02002784',
        '1WX' => 'E02002784',
        '1WY' => 'E02002792',
        '1WZ' => 'E02002784',
        '1XQ' => 'E02002784',
        '1XR' => 'E02002784',
        '1XS' => 'E02002784',
        '1XT' => 'E02002784',
        '1XU' => 'E02002784',
        '1XW' => 'E02002784',
        '1XX' => 'E02002784',
        '1XY' => 'E02002784',
        '1XZ' => 'E02002784',
        '1YA' => 'E02002784',
        '1YB' => 'E02002784',
        '1YD' => 'E02002784',
        '1YE' => 'E02002792',
        '1YF' => 'E02002784',
        '1YG' => 'E02002788',
        '1YH' => 'E02002788',
        '1YJ' => 'E02002788',
        '1YL' => 'E02002784',
        '1YN' => 'E02002784',
        '1YP' => 'E02002784',
        '1YQ' => 'E02002784',
        '1YR' => 'E02002784',
        '1YS' => 'E02002784',
        '1YT' => 'E02002784',
        '1YU' => 'E02002784',
        '1YW' => 'E02002784',
        '1YX' => 'E02002784',
        '1YY' => 'E02002784',
        '1YZ' => 'E02002784',
        '1ZH' => 'E02002784',
        '1ZJ' => 'E02002788',
        '1ZL' => 'E02002784',
        '1ZN' => 'E02002784',
        '1ZR' => 'E02002784',
        '1ZW' => 'E02002788',
        '2AA' => 'E02002795',
        '2AB' => 'E02002795',
        '2AD' => 'E02002795',
        '2BB' => 'E02002793',
        '2BD' => 'E02002795',
        '2GA' => 'E02002792',
        '2GB' => 'E02002795',
        '2GE' => 'E02002795',
        '2GF' => 'E02002795',
        '2LX' => 'E02002795',
        '2PL' => 'E02002795',
        '2PT' => 'E02005810',
        '2PU' => 'E02002795',
        '2PW' => 'E02005810',
        '2PY' => 'E02002795',
        '2QA' => 'E02002795',
        '2QB' => 'E02002795',
        '2QD' => 'E02002795',
        '2QE' => 'E02002795',
        '2QF' => 'E02002795',
        '2QG' => 'E02002795',
        '2QH' => 'E02002795',
        '2QJ' => 'E02002795',
        '2QL' => 'E02002795',
        '2QN' => 'E02002795',
        '2QP' => 'E02002795',
        '2QQ' => 'E02002795',
        '2QR' => 'E02002795',
        '2QS' => 'E02002795',
        '2QT' => 'E02002795',
        '2QU' => 'E02002795',
        '2QW' => 'E02002795',
        '2QX' => 'E02002795',
        '2QY' => 'E02002795',
        '2QZ' => 'E02002795',
        '2RA' => 'E02002795',
        '2RB' => 'E02002795',
        '2RD' => 'E02002795',
        '2RE' => 'E02002795',
        '2RF' => 'E02002795',
        '2RG' => 'E02002795',
        '2RH' => 'E02002795',
        '2RJ' => 'E02002795',
        '2RL' => 'E02002795',
        '2RN' => 'E02002795',
        '2RP' => 'E02002795',
        '2RQ' => 'E02002795',
        '2RR' => 'E02002795',
        '2RS' => 'E02002795',
        '2RT' => 'E02002795',
        '2RU' => 'E02002795',
        '2RW' => 'E02002795',
        '2RX' => 'E02002795',
        '2RY' => 'E02002795',
        '2RZ' => 'E02002795',
        '2SA' => 'E02002795',
        '2SB' => 'E02002795',
        '2SD' => 'E02002795',
        '2SE' => 'E02002795',
        '2SF' => 'E02002795',
        '2SG' => 'E02002795',
        '2SH' => 'E02002795',
        '2SJ' => 'E02002795',
        '2SL' => 'E02002795',
        '2SN' => 'E02002795',
        '2SP' => 'E02002795',
        '2SQ' => 'E02002795',
        '2SR' => 'E02002795',
        '2SS' => 'E02002795',
        '2ST' => 'E02002795',
        '2SU' => 'E02002795',
        '2SW' => 'E02002795',
        '2SX' => 'E02002795',
        '2SY' => 'E02002795',
        '2SZ' => 'E02002795',
        '2TA' => 'E02002795',
        '2TB' => 'E02002795',
        '2TD' => 'E02002795',
        '2TE' => 'E02002795',
        '2TF' => 'E02002795',
        '2TR' => 'E02002795',
        '2TS' => 'E02002795',
        '2TT' => 'E02002795',
        '2TU' => 'E02002795',
        '2TX' => 'E02002795',
        '2TY' => 'E02002795',
        '2TZ' => 'E02002795',
        '2UA' => 'E02002795',
        '2UB' => 'E02002795',
        '2UD' => 'E02002793',
        '2UE' => 'E02002795',
        '2UF' => 'E02002795',
        '2UG' => 'E02002795',
        '2UH' => 'E02002795',
        '2UJ' => 'E02002795',
        '2UL' => 'E02002795',
        '2UN' => 'E02002795',
        '2UP' => 'E02002795',
        '2UQ' => 'E02002795',
        '2UR' => 'E02002795',
        '2US' => 'E02002795',
        '2UT' => 'E02002795',
        '2UU' => 'E02002795',
        '2UW' => 'E02002795',
        '2UX' => 'E02002795',
        '2UY' => 'E02002795',
        '2UZ' => 'E02002795',
        '2WP' => 'E02002784',
        '2WQ' => 'E02002784',
        '2WR' => 'E02002784',
        '2WS' => 'E02002795',
        '2WT' => 'E02002784',
        '2WU' => 'E02002784',
        '2WW' => 'E02002784',
        '2WX' => 'E02002784',
        '2WY' => 'E02005810',
        '2WZ' => 'E02005810',
        '2XA' => 'E02002795',
        '2XB' => 'E02002795',
        '2XD' => 'E02002795',
        '2XE' => 'E02002795',
        '2XW' => 'E02002784',
        '2YE' => 'E02002784',
        '2YF' => 'E02002795',
        '2YG' => 'E02002795',
        '2YH' => 'E02002795',
        '2YJ' => 'E02002784',
        '2YL' => 'E02002795',
        '2YN' => 'E02002784',
        '2YQ' => 'E02002795',
        '2YW' => 'E02002784',
        '2YX' => 'E02002784',
        '2YY' => 'E02002784',
        '2YZ' => 'E02002795',
        '2ZH' => 'E02002795',
        '3AA' => 'E02002795',
        '3AB' => 'E02002795',
        '3FP' => 'E02002782',
        '3FR' => 'E02002782',
        '3FS' => 'E02002782',
        '3FT' => 'E02002782',
        '3FW' => 'E02002782',
        '3FX' => 'E02002782',
        '3FY' => 'E02002782',
        '3FZ' => 'E02002782',
        '3GB' => 'E02002782',
        '3GE' => 'E02002795',
        '3GF' => 'E02002795',
        '3GG' => 'E02002795',
        '3GJ' => 'E02002784',
        '3GS' => 'E02002782',
        '3GU' => 'E02002784',
        '3GY' => 'E02002795',
        '3LA' => 'E02002795',
        '3LB' => 'E02002795',
        '3LD' => 'E02002795',
        '3LT' => 'E02002782',
        '3NA' => 'E02002782',
        '3NB' => 'E02002784',
        '3ND' => 'E02002784',
        '3NE' => 'E02005810',
        '3NJ' => 'E02002782',
        '3NL' => 'E02005810',
        '3NN' => 'E02002782',
        '3NT' => 'E02005810',
        '3NU' => 'E02002782',
        '3NW' => 'E02002782',
        '3NX' => 'E02005810',
        '3NY' => 'E02002782',
        '3NZ' => 'E02002782',
        '3PA' => 'E02005776',
        '3PB' => 'E02002782',
        '3PD' => 'E02002782',
        '3PE' => 'E02002782',
        '3PF' => 'E02002782',
        '3PG' => 'E02005810',
        '3PH' => 'E02005810',
        '3PJ' => 'E02005810',
        '3PL' => 'E02005810',
        '3PN' => 'E02005810',
        '3PP' => 'E02005810',
        '3PQ' => 'E02005810',
        '3PR' => 'E02002782',
        '3PS' => 'E02002782',
        '3PT' => 'E02002782',
        '3PU' => 'E02002782',
        '3PW' => 'E02002782',
        '3PX' => 'E02002782',
        '3PY' => 'E02002782',
        '3PZ' => 'E02002782',
        '3QA' => 'E02002782',
        '3QB' => 'E02002782',
        '3QD' => 'E02002782',
        '3QE' => 'E02002782',
        '3QF' => 'E02002782',
        '3QG' => 'E02002782',
        '3QH' => 'E02002782',
        '3QJ' => 'E02002782',
        '3QL' => 'E02002782',
        '3QN' => 'E02002782',
        '3QP' => 'E02002782',
        '3QQ' => 'E02002782',
        '3QR' => 'E02002782',
        '3QS' => 'E02002782',
        '3QT' => 'E02002782',
        '3QU' => 'E02002782',
        '3QW' => 'E02002782',
        '3QX' => 'E02002782',
        '3QY' => 'E02002782',
        '3QZ' => 'E02002782',
        '3RA' => 'E02002782',
        '3RB' => 'E02002782',
        '3RD' => 'E02002782',
        '3RE' => 'E02002782',
        '3RF' => 'E02002782',
        '3RG' => 'E02002782',
        '3RH' => 'E02002782',
        '3RJ' => 'E02002782',
        '3RL' => 'E02002782',
        '3RN' => 'E02002782',
        '3RP' => 'E02002782',
        '3RQ' => 'E02002782',
        '3RR' => 'E02002782',
        '3RS' => 'E02002795',
        '3RT' => 'E02002795',
        '3RU' => 'E02002795',
        '3RW' => 'E02002795',
        '3RX' => 'E02002795',
        '3RY' => 'E02002795',
        '3RZ' => 'E02002795',
        '3SA' => 'E02002795',
        '3SB' => 'E02002795',
        '3SD' => 'E02002795',
        '3SE' => 'E02002795',
        '3SF' => 'E02002795',
        '3SG' => 'E02002795',
        '3SH' => 'E02002795',
        '3SJ' => 'E02002795',
        '3SL' => 'E02002795',
        '3SN' => 'E02002795',
        '3SP' => 'E02002795',
        '3SQ' => 'E02002795',
        '3SR' => 'E02002795',
        '3SS' => 'E02002795',
        '3ST' => 'E02002795',
        '3SU' => 'E02002795',
        '3SW' => 'E02002795',
        '3SX' => 'E02002795',
        '3SY' => 'E02002795',
        '3SZ' => 'E02002795',
        '3TA' => 'E02002795',
        '3TB' => 'E02002795',
        '3TD' => 'E02002795',
        '3TE' => 'E02002795',
        '3TF' => 'E02002795',
        '3TG' => 'E02002795',
        '3TH' => 'E02002795',
        '3TJ' => 'E02002795',
        '3TL' => 'E02002795',
        '3TN' => 'E02002795',
        '3TP' => 'E02002795',
        '3TQ' => 'E02002795',
        '3TR' => 'E02002795',
        '3TS' => 'E02002795',
        '3TT' => 'E02002795',
        '3TU' => 'E02002795',
        '3TW' => 'E02002795',
        '3TX' => 'E02002795',
        '3TY' => 'E02002795',
        '3TZ' => 'E02002795',
        '3UA' => 'E02002795',
        '3UB' => 'E02002795',
        '3UD' => 'E02002795',
        '3UE' => 'E02002795',
        '3UF' => 'E02002795',
        '3UG' => 'E02002795',
        '3UH' => 'E02002795',
        '3UJ' => 'E02002795',
        '3UL' => 'E02002795',
        '3UN' => 'E02002795',
        '3UP' => 'E02002795',
        '3UQ' => 'E02002795',
        '3UR' => 'E02002795',
        '3US' => 'E02002795',
        '3UT' => 'E02002795',
        '3UU' => 'E02002795',
        '3UW' => 'E02002782',
        '3UX' => 'E02002795',
        '3UY' => 'E02002795',
        '3UZ' => 'E02002795',
        '3WA' => 'E02002795',
        '3WB' => 'E02002784',
        '3WD' => 'E02002784',
        '3WH' => 'E02002795',
        '3WL' => 'E02002784',
        '3WN' => 'E02002784',
        '3WP' => 'E02002784',
        '3WQ' => 'E02002784',
        '3WR' => 'E02002784',
        '3WS' => 'E02002784',
        '3WT' => 'E02002784',
        '3WU' => 'E02002784',
        '3WW' => 'E02002784',
        '3WX' => 'E02002784',
        '3WY' => 'E02002784',
        '3WZ' => 'E02002784',
        '3XA' => 'E02002795',
        '3XB' => 'E02002795',
        '3XD' => 'E02002795',
        '3XE' => 'E02002795',
        '3XF' => 'E02002795',
        '3XG' => 'E02002795',
        '3XH' => 'E02002795',
        '3XJ' => 'E02002795',
        '3XL' => 'E02002795',
        '3XN' => 'E02002795',
        '3XP' => 'E02002795',
        '3XQ' => 'E02002795',
        '3XR' => 'E02002795',
        '3XS' => 'E02002795',
        '3XT' => 'E02002795',
        '3XU' => 'E02002795',
        '3XW' => 'E02002795',
        '3XX' => 'E02002795',
        '3XY' => 'E02002795',
        '3XZ' => 'E02002795',
        '3YA' => 'E02002795',
        '3YB' => 'E02002795',
        '3YD' => 'E02002795',
        '3YE' => 'E02002795',
        '3YF' => 'E02002795',
        '3YG' => 'E02002795',
        '3YH' => 'E02002795',
        '3YJ' => 'E02002795',
        '3YL' => 'E02002795',
        '3YN' => 'E02002795',
        '3YP' => 'E02002795',
        '3YQ' => 'E02002795',
        '3YR' => 'E02002795',
        '3YS' => 'E02002795',
        '3YT' => 'E02002795',
        '3YU' => 'E02002795',
        '3YW' => 'E02002795',
        '3YX' => 'E02002795',
        '3YY' => 'E02002795',
        '3YZ' => 'E02002795',
        '3ZA' => 'E02002784',
        '3ZB' => 'E02002782',
        '3ZD' => 'E02002784',
        '3ZE' => 'E02002795',
        '3ZF' => 'E02002784',
        '3ZG' => 'E02002784',
        '3ZH' => 'E02002784',
        '3ZJ' => 'E02002795',
        '3ZL' => 'E02002795',
        '3ZN' => 'E02002784',
        '3ZP' => 'E02002784',
        '3ZQ' => 'E02002784',
        '3ZR' => 'E02002784',
        '3ZU' => 'E02002784',
        '3ZW' => 'E02002784',
        '7AA' => 'E02005810',
        '7AB' => 'E02005810',
        '7AD' => 'E02005810',
        '7AE' => 'E02005810',
        '7AF' => 'E02005810',
        '7AG' => 'E02005810',
        '7AH' => 'E02005810',
        '7AJ' => 'E02005810',
        '7AL' => 'E02005810',
        '7AN' => 'E02005810',
        '7AP' => 'E02005810',
        '7AQ' => 'E02005810',
        '7AR' => 'E02005810',
        '7AS' => 'E02005810',
        '7AT' => 'E02005810',
        '7AU' => 'E02005810',
        '7AW' => 'E02005810',
        '7AX' => 'E02005810',
        '7AY' => 'E02005810',
        '7AZ' => 'E02005810',
        '7BA' => 'E02005810',
        '7BB' => 'E02005810',
        '7BD' => 'E02005810',
        '7BE' => 'E02005810',
        '7BF' => 'E02005810',
        '7BG' => 'E02005810',
        '7BH' => 'E02005810',
        '7BJ' => 'E02005810',
        '7BL' => 'E02005810',
        '7BN' => 'E02005810',
        '7BP' => 'E02005810',
        '7BQ' => 'E02005810',
        '7BR' => 'E02005810',
        '7BT' => 'E02005810',
        '7BU' => 'E02005810',
        '7BW' => 'E02005810',
        '7BX' => 'E02005810',
        '7BY' => 'E02005810',
        '7BZ' => 'E02005810',
        '7DA' => 'E02005810',
        '7DB' => 'E02005810',
        '7DD' => 'E02005810',
        '7DE' => 'E02005810',
        '7DF' => 'E02005810',
        '7DG' => 'E02005810',
        '7DH' => 'E02005810',
        '7DJ' => 'E02005810',
        '7DL' => 'E02005810',
        '7DN' => 'E02005810',
        '7DP' => 'E02005810',
        '7DQ' => 'E02005810',
        '7DR' => 'E02005810',
        '7DS' => 'E02005810',
        '7DT' => 'E02005810',
        '7DU' => 'E02005810',
        '7DW' => 'E02005810',
        '7DX' => 'E02005810',
        '7DY' => 'E02005810',
        '7DZ' => 'E02005810',
        '7EA' => 'E02005810',
        '7EB' => 'E02005810',
        '7ED' => 'E02005810',
        '7EE' => 'E02005810',
        '7EF' => 'E02005810',
        '7EG' => 'E02005810',
        '7EH' => 'E02005810',
        '7EJ' => 'E02005810',
        '7EL' => 'E02005810',
        '7HA' => 'E02005810',
        '7HB' => 'E02005810',
        '7HJ' => 'E02005810',
        '7HT' => 'E02005810',
        '7WA' => 'E02002784',
        '7WZ' => 'E02002784',
        '7YT' => 'E02002784',
        '7YU' => 'E02005810',
        '7YW' => 'E02002784',
        '7YX' => 'E02005810',
        '7YY' => 'E02005810',
        '7YZ' => 'E02002784',
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
