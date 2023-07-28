<?php

declare(strict_types=1);

namespace Tools\Makers;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;

class ModelClassesMaker extends AbstractMaker
{
    protected string $baseName;

    public static function getCommandName(): string
    {
        return 'make:model_classes';
    }

    public static function getCommandDescription(): string
    {
        return 'Generates model and related classes for use in the Mastodon API client';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        $command->addArgument(
            'base-name',
            InputArgument::REQUIRED,
            'Specify the base name for the entity',
        );

        $command->addArgument(
            'concrete-request-name',
            InputArgument::OPTIONAL,
            'Specify an optional request class name to create for this entity',
        );
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
        $baseName = $input->getArgument('base-name');
        $this->baseName = str_replace('Model', '', $baseName);

        $modelClassNameDetails = $generator->createClassNameDetails(
            $this->baseName,
            'Models',
            'Model',
        );
        $requestClassNameDetails = $generator->createClassNameDetails(
            $this->baseName,
            'Requests',
            'Request',
        );
        $resultClassNameDetails = $generator->createClassNameDetails(
            $this->baseName,
            'Results',
            'Result',
        );

        $defaultVars = [
            'modelClassFull' => $modelClassNameDetails->getFullName(),
            'modelClassShort' => $modelClassNameDetails->getShortName(),
            'requestClassFull' => $requestClassNameDetails->getFullName(),
            'requestClassShort' => $requestClassNameDetails->getShortName(),
            'resultClassFull' => $resultClassNameDetails->getFullName(),
            'resultClassShort' => $resultClassNameDetails->getShortName(),
        ];

        $generator->generateClass(
            $modelClassNameDetails->getFullName(),
            'tools/templates/Model.tpl.php',
            $defaultVars,
        );

        $generator->generateClass(
            $requestClassNameDetails->getFullName(),
            'tools/templates/Request.tpl.php',
            array_merge(
                $defaultVars,
                [
                    'useStatements' => new UseStatementGenerator([
                        RequestInterface::class,
                        $resultClassNameDetails->getFullName(),
                    ]),
                ],
            ),
        );

        $generator->generateClass(
            $resultClassNameDetails->getFullName(),
            'tools/templates/Result.tpl.php',
            $defaultVars + [
                'useStatements' => new UseStatementGenerator([
                    ResultInterface::class,
                    $modelClassNameDetails->getFullName(),
                ]),
            ],
        );

        if (!empty($input->getArgument('concrete-request-name'))) {
            $concreteRequestClassNameDetails = $generator->createClassNameDetails(
                $input->getArgument('concrete-request-name'),
                'Requests',
                'Request',
            );

            $generator->generateClass(
                $concreteRequestClassNameDetails->getFullName(),
                'tools/templates/ConcreteRequest.tpl.php',
                $defaultVars + [
                    'useStatements' => new UseStatementGenerator([
                        RequestInterface::class,
                    ]),
                ],
            );
        }

        $generator->writeChanges();

        $this->writeSuccessMessage($io);
        $io->text('Next: define the properties and arguments, and maybe implement the interfaces!');
    }

    protected function generateModel(string $className, Generator $generator): void
    {
    }
}
