<?php

namespace Vazaha\Mastodon\Makers;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

class ModelClassesMaker extends AbstractMaker
{
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
            'model-class',
            InputArgument::REQUIRED,
            'Specify the name for the model class',
        );
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        $modelClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('controller-class'),
            'Vazaha\\Mastodon\\Models\\',
            'Model'
        );

        // $useStatements = new UseStatementGenerator([
        //     // niks
        // ]);

        // $templateName = Str::asFilePath($modelClassNameDetails->getRelativeNameWithoutSuffix()).'/index.html.twig';
        $controllerPath = $generator->generateController(
            $modelClassNameDetails->getFullName(),
            'templates/Model.tpl.php',
            [
                // 'use_statements' => $useStatements,
                // 'route_path' => Str::asRoutePath($modelClassNameDetails->getRelativeNameWithoutSuffix()),
                // 'route_name' => Str::asRouteName($modelClassNameDetails->getRelativeNameWithoutSuffix()),
                // 'template_name' => $templateName,
            ]
        );

        // if ($withTemplate) {
        //     $generator->generateTemplate(
        //         $templateName,
        //         'controller/twig_template.tpl.php',
        //         [
        //             'controller_path' => $controllerPath,
        //             'root_directory' => $generator->getRootDirectory(),
        //             'class_name' => $modelClassNameDetails->getShortName(),
        //         ]
        //     );
        // }

        $generator->writeChanges();

        $this->writeSuccessMessage($io);
        $io->text('Next: Open your new model class and add some properties!');
    }
}
