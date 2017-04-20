<?php declare(strict_types=1);

namespace ApiGen\Tests\ApiGen\Generator\TemplateGenerators;

use ApiGen\Generator\TemplateGenerators\IndexGenerator;
use ApiGen\Tests\AbstractContainerAwareTestCase;

final class OverviewGeneratorTest extends AbstractContainerAwareTestCase
{
    public function test(): void
    {
        /** @var IndexGenerator $overviewGenerator */
        $overviewGenerator = $this->container->getByType(IndexGenerator::class);
        $overviewGenerator->generate();

        $this->assertFileExists(TEMP_DIR . '/index.html');
    }
}
