<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\ApplicationResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ScheduleResource;
use App\MoonShine\Resources\SectionResource;
use App\MoonShine\Resources\SectionScheduleResource;
use App\MoonShine\Resources\SubscribeResource;
use App\MoonShine\Resources\UserResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),
            MenuGroup::make('Пользователи', [
                MenuItem::make( 'Пользователи', new UserResource(), 'heroicons.users'),
                MenuItem::make( 'Рассылка', new SubscribeResource(), 'heroicons.chat-bubble-left-right'),
                MenuItem::make( 'Заявки', new ApplicationResource(), 'heroicons.clipboard-document-list'),
            ]),
            MenuGroup::make('Основное', [
                MenuItem::make( 'Категории', new CategoryResource(), 'heroicons.view-columns'),
                MenuItem::make( 'Секции', new SectionResource(), 'heroicons.squares-2x2'),
                MenuItem::make( 'Расписания', new ScheduleResource(), 'heroicons.calendar-days'),
                MenuItem::make( 'Расписания секций', new SectionScheduleResource(), 'heroicons.clock'),
            ]),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
