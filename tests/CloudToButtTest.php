<?php

namespace ColinODell\CloudToButt\Tests;

use ColinODell\CloudToButt\CloudToButtMiddleware;
use GuzzleHttp\Psr7\NoSeekStream;
use GuzzleHttp\Psr7\Response;
use function GuzzleHttp\Psr7\stream_for;
use Psr\Http\Message\ServerRequestInterface;

class CloudToButtTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicStream()
    {
        $request = $this->createMock(ServerRequestInterface::class);

        $stream = stream_for('Amazon offers cloud hosting for all.');
        $response = (new Response())->withBody($stream);

        $middleware = new CloudToButtMiddleware();
        $response = $middleware->__invoke($request, $response, function () use ($response) {
            return $response;
        });

        $this->assertEquals('Amazon offers butt hosting for all.', $response->getBody()->__toString());
    }

    public function testNonSeekableStream()
    {
        $request = $this->createMock(ServerRequestInterface::class);

        $stream = new NoSeekStream(stream_for('There\'s not a single cloud outside!'));
        $response = (new Response())->withBody($stream);

        $middleware = new CloudToButtMiddleware();
        $response = $middleware->__invoke($request, $response, function () use ($response) {
            return $response;
        });

        $this->assertEquals('There\'s not a single butt outside!', $response->getBody()->__toString());
    }
}
