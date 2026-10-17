<dialog class="palette" id="palette" aria-label="Search the site" data-index="<?= e(url('search-index.json')) ?>">
    <div class="palette__bar">
        <?= icon('search', 20) ?>
        <input id="palette-input" type="search" placeholder="Search services, solutions, tools… e.g. CRM, mobile app" autocomplete="off" aria-controls="palette-list">
        <button type="button" data-search-close>Esc</button>
    </div>
    <div class="palette__list" id="palette-list" role="listbox" aria-label="Results"></div>
    <div class="palette__foot">↑ ↓ to move · Enter to open</div>
</dialog>
