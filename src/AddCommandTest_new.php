<?php
namespace Console;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class AddCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);

        $application->add(new AddCommand());

        $command = $application->find('app:add');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command'=>$command->getName(),
            // pass arguments to the helper
            'numbers_to_add'=>'2.5,3.2'
        ));

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('5.7', $output);        
    }
}