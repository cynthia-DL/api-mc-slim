<?php

declare(strict_types=1);

namespace App\Application\Actions\Joueur;

use Psr\Http\Message\ResponseInterface as Response;

class ListJoueursAction extends JoueurAction
{
    protected function action(): Response
    {
        $allJoueurs = $this->joueur->all();
        return $this->respondWithData($allJoueurs);
    }
}
