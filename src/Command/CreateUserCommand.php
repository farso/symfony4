<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:create-user')
            ->setDescription('Create a new User')
            ->setHelp('This Command allows you to create a new user')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User--Creator',
            '=============',
            '',
        ]);

        $output->writeln('Whoa!');


        $output->write('You are about to ');
        $output->write('create a user.');
        $output->writeln('');
        $output->write("Input value $input");
    }
}
