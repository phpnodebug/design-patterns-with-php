<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class StereoOffCommand implements Command
{
    public $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute() : void
    {
        $this->stereo->off();
    }

    public function undo() : void
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(10);
    }
}