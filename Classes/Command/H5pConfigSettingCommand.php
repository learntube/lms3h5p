<?php
/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types = 1);

namespace LMS3\Lms3h5p\Command;

use LMS3\Lms3h5p\H5PAdapter\TYPO3H5P;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

/**
 * H5P Config Setting Command
 *
 * @author Sagar Desai <sagar.desai@lms3.de>
 * (c) 2019 LEARNTUBE! GmbH - Contact: mail@learntube.de
 *
 * The H5P software is licensed under the MIT license.
 * Please visit: https://h5p.org/MIT-licensed
 *
 * H5P is a brandmark of Joubel AS - Contact: https://joubel.com/
 */
class H5pConfigSettingCommand extends Command
{
    protected array $settings;

    public function __construct(
        private readonly ConfigurationManagerInterface $configurationManager,
    ){
        parent::__construct();

        $this->settings = $this->configurationManager->getConfiguration(
            ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS,
            'Lms3h5p',
            'Pi1'
        );
    }

    public function configure(): void
    {
        $info = 'Run this command to add required configuration settings';

        $this->setDescription($info);
    }

    /**
     * Add h5p settings in database table
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $interface = TYPO3H5P::getInstance()->getH5PInstance();

        if (empty($this->settings['config'])) {
            return Command::FAILURE;
        }

        foreach ($this->settings['config'] as $name => $value) {
            $interface->setOption($name, $value);
        }

        return Command::SUCCESS;
    }
}
