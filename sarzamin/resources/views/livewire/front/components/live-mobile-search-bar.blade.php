<div>
    <form class="d-lg-none ms-auto my-2 my-lg-0">
        <div class="d-flex px-3">
            <input class="form-control me-2" type="search" wire:model="search" placeholder="{{ __('global.search_here') }}" aria-label="Search">
            <button class="btn btn-outline-success" type="button" wire:click="submit">{{ __('global.search') }}</button>
        </div>
    </form>
</div>