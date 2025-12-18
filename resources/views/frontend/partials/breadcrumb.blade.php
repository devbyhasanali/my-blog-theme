<!-- ======================= Breadcrumb Start  ============================ -->
<div class="breadcrumb_sec py-3">
    <div class="container">
        <nav>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>

                @isset($parent)
                    <li class="breadcrumb-item">
                        <a href="{{ $parentUrl ?? '#' }}">{{ $parent }}</a>
                    </li>
                @endisset

                <li class="breadcrumb-item active">
                    {{ $title ?? '' }}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- ======================= Breadcrumb End  ============================ -->
