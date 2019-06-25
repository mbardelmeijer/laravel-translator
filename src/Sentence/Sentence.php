<?php declare(strict_types=1);

namespace Translator\Sentence;

class Sentence
{
    /** @var string */
    private $key;

    /** @var string */
    private $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
