<?php

declare(strict_types=1);

namespace App\Application\Actions\Lieu;

use App\Application\Actions\Action;
use App\Domain\Lieu\Lieu;
use Psr\Log\LoggerInterface;

abstract class LieuAction extends Action
{
    /**
    * @var Lieu
    */
    protected $lieu;
    
    /**
    * @param LoggerInterface $logger
    * @param Lieu  $lieu
    */
    public function __construct(LoggerInterface $logger, Lieu $lieu)
    {
        parent::__construct($logger);
        $this->lieu = $lieu;
    }
}
