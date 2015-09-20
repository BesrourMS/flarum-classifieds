<?php 
/*
 * This file is part of Flarum.
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Mentions;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->subscribe('Flarum\Mentions\Listeners\');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'classifieds');
    }
}
