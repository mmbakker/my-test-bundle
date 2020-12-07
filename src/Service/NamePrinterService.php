<?php declare(strict_types=1);

namespace MichielBakker\MyTestBundle\Service;

/**
 * Name printer, it autowires.
 *
 * @TODO: make dependency injection (services.yaml) work.
 * @TODO: add configuration to services.yaml file.
 */
class NamePrinterService
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function printMessage(string $name): void
    {
        printf('%s %s!', $this->prefix, $name);
    }
}
