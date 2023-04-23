<?php
// SPDX-License-Identifier: BSD-3-Clause

declare(strict_types=1);

namespace Nbgrp\OneloginSamlBundle\Controller;

use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class Logout
{
    public function __invoke(): void
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
