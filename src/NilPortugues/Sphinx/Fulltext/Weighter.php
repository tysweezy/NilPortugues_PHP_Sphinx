<?php
namespace NilPortugues\Sphinx\Fulltext;

/**
 * Class Weighter
 * @package NilPortugues\Sphinx\Fulltext
 */
class Weighter
{

    /**
     * DEPRECATED; Throws exception. Use SetFieldWeights() instead.
     *
     * @param  array      $weights
     * @throws \Exception
     */
    public function setWeights(array $weights)
    {
        unset($weights);
        throw new \Exception("setWeights method is deprecated. Use SetFieldWeights() instead.");

    }

    /**
     * Bind per-field weights by name.
     *
     * @param $weights
     * @return SphinxClient
     */
    public function setFieldWeights(array $weights)
    {
        assert(is_array($weights));
        foreach ($weights as $name => $weight) {
            assert(is_string($name));
            assert(is_int($weight));
        }
        $this->_fieldweights = $weights;

        return $this;
    }

    /**
     * Bind per-index weights by name.
     *
     * @param  array        $weights
     * @return SphinxClient
     */
    public function setIndexWeights(array $weights)
    {
        assert(is_array($weights));
        foreach ($weights as $index => $weight) {
            assert(is_string($index));
            assert(is_int($weight));
        }
        $this->_indexweights = $weights;

        return $this;
    }
}
 