@props(['backUrl','breadcrums'])
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    @if (!!$backUrl)
    <a href={{route($backUrl)}}>
        <span class="icon">
            <i class="icon-arrow-left">
            </i>
        </span>
    </a>
    @endif
    @if (!!$breadcrums)
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        @forelse ($breadcrums as $key => $item)

        <li>
            <a href={{route($item)}}>
                <div class="text-tiny">{{$key}}</div>
            </a>
        </li>
        @empty
        <li>
            <a href="index.html">
                <div class="text-tiny">Dashboard</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <a href="slider.html">
                <div class="text-tiny">Slider</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">New Slide</div>
        </li>
        @endforelse
    </ul>
    @endif
</div>