<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectionSchedule;

use MoonShine\Fields\DateRange;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<SectionSchedule>
 */
class SectionScheduleResource extends ModelResource
{
    protected string $model = SectionSchedule::class;

    protected string $title = 'Расписания секций';

    public function fields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            BelongsTo::make('Секция', 'section', resource: new SectionResource())->sortable()->showOnExport()->useOnImport(),
            BelongsTo::make('Расписание', 'schedule', resource: new ScheduleResource())->searchable()->showOnExport()->useOnImport()->sortable(),
            Number::make('Количество человек', 'number_of_people')->showOnExport()->useOnImport()->sortable(),
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
            BelongsTo::make('Секция', 'section', resource: new SectionResource())->sortable()->showOnExport()->useOnImport(),
            BelongsTo::make('Расписание', 'schedule', resource: new ScheduleResource())->searchable()->showOnExport()->useOnImport()->sortable(),
            Number::make('Количество человек', 'number_of_people')->showOnExport()->useOnImport()->sortable(),
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
            BelongsTo::make('Секция', 'section', resource: new SectionResource())->sortable()->showOnExport()->useOnImport(),
            BelongsTo::make('Расписание', 'schedule', resource: new ScheduleResource())->searchable()->showOnExport()->useOnImport()->sortable(),
            Number::make('Количество человек', 'number_of_people')->showOnExport()->useOnImport()->sortable(),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            BelongsTo::make('Секция', 'section', resource: new SectionResource())->sortable()->showOnExport()->useOnImport(),
            BelongsTo::make('Расписание', 'schedule', resource: new ScheduleResource())->searchable()->showOnExport()->useOnImport()->sortable(),
            Number::make('Количество человек', 'number_of_people')->showOnExport()->useOnImport()->sortable(),
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
            'section_id' => 'nullable|integer|exists:sections,id',
            'schedule_id' => 'nullable|integer|exists:schedules,id',
            'number_of_people' => 'nullable|integer|min:1|max:100',
        ];
    }

    public function import(): ?ImportHandler
    {
        return ImportHandler::make('Import')
            // Disc selection
            ->disk('public')
            // Selecting a directory to save the import file
            ->dir('/imports/section-schedules')
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
            ->dir('/exports/section-schedules')
            // If you need to export in csv format
            ->csv()
            // Separator for csv
            ->delimiter(',');
    }

    public function filters(): array
    {
        return [
            BelongsTo::make('Секция', 'section', resource: new SectionResource())->searchable()->sortable()->showOnExport()->useOnImport(),
            BelongsTo::make('Расписание', 'schedule', resource: new ScheduleResource())->searchable()->showOnExport()->useOnImport()->sortable(),
            DateRange::make('Дата обновления', 'updated_at'),
            DateRange::make('Дата создания', 'created_at'),
        ];
    }

    public function search(): array
    {
        return ['id', 'full_name', 'phone', 'email'];
    }
}
