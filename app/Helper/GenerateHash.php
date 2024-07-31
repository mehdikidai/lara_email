<?php

namespace App\Helper;

trait GenerateHash
{

    private $key = 'mehdi';

    private $iv = '1234567890123456';

    public function encrypt($data): string
    {

        return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $this->key, 0, $this->iv));
    }

    public function decrypt($hash): string
    {

        return openssl_decrypt(base64_decode($hash), 'AES-256-CBC', $this->key, 0, $this->iv);

    }

    public function check(string $hash, string $txt): bool
    {

        return $this->encrypt($txt) === $hash;
        
    }
}
