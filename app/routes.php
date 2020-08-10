<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

use App\Application\Actions\Animal\ListAnimalsAction;
use App\Application\Actions\Animal\GetAnimalsAction;
use App\Application\Actions\Animal\NewAnimalAction;
use App\Application\Actions\Animal\UpdateAnimalAction;
use App\Application\Actions\Animal\DeleteAnimalAction;

use App\Application\Actions\Lieu\ListLieuxAction;
use App\Application\Actions\Lieu\GetLieuAction;
use App\Application\Actions\Lieu\NewLieuAction;

use App\Application\Actions\Joueur\ListJoueursAction;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/animals', function (Group $group) {
        $group->get('', ListAnimalsAction::class);
        $group->get('/{id}', GetAnimalsAction::class);
        $group->post('', NewAnimalAction::class);
        $group->put('/{id}', UpdateAnimalAction::class);
        $group->delete('/{id}', DeleteAnimalAction::class);
    });

    $app->group('/lieux', function (Group $group) {
        $group->get('', ListLieuxAction::class);
        $group->get('/{id}', GetLieuAction::class);
        $group->post('', NewLieuAction::class);
        // $group->put('/{id}', UpdateLieuAction::class);
        // $group->delete('/{id}', DeleteLieuAction::class);
    });

    $app->group('/joueurs', function (Group $group) {
        $group->get('', ListJoueursAction::class);
        // $group->get('/{id}', GetJoueursAction::class);
        // $group->post('', NewJoueurAction::class);
        // $group->put('/{id}', UpdateJoueurAction::class);
        // $group->delete('/{id}', DeleteJoueurAction::class);
    });
};
