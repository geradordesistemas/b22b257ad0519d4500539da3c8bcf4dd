<?php

namespace App\Application\Schema\AlunoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchemaAlunoBundle extends Bundle
{
    /** {@inheritdoc} */
    public function getParent()
    {
        return 'ApplicationSchemaAlunoBundle';
    }
}