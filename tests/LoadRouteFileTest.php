<?php
/**
 * @author            Jakub Dubec <jakub.dubec@gmail.com>
 */


namespace phpGPX\Tests;

use phpGPX\phpGPX;
use PHPUnit\Framework\TestCase;

class LoadRouteFileTest extends TestCase
{
    public function testRouteFile()
    {
        $file = __DIR__ . '/fixtures/route.gpx';

        $gpx = new phpGpx();
        $gpxFile = $gpx->load($file);

        $this->assertEquals($this->createExpectedArray(), $gpxFile->toArray(), "", 0.1);

        // Check XML generation
        $gpxFile->toXML()->saveXML();
    }

    public function testRouteFileWithSmoothedStats()
    {
        $file = __DIR__ . '/fixtures/gps-track.gpx';

        $gpx = new phpGpx();
        $gpx::$APPLY_ELEVATION_SMOOTHING = true;
        $gpx::$APPLY_DISTANCE_SMOOTHING = true;
        $gpxFile = $gpx->load($file);

        $this->assertEquals(6, $gpxFile->tracks[0]->stats->cumulativeElevationGain);


        // this should give a higher number for the elevation
        $gpx::$APPLY_ELEVATION_SMOOTHING = false;
        $gpx::$APPLY_DISTANCE_SMOOTHING = false;
        $gpxFile = $gpx->load($file);

        $this->assertEquals(6.12, number_format($gpxFile->tracks[0]->stats->cumulativeElevationGain, 2));
    }

    private function createExpectedArray()
    {
        return [
            'creator' => 'RouteConverter',
            'metadata' => [
                'name' => 'Test file by Patrick',
                'desc' => null,
                'author' => null,
                'copyright' => null,
                'links' => null,
                'time' => null,
                'keywords' => null,
                'bounds' => null,
                'extensions' => null,
            ],
            'routes' => [
                [
                    'name' => "Patrick's Route",
                    'cmt' => null,
                    'desc' => null,
                    'src' => null,
                    'link' => [],
                    'number' => null,
                    'type' => null,
                    'extensions' => null,
                    'rtep' => [
                        [
                            'lat' => 54.9328621088893,
                            'lon' => 9.860624216140083,
                            'ele' => 0.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 1',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 0.0,
                            'distance' => 0.0,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93293237320851,
                            'lon' => 9.86092208681491,
                            'ele' => 1.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 2',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 20.57107116626639,
                            'distance' => 20.57107116626639,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93327743521187,
                            'lon' => 9.86187816543752,
                            'ele' => 2.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 3',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 72.1308280496404,
                            'distance' => 92.70189921590679,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93342326167919,
                            'lon' => 9.862439849679859,
                            'ele' => 3.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 4',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 39.37668614018047,
                            'distance' => 132.07858535608727,
                            'extensions' => null,
                        ],
                    ],
                    'stats' => [
                        'distance' => 132.0785853,
                        'avgSpeed' => 0.0,
                        'avgPace' => 0.0,
                        'minAltitude' => 0.0,
                        'maxAltitude' => 3.0,
                        'cumulativeElevationGain' => 3.0,
                        'cumulativeElevationLoss' => 0.0,
                        'startedAt' => null,
                        'finishedAt' => null,
                        'duration' => 0.0,
                    ],
                ],
                [
                    'name' => "Sibyx's Route",
                    'cmt' => null,
                    'desc' => null,
                    'src' => null,
                    'link' => [],
                    'number' => null,
                    'type' => null,
                    'extensions' => null,
                    'rtep' => [
                        [
                            'lat' => 54.9328621088893,
                            'lon' => 9.860624216140083,
                            'ele' => 0.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 4',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 0.0,
                            'distance' => 0.0,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93293237320851,
                            'lon' => 9.86092208681491,
                            'ele' => 1.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 3',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 20.57107116626639,
                            'distance' => 20.57107116626639,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93327743521187,
                            'lon' => 9.86187816543752,
                            'ele' => 2.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 2',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 72.1308280496404,
                            'distance' => 92.70189921590679,
                            'extensions' => null,
                        ],
                        [
                            'lat' => 54.93342326167919,
                            'lon' => 9.862439849679859,
                            'ele' => 3.0,
                            'time' => null,
                            'magvar' => null,
                            'geoidheight' => null,
                            'name' => 'Position 1',
                            'cmt' => null,
                            'desc' => null,
                            'src' => null,
                            'link' => [],
                            'sym' => null,
                            'type' => null,
                            'fix' => null,
                            'sat' => null,
                            'hdop' => null,
                            'vdop' => null,
                            'pdop' => null,
                            'ageofdgpsdata' => null,
                            'dgpsid' => null,
                            'difference' => 39.37668614018047,
                            'distance' => 132.07858535608727,
                            'extensions' => null,
                        ],
                    ],
                    'stats' => [
                        'distance' => 132.0785853,
                        'avgSpeed' => 0.0,
                        'avgPace' => 0.0,
                        'minAltitude' => 0.0,
                        'maxAltitude' => 3.0,
                        'cumulativeElevationGain' => 3.0,
                        'cumulativeElevationLoss' => 0.0,
                        'startedAt' => null,
                        'finishedAt' => null,
                        'duration' => 0.0,
                    ],
                ],
            ],
            'waypoints' => [],
            'tracks' => [],
            'extensions' => null,
        ];
    }
}
