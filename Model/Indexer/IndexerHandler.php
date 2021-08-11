<?php

declare(strict_types=1);

/**
 * Copyright © Zepgram, Inc. All rights reserved.
 */

namespace Zepgram\DisableSearchEngine\Model\Indexer;

class IndexerHandler implements \Magento\Framework\Indexer\SaveHandler\IndexerInterface
{
    public function saveIndex($dimensions, \Traversable $documents)
    {
        return $this;
    }

    public function deleteIndex($dimensions, \Traversable $documents)
    {
        return $this;
    }

    public function cleanIndex($dimensions)
    {
        return $this;
    }

    public function isAvailable($dimensions = [])
    {
        return true;
    }
}
