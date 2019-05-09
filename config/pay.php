<?php

return [
    'alipay' => [
        'app_id'         => '2016100100636064',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArJakQx7rTfE7ZjjhYWAc3jmu3Xflv4GJH6NOofPgear8VvIqgGp47bJxb2m2gGSsKvwSA5XmFWLzrGn0nJKXUOSIG89ohiVLwuUU2nT0X0DWST6ieRFVsFejQrw+cCz4cw/YMgFa2nK1GJAv4vM/AkCDd8+ptzfeIbKQMQkJquuDJuTMDfeSKKuEQhoz+PXo38bwSbaTHvE/vhsIC6yin6W+bBLf5Gig1f7z9kRTbM5cZxzsvwymQg946RbEW1tFmt5mOeThqpXmFNmmuoIbS+Sew3Q4ly2YVHOuvbGHqgLYxOiaHhq1wlNujISwqx4eHDEAnM+ygAJT1VM6NMprHQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAupwUDGQgp5U2ISP9CaCgEOhDbPMgj7E7jLuULKFw+weG0fqmbxfGTs7pBlXPj22sVliIFmzeF/JCZkESyWaMfN9eZCwLJk8LzHNN4qVsZwW/bZjd/yP6RfjXoWoy8jep0nfLK1JjXPBYkzJYy9bYVmkFg6qhs4Koz1VtW5ZWcD5u9n8QCxwKFumJSR40ANrulWC7hmzINvlLx+RMaNnMqSKasXD8St+5JGlwoEaoY+xgfDBENQ3rGTlFq7ubFiKecyYbjOO5wEZKItkCws2oVYCYziFX6/aF7VfXsztZYjOOVvvCuzqWVIlZZooMJIj4kQ7XZ50Tr0MO77QAhWrWGwIDAQABAoIBADrLAeYFheRGto8qb4ag/M1W4CdrUk7zX/evAbguBRKSBIAToGxP6ULbHb/JOWPPAgUST44BLtgMk67zwZ+Cl7CgD3UwCzM+pFD94wQNamHrBazaBNdl1mxFQmqwsuxtbSvKYlB73KJjdwSpUCCox/AxlnMtR1TvTZBFMfcxHnquJn/PwYB/RexH1k0GYoptBey1U+bwrLkYHrI+OA51LDDeaYbCdgox86HeQyNlqx+06T2D8RwVNbZ0N8iDQsBp4OIZqzNvLdHvedT1kjnuAuhgmLAZ6iVActLs4Qs5GP6tJnsOwsKMzObbh1MZfnbj5K2QK+VmJc68tDzSnfqAEMECgYEA8nlUxT8UyLrNG2vkT4HQVJCrWaF2k3cVGEEzeQSj/wdlup3e68/SBw/MwbpWz0Bg+GmtaIK+UIqlRRCf3YLoiUwGyGJqmchnjgQxWnmnoAgkhQHFFGpg/khZNRvUb9aDjHPTv2yfWC6LuU1iFOd/OXvPdVDBiLTwazIkUyDSmaUCgYEAxQT5FFctXMpVuhQEoob7UpUux2iGeg8UziDdVPhUa0NhGSTHkMUlVDPucyrchnMw1m/IAhTS53rqUPzE6XgXc1SeBPGcH0KXRiHWFjC+6vaHNc+Aib2PR7oGnrjNHwKJKVxlb7OVZccQZOao/OMlYAteNkdu/kVgMPaCJzrDJL8CgYEAxUyjBMkakWcm5Gw7X9KigV0igJFYmg+o046iYpO7Ghab2WkCbmExZlud4flND+Ezxo6+8q6IS6M1behkHOubabS6RC2Izk96q92Phy48joRxquTQx5b0C5U1OXjGuKYVbqEFKNsrIabmPMbRy26/YDf1jGFEyYdppeAsHJQ1qZ0CgYEAwJpv9ZaT3hZfYB2ZullC8CSvKnngnQqJSEmQljR+Mq4YCkCOZ9SS/ZIXFbddBoMtxzRXztEUrP7Yenvg9GxWYITkRej8uwKaaBFD/UWCHqkK3WwROJZ7r58IQbpfrGUKOcj90Qk6j9jfCgUERtS4AQCcBWwn8aNYugUCj98+TnkCgYEAngauE5ovpUZDQRUeVA3D0vQ3wqh26Vl1tJe2KaeeNOBOZTTPO0aPbsw9+v/uE4+OCdQJRyi5Gim1sZqOis21xmfncmCVOwxQy6vvi/3JzREW6OZsfbguIBifTkh78cuqWKnkpNN4aZ/4L7fJgbVNb0fClZQhQ5zLLRjymhaDm44=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
