<div class="col-md-4 mt-2 searchbox-container">
    <i class="ti ti-search text-white search-icon" id="searchIcon"></i>
    <form>
        <div class="search-box top-0">
            <i class="ti ti-search text-white search-icon" wire:click="submit"></i>
            <input type="text" placeholder="{{ __('global.search_here') }}..." wire:model="search" />
        </div>
    </form>
 </div>