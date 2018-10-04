<?php
namespace Console;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\AddNumbers;

/**
 * Author: Kapildev Misra <kapil_misra@hotmail.com>
 */
class AddCommand extends AddNumbers
{
    
    public function configure()
    {
        $this->setName('add')
            ->setDescription('Add numbers passed by user.')
            ->setHelp('This command allows you to add numbers passed as arguments in comma separated list...')
            ->addArgument('numbers_to_add', InputArgument::REQUIRED, 'Comma separated list of numbers.');
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->addParams($input, $output);
    }
}