# Disable Search Engine

Disable default search engine in Magento2 and catalog search fulltext indexing.

## Purpose

When catalog search and display are not handled by your Magento it could be redundant to integrate ES in your architecture.

You may have a PIM dedicated for this, or maybe you are designing a microservice architecture, you want to smooth the Magento monolith aspect etc...

Natively Magento do not offer the possibility to completely disable ElasticSearch, this module made it possible.

## What it does

- Make Elasticsearch service no longer required to install and run Magento2.
- Set value "none" as default search engine
- Return empty response from front-end queries
- Uninstall magento modules:
    - magento/module-elasticsearch-catalog-permissions
    - magento/module-inventory-elasticsearch
    - magento/module-elasticsearch
    - magento/module-elasticsearch-6
    - magento/module-elasticsearch-7

You should have no issue with indexation, compilation and even front-end research, which should always return no result.

## Compatibility

| Magento    | v2.3   | v2.4.3 | v2.4.4 |
|------------|--------|--------|--------|
| module DSE | ~0.0.0 | ~0.1.0 | ~0.2.0 |

### Notes
- v0.1.0: Adding indexer handler (Magento 2.4.3)
- v0.2.0: magento/module-advanced-search has been reintroduced due to a dependency in magento/module-catalog-graph-ql (Magento 2.4.4).


## Installation
```
composer require zepgram/module-disable-search-engine
bin/magento module:enable Zepgram_DisableSearchEngine
bin/magento setup:upgrade
```

## Issue

If you encountered an issue, please report it on this GitHub repository.