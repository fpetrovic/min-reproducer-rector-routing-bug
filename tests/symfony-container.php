<?php

use App\Kernel;

$appKernel = new Kernel('test', false);
$appKernel->boot();

return $appKernel->getContainer();