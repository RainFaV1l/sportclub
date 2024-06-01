<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

use MoonShine\Fields\DateRange;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Range;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Schedule>
 */
class ScheduleResource extends ModelResource
{
    protected string $model = Schedule::class;

    protected string $title = 'Расписания';

    protected string $column = 'name';

    public function fields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
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
            Text::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
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
            TinyMce::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
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
            'name' => 'required|string|max:255',
        ];
    }

    public function import(): ?ImportHandler
    {
        return ImportHandler::make('Import')
            // Disc selection
            ->disk('public')
            // Selecting a directory to save the import file
            ->dir('/imports/schedules')
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
            ->dir('/exports/schedules')
            // If you need to export in csv format
            ->csv()
            // Separator for csv
            ->delimiter(',');
    }

    public function filters(): array
    {
        return [
            Text::make('Название', 'name'),
            DateRange::make('Дата обновления', 'updated_at'),
            DateRange::make('Дата создания', 'created_at'),
        ];
    }

    public function search(): array
    {
        return ['id', 'name'];
    }
}
