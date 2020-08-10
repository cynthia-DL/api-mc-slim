<?php

declare(strict_types=1);

namespace App\Application\Actions\Joueur;

use App\Application\Actions\Action;
use App\Domain\Joueur\Joueur;
use Psr\Log\LoggerInterface;

abstract class JoueurAction extends Action
{
    /**
    * @var Joueur
    */
    protected $joueur;
    
    /**
    * @param LoggerInterface $logger
    * @param Joueur  $Joueur
    */
    public function __construct(LoggerInterface $logger, Joueur $joueur)
    {
        parent::__construct($logger);
        $this->joueur = $joueur;
    }
}
