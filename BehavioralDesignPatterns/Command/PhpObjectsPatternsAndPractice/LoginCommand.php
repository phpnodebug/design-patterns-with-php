<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

// 具体命令类
class LoginCommand extends Command
{
    public function execute(CommandContext $context) : bool
    {
        $manager = Registry::getAccessManager();
        $user = $context->get('username');
        $pass = $context->get('password');
        $userInfo = $manager->login($user, $pass);

        if (is_null($userInfo)) {
            $context->setError($manager->getError());
            return false;
        }

        $context->addParam('user', $userInfo);
        return true;
    }
}