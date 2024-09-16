<?php
namespace Nishant\Cmodule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class WelcomeMessage implements ArgumentInterface
{
    /**
     * Get a welcome message based on the current time.
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        $hour = date('G');
        if ($hour < 12) {
            return __('Good Morning Buddy!');
        } elseif ($hour < 17) {
            return __('Good Afternoon!');
        } else {
            return __('Good Night!');
        }
    }
}
