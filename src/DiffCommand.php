<?php
namespace Console;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\DiffNumbers;

/**
 * Author: Kapildev Misra <kapil_misra@hotmail.com>
 */
class DiffCommand extends DiffNumbers
{
    
    public function configure()
    {
        $this->setName('diff')
            ->setDescription('Substract numbers passed by user.')
            ->setHelp('This command allows you to substract numbers passed as arguments in comma separated list...')
            ->addArgument('numbers_to_substract', InputArgument::REQUIRED, 'Comma separated list of numbers.');
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->diffParams($input, $output);
    }
}