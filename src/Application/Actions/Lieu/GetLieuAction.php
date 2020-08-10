<?php

declare(strict_types=1);

namespace App\Application\Actions\Lieu;

use Psr\Http\Message\ResponseInterface as Response;

class GetLieuAction extends LieuAction
{
    protected function action(): Response
    {
        $lieuId = (int) $this->resolveArg('id');
        $lieu = $this->lieu->find($lieuId);
        return $this->respondWithData($lieu);
    }
}
