<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

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
 * @extends ModelResource<Section>
 */
class SectionResource extends ModelResource
{
    protected string $model = Section::class;

    protected string $title = 'Секции';

    protected string $column = 'name';

    public function fields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
            TinyMce::make('Описание', 'description')->sortable()->showOnExport()->useOnImport(),
            Number::make('Цена', 'price')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Город', 'city')->sortable()->showOnExport()->useOnImport(),
            Text::make('Адрес', 'address')->sortable()->showOnExport()->useOnImport(),
            Image::make('Изображение', 'photo')->disk('public')->dir('/sections')->showOnExport()->useOnImport(),
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())->showOnExport()->useOnImport()->sortable(),
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
            Number::make('Цена', 'price')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Город', 'city')->sortable()->showOnExport()->useOnImport(),
            Text::make('Адрес', 'address')->sortable()->showOnExport()->useOnImport(),
            Image::make('Изображение', 'photo')->disk('public')->dir('/sections')->showOnExport()->useOnImport(),
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())->showOnExport()->useOnImport()->sortable(),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable()->showOnExport(),
            Text::make('Название', 'name')->sortable()->showOnExport()->useOnImport(),
            TinyMce::make('Описание', 'description')->sortable()->showOnExport()->useOnImport(),
            Number::make('Цена', 'price')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Город', 'city')->sortable()->showOnExport()->useOnImport(),
            Text::make('Адрес', 'address')->sortable()->showOnExport()->useOnImport(),
            Image::make('Изображение', 'photo')->disk('public')->dir('/sections')->showOnExport()->useOnImport(),
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())->showOnExport()->useOnImport()->sortable(),
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
            TinyMce::make('Описание', 'description')->sortable()->showOnExport()->useOnImport(),
            Number::make('Цена', 'price')->sortable()->showOnExport()->useOnImport(),
            Text::make('Телефон', 'phone')->sortable()->showOnExport()->useOnImport(),
            Text::make('Город', 'city')->sortable()->showOnExport()->useOnImport(),
            Text::make('Адрес', 'address')->sortable()->showOnExport()->useOnImport(),
            Image::make('Изображение', 'photo')->disk('public')->dir('/sections')->showOnExport()->useOnImport(),
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())->showOnExport()->useOnImport()->sortable(),
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
            'description' => 'required|string|max:5000',
            'price' => 'required|numeric|max:1000000',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'photo' => 'nullable|image|max:8192',
            'section_category_id' => 'nullable|integer|exists:section_categories,id',
            'schedule_id' => 'nullable|integer|exists:schedules,id',
        ];
    }

    public function import(): ?ImportHandler
    {
        return ImportHandler::make('Import')
            // Disc selection
            ->disk('public')
            // Selecting a directory to save the import file
            ->dir('/imports/sections')
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
            ->dir('/exports/sections')
            // If you need to export in csv format
            ->csv()
            // Separator for csv
            ->delimiter(',');
    }

    public function filters(): array
    {
        return [
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())->searchable()->showOnExport()->useOnImport(),
            Range::make('Цена', 'price'),
            DateRange::make('Дата обновления', 'updated_at'),
            DateRange::make('Дата создания', 'created_at'),
        ];
    }

    public function search(): array
    {
        return ['id', 'name', 'description', 'price', 'phone', 'city', 'address'];
    }
}
