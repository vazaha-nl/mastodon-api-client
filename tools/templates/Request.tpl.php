<?= "<?php\n"; ?>

declare(strict_types=1);

namespace <?= $namespace; ?>;

<?= $useStatements; ?>

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\<?= $resultClassFull; ?>>
 */
abstract class AccountRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return <?= $resultClassShort; ?>::class;
    }
}
