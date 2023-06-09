<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \App\Entity\Client implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'activity_type' => [parent::class, 'activity_type', null],
        "\0".parent::class."\0".'contact_email' => [parent::class, 'contact_email', null],
        "\0".parent::class."\0".'contact_job' => [parent::class, 'contact_job', null],
        "\0".parent::class."\0".'contact_name' => [parent::class, 'contact_name', null],
        "\0".parent::class."\0".'contact_number' => [parent::class, 'contact_number', null],
        "\0".parent::class."\0".'creation_date' => [parent::class, 'creation_date', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'jobOffers' => [parent::class, 'jobOffers', null],
        "\0".parent::class."\0".'notes' => [parent::class, 'notes', null],
        "\0".parent::class."\0".'society_name' => [parent::class, 'society_name', null],
        'activity_type' => [parent::class, 'activity_type', null],
        'contact_email' => [parent::class, 'contact_email', null],
        'contact_job' => [parent::class, 'contact_job', null],
        'contact_name' => [parent::class, 'contact_name', null],
        'contact_number' => [parent::class, 'contact_number', null],
        'creation_date' => [parent::class, 'creation_date', null],
        'id' => [parent::class, 'id', null],
        'jobOffers' => [parent::class, 'jobOffers', null],
        'notes' => [parent::class, 'notes', null],
        'society_name' => [parent::class, 'society_name', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
