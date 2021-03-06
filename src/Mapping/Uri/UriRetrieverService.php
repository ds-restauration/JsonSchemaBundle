<?php

namespace Soyuka\JsonSchemaBundle\Mapping\Uri;

use JsonSchema\Uri\Retrievers\UriRetrieverInterface;
use JsonSchema\Uri\UriRetriever as BaseRetriever;

class UriRetrieverService implements UriRetrieverServiceInterface
{
    /**
     * @var BaseRetriever
     */
    protected $retriever = null;

    public function __construct($retrieverClass)
    {
        $this->retriever = new $retrieverClass();
    }

    /**
     * {@inheritdoc}
     */
    public function confirmMediaType($uriRetriever, $uri)
    {
        $this->retriever->confirmMediaType($uriRetriever, $uri);
    }

    /**
     * {@inheritdoc}
     */
    public function getUriRetriever()
    {
        return $this->retriever->getUriRetriever();
    }

    /**
     * {@inheritdoc}
     */
    public function resolvePointer($jsonSchema, $uri)
    {
        return $this->retriever->resolvePointer($jsonSchema, $uri);
    }

    /**
     * {@inheritdoc}
     */
    public function retrieve($uri, $baseUri = null)
    {
        return $this->retriever->retrieve($uri, $baseUri);
    }

    /**
     * {@inheritdoc}
     */
    public function setUriRetriever(UriRetrieverInterface $uriRetriever)
    {
        $this->retriever->setUriRetriever($uriRetriever);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function parse($uri)
    {
        return $this->retriever->parse($uri);
    }

    /**
     * {@inheritdoc}
     */
    public function generate(array $components)
    {
        return $this->retriever->generate($components);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve($uri, $baseUri = null)
    {
        return $this->retriever->resolve($uri, $baseUri);
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($uri)
    {
        return $this->retriever->isValid($uri);
    }
}
