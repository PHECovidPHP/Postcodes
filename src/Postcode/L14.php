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
final class L14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001371',
        '0AB' => 'E02001371',
        '0AD' => 'E02001371',
        '0AE' => 'E02001371',
        '0AF' => 'E02001371',
        '0AG' => 'E02001371',
        '0BA' => 'E02001371',
        '0EJ' => 'E02001371',
        '0HZ' => 'E02001371',
        '0JA' => 'E02001340',
        '0JB' => 'E02001340',
        '0JD' => 'E02001371',
        '0JE' => 'E02001371',
        '0JF' => 'E02001371',
        '0JG' => 'E02001340',
        '0JH' => 'E02001340',
        '0JJ' => 'E02001371',
        '0JL' => 'E02001340',
        '0JN' => 'E02001371',
        '0JP' => 'E02001371',
        '0JQ' => 'E02001340',
        '0JR' => 'E02001371',
        '0JS' => 'E02001371',
        '0JT' => 'E02001371',
        '0JU' => 'E02001340',
        '0JW' => 'E02001371',
        '0JX' => 'E02001340',
        '0JY' => 'E02001340',
        '0JZ' => 'E02001340',
        '0LA' => 'E02001340',
        '0LB' => 'E02001372',
        '0LD' => 'E02001371',
        '0LE' => 'E02001371',
        '0LF' => 'E02001371',
        '0LG' => 'E02001371',
        '0LH' => 'E02001371',
        '0LJ' => 'E02001371',
        '0LL' => 'E02001371',
        '0LN' => 'E02001371',
        '0LP' => 'E02001371',
        '0LQ' => 'E02001371',
        '0LR' => 'E02001371',
        '0LS' => 'E02001371',
        '0LT' => 'E02001371',
        '0LU' => 'E02001371',
        '0LW' => 'E02001371',
        '0LX' => 'E02001338',
        '0LY' => 'E02001371',
        '0LZ' => 'E02001371',
        '0NA' => 'E02001371',
        '0NB' => 'E02001371',
        '0ND' => 'E02001371',
        '0NE' => 'E02001371',
        '0NF' => 'E02001371',
        '0NG' => 'E02001371',
        '0NH' => 'E02001371',
        '0NJ' => 'E02001371',
        '0NL' => 'E02001372',
        '0NN' => 'E02001371',
        '0NP' => 'E02001371',
        '0NQ' => 'E02001371',
        '0NR' => 'E02001371',
        '0NS' => 'E02001371',
        '0NT' => 'E02001371',
        '0NU' => 'E02001371',
        '0NW' => 'E02001371',
        '0NX' => 'E02001371',
        '0NY' => 'E02001371',
        '0NZ' => 'E02001371',
        '0PA' => 'E02001371',
        '0PB' => 'E02001371',
        '0PD' => 'E02001371',
        '0PE' => 'E02001371',
        '0PF' => 'E02001371',
        '0PG' => 'E02001371',
        '0PH' => 'E02001371',
        '0PJ' => 'E02001371',
        '0PL' => 'E02001371',
        '0PN' => 'E02001340',
        '0PP' => 'E02001371',
        '0PQ' => 'E02001338',
        '0PR' => 'E02001371',
        '0PS' => 'E02001371',
        '0PT' => 'E02001371',
        '0PW' => 'E02001371',
        '0PX' => 'E02001367',
        '0PY' => 'E02001371',
        '0PZ' => 'E02001371',
        '0WW' => 'E02001367',
        '0WX' => 'E02001367',
        '0WY' => 'E02001367',
        '0WZ' => 'E02001367',
        '0YW' => 'E02001367',
        '0YX' => 'E02001367',
        '1PA' => 'E02001375',
        '1PB' => 'E02001375',
        '1PD' => 'E02001375',
        '1PE' => 'E02001375',
        '1PF' => 'E02001375',
        '1PG' => 'E02001375',
        '1PH' => 'E02001375',
        '1PJ' => 'E02001375',
        '1PL' => 'E02001375',
        '1PN' => 'E02001375',
        '1PP' => 'E02001375',
        '1PQ' => 'E02001375',
        '1PR' => 'E02001375',
        '1PS' => 'E02001375',
        '1PT' => 'E02001375',
        '1PU' => 'E02001375',
        '1PW' => 'E02001375',
        '1PX' => 'E02001375',
        '1PY' => 'E02001375',
        '1PZ' => 'E02001372',
        '1QA' => 'E02001375',
        '1QB' => 'E02001372',
        '1QD' => 'E02001375',
        '1QE' => 'E02001375',
        '1QF' => 'E02001375',
        '1QG' => 'E02001375',
        '1QH' => 'E02001372',
        '1QJ' => 'E02001375',
        '1QL' => 'E02001375',
        '1QN' => 'E02001375',
        '1QP' => 'E02001375',
        '1QQ' => 'E02001375',
        '1QR' => 'E02001375',
        '1QS' => 'E02001375',
        '1QT' => 'E02001375',
        '1QU' => 'E02001367',
        '1QW' => 'E02001375',
        '1QX' => 'E02001367',
        '1WA' => 'E02001367',
        '1WZ' => 'E02001367',
        '1XA' => 'E02001367',
        '2BA' => 'E02001372',
        '2DA' => 'E02001372',
        '2DB' => 'E02001372',
        '2DD' => 'E02001372',
        '2DE' => 'E02001372',
        '2DF' => 'E02001371',
        '2DG' => 'E02001372',
        '2DH' => 'E02001371',
        '2DJ' => 'E02001371',
        '2DL' => 'E02001371',
        '2DN' => 'E02001371',
        '2DP' => 'E02001371',
        '2DQ' => 'E02001372',
        '2DR' => 'E02001363',
        '2DS' => 'E02001371',
        '2DT' => 'E02001371',
        '2DU' => 'E02001371',
        '2DW' => 'E02001371',
        '2DX' => 'E02001371',
        '2DY' => 'E02001371',
        '2DZ' => 'E02001371',
        '2EA' => 'E02001371',
        '2EB' => 'E02001371',
        '2ED' => 'E02001371',
        '2EE' => 'E02001371',
        '2EF' => 'E02001371',
        '2EG' => 'E02001371',
        '2EH' => 'E02001372',
        '2EJ' => 'E02001371',
        '2EL' => 'E02001371',
        '2EN' => 'E02001371',
        '2EP' => 'E02001372',
        '2EQ' => 'E02001372',
        '2ER' => 'E02001372',
        '2ES' => 'E02001371',
        '2ET' => 'E02001371',
        '2EU' => 'E02001371',
        '2EW' => 'E02001372',
        '2EY' => 'E02001372',
        '2HA' => 'E02001371',
        '2HB' => 'E02001371',
        '2WA' => 'E02001367',
        '2YW' => 'E02001367',
        '2YX' => 'E02001367',
        '3AB' => 'E02001380',
        '3AD' => 'E02001380',
        '3LA' => 'E02001380',
        '3LB' => 'E02001372',
        '3LD' => 'E02001372',
        '3LE' => 'E02001380',
        '3LF' => 'E02001372',
        '3LG' => 'E02001380',
        '3LH' => 'E02001380',
        '3LJ' => 'E02001380',
        '3LL' => 'E02001372',
        '3LN' => 'E02001380',
        '3LP' => 'E02001380',
        '3LQ' => 'E02001380',
        '3LR' => 'E02001380',
        '3LS' => 'E02001380',
        '3LT' => 'E02001380',
        '3LU' => 'E02001380',
        '3LW' => 'E02001380',
        '3LX' => 'E02001380',
        '3LY' => 'E02001380',
        '3LZ' => 'E02001380',
        '3NA' => 'E02001380',
        '3NB' => 'E02001380',
        '3ND' => 'E02001380',
        '3NE' => 'E02001380',
        '3NF' => 'E02001380',
        '3NG' => 'E02001380',
        '3NL' => 'E02001380',
        '3NN' => 'E02001380',
        '3NP' => 'E02001382',
        '3NQ' => 'E02001380',
        '3NR' => 'E02001382',
        '3NU' => 'E02001340',
        '3NW' => 'E02001380',
        '3NX' => 'E02001382',
        '3NY' => 'E02001372',
        '3NZ' => 'E02001380',
        '3PA' => 'E02001380',
        '3PE' => 'E02001372',
        '3PJ' => 'E02001372',
        '3PL' => 'E02001380',
        '3PN' => 'E02001367',
        '3PW' => 'E02001380',
        '3WX' => 'E02001367',
        '3WY' => 'E02001367',
        '3WZ' => 'E02001367',
        '4AD' => 'E02001363',
        '4AE' => 'E02001363',
        '4AF' => 'E02001363',
        '4AG' => 'E02001363',
        '4AH' => 'E02001363',
        '4AJ' => 'E02001363',
        '4AL' => 'E02001363',
        '4AN' => 'E02001363',
        '4AP' => 'E02001363',
        '4AQ' => 'E02001363',
        '4AR' => 'E02001363',
        '4AS' => 'E02001363',
        '4AT' => 'E02001363',
        '4AU' => 'E02001363',
        '4AW' => 'E02001363',
        '4AX' => 'E02001363',
        '4AY' => 'E02001363',
        '4AZ' => 'E02001363',
        '4BA' => 'E02001363',
        '4BB' => 'E02001363',
        '4BD' => 'E02001371',
        '4BE' => 'E02001372',
        '4BG' => 'E02001363',
        '4BH' => 'E02001363',
        '4BJ' => 'E02001363',
        '4BL' => 'E02001372',
        '4BN' => 'E02001363',
        '4BP' => 'E02001363',
        '4BQ' => 'E02001363',
        '4BR' => 'E02001363',
        '4BS' => 'E02001363',
        '4BT' => 'E02001363',
        '4BU' => 'E02001372',
        '4BW' => 'E02001363',
        '4BX' => 'E02001372',
        '4BY' => 'E02001372',
        '4BZ' => 'E02001372',
        '4DA' => 'E02001372',
        '4DB' => 'E02001372',
        '4DD' => 'E02001372',
        '4DE' => 'E02001372',
        '4DF' => 'E02001363',
        '4DG' => 'E02001363',
        '4DH' => 'E02001372',
        '4DL' => 'E02001363',
        '4DP' => 'E02001363',
        '4DQ' => 'E02001363',
        '4DR' => 'E02001367',
        '4ED' => 'E02001363',
        '4EE' => 'E02001363',
        '4WY' => 'E02001367',
        '4WZ' => 'E02001363',
        '5AB' => 'E02001375',
        '5NA' => 'E02001372',
        '5NB' => 'E02001371',
        '5ND' => 'E02001372',
        '5NE' => 'E02001371',
        '5NF' => 'E02001371',
        '5NG' => 'E02001372',
        '5NH' => 'E02001371',
        '5NJ' => 'E02001372',
        '5NL' => 'E02001372',
        '5NN' => 'E02001372',
        '5NP' => 'E02001372',
        '5NQ' => 'E02001371',
        '5NR' => 'E02001372',
        '5NS' => 'E02001372',
        '5NT' => 'E02001372',
        '5NU' => 'E02001380',
        '5NW' => 'E02001372',
        '5NX' => 'E02001372',
        '5NY' => 'E02001372',
        '5NZ' => 'E02001380',
        '5PA' => 'E02001380',
        '5PB' => 'E02001372',
        '5PD' => 'E02001340',
        '5PE' => 'E02001340',
        '5PF' => 'E02001340',
        '5PG' => 'E02001372',
        '5PH' => 'E02001372',
        '5PJ' => 'E02001372',
        '5PL' => 'E02001372',
        '5PN' => 'E02001372',
        '5PP' => 'E02001372',
        '5PQ' => 'E02001372',
        '5PR' => 'E02001372',
        '5PS' => 'E02001372',
        '5PT' => 'E02001372',
        '5PU' => 'E02001372',
        '5PW' => 'E02001373',
        '5PX' => 'E02001372',
        '5WZ' => 'E02001367',
        '6TA' => 'E02001340',
        '6TB' => 'E02001340',
        '6TD' => 'E02001340',
        '6TE' => 'E02001340',
        '6TF' => 'E02001340',
        '6TG' => 'E02001340',
        '6TH' => 'E02001340',
        '6TJ' => 'E02001340',
        '6TL' => 'E02001340',
        '6TN' => 'E02001340',
        '6TP' => 'E02001340',
        '6TQ' => 'E02001340',
        '6TR' => 'E02001340',
        '6TS' => 'E02001340',
        '6TT' => 'E02001340',
        '6TU' => 'E02001340',
        '6TW' => 'E02001340',
        '6TX' => 'E02001340',
        '6TY' => 'E02001340',
        '6TZ' => 'E02001340',
        '6UA' => 'E02001340',
        '6UB' => 'E02001340',
        '6UD' => 'E02001340',
        '6UE' => 'E02001340',
        '6UF' => 'E02001340',
        '6UG' => 'E02001340',
        '6UH' => 'E02001340',
        '6UJ' => 'E02001340',
        '6UL' => 'E02001340',
        '6UN' => 'E02001340',
        '6UP' => 'E02001340',
        '6UQ' => 'E02001340',
        '6UR' => 'E02001340',
        '6US' => 'E02001340',
        '6UT' => 'E02001340',
        '6UU' => 'E02001340',
        '6UW' => 'E02001340',
        '6UX' => 'E02001340',
        '6UY' => 'E02001340',
        '6UZ' => 'E02001340',
        '6WA' => 'E02001340',
        '6WB' => 'E02001367',
        '6WY' => 'E02001367',
        '6WZ' => 'E02001367',
        '6XA' => 'E02001340',
        '6XB' => 'E02001340',
        '6XR' => 'E02001340',
        '6XS' => 'E02001340',
        '6XT' => 'E02001367',
        '6XU' => 'E02001340',
        '6YX' => 'E02001367',
        '7AA' => 'E02001340',
        '7AB' => 'E02001340',
        '7AD' => 'E02001340',
        '7AE' => 'E02001340',
        '7AF' => 'E02001340',
        '7AG' => 'E02001340',
        '7AH' => 'E02001340',
        '7AJ' => 'E02001340',
        '7AL' => 'E02001340',
        '7AN' => 'E02001340',
        '7AP' => 'E02001340',
        '7AQ' => 'E02001340',
        '7AR' => 'E02001340',
        '7AS' => 'E02001340',
        '7AT' => 'E02001340',
        '7AU' => 'E02001340',
        '7AW' => 'E02001340',
        '7AX' => 'E02001340',
        '7AY' => 'E02001340',
        '7AZ' => 'E02001340',
        '7BA' => 'E02001340',
        '7BB' => 'E02001340',
        '7BD' => 'E02001340',
        '7BF' => 'E02001340',
        '7BG' => 'E02001367',
        '7GA' => 'E02001372',
        '7LN' => 'E02001372',
        '7NA' => 'E02001372',
        '7NB' => 'E02001372',
        '7ND' => 'E02001372',
        '7NE' => 'E02001372',
        '7NF' => 'E02001372',
        '7NG' => 'E02001372',
        '7NH' => 'E02001372',
        '7NJ' => 'E02001340',
        '7NL' => 'E02001340',
        '7NN' => 'E02001340',
        '7NP' => 'E02001340',
        '7NQ' => 'E02001372',
        '7NR' => 'E02001340',
        '7NS' => 'E02001340',
        '7NT' => 'E02001340',
        '7NU' => 'E02001340',
        '7NW' => 'E02001340',
        '7NX' => 'E02001372',
        '7NY' => 'E02001340',
        '7NZ' => 'E02001340',
        '7PA' => 'E02001340',
        '7PB' => 'E02001340',
        '7PD' => 'E02001340',
        '7PE' => 'E02001372',
        '7PF' => 'E02001372',
        '7PG' => 'E02001372',
        '7PH' => 'E02001372',
        '7PJ' => 'E02001372',
        '7PL' => 'E02001372',
        '7PN' => 'E02001372',
        '7PP' => 'E02001372',
        '7PQ' => 'E02001372',
        '7PR' => 'E02001372',
        '7PS' => 'E02001372',
        '7PT' => 'E02001340',
        '7PU' => 'E02001340',
        '7PW' => 'E02001372',
        '7PX' => 'E02001340',
        '7PY' => 'E02001340',
        '7PZ' => 'E02001340',
        '7QA' => 'E02001372',
        '7QB' => 'E02001372',
        '7QD' => 'E02001340',
        '7QE' => 'E02001340',
        '7QF' => 'E02001340',
        '7QG' => 'E02001340',
        '7QH' => 'E02001340',
        '7QJ' => 'E02001372',
        '7QL' => 'E02001372',
        '7QN' => 'E02001372',
        '7QP' => 'E02001340',
        '7QQ' => 'E02001340',
        '7QR' => 'E02001340',
        '7QS' => 'E02001372',
        '7QW' => 'E02001340',
        '7WA' => 'E02001367',
        '7WZ' => 'E02001367',
        '7YU' => 'E02001367',
        '7YW' => 'E02001367',
        '7YX' => 'E02001367',
        '8AA' => 'E02001334',
        '8AE' => 'E02001334',
        '8UA' => 'E02001334',
        '8UB' => 'E02001334',
        '8UD' => 'E02001334',
        '8UE' => 'E02001334',
        '8UF' => 'E02001334',
        '8UG' => 'E02001334',
        '8UH' => 'E02001334',
        '8UJ' => 'E02001334',
        '8UL' => 'E02001334',
        '8UN' => 'E02001334',
        '8UP' => 'E02001334',
        '8UQ' => 'E02001334',
        '8UR' => 'E02001334',
        '8US' => 'E02001334',
        '8UT' => 'E02001334',
        '8UU' => 'E02001334',
        '8UW' => 'E02001334',
        '8UX' => 'E02001334',
        '8UY' => 'E02001334',
        '8UZ' => 'E02001334',
        '8WA' => 'E02001334',
        '8WY' => 'E02001363',
        '8WZ' => 'E02001334',
        '8XA' => 'E02001334',
        '8XB' => 'E02001363',
        '8XD' => 'E02001363',
        '8XE' => 'E02001363',
        '8XF' => 'E02001363',
        '8XG' => 'E02001363',
        '8XH' => 'E02001363',
        '8XJ' => 'E02001363',
        '8XL' => 'E02001363',
        '8XN' => 'E02001363',
        '8XP' => 'E02001363',
        '8XQ' => 'E02001363',
        '8XR' => 'E02001363',
        '8XS' => 'E02001363',
        '8XT' => 'E02001363',
        '8XU' => 'E02001363',
        '8XW' => 'E02001363',
        '8XX' => 'E02001363',
        '8XY' => 'E02001363',
        '8XZ' => 'E02001363',
        '8YA' => 'E02001363',
        '8YB' => 'E02001363',
        '8YD' => 'E02001363',
        '8YE' => 'E02001363',
        '8YF' => 'E02001363',
        '8YG' => 'E02001363',
        '8YH' => 'E02001363',
        '8YJ' => 'E02001363',
        '8YL' => 'E02001363',
        '8YN' => 'E02001363',
        '8YP' => 'E02001363',
        '8YQ' => 'E02001363',
        '8YR' => 'E02001363',
        '8YS' => 'E02001363',
        '8YT' => 'E02001363',
        '8YU' => 'E02001363',
        '8YW' => 'E02001363',
        '9AA' => 'E02001334',
        '9AD' => 'E02001334',
        '9AE' => 'E02001334',
        '9AF' => 'E02001334',
        '9BA' => 'E02001371',
        '9LG' => 'E02001367',
        '9LH' => 'E02001371',
        '9LJ' => 'E02001371',
        '9LL' => 'E02001334',
        '9LN' => 'E02001371',
        '9LP' => 'E02001371',
        '9LQ' => 'E02001334',
        '9LR' => 'E02001371',
        '9LS' => 'E02001371',
        '9LT' => 'E02001371',
        '9LU' => 'E02001371',
        '9LW' => 'E02001371',
        '9LX' => 'E02001371',
        '9LY' => 'E02001371',
        '9LZ' => 'E02001371',
        '9NA' => 'E02001334',
        '9NB' => 'E02001334',
        '9ND' => 'E02001334',
        '9NE' => 'E02001363',
        '9NF' => 'E02001363',
        '9NG' => 'E02001334',
        '9NH' => 'E02001334',
        '9NJ' => 'E02001363',
        '9NL' => 'E02001334',
        '9NN' => 'E02001371',
        '9NP' => 'E02001334',
        '9NQ' => 'E02001334',
        '9NR' => 'E02001334',
        '9NS' => 'E02001334',
        '9NT' => 'E02001334',
        '9NU' => 'E02001334',
        '9NW' => 'E02001334',
        '9NX' => 'E02001334',
        '9NY' => 'E02001334',
        '9NZ' => 'E02001334',
        '9PA' => 'E02001334',
        '9PB' => 'E02001334',
        '9PD' => 'E02001334',
        '9PE' => 'E02001334',
        '9PF' => 'E02001334',
        '9PG' => 'E02001334',
        '9PH' => 'E02001371',
        '9PJ' => 'E02001371',
        '9PL' => 'E02001371',
        '9PN' => 'E02001334',
        '9PP' => 'E02001334',
        '9PQ' => 'E02001334',
        '9PR' => 'E02001334',
        '9PS' => 'E02001334',
        '9PT' => 'E02001334',
        '9PU' => 'E02001334',
        '9PW' => 'E02001371',
        '9PX' => 'E02001371',
        '9PY' => 'E02001371',
        '9PZ' => 'E02001363',
        '9QA' => 'E02001371',
        '9QB' => 'E02001371',
        '9QD' => 'E02001363',
        '9QE' => 'E02001334',
        '9QN' => 'E02001371',
        '9QP' => 'E02001371',
        '9QR' => 'E02001371',
        '9QS' => 'E02001371',
        '9QT' => 'E02001363',
        '9QU' => 'E02001363',
        '9QX' => 'E02001363',
        '9QY' => 'E02001363',
        '9QZ' => 'E02001363',
        '9WU' => 'E02001367',
        '9WW' => 'E02001367',
        '9WX' => 'E02001363',
        '9WY' => 'E02001367',
        '9WZ' => 'E02001367',
        '9YX' => 'E02001367',
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
