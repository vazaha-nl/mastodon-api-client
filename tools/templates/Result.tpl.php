<?= "<?php\n"; ?>

declare(strict_types=1);

namespace <?= $namespace; ?>;

<?= $useStatements; ?>

/**
 * @property array<\<?= $modelClassFull; ?>>    $models
 * @property \<?= $requestClassFull; ?> $request
 *
 * @method null|\<?= $modelClassFull; ?>   getModel()
 * @method array<\<?= $modelClassFull; ?>> getModels()
 * @method null|\<?= $resultClassFull; ?> getNextResult()
 * @method null|\<?= $resultClassFull; ?> getPreviousResult()
 */
class <?= $class_name; ?> extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return <?= $modelClassShort; ?>::class;
    }
}
