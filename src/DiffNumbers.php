<?php
namespace Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Author: Kapildev Misra <kapil_misra@hotmail.com>
 */
class DiffNumbers extends SymfonyCommand
{
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function diffParams(InputInterface $input, OutputInterface $output)
    {     
        
        //Checks comma separated numeric argument and add numbers        
        if (strstr($input->getArgument('numbers_to_substract'),',')){                    
            $params = explode(',', $input->getArgument('numbers_to_substract'));
            if (is_array($params)) {
                foreach ($params as $key => $value) {
                    if (!is_numeric($value)){                    
                        $output -> write('Invalid params');
                        exit(1);        
                    }
                }
                $diff = $params[0] - $params[1];
            }
            $output -> write($diff);
        } else {
            $output -> write('Invalid params');
        }
        
    }
    
}