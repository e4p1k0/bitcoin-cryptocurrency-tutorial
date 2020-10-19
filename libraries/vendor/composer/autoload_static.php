<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71c689a9972c0c641f5573ef10d7c2df
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a626201e4406003b96eee958a069f504' => __DIR__ . '/..' . '/bitwasp/bech32/src/bech32.php',
        '7cfce27594bbc1dd0dbf7e3eb5cd4911' => __DIR__ . '/..' . '/bitwasp/bitcoin/src/Script/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lastguest\\' => 10,
        ),
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'W' => 
        array (
            'Web3p\\RLP\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'M' => 
        array (
            'Mdanter\\Ecc\\' => 12,
        ),
        'H' => 
        array (
            'HttpClient\\' => 11,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'E' => 
        array (
            'EthereumRPC\\' => 12,
            'ERC20\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
        'B' => 
        array (
            'BitWasp\\Buffertools\\' => 20,
            'BitWasp\\Bitcoin\\' => 16,
            'BitWasp\\Bech32\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lastguest\\' => 
        array (
            0 => __DIR__ . '/..' . '/lastguest/murmurhash/src/lastguest',
        ),
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/ethereum-offline-raw-tx/src',
            1 => __DIR__ . '/..' . '/kornrunner/keccak/src',
            2 => __DIR__ . '/..' . '/kornrunner/secp256k1/src',
        ),
        'Web3p\\RLP\\' => 
        array (
            0 => __DIR__ . '/..' . '/web3p/rlp/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Mdanter\\Ecc\\' => 
        array (
            0 => __DIR__ . '/..' . '/mdanter/ecc/src',
        ),
        'HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/http-client/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'EthereumRPC\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/ethereum-rpc/src',
        ),
        'ERC20\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/erc20-php/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'BitWasp\\Buffertools\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitwasp/buffertools/src/Buffertools',
        ),
        'BitWasp\\Bitcoin\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitwasp/bitcoin/src',
        ),
        'BitWasp\\Bech32\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitwasp/bech32/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pleo' => 
            array (
                0 => __DIR__ . '/..' . '/pleonasm/merkle-tree/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71c689a9972c0c641f5573ef10d7c2df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71c689a9972c0c641f5573ef10d7c2df::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit71c689a9972c0c641f5573ef10d7c2df::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
