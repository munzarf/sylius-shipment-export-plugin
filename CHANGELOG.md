# CHANGELOG

## v0.7.0 (2025-02-07)

- Support for Sylius 1.12.*|1.13.*, Symfony ^6.0
- Drop support for Sylius 1.11.*, Symfony 5.*

## v0.6.0 (2025-02-07)

- Support for Sylius 1.11, Symfony ^5.4
- Drop support for Sylius 1.8.*|1.9.*|1.10.*, Symfony 4.4.*|5.2.*|5.3.*, PHP 7.*

## v0.5.0 (2021-10-05)

#### Details

- Support for Sylius 1.8|1.9|1.10, Symfony ^4.4|^5.2, PHP ^7.3|^8.0
- Change namespace from `MangoSylius\ShipmentExportPlugin` to `ThreeBRS\SyliusShipmentExportPlugin`
- *BC break: Version v0.5.0 is NOT compatible with previous versions due to namespace change*

## v0.4.0 (2020-02-11

#### Details

- Extends `ShipmentExporterInterface` by `getHeaders`

## v0.3.0 (2019-12-11)

#### Details

- Export for offline payment method or payment completed for non offline method
- Change dobírka logic
- Decomposition index.html.twig
