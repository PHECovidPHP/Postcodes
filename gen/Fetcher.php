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

namespace PHECovid\Gen\Postcodes;

use GrahamCampbell\GuzzleFactory\GuzzleFactory;
use GuzzleHttp\ClientInterface;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Fetcher
{
    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $client;

    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public static function create(): self
    {
        return new self(GuzzleFactory::make());
    }

    public function fetch(): array
    {
        $map = [];

        foreach ($this->fetchRaw() as $postcode => $msoa) {
            $map[\rtrim(\substr($postcode, 0, -3))][\substr($postcode, -3)] = $msoa;
        }

        return $map;
    }

    private function fetchRaw(): \Generator
    {
        // https://geoportal.statistics.gov.uk/datasets/postcode-to-output-area-to-lower-layer-super-output-area-to-middle-layer-super-output-area-to-local-authority-district-november-2020-lookup-in-the-uk
        \file_put_contents('/tmp/postcodes.zip', (string) $this->client->request('GET', 'https://www.arcgis.com/sharing/rest/content/items/8a824519215947da99146692b0a0ff49/data')->getBody());

        $handle = \fopen('zip:///tmp/postcodes.zip#PCD_OA_LSOA_MSOA_LAD_NOV20_UK_LU.csv', 'r');

        while (false !== ($line = \fgets($handle))) {
            $parsed = \str_getcsv($line);
            if (isset($parsed[8][0]) && 'E' === $parsed[8][0]) {
                yield \str_replace(' ', '', $parsed[2]) => $parsed[8];
            }
        }

        \fclose($handle);
    }
}
