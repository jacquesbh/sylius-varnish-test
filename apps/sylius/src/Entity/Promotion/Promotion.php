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

namespace App\Entity\Promotion;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Promotion as BasePromotion;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_promotion")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_promotion')]
class Promotion extends BasePromotion
{
}
