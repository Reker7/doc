<x-page title="Title" :sectionMenu="[]">

<x-p>
    Если вы хотите разместить стилизованный заголовок,
    то можно воспользоваться компонентом <code>moonshine::title</code>.
</x-p>

<x-code language="blade" file="resources/views/examples/components/title.blade.php"></x-code>

<x-moonshine::grid>
    <x-moonshine::column adaptiveColSpan="12" colSpan="6">
        <x-moonshine::box>
            @include("examples/components/title")
        </x-moonshine::box>
    </x-moonshine::column>
</x-moonshine::grid>

</x-page>
