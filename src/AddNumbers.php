<?php
namespace Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Author: Kapildev Misra <kapil_misra@hotmail.com>
 */
class AddNumbers extends SymfonyCommand
{
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function addParams(InputInterface $input, OutputInterface $output)
    {     
        
        //Checks comma separated numeric argument and add numbers        
        if (strstr($input->getArgument('numbers_to_add'),',')){                    
            $params = explode(',', $input->getArgument('numbers_to_add'));
            $total = 0;
            foreach ($params as $key => $value) {
                if (is_numeric($value)){ 
                    $total += $value;
                } else {
                    $output -> write('Invalid params');
                    exit(1);        
                }
            }
            $output -> write($total);
        } else {
            $output -> write('Invalid params');
        }
        
    }
    
}