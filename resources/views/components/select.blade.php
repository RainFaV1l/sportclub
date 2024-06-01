@props([
    'name',
    'placeholder',
    'items',
])

<select name="{{ $name }}" class="py-[21px] px-[30px] text-base text-opacity-75
placeholder:font-medium placeholder:text-opacity-75
border border-dark border-opacity-25 w-full rounded appearance-none cursor-pointer text-dark">
    <option disabled selected>{{ $placeholder }}</option>
    @foreach($items as $item)
        <option value="{{ $item->schedule->id }}">{!! $item->schedule->name !!}</option>
    @endforeach
</select>
