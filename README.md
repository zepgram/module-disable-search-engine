# Disable Search Engine for Magento 2

This module disables the default Magento 2 catalog search engine and related fulltext indexing—ideal for setups where search is handled outside of Magento (e.g., via a PIM, custom microservices, custom Elasticsearch implementation etc.).

## 🧭 Purpose

Magento 2 requires Elasticsearch or OpenSearch by default, even if your architecture does not use it for product search or catalog visibility.

This module **completely disables Magento’s native search engine requirement**, allowing you to:
- Simplify Magento's architecture
- Avoid unnecessary Elasticsearch & OpenSearch dependencies
- Prevent unwanted background processes like search indexation

Natively Magento do not offer the possibility to completely disable ElasticSearch, this module does.

## ✅ What it does

- Make Elasticsearch service no longer required to install and run Magento2.
- Set value "none" as default search engine
- Returns empty search results for all frontend catalog search queries
- Since Magento 2 Product Listing Pages (PLPs) rely on the search engine to fetch and filter products:
    - All PLPs will return no products when this module is enabled.
    - You must implement a custom product listing mechanism (via GraphQL, REST, or direct DB access) in your frontend or headless architecture.
- Uninstall magento modules:
    - magento/module-elasticsearch-catalog-permissions
    - magento/module-elasticsearch-catalog-permissions-graph-ql
    - magento/module-inventory-elasticsearch
    - magento/module-elasticsearch
    - magento/module-elasticsearch-6
    - magento/module-elasticsearch-7
    - magento/module-elasticsearch-8
    - magento/module-open-search

You can continue to index, compile, and run Magento without errors.

## 🧩 Compatibility

| Magento Version | v2.3.0 | v2.4.3 | v2.4.4 | v2.4.6 | v2.4.8
|-----------------|--------|--------|--------|--------|--------
| Module Version  | ~0.0.0 | ~0.1.0 | ~0.2.0 | ~0.3.0 | ~0.4.0

### Version Notes
- v0.1.0: adding indexer handler (Magento 2.4.3)
- v0.2.0: Reintroduced `magento/module-advanced-search` due to dependency with `catalog-graph-ql` (Magento 2.4.4)
- v0.3.0: Added support for uninstalling `magento/module-open-search`
- v0.4.0: Added support for uninstalling `magento/module-elasticsearch-8`

## 🚀 Installation
```
composer require zepgram/module-disable-search-engine
bin/magento module:enable Zepgram_DisableSearchEngine
bin/magento setup:upgrade
```

## 🐞 Issue

If you encounter any issues, please open a ticket on the GitHub repository or create a PR. 
