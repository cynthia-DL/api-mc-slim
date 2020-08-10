<?php

declare(strict_types=1);


namespace App\Application\Actions\Lieu;

use Psr\Http\Message\ResponseInterface as Response;
use App\Domain\Lieu\Lieu;

class NewLieuAction extends LieuAction
{
    protected function action(): Response
    {
        $data = $this->request->getParsedBody();
        $lieu = new Lieu;
        $lieu->timestamps = false;
        $lieu->nom = $data["nom"];
        $lieu->monde = $data["monde"];
        $lieu->x = $data["x"];
        $lieu->y = $data["y"];
        $lieu->z = $data["z"];
        $lieu->joueur = $data["joueur"];
        $lieu->save();
        return $this->respondWithData($lieu);
    }
}
