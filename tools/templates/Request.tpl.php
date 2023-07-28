<?php echo "<?php\n"; ?>

declare(strict_types=1);

namespace <?php echo $namespace; ?>;

<?php echo $useStatements; ?>

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\<?php echo $resultClassFull; ?>>
 */
abstract class AccountRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return <?php echo $resultClassShort; ?>::class;
    }
}
