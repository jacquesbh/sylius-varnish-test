<?php

/*
 * This file is part of a proprietary project.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Addressing\Model\Province as BaseProvince;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_province")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_province')]
class Province extends BaseProvince
{
}
