<?php
namespace Devall\Tabatadze\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Devall\Tabatadze\Model\CompanyRepository;
/**
 * Class CompanyTest
 */
class CompanyTest extends Command
{
    const NAME = 'name';
    /**
     * @var CompanyRepository
     */
    private $companyRepository;

    public function __construct(
        CompanyRepository $companyRepository,
        string $name = null
    ) {
        parent::__construct($name);
        $this->companyRepository = $companyRepository;
    }

    protected function configure()
    {
        $this->setName('company:test');
        $this->setDescription('Testing Company Module.');
        parent::configure();
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Testing Companies.</info>');
        $company = $this->companyRepository->getById(1);
        $output->writeln('<info>Testing Companies again.</info>');
    }
}
