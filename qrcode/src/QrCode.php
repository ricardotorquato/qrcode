<?php
include('qr/qr.php');

class Qrcode 
{
    private $pathPrefix = './qr';

    /*
     * $content = content of the qr code 
     * $ecc = error correction code [ L(ow), M(iddle), Q(uallity), H(igh)]
     * $size = size min 10 max 1000
     * 
     * returns text content of an image
     */
    public function get($content, $ecc = 'M', $size = 10, $pathPrefix = null)
    {
        if ( $pathPrefix == null ) {
            $pathPrefix = $this->pathPrefix;
        }

        $config = [
            'd' => $content,
            'e' => $ecc,
            's' => $size
        ];

        return qrcode($config, $pathPrefix);
    }
}