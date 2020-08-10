<?php

declare(strict_types=1);

namespace App\Application\Actions\Lieu;

use Psr\Http\Message\ResponseInterface as Response;

class ListLieuxAction extends LieuAction
{
    protected function action(): Response
    {
        $allLieux = $this->lieu->all();
        return $this->respondWithData($allLieux);
    }
}
