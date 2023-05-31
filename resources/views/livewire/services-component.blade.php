<div>
    @if ($typeService == 0)
        @include('livewire.services.acheter')
    @elseif($typeService == 1)
        @include('livewire.services.mettre_en_location')
    @elseif($typeService == 2)
        @include('livewire.services.vendre')
    @elseif($typeService == 3)
            @include('livewire.services.louer')
    @endif


    @push('scripts')
    <script>
        var cities = @json($cities);
        $('#city-input').typeahead({
            source: cities, 
            autoSelect: true
        });
    </script>
    @endpush
</div>
