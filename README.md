# Disable Search Engine

Disable default search engine in Magento2 and catalog search fulltext indexing.

## Purpose

- Make Elasticsearch service no longer required to install and run Magento2.
- Set value "none" as default search engine
- Return empty response from front-end queries
- Uninstall magento modules:
    - magento/module-advanced-search
    - magento/module-elasticsearch-catalog-permissions
    - magento/module-elasticsearch
    - magento/module-elasticsearch-6
    - magento/module-elasticsearch-7

## Compatibility

Tested on Magento version 2.3.x and 2.4.x

You should have no issue with indexation, compilation and even front-end research, which should always return no result.

If you encountered an issue during installation, please report it on this github repository.

## Installation
```
composer require zepgram/module-disable-search-engine
bin/magento module:enable Zepgram_DisableSearchEngine
bin/magento setup:upgrade
```
