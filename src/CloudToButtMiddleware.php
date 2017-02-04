<?php

namespace ColinODell\CloudToButt;

use function GuzzleHttp\Psr7\stream_for;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CloudToButtMiddleware
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        /** @var ResponseInterface $response */
        $response = $next($request);
        $body = $response->getBody();

        if ($body->isSeekable()) {
            $body->rewind();
        }

        if (!$body->isSeekable() || $body->tell() !== 0) {
            $content = $this->changeCloudToButt($body);

            return $response->withBody(stream_for($content));
        }

        $newBody = stream_for(null);

        while (!$body->eof()) {
            $content = $body->read(4096);
            while (!$body->eof() && substr($content, -1) !== ' ') {
                $content .= $body->read(1);
            }

            $newBody->write($this->changeCloudToButt($content));
        }

        return $response->withBody($newBody);
    }

    private function changeCloudToButt($originalContent)
    {
        return strtr((string) $originalContent, ['Cloud' => 'Butt', 'cloud' => 'butt']);
    }
}
