<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\Users::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
       'admin' => \Middlewares\AdminMiddleware::class,
   ],

   'validators' => [
        'required' => Validators\RequireValidator::class,
        'unique' => Validators\UniqueValidator::class,
        'count' => Validators\CountValidator::class

   ],

   'routeAppMiddleware' => [
    'trim' => \Middlewares\TrimMiddleware::class,
 ],
 
'routeAppMiddleware' => [
   'trim' => \Middlewares\TrimMiddleware::class,
   'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
],

'routeAppMiddleware' => [
    'csrf' => \Middlewares\CSRFMiddleware::class,
    'trim' => \Middlewares\TrimMiddleware::class,
    'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
 ],
 
];
