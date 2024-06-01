<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Fields\DateRange;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Пользователи';

    public function fields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('ФИО', 'full_name')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Email', 'email')->sortable()->showOnExport()->useOnImport(),
            Text::make('Дата обновления', 'updated_at')->sortable()->showOnExport(),
            Text::make('Дата создания', 'created_at')->sortable()->showOnExport()
        ];
    }

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('ФИО', 'full_name')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Email', 'email')->sortable()->showOnExport()->useOnImport(),
            Text::make('Дата обновления', 'updated_at')->sortable()->showOnExport(),
            Text::make('Дата создания', 'created_at')->sortable()->showOnExport()
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('ФИО', 'full_name')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Email', 'email')->sortable()->showOnExport()->useOnImport(),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('ФИО', 'full_name')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Email', 'email')->sortable()->showOnExport()->useOnImport(),
            Text::make('Дата обновления', 'updated_at')->sortable()->showOnExport(),
            Text::make('Дата создания', 'created_at')->sortable()->showOnExport()
        ];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
        ];
    }

    public function import(): ?ImportHandler
    {
        return ImportHandler::make('Import')
            // Disc selection
            ->disk('public')
            // Selecting a directory to save the import file
            ->dir('/imports/users')
            // Delete file after import
            ->deleteAfter()
            // Separator for csv
            ->delimiter(',');
    }

    public function export(): ?ExportHandler
    {
        return ExportHandler::make('Export')
            // Disc selection
            ->disk('public')
            // Selecting the directory for saving the export file
            ->dir('/exports/users')
            // If you need to export in csv format
            ->csv()
            // Separator for csv
            ->delimiter(',');
    }

    public function filters(): array
    {
        return [
            DateRange::make('Дата обновления', 'updated_at'),
            DateRange::make('Дата создания', 'created_at'),
        ];
    }

    public function search(): array
    {
        return ['id', 'full_name', 'phone', 'email'];
    }
}
