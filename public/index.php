<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
header("Access-Control-Allow-Origin: *");

$app->get('/plataformas', function (Request $request, Response $response, array $args) {
  $plataformas = [
    [
      'nome' => 'SóEducador',
      'link' => 'https://soeducador.com.br/',
      'logo' => '/public/img/soeducador.png'
    ],
    [
      'nome' => 'Estetus',
      'link' => 'https://estetus.com.br/',
      'logo' => '/public/img/estetus.png'
    ],
    [
      'nome' => 'Eduhot',
      'link' => 'https://eduhot.com.br/',
      'logo' => '/public/img/eduhot.png'
    ],
    [
      'nome' => 'Edooker',
      'link' => 'https://edooker.com.br/',
      'logo' => '/public/img/edooker.png'
    ],
    [
      'nome' => 'EducDay',
      'link' => 'https://educday.com.br/',
      'logo' => '/public/img/educday.png'
    ],
    [
      'nome' => 'Zamply',
      'link' => 'https://educday.com.br/',
      'logo' => '/public/img/zamply.png'
    ]
  ];
  $response->getBody()->write(json_encode($plataformas));
  return $response->withHeader("Content-type", "application/json");
  return $response;
});

$app->get('/ferramentas', function (Request $request, Response $response, array $args) {
  $ferramentas = [
    [
      'nome' => 'email',
      'link' => 'https://mail.google.com/',
      'logo' => '/public/img/email.png'
    ],
    [
      'nome' => 'Jira',
      'link' => 'https://www.atlassian.com/br/software/jira',
      'logo' => '/public/img/jira.png'
    ],
    [
      'nome' => 'Asana',
      'link' => 'https://asana.com/pt',
      'logo' => '/public/img/asana.png'
    ],
    [
      'nome' => 'GoogleDrive',
      'link' => 'https://drive.google.com/',
      'logo' => '/public/img/drive.png'
    ]
  ];
  $response->getBody()->write(json_encode($ferramentas));
  return $response->withHeader("Content-type", "application/json");
  return $response;
});

$app->run();
