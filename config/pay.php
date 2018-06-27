<?php

return [
    'alipay' => [
        'app_id'         => '2016091400507108',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvmIIRJOrc2/ZOmQ+ijP6pcK/GtSOCJhPB9JEQseUewLSFIA87/QNd6791vTuLh5QuO87JAipLlCNR/jTzqQ+GmPGLwzH1/Sudal9u6OujMYbhZblS8VXr8VCSsJoYcy3++H4J1Fj0eUmkTUqV5QcSdlMt9L/02LirlQe2J3wH+jYT0PTcgU3cUTep/qrN/o/vSmcFrJx9dg6B3R5TFiZqU/Z8QcGhPWPvIgmdjPXOfyc8hQl0ZiLW8HG2veP0IknkyPmF1pHTSFqjOHgI59EKahwxn/rs2wjsrb4H3tkcB2AOcwv7Zo7ZMjzrhWb+aQ+dx4WP2WNiS7F6tCdlfkIlQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEA476O+nB4FGbvBFLm81GfLOKwdjj1z2NXio4Kl0kOTAvvATNF1ivXEkyFKNivPsKvr4Zlj5Z3j/f//uuL6J9dDUwWXCtUIM2czE4qoV+8mNvbyhHNfg03sywDb1+fqfnZ7cReCfV5hkOtKlx9V35hNpcdnmUbt4Z78YlKEN2pniqiK1aZay/qEw1pflwFxNjss0093BsoXEqIVUqO9g356WtbKS3pKGsK3BCg02+E/yE+ItPlImZ9aywByFbWXyrU7IlpuBOlaLwsqVKpRXMuGmCA45HNFT1mxTkS166M3V8qphiZ48MwEkSi91NfAaiyAoNVElKcs6Nn/jckIV2nVQIDAQABAoIBAD3DFulKCPaXd6h3hxRjhURZ8bsN9XOZoEr9/FdMw6jR764mpoDPgNMAl3gdU2E00QpL600GZERR4EXUwSuD1GtfwAyc34LJ4AT0CdGbsfzOWwuwykat9PYNMJ1KlHU3QeeeQlZ3EM7dmZ+MV52bs2dnkeu7xcl+mixFrCVox7ARosGHlRQS9puDSZveYE6DrdZibnwke+auqlGrBPIKXFmmfVwhK/2a3ifRXJPafex2OihRzEswg2vnJNkcjDW4Glsx6vUdUr9YyQp7D2pTaVHX+vRC/OgBQZoSwUd8CSyxCgeNteENY+LKsBgvu2xr2lVrw7wEkoJUSnicgDdy+p0CgYEA+aGeR2GltW+pew7h5oEsfq/JDqvVbXvmt7yf02BvOG7L3s5nk7YR2/qcjsNtdK+4T05zw3CVxQIRvz1foT/QTwdE4d5XDJiUTgRT+9XFPhdR3ry146zTS2PcdPjFv75gqVYKvF4yfRKLL7O+Rp5Y3KMVABhrm1e2z+EwEdFjkAMCgYEA6Y3+OmQcXcTSwMXfJfpmuW52EgbgSGvEm9vmOe8xgt1+U/FcC77KsGeh5eH8l+xd4FEoKetcjwlhdjwR6FxDWJsDBQi7hMSGLkA5UTA0Po11qs4WvBfore9Zmef+Yhb/NwX+QntdCI4n8ajm18UcMvrGezxqPuwyPWKDJiIC58cCgYAP3Fj2KBojQQj/rJ5lyudM1VZs/DX/UtQB8JYnFAV9DG0fpvWlyPexhmbUG06lD1UilNV+IXUio1MFV5zv3eIaY1fZEgtt3XPu0Q+U/KwfmdO11z+nS5/RNnMXa4cE+8+gcrsT5NhIYhk92qnISt9ShXocG3Ea2aPf6WrodulgiQKBgF3SW7lrM/X7NkqYcn8YKyH8nNO7DWgqWq3d1YuaagJPJgtknvxc5aGdz+zALq99FW0iTQch9GnFc/CCSxNT1P4IL1tbWbEJHXoA9MWHnsUuIIHADmP7Gs6coxrvlkIjSNz6vFxKoGHqcWNj3W/6T8yu7wLcjzW9vqToKRUtfotLAoGAXGBp1NiiGCQnDXYSKWQ9CBp5U7nnxm7fkXUx3KHEV+4vrSpAb+NHcdWL46kfeb2z7XLV8wT9yd69xf1SneERwHrp/kdnSXkvzXIu0Rb7fpiBKWdQBsAsxRC9dAQ8iINPUu/308pqVs8xrDGhy4jbLt3tLu2ORWXaozA4Ll1+iKo=',
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