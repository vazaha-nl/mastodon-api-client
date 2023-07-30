<?php declare(strict_types=1);
echo "<?php\n"; ?>

declare(strict_types=1);

namespace <?php echo $namespace; ?>;

<?php echo $useStatements; ?>

/**
 * @property \Illuminate\Support\Collection<array-key, \<?php echo $modelClassFull; ?>>    $models
 * @property \<?php echo $requestClassFull; ?> $request
 *
 * @method null|\<?php echo $modelClassFull; ?>   getModel()
 * @method \Illuminate\Support\Collection<array-key, \<?php echo $modelClassFull; ?>> getModels()
 * @method null|\<?php echo $resultClassFull; ?> getNextResult()
 * @method null|\<?php echo $resultClassFull; ?> getPreviousResult()
 */
class <?php echo $class_name; ?> extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return <?php echo $modelClassShort; ?>::class;
    }
}
