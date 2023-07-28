<?php echo "<?php\n"; ?>

declare(strict_types=1);

namespace <?php echo $namespace; ?>;

<?php echo $useStatements; ?>

/**
 * @see https://link.to.docs
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\<?php echo $resultClassFull; ?>>
 */
final class GetAccountRequest extends <?php echo $requestClassShort; ?> implements RequestInterface
{
    public function __construct(
        // specify properties here
    ) {
    }

    public function getEndpoint(): string
    {
        return '/specify/endpoint/here';
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
