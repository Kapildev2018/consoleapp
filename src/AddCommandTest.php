<?php
namespace Console;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
//use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Application;

class AddCommandTest extends TestCase
{
    public function testExecute()
    {
        // mock the Kernel or create one depending on your needs
        //$kernel = self::bootKernel();
        $application = new Application($kernel);
        $application->add(new AddCommand());

        $command = $application->find('app:add');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
                'command'  => $command->getName(),
                // pass arguments to the helper
                'numbers_to_add' => '2.5,3.2'
            )
        );

        $output = $commandTester->getDisplay();
        $this->assertContains('5.7', $output);
    }
}