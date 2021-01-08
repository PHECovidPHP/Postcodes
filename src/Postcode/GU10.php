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
final class GU10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006357',
        '1AB' => 'E02006357',
        '1AD' => 'E02006357',
        '1AE' => 'E02006357',
        '1AF' => 'E02006357',
        '1AG' => 'E02006357',
        '1AH' => 'E02006357',
        '1AJ' => 'E02006357',
        '1AL' => 'E02006357',
        '1AN' => 'E02006357',
        '1AP' => 'E02006357',
        '1AQ' => 'E02006357',
        '1AR' => 'E02006357',
        '1AS' => 'E02006357',
        '1AT' => 'E02006357',
        '1AU' => 'E02006357',
        '1AW' => 'E02006357',
        '1AX' => 'E02006357',
        '1AY' => 'E02006357',
        '1AZ' => 'E02006357',
        '1BA' => 'E02006357',
        '1BB' => 'E02006357',
        '1BD' => 'E02006357',
        '1BE' => 'E02006357',
        '1BF' => 'E02006441',
        '1BG' => 'E02006357',
        '1BH' => 'E02006357',
        '1BJ' => 'E02006357',
        '1BL' => 'E02006357',
        '1BN' => 'E02006357',
        '1BP' => 'E02006357',
        '1BQ' => 'E02006357',
        '1BS' => 'E02006357',
        '1BT' => 'E02006357',
        '1BU' => 'E02006357',
        '1BW' => 'E02006357',
        '1BX' => 'E02006357',
        '1BY' => 'E02006357',
        '1BZ' => 'E02006357',
        '1DA' => 'E02006357',
        '1DB' => 'E02006357',
        '1DD' => 'E02006357',
        '1DE' => 'E02006357',
        '1DF' => 'E02006357',
        '1DG' => 'E02006357',
        '1DH' => 'E02006357',
        '1DJ' => 'E02006357',
        '1DL' => 'E02006357',
        '1DN' => 'E02006357',
        '1DP' => 'E02006357',
        '1DQ' => 'E02006357',
        '1DR' => 'E02006357',
        '1DS' => 'E02006357',
        '1DT' => 'E02006357',
        '1DU' => 'E02006357',
        '1DW' => 'E02006357',
        '1DX' => 'E02006357',
        '1DY' => 'E02006357',
        '1DZ' => 'E02006357',
        '1EA' => 'E02006357',
        '1EB' => 'E02006357',
        '1ED' => 'E02006357',
        '1EE' => 'E02006357',
        '1EF' => 'E02006357',
        '1EG' => 'E02006357',
        '1EH' => 'E02006357',
        '1EJ' => 'E02006357',
        '1EN' => 'E02006357',
        '1EP' => 'E02006357',
        '1EQ' => 'E02006357',
        '1ER' => 'E02006357',
        '1ES' => 'E02006360',
        '1ET' => 'E02006360',
        '1EU' => 'E02006357',
        '1EW' => 'E02006357',
        '1EX' => 'E02006357',
        '1EY' => 'E02006357',
        '1FA' => 'E02006442',
        '1FB' => 'E02006357',
        '1FD' => 'E02006442',
        '1FE' => 'E02006442',
        '1FF' => 'E02006357',
        '1FG' => 'E02006439',
        '1FH' => 'E02006442',
        '1FJ' => 'E02006357',
        '1FL' => 'E02006357',
        '1FN' => 'E02006439',
        '1HA' => 'E02006360',
        '1HB' => 'E02006360',
        '1HD' => 'E02006360',
        '1HE' => 'E02006360',
        '1HG' => 'E02006360',
        '1HH' => 'E02006360',
        '1HJ' => 'E02006360',
        '1HL' => 'E02006360',
        '1HN' => 'E02006360',
        '1HP' => 'E02006360',
        '1HQ' => 'E02006360',
        '1HR' => 'E02006360',
        '1HS' => 'E02006360',
        '1HT' => 'E02006360',
        '1HU' => 'E02006360',
        '1HX' => 'E02006360',
        '1HY' => 'E02006360',
        '1HZ' => 'E02006360',
        '1JA' => 'E02006360',
        '1JB' => 'E02006360',
        '1JD' => 'E02006360',
        '1JE' => 'E02006360',
        '1JF' => 'E02006360',
        '1JH' => 'E02006360',
        '1JJ' => 'E02006360',
        '1JL' => 'E02006360',
        '1JN' => 'E02006360',
        '1JP' => 'E02006360',
        '1JU' => 'E02006357',
        '1JW' => 'E02006360',
        '1JX' => 'E02006357',
        '1JZ' => 'E02006360',
        '1LA' => 'E02006357',
        '1LB' => 'E02006360',
        '1LD' => 'E02006360',
        '1LE' => 'E02006360',
        '1LF' => 'E02006360',
        '1LG' => 'E02006360',
        '1LH' => 'E02006360',
        '1LJ' => 'E02006360',
        '1LL' => 'E02006360',
        '1LN' => 'E02006360',
        '1LP' => 'E02006360',
        '1LQ' => 'E02006360',
        '1LR' => 'E02006360',
        '1LS' => 'E02006360',
        '1LT' => 'E02006360',
        '1LU' => 'E02006360',
        '1LW' => 'E02006360',
        '1LX' => 'E02006360',
        '1LY' => 'E02006360',
        '1LZ' => 'E02006360',
        '1NA' => 'E02006360',
        '1NB' => 'E02006360',
        '1ND' => 'E02006360',
        '1NE' => 'E02006360',
        '1NG' => 'E02006360',
        '1NL' => 'E02006442',
        '1NP' => 'E02006442',
        '1NQ' => 'E02006360',
        '1NR' => 'E02006442',
        '1NS' => 'E02006442',
        '1NT' => 'E02006442',
        '1NU' => 'E02006442',
        '1NX' => 'E02006442',
        '1NZ' => 'E02006442',
        '1PA' => 'E02006442',
        '1PB' => 'E02006442',
        '1PD' => 'E02006439',
        '1PE' => 'E02006442',
        '1PF' => 'E02006442',
        '1PG' => 'E02006442',
        '1PH' => 'E02006442',
        '1PJ' => 'E02006442',
        '1PL' => 'E02006439',
        '1PN' => 'E02006442',
        '1PP' => 'E02006439',
        '1PR' => 'E02006442',
        '1PS' => 'E02006360',
        '1PT' => 'E02006360',
        '1PU' => 'E02006360',
        '1PW' => 'E02006442',
        '1PX' => 'E02006442',
        '1PY' => 'E02006442',
        '1QA' => 'E02006442',
        '1QB' => 'E02006442',
        '1QD' => 'E02006442',
        '1QE' => 'E02006442',
        '1QF' => 'E02006442',
        '1QG' => 'E02006442',
        '1QH' => 'E02006442',
        '1QJ' => 'E02006357',
        '1QP' => 'E02006442',
        '1QQ' => 'E02006357',
        '1QR' => 'E02006442',
        '1QS' => 'E02006442',
        '1QT' => 'E02006442',
        '1QU' => 'E02006442',
        '1QX' => 'E02006442',
        '1QY' => 'E02006442',
        '1QZ' => 'E02006442',
        '1RA' => 'E02006442',
        '1RB' => 'E02006442',
        '1RD' => 'E02006442',
        '1RE' => 'E02006839',
        '1RF' => 'E02006839',
        '1RG' => 'E02006442',
        '1RH' => 'E02006442',
        '1RJ' => 'E02006442',
        '1RL' => 'E02006442',
        '1RN' => 'E02006442',
        '1RQ' => 'E02006442',
        '1RW' => 'E02006442',
        '1WA' => 'E02006441',
        '1WB' => 'E02006442',
        '1WG' => 'E02006442',
        '1WH' => 'E02006441',
        '1WJ' => 'E02006441',
        '1WU' => 'E02006441',
        '1WW' => 'E02006441',
        '1WX' => 'E02006441',
        '1WY' => 'E02006441',
        '1WZ' => 'E02006441',
        '1XF' => 'E02006441',
        '1XG' => 'E02006441',
        '1XH' => 'E02006441',
        '1XJ' => 'E02006441',
        '1XL' => 'E02006441',
        '1XN' => 'E02006441',
        '1XP' => 'E02006357',
        '1XQ' => 'E02006441',
        '1XR' => 'E02006441',
        '1XS' => 'E02006441',
        '1XT' => 'E02006357',
        '1XU' => 'E02006441',
        '1XW' => 'E02006441',
        '1XX' => 'E02006357',
        '1XY' => 'E02006357',
        '1XZ' => 'E02006357',
        '1YA' => 'E02006357',
        '1YB' => 'E02006357',
        '1YD' => 'E02006357',
        '1YE' => 'E02006441',
        '1YF' => 'E02006357',
        '1YG' => 'E02006441',
        '1YH' => 'E02006357',
        '1YJ' => 'E02006357',
        '1YL' => 'E02006357',
        '1YN' => 'E02006441',
        '1YP' => 'E02006357',
        '1YQ' => 'E02006357',
        '1YR' => 'E02006441',
        '1YS' => 'E02006357',
        '1YT' => 'E02006357',
        '1YU' => 'E02006441',
        '1YW' => 'E02006441',
        '1YX' => 'E02006357',
        '1YY' => 'E02006441',
        '1YZ' => 'E02006353',
        '1ZH' => 'E02006441',
        '1ZN' => 'E02006441',
        '1ZQ' => 'E02006441',
        '1ZX' => 'E02006353',
        '2AA' => 'E02006839',
        '2AB' => 'E02006839',
        '2AD' => 'E02006839',
        '2AE' => 'E02006839',
        '2AF' => 'E02006839',
        '2AG' => 'E02006839',
        '2AH' => 'E02006839',
        '2AJ' => 'E02006839',
        '2AL' => 'E02006839',
        '2AN' => 'E02006839',
        '2AP' => 'E02006839',
        '2AQ' => 'E02006839',
        '2AR' => 'E02006839',
        '2AS' => 'E02006839',
        '2AT' => 'E02006449',
        '2AU' => 'E02006839',
        '2AW' => 'E02006839',
        '2AX' => 'E02006839',
        '2AY' => 'E02006839',
        '2AZ' => 'E02006839',
        '2BA' => 'E02006449',
        '2BB' => 'E02006441',
        '2BD' => 'E02006441',
        '2BH' => 'E02006839',
        '2BL' => 'E02006839',
        '2BN' => 'E02006839',
        '2BP' => 'E02006839',
        '2BS' => 'E02006839',
        '2BT' => 'E02006839',
        '2BU' => 'E02006839',
        '2BW' => 'E02006839',
        '2BX' => 'E02006839',
        '2BY' => 'E02006839',
        '2BZ' => 'E02006839',
        '2DA' => 'E02006839',
        '2DB' => 'E02006839',
        '2DD' => 'E02006839',
        '2DE' => 'E02006839',
        '2DF' => 'E02006839',
        '2DG' => 'E02006839',
        '2DH' => 'E02006839',
        '2DJ' => 'E02006839',
        '2DL' => 'E02006839',
        '2DN' => 'E02006839',
        '2DQ' => 'E02006839',
        '2DW' => 'E02006839',
        '2DX' => 'E02006839',
        '2DY' => 'E02006839',
        '2DZ' => 'E02006839',
        '2EA' => 'E02006839',
        '2EB' => 'E02006839',
        '2ED' => 'E02006839',
        '2EE' => 'E02006839',
        '2EF' => 'E02006839',
        '2EG' => 'E02006839',
        '2EH' => 'E02006839',
        '2EJ' => 'E02006839',
        '2EL' => 'E02006441',
        '2EN' => 'E02006839',
        '2EP' => 'E02006839',
        '2EQ' => 'E02006839',
        '2ER' => 'E02006839',
        '2ES' => 'E02006839',
        '2ET' => 'E02006839',
        '2EU' => 'E02006839',
        '2EW' => 'E02006839',
        '2EX' => 'E02006839',
        '2EY' => 'E02006839',
        '2EZ' => 'E02006839',
        '2HA' => 'E02006839',
        '2HB' => 'E02006839',
        '2HJ' => 'E02006839',
        '2HL' => 'E02006839',
        '2HN' => 'E02006839',
        '2HP' => 'E02006839',
        '2HR' => 'E02006839',
        '2HS' => 'E02006839',
        '2HT' => 'E02006839',
        '2HU' => 'E02006839',
        '2HW' => 'E02006839',
        '2HX' => 'E02006839',
        '2HY' => 'E02006839',
        '2HZ' => 'E02006839',
        '2JA' => 'E02006839',
        '2JB' => 'E02006441',
        '2JD' => 'E02006839',
        '2JE' => 'E02006839',
        '2JF' => 'E02006839',
        '2JG' => 'E02006839',
        '2JH' => 'E02006839',
        '2JJ' => 'E02006839',
        '2JL' => 'E02006839',
        '2JN' => 'E02006839',
        '2JP' => 'E02006839',
        '2JQ' => 'E02006839',
        '2JR' => 'E02006839',
        '2JS' => 'E02006839',
        '2JT' => 'E02006839',
        '2JU' => 'E02006839',
        '2JW' => 'E02006839',
        '2JX' => 'E02006839',
        '2JY' => 'E02006839',
        '2JZ' => 'E02006839',
        '2LA' => 'E02006839',
        '2LB' => 'E02006839',
        '2LD' => 'E02006839',
        '2LE' => 'E02006839',
        '2LG' => 'E02006839',
        '2LH' => 'E02006839',
        '2LJ' => 'E02006839',
        '2LL' => 'E02006839',
        '2LN' => 'E02006839',
        '2LP' => 'E02006839',
        '2LQ' => 'E02006839',
        '2LR' => 'E02006839',
        '2LS' => 'E02006839',
        '2LT' => 'E02006839',
        '2LU' => 'E02006839',
        '2LW' => 'E02006839',
        '2LX' => 'E02006839',
        '2NA' => 'E02006839',
        '2NB' => 'E02006839',
        '2ND' => 'E02006839',
        '2NE' => 'E02006839',
        '2NG' => 'E02006839',
        '2NH' => 'E02006839',
        '2NQ' => 'E02006839',
        '2NS' => 'E02006839',
        '2NT' => 'E02006839',
        '2NU' => 'E02006839',
        '2NW' => 'E02006839',
        '2NX' => 'E02006839',
        '2NY' => 'E02006839',
        '2NZ' => 'E02006839',
        '2PA' => 'E02006839',
        '2PB' => 'E02006839',
        '2PD' => 'E02006839',
        '2PE' => 'E02006839',
        '2PF' => 'E02006839',
        '2PG' => 'E02006839',
        '2PH' => 'E02006839',
        '2PJ' => 'E02004700',
        '2PP' => 'E02006839',
        '2PQ' => 'E02006839',
        '2PT' => 'E02006839',
        '2PU' => 'E02006839',
        '2PX' => 'E02006839',
        '2PY' => 'E02006839',
        '2PZ' => 'E02006839',
        '2QA' => 'E02006839',
        '2QB' => 'E02006839',
        '2QD' => 'E02006839',
        '2QE' => 'E02004700',
        '2QF' => 'E02004700',
        '2QG' => 'E02004700',
        '2QH' => 'E02004700',
        '2QJ' => 'E02004700',
        '2QL' => 'E02004700',
        '2QP' => 'E02006839',
        '2QQ' => 'E02004700',
        '2QR' => 'E02006839',
        '2QS' => 'E02004700',
        '2QT' => 'E02004700',
        '2QU' => 'E02004700',
        '2QX' => 'E02004700',
        '2WT' => 'E02006441',
        '2WU' => 'E02006441',
        '2WW' => 'E02006441',
        '2WX' => 'E02006441',
        '2WY' => 'E02006441',
        '2WZ' => 'E02006441',
        '2XN' => 'E02006441',
        '2XT' => 'E02004700',
        '2XX' => 'E02006839',
        '2XY' => 'E02006839',
        '2XZ' => 'E02006441',
        '2YA' => 'E02006441',
        '2YB' => 'E02006441',
        '2YD' => 'E02006839',
        '2YE' => 'E02006441',
        '2YF' => 'E02006441',
        '2YG' => 'E02006441',
        '2YH' => 'E02006839',
        '2YJ' => 'E02006839',
        '2YL' => 'E02006839',
        '2YN' => 'E02006839',
        '2YP' => 'E02006839',
        '2YQ' => 'E02006441',
        '2YR' => 'E02006441',
        '2YS' => 'E02004700',
        '2YT' => 'E02006441',
        '2YU' => 'E02004700',
        '2YW' => 'E02006441',
        '2YX' => 'E02004700',
        '2YY' => 'E02004700',
        '2YZ' => 'E02006441',
        '2ZQ' => 'E02006441',
        '2ZX' => 'E02006441',
        '3AA' => 'E02006839',
        '3AB' => 'E02006839',
        '3AD' => 'E02006839',
        '3AE' => 'E02006839',
        '3AF' => 'E02006839',
        '3AG' => 'E02006839',
        '3AH' => 'E02006442',
        '3AJ' => 'E02006442',
        '3AL' => 'E02006447',
        '3AN' => 'E02006447',
        '3AP' => 'E02006447',
        '3AQ' => 'E02006442',
        '3AR' => 'E02006839',
        '3AS' => 'E02006839',
        '3AT' => 'E02006839',
        '3AU' => 'E02006839',
        '3AW' => 'E02006447',
        '3AX' => 'E02006839',
        '3AY' => 'E02006839',
        '3AZ' => 'E02006839',
        '3BA' => 'E02006839',
        '3BB' => 'E02006839',
        '3BD' => 'E02006839',
        '3BE' => 'E02006839',
        '3BG' => 'E02006839',
        '3BH' => 'E02006839',
        '3BJ' => 'E02006839',
        '3BL' => 'E02006839',
        '3BN' => 'E02006839',
        '3BP' => 'E02006839',
        '3BQ' => 'E02006839',
        '3BS' => 'E02006839',
        '3BT' => 'E02006839',
        '3BU' => 'E02006839',
        '3BW' => 'E02006839',
        '3BX' => 'E02006839',
        '3DE' => 'E02006839',
        '3DF' => 'E02006839',
        '3DG' => 'E02006839',
        '3DH' => 'E02006839',
        '3DJ' => 'E02006839',
        '3DL' => 'E02006839',
        '3DN' => 'E02006839',
        '3DP' => 'E02006839',
        '3DQ' => 'E02006839',
        '3DR' => 'E02006839',
        '3DS' => 'E02006839',
        '3DT' => 'E02006839',
        '3DU' => 'E02006839',
        '3DW' => 'E02006839',
        '3DX' => 'E02006839',
        '3DY' => 'E02006839',
        '3DZ' => 'E02006839',
        '3EA' => 'E02006839',
        '3EB' => 'E02006839',
        '3ED' => 'E02006839',
        '3EE' => 'E02006839',
        '3EF' => 'E02006839',
        '3EG' => 'E02006839',
        '3EH' => 'E02006839',
        '3EJ' => 'E02006839',
        '3EL' => 'E02006839',
        '3EN' => 'E02006839',
        '3EP' => 'E02006839',
        '3EQ' => 'E02006839',
        '3EW' => 'E02006839',
        '3HA' => 'E02006442',
        '3HB' => 'E02006442',
        '3HD' => 'E02006442',
        '3HE' => 'E02006442',
        '3HF' => 'E02006442',
        '3HG' => 'E02006442',
        '3HH' => 'E02006442',
        '3HJ' => 'E02006442',
        '3HL' => 'E02006442',
        '3HN' => 'E02006442',
        '3HP' => 'E02006442',
        '3HQ' => 'E02006442',
        '3HR' => 'E02006442',
        '3HS' => 'E02006442',
        '3HT' => 'E02006442',
        '3HU' => 'E02006442',
        '3HW' => 'E02006442',
        '3HX' => 'E02006442',
        '3HY' => 'E02006442',
        '3HZ' => 'E02006447',
        '3JA' => 'E02006442',
        '3JB' => 'E02006447',
        '3JD' => 'E02006442',
        '3JE' => 'E02006442',
        '3JH' => 'E02006444',
        '3JJ' => 'E02006444',
        '3JL' => 'E02006444',
        '3JN' => 'E02006444',
        '3JP' => 'E02006442',
        '3JR' => 'E02006442',
        '3JS' => 'E02006442',
        '3JT' => 'E02006442',
        '3JU' => 'E02006442',
        '3JW' => 'E02006444',
        '3JX' => 'E02006444',
        '3JY' => 'E02006442',
        '3JZ' => 'E02006442',
        '3LG' => 'E02006444',
        '3LH' => 'E02006444',
        '3LJ' => 'E02006444',
        '3LL' => 'E02006444',
        '3LN' => 'E02006444',
        '3LP' => 'E02006444',
        '3LR' => 'E02006444',
        '3LS' => 'E02006444',
        '3LT' => 'E02006444',
        '3LU' => 'E02006444',
        '3LW' => 'E02006444',
        '3LX' => 'E02006444',
        '3LY' => 'E02006444',
        '3LZ' => 'E02006444',
        '3NA' => 'E02006444',
        '3NB' => 'E02006444',
        '3ND' => 'E02006444',
        '3NE' => 'E02006444',
        '3NF' => 'E02006444',
        '3NG' => 'E02006444',
        '3NH' => 'E02006444',
        '3NJ' => 'E02006444',
        '3NL' => 'E02006444',
        '3NN' => 'E02006444',
        '3NQ' => 'E02006444',
        '3NW' => 'E02006444',
        '3NY' => 'E02006444',
        '3NZ' => 'E02006442',
        '3PA' => 'E02006442',
        '3PB' => 'E02006442',
        '3PD' => 'E02006442',
        '3PE' => 'E02006442',
        '3PF' => 'E02006442',
        '3PG' => 'E02006442',
        '3PH' => 'E02006442',
        '3PJ' => 'E02006442',
        '3PL' => 'E02006442',
        '3PN' => 'E02006442',
        '3PP' => 'E02006442',
        '3PQ' => 'E02006444',
        '3PR' => 'E02006442',
        '3PS' => 'E02006442',
        '3PT' => 'E02006442',
        '3PU' => 'E02006442',
        '3PW' => 'E02006442',
        '3PX' => 'E02006442',
        '3PY' => 'E02006442',
        '3PZ' => 'E02006442',
        '3QA' => 'E02006442',
        '3QB' => 'E02006442',
        '3QD' => 'E02006442',
        '3QE' => 'E02006442',
        '3QF' => 'E02006442',
        '3QG' => 'E02006441',
        '3QH' => 'E02006442',
        '3QJ' => 'E02006442',
        '3QL' => 'E02006442',
        '3QN' => 'E02006442',
        '3QP' => 'E02006442',
        '3QQ' => 'E02006444',
        '3QR' => 'E02006442',
        '3QS' => 'E02006442',
        '3QT' => 'E02006442',
        '3QU' => 'E02006442',
        '3QW' => 'E02006442',
        '3QX' => 'E02006442',
        '3QY' => 'E02006442',
        '3RA' => 'E02006442',
        '3RB' => 'E02006442',
        '3RD' => 'E02006442',
        '3RE' => 'E02006442',
        '3RF' => 'E02006442',
        '3RG' => 'E02006442',
        '3RH' => 'E02006442',
        '3RJ' => 'E02006442',
        '3RL' => 'E02006442',
        '3RN' => 'E02006442',
        '3RP' => 'E02006442',
        '3RQ' => 'E02006442',
        '3RR' => 'E02006442',
        '3RS' => 'E02006442',
        '3RW' => 'E02006442',
        '3RX' => 'E02006442',
        '3WA' => 'E02006441',
        '3WB' => 'E02006441',
        '3WD' => 'E02006441',
        '3WW' => 'E02006441',
        '3WX' => 'E02006441',
        '3WY' => 'E02006441',
        '3WZ' => 'E02006441',
        '3XQ' => 'E02006441',
        '3XZ' => 'E02006441',
        '3YA' => 'E02006441',
        '3YB' => 'E02006442',
        '3YD' => 'E02006442',
        '3YE' => 'E02006441',
        '3YF' => 'E02006441',
        '3YG' => 'E02006442',
        '3YH' => 'E02006442',
        '3YJ' => 'E02006441',
        '3YL' => 'E02006442',
        '3YN' => 'E02006441',
        '3YP' => 'E02006442',
        '3YQ' => 'E02006442',
        '3YR' => 'E02006442',
        '3YS' => 'E02006441',
        '3YT' => 'E02006442',
        '3YW' => 'E02006442',
        '3YX' => 'E02006442',
        '3YY' => 'E02006442',
        '3YZ' => 'E02006442',
        '3ZJ' => 'E02006441',
        '3ZN' => 'E02006442',
        '3ZX' => 'E02006441',
        '4AA' => 'E02006447',
        '4AB' => 'E02006447',
        '4AD' => 'E02006447',
        '4AE' => 'E02006447',
        '4AF' => 'E02006447',
        '4AG' => 'E02006447',
        '4AH' => 'E02006447',
        '4AJ' => 'E02006447',
        '4AL' => 'E02006447',
        '4AN' => 'E02006447',
        '4AP' => 'E02006447',
        '4AQ' => 'E02006447',
        '4AR' => 'E02006447',
        '4AS' => 'E02006447',
        '4AT' => 'E02006447',
        '4AU' => 'E02006447',
        '4AW' => 'E02006447',
        '4AX' => 'E02006447',
        '4AY' => 'E02006447',
        '4AZ' => 'E02006447',
        '4BA' => 'E02006447',
        '4BB' => 'E02006447',
        '4BD' => 'E02006447',
        '4BE' => 'E02006447',
        '4BF' => 'E02006447',
        '4BG' => 'E02006447',
        '4BH' => 'E02006447',
        '4BJ' => 'E02006447',
        '4BL' => 'E02006447',
        '4BN' => 'E02006447',
        '4BP' => 'E02006447',
        '4BQ' => 'E02006441',
        '4BS' => 'E02006447',
        '4BT' => 'E02006447',
        '4BU' => 'E02006447',
        '4BW' => 'E02004697',
        '4BX' => 'E02006447',
        '4BY' => 'E02006447',
        '4BZ' => 'E02004697',
        '4DA' => 'E02006447',
        '4DB' => 'E02006447',
        '4DD' => 'E02006447',
        '4DE' => 'E02004697',
        '4DF' => 'E02004697',
        '4DG' => 'E02004697',
        '4DH' => 'E02006447',
        '4DJ' => 'E02006447',
        '4DL' => 'E02006447',
        '4DN' => 'E02006447',
        '4DP' => 'E02006447',
        '4DQ' => 'E02006447',
        '4DR' => 'E02004697',
        '4DS' => 'E02006447',
        '4DT' => 'E02006447',
        '4DU' => 'E02006447',
        '4DW' => 'E02006447',
        '4DX' => 'E02006447',
        '4DY' => 'E02006447',
        '4DZ' => 'E02006447',
        '4EA' => 'E02006447',
        '4EB' => 'E02006447',
        '4ED' => 'E02006447',
        '4EE' => 'E02006447',
        '4EF' => 'E02006447',
        '4EJ' => 'E02004697',
        '4EL' => 'E02004697',
        '4EN' => 'E02004697',
        '4EP' => 'E02006447',
        '4EQ' => 'E02006839',
        '4ER' => 'E02006447',
        '4ES' => 'E02006839',
        '4ET' => 'E02006839',
        '4EU' => 'E02006839',
        '4EW' => 'E02004697',
        '4EX' => 'E02006839',
        '4EY' => 'E02004697',
        '4EZ' => 'E02004697',
        '4HA' => 'E02004697',
        '4HB' => 'E02006839',
        '4HD' => 'E02006441',
        '4HE' => 'E02006839',
        '4HF' => 'E02006839',
        '4HG' => 'E02006839',
        '4HH' => 'E02004700',
        '4HJ' => 'E02004700',
        '4HL' => 'E02006839',
        '4HP' => 'E02006839',
        '4HQ' => 'E02006839',
        '4HR' => 'E02006839',
        '4HS' => 'E02006839',
        '4HT' => 'E02006839',
        '4HU' => 'E02006839',
        '4HX' => 'E02006839',
        '4HY' => 'E02006839',
        '4JA' => 'E02006839',
        '4JB' => 'E02006839',
        '4JD' => 'E02006839',
        '4JE' => 'E02006839',
        '4JF' => 'E02006839',
        '4JH' => 'E02006839',
        '4JL' => 'E02004697',
        '4JN' => 'E02006447',
        '4JP' => 'E02006447',
        '4JR' => 'E02006447',
        '4JS' => 'E02006447',
        '4JT' => 'E02006447',
        '4JU' => 'E02006447',
        '4JW' => 'E02006447',
        '4JX' => 'E02006447',
        '4JY' => 'E02004697',
        '4JZ' => 'E02004697',
        '4LA' => 'E02004697',
        '4LB' => 'E02004697',
        '4LD' => 'E02004697',
        '4LE' => 'E02004697',
        '4LF' => 'E02004697',
        '4LG' => 'E02004697',
        '4LH' => 'E02004697',
        '4LJ' => 'E02004697',
        '4LL' => 'E02004697',
        '4LN' => 'E02004697',
        '4LP' => 'E02004697',
        '4LQ' => 'E02004697',
        '4LR' => 'E02004697',
        '4LS' => 'E02004697',
        '4LT' => 'E02004697',
        '4LU' => 'E02004697',
        '4LW' => 'E02004697',
        '4LX' => 'E02004697',
        '4LY' => 'E02004697',
        '4LZ' => 'E02004697',
        '4NB' => 'E02006447',
        '4ND' => 'E02006447',
        '4NE' => 'E02006447',
        '4NF' => 'E02006447',
        '4NG' => 'E02006447',
        '4NH' => 'E02006447',
        '4NJ' => 'E02006447',
        '4NL' => 'E02006447',
        '4NN' => 'E02006447',
        '4NP' => 'E02006447',
        '4NQ' => 'E02006447',
        '4NR' => 'E02006447',
        '4NS' => 'E02006447',
        '4NT' => 'E02006447',
        '4NU' => 'E02006447',
        '4NW' => 'E02006447',
        '4NX' => 'E02006447',
        '4NZ' => 'E02006447',
        '4PA' => 'E02006447',
        '4PB' => 'E02006447',
        '4PD' => 'E02006447',
        '4PE' => 'E02006447',
        '4PF' => 'E02006447',
        '4PG' => 'E02006447',
        '4PH' => 'E02006447',
        '4PJ' => 'E02006447',
        '4PL' => 'E02006447',
        '4PN' => 'E02006447',
        '4PP' => 'E02006447',
        '4PQ' => 'E02006447',
        '4PR' => 'E02006447',
        '4PS' => 'E02006447',
        '4PT' => 'E02006447',
        '4PU' => 'E02006447',
        '4PW' => 'E02006447',
        '4PX' => 'E02006447',
        '4PY' => 'E02006447',
        '4PZ' => 'E02006447',
        '4QA' => 'E02006447',
        '4QB' => 'E02006447',
        '4QD' => 'E02006447',
        '4QE' => 'E02006447',
        '4QF' => 'E02006447',
        '4QG' => 'E02006447',
        '4QH' => 'E02006447',
        '4QJ' => 'E02006447',
        '4QL' => 'E02006447',
        '4QN' => 'E02006447',
        '4QP' => 'E02006447',
        '4QQ' => 'E02006447',
        '4QR' => 'E02006447',
        '4QS' => 'E02006447',
        '4QT' => 'E02006447',
        '4QU' => 'E02006447',
        '4QW' => 'E02006447',
        '4QX' => 'E02006447',
        '4QY' => 'E02006447',
        '4QZ' => 'E02006447',
        '4RA' => 'E02006447',
        '4RB' => 'E02006444',
        '4RD' => 'E02006447',
        '4RE' => 'E02006447',
        '4RF' => 'E02006444',
        '4RG' => 'E02006447',
        '4RH' => 'E02006447',
        '4RJ' => 'E02006447',
        '4RL' => 'E02006447',
        '4RN' => 'E02006447',
        '4RP' => 'E02006447',
        '4RQ' => 'E02006447',
        '4RR' => 'E02006442',
        '4RS' => 'E02006444',
        '4RT' => 'E02006444',
        '4RU' => 'E02006444',
        '4RW' => 'E02006447',
        '4RX' => 'E02006444',
        '4RY' => 'E02006444',
        '4RZ' => 'E02006444',
        '4SA' => 'E02006447',
        '4SD' => 'E02006444',
        '4SE' => 'E02006444',
        '4SF' => 'E02006444',
        '4SG' => 'E02006444',
        '4SH' => 'E02006444',
        '4SJ' => 'E02006447',
        '4SL' => 'E02006447',
        '4SN' => 'E02006444',
        '4SQ' => 'E02006444',
        '4ST' => 'E02006447',
        '4SU' => 'E02006447',
        '4SX' => 'E02006447',
        '4SY' => 'E02006447',
        '4SZ' => 'E02006447',
        '4TA' => 'E02006447',
        '4TB' => 'E02006447',
        '4TD' => 'E02006447',
        '4TE' => 'E02006447',
        '4TF' => 'E02006447',
        '4TG' => 'E02006447',
        '4TH' => 'E02006447',
        '4TJ' => 'E02006447',
        '4TL' => 'E02006447',
        '4TN' => 'E02006447',
        '4TP' => 'E02006447',
        '4TQ' => 'E02006447',
        '4TR' => 'E02006447',
        '4TS' => 'E02006447',
        '4TT' => 'E02006447',
        '4TU' => 'E02006447',
        '4TW' => 'E02006447',
        '4TX' => 'E02006447',
        '4TY' => 'E02006447',
        '4TZ' => 'E02006447',
        '4UA' => 'E02006447',
        '4UE' => 'E02006447',
        '4UF' => 'E02006447',
        '4WA' => 'E02006447',
        '4WW' => 'E02006447',
        '4WX' => 'E02006441',
        '4WZ' => 'E02006447',
        '4XA' => 'E02006441',
        '4XB' => 'E02006441',
        '4XD' => 'E02006441',
        '4XE' => 'E02006441',
        '4XG' => 'E02006441',
        '4XJ' => 'E02006441',
        '4XL' => 'E02006441',
        '4XN' => 'E02006441',
        '4XP' => 'E02006441',
        '4XQ' => 'E02006441',
        '4XR' => 'E02006441',
        '4XS' => 'E02006447',
        '4XT' => 'E02006441',
        '4XU' => 'E02006447',
        '4XW' => 'E02006447',
        '4XX' => 'E02006441',
        '4XY' => 'E02006447',
        '4XZ' => 'E02006447',
        '4YA' => 'E02006441',
        '4YB' => 'E02006441',
        '4YD' => 'E02006441',
        '4YE' => 'E02006441',
        '4YF' => 'E02006447',
        '4YG' => 'E02006447',
        '4YH' => 'E02006447',
        '4YJ' => 'E02006441',
        '4YL' => 'E02006447',
        '4YN' => 'E02006447',
        '4YP' => 'E02006441',
        '4YQ' => 'E02006441',
        '4YR' => 'E02006441',
        '4YS' => 'E02006447',
        '4YT' => 'E02006447',
        '4YU' => 'E02006441',
        '4YW' => 'E02006447',
        '4YX' => 'E02006441',
        '4YY' => 'E02006447',
        '4YZ' => 'E02006447',
        '4ZJ' => 'E02006441',
        '4ZL' => 'E02006441',
        '4ZN' => 'E02006441',
        '4ZQ' => 'E02006441',
        '4ZR' => 'E02006441',
        '4ZS' => 'E02006441',
        '4ZU' => 'E02006441',
        '4ZW' => 'E02006441',
        '4ZX' => 'E02006441',
        '4ZY' => 'E02006441',
        '5AA' => 'E02006440',
        '5AB' => 'E02006440',
        '5AD' => 'E02006440',
        '5AE' => 'E02004760',
        '5AF' => 'E02004760',
        '5AG' => 'E02004760',
        '5AH' => 'E02004760',
        '5AJ' => 'E02004760',
        '5AL' => 'E02004760',
        '5AN' => 'E02004760',
        '5AP' => 'E02004760',
        '5AQ' => 'E02004760',
        '5AR' => 'E02004760',
        '5AS' => 'E02004760',
        '5AT' => 'E02004760',
        '5AU' => 'E02004760',
        '5AW' => 'E02004760',
        '5AX' => 'E02004760',
        '5AY' => 'E02004760',
        '5AZ' => 'E02006441',
        '5BA' => 'E02004760',
        '5BB' => 'E02004760',
        '5BD' => 'E02004760',
        '5BE' => 'E02004760',
        '5BF' => 'E02004697',
        '5BG' => 'E02004760',
        '5BH' => 'E02004760',
        '5BJ' => 'E02004760',
        '5BL' => 'E02004760',
        '5BN' => 'E02004760',
        '5BP' => 'E02004760',
        '5BQ' => 'E02004760',
        '5BS' => 'E02004760',
        '5BT' => 'E02004760',
        '5BU' => 'E02004760',
        '5BW' => 'E02004760',
        '5BX' => 'E02004760',
        '5BY' => 'E02004760',
        '5BZ' => 'E02004760',
        '5DA' => 'E02004760',
        '5DB' => 'E02004760',
        '5DD' => 'E02004758',
        '5DE' => 'E02004760',
        '5DF' => 'E02004697',
        '5DG' => 'E02004760',
        '5DH' => 'E02004760',
        '5DJ' => 'E02004760',
        '5DL' => 'E02006441',
        '5DN' => 'E02006441',
        '5DP' => 'E02006441',
        '5DQ' => 'E02004697',
        '5DR' => 'E02006441',
        '5DS' => 'E02004697',
        '5DT' => 'E02004760',
        '5DU' => 'E02006441',
        '5DW' => 'E02006441',
        '5DX' => 'E02004760',
        '5DY' => 'E02004760',
        '5DZ' => 'E02004760',
        '5EA' => 'E02006441',
        '5EB' => 'E02004760',
        '5ED' => 'E02006441',
        '5EE' => 'E02006441',
        '5EF' => 'E02006441',
        '5EG' => 'E02006441',
        '5EH' => 'E02006441',
        '5EJ' => 'E02006447',
        '5EL' => 'E02006447',
        '5EP' => 'E02006441',
        '5EQ' => 'E02004758',
        '5ER' => 'E02006441',
        '5ES' => 'E02006441',
        '5ET' => 'E02006441',
        '5EU' => 'E02004697',
        '5EW' => 'E02004697',
        '5EY' => 'E02004697',
        '5HA' => 'E02004697',
        '5HB' => 'E02004697',
        '5HD' => 'E02004697',
        '5HE' => 'E02004697',
        '5HF' => 'E02004697',
        '5HG' => 'E02004760',
        '5HH' => 'E02004760',
        '5HJ' => 'E02004760',
        '5HL' => 'E02004760',
        '5HN' => 'E02006441',
        '5HP' => 'E02004760',
        '5HQ' => 'E02004760',
        '5HR' => 'E02004697',
        '5HT' => 'E02006441',
        '5HU' => 'E02004697',
        '5HX' => 'E02004697',
        '5HY' => 'E02004697',
        '5HZ' => 'E02004697',
        '5JA' => 'E02004697',
        '5JB' => 'E02004697',
        '5JD' => 'E02004697',
        '5JE' => 'E02004697',
        '5JF' => 'E02004697',
        '5JG' => 'E02004697',
        '5JH' => 'E02004697',
        '5JJ' => 'E02004697',
        '5JL' => 'E02004697',
        '5JN' => 'E02004697',
        '5JP' => 'E02004697',
        '5JQ' => 'E02004697',
        '5JR' => 'E02004697',
        '5JS' => 'E02004697',
        '5JT' => 'E02004697',
        '5JU' => 'E02004697',
        '5JW' => 'E02004697',
        '5JX' => 'E02004697',
        '5JY' => 'E02004697',
        '5JZ' => 'E02004697',
        '5LA' => 'E02004697',
        '5LB' => 'E02004697',
        '5LD' => 'E02004697',
        '5LE' => 'E02004697',
        '5LF' => 'E02004697',
        '5LH' => 'E02004697',
        '5LL' => 'E02004697',
        '5LN' => 'E02004697',
        '5LP' => 'E02004697',
        '5LQ' => 'E02004697',
        '5LR' => 'E02004697',
        '5LS' => 'E02004697',
        '5LT' => 'E02004697',
        '5LU' => 'E02004697',
        '5LW' => 'E02004697',
        '5LX' => 'E02004697',
        '5LY' => 'E02004697',
        '5LZ' => 'E02004697',
        '5NA' => 'E02004697',
        '5NB' => 'E02004697',
        '5ND' => 'E02004697',
        '5NE' => 'E02004697',
        '5NF' => 'E02004697',
        '5NG' => 'E02004697',
        '5NH' => 'E02004697',
        '5NJ' => 'E02004697',
        '5NL' => 'E02004697',
        '5NQ' => 'E02004697',
        '5NT' => 'E02004760',
        '5NU' => 'E02004760',
        '5NX' => 'E02004760',
        '5NY' => 'E02004760',
        '5NZ' => 'E02004760',
        '5PA' => 'E02004760',
        '5PB' => 'E02004760',
        '5PD' => 'E02004760',
        '5PE' => 'E02004760',
        '5PF' => 'E02004760',
        '5PG' => 'E02004760',
        '5PH' => 'E02004760',
        '5PJ' => 'E02004760',
        '5PL' => 'E02004760',
        '5PN' => 'E02004760',
        '5PP' => 'E02004760',
        '5PQ' => 'E02004760',
        '5PR' => 'E02004760',
        '5PS' => 'E02004760',
        '5PT' => 'E02004760',
        '5PU' => 'E02004760',
        '5PW' => 'E02004760',
        '5PX' => 'E02004760',
        '5PY' => 'E02004760',
        '5QA' => 'E02004760',
        '5QB' => 'E02004760',
        '5QD' => 'E02004760',
        '5QE' => 'E02004760',
        '5QF' => 'E02004760',
        '5QG' => 'E02004760',
        '5QH' => 'E02004760',
        '5QJ' => 'E02004760',
        '5QL' => 'E02004760',
        '5QP' => 'E02004760',
        '5QQ' => 'E02004760',
        '5QR' => 'E02004760',
        '5QS' => 'E02004760',
        '5QT' => 'E02004760',
        '5QU' => 'E02004760',
        '5QW' => 'E02004760',
        '5QX' => 'E02004760',
        '5QY' => 'E02004760',
        '5QZ' => 'E02004760',
        '5RA' => 'E02004760',
        '5RB' => 'E02004760',
        '5RD' => 'E02004760',
        '5RE' => 'E02004760',
        '5RF' => 'E02004760',
        '5RG' => 'E02004760',
        '5RH' => 'E02004760',
        '5RJ' => 'E02004760',
        '5RL' => 'E02004760',
        '5RN' => 'E02004760',
        '5RP' => 'E02004760',
        '5RQ' => 'E02004760',
        '5RR' => 'E02004760',
        '5RS' => 'E02004760',
        '5RT' => 'E02004758',
        '5RU' => 'E02004760',
        '5RW' => 'E02004760',
        '5RX' => 'E02004760',
        '5RY' => 'E02004760',
        '5RZ' => 'E02004760',
        '5SA' => 'E02004760',
        '5TA' => 'E02006441',
        '5TB' => 'E02004760',
        '5TD' => 'E02006441',
        '5TE' => 'E02004760',
        '5TF' => 'E02004760',
        '5TG' => 'E02004760',
        '5TH' => 'E02004760',
        '5TJ' => 'E02004760',
        '5TL' => 'E02004760',
        '5TN' => 'E02004760',
        '5TP' => 'E02004760',
        '5TQ' => 'E02004760',
        '5TW' => 'E02004760',
        '5WA' => 'E02004760',
        '5WB' => 'E02004760',
        '5WD' => 'E02006441',
        '5WE' => 'E02006441',
        '5WX' => 'E02006441',
        '5WY' => 'E02006441',
        '5WZ' => 'E02006441',
        '5XJ' => 'E02006441',
        '5XN' => 'E02006441',
        '5XP' => 'E02004760',
        '5XR' => 'E02006441',
        '5XS' => 'E02006441',
        '5XT' => 'E02006441',
        '5XU' => 'E02006441',
        '5XW' => 'E02004760',
        '5XX' => 'E02004760',
        '5XY' => 'E02006441',
        '5XZ' => 'E02006441',
        '5YA' => 'E02004760',
        '5YB' => 'E02006441',
        '5YD' => 'E02004760',
        '5YE' => 'E02006441',
        '5YF' => 'E02004760',
        '5YG' => 'E02004760',
        '5YH' => 'E02006441',
        '5YJ' => 'E02004760',
        '5YL' => 'E02006441',
        '5YN' => 'E02004760',
        '5YP' => 'E02006441',
        '5YQ' => 'E02004760',
        '5YR' => 'E02006441',
        '5YS' => 'E02006441',
        '5YT' => 'E02004760',
        '5YU' => 'E02006441',
        '5YW' => 'E02004760',
        '5YX' => 'E02004760',
        '5ZJ' => 'E02006441',
        '5ZQ' => 'E02006441',
        '5ZT' => 'E02006441',
        '5ZX' => 'E02006441',
        '5ZY' => 'E02006441',
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
