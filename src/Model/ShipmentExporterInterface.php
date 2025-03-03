<?php

declare(strict_types=1);

namespace ThreeBRS\SyliusShipmentExportPlugin\Model;

use Sylius\Component\Core\Model\ShipmentInterface;

interface ShipmentExporterInterface
{
    /**
     * @return array<string>
     */
    public function getShippingMethodsCodes(): array;

    /**
     * @param array<string, mixed> $questionsArray
     *
     * @return array<int|string, bool|float|int|string|null>
     */
    public function getRow(ShipmentInterface $shipment, array $questionsArray): array;

    public function getDelimiter(): string;

    /**
     * @return array<Question>|null
     */
    public function getQuestionsArray(): ?array;

    /**
     * @return array<array<int|string, bool|float|int|string|null>>|null
     */
    public function getHeaders(): ?array;
}
