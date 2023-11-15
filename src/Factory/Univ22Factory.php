<?php

namespace App\Factory;

use App\Entity\Univ22;
use App\Repository\Univ22Repository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Univ22>
 *
 * @method        Univ22|Proxy create(array|callable $attributes = [])
 * @method static Univ22|Proxy createOne(array $attributes = [])
 * @method static Univ22|Proxy find(object|array|mixed $criteria)
 * @method static Univ22|Proxy findOrCreate(array $attributes)
 * @method static Univ22|Proxy first(string $sortedField = 'id')
 * @method static Univ22|Proxy last(string $sortedField = 'id')
 * @method static Univ22|Proxy random(array $attributes = [])
 * @method static Univ22|Proxy randomOrCreate(array $attributes = [])
 * @method static Univ22Repository|RepositoryProxy repository()
 * @method static Univ22[]|Proxy[] all()
 * @method static Univ22[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Univ22[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Univ22[]|Proxy[] findBy(array $attributes)
 * @method static Univ22[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Univ22[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class Univ22Factory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'adresses' => self::faker()->text(255),
            'email' => self::faker()->text(255),
            'teacher' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Univ22 $univ22): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Univ22::class;
    }
    
}
